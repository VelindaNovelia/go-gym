<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Profile</title>
  <link rel="stylesheet" href="CSS/style2.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <!--  Membuat Navbar -->
  <div class="container-fluid position-relative p-0">
    <?php include 'navbar.php'; ?>
    <!-- Page About Us -->
    <div class="bg-light">
      <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
          <div class="col-lg-4">
            <h1 class="bg">Hi, I'm <em>GO GYM</em></h1>
            <p class=" textabout p9">Selamat datang di <em>GO GYM</em>, tempat di mana kebugaran bertemu kesenangan!
              Berdiri dengan semangat untuk mempromosikan gaya hidup sehat dan aktif,<em> GO GYM</em> adalah pusat kebugaran
              utama yang berdedikasi membantu individu mencapai tujuan kebugaran mereka dalam lingkungan yang penuh
              energi dan dukungan.
            </p>
          </div>
          <div class="col-lg-8 d-none d-lg-block">
            <video class="video" autoplay loop>
              <source src="img/vidabout.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white py-5">
      <div class="container py-5">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Kenapa Memilih <em>GO GYM?</em></h2>
            <div class="row align-items-center">
              <div class="col-lg-2 px-2"><img src="img/barbel.png" alt="" class="img-fluid mb-1 mb-lg-1"></div>
              <div class="col-lg-10"><i class="fa fa-leaf fa-5x mb-5 text-primary"></i>
                <p class="font-italic text-muted mb-2">Premium: Kami dilengkapi dengan peralatan
                  latihan berkualitas tinggi, kolam renang, area sauna, dan ruang yoga yang nyaman.</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-2 px-2"><img src="img/trainer.png" alt="" class="img-fluid mb-1 mb-lg-1"></div>
              <div class="col-lg-10"><i class="fa fa-leaf fa-5x mb-5 text-primary"></i>
                <p class="font-italic text-muted mb-2">Instruktur Ahli: Tim instruktur kami yang berpengalaman dan
                  berdedikasi akan membantu Anda mencapai tujuan kebugaran Anda.</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-2 px-2"><img src="img/schedule.png" alt="" class="img-fluid mb-1 mb-lg-1"></div>
              <div class="col-lg-10"><i class="fa fa-leaf fa-5x mb-5 text-primary"></i>
                <p class="font-italic text-muted mb-2">Jadwal Kelas Fleksibel: Jadwal kelas kami yang fleksibel
                  memungkinkan Anda berlatih sesuai jadwal Anda.</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-2 px-2"><img src="img/community.png" alt="" class="img-fluid mb-1 mb-lg-1"></div>
              <div class="col-lg-10"><i class="fa fa-leaf fa-5x mb-5 text-primary"></i>
                <p class="font-italic text-muted mb-2">Komunitas Kebugaran: Bergabunglah dalam komunitas kami yang penuh
                  semangat,
                  dan temukan teman sehat Anda di sepanjang perjalanan ini.</p>
              </div>
            </div>
            <div class="d-flex justify-content-center mb-2" id="btn1">
              <a href="daftar.php" class="btn btn-warning px-5 rounded-pill shadow-sm">Daftar Sekarang</a>
            </div>
          </div>
          <div class="col-lg-6 px-7 mx-auto order-1 order-lg-2"><img src="img/gym_community.jpg" alt="" class="img-fluid mb-1 mb-lg-1"></div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-5 px-5 mx-auto"><img src="img/hand_maps.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
          <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Temukan Kami di Pusat Olahraga & Kebugaran Terbaik di Bandung!</h2>
            <p class="font-italic text-muted mb-4">Jl. Cibogo I No.9, Sukawarna, Sukajadi, Kota Bandung, Jawa Barat,
              40164</p>
            <a href="https://www.google.com/maps/place/Jl.+Cibogo+I+No.9,+Sukawarna,+Kec.+Sukajadi,+Kota+Bandung,+Jawa+Barat+40164/@-6.8869371,107.5762468,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e680c74cc479:0xf0453d4bfb91dae2!8m2!3d-6.8869424!4d107.5788217?entry=ttu" target="_blank" class="btn btn-warning px-5 rounded-pill shadow-sm">Lihat Lokasi</a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-5">
      <div class="container py-5">
        <div class="row mb-4">
          <div data-aos="fade-right" class="col-lg-5">
            <h2 class="display-4 font-weight-light">Our team</h2>
            <p class="font-italic text-muted">Meet the founder of GO GYM.</p>
          </div>
        </div>

        <div class="row text-center">
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div data-aos="flip-up" data-aos-duration="1000" class="bg-white rounded shadow-sm py-5 px-4"><img src="img/velinabout.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Velinda Novelia</h5><span class="small text-uppercase text-muted">CEO - Founder</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div data-aos="flip-up" data-aos-duration="1000" class="bg-white rounded shadow-sm py-5 px-4"><img src="img/valenabout.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Valencia Samuel</h5><span class="small text-uppercase text-muted">CEO - Founder</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div data-aos="flip-up" data-aos-duration="1000" class="bg-white rounded shadow-sm py-5 px-4"><img src="img/owenabout.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Owen Willianto</h5><span class="small text-uppercase text-muted">CEO - Founder</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div data-aos="flip-up" data-aos-duration="1000" class="bg-white rounded shadow-sm py-5 px-4"><img src="img/yemmiabout.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Yemmi Agustin</h5><span class="small text-uppercase text-muted">CEO - Founder</span>

            </div>
          </div>
          <!-- End-->

        </div>
      </div>
    </div>

    <script>
      AOS.init();
    </script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>