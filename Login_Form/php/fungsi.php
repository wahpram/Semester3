<?php

$host = "localhost";
$port = "3306";
$database = "prodi";
$username = "root";
$password = ""; 

$conn = mysqli_connect($host, $username, $password, $database, $port);

if ($conn ->connect_error) {
    die("Koneksi gagal" . $conn->connect_error);
}

function query($query){
    global $conn;

    $sql = mysqli_query($conn, $query);

    $result = [];

    while ( $data = mysqli_fetch_array($sql) ) {
        $result[] = $data;
    }

    return $result;
}

function delete($value){
    global $conn;

    $query="DELETE FROM mahasiswa WHERE NIM = $value";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($value){
    global $conn;

    $nim = $value["id"];
    $nama = htmlspecialchars($value["nama"]);
    $alamat = htmlspecialchars($value["alamat"]);
    $kontak = htmlspecialchars($value["kontak"]);

    $query ="UPDATE mahasiswa SET
                Namamhs = '$nama',
                Alamatmhs = '$alamat',
                Kontakmhs = '$kontak'

                WHERE NIM = '$nim'
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah($value){
    global $conn;

    $nim = htmlspecialchars($value["nim"]);
    $nama = htmlspecialchars($value["nama"]);
    $alamat = htmlspecialchars($value["alamat"]);
    $kontak = htmlspecialchars($value["kontak"]);

    $query ="INSERT INTO mahasiswa VALUES
            ('$nim', '$nama', '$alamat', '$kontak')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($value){
    global $conn;

    $query ="SELECT * FROM mahasiswa 
                WHERE 
                NIM LIKE '%$value%' OR
                Namamhs LIKE '%$value%' OR
                Alamatmhs LIKE '%$value%' OR
                Kontakmhs LIKE '%$value%' 
            ";

    mysqli_query($conn, $query);

    return query($query);
}

function regis($value){
    global $conn;

    $username = strtolower(stripslashes($value["username"]));
    $pass1 = mysqli_real_escape_string($conn, $value["pass"]);
    $pass2 = mysqli_real_escape_string($conn, $value["pass2"]);

    var_dump($username);

    if( $pass1 != $pass2 ){
        echo "
                <script>
                    alert('Konfirmasi password salah!');
                </script>
            ";
        return false;
    }

    $query_valid = "SELECT username FROM data_user WHERE username = '$username'";

    $check = mysqli_query($conn, $query_valid);

    $result = mysqli_fetch_assoc($check);

    if ($result) {
        echo "
                <script>
                    alert('Username sudah ada!');
                </script>
            ";
        return false;
    }

    $enkripsi = password_hash($pass1, PASSWORD_DEFAULT);

    $query ="INSERT INTO data_user VALUES
            (' ', '$username', '$enkripsi');
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>