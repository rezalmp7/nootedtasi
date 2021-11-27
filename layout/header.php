<?php
session_start();
include("function/connection.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/assets/css/meanmenu.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/assets/css/navigation.css">

    <link rel="stylesheet" href="assets/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/assets/css/modal-video.min.css">

    <link rel="stylesheet" href="assets/assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="assets/assets/css/responsive.css">
    <title>Ecop - Multipurpose eCommerce HTML Template</title>
    <link rel="icon" type="image/png" href="assets/assets/images/favicon.png">


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/assets/js/jquery.min.js"></script>
    <script src="assets/assets/js/popper.min.js"></script>
    <script src="assets/assets/js/bootstrap.min.js"></script>

    <script src="assets/assets/js/form-validator.min.js"></script>

    <script src="assets/assets/js/contact-form-script.js"></script>

    <script src="assets/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/assets/js/jquery.meanmenu.js"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="assets/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/assets/js/jquery.themepunch.revolution.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="assets/assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/assets/js/jquery.mixitup.min.js"></script>

    <script src="assets/assets/js/owl.carousel.min.js"></script>

    <script src="assets/assets/js/jquery-modal-video.min.js"></script>

    <script src="assets/assets/js/thumb-slide.js"></script>

    <script src="assets/assets/js/custom.js"></script>
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-load">
                    <div class="inner one"></div>
                    <div class="inner two"></div>
                    <div class="inner three"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="nav-top-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="left">
                        <a href="index.html">
                            <img src="assets/assets/images/logo.png" style="height: 70px;" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- <div class="middle">
                        <form>
                            <div class="form-group">
                                <div class="inner">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Chair</option>
                                        <option>Table</option>
                                        <option>Bed</option>
                                        <option>Sofa</option>
                                        <option>Headphones</option>
                                        <option>Keyboard</option>
                                        <option>MacBook</option>
                                        <option>Vegetable</option>
                                        <option>Fruits</option>
                                        <option>Chicken</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Search Your Keywords">
                                <button type="submit" class="btn">
                                    <i class='bx bx-search'></i>
                                </button>
                            </div>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-5">
                    <div class="right">
                        <ul>
                            <!-- <li>
                                <div class="inner">
                                    <i class="flaticon-pin"></i>
                                    <a href="index.html#">Set Location</a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <i class="flaticon-question"></i>
                                    <a href="index.html#">Need Help?</a>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn wishlist cart-popup-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                    <i class='bx bxs-cart'></i>
                                    <span>2</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalWishlist" data-bs-whatever="@mdo">
                                    <i class='bx bx-heart'></i>
                                    <span>2</span>
                                </button>
                            </li> -->
                            <li>
                                <?php
                                if(isset($_SESSION['nama']))
                                {
                                ?>
                                <span class="pe-3">
                                    <i class="flaticon-round-account-button-with-user-inside"></i>
                                    <?php echo $_SESSION['nama']; ?>
                                </span>
                                <a class="join" href="function/logout.php">
                                    Logout
                                </a>
                                <?php
                                }
                                else
                                {
                                ?>
                                <a class="join" href="login.php">
                                    <i class="flaticon-round-account-button-with-user-inside"></i>
                                    Login
                                </a>
                                <?php
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/assets/images/logo.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link <?php if(isset($page) && $page == 'home') echo 'active'; ?>">Home</a>
                            </li>
                            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'login')
                            {
                            ?>
                            <li class="nav-item">
                                <a href="form_roda_2.php" class="nav-link <?php if(isset($page) && $page == 'form_roda_2') echo 'active'; ?>">Form Kendaraan Roda 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="form_roda_4.php" class="nav-link <?php if(isset($page) && $page == 'form_roda_4') echo 'active'; ?>">Form Kendaraan Roda 4</a>
                            </li>
                            <li class="nav-item">
                                <a href="kendaraan.php" class="nav-link <?php if(isset($page) && $page == 'kendaraan') echo 'active'; ?>">Data Kendaraan</a>
                            </li>
                            <li class="nav-item">
                                <a href="report.php" class="nav-link <?php if(isset($page) && $page == 'report') echo 'active'; ?>">Laporan</a>
                            </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item">
                                <a href="profil.php" class="nav-link <?php if(isset($page) && $page == 'profil') echo 'active'; ?>">Profile</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

