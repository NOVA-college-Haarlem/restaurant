<?php include 'header.php'; ?>
<!--=============== wrapper ===============-->
<div id="wrapper">
    <div class="content">
        <section class="parallax-section header-section">
            <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Our contacts</h2>
                <h3>Were to find us</h3>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <h3>Contact info</h3>
                            <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                            <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-details">
                            <h4>Lambert - New York City</h4>
                            <ul>
                                <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                <li><a href="#">+7(111)123456789</a></li>
                                <li><a href="#">yourmail@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="contact-details">
                            <h4>Lambert - Washington</h4>
                            <ul>
                                <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                <li><a href="#">+7(111)123456789</a></li>
                                <li><a href="#">yourmail@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-details">
                            <h4>Lambert - Florida</h4>
                            <ul>
                                <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                <li><a href="#">+7(111)123456789</a></li>
                                <li><a href="#">yourmail@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3>Our location</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="no-padding">
            <div class="map-box">
                <div class="map-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                    <div id="map-canvas"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3>Get in Touch</h3>
                            <h4 class="decor-title">Write us</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <div class="contact-form-holder">
                            <div id="contact-form">
                                <div id="message2"></div>
                                <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                    <input name="name" type="text" class="name" onClick="this.select()" value="Name">
                                    <input name="email" type="text" class="email" onClick="this.select()" value="E-mail">
                                    <input name="phone" type="text" class="phone" onClick="this.select()" value="Phone">
                                    <textarea name="comments" class="comments" onClick="this.select()">Message</textarea>
                                    <button type="submit" id="submit">Send </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
                                        <!-- Twitter Slider -->
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
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
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
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
<!--=============== scripts  ===============-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>