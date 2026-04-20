<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>SHTML :: Music</title>
		<link rel="stylesheet" href="<?php echo $root; ?>style/shtml.css" />
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>shtml">
				<img src="<?php echo $root; ?>images/shtml-header.png" alt="SHTML" title="SHTML" height="85px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Music</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>shtml/holographic-stickers.php">
							<img src="<?php echo $root; ?>images/shtml-holographic-stickers-cover.jpg" alt="SHTML - Holographic Stickers" title="SHTML - Holographic Stickers" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>shtml/holographic-stickers.php">
								<strong>Holographic Stickers</strong>
							</a>
							<small>January 11th, 2020</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>shtml/summer-rains.php">
							<img src="<?php echo $root; ?>images/shtml-summer-rains-cover.jpg" alt="SHTML - Summer Rains" title="SHTML - Summer Rains" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>shtml/summer-rains.php">
								<strong>Summer Rains</strong>
							</a>
							<small>August 30th, 2019</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>shtml/asmr-in-g-major.php">
							<img src="<?php echo $root; ?>images/shtml-asmr-in-g-major-cover.jpg" alt="SHTML - ASMR in G Major" title="SHTML - ASMR in G Major" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>shtml/asmr-in-g-major.php">
								<strong>ASMR in G Major</strong>
							</a>
							<small>May 13th, 2017</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>shtml/self-titled-ep.php">
							<img src="<?php echo $root; ?>images/shtml-self-titled-ep-cover.jpg" alt="SHTML - Self Titled EP" title="SHTML - Self Titled EP" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>shtml/self-titled-ep.php">
								<strong>SHTML</strong>
							</a>
							<small>June 27th, 2015</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>shtml/mobile-waves-ep.php">
							<img src="<?php echo $root; ?>images/shtml-mobile-waves-ep-cover.jpg" alt="SHTML - Mobile Waves EP" title="SHTML - Mobile Waves EP" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>shtml/mobile-waves-ep.php">
								<strong>Mobile Waves EP</strong>
							</a>
							<small>January 16th, 2015</small>
						</figcaption>
					</figure>
				</li>
			</ul>
		</main>
		<footer>
			<?php include("../menu.php"); ?>
		</footer>
	</body>
</html>