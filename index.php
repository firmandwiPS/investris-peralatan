<?php
// Koneksi database
$host = "localhost";
$user = "root";
$password = "";
$db = "peralatan"; // Ganti sesuai nama database kamu

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SMK NEGERI COMPRENG</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Investaris Lab </h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about" class="active">About<br></a></li>
           <li><a href="#alat" class="active">Inventaris</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="backend/login.php">Login</a>

    </div>
  </header>

  <main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section" style="padding-top: 80px; padding-bottom: 80px; background-color: #f8f9fa;">

  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    
    <!-- Gambar Hero -->
    <img src="assets/img/leb.jpeg" class="img-fluid animated" alt="">
    
    
    <!-- Judul dan Deskripsi -->
    <h1>Selamat Datang di <span class="text-primary">Sistem Inventaris Lab PPLG BMTI</span></h1>
    <p class="lead">Kelola aset laboratorium dengan mudah, cepat, dan efisien demi masa depan yang tertata rapi.</p>

    <!-- Tombol CTA -->
    <div class="d-flex gap-3 mt-3">
      <a href="#about" class="btn btn-primary btn-lg scrollto">Mulai Sekarang</a>
      <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn btn-outline-secondary btn-lg d-flex align-items-center">
        <i class="bi bi-play-circle me-2"></i><span>Lihat Video</span>
      </a>
    </div>
    
  </div>

</section>
<!-- /Hero Section -->



   <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p>Sistem Inventaris Lab PPLG BMTI hadir untuk mendukung pengelolaan aset laboratorium secara efisien, transparan, dan terstruktur.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-5">
        <div class="about-img">
          <img src="assets/img/leb2.jpeg" class="img-fluid" alt="Tentang Sistem">
        </div>
      </div>

      <div class="col-lg-7">
        <h3 class="pt-0 pt-lg-5">Solusi Modern untuk Manajemen Inventaris Laboratorium</h3>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Tujuan</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Fitur Unggulan</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Manfaat</a></li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">

          <!-- Tab 1: Tujuan -->
          <div class="tab-pane fade show active" id="about-tab1">
            <p class="fst-italic">Sistem ini dirancang untuk menjawab kebutuhan dalam mencatat, memantau, dan mengelola seluruh aset di Laboratorium PPLG BMTI.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Digitalisasi Data Inventaris</h4>
            </div>
            <p>Semua data aset dicatat secara elektronik untuk meminimalisir kehilangan atau kerusakan data.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Monitoring Barang secara Real-Time</h4>
            </div>
            <p>Setiap perubahan atau pemindahan barang dapat dipantau secara langsung oleh admin atau pengelola.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Mendukung Pengambilan Keputusan</h4>
            </div>
            <p>Membantu pihak manajemen dalam mengambil keputusan berbasis data inventaris yang valid dan up-to-date.</p>
          </div><!-- End Tab 1 Content -->

          <!-- Tab 2: Fitur -->
          <div class="tab-pane fade" id="about-tab2">
            <p class="fst-italic">Dibekali berbagai fitur yang memudahkan pengelolaan aset lab secara optimal.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Input & Edit Data Barang</h4>
            </div>
            <p>Admin dapat dengan mudah menambahkan, memperbarui, atau menghapus data barang sesuai kebutuhan.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Tracking Lokasi dan Kondisi Barang</h4>
            </div>
            <p>Setiap aset dapat dicatat lokasinya dan status kondisinya untuk memudahkan pengecekan berkala.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Export Laporan Otomatis</h4>
            </div>
            <p>Sistem mampu menghasilkan laporan aset secara berkala dalam format PDF atau Excel.</p>
          </div><!-- End Tab 2 Content -->

          <!-- Tab 3: Manfaat -->
          <div class="tab-pane fade" id="about-tab3">
            <p class="fst-italic">Implementasi sistem ini membawa berbagai dampak positif bagi pengelolaan laboratorium.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Efisiensi Waktu dan Tenaga</h4>
            </div>
            <p>Pengelolaan inventaris menjadi lebih cepat tanpa proses manual yang memakan waktu.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Transparansi dan Akuntabilitas</h4>
            </div>
            <p>Data terbuka dan tercatat dengan baik, mengurangi risiko penyalahgunaan aset laboratorium.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Menunjang Akreditasi Sekolah</h4>
            </div>
            <p>Dokumentasi aset yang rapi dan sistematis sangat mendukung proses akreditasi dan audit.</p>
          </div><!-- End Tab 3 Content -->

        </div>

      </div>
    </div>
  </div>

</section>
<!-- /About Section -->




<!-- Data Alat Section -->
<section id="alat" class="text-center">
  <div class="container">
    <h2>Data Alat Laboratorium</h2>
    <p>Berikut adalah daftar alat yang tersedia di Laboratorium PPLG:</p>

    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>ID Alat</th>
            <th>Nama Alat</th>
            <th>Jumlah</th>
            <th>Spesifikasi</th>
            <th>Merk</th>
            <th>Model</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $sql = "SELECT * FROM alat";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$no}</td>
                          <td>" . htmlspecialchars($row['id_alat']) . "</td>
                          <td>" . htmlspecialchars($row['nama_alat']) . "</td>
                          <td>" . htmlspecialchars($row['jumlah']) . "</td>
                          <td>" . htmlspecialchars($row['spesifikasi']) . "</td>
                          <td>" . htmlspecialchars($row['merk']) . "</td>
                          <td>" . htmlspecialchars($row['model']) . "</td>
                        </tr>";
                  $no++;
              }
          } else {
              echo "<tr><td colspan='7'>Tidak ada data tersedia.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>


  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Inventaris Lab</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Pesantren No.KM, RW.2, Cibabat </p>
              <p>Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514</p>
              <p class="mt-3"><strong>Phone:</strong> <span>(022) 6652326</span></p>
              <p><strong>Email:</strong> <span>bbppmpv.bmti@kemdikbud.go.id</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>