<!-- footer start -->
<footer class="footer-1 footer-2 overflow-hidden" style="background-image: url(assets/img/footer/footer-bg-2.png);">

    <?php if (!$hasContactFunctionality) { ?>
        <div class="footer-top__cta mb-80 mb-lg-60 mb-sm-50 mb-xs-40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-top__cta-content-wrapper pb-45">
                            <div class="footer-top__cta-content text-center mx-auto">
                                <h2 class="title color-white mb-20 mb-sm-10 mb-xs-5">Feel Free To Contact Us</h2>
                                <div class="description color-white font-la mb-40 mb-md-30 mb-sm-25 mb-xs-20 fw-500 mx-auto">
                                    <p>Leave us a message, we will love to hear what you have to tell us. One of us will
                                        get back to you aas soon as possible</p>
                                </div>

                                <a href="contact.php" class="theme-btn btn-sm btn-yellow">Contact Us <i
                                            class="fab fa-telegram-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="footer-top mb-xs-25 mb-sm-30 mb-md-35 mb-lg-40 mb-50 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-footer-wid site_info_box">
                        <a href="index.html" class="d-block mb-20">
                            <img
                                    style="max-height: 100px;"
                                    src="assets/img/logo/logo.png" alt="">
                        </a>

                        <div class="description font-la color-white">
                            <p><?php echo $vision; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single-footer-wid newsletter_widget">
                        <h6 class="title d-flex align-items-center color-white mb-30"><img
                                    src="assets/img/icon/notification-2.svg" alt=""> stay up to date - get updates with
                            the latest topics.</h6>

                        <div class="newsletter_box">
                            <form action="#">
                                <input type="email" placeholder="Enter your email address" required="">
                                <button class="theme-btn btn-yellow" type="submit">Subscribe Now <i
                                            class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid contact_widget">
                    <h4 class="wid-title mb-30 color-white">Our Working Time</h4>

                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="wid-contact pb-30 mb-25">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Fri / 0800 : 1630</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Sat / 0800 : 1300</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Sunday Closed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Links</h4>

                    <ul>
                        <?php echo $siteMenu; ?>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

            <div class="col-md-6 col-xl-4">
                <div class="single-footer-wid recent_post_widget pl-xl-10 pl-65 pr-50 pr-xl-30">
                    <h4 class="wid-title mb-30 color-white">Our Top Brands</h4>

                    <div class="recent-post-list">
                        <a href="<?php echo $gc->aboutLink; ?>"
                           class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                            <div class="thumb">
                                <img src="<?php echo $gc->logoUrl; ?>" alt="">
                            </div>

                            <div class="post-data">
                                <h5 class="color-white mb-10 fw-600"><?php echo $gc->categoryName; ?></h5>
                                <span class="color-white d-flex ailign-items-center"><i class="far fa-clock"></i>January 11, 2018</span>
                            </div>
                        </a>

                        <a href="<?php echo $sc->aboutLink; ?>"
                           class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                            <div class="thumb">
                                <img src="<?php echo $sc->logoUrl; ?>" alt="">
                            </div>

                            <div class="post-data">
                                <h5 class="color-white mb-10 fw-600"><?php echo $sc->categoryName; ?></h5>
                                <span class="color-white d-flex ailign-items-center"><i class="far fa-clock"></i>January 11, 2018</span>
                            </div>
                        </a>

                    </div>
                </div>
            </div> <!-- /.col-lg-4 - single-footer-wid -->

            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid">
                    <h4 class="wid-title mb-30 color-white">Office Location</h4>
                    <h4 style="color: white">
                        <?php echo $address; ?>
                    </h4>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->
        </div>
    </div>

    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; 2023 <a href="index.html">Chirere group</a> | Made with <i class="fa fa-heart"></i> by <a
                            href="https://www.linkedin.com/in/daniel-tanaka-mpofu-850543199/">Tanaka Mpofu</a>
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!--  ALl JS Plugins
====================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/scrollUp.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/jquery.sticky-kit.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/active.js"></script>
<script async="" defer=""
        src="../../../maps/api/js?key=AIzaSyDNzB36AcEMpFG1kWuNC5dfLvdX83OUr5M&callback=initMap"></script>
</body>

</html>