<link rel="stylesheet" type="text/css" href="css/stylenews.css">

<div class="grid grid-pad">
    <div class="col-1-1">
		<div class="banniere_actualite">
			<img src="images/actualites.jpg" alt="actualites" />
		</div>
	</div>
</div>

<div class="grid grid-pad">
    <div class="col-1-1">
		<?php foreach($articles as $article):?>
			<article class="col-1-3 actualite">
				<header class="headArt">
					<h2><?= $article->titre;?></h2>
				</header>

				<p>
					<div class="imgArt"> 
						<img src=<?= $article->image?> alt=<?=$article->desc_image?> >
					</div>
					<div class="textArt">
						<?= $article->description;?>
					</div>
				</p>

				<footer class="piedpage">
					<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
					<form method="post" action="/actualite">
						<p class="bouton">
							<input type="submit" value="Lire la suite">
   							<input type="hidden" name="id" value=<?= $article->id ?> >
						</p>
					</form>
				</footer>
			</article>
		<?php endforeach; ?>

	</div>
</div>
