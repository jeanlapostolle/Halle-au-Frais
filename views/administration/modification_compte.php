<h2> Modification de compte </h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/modification_compte">
		<h3> Choisir un compte administrateur : </h3>
		<p>
			<select name="modif" size="3">
				<?php foreach($compte_admin as $admin):?> 
					<option value=<?php echo $admin->id ?>><?php echo 'login : ' . $admin->login . ' | ' . 'nom : ' . $admin->nom . ' | ' . 'prenom : ' . $admin->prenom ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<h3> Saisir les nouvelles informations : </h3>
		<p>
			<label for="login_modif">Login : </label>
			<input type="text" name="login_modif" id="login_modif"/>
		</p>
		<p>
			<label for="pass_modif">Mot de passe : </label>
			<input type="password" name="pass_modif" id="pass_modif"/>
		</p>
		<p>
			<label for="nom_modif">Nom : </label>
			<input type="text" name="nom_modif" id="nom_modif"/>
		</p>
		<p>
			<label for="prenom_modif">Prenom : </label>
			<input type="text" name="prenom_modif" id="prenom_modif"/>
		</p>
		<p>
			<input type="submit" value="Modifier">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>
