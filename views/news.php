<link rel="stylesheet" type="text/css" href="css/stylenews.css">

<div class="grid grid-pad">
    <div class="col-1-1">
		<div id="headerNews">
			<h1> NOS ACTUALITES </h1>
		</div>
	</div>
</div>

<div class="grid grid-pad">
    <div class="col-1-1">
		<?php foreach($articles as $article):?>
			<article class="col-1-2 actualite">
				<header id="headArt">
					<h2><?= $article->titre;?></h2>
				</header>

				<p>
					<div class="crop">
						<img class="imgArt" src=<?= $article->image?> alt=<?=$article->desc_image?> >
					</div>
					<div id="textArt">
						<?= $article->description;?>
					</div>
				</p>

				<footer id="piedpage">
					<p>Par <?= $article->auteur;?> le <?= $article->date;?></p>
					<p><a class="home" href="actualite/<?=$article->id?>">Lire la suite</a></p>
				</footer>
			</article>
		<?php endforeach; ?>

	</div>
</div>
