<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership GO GYM</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Membership -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                <h1 class="mb-5">Program GYM</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Sebulan.png">
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">Rp 250.000/Bulan</h3>

                            <p class="text-center">Dapatkan keuntungan membership selama 1 bulan dengan harga murah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/3Bulan.png">
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">Rp 650.000/3 Bulan</h3>

                            <p class="text-center">Dapatkan keuntungan membership selama 3 bulan dengan potongan harga hingga 100.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Tahun.png">
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">Rp 2.400.000/Tahun</h3>

                            <p class="text-center">Dapatkan keuntungan membership selama 3 bulan dengan potongan harga hingga 600.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-2" id="btn1">
        <?php

        if (!$_SESSION['registered_user']) {
        ?>
            <a href="daftar.php" class="btn btn-primary btn-lg rounded-pill py-2 px-40">Sign In</a>
        <?php
        } else {
        ?>
            <a href="pembayaran.php" class="btn btn-primary btn-lg rounded-pill py-2 px-40">Buy Now</a>
        <?php
        }
        ?>
    </div>
    <!-- Team -->
    <div class="container-xxl py-5">
        <div class="container" id="c3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <blockquote class="blockquote">
                    <p class="h3">Personal Trainer</p>
                    <p class="mb-0">Tak Kenal Maka Tak Sayang</p>
                    <footer class="blockquote-footer m-2">Seseorang <cite title="Source Title"></cite></footer>
                </blockquote>
            </div>
            <div class="row g-4" id="s1">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/valen.png">
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0" id="m2">Valencia Samuel</h5>
                            <small>Yoga Trainer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/owen.png">
                        </div>
                        <div class="position-relative d-flex justify-content-center" id="m2">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Owen Willianto</h5>
                            <small>Functional Fitness Trainer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/velin.png">
                        </div>
                        <div class="position-relative d-flex justify-content-center" id="m2">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Velinda Novelia Candra</h5>
                            <small>Youth Fitness Trainer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/yemmi.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" id="m2">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Yemmi Agustin</h5>
                            <small>Strength and Conditioning Trainer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>