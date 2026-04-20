<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Exsanguia :: Gj50yu (Music Video)</title>
		<link rel="stylesheet" href="<?php echo $root; ?>style/exsanguia.css" />
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>exsanguia">
				<img src="<?php echo $root; ?>images/exsanguia-header.png" alt="EXSANGUIA" title="EXSANGUIA" height="70px" />
			</a>
			<?php require_once("../menu.php"); ?>
		</header>
		<main>
			<h1>Gj50yu (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/exsanguia-gj50yu-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/exsanguia-gj50yu-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> October 14th, 2018
			</p>
			<p>
				<strong>Description:</strong> This video was made and shared on the 1 year anniversary of the albums release.
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=Eu-PbF8mHKo" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
			<h1>Related Pages</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>exsanguia/cursed-objects-side-b.php">
							<img src="<?php echo $root; ?>images/exsanguia-cursed-objects-cover.jpg" alt="EXSANGUIA - Cursed Objects (side B)" title="EXSANGUIA - Cursed Objects (side B)" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>exsanguia/cursed-objects-side-b.php">
								<strong>Cursed Objects (side B)</strong>
							</a>
							<small>October 13th, 2017</small>
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