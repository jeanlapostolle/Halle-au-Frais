<div class="grid grid-pad pageNews">
    <div class="col-1-1">
		<div id="headerNews">
			<h1> NOS ACTUALITES </h1>
		</div>
	</div>

	
    <div class="col-1-1">
		<?php foreach($articles as $article):?>
			<article class="col-1-2 actualite">
				<header id="headArt">
					<h2><?= $article->titre;?></h2>
				</header>

				<p>
					<img class="imgArt" src=<?= $article->image?> alt=<?=$article->desc_image?> >
					<div id="textArt">
						<?= $article->description;?>
					</div>
				</p>

				<footer id="piedpage">
					<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
					<form method="post" action="actualite">
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
