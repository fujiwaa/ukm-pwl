<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<!-- Navbar -->
<section id="home">
  <img src="<?= base_url('img/home.png') ?>" alt="Home" class="position-absolute top-0 bottom-0 end-0 z-0 mb-5">
  <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
<nav class="navbar navbar-expand-lg position-relative flex mx-auto p-0">
  <div class="container-fluid shadow rounded-bottom-4">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="layanan">Layanan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="faq">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container position-absolute text-center">
  <h1 class="text-white fs-1">Start Your Actifity</h1>
  <h2 class="text-white fs-3">Plan your actifity throught AMIKOM best student organizations </h2>
  <p class="text-white mt-3 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatum perferendis est a rerum hic saepe, ad quos enim praesentium!</p>
  <a href="" class="tombol-start text-dark text-decoration-none rounded-pill py-3 fs-5">Start</a>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>