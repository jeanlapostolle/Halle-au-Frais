<h1> Les Commercants </h1>

<p>
	<ul> 
		<li> <a href="http://localhost/Halle-au-Frais/primeurs">Les Primeurs</a></li> 
		<li> <a href="http://localhost/Halle-au-Frais/rotissiers">Les Rotissiers</a></li> 
		<li> <a href="http://localhost/Halle-au-Frais/poissoniers">Les Poissoniers</a></li> 
		<li> <a href="http://localhost/Halle-au-Frais/fromagers">Les Fromagers</a></li>
		<li> <a href="http://localhost/Halle-au-Frais/epiciers">Les Epiciers</a></li>
		<li> <a href="http://localhost/Halle-au-Frais/traiteurs">Les Traiteurs</a></li>
		<li> <a href="http://localhost/Halle-au-Frais/bouchers">Les Bouchers</a></li>
		<li> <a href="http://localhost/Halle-au-Frais/cavistes">Les Cavistes</a></li>
		<li> <a href="http://localhost/Halle-au-Frais/boulangers">Les Boulangers</a></li>
	</ul> 
</p>

<?php foreach($commercant as $com):?> 
	<p>
		<?php 
		echo '<h2>' . $com->nom . '</h2>';
		if(($com->description)!='')
			echo $com->description . '<br>';
		if(($com->propriétaire)!='')
			echo $com->propriétaire . '<br>';
		if(($com->Facebook)!=''): ?>
			<a href=<?= $com->Facebook ?>>Facebook</a><br>
		<?php endif; 
		if(($com->siteWeb)!=''): ?>
			<a href=<?= $com->siteWeb ?>>Site Web</a><br>
		<?php endif; 
		if(($com->mail)!='')
			echo 'E-mail : ' . $com->mail . '<br>';
		if(($com->telephone)!='')
			echo 'Tél : ' . $com->telephone . '<br>';	
		?>
	</p>
<?php endforeach; ?>

