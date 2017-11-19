<?php
/**
 * Created by PhpStorm.
 * User: SMSC
 * Date: 11/13/2017
 * Time: 9:19 AM
 */

$tour = $_GET['tour'];
$type = $_GET['type'];
?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Ceylon Travel Evoke - travel with us</title>
    <meta name="keywords" content="Ceylon Travel Evoke"/>
    <meta name="keywords" content="Evoke"/>
    <meta name="keywords" content="Travel"/>
    <meta name="keywords" content="Travel Agency"/>
    <meta name="keywords" content="Sri Lanka"/>
    <meta name="keywords" content="Sri Lanka Travel Agency"/>
    <meta name="keywords" content="Ceylon"/>
    <meta name="description" content="Ceylon Travel Evoke - The best travel agency in Sri Lanka">
    <meta name="author" content="S.M.S.Chathumal">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/skins/blue/blue.css" rel="stylesheet" media="screen" class="skin">
    <link href="css/theme-responsive.css" rel="stylesheet" media="screen">

    <link href="#" rel="stylesheet" media="screen" class="skin">

    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">

    <script src="js/modernizr.js"></script>
    <!--[if IE]>
    <link rel="stylesheet" href="css/ie/ie.css">
    <![endif]-->
    <!--[if lte IE 8]>
    <script src="js/responsive/html5shiv.js"></script>
    <script src="js/responsive/respond.js"></script>
    <![endif]-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5a0f0555bb0c3f433d4c9cf6/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>
<body>

<div class="preloader">
    <div class="status">&nbsp;</div>
</div>


<div id="layout">

    <header id="header" class="header-v1">

        <nav class="flat-mega-menu">

            <label for="mobile-button"> <i class="fa fa-bars"></i></label>
            <input id="mobile-button" type="checkbox">
            <ul class="collapse">

                <li class="title">
                    <a href="main.php"><span>C</span>eylon <span>T</span>ravel <span>E</span>voke<span>.</span></a>
                </li>

                <li><a href="main.php">HOME</a>
                    <!--<div class="drop-down two-column hover-fade">
                        <ul>
                            <li><a href="main.php">Home Version 1</a></li>
                            <li><a href="index-v2.php">Home Version 2</a></li>
                            <li><a href="index-v3.php">Home Version 3</a></li>
                            <li><a href="index-v4.php">Home Version 4</a></li>
                        </ul>
                        <ul>
                            <li><a href="hotel-main.php">Home Hotels</a></li>
                            <li><a href="flight-main.php">Home Flights</a></li>
                        </ul>
                    </div>-->
                </li>
                <li><a href="tour-list.php">TOURS</a>
                    <!--<ul class="drop-down one-column hover-fade">
                        <li><a href="hotel-main.php">Home Hotels</a></li>
                        <li><a href="hotel-list-view.php">List View</a></li>
                        <li><a href="tour-list.php">Grid View</a></li>
                        <li><a href="South_Sri_Lanka_Tour.php">Detailed</a></li>
                    </ul>-->
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>
                <li>
                    <a href="bookTour.php">BOOKING</a>
                </li>
                <!--<li><a href="template-shop.php">SHOP</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="template-shop.php">Default Shop</a></li>
                        <li><a href="template-shop-sidebar.php">Sidebar Shop</a></li>
                        <li><a href="template-shop.php#!/Beautiful-Venice/p/58713996/category=15487747">Single Shop</a>
                        </li>
                    </ul>
                </li>
                <li><a href="template-about-1.php">ABOUT US</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="template-about-1.php">About Us 1</a></li>
                        <li><a href="template-about-2.php">About us 2</a></li>
                    </ul>
                </li>
                <li><a href="template-service-1.php">SERVICES</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="template-service-1.php">Services 1</a></li>
                        <li><a href="template-service-2.php">Services 2</a></li>
                    </ul>
                </li>
                <li><a href="template-gallery-4.php">GALLERY</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="template-gallery-4.php">Gallery 4 Column</a></li>
                        <li><a href="template-gallery-3.php">Gallery 3 Columns</a></li>
                        <li><a href="template-gallery-2.php">Gallery 2 Columns</a></li>
                    </ul>
                </li>
                <li><a href="#">PACKAGES</a>
                    <div class="drop-down full-width hover-fade">
                        <ul>
                            <li>
                                <h2><span>Punta</span> Cana</h2>
                                <a href="packages-main.php"><img src="img/gallery-2/1.jpg" alt="image 1"> </a>
                                <p>Punta Cana is a cape located east of the Dominican Republic in the province of La
                                    Altagracia.</p>
                                <a href="packages-main.php" class="btn btn-primary">View Details</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h2><span>Santa</span> Marta</h2>
                                <a href="packages-main.php"><img src="img/gallery-2/2.jpg" alt="image 1"> </a>
                                <p>Santa Marta, officially Tourism, Cultural and Historic District of Santa Marta is a
                                    Colombian city.</p>
                                <a href="packages-main.php" class="btn btn-primary">View Details</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h2><span>Isla</span> de San Andres</h2>
                                <a href="packages-main.php"><img src="img/gallery-2/3.jpg" alt="image 1"> </a>
                                <p>San Andres Island is the largest of the islands forming part of the Archipelago of
                                    San Andrés.</p>
                                <a href="packages-main.php" class="btn btn-primary">View Details</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h2><span>Cartagena</span> de Indias</h2>
                                <a href="packages-main.php"><img src="img/gallery-2/4.jpg" alt="image 1"> </a>
                                <p>Cartagena de Indias, officially Tourist and Cultural District of Cartagena de Indias
                                    Cartagena de Indias abbreviated.</p>
                                <a href="packages-main.php" class="btn btn-primary">View Details</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="template-about-1.php">FEATURES</a>
                    <div class="drop-down full-width hover-fade">
                        <ul>
                            <li><h2>Templates</h2></li>
                            <li><a href="template-about-1.php">About Us 1</a></li>
                            <li><a href="template-about-2.php">About us 2</a></li>
                            <li><a href="template-service-1.php">Services 1</a></li>
                            <li><a href="template-service-2.php">Services 2</a></li>
                            <li><a href="template-gallery-4.php">Gallery 4 Column</a></li>
                            <li><a href="template-gallery-3.php">Gallery 3 Columns</a></li>
                            <li><a href="template-gallery-2.php">Gallery 2 Columns</a></li>
                            <li><a href="template-blog-right.php">Blog Right Sidebar</a></li>
                            <li><a href="template-blog-left.php">Blog Left Sidebar</a></li>
                        </ul>
                        <ul>
                            <li><h2>Templates</h2></li>
                            <li><a href="template-blog-full.php">Blog Full Width</a></li>
                            <li><a href="template-blog-read.php">Blog Read</a></li>
                            <li><a href="template-faq.php">Page Faq Questions</a></li>
                            <li><a href="page-full-widht.php">Page Full Widht</a></li>
                            <li><a href="page-left.php">Page Left Sidebar</a></li>
                            <li><a href="page-right.php">Page Right Sidebar</a></li>
                            <li><a href="page-404.php">Page 404</a></li>
                            <li><a href="page-site-map.php">Page Site Map</a></li>
                            <li><a href="princing-tables.php">Princing tables</a></li>
                        </ul>
                        <ul>
                            <li><h2>Features</h2></li>
                            <li><a href="feature-header-1.php">Header Version 1</a></li>
                            <li><a href="feature-header-2.php">Header Version 2</a></li>
                            <li><a href="feature-header-3.php">Header Version 3</a></li>
                            <li><a href="feature-header-4.php">Header Version 4</a></li>
                            <li><a href="feature-footer-1.php#footer">Footer Version 1</a></li>
                            <li><a href="feature-footer-2.php#footer">Footer Version 2</a></li>
                            <li><a href="feature-footer-3.php#footer">Footer Version 3</a></li>
                            <li><a href="feature-footer-4.php#footer">Footer Version 4</a></li>
                            <li><a href="feature-background-sections.php">Background sections</a></li>
                        </ul>
                        <ul>
                            <li><h2>Elements</h2></li>
                            <li><a href="feature-grid-system.php">Grid System</a></li>
                            <li><a href="feature-typograpy.php">Typograpy</a></li>
                            <li><a href="feature-icons.php">Icons</a></li>
                            <li class="icon-big-nav"><i class="fa fa-rocket"></i></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>
                <li class="social-bar"><a href="#">FOLLOW US</a>
                    <ul class="drop-down hover-zoom">
                        <li><a href="#" target="_blank"><i class="fa fa-flickr"></i> </a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i> </a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
                    </ul>
                </li>
                <li class="login-form"><i class="fa fa-user"></i>
                    <ul class="drop-down hover-expand">
                        <li>
                            <form method="post" action="#">
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <input type="email" required="required" name="email"
                                                   placeholder="Your email address">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="password" required="required" name="password"
                                                   placeholder="Password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="Login"></td>
                                        <td><label> <input type="checkbox" name="check_box"> Keep me signed in </label>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="search-bar"><i class="fa fa-search"></i>
                    <ul class="drop-down hover-expand">
                        <li>
                            <form method="post" action="#">
                                <table>
                                    <tr>
                                        <td><input type="search" required="required" name="serach_bar"
                                                   placeholder="Type Keyword Here"></td>
                                        <td><input type="submit" value="Search"></td>
                                    </tr>
                                </table>
                            </form>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </nav>

    </header>


    <div class="section-title-02">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Booking</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-central">

        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>


        <!--<div id="map"></div>-->


        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">

                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <h2>Design your own tour to Sri Lanka</h2>
                            <p>Design your own dream tour to Sri Lanka with Ceylon Travel Evoke..!</p>
                            <p>Let us know what type of Holiday tour and accommodation you would prefer. Tell us</p>
                            <p>What you like to do, what you like to see during Your Holiday. Our Traval experts will
                                get back to you within 24 hours and help you to design you dream tour to Sri Lanka.</p>
                            <p>Fill The Below form and submit. Do provide maximum information which you are able to
                                provide.</p>
                            <form id="formBooking" class="form-theme" action="booking-email-send.php">
                                <h3>Tour Details</h3>
                                <label for="DateOfArrival">Date of Arrival*</label>
                                <input id="DateOfArrival" class="form-control" type="date" name="DateOfArrival"
                                       required>
                                <label for="DateOfDeparture">Date of Departure*</label>
                                <input class="form-control" type="date" name="DateOfDeparture" id="DateOfDeparture"
                                       required>
                                <h4>Number of guests</h4>
                                <label for="Adults">Adults*</label>
                                <input class="form-control" type="number" name="Adults" id="Adults" required>
                                <?php if ($type != 'honeymoon') { ?>
                                    <label for="Children612">Children (06 – 12 Years)</label>
                                    <input class="form-control" type="number" name="Children612" id="Children612">
                                    <label for="Children5">Children (below 05 Years)</label>
                                    <input class="form-control" type="number" name="Children5" id="Children5">
                                <?php } ?>
                                <label for="roomCount">Number of rooms required*</label>
                                <input class="form-control" type="number" name="roomCount" id="roomCount" required>
                                <hr>
                                <h4>To Design a tour</h4>
                                <label for="package">Please Enter Tour Package Name (optional)</label>
                                <input type="text" name="package" id="package" value="<?php echo $tour ?>">
                                <label for="kind">What kind of Holiday does You Prefer in Sri Lanka*</label>
                                <select class="form-control" required name="kind" id="kind">
                                    <option selected disabled></option>
                                    <option>Wild, Adventurous and Hiking</option>
                                    <option>Fun and Exciting</option>
                                    <option>Romantic and Sensuous</option>
                                    <option>Thought provoking and Peaceful</option>
                                    <option>Healthy and Rejuvenating</option>
                                </select><br>
                                <label for="see">What would you like to see in your Holiday?*</label>
                                <select class="form-control" required name="see" id="see">
                                    <option selected disabled></option>
                                    <option>Mountains & Waterfalls</option>
                                    <option>Beaches</option>
                                    <option>Archeological Sites</option>
                                    <option>Wildlife</option>
                                    <option>Flora and Fauna</option>
                                </select><br>
                                <label for="facility">What is the most important Facility which you hope?*</label>
                                <select class="form-control" required name="facility" id="facility">
                                    <option selected disabled></option>
                                    <option>Comfortable Accommodation Facility</option>
                                    <option>Communication</option>
                                    <option>Excellent Foods</option>
                                    <option>Transportation</option>
                                    <option>Guide Assistance</option>
                                </select><br>
                                <label for="accommodation">What Kind of Accommodation pleases you?*</label>
                                <select class="form-control" required name="accommodation" id="accommodation">
                                    <option selected disabled></option>
                                    <option>Budget Guesthouses</option>
                                    <option>2-3 Star hotels</option>
                                    <option>4-5 Star Hotels</option>
                                </select><br>
                                <label for="requests">If you have any Special Requests</label>
                                <textarea name="requests" id="requests"></textarea>
                                <hr>
                                <h4>Personal Information</h4>
                                <label for="customerName">Name*</label>
                                <input type="text" required name="customerName" id="customerName">
                                <label for="customerEmail">Email*</label>
                                <input type="email" required name="customerEmail" id="customerEmail">
                                <label for="customerTel">Contact Number*</label>
                                <input type="tel" required name="customerTel" id="customerTel">
                                <label for="customerCountry">Country*</label>
                                <input type="text" required name="customerCountry" id="customerCountry">
                                <input type="submit" name="Submit" value="Send Tour Plan" class="btn btn-primary">
                            </form>
                            <div id="result">
                                <div id="booking_error" hidden class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> Contact email sending failed. Please try again.
                                </div>
                                <div id="booking_success" hidden class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Contact email was <strong>successfully</strong> sent. Our agent will contact you as
                                    soon as possible.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer" class="footer-v1">
        <div class="container">
            <div class="row">

                <!--<div class="col-md-5">
                    <div class="title-footer">
                        <h2>Save on your plans!
                            <br> <span>Select Travelia Theme And Receive</span>
                            <br> our discounts by e-mail.</h2>
                    </div>
                    <p>You can choose your favorite destination and start planning your long-awaited vacation. We offer
                        thousands of destinations and have a wide variety of hotels so that you can host and enjoy your
                        stay without problems. Book now your trip travelia.com.</p>
                </div>-->

                <div class="col-md-7">
                    <div class="row">

                        <!--<div class="col-md-3">
                            <h3>FOLLOW US</h3>
                            <ul class="social">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a>
                                </li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a>
                                </li>
                                <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                            </ul>
                        </div>


                        <div class="col-md-5">
                            <h3>TRAVEL SPECIALISTS </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="#">Golf Vacations</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Disney Parks Vacations</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Vacations As Advertised</a></li>
                            </ul>
                        </div>-->


                        <div class="col-md-4">
                            <h3>CONTACT US</h3>
                            <ul class="contact_footer">
                                <li>
                                    <i class="fa fa-envelope"></i>rangikamadu.dl27@gmail.com<br>
                                    <i class="fa fa-envelope"></i>hasitharanjana@gmail.com
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>(+94) 776 029 468<br>
                                    <i class="fa fa-phone"></i>(+94) 779 891 275
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--<div class="divisor"></div>-->
                    <!--<div class="row">

                        <div class="col-md-12">
                            <h3>NEWSLETTER SIGN UP</h3>
                            <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
                                            <input class="form-control" placeholder="Your Name" name="name" type="text"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
                                            <input class="form-control" placeholder="Your  Email" name="email"
                                                   type="email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>
</span>
                                    </div>
                                </div>
                            </form>
                            <div id="result-newsletter"></div>
                        </div>

                    </div>-->
                </div>
            </div>
        </div>

        <div class="footer-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p>&copy; 2015 Ceylon Travel Evoke . All Rights Reserved. 2017 - 2018</p>
                    </div>
                    <!--<div class="col-md-7">

                        <ul class="nav-footer">
                            <li><a href="main.php">HOME</a></li>
                            <li><a href="hotel-main.php">HOTELS</a></li>
                            <li><a href="flight-main.php">FLIGHTS</a></li>
                            <li><a href="car-main.php">CARS</a></li>
                            <li><a href="cruice-main.php">CRUICES</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>

    </footer>

</div>


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.1.10.4.min.js"></script>

<script src="js/nav/jquery.sticky.js" type="text/javascript"></script>

<script type="text/javascript" src="js/totop/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/accordion/accordion.js"></script>

<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script src="js/maps/gmap3.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>

<script src="js/carousel/carousel.js"></script>

<script src="js/filters/jquery.isotope.js" type="text/javascript"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/flickr/jflickrfeed.min.js"></script>

<script type="text/javascript" src="js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script>

<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("#formBooking").submit(function (e) {
            e.preventDefault();
            var $form = $(this);
            $form.addClass('disable-click');
            var formDataSerialized = $(this).serialize();
            console.log($(this));
            $.post("booking-email-send.php", formDataSerialized, function (data) {
                $form.removeClass('disable-click');
                console.log(data);
//                if (data == 'success') {
//                    $('#booking_success').fadeIn();
//                    setTimeout(function () {
//                        $('#booking_success').fadeOut("slow");
//                    }, 3000);
//                } else {
//                    $('#booking_error').fadeIn();
//                    setTimeout(function () {
//                        $('#booking_error').fadeOut("slow");
//                    }, 3000);
//                }
            });
        });
    });
</script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    /*
     Map Settings
     Find the Latitude and Longitude of your address:
     - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
     - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
     */

    // Map Markers
    var mapMarkers = [{
        address: "217 Summit Boulevard, Birmingham, AL 35243",
        html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }, {
        address: "645 E. Shaw Avenue, Fresno, CA 93710",
        html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }, {
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 38.09024;
    var initLongitude = -98.71289;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 5
    };

    $("#map").gMap(mapSettings);

    // Map Center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $("#map").gMap("centerAt", options);
    }

</script>
</body>
</html>
