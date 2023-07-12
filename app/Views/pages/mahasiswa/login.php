<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<!-- Navbar -->
<section id="login">
    <img src="<?= base_url('img/profil-2.png') ?>" alt="Profil" class="position-absolute bottom-0 start-0 ms-5 translate-middle-x">
    <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
<nav class="navbar navbar-expand-lg position-relative mx-auto p-0">
  <div class="container-fluid shadow rounded-bottom-4">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="<?= base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">News</a>
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

<div class="form-login container">
    <div class="d-flex justify-content-end">
        <h1 class="judul-login text-light">Masuk Sebagai</h1>
    </div>
    <div class="d-flex justify-content-end mt-4">
        <ul class="sub-judul d-flex justify-content-between">
            <li class="px-4">
                <a href="" class="mah fs-5 px-3 py-2 text-decoration-none border rounded-pill">Mahasiswa</a>
            </li>
            <li class="px-4">
                <a href="<?= base_url('login/organisasi') ?>" class="fs-5 text-light text-decoration-none">Organisasi</a>
            </li>
        </ul>
    </div>
    <form action="<?= site_url('loginorg') ?>" method="POST">
      <?php if (('role') === 'organisasi' ): return ?>

      <?php endif; ?>
      <div class="d-flex mt-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="d-flex mt-4">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <button class="d-flex fs-4 rounded-pill border border-light">Masuk</button>
      <p class="text-end mt-4">Belum punya akun? <span><a href="<?= base_url('register/mahasiswa') ?>" class="text-light text-decoration-none">Daftar</a></span></p>
    </form>
    <?= session()->getFlashdata('message') ?>
    <?= session()->getFlashdata('errors') ?>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>