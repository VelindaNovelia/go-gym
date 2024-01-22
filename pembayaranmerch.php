<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise Form</title>
    <link rel="stylesheet" href="CSS/style_pembayaran.css">
</head>

<body>
    <div class="container">
        <h2>Order Merchandise Form</h2>
        <hr>
        <form id="function" action="" method="post">
            <label for="emailmerch">Email:</label>
            <input type="email" name="emailmerch" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" required>

            <label for="merch1">Merchandise</label>
            <select name="merch1" id="merch1" onchange="updateTotal()">
                <option value="pilihan">Pilihan Merchandise</option>
                <option value="T-Shirt Special">T-Shirt Special</option>
                <option value="Hoodie Spesial">Hoodie Spesial</option>
                <option value="Tote Bag Spesial">Tote Bag Spesial</option>
                <option value="Tumblr Spesial">Tumblr Spesial</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateTotal()">

            <label for="paymentMethod">Payment Method</label>
            <select name="paymentMethod" required>
                <option value="virtual_account">Virtual Account</option>
                <option value="master_card">Master Card</option>
                <option value="indomaret">Indomaret</option>
                <option value="shopee_pay">Shopee Pay</option>
                <option value="gopay">Gopay</option>
            </select>

            <label for="opsiPengiriman">Opsi Pengiriman</label>
            <select name="opsiPengiriman" id="opsiPengiriman" onchange="updateTotal()" required>
                <option value="default_opsi">Opsi Pengiriman</option>
                <option value="jne_express">JNE Express - Rp11.000 (2 Days)</option>
                <option value="sicepat">Sicepat - Rp15.000 (1 Day)</option>
                <option value="jnt_express">J&T Express Rp9.000 (3 Days)</option>
            </select>

            <label for="total1">Total:</label>
            <input type="text" id="total1" disabled>
            <input type="hidden" name="totalValue1" id="totalValue1" value="">

            <div class="checkbox-container">
                <input type="checkbox" id="termsCheckbox" required>
                <label for="termsCheckbox">Data pembelian sudah sesuai.</label>
            </div>

            <button type="submit" name="merch">Beli</button>
        </form>

        <?php
        include "function.php";

        if (isset($_POST['merch'])) {
            // Retrieve and process form data
            $emailmerch = mysqli_real_escape_string($conn, $_POST['emailmerch']);
            $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
            $merch1 = mysqli_real_escape_string($conn, $_POST['merch1']);
            $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
            $paymentMethod = mysqli_real_escape_string($conn, $_POST['paymentMethod']);
            $opsiPengiriman = mysqli_real_escape_string($conn, $_POST['opsiPengiriman']);
            $totalValue1 = mysqli_real_escape_string($conn, $_POST['totalValue1']);
            
            // Insert data into keluar table
            $insertQuery = "INSERT INTO keluar (idbarang, alamat, tanggal, pembeli, jenis_merchandise, payment_method, opsi_pengiriman, qty, total) 
                    VALUES ('$merch1', '$alamat', NOW(), '$emailmerch', '$merch1', '$paymentMethod', '$opsiPengiriman', '$quantity', '$totalValue1')";

            if (mysqli_query($conn, $insertQuery)) {
                // Update stock in stock table
                $updateStockQuery = "UPDATE stock SET stok = stok - $quantity WHERE namabarang = '$merch1'";

                if (mysqli_query($conn, $updateStockQuery)) {
                    echo "Data inserted successfully. Stock updated.";
                    header("Location: tampilan_berhasil_daftar.php");
                    exit();
                } else {
                    echo "Error updating stock: " . mysqli_error($conn);
                }
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }
        
        ?>

    </div>

    <script>
        function updateTotal() {
            var opsiPengirimanSelect = document.getElementById('opsiPengiriman');
            var totalInput = document.getElementById('total1');
            var selectedMerch = document.getElementById('merch1').value;
            var quantity = document.getElementById('quantity').value;
            var selectedJasa = opsiPengirimanSelect.options[opsiPengirimanSelect.selectedIndex].value;

            var basePrice = 100000;

            // Set base price based on selected merchandise
            if (selectedMerch === 'T-Shirt Special') {
                basePrice = 100000;
            } else if (selectedMerch === 'Hoodie Spesial') {
                basePrice = 200000;
            } else if (selectedMerch === 'Tote Bag Spesial' || selectedMerch === 'Tumblr Spesial') {
                basePrice = 125000;
            }

            var hargaPengiriman = 0;

            if (selectedJasa !== '' && selectedJasa !== 'default_opsi') {
                switch (selectedJasa) {
                    case 'jne_express':
                        hargaPengiriman = 11000;
                        break;
                    case 'sicepat':
                        hargaPengiriman = 15000;
                        break;
                    case 'jnt_express':
                        hargaPengiriman = 9000;
                        break;
                    default:
                        hargaPengiriman = 0;
                }
            }

            // Set total based on base price and quantity
            var total = basePrice * quantity + hargaPengiriman;
            document.getElementById('totalValue1').value = total;
            // Display total in the total input
            totalInput.value = total;
        }
    </script>
</body>

</html>