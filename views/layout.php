<!doctype html>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset='utf-8' />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css"> 
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/color.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
		<link rel="stylesheet" type="text/css" href="css/styleCommerce.css">
		<link rel="stylesheet" type="text/css" href="css/styleContact.css"> 
		<link rel="stylesheet" type="text/css" href="css/styleHeader.css"> 
		<link rel="stylesheet" type="text/css" href="css/styleFooter.css">
		<link rel="stylesheet" type="text/css" href="css/styleAdministration.css">
	</head>
	<body>
		<header>
			<?php include('templates/header.php'); ?>
		</header>

		<main>
			<?php echo $body_content; ?>			
		</main>
		
		<footer>
			<?php include('templates/footer.php'); ?>
		</footer>
	</body>
</html>