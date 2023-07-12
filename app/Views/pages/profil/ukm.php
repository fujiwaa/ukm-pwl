<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<!-- Navbar -->
<section id="news">
  <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
<nav class="navbar navbar-expand-lg position-relative flex mx-auto p-0">
  <div class="container-fluid shadow rounded-bottom-4">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="<?= base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="">Orma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('news') ?>">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="organisasi container">
    <a class="back d-flex justify-content-start" href="<?= base_url('profil') ?>">
        <svg class="svg-inline--fa fa-caret-left fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
    </svg>
    </a>
    <h1 class="fs-1 text-center text-light">UKM</h1>
    <div class="row mt-4 justify-content-center">
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/amcc') ?>">
          <div class="item">
            <img src="<?= base_url('img/ukm/amcc.png') ?>" alt="amcc">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">AMCC</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/aec') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/aec.png') ?>" alt="aec">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">AEC</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/amo') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/amo.png') ?>" alt="amo">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">AMO</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/koma') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/koma.png') ?>" alt="koma">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">KOMA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/mayapala') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/mayapala.png') ?>" alt="mayapala">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">MAYAPALA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/ikna') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/ikna.png') ?>" alt="ikna">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">IKNA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/ukijashtis') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/uki-jasthis.png') ?>" alt="uki jashtis">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">UKI JASHTIS</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/taekwondo') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/tkd.png') ?>" alt="taekwondo">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">TAEKWONDO</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/manggar') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/manggar.png') ?>" alt="manggar">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">MANGGAR</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/fossil') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/fossil.png') ?>" alt="fossil">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">FOSSIL</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/journal') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/lpm-journal.png') ?>" alt="lpm journal">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">JOURNAL</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/kempo') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/kempo.png') ?>" alt="kempo">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">KEMPO</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('ukm/pencaksilat') ?>">
          <div class="item">
          <img src="<?= base_url('img/ukm/pencak-silat.png') ?>" alt="pencak silat">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">PENCAK SILAT</h6>
            </div>
          </div>
        </a>
      </div>
    </div>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>