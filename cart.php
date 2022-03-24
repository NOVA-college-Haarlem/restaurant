<?php include 'header.php'; ?>
<!--=============== wrapper ===============-->
<div id="wrapper">
    <div class="content">
        <section class="parallax-section header-section">
            <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Your cart</h2>
                <h3>Order online is easy</h3>
            </div>
        </section>
        <section>
            <div class="triangle-decor"></div>
            <div class="container">
                <!-- CHECKOUT TABLE -->
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-border checkout-table">
                            <tbody>
                                <tr>
                                    <th class="hidden-xs">Item</th>
                                    <th>Description</th>
                                    <th class="hidden-xs">Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="hidden-xs">
                                        <a href="#"><img src="images/gallery/1.jpg" alt="" class="respimg"></a>
                                    </td>
                                    <td>
                                        <h5 class="product-name">Cake Monro</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="order-money">$56.00</h5>
                                    </td>
                                    <td>
                                        <input type="number" name="" value="1" max="50" min="1" class="order-count">
                                    </td>
                                    <td>
                                        <h5 class="order-money">$56.00</h5>
                                    </td>
                                    <td class="pr-remove">
                                        <a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="hidden-xs">
                                        <a href="#"><img src="images/gallery/1.jpg" alt="" class="respimg"></a>
                                    </td>
                                    <td>
                                        <h5 class="product-name">Coctail</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="product-title order-money">$23.00</h5>
                                    </td>
                                    <td>
                                        <input type="number" name="" value="1" max="50" min="1" class="order-count">
                                    </td>
                                    <td>
                                        <h5 class="order-money">$23.00</h5>
                                    </td>
                                    <td class="pr-remove">
                                        <a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /CHECKOUT TABLE -->
                <!-- COUPON -->
                <div class="row">
                    <div class="coupon-holder">
                        <div class="col-md-12">
                            <input type="text" name="" placeholder="Coupon code">
                            <button type="submit" class="btn-a">Apply</button>
                            <button type="submit" class="pull-right btn-uc">Update Cart</button>
                        </div>
                    </div>
                </div>
                <!-- /COUPON -->
                <!-- CART TOTALS  -->
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-7">
                        <div class="cart-totals">
                            <h4>Cart Totals</h4>
                            <table class="table table-border checkout-table">
                                <tbody>
                                    <tr>
                                        <th>Cart Subtotal:</th>
                                        <td>$40.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Total:</th>
                                        <td>$2.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$42.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-lg btn-block btn-round btn-d">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
                <!-- /CART TOTALS  -->
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
<?php include 'footer.php' ?>