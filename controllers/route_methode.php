<?php
	
	function accueil(){
		// $user = Model::factory('admin')->create();
		// $user->prenom = 'Amaury';
		// $user->nom = 'GELIN';
		// $user->mail = 'momo.test@gmail.com';
		// $user->pseudo = 'test_niggas';
		// $user->mdp = 'test';
		// $user->save();
		//$articles = Model::factory('Article')->find_many();
		Flight::render('accueil.php', NULL, 'body_content');
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

?>
