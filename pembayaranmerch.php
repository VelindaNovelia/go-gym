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

        <h2>Member Registration Form</h2>
        <hr>
        <form id="function" action="tampilan_berhasil_daftar.php" method="post">
            <label for="emailmerch">Email:</label>
            <input type="emailmerch" name="emailmerch" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" required>

            <label for="merch1">Merchandise</label>
            <select name="merch1" id="merch1" onchange="updateTotal()">
                <option value="pilihan">Pilihan</option>
                <option value="T-Shirt Special">T-Shirt Special</option>
                <option value="Hoodie Spesial">Hoodie Spesial</option>
                <option value="Tote Bag Spesial">Tote Bag Spesial</option>
                <option value="Tumblr Spesial">Tumblr Spesial</option>
            </select>

            <label for="paymentMethod">Payment Method</label>
            <select name="paymentMethod" required>
                <option value="virtual_account">Virtual Account</option>
                <option value="master_card">Master Card</option>
                <option value="indomaret">Indomaret</option>
                <option value="shopee_pay">Shopee Pay</option>
                <option value="gopay">Gopay</option>
            </select>

            <label for="total1">Total:</label>
            <input type="text" id="total1" disabled>
            <input type="hidden" name="totalValue1" id="totalValue1" value="">

            <div class="checkbox-container">
                <input type="checkbox" id="termsCheckbox" required>
                <label for="termsCheckbox">Saya setuju dengan syarat dan ketentuan.</label>
            </div>

            <button type="submit" name="merch">Beli</button>
        </form>
    </div>

    <script>
        function updateTotal() {
            var totalInput = document.getElementById('total1');
            var selectedMerch = document.getElementById('merch1').value;

            var basePrice = 100000;

            // Set base price based on selected merchandise
            if (selectedMerch === 'T-Shirt Special') {
                basePrice = 100000;
            } else if (selectedMerch === 'Hoodie Spesial') {
                basePrice = 200000;
            } else if (selectedMerch === 'Tote Bag Spesial' || selectedMerch === 'Tumblr Spesial') {
                basePrice = 125000;
            }

            // Set total based on base price
            var total = basePrice;
            document.getElementById('totalValue1').value = total;
            // Display total in the total input
            totalInput.value = total;
        }
    </script>

    <?php
    include "function.php";
    ?>
</body>

</html>
