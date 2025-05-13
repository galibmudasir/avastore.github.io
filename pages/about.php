<?php

function aboutPage(){
  ob_start();
  echo headerpage();
  echo "<h1>ini adalah about</h1>";
  
  return ob_get_clean();
}
?>
  
  
