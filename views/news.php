<?php include('data/d_news.php'); ?>
<?php include('data/d_events.php'); ?>
<?php include('data/d_reseaux-sociaux.php'); ?>
<!doctype html>
<html>
	<head>
	    <title>Actualités - Halle au frais</title>
    	<?php include("head.php"); ?>
	</head>
	<body>
		<header id="base_header">
			<?php include("phparts/header.php"); ?>
		</header>
		<main>
			<div class="grid grid-pad">
				<div class="col-1-12"></div>
				<div class="col-6-12">
					<?php 
					foreach($article as $key => $value): ?>
						<article>
							<header>
								<h3><?php echo $value['titre'] ?></h3>
								<time><?php echo $value['date'] ?></time>
							</header>
							<section>
								<p><?php echo $value['description'] ?></p>
							</section>
							<footer>
								<a href="news.php" title="<?php echo $value['titre']; ?>">Lire la suite</a>
							</footer>
						</article>
					<?php 
					endforeach; ?>
				</div>
				<div class="col-4-12">
					<section id="events">
						<h3> Nos Evènements </h3>
						<?php 
						foreach($event as $key => $value): ?>
							<img src="<?php echo $value['lien_image']?>" alt=<?php echo $value['titre_image']?> />
							<h4><?php echo $value['titre'] ?></h4>
						<?php 
						endforeach; ?>
					</section>
					<section id="find_us">
						<h3> Nous Retrouver </h3>
						<?php 
						foreach($reseauSocial as $key => $value): ?>
							<img src="<?php echo $value['lien_image']?>" alt=<?php echo $value['titre_image']?> />
						<?php 
						endforeach; ?>	
					</section>
				</div>
				<div class="col-1-12"></div>
			</div>
		</main>
		<footer>
			<?php include("phparts/footer.php"); ?>
		</footer>
	</body>
</html>