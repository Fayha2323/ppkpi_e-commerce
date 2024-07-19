<?php
// include 'admin/function/get_data.php';

// Assuming $_SESSION['id_member'] is properly initialized elsewhere
$id_member = $_SESSION['id_member'];
// Query to fetch member data
$query = mysqli_query($koneksi, "SELECT * FROM member WHERE id = '$id_member'");

// Fetch associative array of data
$data = mysqli_fetch_assoc($query);

?>



<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li><a class="nav-link" href="?pg=shop">Shop</a></li>
                <li><a class="nav-link" href="?pg=about">About us</a></li>
                <li><a class="nav-link" href="?pg=services">Services</a></li>
                <li><a class="nav-link" href="?pg=blog">Blog</a></li>
                <li><a class="nav-link" href="?pg=contact">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="?pg=login-member"><img src="aset/fur/images/user.svg"><?= $data['nama_lengkap'] ?>
                    </a>
                <li><a class="nav-link" href="cart.html"><img src="aset/fur/images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>