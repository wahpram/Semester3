<?php 

$host = "mysql_db";
$database = "prodi";
$username = "wahyu";
$password = "wahyu123"; 

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn ->connect_error) {
    die("Koneksi gagal" . $conn->connect_error);
}

function query($query){
    global $conn;

    $sql = mysqli_query($conn, $query);
    
    $result = array();

    while ($data = mysqli_fetch_array($sql)){
        $result[] = $data;
    }
    
    return $result;
}

function add($value){
    global $conn;

    $nim = $value["NIM"];
    $namamhs = $value["Namamhs"];
    $alamatmhs = $value["Alamatmhs"];
    $kontak = $value["Kontakmhs"];

    $insert = "INSERT INTO mahasiswa VALUES
                ('$nim', '$namamhs', '$alamatmhs', '$kontak')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;

    $delete = "DELETE FROM mahasiswa WHERE NIM = '$id'";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

function edit($value){
    global $conn;

    $nim = $value['id'];
    $namamhs = htmlspecialchars($value["Namamhs"]);
    $alamatmhs = htmlspecialchars($value["Alamatmhs"]);
    $kontak = htmlspecialchars($value["Kontakmhs"]);

    $edit = "UPDATE mahasiswa SET 
                namamhs = '$namamhs',
                alamatmhs = '$alamatmhs',
                kontakmhs = '$kontak' 

                WHERE NIM = '$nim'
            ";
    
    // if ($query_run = mysqli_query($edit)) {
    //     $num_rows = mysqli_num_rows($query_run);

    //     if ($num_rows == 1) {
    //         echo"<script>
    //                 alert('data sudah ada');
    //             </script>";
    //     }
    // }
    
    mysqli_query($conn, $edit);

    return mysqli_affected_rows($conn);
}

?>
