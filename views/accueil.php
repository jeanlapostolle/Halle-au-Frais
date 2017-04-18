<link rel="stylesheet" type="text/css" href="css/styleaccueil.css"> 
<div class="grid grid-pad">
    <div class="col-1-1">
      <div class="content slider">

        <img class="mySlides" src="images/manege/1.png" />
        <img class="mySlides" src="images/manege/boulangers.png" />
        <img class="mySlides" src="images/manege/Capture.png" />

          	<div class="fleche_gauche" onclick="plusDivs(-1)">&#10094;</div>
          	<div class="fleche_droite" onclick="plusDivs(1)">&#10095;</div>

      </div>
    </div>
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

    <div class="col-1-3 colonne">
      	<div class="col-1-1 l1">
        	<button class="button primeurs"><span class="texte">Primeurs </span></button>
        	<button class="button rotissiers"><span class="texte">Rotissiers </span></button>
       	 	<button class="button poissonniers"><span class="texte">Poissonniers </span></button>
      	</div>

      	<div class="col-1-1 l1">
        	<button class="button fromagers"><span class="texte">Fromagers </span></button>
       	 	<button class="button epiciers"><span class="texte">Epiciers </span></button>
        	<button class="button traiteurs"><span class="texte">Traiteurs </span></button>
      	</div>

      	<div class="col-1-1">
        	<button class="button bouchers"><span class="texte">Bouchers </span></button>
        	<button class="button cavistes"><span class="texte">Cavistes </span></button>
        	<button class="button boulangers"><span class="texte">Boulangers</span></button>
      	</div>
    </div>
</div>