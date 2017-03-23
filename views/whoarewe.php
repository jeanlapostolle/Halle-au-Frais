<body>
	<?php include("phparts/header.php"); ?>
		
	<div class="whoweare grid grid-pad">
		<div class="col-1-1">
			
			<div class="contact col-8-12">
				<h1>Contactez nous !</h1>
				
				<form id="contactform" method="post" action="envoi.php"> 
					<p><p><label for="nom">Prénom : </label><p><input class="saisie" type="text" id="nom" name="nom" tabindex="1" /></p>
					<p><p><label for="nom">Nom : </label><p><input class="saisie" type="text" id="nom" name="nom" tabindex="1" /></p>
					<p><p><label for="email">Email : </label><p><input class="saisie" type="text" id="email" name="email" tabindex="2" /></p>
					<p><p><label for="message">Ecrivez votre message dans la box ci-dessous (3000 caractères maximum). </label><label for="objet">Saisissez votre objet : </label><input class="saisie" type="text" id="ojet" name="ojet" tabindex="3" /></p><textarea class="msg" id="message" name="message" tabindex="4" cols="50" rows="8"></textarea></p>
					<div style="text-align:center;"><input type="submit" name="envoi" value=" Envoyer " /></div>
				</form>
			</div>
			
			<div class="reseauxSoc col-4-12">
				<h1>Suivez nous !</h1>
				</br>
				<ul>
					<li><img src="../images/facebookLogo.png" alt="logo facebook" style="height:32px"></li>
					<li><img src="../images/twitterLogo.png" alt="logo twitter" style="height:32px"></li>
					<li><img src="../images/gmailLogo.png" alt="logo gmail" style="height:32px"></li>
					<li><img src="../images/YouTubeLogo.png" alt="logo YouTube" style="height:32px"></li>
				</ul>
			</div>

		</div>
	</div>
	
	<?php include("phparts/footer.php"); ?>
</body>