<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>WeirdoOnTheBus :: Compilations</title>
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>">
				<img src="<?php echo $root; ?>images/wotb-signature.jpg" alt="WeirdoOnTheBus" title="WeirdoOnTheBus" height="85px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Compilations</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>compilations/remixes-4-rent-vol-2.php">
							<img src="<?php echo $root; ?>images/remixes-4-rent-vol-2-cover.jpg" alt="Remixes 4 Rent Vol. 2" title="Remixes 4 Rent Vol. 2" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>compilations/remixes-4-rent-vol-2.php">
								<strong>Remixes 4 Rent Vol. 2</strong>
							</a>
							<small>January 26th, 2024</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>compilations/remixes-4-rent-vol-1.php">
							<img src="<?php echo $root; ?>images/remixes-4-rent-vol-1-cover.jpg" alt="Remixes 4 Rent Vol. 1" title="Remixes 4 Rent Vol. 1" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>compilations/remixes-4-rent-vol-1.php">
								<strong>Remixes 4 Rent Vol. 1</strong>
							</a>
							<small>July 21st, 2023</small>
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