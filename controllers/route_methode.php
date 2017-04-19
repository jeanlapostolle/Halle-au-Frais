<?php
	
	function accueil(){
		//$articles = Model::factory('Article')->find_many();
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
		Flight::render('administration/connexion.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Connexion'));
	}
	
	function erreur_authentification($message){
		Flight::render('administration/erreur_authentification.php', array('message' => $message), 'body_content');
		Flight::render('layout.php', array('title' => 'Erreur'));
	}
	
	function admin(){
		if (isset($_POST['login']) AND isset($_POST['pass']))
		{
			$login = $_POST['login'];
			$pass = $_POST['pass']; 
			
			$user = Model::factory('admin')
			->where('nom', $login)
			->where('mdp', $pass)
			->find_one();
			
			if ( isset($user->nom) AND isset($user->mdp) )
			{ 
				session_start();
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
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		} 
	}
	
	function creation_compte(){
		// $user = Model::factory('admin')->create();
		// $user->prenom = 'Amaury';
		// $user->nom = 'GELIN';
		// $user->mail = 'momo.test@gmail.com';
		// $user->pseudo = 'test_niggas';
		// $user->mdp = 'test';
		// $user->save();
		
		Flight::render('administration/creation_compte.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Connexion'));
	}

?>
