<link rel="stylesheet" type="text/css" href="css/stylenews.css">

<img src="images/actualites.jpg" alt="actualites" /> 

<div class="grid grid-pad">
    <div class="col-1-1">
		<?php foreach($articles as $article):?>
			<div class="col-1-3">
				<article class="actualite">
					<header>
						<h2><?= $article->titre;?></h2>
						<img src=<?= $article->image?> alt=<?=$article->desc_image?> style="width:304px;height:228px;">
					</header>
					<p><?= $article->description;?></p>
					<footer>
						<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
						<form method="post" action="http://localhost/Halle-au-Frais/actualite">
							<p><input type="submit" value="Lire la suite">
   								<input type="hidden" name="id" value=<?= $article->id ?>></input>
							</p>
						</form>
					</footer>
				</article>
			</div>
		<?php endforeach; ?>


