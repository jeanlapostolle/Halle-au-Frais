<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2>Création d'article</h2>
		<p>
			<?php if(isset($message)) echo $message; ?>
		</p>
		<p>
			<form method="post" action="creation_article">
				<p>
					<label for="titre_article">Titre *</label>
					<br/>
					<input type="text" name="titre_article" id="titre_article"/>
				</p>
				<p>
					<label for="image_article">Image (URL .jpeg .png) *</label>
					<br/>
					<input type="text" name="image_article" id="image_article"/>
				</p>
				<p>
					<label for="desc_image_article">Texte alternatif *</label>
					<br/>
					<input type="text" name="desc_image_article" id="desc_image_article"/>
				</p>
				<p>
					<label for="desc_article">Description *</label>
					<br/>
					<textarea  rows="2" cols="100" name="desc_article" id="desc_article"></textarea>
				</p>
				<p>
					<label for="contenu_article">Contenu * </label>
					<br/>
					<textarea  rows="10" cols="100" name="contenu_article" id="contenu_article"></textarea>
				</p>
				<p>
					<input type="submit" value="Enregistrer">
				</p>
			</form>
		</p>

		<p>
			<a class="home" href="admin">Retour au menu d'administration</a>
		</p>
	</div>
</div>
