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
          <a class="nav-link text-white" href="<?= base_url('layanan') ?>">Layanan</a>
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
    <h1 class="fs-1 text-center text-light">HIMPUNAN</h1>
    <div class="row mt-4 justify-content-center">
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himaditi') ?>">
          <div class="item">
            <img src="<?= base_url('img/himpunan/himaditi.png') ?>" alt="himaditi">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMADITI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himasi') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himasi.png') ?>" alt="himasi">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMASI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himika') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himika.png') ?>" alt="himika">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMIKA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himmi') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himmi.png') ?>" alt="himmi">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMMI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himpwk') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himpwk.png') ?>" alt="himpwk">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMPWK</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himti') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himti.png') ?>" alt="himti">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMTI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himwira') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himwira.png') ?>" alt="himwira">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMWIRA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/hmif') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/hmif.png') ?>" alt="hmif">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HMIF</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/hime') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/hime.png') ?>" alt="hime">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIME</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himaksi') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himaksi.png') ?>" alt="himaksi">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMAKSI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himga') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himga.jpg') ?>" alt="himga">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMGA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himtekk') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himtekk.png') ?>" alt="himtekk">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMTEKK</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/himip') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/himip.jpg') ?>" alt="himmip">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">HIMIP</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/komahi') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/komahi.jpg') ?>" alt="komahi">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">KOMAHI</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('himpunan/pastuvena') ?>">
          <div class="item">
          <img src="<?= base_url('img/himpunan/pastuvena.png') ?>" alt="pastuvena">
            <div class="text-center mt-3">
              <h6 class="fw-semibold">PASTUVENA</h6>
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