<?php
	
	function accueil(){
		// $articles = Model::factory('Article')->find_many();
		Flight::render('accueil.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}

	function news(){
		Flight::render('news.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Nouveauté'));
	}

	function contact(){
		Flight::render('contact.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Contact'));
	}

	function about(){
		Flight::render('about.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'A propos'));
	}
	
?>
