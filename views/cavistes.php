<div id="headerCommerce">
	<h1>Nos cavistes</h1>
</div>

<div class="parentCommerce">
	<?php foreach($commercant as $com):?>
		<? if ($com->numType == 8):?>
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
		<?php endif; ?>
	<?php endforeach; ?>
</div>