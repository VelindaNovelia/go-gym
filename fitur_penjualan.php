<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Merchandise</title>
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
                    <h1>Penjualan Merchandise</h1>
                    <div class="container">
                        <div class="pt-3 pb-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Barang Keluar
                        </button>
                        </div>
                        <table class="table text-center table-striped table-bordered">
                            <thead class="thead table-dark">
                                <th>No Order</th>
                                <th>ID barang</th>
                                <th>Tanggal</th>
                                <th>Pembeli</th>
                                <th>Quantitas</th>

                            </thead>
                            <tbody>
                                <?php
                                    $ambildata = mysqli_query($conn, "select * from keluar");
                                    while ($tampil = mysqli_fetch_array($ambildata)) {
                                        echo "
                                        <tr>
                                            <td>$tampil[idkeluar]</td>
                                            <td>$tampil[idbarang]</td>
                                            <td>$tampil[tanggal]</td>
                                            <td>$tampil[pembeli]</td>
                                            <td>$tampil[qty]</td>
                                            
                                        </tr>";

                                    
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
        <h4 class="modal-title">Penjualan Merch</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <form action="function.php" method="post">
        <div class="modal-body">
          <select name="barangnya" id="">
            <?php 
            $ambildata =mysqli_query($conn, "select * from stock");
            while($fetcharray=mysqli_fetch_array($ambildata)) {
            $namabarang=$fetcharray['namabarang'];
            $idbarang=$fetcharray['idbarang'];
                
            ?>
            <option value="<?=$idbarang;?>" ><?=$namabarang?></option>
            <?php
            }
            ?>
          </select>
          <hr>
          <input type="text" name="pembeli" placeholder="pembeli" class="form-control" required>
          <hr>
          <input type="number"  name="qty" placeholder="Quantity" class="form-control" required>
          <hr>
          <button type="submit" name="barangkeluar" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>
</html>