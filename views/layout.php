<!doctype html>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset='utf-8' />
		<link rel="stylesheet" type="text/css" href="css/normalize.css"> 
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/color.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
		<link rel="stylesheet" type="text/css" href="css/styleCommerce.css">
		<link rel="stylesheet" type="text/css" href="css/styleHeader.css"> 
	</head>
	<body>
		<header class="header">
			<?php include('templates/header.php'); ?>
		</header>

		<main>
			<?php echo $body_content; ?>			
		</main>
		
		<footer class="footer">
			<?php include('templates/footer.php'); ?>
		</footer>
	</body>
</html>