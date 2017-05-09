<?php foreach($articles as $article):?>
	<article class="actualite">
		<header><?= $article->titre;?></header>
		<p><?= $article->contenu;?></p>
		<footer>Par <?= $article->auteur;?> le <?= $article->date;?></footer>
	</article>
<?php endforeach; ?>


