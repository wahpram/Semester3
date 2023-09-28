<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

include 'fungsi.php';

$value = $_GET["NIM"];

if ( delete($value) > 0) {
    echo"
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>
        ";
}
else{
    echo"
        <script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index.php';
        </script>
        ";
}
?>