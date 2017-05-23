<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Suppression de commerce </h2>
		<p>
			<form method="post" action="/suppression_commerce">
				<h3>Choisir un commerce : </h3>
				<p>
					<select name="suppr_commerce" size="3">
						<?php foreach($commerces as $commerce):?>
							<option value=<?php echo $commerce->id ?>><?php echo $commerce->nom ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<input type="submit" value="Supprimer">
				</p>
			</form>
		</p>
		<p>
			<a class="home" href="/admin">Retour au menu d'administration</a>
		</p>
	</div>
</div>
