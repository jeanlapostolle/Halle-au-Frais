<h2> Modification d'article </h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/modification_article">
		<h3> Choisir un article : </h3>
		<p>
			<select name="article_modif" size="3">
				<?php foreach($articles as $article):?> 
					<option value=<?php echo $article->id ?>><?php echo 'titre : ' . $article->titre . ' | ' . 'auteur : ' . $article->auteur . ' | ' . 'date : ' . $article->date ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<h3> Saisir les nouvelles informations : </h3>
		<p>
			<label for="titre_modif">Titre : </label>
			<input type="text" name="titre_modif" id="titre_modif"/>
		</p>
		<p>
			<label for="contenu_modif">Contenu : </label>
			<br/>
			<textarea  rows="10" cols="60" name="contenu_modif" id="contenu_modif"></textarea>
		</p>
		<p>
			<input type="submit" value="Modifier">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>