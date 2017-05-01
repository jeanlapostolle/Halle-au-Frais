<h3>Liste des comptes d'administration : </h2>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/suppression_compte">
		<p>
			<select name="suppr" size="3">
				<?php foreach($compte_admin as $admin):?> 
					<option value=<?php echo $admin->id ?>><?php echo 'id = ' . $admin->id . ' | ' . 'login = ' . $admin->login ?></option>
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
