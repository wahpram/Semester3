<?php 
    session_start();

    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }

    include "fungsi.php";
    $hasil = query(("SELECT * FROM mahasiswa"));

    if ( isset($_POST["submit"]) ) {
        $hasil = search($_POST["cari"]);
    }

    // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/css/style.css">
</head>


<body>
    <div class="box">
        <h1 style="text-align:center;">Data Mahasiswa</h1>

        <form action="" method="post">
            <input type="text" placeholder="Cari..." name="cari" id="cari">
            <button type="submit" id="submit" name="submit">Search</button>
        </form>

        <a href="logout.php"><button>Logout</button></a>

        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Action</th>
            </tr>
            
            <?php foreach ($hasil as $value) : ?>
            <tr>
                <td> <?= $value["NIM"]; ?> </td>
                <td> <?= $value["Namamhs"]; ?> </td>
                <td> <?= $value["Alamatmhs"]; ?> </td>
                <td> <?= $value["Kontakmhs"]; ?> </td>
                <td>
                    <a href="edit.php?NIM=<?=$value["NIM"];?>">Edit</a> |
                    <a href="hapus.php?NIM=<?=$value["NIM"];?>" onclick="return confirm('Yakin Mau Hapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
                
        </table>

        <a href="tambah.php"><button>Tambah Data</button></a>

        <a href="regist.php"><button>Registrasi</button></a>
    </div>

    <script src="script.js"></script>
</body>
</html>