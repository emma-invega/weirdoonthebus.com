<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("../headers.php"); ?>
		<title>Syntactic Sugar :: Music</title>
		<link rel="stylesheet" href="<?php echo $root; ?>style/syntactic-sugar.css" />
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>syntactic-sugar">
				<img src="<?php echo $root; ?>images/syntactic-sugar-header.png" alt="Syntactic Sugar" title="Syntactic Sugar" height="112px" />
			</a>
			<?php include("../menu.php"); ?>
		</header>
		<main>
			<h1>Music</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>syntactic-sugar/nocturnal-on-body-detection.php">
							<img src="<?php echo $root; ?>images/syntactic-sugar-nocturnal-on-body-detection-cover.jpg" alt="Syntactic Sugar - Nocturnal / On-Body Detection" title="Syntactic Sugar - Nocturnal / On-Body Detection" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>syntactic-sugar/nocturnal-on-body-detection.php">
								<strong>Nocturnal / On-Body Detection</strong>
							</a>
							<small>March 22nd, 2019</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>syntactic-sugar/delta-repository-ep.php">
							<img src="<?php echo $root; ?>images/syntactic-sugar-delta-repository-ep-cover.jpg" alt="Syntactic Sugar - Delta Repository EP" title="Syntactic Sugar - Delta Repository EP" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>syntactic-sugar/delta-repository-ep.php">
								<strong>Delta Repository EP</strong>
							</a>
							<small>December 31st, 2018</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>syntactic-sugar/artificially-accelerated-emotional-responses.php">
							<img src="<?php echo $root; ?>images/syntactic-sugar-artificially-accelerated-emotional-responses-cover.jpg" alt="Syntactic Sugar - Artificially Accelerated Emotional Responses" title="Syntactic Sugar - Artificially Accelerated Emotional Responses" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>syntactic-sugar/artificially-accelerated-emotional-responses.php">
								<strong>Artificially Accelerated Emotional Responses</strong>
							</a>
							<small>July 28th, 2017</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>syntactic-sugar/brief-moments-of-simulated-calculation.php">
							<img src="<?php echo $root; ?>images/syntactic-sugar-brief-moments-of-simulated-calculation-cover.jpg" alt="Syntactic Sugar - Brief Moments of Simulated Calculation" title="Syntactic Sugar - Brief Moments of Simulated Calculation" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>syntactic-sugar/brief-moments-of-simulated-calculation.php">
								<strong>Brief Moments of Simulated Calculation</strong>
							</a>
							<small>May 28th, 2017</small>
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