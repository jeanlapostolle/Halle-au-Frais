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
			if (($_POST['login'])!='' AND ($_POST['pass'])!='')
			{
				$login = $_POST['login'];
				$pass = $_POST['pass']; 
				
				$user = Model::factory('admin')
				->where('login', $login)
				->where('mdp', $pass)
				->find_one();
				
				if (isset($user->login) AND isset($user->mdp))
				{ 
					$_SESSION['login'] = $user->login;
					$_SESSION['pass'] = $user->mdp;
					$_SESSION['nom'] = $user->nom;
					$_SESSION['prenom'] = $user->prenom;
					
					Flight::render('administration/menu_admin.php', NULL, 'body_content');
					Flight::render('layout.php', array('title' => 'Menu Admin'));
				}
				else
				{
					Flight::render('administration/connexion.php', array('message' => 'Erreur de connexion : mot de passe et/ou login incorrect(s).'), 'body_content');
					Flight::render('layout.php', array('title' => 'Connexion'));
				}
			}
			else
			{
				Flight::render('administration/connexion.php', array('message' => 'Veuillez saisir tous les champs.'), 'body_content');
				Flight::render('layout.php', array('title' => 'Connexion'));
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
	
	function validation($message){
		Flight::render('administration/validation.php', array('message' => $message), 'body_content');
		Flight::render('layout.php', array('title' => 'Validation'));
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
			if ( isset($_POST['login']) AND isset($_POST['pass']) AND isset($_POST['nom']) AND isset($_POST['prenom']))
			{
				if(($_POST['login'] != '') AND ($_POST['pass'] != '') AND ($_POST['nom'] != '') AND ($_POST['prenom'] != ''))
				{
					if (($_POST['pass']) == ($_POST['conf']))
					{
						$user = Model::factory('admin')->create();
						$user->login = $_POST['login'];
						$user->mdp = $_POST['pass'];
						$user->nom = $_POST['nom'];
						$user->prenom = $_POST['prenom'];
						$user->save();
						validation("Enregistrement validé !");
					}
					else
					{	Flight::render('administration/creation_compte.php', array('message' => 'Le mot de passe et la confirmation ne correspondent pas. Veuillez rééssayer.'),'body_content');
						Flight::render('layout.php', array('title' => 'Creation Compte'));
					}
				}
				else
				{
					Flight::render('administration/creation_compte.php', array('message' => 'Veuillez saisir tous les champs.'),'body_content');
					Flight::render('layout.php', array('title' => 'Creation Compte'));
				}
			}
			else
			{
				Flight::render('administration/creation_compte.php', NULL,'body_content');
				Flight::render('layout.php', array('title' => 'Creation Compte'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function suppression_compte(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$compte_admin = Model::factory('admin')->find_many();
			if (isset($_POST['suppr']))
			{
				$compte_suppr = Model::factory('admin')->find_one($_POST['suppr']);
				$compte_suppr->delete();
				validation("Suppression validée !");
			}
			else
			{
				Flight::render('administration/suppression_compte.php', array('compte_admin' => $compte_admin), 'body_content');
				Flight::render('layout.php', array('title' => 'Suppression Compte'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function modification_compte(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$compte_admin = Model::factory('admin')->find_many();
			if (isset($_POST['modif']) AND isset($_POST['login_modif']) AND isset($_POST['pass_modif']) AND isset($_POST['nom_modif']) AND isset($_POST['prenom_modif']))
			{
				if (($_POST['login_modif'])!='' AND ($_POST['pass_modif'])!='' AND ($_POST['nom_modif'])!='' AND ($_POST['prenom_modif'])!='')
				{
				$compte_modif = Model::factory('admin')->find_one($_POST['modif']);
				$compte_modif->login = $_POST['login_modif'];
				$compte_modif->mdp = $_POST['pass_modif'];
				$compte_modif->nom = $_POST['nom_modif'];
				$compte_modif->prenom = $_POST['prenom_modif'];
				$compte_modif->save();
				validation("Modification validée !");
				}
				else
				{
					Flight::render('administration/modification_compte.php', array('compte_admin' => $compte_admin, 'message' => 'Veuillez saisir tous les champs.'), 'body_content');
					Flight::render('layout.php', array('title' => 'Modification Compte'));
				}
			}
			else
			{
				Flight::render('administration/modification_compte.php', array('compte_admin' => $compte_admin), 'body_content');
				Flight::render('layout.php', array('title' => 'Modification Compte'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function creation_article(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			if ( isset($_POST['titre_article']) AND isset($_POST['contenu_article']))
			{
				if(($_POST['titre_article'] != '') AND ($_POST['contenu_article'] != ''))
				{
					$article = Model::factory('article')->create();
					$article->titre = $_POST['titre_article'];
					$article->contenu = $_POST['contenu_article'];
					$article->auteur = $_SESSION['prenom'] . ' ' . $_SESSION['nom'];
					$article->date = date("d/m/Y");
					$article->save();
					validation("Enregistrement validé !");
				}
				else
				{
					Flight::render('administration/creation_article.php', array('message' => 'Veuillez saisir tous les champs.'),'body_content');
					Flight::render('layout.php', array('title' => 'Creation Article'));
				}
			}
			else
			{
				Flight::render('administration/creation_article.php', NULL, 'body_content');
				Flight::render('layout.php', array('title' => 'Creation Article'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function suppression_article(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$articles = Model::factory('article')->find_many();
			if (isset($_POST['suppr_article']))
			{
				$article_suppr = Model::factory('article')->find_one($_POST['suppr_article']);
				$article_suppr->delete();
				validation("Suppression validée !");
			}
			else
			{
				Flight::render('administration/suppression_article.php', array('articles' => $articles), 'body_content');
				Flight::render('layout.php', array('title' => 'Suppression Article'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
?>
