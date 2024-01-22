<?php 
$conn=mysqli_connect("localhost","root","","gym");


if(isset($_POST['add'])){
    $namabarang =$_POST['namabarang'];
    $stock =$_POST['stock'];
    $harga = $_POST['harga'];
    $vendor =$_POST['vendor'];
    
    $addtotable = mysqli_query($conn,"insert into stock (namabarang, stok, harga, vendor) values ('$namabarang','$stock','$harga','$vendor')");

    if($addtotable){
    
        echo 'alert("Data Berhasil Disimpan")'; 
        header('location:admin_merch.php');
        } else {
        echo 'Gagal';
        header('location:admin_merch.php');
        }
}


if(isset($_POST["barangmasuk"])){
    $barangnya = $_POST["barangnya"];
    $penerima = $_POST["penerima"];
    $qty= $_POST["qty"];
    $cekstock=mysqli_query($conn,"select * from stock where idbarang='$barangnya'");
    $ambildatastok=mysqli_fetch_array($cekstock);
    $stocksekarang = $ambildatastok["stok"];
    $penjumlahan =$stocksekarang +$qty;

    $addtomasuk=mysqli_query($conn,"insert into masuk (idbarang, ket, qty) values ('$barangnya','$penerima','$qty')");
    $updatestock =mysqli_query($conn,"update stock set stok ='$penjumlahan' where idbarang='$barangnya'");
    if($addtomasuk && $updatestock){
    
        echo 'alert("Data Berhasil Disimpan")'; 
        header('location:fitur_tambahstock.php');
        } else {
        echo 'Gagal';
        header('location:fitur_tambahstock.php');
        }
}

if(isset($_POST["barangkeluar"])){
    $barangnya = $_POST["barangnya"];
    $penerima = $_POST["pembeli"];
    $qty= $_POST["qty"];
    $cekstock=mysqli_query($conn,"select * from stock where idbarang='$barangnya'");
    $ambildatastok=mysqli_fetch_array($cekstock);
    $stocksekarang = $ambildatastok["stok"];
    $penjumlahan =$stocksekarang -$qty;

    $addtomasuk=mysqli_query($conn,"insert into keluar (idbarang, pembeli, qty) values ('$barangnya','$penerima','$qty')");
    $updatestock =mysqli_query($conn,"update stock set stok ='$penjumlahan' where idbarang='$barangnya'");
    if($addtomasuk && $updatestock){
    
        echo 'alert("Data Berhasil Disimpan")'; 
        header('location:fitur_tambahstock.php');
        } else {
        echo 'Gagal';
        header('location:fitur_tambahstock.php');
        }
}

if (isset($_POST["member"])) {
        
    $email = $_POST["email"];
    $trainerName = (isset($_POST['personalTrainer']) && $_POST['personalTrainer'] == 'Yes') ? $_POST['trainerName'] : '-';
    $duration = $_POST['duration'];
    $startDate = $_POST['startDate'];
    $pembayaran=$_POST  ['paymentMethod'];
    $totalValue = $_POST['totalValue'];

    $ambilnama = mysqli_query($conn, "SELECT name FROM daftar WHERE email = '$email'");
    
    // Fetch the data from the result set
    $row = mysqli_fetch_assoc($ambilnama);
    $name = $row['name'];

    $addtomasuk = mysqli_query($conn, "INSERT INTO member (name, tipe, trainer,pembayaran,total) VALUES ('$name', '$duration', '$trainerName','$pembayaran','$totalValue')");

    if ($addtomasuk) {
        echo 'alert("Data Berhasil Disimpan")';
        header('location: home.php');
    } else {
        echo 'Gagal';
        header('location: home.php');
    }
}
if (isset($_POST["merch"])) {
    $email = $_POST["emailmerch"];
    $alamat = $_POST["alamat"];
    $merch = $_POST['merch1'];
    $pembayaran=$_POST  ['paymentMethod'];
    $totalValue = $_POST['totalValue1'];

    $ambilnama = mysqli_query($conn, "SELECT name FROM daftar WHERE email = '$email'");
    
    // Fetch the data from the result set
    $row = mysqli_fetch_assoc($ambilnama);
    $name = $row['name'];

    $addtomasuk = mysqli_query($conn, "INSERT INTO merch (nama, alamat, desk,payment,total) VALUES ('$name', '$alamat', '$merch','$pembayaran','$totalValue')");

    if ($addtomasuk) {
        echo 'alert("Data Berhasil Disimpan")';
        header('location: home.php');
    } else {
        echo 'Gagal';
        header('location: home.php');
    }
}
?>