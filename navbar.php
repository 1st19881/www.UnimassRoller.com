 
 <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start p-2">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="text-white">123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="text-white">วันจันทร์-วันเสาร์
                        8:00–17:00 น.</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end p-2">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small class="text-white"> 021-831-962</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5 ">
        <img id="img-logo" class="d-none d-sm-block" src="images/Logo UMR.svg" width="100%" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php if($menu =="home"){echo"active";}  ?>">Home</a>
                <a href="product.php" class="nav-item nav-link  <?php if($menu =="product"){echo"active";}  ?>">product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php if($menu =="category"){echo"active";}  ?>" data-bs-toggle="dropdown">Category</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                    </div>
                </div>
                <a href="about.php" class="nav-item nav-link  <?php if($menu =="about"){echo"active";}  ?>">About_us</a>
                <a href="contact.php" class="nav-item nav-link <?php if($menu =="contact"){echo"active";}  ?>">Contact_us</a>
            </div>
            <!-- <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">ข้อมูลเพิ่มเติม<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->