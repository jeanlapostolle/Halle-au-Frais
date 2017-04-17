<?php
	
	function accueil(){
		//$articles = Model::factory('Article')->find_many();
		Flight::render('accueil.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}

	function news(){
		Flight::render('news.php', NULL, 'body_content');
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

?>
