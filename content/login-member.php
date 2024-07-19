<?php
// print_r($_SESSION);
// die;
if (isset($_POST['simpan'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // echo $email;
    // echo $pass;
    $query = mysqli_query($koneksi, "SELECT * FROM member WHERE member.email= '$email'");
    if (mysqli_num_rows($query) > 0) {
        $dataToko = mysqli_fetch_assoc($query);
        if ($dataToko['password'] == $password) {
            $_SESSION['id_member'] = $dataToko['id'];
            $_SESSION['id_session'] = session_id();

            header('location: index.php');
            // exit; untuk menyelesaikan sebuah kondisi dipakai utk looping
        }
    }
}
?>

<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8 pb-4">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-12">
                            </div>
                        </div>
                        <?php if (isset($_SESSION['id_member'])) : ?>
                            Selamat Datang di Website Furni
                        <?php else : ?>
                            <form method="post">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-black" for="">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-black" for="email">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" name="simpan" class="btn btn-primary-hover-outline">Login</button>
                                <a href="?pg=member">Register</a>
                            </form>
                        <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>