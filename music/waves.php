<?php require_once("../vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emma Invega :: Music</title>
    <link rel="stylesheet" href="<?php echo $root; ?>style/global.css" />
  </head>
  <body>
    <?php require_once("../header.php"); ?>
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
            <a href="<?php echo $root; ?>images/waves-cover.jpg" class="figlink">
                <figure class="std">
                    <img src="<?php echo $root; ?>images/waves-cover.jpg">
                </figure>
            </a>
        </section>
    </main>
    <?php require_once("../footer.php"); ?>
  </body>
</html>