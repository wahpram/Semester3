<?php
    include 'query.php';

    $id = $_GET["NIM"];
    
    if (delete($id) > 0) {
        echo"
            <script>
                alert('Data Berhasil Dihpaus');
                document.location.href = '../index.php'; 
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Tidak Dihpaus');
                document.location.href = '../index.php'; 
            </script>
        ";
    }
?>