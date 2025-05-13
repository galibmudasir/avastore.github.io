<?php

function cardGame($image, $nama, $link){
  ob_start(); ?>
     <a class="card card-game rounded bg-colortheme shadow border-0" href="<?= $link ?>">
       <div class="card-image">
         <img src="<?= $image ?>" width="100" class="w-100"/>
       </div>
       <div class="card-content p-2 text-center font-small">
         <div class="fw-bold">
           <?= $nama ?>
         </div>
       </div>
     </a>
  <?php return ob_get_clean();
}