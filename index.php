<?php require_once("./vars.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emma Invega :: Homepage</title>
    <link rel="stylesheet" href="<?php echo $root; ?>style/global.css" />
  </head>
  <body>
    <?php require_once("./header.php"); ?>
    <main id="maincontent">
        <h1>About</h1>
        <p>Emma Invega is an independent musician and artist from South Central Los Angeles. Producing mostly instrumental music, they have operated under a number of different artist names or aliases over the years. All previous names are wrapped under the "music label" WeirdoOnTheBus, with the most direct predecessor of Emma's current work being EXSANGUIA. This website is intended to showcase Emma's current body of work starting from December 2024 onwards, as well as archive some of the highlights from the WeirdoOnTheBus era. All of the music and sample packs here are completely free to download and are released as creative commons works, meaning that you are free to use, remix, and redistribute this content in any way you see fit, provided only that you give proper credit. Please enjoy the site and consider joining the mailing list for future updates.</p>
        <hr />
        <h1>Latest Releases</h1>
        <ul class="imggrid">
            <li>
                <a href="<?php echo $root; ?>music/waves.php" class="figlink">
                    <figure class="std">
                        <img src="<?php echo $root; ?>images/waves-cover.jpg">
                        <figcaption>Waves</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="<?php echo $root; ?>music/reciprocity.php" class="figlink">
                    <figure class="std">
                        <img src="<?php echo $root; ?>images/reciprocity-cover.jpg">
                        <figcaption>Reciprocity</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="<?php echo $root; ?>music/everything-at-the-right-time.php" class="figlink">
                    <figure class="std">
                        <img src="<?php echo $root; ?>images/everything-at-the-right-time-cover.jpg">
                        <figcaption>Everything At The Right Time</figcaption>
                    </figure>
                </a>
            </li>
        </ul>
        <hr/>
        <h1>Mailing List</h1>
        <p>Sign up to get an email everytime Emma releases something new.</p>
        <input type="email" placeholder="email"/>
        <input type="submit" value="Sign Up"/>
    </main>
    <?php require_once("./footer.php"); ?>
  </body>
</html>