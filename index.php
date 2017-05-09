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
	
	Flight::route('/', 'accueil');
	Flight::route('/nouveaute', 'news');
	Flight::route('/apropos', 'about');
	Flight::route('/contact', 'contact');
	Flight::route('/admin', 'admin');
	Flight::route('/connexion', 'connexion');
	Flight::route('/deconnexion', 'deconnexion');	
	Flight::route('/creation_compte', 'creation_compte');
	Flight::route('/suppression_compte', 'suppression_compte');
	Flight::route('/modification_compte', 'modification_compte');
	Flight::route('/creation_article', 'creation_article');
	Flight::route('/suppression_article', 'suppression_article');
	Flight::route('/modification_article', 'modification_article');
	Flight::start();
	
?>
