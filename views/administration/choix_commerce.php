<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Modification de commerce </h2>
		<p>
			<form method="post" action="modification_commerce">
				<h3> Choisir un commerce : </h3>
				<p>
					<select name="modif_commerce" size="3">
						<?php foreach($commerces as $commerce):?>
							<option value=<?php echo $commerce->id ?>><?php echo 'nom : ' . $commerce->nom . ' | ' . 'propriétaire : ' . $commerce->propriétaire ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<input type="submit" value="Valider">
				</p>
			</form>
		</p>
		<p><a class="home" href="admin">Retour au menu d'administration</a></p>
	</div>
</div>