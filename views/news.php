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
			<div class="col-1-3">
				<article class="actualite">
					<div class="titre article">
						<header>
							<h2><?= $article->titre;?></h2>
							<img src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:355px;height:228px;">
						</header>
					</div>
					<p><?= $article->description;?></p>
						<footer>
							<div class="piedpage">
								<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
								<form method="post" action="http://localhost/Halle-au-Frais/actualite">
									<p><div class="bouton">
										<input type="submit" value="Lire la suite">
   										<input type="hidden" name="id" value=<?= $article->id ?>></input>
									</div></p>
								</form>
							</div>
						</footer>
				</article>
			</div>
		<?php endforeach; ?>
	</div>
</div>


