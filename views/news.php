<div class="col-1-12"></div>
<div class="col-7-12">
	<?php foreach($articles as $article):?>
		<article>
			<header><?= $article->nom;?></header>
			<p><?= $article->description;?></p>
			<footer>Par <?= $article->auteur;?> le <?= $article->date;?></footer>
		</article>
	<?php endforeach; ?>
</div>

<div class="col-3-12"></div>
<div class="col-1-12"></div>

