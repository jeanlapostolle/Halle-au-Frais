<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Suppression de compte </h2>
		<p>
			<form method="post" action="suppression_compte">
				<h3>Choisir un compte administrateur : </h3>
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
			<a class="home" href="admin">Retour au menu d'administration</a>
		</p>
	</div>
</div>
