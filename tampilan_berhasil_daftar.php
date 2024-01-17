<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succesfully!</title>
    <link rel="stylesheet" href="CSS/style_tampilan_berhasil.css">
</head>
<body>
    <div class="success-container">
        <div class="success-icon">&#10004;</div>
        <div class="success-message">Terima kasih! Formulir telah berhasil diisi.</div>
        <div class="redirect-message">Anda akan dialihkan ke halaman utama dalam beberapa detik.</div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "home.php";
        }, 5000);
    </script>
</body>
</html>
