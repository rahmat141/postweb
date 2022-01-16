<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

    <!-- title of site -->
    <title><?= $title ?></title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?= base_url() ?>assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />

    <!--linear icon css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css" />

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css" />

    <!--bootstrap.min.css-->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap4.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">
        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <!-- <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000"> -->
                <nav class="navbar fixed-top navbar-light bg-light">
                    <div class="container">
                        <a class="h5" href="<?= base_url('dashboard'); ?>">postweb.com</a>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0">
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?= base_url('dashboard'); ?>">Home</a>
                                        </li>
                                        <li class="nav-item m-2">
                                            <a class="nav-link" href="<?= base_url('materi'); ?>">Materi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </nav>

                <!-- Start Header Navigation -->
                <!-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">postweb.com</a>
                        </div> -->
                <!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center">
                                <li>
                                    <a href="<?= base_url('dashboard'); ?>">home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('materi'); ?>">Materi</a>
                                </li>
                            </ul>
                            /.nav
                        </div> -->
                <!-- /.navbar-collapse -->

                <!--/.container-->
                <!-- </nav> -->
                <!--/nav-->
                <!-- End Navigation -->
            </div>
            <!--/.header-area-->
            <div class="clearfix"></div>
        </div>
        <!-- /.top-area-->
        <!-- top-area End -->