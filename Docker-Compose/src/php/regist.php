<?php
    include 'fungsi.php';

    if ( isset($_POST["submit"]) ) {
        
        if (regis($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
                ";
        }
        else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div>
        <h1>Halaman Registrasi</h1>

        <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            
            <li>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass">
            </li>

            <li>
                <label for="pass2">Confrim Password</label>
                <input type="password" name="pass2" id="pass2">
            </li>
            
        </ul>

        <button type="submit" name="submit">Registrasi</button>

        </form>
    </div>
</body>
</html>