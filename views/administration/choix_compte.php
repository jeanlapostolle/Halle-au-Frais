<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Modification de compte </h2>
		<p>
			<form method="post" action="http://localhost/Halle-au-Frais/modification_compte">
				<h3> Choisir un compte administrateur : </h3>
				<p>
					<select name="modif" size="3">
						<?php foreach($comptes_admin as $admin):?> 
							<option value=<?php echo $admin->id ?>><?php echo 'login : ' . $admin->login . ' | ' . 'nom : ' . $admin->nom . ' | ' . 'prenom : ' . $admin->prenom ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<input type="submit" value="Valider">
				</p>
			</form>
		</p>
		<p><a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a></p>
	</div>
</div>