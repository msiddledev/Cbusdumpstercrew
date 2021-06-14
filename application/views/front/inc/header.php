<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="<?= base_url("assets/front/images/favicon.ico") ?>" type="image/gif" sizes="16x16">
        <!-- Loading fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
        <!-- Font awesome -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/fontawesome-free-5.13.0-web/css/all.css") ?>" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/bootstrap-4.3.1/css/bootstrap.min.css") ?>" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css") ?>" />
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css") ?>" />
        <!-- Toaster -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/toastr/toastr.min.css") ?>" />
        <!-- Select 2 -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/select2/css/select2.min.css") ?>" />
        <!-- Bar Rating -->
    <link rel="stylesheet" href="<?= base_url("assets/front/vendor/bar-ratings/themes/css-stars.css") ?>" />
    <!-- Code Mirror -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/codemirror-5.55.0/lib/codemirror.css") ?>" />
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/codemirror-5.55.0/theme/material.css") ?>" />
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/show-hint.css") ?>" />
        <!-- Summer Note -->
        <link rel="stylesheet" href="<?= base_url("assets/front/vendor/summernote/summernote-bs4.css") ?>" />
        <!-- Chart JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
        <!-- Animate -->
    <link rel="stylesheet" href="<?= base_url("assets/front/vendor/wow/animate.min.css") ?>" />
    <!-- App Styles -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url("assets/front/css/style.css") ?>" />
    </head>
    <body class="body">
        <header>
    <!-- Container -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row pt-3 pb-3 pl-2 pr-2 align-items-center">
            <!-- Col -->
            <div class="col-12 col-md-8 pl-4">
                <!-- Site Logo -->
                <a href="<?= base_url() ?>" class="logo">
                    <img src="<?php echo base_url('uploads/settings/').$this->settings->header_logo_image; ?>" alt="Yalla" />
                </a>
                <!-- ./Site Logo -->
                <!-- Navigation -->
                <nav class="site-navigation">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>">Home</a>
                        </li>
                        <li>
                            <a href="#">Work</a>
                        </li>
                        <li>
                            <a href="<?= base_url("occasions") ?>">Occasions</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <!-- ./Navigation -->
            </div>
            <!-- ./Col -->
            <!-- Col -->
            <div class="col-12 col-md-4 text-right pr-4">
                <?php if(!empty($this->session->userdata('customer_id'))) { ?>
                    <?php if(!empty($this->session->userdata('customer_id'))) { ?>
                        <a href="#" id="user-links-dropdown-btn">
                            <img class="user-avatar-img" src="<?php echo base_url('uploads/settings/').$this->settings->header_logo_image; ?>" alt="Faraz Ali" />
                            <span style="color: #555">
                                <?php echo "DEVELOPER";  ?>
                                <span><i class="fas fa-angle-down"></i></span>
                            </span>
                        </a>
                        <div class="user-links-dropdown text-left shadow-lg" style="display: none">
                            <ul>
                                <li>
                                    <a href="<?= base_url("customer-dashboard") ?>">
                                        Dashboard
                                        <span>
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/occasion-card") ?>">
                                        Occasion Card
                                        <span>
                                        <i class="far fa-circle"></i>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/wish-list") ?>">
                                        Wish list
                                        <span>
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/update/profile") ?>">
                                        User Information
                                        <span>
                                        <i class="fas fa-user"></i>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("customer-logout") ?>">
                                        Logout
                                        <span>
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <!-- Login -->
                    <a href="<?= base_url("login-signup") ?>" class="btn v2">
                        Login/Register
                    </a>
                    <!-- ./Login -->
                <?php } ?>
            </div>
            <!-- ./Col -->
        </div>
        <!-- ./Row -->
    </div>
    <!-- Container -->
</header>



    








   