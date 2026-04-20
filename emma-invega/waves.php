<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emma Invega :: Waves</title>
    <link rel="stylesheet" href="<?php echo $root; ?>style/global.css" />
    <link rel="stylesheet" href="<?php echo $root; ?>style/emma-invega.css" />
  </head>
  <body>
	<header>
		<a href="<?php echo $root; ?>music/emma-invega"><img src="<?php echo $root; ?>images/emma-invega-ascii.png" alt="Emma Invega" title="Emma Invega" height="116px"></a>
		<?php require_once("../menu.php"); ?>
	</header>
    <main id="maincontent">
        <h1>Waves</h1>
        <section class="audiocontainer">
            <div>
                <div class="audiocontrols">
                    <button><span id="play">▶</span><span id="pause" style="display:none;">⏸</span></button>
                </div>
                <audio controls>
                    <source src="<?php echo $root; ?>audio/Emma Invega - Waves.wav" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <a href="<?php echo $root; ?>images/emma-invega-waves-cover.jpg" class="figlink" target="_blank">
                <figure class="std">
                    <img src="<?php echo $root; ?>images/emma-invega-waves-cover.jpg">
                </figure>
            </a>
        </section>
    </main>
    <?php require_once("../footer.php"); ?>
  </body>
</html>