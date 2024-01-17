<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="CSS/styledashtest.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <?php include "navbaradmin.php"; ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard w-auto">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6 text-nowrap">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logotshirt.png" alt="">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>800 Item</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6 text-nowrap">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Profit <span>| Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logouang.png" alt="">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="large pt-1" style="font-size: large;">Rp 20.922.123</h6>
                      <span class="text-success small pt-1 fw-bold">20%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-4 col-md-6 text-nowrap">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">Member Aktif <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logomember.png" alt="">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>423 </h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Member Card -->
            <!-- User -->
            <div class="col-xxl-4 col-md-6 text-nowrap">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">User Aktif <span>| Now</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logoonline.png" alt="">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>40 People</h6>
                      <span class="text-success small pt-1 fw-bold">
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- User Card -->

            <!-- Verification Card -->
            <div class="col-xxl-4 col-md-6  text-nowrap">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">On Hold Payment<span> |Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logopay (1).png" alt="" class="w-75 ">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5 Waiting</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <!-- Product -->
            <div class="col-xxl-4 col-md-6 text-nowrap">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">Product <span> </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/logopro.png" alt="">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-2">
                      <h6 class="pb-1">15 Product</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Product Card -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Yemmi Agustin</td>
                        <td><a href="#" class="text-primary">1 Month Membership</a></td>
                        <td>Rp 250000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Velinda Novelia</td>
                        <td><a href="#" class="text-primary">Hoodie Special GO GYM</a></td>
                        <td>Rp 150000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Valencia Samuel</td>
                        <td><a href="#" class="text-primary">Membership 1 Bulan With PT</a></td>
                        <td>Rp 400000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Owen Wilianto</td>
                        <td><a href="#" class="text-primary">Membership 1 Tahun</a></td>
                        <td>Rp 2400000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Jhon Doe</td>
                        <td><a href="#" class="text-primary">Tumbler Special GO GYM</a></td>
                        <td>Rp 100000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Velinda Novelia</td>
                        <td><a href="#" class="text-primary">Membership 3 Bulan</a></td>
                        <td>Rp 650000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card-body bg-light m-2 p-3">
            <h5 class="card-title">To Do List &nbsp;<input type="button" value="+"
                class="btn btn-outline-primary btn-sm"></h5>
            <div class="activity">

              <div class="activity-item d-flex ">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  Melakukan Verifikasi Pembayaran
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  Check stock barang
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                  Memeriksa dan memperbaiki Bug
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                  Update promo pada hari raya Natal
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                  Menambah cara pembayaran
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div><input type="checkbox" name="" id="" class="form-check form-check-inline"></div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                  Memeriksa kesehatan Server
                </div>
              </div><!-- End activity item-->

            </div>

          </div>
        </div><!-- End Recent Activity -->


      </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
</body>

</html>