<?php
session_start();
// ob_clean();
include 'admin/koneksi/koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="aset/fur/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="aset/fur/css/tiny-slider.css" rel="stylesheet">
    <link href="aset/fur/css/style.css" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <?php include 'inc/nav.php' ?>
    <!-- End Header/Navigation -->
    <?php
    if (isset($_GET['pg'])) {
        if (file_exists('content/' . $_GET['pg'] . '.php')) {
            include 'content/' . $_GET['pg'] . '.php';
        }
    } else {
        include 'content/home.php';
    }

    ?>


    <?php include 'inc/footer.php ' ?>

    <!-- Start Hero Section -->

    <!-- End Hero Section -->

    <!-- Start Product Section -->

    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->

    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->

    <!-- End We Help Section -->

    <!-- Start Popular Product -->

    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->

    <!-- End Testimonial Slider -->
    <!-- Start Blog Section -->

    <!-- End Blog Section -->

    <!-- Start Footer Section -->

    <!-- End Footer Section -->


    <script src="aset/fur/js/bootstrap.bundle.min.js"></script>
    <script src="aset/fur/js/tiny-slider.js"></script>
    <script src="aset/fur/js/custom.js"></script>
</body>

</html>