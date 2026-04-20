<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>WeirdoOnTheBus :: Sample Packs</title>
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>"><img src="<?php echo $root; ?>images/wotb-signature.jpg" alt="WeirdoOnTheBus" title="WeirdoOnTheBus" height="85px"></a>
			<?php include("../menu.php"); ?>
		</header>
		<main id="maincontent">
			<h1>Sample Packs</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>sample-packs/blurry-pack.php">
							<img src="<?php echo $root; ?>images/blurry-pack-cover.jpg" alt="Blurry Pack" title="Blurry Pack" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>sample-packs/blurry-pack.php">
								<strong>Blurry Pack</strong>
							</a>
							<small>February 16th, 2024</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>sample-packs/xylophone-and-vibraphone-sample-pack.php">
							<img src="<?php echo $root; ?>images/xylophone-and-vibraphone-sample-pack-cover.jpg" alt="Xylophone & Vibraphone Sample Pack" title="Xylophone & Vibraphone Sample Pack" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>sample-packs/xylophone-and-vibraphone-sample-pack.php">
								<strong>Xylophone & Vibraphone Sample Pack</strong>
							</a>
							<small>December 15th, 2023</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/mixing-console-foley.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/mixing-console-foley-cover.jpg">
							<figcaption>Mixing Console Foley</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/kingdom-hearts-sparkles.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/kingdom-hearts-sparkles-cover.jpg">
							<figcaption>Kingdom Hearts Sparkles</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/madoka-magica-sound-effects.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/madoka-magica-sound-effects-cover.jpg">
							<figcaption>Madoka Magica Sound Effects</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/the-matrix-trilogy-sfx.php" class="figlink">
						<figure class="std">
							<div class="blackbg">
								<img src="<?php echo $root; ?>images/the-matrix-trilogy-sfx-cover.jpg">
							</div>
							<figcaption>The Matrix Trilogy SFX</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/monster-energy-sample-pack.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/monster-energy-sample-pack-cover.jpg">
							<figcaption>Monster Energy Sample Pack</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/pickle-jars-and-knitting-needles.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/pickle-jars-and-knitting-needles-cover.jpg">
							<figcaption>Pickle Jars and Knitting Needles</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/industrial-sample-pack.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/industrial-sample-pack-cover.jpg">
							<figcaption>Industrial Sample Pack</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/ems-granular-pack.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/ems-granular-pack-cover.jpg">
							<figcaption>Em's Granular Pack</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/body-sounds-sample-pack.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/body-sounds-sample-pack-cover.jpg">
							<figcaption>Body Sounds Sample Pack</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/human-resources-reverb.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/human-resources-reverb-cover.jpg">
							<figcaption>Human Resources Reverb</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="<?php echo $root; ?>music/lofi-percussion.php" class="figlink">
						<figure class="std">
							<img src="<?php echo $root; ?>images/lofi-percussion-cover.jpg">
							<figcaption>Lofi Percussion</figcaption>
						</figure>
					</a>
				</li>
			</ul>
		</main>
		<footer>
			<?php include("../menu.php"); ?>
		</footer>
	</body>
</html>