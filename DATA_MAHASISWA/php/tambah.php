<?php
    include 'query.php';

    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo 
            "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = '../index.php'; 
            </script>";
        }else{
            "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = '../index.php'; 
            </script>";
        }
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>


<body>

    <div class="container">

        <h1>INPUT DATA MAHASISWA</h1>

        <form action="" method="POST">

            <div class="flex-box">
                <label for="">NIM</label>
                <input type="text" name="NIM" id="NIM" required>
            </div>
            <div class="visibility-hide" id="nim-error">
                <span>*NIM harus berjumlah 10 digit dan tidak boleh mengandung huruf</span>
            </div>


            <div>
                <label for="">Nama</label><br>
                <input type="text" name="Namamhs" id="Namamhs" required>
            </div>
            <div class="visibility-hide" id="nama-error">
                <span>*Nama hanya dapat menerima inputan huruf</span>
            </div>


            <div>
                <label for="">Alamat</label><br>
                <input type="text" name="Alamatmhs" id="Alamatmhs" required>
            </div>
            <div class="visibility-hide" id="alamat-error">
                <span>*Alamat hanya dapat menerima inputan huruf dan ankga</span>
            </div>


            <div>
                <label for="">Kontak</label><br>
                <input type="text" name="Kontakmhs" id="Kontakmhs" required>
            </div>
            <div class="visibility-hide" id="kontak-error">
                <span>*Kontak hanya dapat menerima inpuptan angka</span>
            </div>


            <div>
                <button name="submit" id="submit">Simpan</button>
            </div>

        </form>

    </div>

    <script src="../js/script.js"></script>

</body>

</html>