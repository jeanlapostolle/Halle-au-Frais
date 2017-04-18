<?php foreach($articles as $article):?>
	<article class="actualite">
		<header><?= $article->nom;?></header>
		<p><?= $article->description;?></p>
		<footer>Par <?= $article->auteur;?> le <?= $article->date;?></footer>
	</article>
<?php endforeach; ?>


