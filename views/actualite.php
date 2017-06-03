<div class="grid grid-pad">
	<article class="col-1-1 actualite">
		<header>
			<h1 class="titrearticle"><?= $article->titre;?></h1>
			
			<img  class="imagearticle" src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:304px;height:228px;">
		</header>

		<p class="contenuarticle">
			<?= \Michelf\MarkdownExtra::defaultTransform($article->contenu);?>
		</p>

		<footer class="piedarticle">
			<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
		</footer>
	</article>
	
	<a class="home" href="actualites">Retour aux actualités</a>
</div>
