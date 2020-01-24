<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Civilisation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is the official website of Civilisation CEG, a nation level intercollege technical symposium conducted by the Society of Civil Engineers in association with the department of Civil Engineering, College of Engineering Guindy.">
    <meta name="author" content="Ben Stewart S">
    <meta name="keywords" content="civilisation,ceg,symposium,2020,civil,ben stewart,chennai,guindy,college">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!--Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/custom.js"></script>
</head>
<body class="contact-page">
<header class="site-header">
<div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="index.php"><img src="images/weblogo.png" alt="CIVIL"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-8 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li class="d-lg-none"><a href="admin-login.php">ADMIN LOGIN</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-2 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        
                        <a class="btn gradient-bg" href="admin-login.php">ADMIN LOGIN</a>

                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Admin</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->



<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact-form">

            <div class="row">

                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-registrations.php" method="post">
                    
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print1 ='<input type="submit" name="sample" value="Registrations" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print1;
                        ?>
                    
                
                </form>
                </div>


                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-workshop1.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print8 ='<input type="submit" name="sample" value="BIM" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print8;
                        ?>
                    
                
                </form>
                </div>
                    
                </div>

                <div class="row">

                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-workshop2.php" method="post">
                    
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print1 ='<input type="submit" name="sample" value="Concrete Bridges" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print1;
                        ?>
                    
                
                </form>
                </div>


                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-workshop3.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print8 ='<input type="submit" name="sample" value="Steel Structures" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print8;
                        ?>
                    
                
                </form>
                </div>
                    
                </div>
                <div class="row">


                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-event.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print5 ='<input type="submit" name="sample" value="Event List" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print5;
                        ?>
                    
                
                </form>
                </div>

                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-lectures.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print6 ='<input type="submit" name="sample" value="Guest Lecture List" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print6;
                        ?>
                    
                
                </form>
                </div>

                </div>
                <div class="row">
                
                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-ambassador.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print7 ='<input type="submit" name="sample" value="Ambassador List" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print7;
                        ?>
                    
                
                </form>
                </div>

                <div class="col-12 col-lg-6 submit flex justify-content-center margin">
                <form action="php/download-accomodation.php" method="post">
                
                    
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                            $print6 ='<input type="submit" name="sample" value="Accommodation List" class="btn gradient-bg flex justify-content-center align-items-center">';
                        }
                        echo  $print6;
                        ?>
                    
                
                </form>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><p class="entry-title">Civilisation 2020</p></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#workshops">WORKSHOPS</a></li>
                            <li><a href="#events">EVENTS</a></li>
                            <li><a href="#lectures">LECTURES</a></li>
                            <li><a href="accomodation.php">ACCOMMODATION</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                    </ul>
                </nav>

                Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>
                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                                <li><a href="https://fb.com/au.civilisation"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/civilisation20"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="tel:+919176224940"><i class="fa fa-phone"></i></a></li>
                                <li><a href="mailto:sceceg1932@gmail.com?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-address-book"></i></a></li>-->
                                <li><a href="https://api.whatsapp.com/send?phone=919176224940"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://forms.gle/DoiPfyzcotmjpasa6"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/main.js'></script>
<script type='text/javascript' src='js/toastr.min.js'></script>

</body>
</html>