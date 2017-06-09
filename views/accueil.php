<link rel="stylesheet" type="text/css" href="css/styleaccueil.css">

<div class="content slider">
	<?php foreach($last_articles as $article):?>
		<div class="mySlides">
			<a href="actualite/<?= $article->id ;?>">
				<img src="<?= $article->image ;?>" />
					<h1 class="artext"><?= $article->titre ;?></h1>
					<h2 class="artext">
						<?= $article->desc_image ;?>
					</h2>
		</div>
		</a>
	<?php endforeach; ?>

  <div class="fleche_gauche" onclick="plusDivs(-1)">&#10094;</div>
  <div class="fleche_droite" onclick="plusDivs(1)">&#10095;</div>
</div>

<script>
  	var slideIndex = 1;
  	showDivs(slideIndex);

  	carousel();

  	function plusDivs(n) {
    showDivs(slideIndex += n);
 	}

  	function currentDiv(n) {
    	showDivs(slideIndex = n);
  	}

	function showDivs(n) {
    	var i;
       	var x = document.getElementsByClassName("mySlides");
    	var dots = document.getElementsByClassName("dot");
    	if (n > x.length) {slideIndex = 1}
    	if (n < 1) {slideIndex = x.length}
	   	for (i = 0; i < x.length; i++) {
	   		x[i].style.display = "none";
	   	}
	   	for (i = 0; i < dots.length; i++) {
    	   dots[i].className = dots[i].className.replace("w3-white", "");
	   	}
	   	x[slideIndex-1].style.display = "block";
	   	dots[slideIndex-1].className += " w3-white";
	  }

  	function carousel() {
      	var i;
      	var x = document.getElementsByClassName("mySlides");
      	for (i = 0; i < x.length; i++) {
         	x[i].style.display = "none";
      	}
      	slideIndex++;
      	if (slideIndex > x.length) {slideIndex = 1}
      	x[slideIndex-1].style.display = "block";
      	setTimeout(carousel, 6000);
  	}
</script>

<div class="grid grid-pad">
   	<div class="col-1-1">
   		<div class="terroir">
   				<div class="col-4-12">
   					<div class="terroir titre">100% Terroir</div>
				</div>
			</div>
			<div class="col-8-12">
				<div class="terroir description">Tous les produits de LA HALLE AU FRAIS sont des produits de première qualité, d’abord locaux, de producteurs passionnés, pour être dégustés, savourés en famille ou entre amis.</div>
			</div>
		</div>
	</div>
</div>

<div class="grid grid-pad">

 	<div class="col-1-1 rubriqueButton">
   	<div class="col-1-3 button">
     	<a href="/primeurs#searchresult" class="anchor"><button class="button primeurs"><span class="texte">Primeurs </span></button></a>
    </div>

   	<div class="col-1-3 button">
    	<a href="/rotissiers#searchresult" class="anchor"><button class="button rotissiers"><span class="texte">Rotissiers </span></button></a>
   	</div>

    <div class="col-1-3 button">
   	 	<a href="/poissoniers#searchresult" class="anchor"><button class="button poissonniers"><span class="texte">Poissonniers </span></button></a>
   	</div>

   	<div class="col-1-3 button">
   		<a href="/fromagers#searchresult" class="anchor"><button class="button fromagers"><span class="texte">Fromagers </span></button></a>
    </div>

   	<div class="col-1-3 button">
	 		<a href="/epiciers#searchresult" class="anchor"><button class="button epiciers"><span class="texte">Epiciers </span></button></a>
   	</div>

   	<div class="col-1-3 button">
      <a href="/traiteurs#searchresult" class="anchor"><button class="button traiteurs"><span class="texte">Traiteurs </span></button></a>
  	</div>

   	<div class="col-1-3 button">
      <a href="/bouchers#searchresult" class="anchor"><button class="button bouchers"><span class="texte">Bouchers </span></button></a>
  	</div>

    <div class="col-1-3 button">
    	<a href="/cavistes#searchresult" class="anchor"><button class="button cavistes"><span class="texte">Cavistes </span></button></a>
    </div>

    <div class="col-1-3 button">
    	<a href="/boulangers#searchresult" class="anchor"><button class="button boulangers"><span class="texte">Boulangers</span></button></a>
    </div>
  </div>

</div>
<div class="grid grid-pad">
	<div class="col-1-12"></div>
	<div class="col-10-12">
		<h1 class="terroir titre">Histoire des Halle au Frais</h1>
		<p class="terroir description">
		Le Centre Commercial Les Halles se situe au cœur du quartier du Beffroi, classé monument historique et au Patrimoine mondial de l'UNESCO. Sa Halle au Frais, reconnue pour vendre des produits frais de qualité, les marchés de plein vent (mercredi et samedi toute la journée) et les commerçants aux alentours font de ce lieu un endroit très animé.
		</p>
		<p class="terroir description">
			Le beffroi fut reconstruit au début du xve siècle (1406-1410) Symbolisant l'indépendance de la commune, il servait autrefois aux réunions des notables de la ville puis de salle d'archives, de magasin d'armes et de prison. Un guetteur surveillait alentour les arrivées et prévenait la population des dangers extérieurs.

Le beffroi jouxtait les Halles et l'arrière de l'Hôtel de ville. Il sonnait chaque heure de la journée.
</p>
		<p class="terroir description">
Le 13 août 1562, le beffroi est victime d'un incendie</p>
<p class="terroir description">
Le 16 avril 1742, le beffroi est à nouveau la proie des flammes.
</p>
<p class="terroir description">
La réparation du beffroi ne débuta qu'en 1749. C'est le projet de l'architecte Beffara qui fut finalement adopté. Il donna au beffroi l'aspect qu'on lui connaît aujourd'hui. La grosse cloche Marie-Firmine fut fondue en 1748.
</p>
<p class="terroir description">
Le 19 mai 1940, la ville d'Amiens subit un violent bombardement par la Luftwaffe, la toiture et la charpente du beffroi furent la proie des flammes, la cloche de 11 tonnes s'écrasa et se brisa sur le sol.
</p>

	</div>
	<div class="col-1-12"></div>
</div>
