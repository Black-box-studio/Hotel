<?php  
session_start();
include("checksession.php");
include('dbconnection.php');
	
	$sql0="SELECT * FROM logo";
	$sql="SELECT * FROM main_content";
	$sql1="SELECT * FROM main_content_1";
	$sql2="SELECT * FROM home_body";
	$sql123="SELECT * FROM client_comments_1";
	$sql124="SELECT * FROM client_comments_2";
	$sql125="SELECT * FROM client_comments_3";
	
	$sql00=mysqli_query($conn,$sql0);	
	$sqll=mysqli_query($conn,$sql);
	$sql1=mysqli_query($conn,$sql1);
	$sql12=mysqli_query($conn,$sql2);
	$sql1123=mysqli_query($conn,$sql123);
	$sql1124=mysqli_query($conn,$sql124);
	$sql1125=mysqli_query($conn,$sql125);

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    
<!-- Mirrored from themesbrand.com/hybrix/html/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 15:38:16 GMT -->
<head>

        <meta charset="utf-8" />
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <div class="top-tagbar">
    <div class="w-100">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-9">
                <div class="text-white-50 fs-13">
                    <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                </div>
            </div>
            <div class="col-md-auto col-6 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-center gap-3 fs-13 text-white-50">
                    <div>
                        <i class="bi bi-envelope align-middle me-2"></i>
                    </div>
                    <div>
                        <i class="bi bi-globe align-middle me-2"></i> 
                    </div>
                </div>
            </div>
            <div class="col-md-auto col-3">
                <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                    <button type="button" class="btn btn-icon btn-topbar rounded-circle text-white-50 fs-13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="16" class="rounded-circle me-2"> <span id="lang-name">English</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                            <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                            <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">Española</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                            <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded-circle" height="18"> <span class="align-middle">Deutsche</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                            <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">Italiana</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                            <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">русский</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                            <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">中国人</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                            <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">français</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                            <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">عربى</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                               
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <button type="button" class="btn btn-sm px-3 fs-15 text-reset header-item d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <span class="bi bi-search me-2"></span> Search for anything...
                            </button>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="bi bi-search fs-16"></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-grid fs-18'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-15"> Browse by Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bag fs-18'></i>
                                    <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge text-warning bg-warning-subtle fs-13"><span class="cartitem-badge">7</span>
                                                    items</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 300px;">
                                        <div class="p-2">
                                            <div class="text-center empty-cart" id="empty-cart">
                                                <div class="avatar-md mx-auto my-3">
                                                    <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                                        <i class='bx bx-cart'></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                                <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                            </div>
                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="#!" class="text-reset">Branded
                                                                T-Shirts</a>
                                                        </h6>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            Quantity: <span>10 x $32</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="#!" class="text-reset">Bentwood Chair</a>
                                                        </h6>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            Quantity: <span>5 x $18</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="#!" class="text-reset">
                                                                Borosil Paper Cup</a>
                                                        </h6>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            Quantity: <span>3 x $250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="#!" class="text-reset">Gray
                                                                Styled T-Shirt</a>
                                                        </h6>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            Quantity: <span>1 x $1250</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="#!" class="text-reset">Stillbird Helmet</a>
                                                        </h6>
                                                        <p class="mb-0 fs-13 text-muted">
                                                            Quantity: <span>2 x $495</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                            <h5 class="m-0 text-muted">Total:</h5>
                                            <div class="px-2">
                                                <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                            </div>
                                        </div>

                                        <a href="logout.php" class="btn btn-success text-center w-100">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-16'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-20"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bell fs-18'></i>
                                    <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head rounded-top">
                                        <div class="p-3 border-bottom border-bottom-dashed">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0 fs-16 fw-semibold"> Notifications <span class="badge text-danger  bg-danger-subtle fs-13 notification-badge"> 4</span></h6>
                                                    <p class="fs-14 text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                                </div>
                                                <div class="col-auto dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-14"><i class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">New</h6>
                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                Optimization <span class="text-secondary">reward</span> is ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                            <label class="form-check-label" for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                            <label class="form-check-label" for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-14 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                            <label class="form-check-label" for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">Read Before</h6>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">

                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                            <label class="form-check-label" for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions" id="notification-actions">
                                            <div class="d-flex text-muted justify-content-center align-items-center">
                                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">vengadesh</span>
                                            <span class="d-none d-xl-block ms-1 fs-13 text-reset user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome vengadesh!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                
                                    <div class="dropdown-divider"></div>
                                   
                                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content rounded">
                        <div class="modal-header p-3">
                            <div class="position-relative w-100">
                                <input type="text" class="form-control form-control-lg border-2" placeholder="Search for hybrix..." autocomplete="off" id="search-options" value="">
                                <span class="bi bi-search search-widget-icon fs-17"></span>
                                <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Clear</a>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                            <div class="dropdown-head rounded-top">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                                </div>
                            </div>

                            <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                                <div class="list-group list-group-flush">
                                    <div class="notification-group-list">
                                        <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>hybrix.psd</span></a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>hybrix.zip</span></a>
                                    </div>
                        
                                    <div class="notification-group-list">
                                        <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                                    </div>

                                    <div class="notification-group-list">
                                        <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                                <div>
                                                    <h6 class="mb-0">Ayaan Bowen</h6>
                                                    <span class="fs-13 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                                <div>
                                                    <h6 class="mb-0">Alexander Kristi</h6>
                                                    <span class="fs-13 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                                <div>
                                                    <h6 class="mb-0">Alan Carla</h6>
                                                    <span class="fs-13 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-4"></i>
                                </div>
                                <div class="mt-4 fs-15">
                                    <h4 class="mb-1">Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                  
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
            
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a href="dashborad1.php" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span> </a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link menu-link" href="home1.php">
                                   <span> HOME</span>
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="about1.php">
                                  </i> <span>ABOUT</span>
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link menu-link" href="service1.php">
                                  </i> <span>SERVICE</span>
                                </a>
                            </li> 
							<li class="nav-item">
                                <a class="nav-link menu-link" href="rooms1.php">
                                  </i> <span>ROOMS</span>
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link menu-link" href="reservation1.php">
                                  </i> <span>RESERVATION</span>
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link menu-link" href="contact1.php">
                                  </i> <span>CONTACTS</span>
                                </a>
                            </li>
                                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
        <form method='post' action="insert1.php" id="form2">
            <div class="main-content">
                
                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col">

                                <div class="h-100">
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-6">
                                                    <!-- card -->
													<?php while($row = mysqli_fetch_array($sql00)) { ?>
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
                                                                    <p>logo</p>
                                                                    <input type='text' name="logo" value="<?php echo $row['logo']; ?>">
																	 <p>email</p>
                                                                    <input type='text' name="email" value="<?php echo $row['email']; ?>">
																	<p>number</p>
                                                                    <input type='text' name="number" value="<?php echo $row['number']; ?>">
																	<input type="submit" class="btn btn-primary" id="1" name="submit1">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
													 <?php } ?>
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div>
    </form></div> 
	<form method="post" action="insert1.php" id="form1" enctype="multipart/form-data">											
											 <div class="col-xl-12 col-md-6">
                                                    <!-- card -->
												<?php while($row = mysqli_fetch_array($sqll)) { ?>
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
                                                                    <p><h3>main content 1</h3></p>
                                                                    <p>content1</p><input type="text" name="content1" value="<?php echo $row['content1']; ?>">
                                                                    <p>content2</p><input type="text" name="content2" value="<?php echo $row['content2']; ?>">
                                                                     <p>mainiamge</p><input type='file' name="picture" value="<?php echo $row['picture']; ?>">
																	 <br>
																	 <br>
																	 <div>
																	 <table border="1" height="200px" width="300px">
																	 <tr><td><img src="./image/<?php echo $row['picture']; ?>" height="200px" width="300" alt="Image"></td></tr>
																	 </table>
																	 </div>
																	 <br>
																	 <br>
                                                                     <input type="submit" class="btn btn-primary" id="2" name="submit2">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
													 <?php } ?>
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
    </form>
	<form method="post" action="insert1.php" id="form3" enctype="multipart/form-data">											
											 <div class="col-xl-12 col-md-6">
                                                    <!-- card -->
													<?php while($row = mysqli_fetch_array($sql1)) { ?>
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
                                                                    <p><h3>main content 2</h3></p>
                                                                    <p>content3</p><input type="text" name="content3" value="<?php echo $row['content3']; ?>" >
                                                                    <p>content4</p><input type="text" name="content4" value="<?php echo $row['content4']; ?>">
                                                                     <p>mainiamge</p><input type='file' name="picture1" value="<?php echo $row['picture1']; ?>">
																	  <br>
																	 <br>
																	 <div>
																	 <table border="1" height="200px" width="300px">
																	 <tr><td> <img src="./img/<?php echo $row['picture1']; ?>" height="200px" width="300px" alt="Image"></td></tr>
																	 </table>
																	 </div>
																	 <br>
																	 <br>
                                                                     <input type="submit" class="btn btn-primary" id="3" name="submit3" >
                                                                </div>
                                                                
                                                            </div>
														 <?php } ?>	
                                                        </div>
													
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
    </form>
	<form method="post" id="form4" action="insert1.php">																							
												<div class="col-xl-12 col-md-6">
                                                    <!-- card -->
												<?php while($row = mysqli_fetch_array($sql12)) { ?>
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
																	<h2>home Body</h2>
                                                                    <p>line1</p>
                                                                    <textarea name="line1" ><?php echo $row['line1']; ?>
																	</textarea>
																	<br>
																	<p>line2</p>
                                                                    <textarea name="line2" rows="4"  cols="50" ><?php echo $row['line2']; ?>
																	</textarea>
																	<br>
																	<p>line3</p>
                                                                    <textarea name="line3" rows="4"  cols="50" ><?php echo $row['line3']; ?>
																	</textarea>
																	<br>
                                                                    <input type="submit" class="btn btn-primary" id="4" name="submit4">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
												 <?php } ?>		
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
	</form>											
	<form method="post" id="form5" action="insert1.php">																							
												<div class="col-xl-12 col-md-6">
                                                    <!-- card -->
												<?php while($row = mysqli_fetch_array($sql1123)) { ?>	
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
																	<h2>clinet comments  (female)</h2>
																	<br>
																	<br>
																	<p>comments</p>
                                                                    <textarea name="line4" rows="4"  cols="50" ><?php echo $row['line4']; ?>
																	</textarea>
																	<br>
                                                                    <p>client name</p>
                                                                    <textarea name="line5"><?php echo $row['line5']; ?>
																	</textarea>
																	<br>
																	<p>professional</p>
                                                                    <textarea name="line6"><?php echo $row['line6']; ?>
																	</textarea>
																	<br>
                                                                    <input type="submit" class="btn btn-primary" id="5" name="submit5">
                                                                </div>
                                                         <?php } ?>       
                                                            </div>
                                                        </div>
													
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
	</form>											
	<form method="post" id="form6" action="insert1.php">																							
												<div class="col-xl-12 col-md-6">
                                                    <!-- card -->
													<?php while($row = mysqli_fetch_array($sql1124)) { ?>	
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
																	<h2>clinet comments 1 (male)</h2>
																	<p>comments</p>
                                                                    <textarea name="line7" rows="4"  cols="50"><?php echo $row['line7']; ?>
																	</textarea>
																	<br>
                                                                    <p>client name</p>
                                                                    <textarea name="line8"><?php echo $row['line8']; ?>
																	</textarea>
																	<br>
																	<p>professional</p>
                                                                    <textarea name="line9"><?php echo $row['line9']; ?>
																	</textarea>
																	<br>
                                                                    <input type="submit" class="btn btn-primary" id="6" name="submit6">
                                                                </div>
                                                          <?php } ?>          
                                                            </div>
                                                        </div>
													
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
	</form>																						
      <form method="post" id="form7" action="insert1.php">																							
												<div class="col-xl-12 col-md-6">
                                                    <!-- card -->
												<?php while($row = mysqli_fetch_array($sql1125)) { ?>		
                                                    <div class="card-animate">
                                                        <div class="div card-animate">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="flex-grow-1">
																	<h2>clinet comments 2 (male)</h2>
																	<p>comments</p>
                                                                    <textarea name="line10" rows="4"  cols="50"><?php echo $row['line10']; ?>
																	</textarea>
																	<br>
                                                                    <p>client name</p>
                                                                    <textarea name="line11"><?php echo $row['line11']; ?>
																	</textarea>
																	<br>
																	<p>professional</p>
                                                                    <textarea name="line12"><?php echo $row['line12']; ?>
																	</textarea>
																	<br>
                                                                    <input type="submit" class="btn btn-primary" id="7" name="submit7">
                                                                </div>
                                                               <?php } ?>       
                                                            </div>
                                                        </div>
													
                                                        <div class="animation-effect-6 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="animation-effect-4 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-pound"></i>
                                                        </div>
                                                        <div class="animation-effect-3 text-success opacity-25 fs-18">
                                                            <i class="bi bi-currency-euro"></i>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>                                                                                                                                                                                                                                   

</form>
                                 

                                </div> <!-- end .h-100-->

                            </div> <!-- end col -->
		</div>
                            <div class="col-auto layout-rightside-col">
                                <div class="overlay"></div>
                                <div class="layout-rightside">
                                    <div class="card h-100 rounded-0">
                                        <div class="widget-userlist" data-simplebar>
                                            <div class="card-body pb-0">
                                                <p class="text-muted text-uppercase fw-medium fs-13">Recent Chat</p>
                                                <ul class="hstack gap-2 chat-panel-list list-unstyled">
                                                    <li>
                                                        <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                            <div class="chat-user-img online">
                                                                <img src="assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Ashley Silva</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                            <div class="chat-user-img online">
                                                                <img src="assets/images/users/avatar-2.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Misty Taylor</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                            <div class="chat-user-img away">
                                                                <img src="assets/images/users/avatar-3.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Scott Wilson</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                            <div class="chat-user-img online">
                                                                <img src="assets/images/users/avatar-4.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Patricia Wilson</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                            <div class="chat-user-img away">
                                                                <img src="assets/images/users/avatar-5.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Allyson Wigfall</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="search-box flex-grow-1">
                                                        <input type="text" class="form-control" id="searchResultList" autocomplete="off" placeholder="Search for ...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="chat-panel-list list-group list-group-flush mb-0 border-dashed">
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Ashley Silva</h6></a>
                                                                <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Good Morning</p>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-1 text-muted fs-12">04:32 PM</p>
                                                                <span class="badge text-info bg-info-subtle rounded-circle fs-10">4</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Misty Taylor</h6></a>
                                                                <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Okay, Byy</p>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-1 text-muted fs-12">02:49 PM</p>
                                                                <span class="badge text-info bg-info-subtle rounded-circle fs-10">1</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Scott Wilson</h6></a>
                                                                <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Yeah everything is fine...</p>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-1 text-muted fs-12">12:04 PM</p>
                                                                <span class="badge text-info bg-info-subtle rounded-circle fs-10">8</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Patricia Wilson</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey! there I'm available</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">11:11 AM</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Allyson Wigfall</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">I've finished it! See you so</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">09:24 AM</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Martha Griffin</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Wow that's great</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">16/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Mark Sargent</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Nice to meet you</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">16/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Ray Stricklin</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey, Hi Ray Stricklin ...!</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">16/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Frank Taylor</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Happy holiday 🙂</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">15/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Karla Basso</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Okay, Sure.</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">14/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Sally McPherson</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Thanks</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">14/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Lizzie Beil</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Our next meeting tomorrow at 10.00 AM</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">13/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Mark Williams</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">See you tomorrow</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">12/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Vina Scott</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Yeah everything is fine...</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">11/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Keli Henry</h6></a>
                                                                <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Good afternoon</p>
                                                            </div>
                                                            <div class="text-end align-self-start">
                                                                <p class="mb-1 text-muted fs-12">11/11</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget-user-chatlist">
                                            <div class="chat-topbar p-4 border-bottom border-bottom-dashed">
                                                <div class="align-items-center d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xs">                        
                                                                        <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-fluid userprofile" alt="">
                                                                        <span class="user-status"></span>                        
                                                                    </div>                    
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="fs-14 mb-0 profile-username">Ashley Silva</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="d-flex align-items-start gap-2">
                                                            <div class="dropdown">
                                                                <a class="btn btn-ghost-secondary btn-sm fs-16" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#"><i class="bi bi-archive text-muted me-2"></i> Archive</a>
                                                                    <a class="dropdown-item" href="#"><i class="bi bi-mic-mute text-muted me-2"></i> Muted</a>
                                                                    <a class="dropdown-item" href="#"><i class="bi bi-trash3 text-muted me-2"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn btn-soft-danger btn-sm fs-16" id="close-chatlist"><i class="ri-close-fill"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end chat-topbar -->
                                            <div class="card-body p-0">
                                                <div>
                                                    <div id="users-chat">
                                                        <div class="chat-conversation p-3" id="chat-conversation" data-simplebar>
                                                            <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                                                <li class="chat-list left">
                                                                    <div class="conversation-list">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="user-chat-content">
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">Good morning 😊</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- chat-list -->
                
                                                                <li class="chat-list right">
                                                                    <div class="conversation-list">
                                                                        <div class="user-chat-content">
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">Good morning, How are you? what else? can help for you? don't hesitate?</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- chat-list -->
                
                                                                <li class="chat-list left">
                                                                    <div class="conversation-list">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="user-chat-content">
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">any luxirious available for coming chritmas i am viste the chennai me and my families</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">your hotel facilities so impressed.</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">if any quiz and doubts call this number anytime available here for or service  🎁.</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- chat-list -->
                
                                                                <li class="chat-list right">
                                                                    <div class="conversation-list">
                                                                        <div class="user-chat-content">
                                                                            <div class="ctext-wrap">
                                                                                <div class="ctext-wrap-content">
                                                                                    <p class="mb-0 ctext-content">Wow that's great</p>
                                                                                </div>
                                                                                <div class="dropdown align-self-start message-box-drop">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                        <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- chat-list -->

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative p-4 border-top border-top-dashed">
                                                <form class="chat-form" autocomplete="off">
                                                    <div class="row g-2">
                                                        <div class="col">
                                                            <div class="position-relative">
                                                                <input type="text" id="chat-input" class="form-control border-light bg-light" placeholder="Enter Message...">
                                                                <div class="chat-input-feedback">
                                                                    Please enter a message
                                                                </div>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i></button>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end .rightbar-->
                            </div> <!-- end col -->
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <div>
                    <button type="button" class="btn-success btn-rounded shadow-lg btn btn-icon layout-rightside-btn fs-22"><i class="ri-chat-smile-2-line"></i></button>
                </div>

               
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="customizer-setting d-none d-md-block">
            <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
            </div>
        </div>

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-4">
                        <h6 class="fw-semibold fs-15">Layout</h6>
                        <p class="text-muted fs-13">Choose your layout</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column gap-1">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Two Column</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="mt-4 fw-semibold">Color Scheme</h6>
                        <p class="text-muted fs-13">Choose Light or Dark Scheme.</p>

                        <div class="colorscheme-cardradio">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Light</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check card-radio dark">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 rounded bg-dark-subtle mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-dark-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-dark-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-dark-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="d-block  bg-dark-subtle p-1"></span>
                                                        <span class="d-block  bg-dark-subtle p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h6 class="mt-4 fw-semibold fs-15">Layout Width</h6>
                            <p class="text-muted fs-13">Choose Fluid or Boxed layout.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Fluid</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                            <span class="d-flex gap-1 h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h6 class="mt-4 fw-semibold fs-15">Layout Position</h6>
                            <p class="text-muted fs-13">Choose Fixed or Scrollable Layout Position.</p>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                        <h6 class="mt-4 fw-semibold fs-13">Topbar Color</h6>
                        <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h6 class="mt-4 fw-semibold fs-15">Sidebar Size</h6>
                            <p class="text-muted fs-13">Choose a size of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-view">
                            <h6 class="mt-4 fw-semibold fs-15">Sidebar View</h6>
                            <p class="text-muted fs-13">Choose Default or Detached Sidebar view.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Default</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-color">
                            <h6 class="mt-4 fw-semibold fs-15">Sidebar Color</h6>
                            <p class="text-muted fs-13">Choose a color of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                    <h5 class="fs-13 text-center mt-2">Gradient</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="collapse" id="collapseBgGradient">
                                <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-img">
                            <h6 class="mt-4 fw-semibold fs-15">Sidebar Images</h6>
                            <p class="text-muted fs-13">Choose a image of Sidebar.</p>

                            <div class="d-flex gap-2 flex-wrap img-switch">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                        <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                            <i class="ri-close-fill fs-20"></i>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                        <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                        <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                        <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                        <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="preloader-menu">
                            <h6 class="mt-4 fw-semibold fs-15">Preloader</h6>
                            <p class="text-muted fs-13">Choose a preloader.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <!-- <div id="preloader"> -->
                                            <div id="status" class="d-flex align-items-center justify-content-center">
                                                <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Enable</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-13 text-center mt-2">Disable</h5>
                                </div>
                            </div>

                        </div><!-- end preloader-menu -->
                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>


<!-- Mirrored from themesbrand.com/hybrix/html/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 15:38:43 GMT -->
</html>
<style>
	body {
	background-image: url('./wallpaper/18.jpg');
	 background-repeat: no-repeat;
	  background-attachment: fixed;
	background-size: cover;
	}
.div{
	background-color:rgba(57, 57, 57,0.6);
  bottom: 0;
  width: 100%;
  padding: 1rem;
    left: 0;
  bottom: 100%;
  height:770px;
  width: 100%;
  color:#D1F2EB;
	border:2px solid #7B7D7D;
}
h2,h3
{
	 color:#DFFF00;	
}

</style>