<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

include 'fungsi.php';

if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0 ) {
        echo"
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Tidak Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div class="box">
        <h1>Tambah Data Mahasiswa</h1>

        <form action="" method="post">
            
            <ul>
                <li>
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim">
                </li>
                

                <li>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama">
                </li>
                    

                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat">
                </li>
                

                <li>
                    <label for="kontak">Kontak</label>
                    <input type="text" id="kontak" name="kontak">
                </li>
                
            </ul>

            <button type="submit" id="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>