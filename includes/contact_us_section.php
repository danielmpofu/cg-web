<section class="can-help can-help-home-3 bg-dark_white overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50">
                    <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">
                        #Your feedback matters</h2>

                    <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-50">
                        <p>
                          <?php echo $contactUsMessage;?>
                        </p>
                    </div>

                    <div class="help-text mb-md-25 mb-sm-25 mb-xs-20 mb-lg-25 mb-40">
                        <a href="contact.html"><img src="assets/img/icon/question-comment.svg"
                                                    class="img-fluid mr-xs-10 mr-20" alt="">Need help?
                            <span>Contact Us</span></a>
                    </div>

                    <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                        <a href="tel:<?php echo $phone;?>"
                           class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                            <div class="icon">
                                <i class="icon-call"></i>
                                <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                            </div>
                            <div class="text">
                                <span class="font-la mb-10 d-block fw-500 color-d_black">Call Us Anytime</span>
                                <h5 class="fw-500 color-d_black"><?php echo $phone;?></h5>
                            </div>
                        </a>

                        <a href="mailto:consulter@gmail.com"
                           class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                            <div class="icon">
                                <i class="icon-email-1"></i>
                                <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                            </div>
                            <div class="text">
                                <span class="font-la mb-10 d-block fw-500 color-d_black">Drop Us an Email</span>
                                <h5 class="fw-500 color-d_black"><?php echo $email;?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <?php include "includes/contact_form.php"; ?>

            </div>
        </div>
    </div>
</section>
