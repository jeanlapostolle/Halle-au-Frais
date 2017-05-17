<div id="headerCommerce">
	<h1> Les Commercants </h1>
</div>

<ul class="listeCommerces"> 
	<li class="buttonprimeurs"> <a href="http://localhost/Halle-au-Frais/primeurs"></a></li> 
	<li class="buttonrotissiers"> <a href="http://localhost/Halle-au-Frais/rotissiers"></a></li> 
	<li class="buttonpoissonniers"> <a href="http://localhost/Halle-au-Frais/poissoniers"></a></li> 
	<li class="buttonfromagers"> <a href="http://localhost/Halle-au-Frais/fromagers"></a></li>
	<li class="buttonepiciers"> <a href="http://localhost/Halle-au-Frais/epiciers"></a></li>
	<li class="buttontraiteurs"> <a href="http://localhost/Halle-au-Frais/traiteurs"></a></li>
	<li class="buttonbouchers"> <a href="http://localhost/Halle-au-Frais/bouchers"></a></li>
	<li class="buttoncavistes"> <a href="http://localhost/Halle-au-Frais/cavistes"></a></li>
	<li class="buttonboulangers"> <a href="http://localhost/Halle-au-Frais/boulangers"></a></li>
</ul>

<div class="separation"></div>

<div class="parentCommerce">
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

