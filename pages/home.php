<?php
function homePage() {
  ob_start();
  echo headerpage(); ?>
  <main>
    <?php
    echo sliderSectionHome();
    echo homeGameSectionPopuler();
    echo homeGameSectionNew();
    ?>
  </main>
  <?php
  return ob_get_clean();
}

