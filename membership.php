<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/bppa-fav-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- gallery -->
    <link rel="stylesheet" href="css/gallery.css">
    <!-- Profile -->
    <link rel="stylesheet" href="css/profile.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <!-- --------------------------------- Header Start -------------------------------------->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <img class="img-fluid" width="150px" src="images/logoBanner/BPPA-white.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="index.php" class="waves-effect waves-light">
                                    <span>Home</span>
                                </a>
                            </li>
                            <span class="res-head">
                                <li class="user-profile header-notification b-menu" data-target="who-we-are">
                                    <a href="#!" class="waves-effect waves-light">
                                        <span>About</span>
                                    </a>
                                </li>
                                <li class="user-profile header-notification b-menu" data-target="membership-benefit">
                                    <a href="#!" class="waves-effect waves-light">
                                        <span>Membership</span>
                                    </a>
                                </li>
                                <li class="user-profile header-notification b-menu" data-target="gallery-bppa">
                                    <a href="#!" class="waves-effect waves-light">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                            </span>
                            <li class="user-profile header-notification">
                                <a href="pages/auth.html" class="waves-effect waves-light">
                                    <span>Login</span>
                                </a>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <span>Ayesha Khalid</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li class="waves-effect waves-light b-menu" data-target='profile-bppa'>
                                        <a>
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ----------------------------------- Header End --------------------------------------->


            <!-- --------------------------------- Side Bar Start -------------------------------------->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                                        <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="pcoded-navigation-label">About</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu b-menu pcoded-trigger active" data-target="who-we-are">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Who We Are?</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active ">
                                            <a class="waves-effect waves-dark sidebar-link" href="#overview">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Overview</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="waves-effect waves-dark sidebar-link" href="#meet">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Meet Our Organization</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="waves-effect waves-dark sidebar-link" href="#history">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Our History</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="waves-effect waves-dark sidebar-link" href="#constitution">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Constitution</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Membership</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu b-menu" data-target="membership-benefit">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Membership Benifits</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active" id="op1">
                                            <a class="waves-effect waves-dark sidebar-link" href="#earlycareer">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Early Career</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="op2">
                                            <a class="waves-effect waves-dark sidebar-link" href="#trainee">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Trainee</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="op3">
                                            <a class="waves-effect waves-dark sidebar-link" href="#retired">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Retired</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="op5">
                                            <a class="waves-effect waves-dark sidebar-link" href="#affiliate">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Affilate</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="op4">
                                            <a class="waves-effect waves-dark sidebar-link" href="#annual">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Annual</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="op6">
                                            <a class="waves-effect waves-dark sidebar-link" href="#5years">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">5 year</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Gallery</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" b-menu" data-target="gallery-bppa">
                                    <a class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Gallery</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Contact</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" b-menu" data-target="contact-bppa">
                                    <a class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-email"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Contact us</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- --------------------------------- Side Bar End -------------------------------------->
                    <!-- --------------------------------- Top Banner Start -------------------------------------->
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">British Pakistani Psychiatrists Association</h5>
                                            <p class="m-b-0">Become a part of British Pakistani Psychiatrists Association</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">About us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- --------------------------------- Top Banner End -------------------------------------->
                        <!-- --------------------------------- Page Body Tab Start -------------------------------------->
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- --------------------------------- About Tab Start -------------------------------------->
                                        <div class="row content-row" id="who-we-are">
                                            <div class="col-sm-12">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Who We Are?</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row m-b-30">
                                                            <div class="col-lg-12 col-xl-12 ">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs about-tabs md-tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab">Overview</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#meet" role="tab">Meet Our Organization</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#history" role="tab">Our History</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#constitution" role="tab">Consitution</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content card-block">
                                                                    <div class="tab-pane active" id="overview" role="tabpanel">
                                                                        <div class="swiper-wrapper about-card-container">
                                                                            <div class="card about-card">
                                                                                <div class="image-content">
                                                                                    <div class="about-card-image">
                                                                                        <img src="assets/images/relax-icon.svg" width="100px" alt="">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-content">
                                                                                    <h2 class="name">About BPPAs</h2>
                                                                                    <p class="description">The British Pakistani Psychiatrists Association (BPPA) is an association of Psychiatrists and allied mental health professionals in Britain of Pakistani heritage and cultural affiliation.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card about-card">
                                                                                <div class="image-content">
                                                                                    <div class="about-card-image">
                                                                                        <img src="assets/images/book-open-icon.svg" width="100px" alt="">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-content">
                                                                                    <h2 class="name">Educational</h2>
                                                                                    <p class="description">BPPA is a forum to represent and share the individual and collective views of its members to promote social and academic development among one another and with the wider British Society.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card about-card">
                                                                                <div class="image-content">
                                                                                    <div class="about-card-image">
                                                                                        <img src="assets/images/hierarchy-management-task-icon.svg" width="100px" alt="">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-content">
                                                                                    <h2 class="name">Members</h2>
                                                                                    <p class="description">BPPA is at the forefront of offering its members job and career counselling, training and voicing the needs of trainees in Psychiatry.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="meet" role="tabpanel">
                                                                        <div class="col-lg-12 col-xl-12 tab-with-img">
                                                                            <div class="sub-title">Executive Officers</div>
                                                                            <!-- Nav tabs -->
                                                                            <ul class="nav nav-tabs md-tabs img-tabs b-none" role="tablist">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link active" data-toggle="tab" href="#home8" role="tab">
                                                                                        <img src="assets/images/avatar-1.jpg" class="img-fluid img-circle" alt="">
                                                                                        <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#profile8" role="tab">
                                                                                        <img src="assets/images/avatar-2.jpg" class="img-fluid img-circle" alt="">
                                                                                        <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#messages8" role="tab">
                                                                                        <img src="assets/images/avatar-3.jpg" class="img-fluid img-circle" alt="">
                                                                                        <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#settings8" role="tab">
                                                                                        <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                        <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <!-- Tab panes -->
                                                                            <div class="tab-content card-block">
                                                                                <div class="tab-pane active" id="home8" role="tabpanel">
                                                                                    <p class="text-center m-0">1. Dr. Shahid Latif, Chairman of the British Pakistani Psychiatrists Association (BPPA), is a leading psychiatrist committed to advancing career development and training for members. Under his leadership, the BPPA focuses on providing support and resources to enhance professional growth and address the needs of psychiatric trainees.</p>
                                                                                </div>
                                                                                <div class="tab-pane" id="profile8" role="tabpanel">
                                                                                    <p class="text-center m-0">2. Dr. Rais Irfan Ahmad is the General Secretary of the British Pakistani Psychiatrists Association (BPPA). In this role, he plays a crucial part in coordinating the association's activities, facilitating communication among members, and supporting the organization’s initiatives to advance the field of psychiatry and support mental health professionals of Pakistani heritage.</p>
                                                                                </div>
                                                                                <div class="tab-pane" id="messages8" role="tabpanel">
                                                                                    <p class="text-center m-0">3. Dr. Aamer Malik Sajjad serves as the Treasurer of the British Pakistani Psychiatrists Association (BPPA). He is responsible for managing the association’s finances, ensuring fiscal responsibility, and overseeing budgeting and financial planning. Dr. Sajjad’s role is pivotal in supporting BPPA’s initiatives and ensuring the effective allocation of resources to benefit its members.</p>
                                                                                </div>
                                                                                <div class="tab-pane" id="settings8" role="tabpanel">
                                                                                    <p class="text-center m-0">4. Dr. Asad Malik is the Social Secretary of the British Pakistani Psychiatrists Association (BPPA). He is responsible for organizing events and activities that foster networking and community engagement among members. Dr. Malik's role is essential in creating opportunities for social interaction and professional connection within the association.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Start Regional Executives -->
                                                                        <div class="col-lg-12 col-xl-12 tab-with-img">
                                                                            <div class="sub-title">Regional Executives</div>
                                                                            <!-- Nav tabs -->
                                                                            <div class="slide-container swiper swiper1">
                                                                                <div class="slide-content slide-content1">
                                                                                    <ul class="card-wrapper swiper-wrapper img-tabs b-none">
                                                                                        <li class="swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-1.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Kamila Haider<br><small>East Midlands</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-2.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Muhammad Gul<br><small>West Midlands</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-3.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Ali Mesam Mehdi<br><small>South East</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Adnan Hafeez<br><small>North West</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Saman Khan<br><small>Scotland</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Saima Niaz<br><small>London</small></h6>
                                                                                        </li>
                                                                                        <li class="swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Raja Adnan Ahmed<br><small>Wales</small></h6>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="swiper-button-next swiper-navBtn swiper1-next"></div>
                                                                                <div class="swiper-button-prev swiper-navBtn swiper1-prev"></div>
                                                                                <div class="swiper-pagination swiper-pagination1"></div>
                                                                            </div>
                                                                            <!-- Tab panes -->
                                                                        </div>
                                                                        <!-- End Regional Executives -->
                                                                        <!-- Start Co-opted Executives -->
                                                                        <div class="col-lg-12 col-xl-12 tab-with-img">
                                                                            <div class="sub-title">Co-opted Executives</div>
                                                                            <!-- Nav tabs -->
                                                                            <div class="slide-container swiper swiper2">
                                                                                <div class="slide-content slide-content2">
                                                                                    <ul class="card-wrapper swiper-wrapper img-tabs b-none">
                                                                                        <li class="swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-1.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Kamila Haider<br><small>East Midlands</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-2.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Muhammad Gul<br><small>West Midlands</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-3.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Ali Mesam Mehdi<br><small>South East</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Adnan Hafeez<br><small>North West</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Saman Khan<br><small>Scotland</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Saima Niaz<br><small>London</small></h6>
                                                                                        </li>
                                                                                        <li class=" swiper-slide nav-item">
                                                                                            <a class="nav-link active text-center" href="person.php">
                                                                                                <img src="assets/images/avatar-4.jpg" class="img-fluid img-circle" alt="">
                                                                                                <span class="quote"><i class="icofont icofont-quote-left bg-main"></i></span>
                                                                                            </a><br>
                                                                                            <h6 class="text-center">Dr. Raja Adnan Ahmed<br><small>Wales</small></h6>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="swiper-button-next swiper-navBtn swiper2-next"></div>
                                                                                <div class="swiper-button-prev swiper-navBtn swiper2-prev"></div>
                                                                                <div class="swiper-pagination swiper-pagination2"></div>
                                                                            </div>
                                                                            <!-- Tab panes -->
                                                                        </div>
                                                                        <!-- End Co-opted Executives -->
                                                                    </div>
                                                                    <div class="tab-pane" id="history" role="tabpanel">
                                                                        <p class="m-0">The creation of the BPPA was one that began as a matter of importance, particularly when British Pakistani psychiatrists began to feel to lose their identity and their say on issues important to their future and working lives. Surviving in a society that accords massive opportunities and challenges, survival can be stressful especially with dignity and parity. There is a constant need for everyone to be part of a larger, vocal, support network, like a union, a spokes-body for one’s aspirations, protection and assistance. That was why the trade union movement started. That was why human beings chose to live in groups and had alliances with each other. British Pakistani psychiatrists needed to have such alliances and representation. However, there was the desire but there was neither time nor resources to build this support network. Of course some attempts were made but those collapsed due to internal conflicts and divisions. Yet, there were always opportunities to meet at various conferences and forums, periodically, which gave us- British Pakistani psychiatrists, a sense of camaraderie and support.


                                                                        <div class="col-sm-12 col-xl-12 mt-4">
                                                                            <h4 class="sub-title">The executive team gelled in developing new ideas and initiatives. For instance, BPPA:</h4>
                                                                            <ul>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Pioneered the idea of joint working with Indian, Sri Lankan and Arab psychiatrists and proposed setting up a joint committee.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Pioneered in setting up an umbrella organization of all British Pakistani physicians in Britain, called BPPA.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It started to liaise with BAPIO and other organizations; especially the royal college to pursue it aims objectives of forwarding the interests of the BPPA membership.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It proposed various strategies to the College to address the issue of SAS and locum doctors.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It proposed a clearing house system to the Chief Executive of the NHS for dealing with PLAB doctors.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> The BPPA is a dynamo of ideas: responsive, reactive, pre-emptive, and principled. When the 7/7 terrorist atrocity occurred, BPPA members were key in organizing a vigil for peace in London, which was covered by numerous international media sources.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It is the only recognized and representative association recognized by the government of Pakistan and the Royal College of Psychiatrists.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It is also the representative group on the Ethnic Psychiatrists Committee and on the ABPPA’s Standing Committee.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It has held four major national conferences and collaborated in arranging the largest ever gathering of psychiatrists in the UK, titled "A Great Partnership" in 2004.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Among its publications, it regularly prints its newsletter, now called BPPAnama.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It has close links with the Family Physicians Association of Pakistan and is cooperating in the organization of its 2005 conference.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It is planning to collaborate in arranging the next conference of the Pakistan Psychiatric Society in Lahore in 2006.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> It is seeking a closer working relationship with psychiatrists in the USA and APPNA, amongst many of its other initiatives in the UK and Pakistan.
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-sm-12 col-xl-12 mt-4">
                                                                            <h4 class="sub-title">In summary, BPPA has three major areas of work:</h4>
                                                                            <ul>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Peer support and representing British Pakistani psychiatrists;
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Influencing UK health policy and process so British- Pakistani psychiatrists are not excluded, becoming a pressure group;
                                                                                </li>
                                                                                <li>
                                                                                    <i class="icofont icofont-double-right text-success"></i> Uniting in action, with other associations so we are not split and lose out, as had happened historically.
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <br>
                                                                        Other purposes are to work closely with the royal college and other bodies like GMC and PMETB, the NHS and department of Health; work closely with the Pakistan High Commission, to make matters easier for its members in particular and all others in general.

                                                                        It has proposed various ideas to the government of Pakistan, the health planners in Pakistan, to show another side of the picture, with an international view in mind. It is in communication with Pakistani medical institutions to develop international faculty.

                                                                        It is a new association, but has come far in this short time. It has pioneered many constructive initiatives, nationally and internationally. It is proud of its tradition of proactive engagement with the wider society and to make our living experience better, in the country of our choice, our adopted country: Britain, while trying to improve life in Pakistan.</p>
                                                                    </div>
                                                                    <div class="tab-pane" id="constitution" role="tabpanel">
                                                                        <div class="card-block">
                                                                            <!-- Row start -->
                                                                            <div class="sub-title mt-4">AIMS AND OBJECTIVES</div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To keep a database of all such Psychiatrists in the UK, Ireland, and other countries in Europe.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To have a website for better communication and to provide an opportunity for British Pakistani psychiatrists to contact others.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To arrange periodic get-togethers for its members.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To provide a forum for the members to establish academic, professional, and social links with other associations.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To provide information to junior psychiatrists wishing to pursue their careers in the United Kingdom.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To provide advice and guidance to governmental, professional, and other non-statutory bodies on relevant issues.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To undertake whatever is deemed appropriate by the executive of the association, in any field or any sphere.
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                                <div class="col-lg-12 col-xl-6">

                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <!-- Nav tabs -->
                                                                                        <ul class="nav nav-tabs  tabs" role="tablist">
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Powers and Authority of the Association</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Membership</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Membership Fee</a>
                                                                                            </li>

                                                                                        </ul>
                                                                                        <!-- Tab panes -->
                                                                                        <div class="tab-content tabs card-block">
                                                                                            <div class="tab-pane active" id="home1" role="tabpanel">
                                                                                                <p class="m-0">1. Under the above entitled name, and for the objectives expressed, the Association shall have the power and authority to make rules/regulations, to alter, amend and change the same and to do everything needful for its good maintenance, support and viability. It shall be and is empowered to hold, lease, receive, purchase and convey all manners of property, both real and personal, accept and receive donations, legacies and bequests; to borrow or lend money; to invest its funds as it so chooses; to own, publish, conduct, and circulate such literature as will further its expressed purposes; to name and appoint such managers and employees as its interests and convenience may require; and otherwise to do and perform all acts and things requisite and necessary to carry out the aims and objectives of this Association.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="profile1" role="tabpanel">
                                                                                                <p class="m-0">2. The membership of the Association will include all eligible trainee or trained psychiatrists, in training or career positions, subscribing to the objectives of the Association and residing in the UK, Ireland or any other European. Membership will be confirmed and continued after payment of dues. The members shall have all dues paid and shall be entitled to all of the privileges of the Association including the right to vote and hold office. A member must comply with the rules and regulations of the Association. There shall be no discrimination on the basis of religion, gender, sexual orientation, race or ethnic origin in the membership of the Association. Being a Pakistani psychiatrist is a state of mind and not of existence, it is a preference and if others wish to become members, they would not be hindered in any respect.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="messages1" role="tabpanel">
                                                                                                <p class="m-0">3. All members shall pay full dues as determined by the Executive Committee and approved by the general body. The term of the annual dues shall be from 1 January to 31st December. Any member whose dues are not paid by 1 March will be considered in arrears and will not be eligible to hold office in the Association, but may vote as long as all dues are paid prior to elections.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Row end -->
                                                                            </div>
                                                                            <div class="sub-title mt-4">EXECUTIVE COMMITTEE AND EXECUTIVE MEMBERS FUNCTIONS</div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> The Executive Committee shall be the governing body of the BPPA and consist of Executive members from all regions of the RCPsych UK.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> The Committee shall be responsible for the management of all matters pertaining to the association, including financial affairs and funds of the association.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> The Committee shall fix the date and place of meetings.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> It shall create and authorize the appointment of standing and ad-hoc committees and maintain an up-to-date directory of members.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> The Committee shall be responsible for the safekeeping of all financial and pertinent records.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> The Chair, in consultation with the Executive Committee, shall establish subcommittees on important strategic issues and determine the tenure and membership of these subcommittees.
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                                <div class="col-lg-12 col-xl-6">

                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <!-- Nav tabs -->
                                                                                        <ul class="nav nav-tabs  tabs" role="tablist">
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link active" data-toggle="tab" href="#meetings1" role="tab">Meetings</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#elections1" role="tab">Elections</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#structure1" role="tab">Structure</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#attendance1" role="tab">Attendance</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#nominations1" role="tab">Nominations</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#eligibility1" role="tab">Eligibility</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#term1" role="tab">Term</a>
                                                                                            </li>

                                                                                        </ul>
                                                                                        <!-- Tab panes -->
                                                                                        <div class="tab-content tabs card-block">
                                                                                            <div class="tab-pane active" id="meetings1" role="tabpanel">
                                                                                                <p class="m-0">1. The executive committee would meet regularly, not less than three times a year. The executive, through the secretary, would arrange these meetings and dates circulated in advance. Decisions would be either with consensus or majority.
                                                                                                    The executive committee will meet every 4 months or three times a year, but for any urgent/important issue, chairperson, with secretary, can convene any extra meeting. The minutes of the meetings will be available to its members if requested.
                                                                                                    Meetings may be held, on the web, by net meeting.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="elections1" role="tabpanel">
                                                                                                <p class="m-0">2.The office holders in executive committee members (ECMs) will be elected every four years and others, every three years. All of the ECMs shall serve until their successors are elected and installed. Each ECM shall maintain permanent residence in the UK during his/her tenure.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="structure1" role="tabpanel">
                                                                                                <p class="m-0">3. Including patron, Chairperson, Secretary/Treasurer and executive members.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="attendance1" role="tabpanel">
                                                                                                <p class="m-0">4. Any executive member unable to attend two consecutive meetings would be asked to explain why he/she may not be replaced by the executive, due to repeated absence. In the presence of a satisfactory explanation, as deemed by the majority of the executive, allowance may be made for the absences. In case of three consecutive absences, the post would be automatically deemed vacant and, at the discretion of the chair, a nominee would be appointed to the post for the first 12 months and there would be a further extension, at the discretion o f the majority of the committee.
                                                                                                    The executive post shall be declared vacant by the committee when an officer resigns or leaves the UK without prearrangement with the executive or becomes disabled to carry out duties of the office for reasons of health or otherwise.
                                                                                                    If the executive committee post becomes vacant, the executive committee will nominate a temporary successor for the un-expired term.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="nominations1" role="tabpanel">
                                                                                                <p class="m-0">5. These nominations will be sent to all members for vote. All members shall have the right to vote. All elections shall be by a postal/electronic ballot. A simple majority of the votes cast is necessary to elect. The executive committee would appoint an election panel/officer, to conduct elections and monitor the elections. The Election panel will open/count the votes at least within a week before the AGM. Its results will be announced at the AGM by the chairperson.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="eligibility1" role="tabpanel">
                                                                                                <p class="m-0">6. All ordinary members will be eligible for nomination to any post in the executive committee. 30 days notice will be given to send nominations. There shall be at least one nominee for each position. A member can nominate himself/herself or nominated by other member (with the agreement of the nominee). All nominees will be asked to submit their introductory statement, not exceeding 200 words and their photograph to the executive committee.</p>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="term1" role="tabpanel">
                                                                                                <p class="m-0">7. No candidate shall be elected to any office for more than two consecutive terms.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Row end -->
                                                                            </div>
                                                                            <div class="sub-title mt-4">Duties Of Executive Committee</div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To perform all acts and transact all business for and on behalf of the Association.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To manage the funds of the Association and conduct the affairs, works, and activities of the Association except as may be otherwise provided for in these regulations.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To authorize and appoint such sub-committees as are necessary to carry out the work of the Association.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To fill in any vacancies in a committee not otherwise provided for in these regulations.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To fix the date and place of events, the AGM, and make all appropriate arrangements.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To supervise and oversee all the Association’s activities.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To adopt measures in support of its members to uphold the aims and objectives of the Association.
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="icofont icofont-double-right text-success"></i> To perform such other duties as may be required by the AGM or other rules of the Association.
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                                <div class="col-lg-12 col-xl-6">
                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <!-- Nav tabs -->
                                                                                        <ul class="nav nav-tabs  tabs" role="tablist">
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link active" data-toggle="tab" href="#chair1" role="tab">Chair</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#secretary1" role="tab">Secretary</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#esecretary1" role="tab">(Co-opted) Events Secretary</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#emembers1" role="tab">Executive Members</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" data-toggle="tab" href="#treasurer1" role="tab">Treasurer</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <!-- Tab panes -->
                                                                                        <div class="tab-content tabs card-block">
                                                                                            <div class="tab-pane active" id="chair1" role="tabpanel">
                                                                                                <p class="m-0">1. The Chairperson shall be the executive member of the Association. The duties of the chairperson shall include the following:
                                                                                                </p>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To chair the meetings and the AGM of the Association.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To be the official and standing representative of the association.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To direct the working of the association, as the principal policy and executive officer.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To be the publishing chief editor of the newsletter of the association.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To chair all meetings of the Executive Committee.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To appoint all future committees of the Association, subject to approval by the Executive Committee (such as Election Committee, IT/website, Newsletter, project work, etc.).
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To represent or nominate a representative at other meetings, home or abroad.
                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="secretary1" role="tabpanel">
                                                                                                <p class="m-0">2. The duties of the Secretary shall include the following:
                                                                                                </p>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To serve as the conducting and recording officer of the Executive Committee and the AGM.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To supervise and maintain preparation of and a permanent record of all official minutes of the Association meetings.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To serve as a member of the Executive Committee.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To supervise and maintain an up-to-date record/data of the members residing in the United Kingdom and other European countries, including names, addresses, telephone numbers, specialty, and e-mail addresses.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To supervise all arrangements for the holding of each meeting in compliance with the constitution and regulations and instructions of the Executive Committee.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To send out all official notices of meetings, committee appointments, special committee assignments, and elections to office.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To notify members in the UK or other European countries about dues, dues-reminders, etc.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To perform such other duties that may be required of him/her by the AGM, the Executive, and the Chairman.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To communicate with its members on the AGM, elections, any proposed changes, and dissolution if required.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To ensure safe record keeping of all matters and documents pertaining to the Association.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To make and take urgent decisions only after approval and consultation with the Chairman and subsequent approval of the Executive.
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="tab-pane" id="esecretary1" role="tabpanel">
                                                                                                <p class="m-0">3. This person would be appointed for short term projects, nominated by the secretary, approved by the chair and by the executive, to undertake a task, as specified in the project. The tenure of the post would be a maximum of 6 months.
                                                                                                </p>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To organize and manage social and other events and functions agreed by the Executive Committee.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To perform such other duties that may be required of them by the Chairperson, Executive Committee, and the AGM.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To raise funds, including sponsorships, from different sources.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To suggest sub-committees to raise funds and sponsorships where appropriate.
                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="emembers1" role="tabpanel">
                                                                                                <p class="m-0">4. The duties of the Executive Members shall include the following:

                                                                                                </p>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To serve as members of the Executive Committee.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To enlist new members and encourage participation of psychiatrists.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To perform such other duties that may be required of them by the Chairperson, Executive Committee, and general body.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To work to targets as given by the Executive or by the Chairperson.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To present a budget at the Annual General Meeting.
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="icofont icofont-double-right text-success"></i> To render a report to the Executive Committee reviewing the Association's funds and imparting recommendations for advancements in the Association’s interests at each meeting of the Executive Committee or when required by the Chairperson.
                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="treasurer1" role="tabpanel">
                                                                                                <p class="m-0">5. This post would be held by the secretary, unless specifically decided by the secretary to relinquish it, due to workload, with the approval of the executive.

                                                                                                    The Treasurer shall be the custodian of all the invested funds such as membership dues, sponsorships etc. He/she shall accountable, through the committee to the Association. The duties of the Treasurer shall include the following:

                                                                                                </p>
                                                                                                <ul>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To conduct all financial affairs of the Association.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To act as custodian and transfer for all monies and securities subject to approval by the Executive Committee.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To collect all annual membership dues, donations, and such monies that may be due to the Association.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To draw, sign, and send all vouchers for payment.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To make available for audit all records and transactions of the Association to the nominated auditors one month before the AGM.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To serve as a member of the Executive Committee.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To present an annual report at the Annual General Meeting.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To present a budget at the Annual General Meeting.</li>
                                                                                                    <li><i class="icofont icofont-double-right text-success"></i> To render a report to the Executive Committee reviewing the Association's funds and imparting recommendations for the advancements of the Association’s interest at each meeting of the Executive Committee or when required by the Chairperson.</li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Row end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="leadership" role="tabpanel">
                                                                        <dl class="dl-horizontal row">
                                                                            <dt class="col-sm-1">About BPPA:</dt>
                                                                            <dd class="col-sm-11">The British Pakistani Psychiatrists Association (BPPA) is an association of Psychiatrists and allied mental health professionals in Britain of Pakistani heritage and cultural affiliation.</dd>
                                                                            <dt class="col-sm-1">Educational:</dt>
                                                                            <dd class="col-sm-11">BPPA is a forum to represent and share the individual and collective views of its members to promote social and academic development among one another and with the wider British Society.</dd>
                                                                            <dt class="col-sm-1">Members:</dt>
                                                                            <dd class="col-sm-11">BPPA is at the forefront of offering its members job and career counselling, training and voicing the needs of trainees in Psychiatry.</dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- Row end -->
                                                        </div>
                                                    </div>
                                                    <!-- Material tab card end -->
                                                </div>
                                            </div>
                                            <!-- About Row Start -->


                                        </div>
                                        <!-- --------------------------------- About Tab End-------------------------------------->
                                        <!-- --------------------------------- Membership Tab Start -------------------------------------->
                                        <div class="row content-row" id="membership-benefit" style="display: none;">
                                            <!-- Multiple Open Accordion start -->
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">
                                                            Membership Benifits
                                                        </h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <div
                                                            id="accordion"
                                                            role="tablist"
                                                            aria-multiselectable="true">
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingOne">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op1"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#earlycareer"
                                                                            aria-expanded="true"
                                                                            aria-controls="earlycareer">
                                                                            Early Career Doctor Membership
                                                                            <small>£10.00 GBP</small>
                                                                        </a>

                                                                    </h3>

                                                                </div>
                                                                <div
                                                                    id="earlycareer"
                                                                    class="panel-collapse collapse show"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingOne">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingTwo">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op2"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#trainee"
                                                                            aria-expanded="false"
                                                                            aria-controls="trainee">
                                                                            Trainee Membership
                                                                            <small>£30.00 GBP</small>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    id="trainee"
                                                                    class="panel-collapse collapse"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingTwo">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingThree">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op3"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#retired"
                                                                            aria-expanded="false"
                                                                            aria-controls="retired">
                                                                            Retired Membership
                                                                            <small>£30.00 GBP</small>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    id="retired"
                                                                    class="panel-collapse collapse"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingThree">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingFour">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op4"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#affiliate"
                                                                            aria-expanded="false"
                                                                            aria-controls="affiliate">
                                                                            Affiliate Membership
                                                                            <small>£30.00 GBP</small>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    id="affiliate"
                                                                    class="panel-collapse collapse"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingFour">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingFive">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op5"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#annual"
                                                                            aria-expanded="false"
                                                                            aria-controls="annual">
                                                                            Annual Membership
                                                                            <small>£55.00 GBP</small>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    id="annual"
                                                                    class="panel-collapse collapse"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingFive">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-panel">
                                                                <div
                                                                    class="accordion-heading"
                                                                    role="tab"
                                                                    id="headingSix">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a
                                                                            class="accordion-msg waves-effect waves-dark op6"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#5years"
                                                                            aria-expanded="false"
                                                                            aria-controls="5years">
                                                                            5-Year Membership
                                                                            <small>£250.00 GBP</small>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                                <div
                                                                    id="5years"
                                                                    class="panel-collapse collapse"
                                                                    role="tabpanel"
                                                                    aria-labelledby="headingSix">
                                                                    <div
                                                                        class="accordion-content accordion-desc">
                                                                        <p>
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting industry. Lorem
                                                                            Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown printer took a galley of type
                                                                            and scrambled it to make a type specimen
                                                                            book. It has survived not only five
                                                                            centuries, but also the leap into
                                                                            electronic typesetting, remaining
                                                                            essentially unchanged. It was
                                                                            popularised in the 1960s with the
                                                                            release of Letraset sheets containing
                                                                            Lorem Ipsum passages, and more recently
                                                                            with desktop publishing software like
                                                                            Aldus PageMaker including versions of
                                                                            Lorem Ipsum.
                                                                        </p>
                                                                        <button id="join-us-btn" class="join-us-btn btn waves-effect waves-light btn-primary btn-outline-primary mt-4">Join us<i class="icofont icofont-arrow-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Multiple Open Accordion ends -->
                                        </div>
                                        <!-- --------------------------------- Membership Tab End -------------------------------------->
                                        <!-- ---------------------------------Gallery Row Start--------------------------------- -->
                                        <div class="row content-row" id="gallery-bppa" style="display: none;">
                                            <div class="col-sm-12">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Photo Gallery</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row m-b-30">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <!-- gallery -->
                                                                <div class="gallery">
                                                                    <main id="image-gallery" class="gimages"></main>
                                                                    <footer id="gallery-pagination">
                                                                        <button id="btnPrevious">&larr; <span class="sr-only">Previous</span></button>
                                                                        <div class="text-center">
                                                                            <div id="gallery-dots"></div>
                                                                            <span id="page"></span>
                                                                        </div>
                                                                        <button id="btnNext"><span class="sr-only">Next </span>&rarr;</button>
                                                                    </footer>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                    <!-- Material tab card end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------Gallery Row end--------------------------------- -->
                                        <!-- ---------------------------------Contact us Start--------------------------------- -->
                                        <div class="row content-row " id="contact-bppa" style="display: none;">

                                            <div class="col-sm-12 ">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <!-- <img src="images/contact-texture.jpg" alt="" class="texture-image"> -->
                                                    <div class="card-header">
                                                        <h5>Contact us</h5>
                                                    </div>
                                                    <div class="card-block">

                                                        <!-- Row start -->

                                                        <div class="row justify-content-md-center mt-4">
                                                            
                                                            <div class="col-lg-12 col-xl-6">
                                                                <form class="md-float-material form-material">
                                                                    <div class="auth-box card">
                                                                        <div class="card-block pt-0">
                                                                            <div class="row m-b-20  card-header contact-header">
                                                                                <div class="col-md-12">
                                                                                    <h5 class="text-center">Have a Question? Ask Us!</h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="text" name="name" class="form-control">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Name</label>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="text" name="email" class="form-control">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Email Address</label>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="number" name="pnumber" class="form-control">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Phone Number</label>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <textarea type="number" name="message" class="form-control"></textarea>
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Your Message</label>
                                                                            </div>

                                                                            <div class="row m-t-30">
                                                                                <div class="col-md-12">
                                                                                    <button type="button" class="btn btn-007c17 btn-md btn-block waves-effect waves-light text-center m-b-20">Send</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-5 justify-content-center d-flex">
                                                                <img src="assets/images/contact-us.svg" width="80%" height="100%" alt="contact-us">
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------Contact us End--------------------------------- -->
                                        <!-- ---------------------------------Profile us Start--------------------------------- -->
                                        <div class="row content-row justify-content-center" id="profile-bppa" style="display: none;">
                                            <div class="col-sm-12 ">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Profile</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row row-reverse">
                                                            <div class="col-lg-12 col-xl-8 ">
                                                                <!-- <div class="sub-title">Default</div> -->
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#info" role="tab">Introduction</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#education" role="tab">Education</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#order" role="tab">Upgrade Membership</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" id="next" href="#payment-method" role="tab">Payment Methods</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="info" role="tabpanel">
                                                                        <form>
                                                                            <h6 class="heading-small text-muted mb-4">
                                                                                User information
                                                                            </h6>
                                                                            <div class="pl-lg-4">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-username">Professional Category</label>
                                                                                            <input
                                                                                                type="text"
                                                                                                id="input-username"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Username"
                                                                                                value="Psychiatrist" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-email">Email address</label>
                                                                                            <input
                                                                                                disabled
                                                                                                type="email"
                                                                                                id="input-email"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="jesse@example.com" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-first-name">First name</label>
                                                                                            <input
                                                                                                type="text"
                                                                                                id="input-first-name"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="First name"
                                                                                                value="Lucky" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-last-name">Last name</label>
                                                                                            <input
                                                                                                type="text"
                                                                                                id="input-last-name"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Last name"
                                                                                                value="Jesse" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="my-4" />
                                                                            <!-- Address -->
                                                                            <h6 class="heading-small text-muted mb-4">
                                                                                Contact information
                                                                            </h6>
                                                                            <div class="pl-lg-4">
                                                                                <div class="row">
                                                                                    <div class="col-xl-8">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-address">Address</label>
                                                                                            <input
                                                                                                id="input-address"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Home Address"
                                                                                                value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                                                                                type="text" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-address">Phone no</label>
                                                                                            <input
                                                                                                id="input-number"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Contact Number"
                                                                                                value="922347834234"
                                                                                                type="number"
                                                                                                disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-city">City</label>
                                                                                            <input
                                                                                                type="text"
                                                                                                id="input-city"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="City"
                                                                                                value="New York"
                                                                                                disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group focused">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-country">Country</label>
                                                                                            <input
                                                                                                type="text"
                                                                                                id="input-country"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Country"
                                                                                                value="United States"
                                                                                                disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-control-label"
                                                                                                for="input-country">Postal code</label>
                                                                                            <input
                                                                                                type="number"
                                                                                                id="input-postal-code"
                                                                                                class="form-control form-control-alternative"
                                                                                                placeholder="Postal code"
                                                                                                disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="my-4" />
                                                                            <!-- Description -->
                                                                            <h6 class="heading-small text-muted mb-4">
                                                                                About me
                                                                            </h6>
                                                                            <div class="pl-lg-4">
                                                                                <div class="form-group focused">
                                                                                    <label>About Me</label>
                                                                                    <textarea
                                                                                        rows="4"
                                                                                        class="form-control form-control-alternative"
                                                                                        placeholder="A few words about you ...">
A beautiful Dashboard. Write about yourself</textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="tab-pane" id="education" role="tabpanel">
                                                                        <?php include 'component/tbl-education.php'; ?>
                                                                    </div>
                                                                    <div class="tab-pane" id="certificate" role="tabpanel">
                                                                        <?php include 'component/tbl-education.php'; ?>
                                                                    </div>
                                                                    <div class="tab-pane" id="order" role="tabpanel">

                                                                        <div class="tab-with-img">
                                                                            <div class="sub-title">Current Plan</div>
                                                                            <div class="ag-courses_item">
                                                                                <a class="ag-courses-item_link bg-d1d1d1">
                                                                                    <div class="ag-courses-item_bg"></div>
                                                                                    <div class="ag-courses-item_title text-white">
                                                                                        Trainee
                                                                                    </div>
                                                                                    <div class="ag-courses-item_date-box text-white">
                                                                                        Price:
                                                                                        <span class="ag-courses-item_date">
                                                                                            £30.00 GBP

                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="sub-title">Upgrade Plan</div>
                                                                            <!-- Nav tabs -->
                                                                            <div class="slide-container swiper swiper3">
                                                                                <div class="slide-content3 ag-format-container">
                                                                                    <div class="swiper-wrapper">

                                                                                        <!-- card 1 -->
                                                                                        <div class="ag-courses_item swiper-slide">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>
                                                                                                <div class="ag-courses-item_title">
                                                                                                    Trainee
                                                                                                </div>
                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £30.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                        <!-- card 2 -->
                                                                                        <div class="swiper-slide ag-courses_item">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>
                                                                                                <div class="ag-courses-item_title">
                                                                                                    Early Career
                                                                                                </div>
                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £10.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                        <!-- card 3 -->
                                                                                        <div class="swiper-slide ag-courses_item">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>

                                                                                                <div class="ag-courses-item_title">
                                                                                                    Retired
                                                                                                </div>

                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £30.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                        <!-- card 4 -->
                                                                                        <div class="swiper-slide ag-courses_item">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>

                                                                                                <div class="ag-courses-item_title">
                                                                                                    Affiliate
                                                                                                </div>

                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £30.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                        <!-- card 5 -->
                                                                                        <div class="swiper-slide ag-courses_item">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>

                                                                                                <div class="ag-courses-item_title">
                                                                                                    Annual
                                                                                                </div>

                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £55.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>


                                                                                        <!-- card 6 -->
                                                                                        <div class="swiper-slide ag-courses_item">
                                                                                            <a class="ag-courses-item_link">
                                                                                                <div class="ag-courses-item_bg"></div>

                                                                                                <div class="ag-courses-item_title">
                                                                                                    5-Year
                                                                                                </div>

                                                                                                <div class="ag-courses-item_date-box">
                                                                                                    Price:
                                                                                                    <span class="ag-courses-item_date">
                                                                                                        £250.00 GBP
                                                                                                    </span>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper-button-next swiper-navBtn swiper3-next"></div>
                                                                                <div class="swiper-button-prev swiper-navBtn swiper3-prev"></div>
                                                                                <div class="swiper-pagination swiper-pagination3"></div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <button class="goToPay btn btn-primary waves-effect waves-light">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="payment-method" role="tabpanel">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="review-content-section">
                                                                                    <div class="row">
                                                                                        <!-- <div class="col-lg-3"></div> -->
                                                                                        <div class="col-lg-12">
                                                                                            <form class="form-material">
                                                                                                <div class="devit-card-custom">
                                                                                                    <!-- <div class="form-group">
                                                                                                    <input type="text" class="form-control form-control-alternative fill" placeholder="Type your Full Name">
                                                                                                    </div> -->

                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="footer-email" class="form-control" required="">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">Full Name</label>
                                                                                                    </div>
                                                                                                    <!-- <div class="form-group CVV">
                                                                                                    <input type="text" class="form-control form-control-alternative fill" id="cvv" placeholder="CVV">
                                                                                                    </div> -->
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="footer-email" class="form-control" required="">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">CVV</label>
                                                                                                    </div>
                                                                                                    <!-- <div class="form-group" id="card-number-field">
                                                                                                    <input type="text" name="name" class="form-control form-control-alternative fill" id="cardNumber" placeholder="Card Number">
                                                                                                    </div> -->
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="footer-email" class="form-control" required="">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">Card Number</label>
                                                                                                    </div>

                                                                                                    <select class="form-control mb-3">
                                                                                                        <option>Select Month</option>
                                                                                                        <option value="01">January</option>
                                                                                                        <option value="02">February </option>
                                                                                                        <option value="03">March</option>
                                                                                                        <option value="04">April</option>
                                                                                                        <option value="05">May</option>
                                                                                                        <option value="06">June</option>
                                                                                                        <option value="07">July</option>
                                                                                                        <option value="08">August</option>
                                                                                                        <option value="09">September</option>
                                                                                                        <option value="10">October</option>
                                                                                                        <option value="11">November</option>
                                                                                                        <option value="12">December</option>
                                                                                                    </select>
                                                                                                    <select class="form-control mb-3">
                                                                                                        <option>Select Year</option>
                                                                                                        <option value="16"> 2017</option>
                                                                                                        <option value="16"> 2018</option>
                                                                                                        <option value="16"> 2019</option>
                                                                                                        <option value="17"> 2020</option>
                                                                                                        <option value="18"> 2021</option>
                                                                                                        <option value="19"> 2022</option>
                                                                                                        <option value="20"> 2023</option>
                                                                                                        <option value="21"> 2024</option>
                                                                                                    </select>
                                                                                                    <div class="payment-method-ht mb-3 text-center">
                                                                                                        <span><i class="fa fa-cc-paypal" aria-hidden="true"></i></span>
                                                                                                        <span><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                                                                                        <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                                                                        <span><i class="fa fa-cc-mastercard" aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                    <!-- <a href="#!" class="btn bg-btn-cl waves-effect waves-light">Submit</a> -->
                                                                                                    <div class="btn btn-inverse gmail-btn waves-effect waves-light btn-block">
                                                                                                        Pay
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <!-- <div class="col-lg-3"></div> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-xl-4">
                                                                <div class="card card-profile shadow">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-lg-3 order-lg-2">
                                                                            <div class="card-profile-image">
                                                                                <a href="#">
                                                                                    <img src="images/people/dp2.png" class="rounded-circle">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                                                        <div class="d-flex justify-content-between">
                                                                            <!-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a> -->
                                                                            <!-- <a href="#" class="btn btn-sm btn-default float-right">Message</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body pt-0 pt-md-4">
                                                                        <!-- <div class="row">
                                                                            <div class="col">
                                                                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                                                                    <div>
                                                                                        <span class="heading">22</span>
                                                                                        <span class="description">Friends</span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="heading">10</span>
                                                                                        <span class="description">Photos</span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="heading">89</span>
                                                                                        <span class="description">Comments</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                        <div class="text-center mt-5">
                                                                            <h3>
                                                                                Ayesha Webnet<span class="font-weight-light">, 35</span>
                                                                            </h3>
                                                                            <div class="h5 font-weight-300">
                                                                                <i class="ni location_pin mr-2"></i>Karachi, Pakistan
                                                                            </div>
                                                                            <div class="h5 mt-4">
                                                                                <i class="ni business_briefcase-24 mr-2"></i>Psychiatrist -
                                                                                Health Care
                                                                            </div>
                                                                            <div>
                                                                                <i class="ni education_hat mr-2"></i>University of Computer
                                                                                Science
                                                                            </div>
                                                                            <hr class="my-4">
                                                                            <p>
                                                                                Dedicated to advancing mental health and well-being, you
                                                                                bring your expertise to the forefront of healthcare. Your
                                                                                commitment to helping others and improving mental health
                                                                                care is at the core of your professional journey
                                                                            </p>
                                                                            <!-- <a href="#">Show more</a> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                    <!-- Material tab card end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------Profile us End--------------------------------- -->
                                        <!-- Page-body end -->
                                    </div>
                                </div>
                                <!-- Main-body start -->
                                <div id="styleSelector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- --------------------------------- Page Body Tab End -------------------------------------->
        <!-- Required Jquery -->
        <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
        <!-- waves js -->
        <script src="assets/pages/waves/js/waves.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Accordion js -->
        <script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Custom js -->
        <script src="assets/js/pcoded.min.js"></script>
        <script src="assets/js/vertical/vertical-layout.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>


</body>

</html>