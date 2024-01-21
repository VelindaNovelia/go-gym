<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Merchandise</title>
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
    <!-- ======= Header ======= -->
    <?php include "navbaradmin.php"; ?>
    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <div class="pagetitle">
                    <h1>Stock Merchandise</h1>
                    <div class="container">
                        <div class="pt-3 pb-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Tambah Barang
                        </button>
                        </div>
                        <table class="table text-center table-striped table-bordered">
                            <thead class="thead table-dark">
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga Satuan</th>
                                <th>Vendor</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                    $ambildata = mysqli_query($conn, "select * from stock");
                                    while ($tampil = mysqli_fetch_array($ambildata)) {
                                        echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$tampil[namabarang]</td>
                                            <td>$tampil[stok]</td>
                                            <td>$tampil[harga]</td>
                                            <td>$tampil[vendor]</td>
                                            <td>
                                                <a href='?namabarang=$tampil[namabarang]'><button class='btn btn-danger'>Delete</button></a>
                                            </td>
                                        </tr>";

                                        $no++;
                                    } 
                                ?>

                                <?php
                                    if(isset($_GET['namabarang'])){
                                        mysqli_query($conn,"delete from stock where namabarang='$_GET[namabarang]'");

                                        echo "<script>
                                                alert('Data telah terhapus');
                                                window.location.href='admin_merch.php';
                                            </script>";
                                        echo "<meta http-equiv=refresh content=2;URL='admin_merch.php'>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Merch</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <form action="function.php" method="post">
        <div class="modal-body">
          <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
          <hr>
          <input type="number"  name="stock" placeholder="Stock" class="form-control" required>
          <hr>
          <input type="number"  name="harga" placeholder="Harga" class="form-control" required>
          <hr>
          <input type="text" name="vendor" placeholder="Vendors" class="form-control" required>
          <hr>
          <button type="submit" name="add" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>
</html>