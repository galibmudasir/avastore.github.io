<?php

function homeGameSectionNew() {
  ob_start();
  global $koneksi;
  global $baseurl;
   ?>
  
  <section class="section-game-new p-3">
  <div class="header-wrapper mb-2">
    <h2 class="fw-bold">Game Baru</h2>
  </div>
  
  <?php
  if (!$koneksi) {
    die("Koneksi gagal atau belum terbuat.");
  }

  $sql = "SELECT * FROM game_list WHERE kategori = 'new' LIMIT 6";
  $result = $koneksi->query($sql);
  echo '<div class="row mt-3">';
  // Cek apakah ada data
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $image = $baseurl.$row["thumbnail"];
      $nama = $row["nama"];
      $link ="/games/". $row["slug"];
      ?>
   <div class="col-4 pe-0">
     <?= cardGame($image, $nama, $link); ?>
   </div>
     
    <?php }
  } else {
    echo "Tidak ada data.";
  }
  echo "</div>";
  ?>
 </section>
  
  <?php
  
  
  
  return ob_get_clean();
}