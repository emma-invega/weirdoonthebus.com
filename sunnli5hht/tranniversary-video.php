<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Sunnli5hh/t :: Tranniversary (Music Video)</title>
		<link rel="stylesheet" href="<?php echo $root; ?>style/sunnli5hht.css" />
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>sunnli5hht">
				<img src="<?php echo $root; ?>images/sunnli5hht-header.png" alt="Sunnli5hh/t" title="Sunnli5hh/t" height="85px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Tranniversary (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/sunnli5hht-tranniversary-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/sunnli5hht-tranniversary-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> December 1st, 2023
			</p>
			<p>
				<strong>Content Warning:</strong> brief nudity
			</p>
			<p>
				<strong>Description:</strong> 10 years
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=RCKqdGce3Dw" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
			<h1>Related Pages</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>sunnli5hht/tranniversary.php">
							<img src="<?php echo $root; ?>images/sunnli5hht-tranniversary-cover.jpg" alt="Sunnli5hh/t - Tranniversary" title="Sunnli5hh/t - Tranniversary" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>sunnli5hht/tranniversary.php">
								<strong>Tranniversary</strong>
							</a>
							<small>December 1st, 2023</small>
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