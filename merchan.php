<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise GO GYM</title>
    <link rel="stylesheet" href="CSS/style4.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </style>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="CSS/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="CSS/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="CSS/style_merch.css" type="text/css">
    
    <!-- <link rel="stylesheet" href="CSS/style9.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="CSS/style10.css" type="text/css"> -->
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/merch.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>GoGym Merchandise</h6>
                                <h2 style="color: white">Hoodie GoGym</h2>
                                <p style="color: white"><b>Kencangkan hoodie
                                        gym performa tinggi kami dan hadapi
                                        setiap sesi latihan dengan percaya
                                        diri. Dirancang khusus untuk
                                        mendukung gaya hidup aktif,
                                        hoodie ini merupakan kombinasi
                                        sempurna antara kenyamanan,
                                        fungsionalitas, dan gaya.</b></p>
                                <a href="#catalog" class="primary-btn rounded-pill" style="background-color: #014638; color: white;">Shop
                                    now</a>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/bg2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>GoGym Merchandise</h6>
                                <h2 style="color: white">ToteBag GoGym</h2>
                                <p style="color: white">Unleash your sporty
                                    side with our trendy tote bags designed
                                    for champions.</p>
                                <a href="#catalog" class="primary-btn rounded-pill" style="background-color: #014638; color: white;">Shop
                                    now</a>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Section End -->
    <br>
    <br>
    <!-- Product Section Begin -->
    <h1 class="tengah" id="catalog">Our Merchandise</h1>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #014638;">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/merchan2.png" alt="...">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center" style="color: white;">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="color: white;">T-Shirt Special <br> GO GYM</h5>
                                <!-- Product price-->
                                Rp.100.000,00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php

                                if (!$_SESSION['registered_user']) {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="daftar.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                } else {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pembayaranmerch.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #014638;">
                        <!-- Sale badge-->

                        <!-- Product image-->
                        <img class="card-img-top" src="img/merchan3.png" alt="...">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center" style="color: white;">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="color: white;">Hoodie Special <br> GO GYM</h5>
                                <!-- Product price-->
                                <span style="color: white;">
                                    Rp.150.000,00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php

                                if (!$_SESSION['registered_user']) {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="daftar.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                } else {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pembayaranmerch.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #014638;">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/merchan4.png " alt="...">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center" style="color: white;">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="color: white;">Tote Bag Special <br>GO GYM</h5>
                                <!-- Product price-->
                                Rp.125.000,00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php
                                if (!$_SESSION['registered_user']) {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="daftar.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                } else {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pembayaranmerch.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #014638;">

                        <!-- Product image-->
                        <img class="card-img-top" src="img/merchan1.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center" style="color: white;">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="color: white;">Tumbler Special <br>GO GYM</h5>
                                <!-- Product price-->
                                Rp.125.000,00

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php

                                if (!$_SESSION['registered_user']) {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="daftar.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                } else {
                                ?>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pembayaranmerch.php" style="background-color: #F1FF46;">Buy Now!</a></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>