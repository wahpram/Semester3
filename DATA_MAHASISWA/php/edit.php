<?php
    include 'query.php';

    $id = $_GET['NIM'];

    $value = query("SELECT * FROM mahasiswa WHERE NIM = '$id'")[0];

    if (isset($_POST["submit"])) { 
        if (edit($_POST) > 0) {
            echo"
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = '../index.php'; 
                </script>
            ";
        }
        else{
            echo"
                <script>
                    alert('Data Tidak Diubah');
                    document.location.href = '../index.php'; 
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title> 
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>


    <div class="container">


        <h1>EDIT DATA MAHASISWA</h1>


        <form action="" method="post">


            <input type="hidden" name="id" id="id" value="<?= $value["NIM"] ?>">


            <div>
                <label for="">NIM</label><br>
                <input type="text" name="NIM" id="NIM" value="<?= $value["NIM"] ?>" disabled>
            </div>


            <div class="visibility-hide" id="nim-error">
                <span>*NIM harus berjumlah 10 digit dan tidak boleh mengandung huruf</span>
            </div>

            
            <div>
                <label for="">Nama</label><br>
                <input type="text" name="Namamhs" id="Namamhs" value="<?= $value["Namamhs"] ?>" required>
            </div>


            <div class="visibility-hide" id="nama-error">
                <span>*Nama hanya dapat menerima inputan huruf</span>
            </div>


            <div>
                <label for="">Alamat</label><br>
                <input type="text" name="Alamatmhs" id="Alamatmhs" value="<?= $value["Alamatmhs"] ?>" required>
            </div>


            <div class="visibility-hide" id="alamat-error">
                <span>*Alamat hanya dapat menerima inputan huruf dan ankga</span>
            </div>


            <div>
                <label for="">Kontak</label><br>
                <input type="text" name="Kontakmhs" id="Kontakmhs" value="<?= $value["Kontakmhs"] ?>" required>
            </div>


            <div class="visibility-hide" id="kontak-error">
                <span>*Kontak hanya dapat menerima inpuptan angka</span>
            </div>


            <div>
                <button name="submit" id="submit">Simpan Perubahan</button>
            </div>


        </form>


    </div>

    <script src="../js/script2.js"></script>


</body>

</html>