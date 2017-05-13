<?php
	
	require 'libs/flight/Flight.php';
	require 'controllers/route_methode.php';
	
	require_once 'libs/idiorm.php';
	require_once 'libs/paris.php';
	ORM::configure('sqlite:data/data.sqlite');
	
	require_once 'models/article.php';
	require_once 'models/commerce.php';
	require_once 'models/manege.php';
	require_once 'models/admin.php';
	require_once 'models/type.php';
	
	Flight::route('/', 'accueil');
	Flight::route('/actualites', 'news');
		Flight::route('/actualite', 'actualite');
	Flight::route('/commercants', 'about');
		Flight::route('/primeurs', 'primeurs');
		Flight::route('/rotissiers', 'rotissiers');
		Flight::route('/poissoniers', 'poissoniers');
		Flight::route('/fromagers', 'fromagers');
		Flight::route('/epiciers', 'epiciers');
		Flight::route('/traiteurs', 'traiteurs');
		Flight::route('/bouchers', 'bouchers');
		Flight::route('/cavistes', 'cavistes');
		Flight::route('/boulangers', 'boulangers');
	Flight::route('/contact', 'contact');
	Flight::route('/connexion', 'connexion');
	Flight::route('/deconnexion', 'deconnexion');	
	Flight::route('/admin', 'admin');
		Flight::route('/creation_compte', 'creation_compte');
		Flight::route('/suppression_compte', 'suppression_compte');
		Flight::route('/modification_compte', 'modification_compte');
		Flight::route('/modification_compte', 'modification_compte');
		Flight::route('/creation_article', 'creation_article');
		Flight::route('/suppression_article', 'suppression_article');
		Flight::route('/modification_article', 'modification_article');
		Flight::route('/creation_commerce', 'creation_commerce');
		Flight::route('/suppression_commerce', 'suppression_commerce');
		Flight::route('/modification_commerce', 'modification_commerce');	
	Flight::start();
	
?>
