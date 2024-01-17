<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi</title>
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

    <main id="main" class="main">
        <div class="pagetitle">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="mb-4">
                            <h1>Histori Transaksi</h1>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Pengiriman</th>
                                    <th scope="col">Pembayaran</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Potongan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tote Bag Special GO GYM</td>
                                    <td>1</td>
                                    <td>JNE Reguler</td>
                                    <td>BCA</td>
                                    <td>User</td>
                                    <td>-</td>
                                    <td>Rp 135000</td>
                                    <td>2023-10-15</td>
                                </tr>
                                <tr>
                                    <td>Hoodie Special GO GYM</td>
                                    <td>1</td>
                                    <td>Si Cepat Instan</td>
                                    <td>GO PAY</td>
                                    <td>Member</td>
                                    <td>Rp 15000</td>
                                    <td>Rp 210000</td>
                                    <td>2023-10-18</td>
                                </tr>
                                <tr>
                                    <td>T-Shirt Special GO GYM</td>
                                    <td>2</td>
                                    <td>Si Cepat Reguler</td>
                                    <td>Visa</td>
                                    <td>Member</td>
                                    <td>Rp 30000</td>
                                    <td>Rp 185000</td>
                                    <td>2023-10-21</td>
                                </tr>
                                <tr>
                                    <td>Tumbler Special GO GYM</td>
                                    <td>2</td>
                                    <td>JNE Instan</td>
                                    <td>OVO</td>
                                    <td>User</td>
                                    <td>-</td>
                                    <td>Rp 270000</td>
                                    <td>2023-10-25</td>
                                </tr>
                                <tr>
                                    <td>Tote Bag Special GO GYM</td>
                                    <td>4</td>
                                    <td>Si Cepat Instan</td>
                                    <td>BNI</td>
                                    <td>Member</td>
                                    <td>Rp 60000</td>
                                    <td>Rp 465000</td>
                                    <td>2023-10-26</td>
                                </tr>
                                <tr>
                                    <td>Hoodie Special GO GYM</td>
                                    <td>3</td>
                                    <td>JNE Reguler</td>
                                    <td>Dana</td>
                                    <td>User</td>
                                    <td>-</td>
                                    <td>Rp 600000</td>
                                    <td>2023-10-27</td>
                                </tr>
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