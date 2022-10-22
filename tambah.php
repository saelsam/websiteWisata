<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $ktp = $_POST['ktp'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $tujuan = $_POST['tujuan'];

    $kirim = mysqli_query($db, "INSERT INTO pemesanan (nama,ktp,telpon,alamat,tujuan) VALUES ('$nama','$ktp','$telpon','$alamat','$tujuan')");
    $dataTujuan = mysqli_query($db, "INSERT INTO tujuan (nama,tujuan) VALUES ('$nama','$tujuan')");

    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:pemesanan.php");
    }else {
        echo "gagal mengirim";
    }
}