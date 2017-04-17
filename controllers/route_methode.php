<?php
	
	function accueil(){
		// $articles = Model::factory('Article')->find_many();
		Flight::render('accueil.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}
	
?>
