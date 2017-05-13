<h2> Les commercants </h2>
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
		<?= "$com->nom";?>
		<?= "$com->propriétaire";?>
	</p>
<?php endforeach; ?>

