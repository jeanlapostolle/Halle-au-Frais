<link rel="stylesheet" type="text/css" href="css/styleactualite.css">

<div class="grid grid-pad">
    <div class="col-1-1">
		<article class="actualite">
			<header>
				<div class="titrearticle">
					<h1><?= $article->titre;?></h1>
				</div>
				<div class="imagearticle"><img src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:304px;height:228px;"></div>
			</header>
			<p>
				<div class="contenuarticle">
					<?= \Michelf\MarkdownExtra::defaultTransform($article->contenu);?>
				</div>
			</p>
			<footer>
				<div class="piedarticle">
					<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
				</div>
			</footer>
		</article>
		<p><a class="home" href="actualites">Retour aux actualités</a></p>
	</div>
</div>
