<?php
	
	function accueil(){
		$maneges = Model::factory('Manege')->find_many();
		Flight::render('accueil.php', array('images' => $maneges), 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}
	
	function news(){
		$articles = Model::factory('Article')->find_many();
		Flight::render('news.php', array('articles' => $articles), 'body_content');
		Flight::render('layout.php', array('title' => 'Nouveauté'));
	}
	
	function about(){
		$commerces = Model::factory('commerce')->find_many();
		Flight::render('about.php', array('commercant' => $commerces), 'body_content');
		Flight::render('layout.php', array('title' => 'A propos'));
	}
	
	function contact(){
		Flight::render('contact.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Contact'));
	}
	
	function connexion(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			Flight::render('administration/menu_admin.php', NULL, 'body_content');
			Flight::render('layout.php', array('title' => 'Menu Admin'));
		}
		else if (isset($_POST['login']) AND isset($_POST['pass']))
		{
			$login = $_POST['login'];
			$pass = $_POST['pass']; 
			
			$user = Model::factory('admin')
			->where('login', $login)
			->where('mdp', $pass)
			->find_one();
			
			if (isset($user->login) AND isset($user->mdp))
			{ 
				$_SESSION['login'] = $login;
				$_SESSION['pass'] = $pass;
				
				Flight::render('administration/menu_admin.php', NULL, 'body_content');
				Flight::render('layout.php', array('title' => 'Menu Admin'));
			}
			else
			{
				erreur_authentification("Erreur de connexion : mot de passe et/ou login incorrect(s).");
			}
		}	
		else
		{
			Flight::render('administration/connexion.php', NULL, 'body_content');
			Flight::render('layout.php', array('title' => 'Connexion'));
		}
	}
	
	function erreur_authentification($message){
		Flight::render('administration/erreur_authentification.php', array('message' => $message), 'body_content');
		Flight::render('layout.php', array('title' => 'Erreur'));
	}
	
	function deconnexion(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			Flight::render('administration/deconnexion.php', NULL, 'body_content');
			Flight::render('layout.php', array('title' => 'Deconnexion'));
			session_destroy();
		}
		else
		{
			erreur_authentification("Vous n'êtes pas connecté.");
		}
	}
	
	function admin(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			Flight::render('administration/menu_admin.php', NULL, 'body_content');
			Flight::render('layout.php', array('title' => 'Menu Admin'));
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}
	}
	
	function creation_compte(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			if ( isset($_POST['login']) AND isset($_POST['pass']) AND ($_POST['login'] != '') AND ($_POST['pass'] != ''))
			{
				if (($_POST['pass']) == ($_POST['conf']))
				{
					$user = Model::factory('admin')->create();
					$user->login = $_POST['login'];
					$user->mdp = $_POST['pass'];
					$user->save();
					Flight::render('administration/creation_compte.php', array('message' => 'Enregistrement validé !'), 'body_content');
					Flight::render('layout.php', array('title' => 'Creation Compte'));
				}
				else
				{	Flight::render('administration/creation_compte.php', array('message' => 'Le mot de passe et la confirmation ne correspondent pas. Veuillez rééssayer.'),'body_content');
					Flight::render('layout.php', array('title' => 'Creation Compte'));
				}
			}
			else
			{
				Flight::render('administration/creation_compte.php', array('message' => 'Veuillez saisir un login et un mot de passe.'),'body_content');
				Flight::render('layout.php', array('title' => 'Creation Compte'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
?>
