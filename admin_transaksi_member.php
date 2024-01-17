<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi</title>
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
    <?php include "navbaradmin.php"; ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="mb-4">
                            <h1>Histori Transaksi Membership</h1>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Membership</th>
                                    <th scope="col">Personal Trainer</th>
                                    <th scope="col">Pembayaran</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "function.php";
                                if (isset($_GET['cari'])) {
                                    $pencarian = $_GET['cari'];
                                    $query = "SELECT * FROM member WHERE idmember LIKE '%" . $pencarian . "%' 
                            OR name LIKE '%" . $pencarian . "%' 
                            OR tipe LIKE '%" . $pencarian . "%' 
                            OR trainer LIKE '%" . $pencarian . "%' 
                            OR tglmul LIKE '%" . $pencarian . "%' ORDER BY idmember ASC";
                                } else {
                                    $query = "SELECT * FROM historimember LEFT JOIN member ON historimember.idmember = member.idmember ORDER BY historimember.idmember ASC";
                                }

                                $ambildata = mysqli_query($conn, $query); // Use $query variable here

                                while ($tampil = mysqli_fetch_array($ambildata)) {
                                    echo "
                            <tr>
                                <td>$tampil[nama]</td>
                                <td>$tampil[tipe]</td>
                                <td>$tampil[trainer]</td>
                                <td>$tampil[pembayaran]</td>
                                <td>$tampil[total]</td>
                                <td>$tampil[tglmul]</td>
                            </tr>";
                                }
                                ?>

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>