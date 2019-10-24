<!DOCTYPE html>
<html >

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Padhai is a creative education html template">

    <title>Padhai - Education HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("public/front/")?>images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("public/front/")?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="<?php echo base_url("public/front/")?>css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="<?php echo base_url("public/front/")?>css/style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="<?php echo base_url("public/front/")?>css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link href="<?php echo base_url("public/front/")?>css/font-awesome.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="page">


<!--PRELOADER-->
<div id="preloader">
    <div id="status"></div>
</div>

<!--*Header*-->
<header id="inner-navigation">

    <!-- top bar -->
    <div class="topbar-section">
        <div class="container">
            <div class="topbar-inner">
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                    </ul>
                </div>

                <div class="top-bar-right pull-right">
                        <ul>
                            <li><i class="fa fa-envelope"></i> Email: info@sitename.com</li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- navbar start -->
    <?php $this->load->view("front/includes/navbar")?>
    <!-- navbar end -->
</header>
<!--* End Header*-->