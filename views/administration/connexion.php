<div class="adminStyle col-1-1">
	<p>
		<?php if(isset($message)) echo $message; ?>
	</p>
	<p>
		<form method="post" action="http://localhost/Halle-au-Frais/connexion">
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
					<input type="submit" value="Connexion">
				</p>
			</p>
		</form>
	</p>
</div>