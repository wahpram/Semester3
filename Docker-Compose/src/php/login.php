<?php
    session_start();

    if( isset($_COOKIE['login'])){
        if( $_COOKIE['login'] == 'true'){
            $_SESSION['login'] = true;
        }
    }

    if( isset($_SESSION["login"]) ){
        header("Location: index.php");
        exit;
    }

    include 'fungsi.php';

    if ( isset($_POST["submit"]) ) {
        $user = $_POST["username"];
        $pass = $_POST["pass"];

        $check = "SELECT * FROM data_user WHERE username = '$user'";

        $result = mysqli_query($conn, $check);

        if ( mysqli_num_rows($result) === 1 ) {
            $value = mysqli_fetch_assoc($result);

            if( password_verify($pass, $value["password"]) ){
                $_SESSION["login"] = true;

                if( isset($_POST['rm']) ){
                    setcookie('login', 'true', time() + 60);
                }

                header("Location: index.php");
                exit;
            }
        }
        
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <p>username/password salah!!!</p>
    <?php endif ?>

    <form action="" method="post">

        <div>
            <input type="text" name="username" id="username" class="form-control">
            <label for="username" class="form-label">Username</label>
        </div>
        
        <div>
            <input type="text" name="pass" id="pass" class="form-control">
            <label for="password" class="form-label">Password</label>
        </div>

        <div>
            <div>
                <div>
                    <input class="form-check-input" type="checkbox" name="rm" id="rm">
                    <label class="form-check-label" for="rm">Remember me?</label>
                </div>
            </div>
        </div>

        

    <button type="submit" name="submit">Login</button><br>

    </form>

    <span>Belum ada akun?</span>
    <a href="regist.php"><button class="btn btn-primary; warna">Registrasi</button></a>

</body>
</html>