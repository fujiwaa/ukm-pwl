<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<!-- Navbar -->
<section id="profil">
  <img src="<?= base_url('img/amikom.png') ?>" alt="Amikom" class="logo-amikom position-fixed start-0 mt-2">
  <nav class="navbar navbar-expand-lg position-relative flex mx-auto p-0">
    <div class="container-fluid shadow rounded-bottom-4">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="profil">Orma</a>
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
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah News</button>
      <?php endif; ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Input Berita</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('news/store') ?>" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Upload Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Deskripsi Berita</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- News Cards -->
      <?php foreach ($news as $item) : ?>
          <div class="d-flex justify-content-start">
            <div class="card-news card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?= base_url('img/news/' . $item['gambar']) ?>" class="card-img-top" alt="News Image">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                      <h5 class="card-title"><?= $item['judul'] ?></h5>
                      <p class="card-text"><?= $item['deskripsi'] ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php if (session()->get('users')['role'] === 'organisasi') : ?>
              <div class="card-delete text-end">
                <a class="btn btn-danger" href="<?= base_url('news/delete/'. $item['id']); ?>">Delete</a>
              </div>
              <?php endif; ?>
          </div>
      <?php endforeach; ?>
  </div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>