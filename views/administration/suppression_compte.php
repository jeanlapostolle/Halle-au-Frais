<h2> Suppression de compte </h2>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/suppression_compte">
		<h3>Choisir un compte administrateur : </h2>
		<p>
			<select name="suppr" size="3">
				<?php foreach($compte_admin as $admin):?> 
					<option value=<?php echo $admin->id ?>><?php echo 'login : ' . $admin->login . ' | ' . 'nom : ' . $admin->nom . ' | ' . 'prenom : ' . $admin->prenom ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<input type="submit" value="Supprimer">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>
