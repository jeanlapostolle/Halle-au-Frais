<h2> Modification de compte </h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/modification_compte">
		<h3> Saisir les nouvelles informations : </h3>
		<p>
			<label for="login_modif">Login : </label>
			<input type="text" name="login_modif" id="login_modif" value="<?php echo $compte_admin->login; ?>"/>
		</p>
		<p>
			<label for="pass_modif">Mot de passe : </label>
			<input type="password" name="pass_modif" id="pass_modif" value="<?php echo $compte_admin->mdp; ?>"/>
		</p>
		<p>
			<label for="nom_modif">Nom : </label>
			<input type="text" name="nom_modif" id="nom_modif" value="<?php echo $compte_admin->nom; ?>"/>
		</p>
		<p>
			<label for="prenom_modif">Prenom : </label>
			<input type="text" name="prenom_modif" id="prenom_modif" value="<?php echo $compte_admin->prenom; ?>"/>
		</p>
		<p>
			<input type="submit" value="Modifier">
		</p>
		<input type="hidden" name="id_admin" value=<?= $compte_admin->id ?>></input>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>
