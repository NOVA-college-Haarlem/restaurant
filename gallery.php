<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Lambert  - Responsive  Pub / Restaurant Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <ul>
                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                        <!--logo-->             
                        <div class="logo-holder">
                            <a href="index.html">
                            <img src="images/logo.png" class="respimg logo-vis" alt="">
                            <img src="images/logo2.png" class="respimg logo-notvis" alt="">
                            </a>
                        </div>
                         <!--Navigation -->
                         <?php include 'navigation.php'; ?>
                    </div>
                </div>
            </header>
            <!--header end-->
            <!--=============== wrapper ===============-->		
            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Our gallery</h2>
                            <h3>Booking a table online is easy</h3>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="gallery-filters">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All</a>		
                                <a href="#" class="gallery-filter " data-filter=".menu">Menu </a>
                                <a href="#" class="gallery-filter" data-filter=".rest">Restaurant</a>
                                <a href="#" class="gallery-filter" data-filter=".ovid">Video</a>
                            </div>
                            <div class="bold-separator"><span></span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery-items three-coulms grid-small-pad popup-gallery">
                                        <!-- 1 -->
                                        <div class="gallery-item menu">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg" title="Image information">
                                                    <span class="overlay"></span>
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div class="gallery-item rest">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 3 -->
                                        <div class="gallery-item   menu">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 4 -->
                                        <div class="gallery-item gallery-item-second  menu">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 5 -->
                                        <div class="gallery-item  ovid">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="https://www.youtube.com/watch?v=r7TnaQ4dwwo" class="popup-youtube">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-play-circle"></i>
                                                    <img  src="images/gallery/2.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 6 -->
                                        <div class="gallery-item  rest">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 7 -->                                      
                                        <div class="gallery-item  menu">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="images/gallery/1.jpg">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-search"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 8 -->
                                        <div class="gallery-item  ovid rest">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="https://player.vimeo.com/video/89546048" class="popup-vimeo">
                                                    <span class="overlay"></span> 
                                                    <i class="fa fa-play-circle"></i>
                                                    <img  src="images/gallery/1.jpg"   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end gallery items -->	
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--=============== testimonials ===============-->
                    <section class="parallax-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Testimonials</h2>
                            <h3>What said about us</h3>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonials-holder">
                                        <div class="customNavigation">
                                            <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                            <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="testimonials-slider owl-carousel">
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li> <i class="fa fa-star-half"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-icon"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </section>
                    <!--section end-->                 
                </div>
                <!--content end-->
                <!--=============== footer ===============-->
                <footer>
                    <div class="footer-inner">
                        <div class="container">
                            <div class="row">
                                <!--tiwtter-->
                                <div class="col-md-4">
                                    <div class="footer-info">
                                        <h4>Our twitter</h4>
                                        <div class="twitter-holder">
                                            <div class="twitts">
                                                <div class="twitter-feed">
                                                    <div id="twitter-feed"></div>
                                                </div>
                                            </div>
                                            <div class="customNavigation">
                                                <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                                <a class="twit-link transition" href="https://twitter.com/katokli3mmm" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--footer social links-->
                                <div class="col-md-4">
                                    <div class="footer-social">
                                        <h3>Find us</h3>
                                        <ul>
                                            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--subscribe form-->
                                <div class="col-md-4">
                                    <div class="footer-info">
                                        <h4>Newsletter</h4>
                                        <div class="subcribe-form">
                                            <form id="subscribe">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Your email address.." spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-envelope"></i></button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <!--footer contacts links -->
                            <ul class="footer-contacts">
                                <li><a href="#">+7(111)123456789</a></li>
                                <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                <li><a href="#">yourmail@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--to top / privacy policy-->
                    <div class="to-top-holder">
                        <div class="container">
                            <p> <span> &#169; Lambert 2015 . </span> All rights reserved.</p>
                            <div class="to-top"><span>Back To Top </span><i class="fa fa-angle-double-up"></i></div>
                        </div>
                    </div>
                </footer>
                <!--footer end --> 
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>