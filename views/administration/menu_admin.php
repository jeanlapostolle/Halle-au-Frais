<?php 
	// $_POST['login'] = 'admin';
	// $_POST['pass']= 'test';

	if (isset($_POST['login']) AND isset($_POST['pass']))
	{
		$login = $_POST['login'];
		$pass = ($_POST['pass']); 
		
		$user = Model::factory('admin')
		->where('nom', $login)
		->where('mdp', $pass)
		->find_one();
		
		if ( isset($user->nom) AND isset($user->mdp) )
		{ 
?>
			<ul> 
				<li> Generer un administrateur </li> 
				<li> test 2 </li> 
				<li> test 3 </li> 
				<li> ... </li> 
			</ul> 
<?php
		}
		else
		{
			echo '<p> Erreur de connexion : mot de passe et/ou login incorrect(s) </p>';
		}
	}	
	else
	{
		echo '<p> Veuillez vous connetecer avant d\'accéder à la page d\'administration. </p>';
	}
?>


