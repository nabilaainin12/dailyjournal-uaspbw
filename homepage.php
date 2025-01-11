<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nbylla Skincare</title>
    <link rel="icon" href="produk/logo.webp" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    
  <!-- hero begin -->
<section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="gambar/banner.jpg" class="img-fluid" width="300" />
        <div>
          <h1 class="fw-bold display-4">
            Transform your skin, transform your confidence
          </h1>
          <h4 class="lead display-6">
            Transformasikan kulitmu, Tingkatkan kepercayaan dirimu.
          </h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>
  <!-- hero end -->
  <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="gambar/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
  <!-- gallery start -->
  <section id="gallery" class="text-center p-5 bg-danger-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);
        $isActive = true; // Untuk menentukan slide pertama aktif
        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="carousel-item <?php if ($isActive) { echo 'active'; $isActive = false; } ?>">
          <div class="d-flex justify-content-center">
          <img src="gambar/<?= $row["gambar"] ?>" class="img-fluid" style="width: 50%; max-height: 400px; object-fit: cover;" alt="Gambar Gallery">

        </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <!-- Kontrol navigasi carousel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
  <!-- gallery end -->
   <!-- schedule begin -->
   <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SENIN</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Etika Profesi<br />16.20-18.00 | H.4.4
              </li>
              <li class="list-group-item">
                Sistem Operasi<br />18.30-21.00 | H.4.8
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SELASA</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Pendidikan Kewarganegaraan<br />12.30-13.10 | Kulino
              </li>
              <li class="list-group-item">
                Probabilitas dan Statistik<br />15.30-18.00 | H.4.9
              </li>
              <li class="list-group-item">
                Kecerdasan Buatan<br />18.30-21.00 | H.4.11
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">RABU</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">KAMIS</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Bahasa Indonesia<br />12.30-14.10 | Kulino
              </li>
              <li class="list-group-item">
                Pendidikan Agama Islam<br />16.20-18.00 | Kulino
              </li>
              <li class="list-group-item">
                Penambangan Data<br />18.30-21.00 | H.4.9
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">JUMAT</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Pemrograman Web Lanjut<br />10.20-12.00 | D.2.K
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SABTU</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">FREE</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- schedule end -->
  <!-- about me begin -->
  <section id="aboutme" class="text-center p-5 bg-danger-subtle">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-center">
        <div class="p-3">
          <img
            src="gambar/profile.jpg"
            class="rounded-circle border shadow"
            width="300"
          />
        </div>
        <div class="p-md-5 text-sm-start">
          <h3 class="lead">A11.2023.15228</h3>
          <h1 class="fw-bold">Nabila Ainindita</h1>
          Program Studi Teknik Informatika<br />
          <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none"
            >Universitas Dian Nuswantoro</a
          >
        </div>
      </div>
    </div>
  </section>
  <!-- about me end -->
 