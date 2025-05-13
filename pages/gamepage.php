<?php

function gamePage($uri){
  ob_start();
  echo headerpage();
  echo "<h1 class='fw-bold'>ini adalah gamepage</h1>";
  echo $uri;
  
  return ob_get_clean();
}