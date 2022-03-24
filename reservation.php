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
                    <!--=============== parallax section  ===============-->	
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Make online reservation</h2>
                            <h3>Booking a table online is easy</h3>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== reservation ===============-->	
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h4>Reervation info</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner">
                                                <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bold-separator">
                                        <span></span>
                                    </div>
                                    <div class="reservation-form-holder">
                                        <div class="reservation-form">
                                            <div id="message"></div>
                                            <form method="post" action="php/reservation.php" name="reservationform" id="reservation-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>Book a table</h3>
                                                        <!--date-->
                                                        <input name="resdate" class="myInput" id="resdate" data-lang="en" data-years="2021-2025" data-format="YYYY-MM-DD" data-sundayfirst="false" value="Date" onClick="this.select()" >
                                                        <!--time--> 
                                                        <select id="restime" class="form-control chosen-select no-search-select">
                                                            <option value="5:00am">5:00 am</option>
                                                            <option value="5:30am">5:30 am</option>
                                                            <option value="6:00am">6:00 am</option>
                                                            <option value="6:30am">6:30 am</option>
                                                            <option selected="selected" value="7:00am">7:00 am</option>
                                                            <option value="7:30am">7:30 am</option>
                                                            <option value="8:00am">8:00 am</option>
                                                            <option value="8:30am">8:30 am</option>
                                                            <option value="9:00am">9:00 am</option>
                                                            <option value="9:30am">9:30 am</option>
                                                            <option value="10:00am">10:00 am</option>
                                                            <option value="10:30am">10:30 am</option>
                                                            <option value="11:00am">11:00 am</option>
                                                            <option value="11:30am">11:30 am</option>
                                                            <option value="12:00pm">12:00 pm</option>
                                                            <option value="12:30pm">12:30 pm</option>
                                                            <option value="1:00pm">1:00 pm</option>
                                                            <option value="1:30pm">1:30 pm</option>
                                                            <option value="2:00pm">2:00 pm</option>
                                                            <option value="2:30pm">2:30 pm</option>
                                                            <option value="3:00pm">3:00 pm</option>
                                                            <option value="3:30pm">3:30 pm</option>
                                                            <option value="4:00pm">4:00 pm</option>
                                                            <option value="4:30pm">4:30 pm</option>
                                                            <option value="5:00pm">5:00 pm</option>
                                                            <option value="5:30pm">5:30 pm</option>
                                                            <option value="6:00pm">6:00 pm</option>
                                                            <option value="6:30pm">6:30 pm</option>
                                                            <option value="7:00pm">7:00 pm</option>
                                                            <option value="7:30pm">7:30 pm</option>
                                                            <option value="8:00pm">8:00 pm</option>
                                                            <option value="8:30pm">8:30 pm</option>
                                                            <option value="9:00pm">9:00 pm</option>
                                                            <option value="9:30pm">9:30 pm</option>
                                                            <option value="10:00pm">10:00 pm</option>
                                                            <option value="10:30pm">10:30 pm</option>
                                                            <option value="11:00pm">11:00 pm</option>
                                                            <option value="11:30pm">11:30 pm</option>
                                                        </select>
                                                        <!--restaurant-->                                      
                                                        <select class="form-control chosen-select no-search-select" id="resrest">
                                                            <option value="Lambert - New York City">Lambert  - New York City</option>
                                                            <option value="Lambert - Washington">Lambert - Washington</option>
                                                            <option value="Lambert - Florida ">Lambert - Florida</option>
                                                        </select>
                                                        <!--person-->    
                                                        <select id="numperson" class="form-control chosen-select no-search-select">
                                                            <option value="1">1 Person</option>
                                                            <option value="2">2 People</option>
                                                            <option value="3">3 People</option>
                                                            <option value="4">4 People</option>
                                                            <option value="5">5 People</option>
                                                            <option value="6">6 People</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Contact Details</h3>
                                                        <!--name--> 
                                                        <input name="name" type="text" id="name"  onClick="this.select()" value="Name" >
                                                        <!--mail--> 
                                                        <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
                                                        <!--phone--> 
                                                        <input name="phone" type="text" id="phone" onClick="this.select()" value="Phone">         
                                                        <!--message-->    
                                                        <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit"  id="submit-res">Make a reservation</button>          										           											
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->                 
                    <!--=============== Opening Hours ===============-->	
                    <section class="parallax-section" id="sec2">
                        <div class="media-container video-parallax" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
							<div class="bg mob-bg" style="background-image: url(images/bg/1.jpg)"></div>
                            <div class="video-container">
                                <video autoplay  loop muted  class="bgvid">
                                    <source src="video/1.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Opening Hours</h2>
                            <h3>Call For Reservations</h3>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="work-time">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Sunday to Tuesday</h3>
                                        <div class="hours">
                                            09:00<br>
                                            22:00
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Friday to Saturday</h3>
                                        <div class="hours">
                                            11:00<br>
                                            19:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="big-number"><a href="#">+7(111)123456789</a></div>
                                </div>
                            </div>
                        </div>
                    </section>
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