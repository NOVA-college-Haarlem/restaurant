<?php include 'header.php'; ?>
<!--=============== wrapper ===============-->
<div id="wrapper">
    <div class="content">
        <section>
            <div class="container">
                <div class="product-meta">
                    <span class="posted_in">Category : <a href="#">Other</a> , <a href="#">Sale</a></span>
                </div>
                <div class="product-item-holder">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image">
                                <div class="customNavigation">
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                </div>
                                <div class="owl-carousel product-slider">
                                    <div><img src="images/gallery/1.jpg" alt="" class="respimg"></div>
                                    <div><img src="images/gallery/1.jpg" alt="" class="respimg"></div>
                                    <div><img src="images/gallery/1.jpg" alt="" class="respimg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item">
                                <h2 class="product_title">Steak & Creamy Mash</h2>
                                <div class="pr-opt">
                                    <div class="product-item-price"><span>$56</span>$29</div>
                                    <div class="product-rating">
                                        <span>( 2 customer reviews )</span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="tabs-container">
                                    <ul class="tabs-menu">
                                        <li class="current"><a href="#tab-1">Description</a></li>
                                        <li><a href="#tab-2">Reviews (2)</a></li>
                                    </ul>
                                    <div class="tab">
                                        <div id="tab-1" class="tab-content">
                                            <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo . Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                        </div>
                                        <div id="tab-2" class="tab-content">
                                            <div id="comments">
                                                <!--title-->
                                                <h6 id="comments-title">Comments <span>( 2 )</span></h6>
                                                <ul class="commentlist clearafix">
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <div class="comment-author">
                                                                <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                                            </div>
                                                            <cite class="fn"><a href="#">Kevin</a></cite>
                                                            <div class="comment-meta">
                                                                <h6><a href="#">January 02, 2014 at 07:39 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <!--comment body-->
                                                        <div class="comment-body">
                                                            <div class="comment-author">
                                                                <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                                            </div>
                                                            <cite class="fn"><a href="#">Andy</a></cite>
                                                            <div class="comment-meta">
                                                                <h6><a href="#">January 22, 2014 at 03:19 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <div id="respond" class="clearafix">
                                                    <h6 id="reply-title">Leave A Comment</h6>
                                                    <div class="comment-reply-form clearfix">
                                                        <form action="#" method="post" id="commentform" class="form-horizontal" name="commentform">
                                                            <div class="comment-form-author control-group">
                                                                <div class="controls">
                                                                    <input id="author" name="author" type="text" value="" size="40" aria-required="true" />
                                                                </div>
                                                                <label class="control-label" for="author">Name </label>
                                                            </div>
                                                            <div class="comment-form-email control-group">
                                                                <div class="controls">
                                                                    <input id="email" name="email" type="text" value="" size="40" aria-required="true" />
                                                                </div>
                                                                <label class="control-label" for="email">Email </label>
                                                            </div>
                                                            <div class="comment-form-comment control-group">
                                                                <div class="controls">
                                                                    <textarea id="comment" name="comment" cols="50" rows="8" aria-required="true" placeholder="Your comment here..">
                                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-submit">
                                                                <div class="controls">
                                                                    <button class="transition button" type="submit">Post Comment</button>
                                                                    <input type='hidden' name='comment_post_ID' value='30' id='comment_post_ID'> <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--end respond-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                    <input type="button" value="+" class="plus">
                                    <a href="#">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="bold-separator">
                            <span></span>
                        </div>
                        <div class="section-title">
                            <h3>Related Products</h3>
                            <h4>You may also like</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <ul class="products">
                            <li class="product-cat-mains">
                                <a href="product.html"><img src="images/gallery/1.jpg" alt="" class="respimg"></a>
                                <h4 class="product-title"><a href="product.html">Steak & Creamy Mash</a></h4>
                                <ul class="product-cats">
                                    <li><a href="#">Main Meals</a></li>
                                    <li><a href="#">Hot Dishes</a></li>
                                </ul>
                                <div class="product-price">
                                    <span>$27</span>
                                    <a href="#">Add to cart</a>
                                </div>
                            </li>
                            <li class="product-cat-mains">
                                <a href="product.html"><img src="images/gallery/1.jpg" alt="" class="respimg"></a>
                                <h4 class="product-title"><a href="product.html">Steak & Creamy Mash</a></h4>
                                <ul class="product-cats">
                                    <li><a href="#">Main Meals</a></li>
                                    <li><a href="#">Hot Dishes</a></li>
                                </ul>
                                <div class="product-price">
                                    <span>$27</span>
                                    <a href="#">Add to cart</a>
                                </div>
                            </li>
                            <li class="product-cat-mains">
                                <a href="product.html"><img src="images/gallery/1.jpg" alt="" class="respimg"></a>
                                <h4 class="product-title"><a href="product.html">Steak & Creamy Mash</a></h4>
                                <ul class="product-cats">
                                    <li><a href="#">Main Meals</a></li>
                                    <li><a href="#">Hot Dishes</a></li>
                                </ul>
                                <div class="product-price">
                                    <span>$27</span>
                                    <a href="#">Add to cart</a>
                                </div>
                            </li>
                        </ul>
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
<?php include 'footer.php' ?>