<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Exsanguia :: Green Soap (Music Video)</title>
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
			<h1>Green Soap (Music Video)</h1>
			<video controls>
				<source src="<?php echo $root; ?>/src/exsanguia-green-soap-music-video.mp4" type="video/mp4">
				<source src="<?php echo $root; ?>/src/exsanguia-green-soap-music-video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			<p>
				<strong>Released:</strong> May 13th, 2021
			</p>
			<p>
				<strong>Epilepsy Warning:</strong> flashing lights and images<br/>
				<strong>Trigger Warnings:</strong> blood, drug use, nudity, psychosis
			</p>
			<p>
				<strong>License:</strong> 
				<a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
					Creative Commons Attribution 4.0
				</a>
			</p>
			<p>
				<a href="https://www.youtube.com/watch?v=TOoeIT2g5dk" target="_blank">
					<button class="cta">Watch on YouTube ▶</button>
				</a>
			</p>
			<p>
				<strong>Lyrics:</strong><br/>
				Cityscapes scrawled across the bed sheets - screaming.<br/>
				How long's it been maybe weeks am I dreaming?<br/>
				Faces of tech billionaires multiplying in the sea.<br/>
				Deep Dream drowning replicating, it's all there'll ever be.<br/>
				You shouldn't talk to me.<br/>
				I'm a bad influence.<br/>
				Tying to get my shit together but my mentals aint balanced.<br/>
				.<br/>
				Breathing blood into me.<br/>
				Drifting off to sleep in a bath full of green soap.
			</p>
			<h1>Related Pages</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>exsanguia/acid-rain-video.php">
							<img src="<?php echo $root; ?>images/exsanguia-acid-rain-thumbnail.jpg" alt="EXSANGUIA - Acid Rain (Music Video)" title="EXSANGUIA - Acid Rain (Music Video)" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>exsanguia/acid-rain-video.php">
								<strong>Acid Rain (Music Video)</strong>
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