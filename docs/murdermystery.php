<?php session_start(); ?>
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
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/custom.js"></script>
</head>

<body class="single-event-page">
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
                                <li><a href="index.php#workshops">WORKSHOPS</a></li>
                                <li><a href="index.php#events">EVENTS</a></li>
                                <li><a href="index.php#lectures">LECTURES</a></li>
                                <li><a href="Projectdisplay.php">PROJECTS</a></li>
                                <li><a href="about.php">ABOUT</a></li>
                                <?php
                                // Start the session

                                if (isset($_SESSION["cid"])) {
                                    $print1 = '<li class="d-lg-none"><a href="php/logout.php">LOGOUT</a></li>';
                                } else {
                                    $print1 = '<li class="d-lg-none"><a href="login.php">LOGIN</a></li>';
                                }
                                echo  $print1;
                                ?>
                            </ul>
                        </nav><!-- .site-navigation -->
                    </div><!-- .col -->

                    <div class="col-lg-2 d-none d-lg-block order-2 order-lg-3">
                        <div class="buy-tickets">

                            <?php
                            // Start the session

                            if (isset($_SESSION["cid"])) {
                                $print1 = '<a class="btn gradient-bg" href="php/logout.php">LOGOUT</a>';
                            } else {
                                $print1 = '<a class="btn gradient-bg" href="login.php">LOGIN</a>';
                            }
                            echo  $print1;
                            ?>


                        </div><!-- .buy-tickets -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .header-bar -->

        <div class="page-header single-event-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 class="entry-title">Murder Mystery</h1>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .site-header -->

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="tabs-nav flex">
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organisers</li>
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                    </ul>

                    <div class="tabs-container">
                        <div id="tab_details" class="tab-content">


                            <p><strong>"If you solve this Mystery, It will be a History." - AJ</strong></p>
                            <p>
                                Want to unleash the Sherlock in you? Longing for a dose of Adventure and excitement? You’ve come to the right place!<br />
                                This event is specifically made for those who want to solve the inscrutable
                                mysteries and escape the mundane routine of life for a few hours. Step forward to take your first step to becoming a detective. Come and participate in this venturesome journey! Secrets wait to be revealed…
                            </p>

                            <h2 class="entry-header">FORMAT:</h2>

                            <ol>
                                <li>PRELIMS: INVESTIGATION
                                    <ul>
                                        <li>Participants are provided with the First Information Report, contains
                                            suspect details, Postmortem report, Murder location, Evidences, etc…</li>
                                        <li>Investigate the suspects.</li>
                                        <li>Make report of your investigation.</li>

                                    </ul>
                                </li>
                                <li>FINALS: JUDGEMENT
                                    <ul>
                                        <li>Narrate your perspective of murder.</li>
                                        <li>The narration should be within the time provided by the Judges.</li>
                                        <li>Most logical / possible solution is awarded.</li>
                                    </ul>
                                </li>
                            </ol>

                            <h2 class="entry-header">RULES:</h2>
                            <ol>
                                <li>Participants of maximum three per team are allowed</li>
                                <li>College ID and Civilisation ID (will be provided) is mandatory.</li>
                                <li>Decision made by Judges is final.</li>

                            </ol>

                            <!-- <h2 class="entry-header">Prize And Venue:</h2>
                            <ul>
                                <dl>
                                    <dd>
                                        <li> <b>Prize</b>:
                                            <dt>1st Prize : <strong>3000 INR</strong>
                                            <dt>2nd Prize : <strong>2000 INR</strong>

                                        </li>

                                    <dd>
                                        <li> <b>Venue</b>:<strong> To be anounced </strong>
                                        </li>
                                </dl>
                            </ul> -->

                        </div>

                        <div id="tab_organizers" class="tab-content">
                            <h2 class="entry-header">Contact:</h2>
                            <ul>
                            <div class="row">
                        <div class="col-2">

                                <li>Aruljothi<br>9080219723</li>
                                <li>Prabaharan<br>9976226142</li> </div>
                                </div>
                            </ul>
                            <p>Mail your queries to <a href="mailto:eventsc2020@gmail.com">eventsc2020@gmail.com</a></p>

                        </div>

                        <div id="tab_about" class="tab-content">
                            <p><strong>Click the button below to register.</strong></p><br>
                            <p>The registrations will be open till the 4<sup>th</sup> of March.</p><br>
                            <p>If you have registered for any one event, you can attend all the events conducted during the symposium. This registration entitles you to attend all the technical and non-technical events.</p>
                            <?php
                            // Start the session

                            if (isset($_SESSION["cid"])) {
                                $print2 = "<p><strong>You are currently logged in as " . $_SESSION["name"] . "</strong></p>";
                            } else {
                                $print2 = "<p><strong>You must be logged in to register online or onspot.</strong></p>";
                            }
                            echo  $print2;
                            ?>

                            <form id="registration" class="entry-content">

                                <!--<div class="entry-content flex">-->
                                <input type="hidden" value="EVENTS" id="event" />
                                <input class="btn gradient-bg flex justify-content-center align-items-center" type="button" onclick="regEvent()" value="Pay onspot"></input>
                                <br>
                                <?php
                                // Start the session
                                if (isset($_SESSION["cid"])) {

                                    $print = '
    <div class="entry-content flex">
        <a href="https://www.townscript.com/e/c20events" class="btn gradient-bg flex justify-content-center align-items-center">Pay and Register</a>
    </div>
    ';
                                } else {
                                    $print = '
    <div class="entry-content flex">
        <a href="login.php" class="btn gradient-bg flex justify-content-center align-items-center">Pay and Register</a>
    </div>
    ';
                                }
                                echo  $print;
                                ?>


                                <!--</div>-->
                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="upcoming-events">
                    <div class="upcoming-events-header">
                        <h4>Upcoming Events</h4>
                    </div>

                    <div class="upcoming-events-list">
                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/upcoming-1.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    25<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Blockchain Conference</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
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
                        <a href="#">
                            <p class="entry-title">Civilisation 2020</p>
                        </a>
                    </figure>

                    <nav class="footer-navigation">
                        <ul class="flex flex-wrap justify-content-center align-items-center">
                            <li><a href="#workshops">WORKSHOPS</a></li>
                            <li><a href="#events">EVENTS</a></li>
                            <li><a href="#lectures">LECTURES</a></li>
                            <li><a href="Projectdisplay.php">PROJECTS</a></li>
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
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
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
