<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Transaksi Merchandise</title>
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
                    <h1>Histori Transaksi Merchandise</h1>
                    <div class="container">
                        <div class="pt-3 pb-3 d-flex justify-content-end">
                        </div>
                        <table class="table text-center table-striped table-bordered">
                            <thead class="thead table-dark">
                                <th>ID Keluar</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Pembeli</th>
                                <th>Jenis Merchandise</th>
                                <th>Payment Method</th>
                                <th>Opsi Pengiriman</th>
                                <th>Quantity</th>
                                <th>Total</th>

                            </thead>
                            <tbody>
                                <?php
                                $ambildata = mysqli_query($conn, "SELECT * FROM keluar");
                                while ($tampil = mysqli_fetch_array($ambildata)) {
                                    echo "
                                    <tr>
                                        <td>$tampil[idkeluar]</td>
                                        <td>$tampil[alamat]</td>
                                        <td>$tampil[tanggal]</td>
                                        <td>$tampil[pembeli]</td>
                                        <td>$tampil[jenis_merchandise]</td>
                                        <td>$tampil[payment_method]</td>
                                        <td>$tampil[opsi_pengiriman]</td>
                                        <td>$tampil[qty]</td>
                                        <td>$tampil[total]</td>
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

</html>