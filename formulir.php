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
    
    <div style="text-align: center; background-color: brown; margin: 200px;">
        <h3 style="font-size: 30px;">Tambah Data Tiket</h3>
        <form action="tambah.php" method="post">
            
            <label for="" style="font-size: 17px;">Nama Lengkap</label><br>
            <input type="text" name="nama"><br>
            
            <label for="" style="font-size: 17px;">KTP</label><br>
            <input type="text" name="ktp" ><br>
            
            <label for="" style="font-size: 17px;">Telpon</label><br>
            <input type="text" name="telpon"><br>
            
            <label for="" style="font-size: 17px;">Alamat</label><br>
            <input name="alamat"></input><br>

            <label for="" style="font-size: 17px;">Tujuan</label><br>
            <input type="text" name="tujuan"><br>
            
            <input type="submit" name="submit" value="Kirim" style="font-size: 17px;">
        
        </form>
    </div>

</body>
</html>