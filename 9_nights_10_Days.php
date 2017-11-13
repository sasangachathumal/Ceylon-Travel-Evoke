<?php
/**
 * Created by PhpStorm.
 * User: SMSC
 * Date: 11/13/2017
 * Time: 9:18 AM
 */
?>
<!DOCTYPE html>
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


    <div class="section-title-detailed">

        <div id="single-carousel">
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image3.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image3.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image14.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image14.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image16.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image16.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image18.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image18.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image20.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image20.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image22.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image22.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image24.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image24.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image27.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image27.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/9_Nights_10_Days/image28.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/9_Nights_10_Days/image28.jpeg" alt="" class="img-responsive">
            </div>
        </div>


        <div class="title-detailed">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="starts">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                        </ul>
                        <h2>9 Nights 10 Days
                            <!--<span>6 Nights 7 Days</span>-->
                        </h2>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content-central">

        <div class="content_info">

            <div class="content_resalt paddings-mini tabs-detailed">
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#plan" data-toggle="tab"><i class="fa fa-bicycle"></i> TOUR PLAN</a>
                                </li>
                                <li>
                                    <a href="#destinations" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                        Destinations</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01 (Colombo)</h3>
                                            <p>On arrival in Sri Lanka, You will be met and assist by Ceylon Travel Evoke
                                                representative and directed to your guide. Colombo the capital of Sri
                                                Lanka, has a long history as a port on ancient east-west trade routes,
                                                ruled successively by the Portuguese, Dutch and British. At the evening
                                                period is at leisure with dinner and overnight stay at the Hotel.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (Colombo - Kandy)</h3>
                                            <p>Breakfast at the Hotel and check out. You leave Colombo in the morning
                                                and travel to Kandy witnessing the change of scenery and climate. Arrive
                                                and check-in at hotel.</p>
                                            <p>Evening, you will visit the old royal city of kandy,magical and
                                                glamourous natural environment and beautifully nestled between green
                                                hills.Sri lankan people admire the temple of the tooth relic as the
                                                blessing of the country.then you will visit that adorable place which is
                                                the holiest shrine in Sri Lanka, where the tooth relic of lord buddha is
                                                highly venerated.As well you will have more opportunity to witness
                                                cultural dance performances, where you will see famous kandyan dances,
                                                as well as up-country and devil dances.</p>
                                            <p>Return to the Hotel for dinner and over night stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (Kandy - Peradeniya)</h3>
                                            <p>After Breakfast at Hotel, commence a sightseeing tour of Kandy city
                                                including Gem museum, Art and craf centre and Bazar.(if you are
                                                interesting to visit this beautiful town by riding scooty, you will give
                                                the facility for that too)</p>
                                            <p>You visit the world famous botanical garden in peradeniya.As Sri Lanka’s
                                                largest garden an elegent and spacious 147-acres (60-hectares) plent of
                                                time is needed to stroll peradeniya’s imposing avenue of Royal
                                                palms.</p>
                                            <p>Candle light Dinner and overnight stay at the hotel in Peradeniya.</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 (Peradeniya - Nuwara eliya)</h3>
                                            <p>The beautiful town of Nuwara eliya, set in the heart of the Tea country
                                                and situated 1890m above sea level,the climate here is rather cold
                                                during winter time it is the coldest sometimes there will be frost.</p>
                                            <p>Breakfast at the hotel and check-out.Travel to Nuwara eliya en route
                                                visiting a tea plantation and a factory.Arrive and visit the city before
                                                check-in at hotel for dinner and over night stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 05 (Nuwara eliya - Ella)</h3>
                                            <p>After have Breakfast at the hotel and check out. Travel to Nanu oya to
                                                take an enjoyable train journey to Ella.</p>
                                            <p>Arrive and check in at the hotel for rest Dinner and over night stay at
                                                the hotel.</p>
                                        </li>
                                        <li>
                                            <h3>Day 06 (Ella)</h3>
                                            <p>Breakfast at the hotel and relax the whole day lazing in the cool
                                                climate.</p>
                                            <P>candle light dinner.</P>
                                        </li>
                                        <li>
                                            <h3>Day 07 (Ella - Tangalle)</h3>
                                            <p>After breakfast you will leave ella and drive along nice way which have
                                                higher natural beauty.then you check in beach hotel in tangalle.Spend
                                                your evening time relaxing by the beautiful Indian Ocean. Candle light
                                                dinner and Overnight stay at Tangalle</p>
                                        </li>
                                        <li>
                                            <h3>Day 08 (Tangalle)</h3>
                                            <p>Breakfast at the hotel</p>
                                            <p>Relax by the Beach</p>
                                            <p>Overnight stay at Tangalle</p>
                                        </li>
                                        <li>
                                            <h3>Day 09 (Tangale - Galle)</h3>
                                            <p>Breakfast at the hotel</p>
                                            <p>Transfer to Galle. The capital of the southern province is a city with a
                                                colorful history. UNESCO declared world heritage site the magnificent
                                                Dutch fort is the most popular attraction of the town. </p>
                                            <p>You will visit Galle fort and in the evening period travel to Jungle
                                                beach and relax by the beach (if you are interest to ride scooty we
                                                provide that opportunity too)</p>
                                            <p>In the evening period travel to Koggala and have a nice boat ride and
                                                check into Koggala Lake.</p>
                                            <p>Candle light Dinner and overnight stay at koggala</p>
                                        </li>
                                        <li>
                                            <h3>Day 10 (Galle - Colombo)</h3>
                                            <p>Breakfast at the hotel and transfer to the Airport for your
                                                departure.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://www.google.lk/maps/place/Hikkaduwa/@6.1277317,80.101522,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae177fbcae7226d:0x373eeb50aad15308!8m2!3d6.1394676!4d80.1062861?hl=en"><i
                                                            class="fa fa-check"></i>Hikkaduwa</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://www.google.lk/maps/place/Koggala/@6.0026938,80.3139207,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae16ccc65d32a85:0x47fdbb4441fdf8bf!8m2!3d6.000704!4d80.3352364?hl=en"><i
                                                            class="fa fa-check"></i>Koggala</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li><a target="_blank"
                                                       href="https://www.google.lk/maps/search/Kanneliya/@6.2472843,80.3448477,15.5z?hl=en"><i
                                                            class="fa fa-check"></i>Kanneliya</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://www.google.lk/maps/place/Bentota/@6.425699,79.9861482,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae22e900168ca21:0x96c438f00a68c060!8m2!3d6.4189175!4d80.005979?hl=en"><i
                                                            class="fa fa-check"></i>Bentota</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://www.google.lk/maps/place/Balapitiya/@6.2779305,80.0288341,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae180f06ea9bb1b:0x561e2543dfa329a5!8m2!3d6.2753892!4d80.0479039?hl=en"><i
                                                            class="fa fa-check"></i>Balapitiya</a></li>
                                            </ul>
                                        </div>
                                    </div>
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

</body>
</html>