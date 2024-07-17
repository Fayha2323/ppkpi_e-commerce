<?php
include "koneksi/koneksi.php";
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    // echo $email;
    // echo $pass;
    $query = mysqli_query($koneksi, "SELECT * FROM toko WHERE toko.email= '$email'");
    if (mysqli_num_rows($query) > 0) {
        $dataToko = mysqli_fetch_assoc($query);
        if ($dataToko['password'] == $pass) {
            $_SESSION['nama_lengkap'] = $dataToko['nama_lengkap'];
            $_SESSION['email'] = $dataToko['email'];
            $_SESSION['id_level'] = $dataToko['id_level'];
            header('location: index.php'); 
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Souza_Fayha | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/adm/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../aset/adm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/adm/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b>Souza_Fayha</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php if (isset($_GET['accsess'])) : ?>
                    <div class="alert alert-danger">Login dulu ya</div>
                <?php endif ?>
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../aset/adm/aset/adm/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../aset/adm/aset/adm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/adm/aset/adm/dist/js/adminlte.min.js"></script>
</body>

</html>