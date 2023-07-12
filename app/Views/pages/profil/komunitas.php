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
    <h1 class="fs-1 text-center text-light">KOMUNITAS</h1>
    <div class="row mt-4 justify-content-center">
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('komunitas/avc') ?>">
          <div class="item">
            <img src="<?= base_url('img/komunitas/avc.png') ?>" alt="avc">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">AVC</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('komunitas/asbc') ?>">
          <div class="item">
          <img src="<?= base_url('img/komunitas/asbc.png') ?>" alt="asbc">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">ASBC</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('komunitas/avbc') ?>">
          <div class="item">
          <img src="<?= base_url('img/komunitas/avbc.png') ?>" alt="avbc">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">AVBC</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('komunitas/hexa') ?>">
          <div class="item">
          <img src="<?= base_url('img/komunitas/hexa.png') ?>" alt="hexa">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">HEXA</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <a class="text-decoration-none text-dark" href="<?= base_url('komunitas/pramuka') ?>">
          <div class="item">
          <img src="<?= base_url('img/komunitas/pramuka.png') ?>" alt="pramuka">
            <div class="text-center mt-2">
              <h6 class="fw-semibold">PRAMUKA</h6>
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