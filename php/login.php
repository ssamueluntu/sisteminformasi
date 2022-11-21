<?php
session_start();

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

    $connect = mysqli_connect("localhost", "root", "", "project");

    if(isset($_POST["masuk"])){
        $noTelp = $_POST["no_telp"];
        $password = $_POST["password"];

        $result = mysqli_query($connect, "SELECT * FROM user WHERE no_telp = '$noTelp'");

        // cek nomor telpon
        if(mysqli_num_rows($result) === 1){

            // cek password
            if($password){

                // set session
                $_SESSION["login"] = true;

                header("Location: index.php ");
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
    <title>Login</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/solid.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/vendor/css/regiter_login.css">
</head>

<body>

    <div class="login-app">
        <div class="login-cover">
            <img src="https://images.unsplash.com/photo-1482784160316-6eb046863ece?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="" class="bg">
            <div class="caption">
                <h2>Portal BRITA Desa Center</h2>
                <h4>
                    Jelajahi informasi dan potensi dari desamu
                </h4>
            </div>
        </div>
        <div class="login-wrapper">
            <div class="login-form">
                <div class="box">
                    <h3>Sign in ke Portal BRITA Desa Center</h3>
                    <br />

                    <?php if(isset($error)): ?>
                        <p style="color: red; font-style: italic;"><strong>Nomor/Password salah!</strong></p>
                    <?php endif; ?>

                    <form action="" class="form" method="post">
                        <input type="hidden" name="_token" value="pWu88eG1pZywx7RCatj8djs8nKde3TLABCOxyDMY">
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="text" class="form-control mt-2" name="no_telp"
                                placeholder="Masukkan nomor telepon terdaftar anda">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control mt-2" name="password"
                                placeholder="Masukkan password anda">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-fill mt-2" name="masuk">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-footer">
                Copyright &copy; 2021. Portal BRITA
            </div>
        </div>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="assets/vendor/fontawesome/js/brands.js"></script>
    <script src="assets/vendor/fontawesome/js/solid.js"></script> -->
</body>

</html>