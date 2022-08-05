<?php
$menu = "about";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>บริษัท ยูนิแมสส์ โรลเลอร์ จำกัด</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/Favicon.svg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/template/solartec-1.0.0/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/template/solartec-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/template/solartec-1.0.0/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/template/solartec-1.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/template/solartec-1.0.0/css/style.css" rel="stylesheet">
</head>

<style>
   .contact-aboute p  , a {
    color:#000 !important;
   }
   .contact-about p:hover , i:hover , a:hover {
    color:#ffc107 !important;
   }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <?php
    include("navbar.php");
    ?>



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 " >
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="color: #03a9f4;">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php" style="font-weight: 600;font-size:20px;">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page" style="font-weight: 600;font-size:20px;">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0 ">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/Picture3.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">About Us</h6>
                        <h1 class="mb-4">บริษัท ยูนิแมสส์ โรลเลอร์ จำกัด</h1>
                        <p><i class="fas fa-map-marker-alt me-2 text-danger" style="font-size: 18px;"></i> 875 นิคมอุตสาหกรรมบางปู (เหนือ)
                            หมู่ที่ 2 ต.แพรกษาใหม่ อ.เมืองสมุทรปราการ จ.สมุทรปราการ 10280</p>
                        <p><i class="fas fa-map-marker-alt me-2 text-danger" style="font-size: 18px;"></i> 875 North Bangpoo Imdustrial Estate Moo 2 Pkraeksa Mai Subdistrict, Mueang Samut Prakarn District, Samut Prakarn Province, 10280</p>
                        <div class="row g-2">
                            <div class="col-lg-6">
                                <div class="contact-aboute">
                                    <p><a href=""><i class="fa fa-envelope  me-3" style="color:#fab62d;font-size:20px;"></i>Unimassroller@hotmail.com</a></p>
                                    <p><a href=""><i class="fa fa-envelope  me-3" style="color:#fab62d;font-size:20px;"></i>Unimass.K@hotmail.com</a></p>
                                    <p><a href=""><i class="fa fa-envelope  me-3" style="color:#fab62d;font-size:20px;"></i>Unimass.R@hotmail.com</a></p>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-6">
                                <p><i class="fa fa-phone-square-alt  me-3" style="color:#03a9f4;font-size:20px;"></i><a href="">021-831-962</a></p>
                                <p><i class="fa fa-phone-square-alt  me-3" style="color:#03a9f4;font-size:20px;"></i> <a href="">099-449-6987</a></p>
                                <p><i class="fa fa-fax  me-3" style="color:#03a9f4;font-size:20px;"></i> <a href="">021-831-963</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <?php include("footer.php"); ?>

</body>

</html>