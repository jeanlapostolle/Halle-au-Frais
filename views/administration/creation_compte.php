<form method="post" action="http://localhost/Halle-au-Frais/creation_compte">
	<fieldset>
		<legend><?php echo $message ; ?></legend>
		<p>
			<p>
				<label for="login">Login : </label>
				<input type="text" name="login" />
			</p>
			<p>
				<label for="login">Mot de passe : </label>
				<input type="password" name="pass" />
			</p>
			<p>
				<label for="login">Confirmation : </label>
				<input type="password" name="conf" />
			</p>
			<p>
				<input type="submit" value="Connexion">
			</p>
		</p>
	</fieldset>
</form>

<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
