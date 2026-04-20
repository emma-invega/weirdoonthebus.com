<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>EEL :: Music</title>
		<link rel="stylesheet" href="<?php echo $root; ?>style/eel.css" />
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>eel">
				<img src="<?php echo $root; ?>images/eel-header.png" alt="EEL" title="EEL" height="112px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Music</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>eel/self-titled-ep.php">
							<img src="<?php echo $root; ?>images/eel-self-titled-ep-cover.jpg" alt="EEL - Self Titled EP" title="EEL - Self Titled EP" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>eel/self-titled-ep.php">
								<strong>EEL EP</strong>
							</a>
							<small>April 27th, 2025</small>
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