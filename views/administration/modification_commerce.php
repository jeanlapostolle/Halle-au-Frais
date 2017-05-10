<h2> Modification de commerce </h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/modification_commerce">
		<h3> Choisir un commerce : </h3>
		<p>
			<select name="modif_commerce" size="3">
				<?php foreach($commerces as $commerce):?> 
					<option value=<?php echo $commerce->id ?>><?php echo 'nom : ' . $commerce->nom . ' | ' . 'propriétaire : ' . $commerce->propriétaire ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<h3> Saisir les nouvelles informations : </h3>
		<p>
			<label for="liste_type_comm">Type : </label>
			<br/>
			<select name="liste_type_comm" size="3">
				<?php foreach($type_commerce as $type):?> 
					<option value=<?php echo $type->id ?>><?php echo $type->nom ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<label for="nom_comm">Nom : </label>
			<br>
			<input type="text" name="nom_comm" id="nom_comm"/>
		</p>
		<p>
			<label for="prop_comm">Propriétaire : </label>
			<br>
			<input type="text" name="prop_comm" id="prop_comm"/>
		</p>
		<p>
			<label for="desc_comm">Description : </label>
			<br/>
			<textarea  rows="3" cols="40" name="desc_comm" id="desc_comm"></textarea>
		</p>
		<p>
			<input type="submit" value="Modifier">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>