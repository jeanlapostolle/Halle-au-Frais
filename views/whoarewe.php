<body>
	<?php include("phparts/header.php"); ?>
	<div class="whoweare">
		<h1>Qui sommes nous ?</h1>
		<p>La Halle au frais est une association de commerçant, proposant des produits de première qualité, d'abord locaux, de producteurs passionnés, pour être dégustés, savourés et appréciés en famille ou entre amis.</p>
	</div>
	
	<div class="reseauxSoc">
		<h1>Suivez nous !</h1>
		<ul>
			<li>facebook</li>
			<li>twitter</li>
			<li>youtube</li>
		</ul>
	</div>
	
	<div class="contact">
		<h1>Contactez nous !</h1>
		
		<form id="contactform" method="post" action="envoi.php"> 
			<p><label for="nom">Prénom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
			<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
			<p><label for="email">Email :</label><input type="text" id="email" name="email" tabindex="2" /></p>
			<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="50" rows="8"></textarea></p>
			<div style="text-align:center;"><input type="submit" name="envoi" value=" Envoyer " /></div>
		</form>
	</div>
	
	<?php include("phparts/footer.php"); ?>
</body>