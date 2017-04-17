<?php
	
	require 'libs/flight/Flight.php';
	require 'controllers/route_methode.php';
	
	require_once 'libs/idiorm.php';
	require_once 'libs/paris.php';
	ORM::configure('sqlite:data/data.sqlite');
	// require_once 'models/article.php';
	
	Flight::route('/', 'accueil');
	Flight::route('/nouveaute', 'news');
	Flight::route('/contact', 'contact');
	Flight::route('/apropos', 'about');
	Flight::start();
	
?>
