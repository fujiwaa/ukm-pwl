<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<!-- Navbar -->
<section id="profil">
<img src="<?= base_url('img/profil-2.png') ?>" alt="Profil" class="position-absolute bottom-0 start-50 translate-middle-x">
  <img src="<?= base_url('img/profil-1.png') ?>" alt="Profil" class="position-absolute bottom-0 start-50 translate-middle-x z-1">
  <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
<nav class="navbar navbar-expand-lg position-relative flex mx-auto p-0">
  <div class="container-fluid shadow rounded-bottom-4">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="news">News</a>
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

<div class="pilihan d-flex flex-row justify-content-center">
    <a href="<?= base_url('profil/ukm') ?>" class="text-dark text-decoration-none rounded-pill py-2 fs-5">UKM</a>
    <a href="" class="text-dark text-decoration-none rounded-pill py-2 fs-5">BSO</a>
    <a href="" class="text-dark text-decoration-none rounded-pill py-2 fs-5">HIMPUNAN</a>
    <a href="" class="text-dark text-decoration-none rounded-pill py-2 fs-5">KOMUNITAS</a>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>