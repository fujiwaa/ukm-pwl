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
<img src="<?= base_url('img/garis.png') ?>" alt="Profil" class="garis position-absolute bottom-0 end-0 translate-middle-x">
  <!-- <img src="<?= base_url('img/pesawat.png') ?>" alt="Profil" class="pesawat position-absolute bottom-50 end-0 translate-middle-x z-1"> -->
  <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
<nav class="navbar navbar-expand-lg position-relative flex mx-auto p-0">
  <div class="container-fluid shadow rounded-bottom-4">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="">News</a>
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

<div class="news container">
    <h1 class="fs-1 text-center text-light">NEWS</h1>
    <h2 class="fs-2 mt-5 text-start text-light">Berita Utama</h2>
    <?php if (session()->get('users')['role'] === 'organisasi') : ?>
      <a class="btn btn-success my-3" href="#" role="button">Tambah News</a>
    <?php endif; ?>
    <div class="justify-content-start">
        <div class="card-news card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('img/news/zoro.jpg') ?>" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At pariatur odio ad architecto consequuntur voluptates. Voluptas ad suscipit dolorem aspernatur.</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>