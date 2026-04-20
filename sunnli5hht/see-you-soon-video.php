<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Sunnli5hh/t :: See You Soon (Music Video)</title>
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
			<h1>See You Soon (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/sunnli5hht-see-you-soon-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/sunnli5hht-see-you-soon-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> August 30th, 2017
			</p>
			<p>
				<strong>Description:</strong> I wrote this song when my girlfriend had to go back to New York after a short visit in the Winter. The video is made out of footage that we each captured on our phones on our way to the airport during that last night together.
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=y6R2fENPO_8" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
		</main>
		<footer>
			<?php include("../menu.php"); ?>
		</footer>
	</body>
</html>