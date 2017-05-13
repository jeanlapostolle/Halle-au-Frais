<?php
	
	function accueil(){
		$maneges = Model::factory('Manege')->find_many();
		Flight::render('accueil.php', array('images' => $maneges), 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}
	
	function news(){
		$articles = Model::factory('Article')->find_many();
		Flight::render('news.php', array('articles' => $articles), 'body_content');
		Flight::render('layout.php', array('title' => 'Actualités'));
	}

	function actualite(){
		$article = Model::factory('Article')->find_one($_POST['id']);
		Flight::render('actualite.php', array('article' => $article), 'body_content');
		Flight::render('layout.php', array('title' => $article->titre));
	}
	
	function about(){
		$commerces = Model::factory('commerce')->find_many();
		Flight::render('about.php', array('commercant' => $commerces), 'body_content');
		Flight::render('layout.php', array('title' => 'Commercants'));
	}

	function primeurs(){
		$primeurs = Model::factory('commerce')
			->where('numType',1)
			->find_many();
		Flight::render('about.php', array('commercant' => $primeurs), 'body_content');
		Flight::render('layout.php', array('title' => 'Primeurs'));
	}
	
	function rotissiers(){
		$rotissiers = Model::factory('commerce')
			->where('numType',2)
			->find_many();
		Flight::render('about.php', array('commercant' => $rotissiers), 'body_content');
		Flight::render('layout.php', array('title' => 'Rotissiers'));
	}
	
	function poissoniers(){
		$poissoniers = Model::factory('commerce')
			->where('numType',3)
			->find_many();
		Flight::render('about.php', array('commercant' => $poissoniers), 'body_content');
		Flight::render('layout.php', array('title' => 'Poissoniers'));
	}
	
	function fromagers(){
		$fromagers = Model::factory('commerce')
			->where('numType',4)
			->find_many();
		Flight::render('about.php', array('commercant' => $fromagers), 'body_content');
		Flight::render('layout.php', array('title' => 'Fromagers'));
	}
	
	function epiciers(){
		$epiciers = Model::factory('commerce')
			->where('numType',5)
			->find_many();
		Flight::render('about.php', array('commercant' => $epiciers), 'body_content');
		Flight::render('layout.php', array('title' => 'Epiciers'));
	}
	
	function traiteurs(){
		$traiteurs = Model::factory('commerce')
			->where('numType',6)
			->find_many();
		Flight::render('about.php', array('commercant' => $traiteurs), 'body_content');
		Flight::render('layout.php', array('title' => 'Traiteurs'));
	}
	
	function bouchers(){
		$bouchers = Model::factory('commerce')
			->where('numType',7)
			->find_many();
		Flight::render('about.php', array('commercant' => $bouchers), 'body_content');
		Flight::render('layout.php', array('title' => 'Bouchers'));
	}
	
	function cavistes(){
		$cavistes = Model::factory('commerce')
			->where('numType',8)
			->find_many();
		Flight::render('about.php', array('commercant' => $cavistes), 'body_content');
		Flight::render('layout.php', array('title' => 'Cavistes'));
	}
	
	function boulangers(){
		$boulangers = Model::factory('commerce')
			->where('numType',9)
			->find_many();
		Flight::render('about.php', array('commercant' => $boulangers), 'body_content');
		Flight::render('layout.php', array('title' => 'Boulangers'));
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
			if (isset($_POST['login']) AND isset($_POST['pass']) AND isset($_POST['nom']) AND isset($_POST['prenom']))
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
			$comptes_admin = Model::factory('admin')->find_many();
			if (isset($_POST['modif']))
			{
				$compte_admin = Model::factory('admin')->find_one($_POST['modif']);
				Flight::render('administration/modification_compte.php', array('compte_admin' => $compte_admin), 'body_content');
				Flight::render('layout.php', array('title' => 'Modification Compte'));
			}
			else if (isset($_POST['login_modif']) AND isset($_POST['pass_modif']) AND isset($_POST['nom_modif']) AND isset($_POST['prenom_modif']))
			{
					$compte_admin = Model::factory('admin')->find_one($_POST['id_admin']);
					if(($_POST['login_modif'])!='') 
						$compte_admin->login = $_POST['login_modif'];
					if(($_POST['pass_modif'])!='') 
						$compte_admin->mdp = $_POST['pass_modif'];
					if(($_POST['nom_modif'])!='') 
						$compte_admin->nom = $_POST['nom_modif'];
					if(($_POST['prenom_modif'])!='') 
						$compte_admin->prenom = $_POST['prenom_modif'];
					$compte_admin->save();
					validation("Modification validée !");
			}
			else
			{
				Flight::render('administration/choix_compte.php', array('comptes_admin' => $comptes_admin), 'body_content');
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
			if (isset($_POST['titre_article']) AND isset($_POST['desc_article']) AND isset($_POST['contenu_article']) AND isset($_POST['image_article'])AND isset($_POST['desc_image_article']))
			{
				if(($_POST['titre_article'] != '') AND ($_POST['desc_article'] != '') AND ($_POST['contenu_article'] != '') AND ($_POST['image_article'] != '') AND ($_POST['desc_image_article'] != ''))
				{
					$article = Model::factory('article')->create();
					$article->titre = $_POST['titre_article'];
					$article->description = $_POST['desc_article'];
					$article->contenu = $_POST['contenu_article'];
					$article->image = $_POST['image_article'];
					$article->desc_image = $_POST['desc_image_article'];
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
	
	function modification_article(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$articles = Model::factory('article')->find_many();
			if (isset($_POST['article_modif']) AND isset($_POST['titre_modif']) AND isset($_POST['contenu_modif']))
			{
				if (($_POST['titre_modif'])!='' AND ($_POST['contenu_modif'])!='')
				{
				$article_modif = Model::factory('article')->find_one($_POST['article_modif']);
				$article_modif->titre = $_POST['titre_modif'];
				$article_modif->contenu = $_POST['contenu_modif'];
				$article_modif->auteur = $_SESSION['prenom'] . ' ' . $_SESSION['nom'];
				$article_modif->date = date("d/m/Y");
				$article_modif->save();
				validation("Modification validée !");
				}
				else
				{
					Flight::render('administration/modification_article.php', array('articles' => $articles, 'message' => 'Veuillez saisir tous les champs.'), 'body_content');
					Flight::render('layout.php', array('title' => 'Modification Article'));
				}
			}
			else
			{
				Flight::render('administration/modification_article.php', array('articles' => $articles), 'body_content');
				Flight::render('layout.php', array('title' => 'Modification Article'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function creation_commerce(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$type_commerce = Model::factory('type')->find_many();
			if (isset($_POST['nom_comm']) AND isset($_POST['desc_comm']) AND isset($_POST['liste_type_comm']) AND isset($_POST['prop_comm']))
			{
				if(($_POST['nom_comm'] != '') AND ($_POST['desc_comm'] != '') AND ($_POST['liste_type_comm'] != '') AND ($_POST['prop_comm'] != ''))
				{
					$commerce = Model::factory('commerce')->create();
					$commerce->nom = $_POST['nom_comm'];
					$commerce->propriétaire = $_POST['prop_comm'];
					$commerce->description = $_POST['desc_comm'];
					$commerce->numType = $_POST['liste_type_comm'];
					$commerce->save();
					validation("Enregistrement validé !");
				}
				else
				{
					Flight::render('administration/creation_commerce.php', array('type_commerce' => $type_commerce,'message' => 'Veuillez saisir tous les champs.'),'body_content');
					Flight::render('layout.php', array('title' => 'Creation Commerce'));
				}
			}
			else
			{
				Flight::render('administration/creation_commerce.php', array('type_commerce' => $type_commerce), 'body_content');
				Flight::render('layout.php', array('title' => 'Creation Commerce'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function suppression_commerce(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$commerces = Model::factory('commerce')->find_many();
			if (isset($_POST['suppr_commerce']))
			{
				$commerce_suppr = Model::factory('commerce')->find_one($_POST['suppr_commerce']);
				$commerce_suppr->delete();
				validation("Suppression validée !");
			}
			else
			{
				Flight::render('administration/suppression_commerce.php', array('commerces' => $commerces), 'body_content');
				Flight::render('layout.php', array('title' => 'Suppression Article'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
	function modification_commerce(){
		session_start();
		if (isset($_SESSION['login']) AND isset($_SESSION['pass']))
		{	
			$commerces = Model::factory('commerce')->find_many();
			$type_commerce = Model::factory('type')->find_many();
			if (isset($_POST['modif_commerce']) AND isset($_POST['nom_comm']) AND isset($_POST['desc_comm']) AND isset($_POST['liste_type_comm']) AND isset($_POST['prop_comm']))
			{
				if(($_POST['nom_comm'] != '') AND ($_POST['desc_comm'] != '') AND ($_POST['liste_type_comm'] != '') AND ($_POST['prop_comm'] != ''))
				{
					$commerce_modif = Model::factory('commerce')->find_one($_POST['modif_commerce']);
					$commerce_modif->nom = $_POST['nom_comm'];
					$commerce_modif->propriétaire = $_POST['prop_comm'];
					$commerce_modif->description = $_POST['desc_comm'];
					$commerce_modif->numType = $_POST['liste_type_comm'];
					$commerce_modif->save();
					validation("Modification validée !");
				}
				else
				{
					Flight::render('administration/modification_commerce.php', array('commerces' => $commerces, 'type_commerce' => $type_commerce, 'message' => 'Veuillez saisir tous les champs.'), 'body_content');
					Flight::render('layout.php', array('title' => 'Modification Commerce'));
				}
			}
			else
			{
				Flight::render('administration/modification_commerce.php', array('commerces' => $commerces, 'type_commerce' => $type_commerce), 'body_content');
				Flight::render('layout.php', array('title' => 'Modification Commerce'));
			}
		}
		else
		{
			erreur_authentification("Vous n'avez pas les droits nécessaires pour accéder au panneau d'administration.");
		}	
	}
	
?>
