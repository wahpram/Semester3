<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

include 'fungsi.php';

$nim = $_GET['NIM'];

$value = query("SELECT * FROM mahasiswa WHERE NIM ='$nim'")[0];

if( isset($_POST["submit"]) ){
    if( edit($_POST) > 0 ){
        echo"
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Tidak Diubah');
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
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="box">
        <form action="" method="post">

        <input type="hidden" name="id" id="id" value="<?= $value["NIM"] ?>">

            <ul>
                
                <li>
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" value="<?= $value["NIM"] ?>" disabled>
                </li>


                <li>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" value="<?= $value["Namamhs"] ?>" name="nama">
                </li>
                    

                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" value="<?= $value["Alamatmhs"] ?>" name="alamat">
                </li>
                

                <li>
                    <label for="kontak">Kontak</label>
                    <input type="text" id="kontak" value="<?= $value["Kontakmhs"] ?>" name="kontak">
                </li>
                
            </ul>

            <button type="submit" id="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>