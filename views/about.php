<div id="headerCommerce">
	<h1> Les Commercants </h1>
</div>

<ul class="listeCommerces"> 
	<li class="buttonprimeurs"> <a href="http://localhost/Halle-au-Frais/primeurs">Les Primeurs</a></li> 
	<li class="buttonrotissiers"> <a href="http://localhost/Halle-au-Frais/rotissiers">Les Rotissiers</a></li> 
	<li class="buttonpoissonniers"> <a href="http://localhost/Halle-au-Frais/poissoniers">Les Poissoniers</a></li> 
	<li class="buttonfromagers"> <a href="http://localhost/Halle-au-Frais/fromagers">Les Fromagers</a></li>
	<li class="buttonepiciers"> <a href="http://localhost/Halle-au-Frais/epiciers">Les Epiciers</a></li>
	<li class="buttontraiteurs"> <a href="http://localhost/Halle-au-Frais/traiteurs">Les Traiteurs</a></li>
	<li class="buttonbouchers"> <a href="http://localhost/Halle-au-Frais/bouchers">Les Bouchers</a></li>
	<li class="buttoncavistes"> <a href="http://localhost/Halle-au-Frais/cavistes">Les Cavistes</a></li>
	<li class="buttonboulangers"> <a href="http://localhost/Halle-au-Frais/boulangers">Les Boulangers</a></li>
</ul>

<div class="separation"></div>

<div class="parentCommerce">
	<?php foreach($commercant as $com):?> 
		<div class="commerces">
			<?php echo '<h2>' . $com->nom . '</h2>'; ?>
			<ul><?php
				if(($com->description)!=''): ?>
					<li>
						<p id="desc"><?php echo $com->description; ?></p>
					</li>
				<?php endif;
				if(($com->propriétaire)!=''): ?>
					<li>
						<p id="prop"><?php echo $com->propriétaire; ?></p>
					</li>
				<?php endif;
				if(($com->Facebook)!=''): ?>
					<li>
						<a href=<?= $com->Facebook ?>>Facebook</a>
					</li>
				<?php endif; 
				if(($com->siteWeb)!=''): ?>
					<li>
						<a href=<?= $com->siteWeb ?>>Site Web</a>
					</li>
				<?php endif; 
				if(($com->mail)!=''): ?>
					<li>
						<p id="Commercemail"><?php echo 'E-mail : ' . $com->mail; ?></p>
					</li>
				<?php endif;
				if(($com->telephone)!=''): ?>
					<li>
						<p id="Commercetel"><?php echo 'Tél : ' . $com->telephone; ?></p>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	<?php endforeach; ?>
</div>

