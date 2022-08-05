<?php
$menu = "product";
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
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="color: #03a9f4;">Product</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php" style="font-weight: 600;font-size:20px;">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page" style="font-weight: 600;font-size:20px;">Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Product</h6>
                <h1 class="mb-4">Product</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <a href="">
                            <li class="mx-2 active"><a href="product.php" style="color:#000;">All</a></li>
                        </a>
                        <li class="mx-2"><a href="product.php?act=showtype&cate_id=1" style="color:#000;">Solar Panels</a></li>
                        <li class="mx-2" data-filter=".second">Wind Turbines</li>
                        <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <?php
                $act = (isset($_GET['act']) ? $_GET['act'] : '');
                if ($act == 'showtype') {
                    include('showtype.php');
                    // } else if ($act == 'edit') {
                    //     include("employee_edit.php");
                    // } else if ($act == 'delete') {
                    //     include("employee_delete.php");
                } else {
                    include('showproduct.php');
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Projects End -->





    <?php include("footer.php"); ?>

</body>

</html>