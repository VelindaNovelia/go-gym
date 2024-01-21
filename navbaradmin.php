<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboardtest.php" class="logo d-flex align-items-center">
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
        <i class="bi bi-menu-button-wide"></i><span>Data Member</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>

    </li><!-- End Member Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="admin_merch.php">
        <i class="bi bi-journal-text"></i><span>Kelola Merchandise<i class="bi bi-chevron-down ms-auto"></i>
      </a>
    <li class="nav-item">
      <a class="nav-link collapsed" href="fitur_tambahstock.php">
        <i class="bi bi-journal-text"></i><span>Stock Merchandise<i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="fitur_penjualan.php">
        <i class="bi bi-journal-text"></i><span>Penjualan Merchanise<i class="bi bi-chevron-down ms-auto"></i>
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