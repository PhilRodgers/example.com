<?php

//Build the page metadata
$meta = [];
$meta['description'] = "Welcome to Philip Rodgers Web Site";
$meta['keywords'] = "Welcome, MicroTrain2101, development, web development";

$content=null;

$content .= <<<EOT
<main>                

</div>
<div id="Sidebar">
  <div id="AboutMe">
    <div class="header">Hello, I am Philip Rodgers</div>
    <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="Philip Rodgers" class="img-circle">
  </div>
</div>
</div>

<div id="Footer" class="clearfix">
<ul role="navigation">
    <li><a href="terms.php">Terms</a></li>
    <li><a href="privacy.php">Privacy</a></li>
    <li><a href="cookies.php">Cookies</a></li>
</ul>
</div>

</main>
EOT;
    
include '../core/layout.php';