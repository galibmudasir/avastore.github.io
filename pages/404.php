<?php

function notFoundPage() {
  ob_start();
  echo headerpage();
    ?>
    <section class="p-3">
      <h2>Halaman Tidak ditemukan</h2>
    </section>
<?php return ob_get_clean();
}
   
