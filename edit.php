<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pemesanan WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $tujuan = $_POST['tujuan'];

        $update = mysqli_query($db, "UPDATE pemesanan SET nama='$nama', ktp='$ktp', telpon='$telpon', alamat='$alamat', tujuan='$tujuan' WHERE id='$id'");

        if($update){
            header("Location:pemesanan.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Toraja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Pemesanan Tiket Wisata</h2>
    </header>
    
    <div>
        <h3>Tambah Data Tiket</h3>
        <form action="tambah.php" method="post">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" value=<?=$row['nama'];?>><br>
            
            <label for="">KTP</label><br>
            <input type="text" name="ktp" value=<?=$row['ktp'];?>><br>
            
            <label for="">Telpon</label><br>
            <input type="text" name="telpon" value=<?=$row['telpon'];?>><br>
            
            <label for="">Alamat</label><br>
            <input type="text" name="alamat" value=<?=$row['alamat'];?>></input><br>

            <label for="">Tujuan</label><br>
            <input type="text" name="tujuan" value=<?=$row['tujuan'];?>><br>
            
            <input type="submit" name="submit" value="Kirim">
        
        </form>
    </div>

</body>
</html>