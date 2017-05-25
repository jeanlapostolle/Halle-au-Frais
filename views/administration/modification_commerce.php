<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Modification de commerce </h2>
		<p>
			<form method="post" action="modification_commerce">
				<h3> Saisir les nouvelles informations : </h3>
				<p>
					<label for="liste_type_comm">Type : </label>
					<br/>
					<select name="liste_type_comm" size="3">
						<?php foreach($type_commerce as $type):?>
							<option <?php if($type->id == $commerce->id){echo 'selected="selected"';} ?> value=<?php echo $type->id ?>><?php echo $type->nom ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<label for="nom_comm">Nom : </label>
					<br>
					<textarea rows="1" cols="40" type="text" name="prop_comm" id="prop_comm"><?php echo $commerce->nom; ?></textarea>
				</p>
				<p>
					<label for="prop_comm">Propriétaire : </label>
					<br>
					<textarea rows="1" cols="40" type="text" name="prop_comm" id="prop_comm"><?php echo $commerce->propriétaire;?></textarea>
				</p>
				<p>
					<label for="desc_comm">Description : </label>
					<br/>
					<textarea  rows="3" cols="40" name="desc_comm" id="desc_comm"<?php echo $commerce->description; ?>></textarea>
				</p>
				<p>
					<input type="submit" value="Modifier">
				</p>
				<input type="hidden" name="id_commerce" value=<?= $commerce->id ?>></input>
			</form>
		</p>
		<p>
			<a class="home" href="admin">Retour au menu d'administration</a>
		</p>
	</div>
</div>
