<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
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
            <a class="nav-link text-white" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="profil">Orma</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="news">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="layanan">Layanan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="">FAQ</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="faq container">
        <h1 class="fs-1 text-center text-light">FAQ</h1>
        <div class="text-center">
            <button type="button" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#ModalFaq1">Apa itu Orma / Organisasi Mashasiswa?</button>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalFaq2">Apa kegunaan UKM-U?</button>
            <a href="<?= base_url('profil') ?>" type="button" class="btn">Apa aja sih Orma di Universitas Amikom Yogyakarta?</a>
        </div>
    </div>


    <!-- Modal Faq 1-->
    <div class="modal fade" id="ModalFaq1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Apa itu Orma?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>UKM (Unit Kegiatan Mahasiswa) dan BSO (Badan Semi Otonom) merupakan cikal bakal terbentuknya UKM. Namun UKM&BSO adalah organisasi dibawah koordinasi dan instruksi BEM dalam struktur LM Universitas AMIKOM Yogyakarta yang menangani hal-hal bersifat spesifik pada bidang tertentu sesuai dengan kerohanian, penalaran, kemampuan, keilmuan, minat dan bakat anggotanya.</p>
                <p>Himpunan Mahasiswa adalah organisasi mahasiswa program studi yang terdapat pada LM Universitas AMIKOM Yogyakarta, berkedudukan dibawah instruksi Kepala Program Studi serta memiliki koordinasi dengan seluruh anggota LM dalam Struktur LM Universitas AMIKOM Yogyakarta.</p>
                <p>Komunitas adalah komunitas yang ada dalam kampus dan sudah terdaftar di Universitas AMIKOM Yogyakarta, serta wadah pemersatu mahasiswa untuk dapat mengembangkan minat bakat dan keahlian dibidang masing-masing.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Faq 2-->
    <div class="modal fade" id="ModalFaq2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Apa kegunaan UKM-U?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>UKM-U akan memudahkan mahasiswa untuk mengetahui semua organisasi yang ada di kampus dan juga UKM-U adalah salah satu pintu masuk mahasiswa baru menuju UKM&BSO/Himpunan/Komunitas.</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>