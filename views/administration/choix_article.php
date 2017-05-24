<div class="grid grid-pad">
	<div class="adminStyle col-1-1">
		<h2> Modification d'article </h2>
		<p>
			<form method="post" action="/modification_article">
				<h3> Choisir un article : </h3>
				<p>
					<select name="modif" size="3">
						<?php foreach($articles as $article):?>
							<option value=<?php echo $article->id ?>><?php echo 'titre : ' . $article->titre . ' | ' . 'auteur : ' . $article->auteur . ' | ' . 'date : ' . $article->date ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p>
					<input type="submit" value="Valider">
				</p>
			</form>
		</p>
		<p><a class="home" href="/admin">Retour au menu d'administration</a></p>
	</div>
</div>
