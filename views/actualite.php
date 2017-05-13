<article class="actualite">
	<header>
		<h2><?= $article->titre;?><h2>
		<img src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:304px;height:228px;">
	</header>
	<p>
		<?= $article->contenu;?>
	</p>
	<footer>
		<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
	</footer>
</article>
<p><a class="home" href="http://localhost/Halle-au-Frais/actualites">Retour aux actualités</a></p>