<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="CSS/styledashtest.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="img/GO GYM.png" alt="">
        <span class="d-none d-lg-block text-light text-nowrap text-sm">Admin Dashboard</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == '/dashboardtest.php') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="dashboardtest.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_member.php">
          <i class="bi bi-menu-button-wide"></i><span>Kelola Member</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

      </li><!-- End Member Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_merch.php">
          <i class="bi bi-journal-text"></i><span>Kelola Merchandise<i class="bi bi-chevron-down ms-auto"></i>
        </a>
      <li class="nav-item">
        <a class="nav-link collapsed" href="fitur_tambahstock.php">
          <i class="bi bi-journal-text"></i><span>Barang Masuk<i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="fitur_penjualan.php">
          <i class="bi bi-journal-text"></i><span>Barang Keluar<i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      </li><!-- End Merch Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_transaksi_merchan.php">
          <i class="bi bi-layout-text-window-reverse"></i><span>Histori Merchandise</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tranksaksi Nav -->
    </ul>

  </aside><!-- End Sidebar-->
</body>

</html>