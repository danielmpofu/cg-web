<?php include "includes/nav.php";
$pageTitle = "Contact Us";
$pageDescription = "Our Contact details";
include "includes/breadcrumbs_barner.php";
?>

    <section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us__content">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20"><img
                                    src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> contact
                            us
                            with Ease</h6>
                        <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Get in Touch</h2>

                        <div class="description font-la">
                            <p><?php echo $contactUsMessage; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">
                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <h5 class="title color-d_black">Head Office</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <?php echo $address ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-home-location"></i>
                                    </div>

                                    <h5 class="title color-d_black">Operations Office</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <?php echo $address2 ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-phone"></i>
                                    </div>

                                    <h5 class="title color-d_black">Call Us Toll Free</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="tell:  <?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-email"></i>
                                    </div>

                                    <h5 class="title color-d_black">Email Us</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                                        <li><a href="mailto:<?php echo $emailSales; ?>"><?php echo $emailSales; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us end -->

    <!-- contact-us form end -->
    <section class="contact-form  mb-xs-80 mb-sm-100 mb-md-100 mb-120 overflow-hidden">
        <div id="contact-map" class="mb-sm-30 mb-xs-25"></div> <!-- contact-map -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php include "includes/contact_form.php" ?>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>