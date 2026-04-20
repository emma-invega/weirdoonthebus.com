<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Flip Friday (YouTube Series)</title>
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>">
				<img src="<?php echo $root; ?>images/wotb-signature.jpg" alt="WeirdoOnTheBus" title="WeirdoOnTheBus" height="85px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Flip Friday (YouTube Series)</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/-6XkV-xfLnM?si=42_5AD270HFhbN8N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			<p>
				<strong>Description:</strong> Flip Friday is a bi-weekly video series run on YouTube and Patreon, where I film myself flipping a song in under 2 hours.
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=-6XkV-xfLnM" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
		</main>
		<footer>
			<?php include("../menu.php"); ?>
		</footer>
	</body>
</html>