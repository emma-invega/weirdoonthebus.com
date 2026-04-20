<?php require_once("./vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("./headers.php"); ?>
		<title>WeirdoOnTheBus :: Homepage</title>
	</head>
	<body>
		<header>
			<a href="<?php echo $root; ?>">
				<img src="<?php echo $root; ?>images/wotb-signature.jpg" alt="WeirdoOnTheBus" title="WeirdoOnTheBus" height="85px" />
			</a>
			<?php include("./menu.php"); ?>
		</header>
		<main>
			<h1>About</h1>
			<p>Welcome to the website for my music label, WeirdoOnTheBus Records. Based in south Los Angeles, I work under a variety of aliases and have been producing music in many genres for many years. Everything here is completely free to download and are released under a creative commons attribution license, meaning that you are free to use, remix, and redistribute this content in any way you see fit, provided only that you give proper credit. Please enjoy the site and consider joining the mailing list for future updates.</p>
			<hr />
			<h1>Latest Releases</h1>
			<ul class="imggrid">
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>sunnli5hht/nostalgia-tape.php">
							<img src="<?php echo $root; ?>images/sunnli5hht-nostalgia-tape-cover.jpg" alt="Sunnli5hh/t - Nostalgia Tape" title="Sunnli5hh/t - Nostalgia Tape" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>sunnli5hht/nostalgia-tape.php">
								<strong>Nostalgia Tape</strong>
							</a>
							<a href="<?php echo $root; ?>sunnli5hht">
								<span>Sunnli5hh/t</span>
							</a>
							<small> March 9th, 2026</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>emma-invega/waves.php">
							<img src="<?php echo $root; ?>images/emma-invega-waves-cover.jpg" alt="Emma Invega - Waves" title="Emma Invega - Waves" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>emma-invega/waves.php">
								<strong>Waves</strong>
							</a>
							<a href="<?php echo $root; ?>emma-invega">
								<span>Emma Invega</span>
							</a>
							<small>January 17th, 2026</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>emma-invega/reciprocity.php">
							<img src="<?php echo $root; ?>images/emma-invega-reciprocity-cover.jpg" alt="Emma Invega - Reciprocity" title="Emma Invega - Reciprocity" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>emma-invega/reciprocity.php">
								<strong>Reciprocity</strong>
							</a>
							<a href="<?php echo $root; ?>emma-invega">
								<span>Emma Invega<span>
							</a>
							<small>December 14th, 2025</small>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure class="std">
						<a href="<?php echo $root; ?>emma-invega/everything-at-the-right-time.php">
							<img src="<?php echo $root; ?>images/emma-invega-everything-at-the-right-time-cover.jpg" alt="Emma Invega - Everything at the Right Time" title="Emma Invega - Everything at the Right Time" />
						</a>
						<figcaption>
							<a href="<?php echo $root; ?>emma-invega/everything-at-the-right-time.php">
								<strong>Everything at the Right Time</strong>
							</a>
							<a href="<?php echo $root; ?>emma-invega">
								<span>Emma Invega</span>
							</a>
							<small>November 15th, 2025</small>
						</figcaption>
					</figure>
				</li>
			</ul>
			<hr/>
			<h1>Mailing List</h1>
			<p>Sign up to get an email for every new release.</p>
			<input type="email" placeholder="email"/>
			<input type="submit" value="Sign Up"/>
		</main>
		<footer>
			<?php include("./menu.php"); ?>
		</footer>
	</body>
</html>