<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link rel="stylesheet" href="CSS/style_pembayaran.css">
</head>

<body>
    <div class="container">

        <h2>Member Registration Form</h2>
        <hr>
        </hr>
        <form id="berhasil" action="tampilan_berhasil_daftar.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email"  required>

            <div class="form-group">
                Need Personal Trainer?

                <br>
                <label>
                    <input type="radio" name="personalTrainer" value="Yes" onclick="toggleTrainerOptions()"> Yes
                </label>
                <label>
                    <input type="radio" name="personalTrainer" value="No" onclick="toggleTrainerOptions()"> No
                </label>
            </div>

            <label for="trainerName" style="display: none;">Choose Trainer:</label>
            <select name="trainerName" style="display: none;">
                <option value="Trainer">Choose Trainer</option>
                <option value="Yoga Trainer">Yoga Trainer - Rp 1.000.000/Month</option>
                <option value="Functional Fitness Trainer">Functional Fitness Trainer - Rp 1.500.000/Month</option>
                <option value="Youth Fitness Trainer">Youth Fitness Trainer - Rp 500.000/Month</option>
                <option value="Strength and Conditioning Trainer">Strength and Conditioning Trainer - Rp 2.000.000/Month
                </option>
            </select>

            <label for="duration">Membership Duration</label>
            <select name="duration" id="duration" onchange="updateTotal()">
                <option value="choose">Choose Duration</option>
                <option value="1 Month">1 Month</option>
                <option value="3 Month">3 Months</option>
                <option value="1 Year">1 Year</option>
            </select>

            <label for="startDate">Start Date:</label>
            <input type="date" name="startDate" required>

            <label for="paymentMethod">Payment Method</label>
            <select name="paymentMethod" required>
                <option value="virtual_account">Virtual Account</option>
                <option value="master_card">Master Card</option>
                <option value="indomaret">Indomaret</option>
                <option value="shopee_pay">Shopee Pay</option>
                <option value="gopay">Gopay</option>
            </select>

            <label for="total">Total:</label>
            <input type="text" id="total" disabled>
            <input type="hidden" name="totalValue" id="totalValue" value="">

            <div class="checkbox-container">
                <input type="checkbox" id="termsCheckbox" required>
                <label for="termsCheckbox">Saya setuju dengan syarat dan ketentuan.</label>
            </div>

            <button type="submit" name="member">Daftar</button>

    </div>

    <script>
        function toggleTrainerOptions() {
            var personalTrainerRadio = document.querySelector('input[name="personalTrainer"]:checked');
            var trainerNameLabel = document.querySelector('label[for="trainerName"]');
            var trainerNameSelect = document.querySelector('select[name="trainerName"]');
            var totalInput = document.getElementById('total');
            var membershipDurationSelect = document.getElementById('duration');

            if (personalTrainerRadio && personalTrainerRadio.value === 'Yes') {
                trainerNameLabel.style.display = 'block';
                trainerNameSelect.style.display = 'block';
            } else {
                trainerNameLabel.style.display = 'none';
                trainerNameSelect.style.display = 'none';
            }

            // Always update the total regardless of "Yes" or "No" selection
            updateTotal();
        }

        function updateTotal() {
            var personalTrainerRadio = document.querySelector('input[name="personalTrainer"]:checked');
            var membershipDurationSelect = document.getElementById('duration');
            var trainerNameSelect = document.querySelector('select[name="trainerName"]');
            var totalInput = document.getElementById('total');
            var selectedDuration = membershipDurationSelect.value;
            var selectedTrainer = trainerNameSelect.options[trainerNameSelect.selectedIndex].value;

            var basePrice = 0;

            // Set base price based on duration
            if (selectedDuration === '1 Month') {
                basePrice = 250000;
            } else if (selectedDuration === '3 Month') {
                basePrice = 650000;
            } else if (selectedDuration === '1 Year') {
                basePrice = 2400000;
            }

            var trainerPrice = 0;

            // Add trainer price if selected
            if (personalTrainerRadio && personalTrainerRadio.value === 'Yes' && selectedTrainer !== '' && selectedTrainer !== 'Select Trainer') {
                switch (selectedTrainer) {
                    case 'Yoga Trainer':
                        trainerPrice = 1000000;
                        break;
                    case 'Functional Fitness Trainer':
                        trainerPrice = 1500000;
                        break;
                    case 'Youth Fitness Trainer':
                        trainerPrice = 500000;
                        break;
                    case 'Strength and Conditioning Trainer':
                        trainerPrice = 2000000;
                        break;
                    default:
                        trainerPrice = 0;
                }
            }

            // Set total based on base price and trainer price
            var total = basePrice + trainerPrice;
            document.getElementById('totalValue').value = total;
            // Display total in the total input
            totalInput.value = total;
        }

    </script>

    <?php
    include "function.php";
    ?>
</body>

</html>