<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DjEver.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/holadj/assets/img/logo.jpg") }}" rel="icon">
  <link href="{{ asset("/holadj/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/holadj/assets/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/holadj/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/holadj/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("/holadj/assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/holadj/assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("/holadj/assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/holadj/assets/css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url("index.html") }}" class="logo d-flex align-items-center">
          <span>DjEver.</span>
        </a>

        <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="{{ url("#hero") }}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#about") }}">DjEver.</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#search") }}">Cari Dj</a></li>

          <li><a class="nav-link scrollto" href="{{ url("#contact") }}">Contact</a></li>

          @auth
          <li><a class="getstarted scrollto" href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk </a></li>
          <li><a class="getstarted scrollto" href="{{ route('register') }}">Daftar</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Apakah Anda mencari DJ profesional untuk membuat acara Anda berbeda dari yang lain?</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Kami di DjEver siap membantu Anda menemukan DJ paling berbakat dan berpengalaman yang akan menghadirkan atmosfer yang tak terlupakan dalam acara Anda!</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="{{ url("#about") }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{ asset("/holadj/assets/img/herofix.png") }}" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content"style="text-align: justify;">
        <h3 class="text-center">Apa Itu DjEver?</h3>
        <h2>DjEver adalah sebuah website yang dapat mempermudah semua orang untuk mencari seorang Dj yang dapat mengisi acara anda dengan meriah </h2>
        <p>
          dengan fitur filterisasi, kami dapat mempermudah anda mencari seorang dj dengan kepopularitas yang tinggi, dapat mencari di sekitar anda maupun di luar jangkauan anda.
          </p>
        <div class="text-center text-lg-start">
          <a href="{{ url("#search") }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Read More</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{ asset("/holadj/assets/img/herofix.png") }}" class="img-fluid" alt="">
    </div>

  </div>
</div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->

<!-- End Values Section -->

<!-- ======= Counts Section ======= -->

<!-- End Counts Section -->

<!-- ======= Features Section ======= -->

<!-- / row -->


  <!-- Feature Tabs -->

  <!-- End Tabs -->

      <!-- Tab Content -->
  <!-- End Feature Tabs -->

  <!-- Feature Icons -->

  <!-- End Feature Icons -->
<!-- End Features Section -->

<!-- ======= Search Section ======= -->
<section id="search" class="d-flex align-items-center">
<div class="container">
<div class="row">
  <div class="col-12 text-center">
    <h2>Cari DJ Favorit Anda</h2>

    <p>Temukan DJ terbaik untuk acara Anda di DjEver. - Karena musik yang hebat adalah kunci untuk perayaan yang luar biasa!</p>
  </div>

  <div class="col-10 mx-auto">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#cari" type="button" role="tab" aria-controls="nav-home" aria-selected="true">cari</button>
  </div>
  
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="cari" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- Dropdon Tipe Dj -->
  <div class="input-group input-cari mb-3">
<button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#portfolio-flters">Rekomendasi</a></li>
<li><a class="dropdown-item" href="#portfolio-flters">Terdekat</a></li>
<li><a class="dropdown-item" href="#portfolio-flters">Luar Pulau</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="#portfolio-flters">SuperStar</a></li>
</ul>
<input class="form-control border" type="search" placeholder="cari berdasarkan lokasi, id, filter" id="example-search-input">
</div>
  </div>
</div>
</div>
</div>


</section><!-- End Services Section -->

<!-- ======= Pricing Section ======= -->
<!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<!-- End F.A.Q Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Daftar Dj</h2>
    <p>Selalu Memilih Yang Terbaik</p>
  </header>

  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">Rekomendasi</li>
        <li data-filter=".filter-app">Terdekat</li>
        <li data-filter=".filter-card">Luar Pulau</li>
        <li data-filter=".filter-web">SuperStar</li>
      </ul>
    </div>
  </div>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj1.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj</h4>
          <p>Dj Billy</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj1.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Dj 1"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj2.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj </h4>
          <p>Dj Dejavx</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj2.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Dj 2"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj3.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj</h4>
          <p>Dj Rizky Bastian</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj3.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Dj 3"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj4.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj</h4>
          <p>Dj Devina</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj4.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj5.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj</h4>
          <p>Dj Yasmin</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj5.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset("/holadj/assets/img/portfolio/dj6.jpeg") }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Dj</h4>
          <p>Dj Una</p>
          <div class="portfolio-links">
            <a href="{{ url("assets/img/portfolio/dj6.jpeg") }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
            <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    
  </div>

</div>

</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Testimoni</h2>
    <p>Apa Kata Mereka Untuk DjEver.</p>
  </header>

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
          Saya sangat senang bisa berbagi pengalaman luar biasa saya dengan website DjEver. Website DjEver yang luar biasa, dengan setiap  bakat para Dj  dan kemampuan yang luar biasa untuk menghidupkan suasana dalam setiap acara.</p>
          <div class="profile mt-auto">
            <h3>Rafael Dandi</h3>
            <h4>Account Google </h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
          Saya sangat senang dan puas dengan pelayanan yang diberikan oleh DjEver! Mereka benar-benar menghadirkan pengalaman musik yang luar biasa untuk acara pernikahan kami. DJ-nya mengerti dengan baik apa yang kami inginkan dan berhasil menciptakan atmosfer yang sempurna.</p>
          <div class="profile mt-auto">
            <h3>Starla</h3>
            <h4>Account Google</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
          Musik yang dia pilih sangat cocok dengan selera kami dan berhasil membuat semua tamu kami bersemangat dan berdansa sepanjang malam. Kemampuannya dalam membaca suasana acara dan menjaga energi selalu tinggi adalah luar biasa.</p>
          <div class="profile mt-auto">
            <h3>Kaesang Sanjara</h3>
            <h4>Account Google</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<!-- End Team Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Bekerjasama Dengan</h2>
    <p>Partner DjEver.</p>
  </header>

  <div class="clients-slider swiper">
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide"><img src="{{ asset("/holadj/assets/img/clients/client1fix.jpg") }}" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset("/holadj/assets/img/clients/client2fix.jpg") }}" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset("/holadj/assets/img/clients/client3fix.jpg") }}" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset("/holadj/assets/img/clients/client4fix.jpg") }}" class="img-fluid" alt=""></div>
    </div>
  </div>
</div>

</section><!-- End Clients Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-map"></i>
          <h3>Address</h3>
          <p class="text-center"> Jl. Kp. Melayu Besar 2 No.3, RT.8/RW.2, Kb. Baru, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12830</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p>likeppkmwithoutpp@gmail.com</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>+6281380835608
          </p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="row gy-4 mt-1">

      <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253795.68986008022!2d106.62575981500912!3d-6.3216834261935535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39d0a885e21%3A0x7fd146ef233b0a44!2sWarung%20Papap!5e0!3m2!1sid!2sid!4v1690870124743!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row gy-4">
            <div class="col-lg-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-lg-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="site-footer">
<div class="container">
  <div class="row">
  <div class="col-sm-12 col-md-6">
    <h6>DjEver.</h6>
    <div style="text-align: justify;">Apa yang membuat  DjEver berbeda? Pengalaman kami yang luas dan jaringan profesional yang kuat memungkinkan kami menyediakan DJ terbaik yang sesuai dengan kebutuhan dan anggaran Anda. Dengan perangkat pencarian canggih kami, Anda dapat menyaring pilihan DJ berdasarkan lokasi, genre musik, popularitas, dan ulasan pelanggan sebelumnya.</div>
  </div>



    <div class="col-xs-5 col-md-3">
      <h6>Kontak Kami</h6>
      <p style="text-align: justify;">
      Jl. Kp. Melayu Besar 2 No.3, RT.7/RW.2, Kb. Baru, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12830<br><br>
          <strong>Phone:</strong> +6281380835608 <br>
          <strong>Email:</strong> likeppkmwithoutpp@gmail.com<br>
        </p>
    </div>

    <div class="col-xs-5 col-md-3">
      <h6>web partner</h6>
      <ul class="footer-links">
        <li><a href="https://www.instagram.com/amorakemang/">Amora Kemang</a></li>
        <li><a href="https://www.instagram.com/tebalikopi/">Tebalik Kopi</a></li>
        <li><a href="https://www.instagram.com/odistry.coffee/">Odistry Coffe</a></li>
        <li><a href="https://www.instagram.com/afterhour_sunter/reels/">Afterhour Sunter</a></li>
      </ul>
    </div>
  </div>
  <hr>
</div>
<div class="container">
<div class="row">
  <div class="col-md-8 col-sm-6 col-xs-12">
    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
<a href="https://www.instagram.com/allaboutrpl/">Kalew.</a>
    </p>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <ul class="social-icons">
      <a href="https://www.instagram.com/haikaruuuu/" class="twitter"><i class="bi bi-twitter"></i></a>
  <a href="https://www.instagram.com/haikaruuuu/" class="facebook"><i class="bi bi-facebook"></i></a>
  <a href="https://www.instagram.com/haikaruuuu//" class="instagram"><i class="bi bi-instagram"></i></a>
  <a href="https://www.instagram.com/haikaruuuu/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </ul>
  </div>
</div>
</div>
</footer><!-- End Footer -->

<a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset("/holadj/assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/aos/aos.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("/holadj/assets/vendor/php-email-form/validate.js") }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset("/holadj/assets/js/main.js") }}"></script>

</body>

</html> 