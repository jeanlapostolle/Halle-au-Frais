<h2>Création d'article</h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/creation_article">
		<p>
			<label for="titre_article">Titre : </label>
			<br/>
			<input type="text" name="titre_article" id="titre_article"/>
		</p>
		<p>
			<label for="contenu_article">Contenu : </label>
			<br/>
			<textarea  rows="10" cols="60" name="contenu_article" id="contenu_article"></textarea>
		</p>
		<p>
			<input type="submit" value="Enregistrer">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>