<?php include('data/d_index.php'); ?>
<!doctype html>
<html>
	<head>
	    <title>Accueil - Halle au frais</title>
    	<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("phparts/header.php"); ?>
		<div class="container">
			<div class="col-2-4"></div>
		    <div class="col-1-2">
		        <h1><?= $body['title'] ?><h1>
		        <p><?= $body['content'] ?><p>
		        <h1><?= $heading['title'] ?><h1>
		        <p><?= $heading['content'] ?><p>

		    </div>
		    <div class="col-2-4"></div>
		</div>


		<?php include("phparts/footer.php"); ?>
	</body>
</html>