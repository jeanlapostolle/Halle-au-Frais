<?php include('data/d_index.php'); 
require_once 'models/commercant.php';
?>
<!doctype html>
<html>
	<head>
	    <title>Accueil - Halle au frais</title>
    	<?php include("head.php"); ?>
	</head>
	<body>
		<header id="base_header">
			<?php include("phparts/header.php"); ?>
		</header>
		<main>
			<div class="grid grid-pad">
				<div class="col-2-12"></div>
				<div class="col-8-12">
					<h1><?= $body['title'] ?></h1>
					<p><?= $body['content'] ?></p>
					<h1><?= $heading['title'] ?></h1>
					<p><?= $heading['content'] ?></p>
					<p><?= $article[3]?></p>

				</div>
				<div class="col-2-12"></div>
			</div>
		</main>
		<footer>
			<?php include("phparts/footer.php"); ?>
		</footer>
	</body>
</html>