<h1> Les Actualités </h1>

<?php foreach($articles as $article):?>
	<article class="actualite">
		<header>
			<h2><?= $article->titre;?><h2>
			<img src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:304px;height:228px;">
		</header>
		<p>
			<?= $article->description;?>
		</p>
		<footer>
			<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
			<form method="post" action="http://localhost/Halle-au-Frais/actualite">
				<p>
					<input type="submit" value="Lire la suite">
   					<input type="hidden" name="id" value=<?= $article->id ?>></input>
				</p>
			</form>
		</footer>
	</article>
<?php endforeach; ?>


