<div id="pageCommercants">
	<div id="headerCommerce">
		<h1> Nos Commercants </h1>
	</div>

	<ul class="listeCommerces">
		<li> <a href="primeurs"><img class="buttonListShop" src="images/Commerce/png/asparagus.png" title="Nos primeurs"></a></li>
		<li> <a href="rotissiers"><img class="buttonListShop" src="images/Commerce/png/turkey.png" title="Nos rotissiers"></a></li>
		<li> <a href="poissoniers"><img class="buttonListShop" src="images/Commerce/png/fish.png" title="Nos poissoniers"></a></li>
		<li> <a href="fromagers"><img class="buttonListShop" src="images/Commerce/png/cheese.png" title="Nos fromagers"></a></li>
		<li> <a href="epiciers"><img class="buttonListShop" src="images/Commerce/png/spices.png" title="Nos epiciers"></a></li>
		<li> <a href="traiteurs"><img class="buttonListShop" src="images/Commerce/png/sushi-1.png" title="Nos traiteurs"></a></li>
		<li> <a href="bouchers"><img class="buttonListShop" src="images/Commerce/png/ham.png" title="Nos bouchers"></a></li>
		<li> <a href="cavistes"><img class="buttonListShop" src="images/Commerce/png/glass-4.png" title="Nos cavistes"></a></li>
		<li> <a href="boulangers"><img class="buttonListShop" src="images/Commerce/png/bread-1.png" title="Nos boulangers"></a></li>
	</ul>

	<div class="separation"></div>

	<div id="searchresult" class="parentCommerce">
		<?php foreach($commercant as $com):?>
			<div class="commerces">
				<?php echo '<h2>' . $com->nom . '</h2>';
				if(($com->description)!=''): ?>
					<p id="desc"><?php echo $com->description; ?></p>
				<?php endif;
				if(($com->propriétaire)!=''): ?>
					<p id="prop"><?php echo $com->propriétaire; ?></p>
				<?php endif;
				if(($com->Facebook)!=''): ?>
					<a href=<?= $com->Facebook ?>>Facebook</a>
				<?php endif;
				if(($com->siteWeb)!=''): ?>
					<a href=<?= $com->siteWeb ?>>Site Web</a>
				<?php endif;
				if(($com->mail)!=''): ?>
					<p id="Commercemail"><?php echo 'E-mail : ' . $com->mail; ?></p>
				<?php endif;
				if(($com->telephone)!=''): ?>
					<p id="Commercetel"><?php echo 'Tél : ' . $com->telephone; ?></p>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="separation"></div>
</div>
