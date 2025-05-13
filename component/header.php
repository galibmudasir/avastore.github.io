<?php
function headerpage()
{
  ob_start(); 
  global $baseurl; 
  ?>
  <header>
    <section class="section-wrapper p-3 shadow">
      <div class="header-wrapper">
        <div class="row align-items-center">
          <div class="col-6">
            <img class="white-img" src="<?= $baseurl;?>/images/logo.png" width="120" loading="lazy"/>
          </div>
          <div class="col-3 text-end">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><div>
    </button><div>
  </div>
</nav>
          </div>
          <div class="col-3">
            <a class="btn btn-info btn-sm">
              daftar
            </a>
          </div>
        </div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/game">Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
      </div>
    </section>
  </header>
  <?php return ob_get_clean();
}

?>
