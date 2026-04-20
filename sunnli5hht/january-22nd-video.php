<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Sunnli5hh/t :: January 22nd (Music Video)</title>
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
			<h1>January 22nd (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/sunnli5hht-january-22nd-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/sunnli5hht-january-22nd-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> August 28th, 2017
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=4uZYN5XPUR4" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
			<h1>Related Pages</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>sunnli5hht/yesterday-at-8-11-am.php">
							<img src="<?php echo $root; ?>images/sunnli5hht-yesterday-at-8-11-am-cover.jpg" alt="Sunnli5hh/t - Yesterday at 8:11am" title="Sunnli5hh/t - Yesterday at 8:11am" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>sunnli5hht/yesterday-at-8-11-am.php">
								<strong>Yesterday at 8:11am</strong>
							</a>
							<small>November 9th, 2018</small>
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