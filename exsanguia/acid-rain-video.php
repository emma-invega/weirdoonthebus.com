<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Exsanguia :: Acid Rain (Music Video)</title>
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
			<h1>Acid Rain (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/exsanguia-acid-rain-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/exsanguia-acid-rain-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> May 13th, 2021
			</p>
			<p>
				<strong>Epilepsy Warning:</strong> flashing lights and images<br/>
				<strong>Trigger Warnings:</strong> animal death, blood, drinking, drug use, and smoking
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=Q-HtBDpYyDY" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
			<p>
				<strong>Lyrics:</strong><br/>
				Ya, it's your boy, Emily.<br/>
				I know you wanna talk to me.<br/>
				I'm sorry that I'm never ever online.<br/>
				Need to find a place to stay.<br/>
				And help aint coming anyway.<br/>
				But don't worry girl, I'll be fine.<br/>
				.<br/>
				Life's a bitch,<br/>
				And I admire your death wish.<br/>
				But honestly I'm<br/>
				just trying to get high.<br/>
				.<br/>
				I down a fifth every night.<br/>
				Don't matter anyway can't get it right.<br/>
				Wash me away like acid rain.<br/>
				Anything to dull the pain.<br/>
				Drown me in poison.<br/>
				Don't need an occasion.<br/>
				Pushing me closer to deletion.<br/>
				Wash me away like acid rain.<br/>
				Anything to dull the pain.
			</p>
			<h1>Related Pages</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>exsanguia/green-soap-video.php">
							<img src="<?php echo $root; ?>images/exsanguia-green-soap-thumbnail.jpg" alt="EXSANGUIA - Green Soap (Music Video)" title="EXSANGUIA - Green Soap (Music Video)" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>exsanguia/green-soap-video.php">
								<strong>Green Soap (Music Video)</strong>
							</a>
							<small>May 13th, 2021</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>exsanguia/acid-rain-green-soap.php">
							<img src="<?php echo $root; ?>images/exsanguia-acid-rain-green-soap-cover.jpg" alt="EXSANGUIA - Acid Rain / Green Soap" title="EXSANGUIA - Acid Rain / Green Soap" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>exsanguia/acid-rain-green-soap.php">
								<strong>Acid Rain / Green Soap</strong>
							</a>
							<small>September 4th, 2020</small>
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