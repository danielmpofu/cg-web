<!-- our-provide start -->
<section
        class="similar-work services-work bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-135 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employee-friendly__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="assets/img/team-details/badge-line-yellow.svg" class="img-fluid mr-10" alt="">Our Brands</span>
                    <h2 class="title color-d_black"><?php if ($showAll) {
                            echo "Our Brands";
                        } else {
                            echo "Our New Brands";
                        } ?></h2>
                </div>
            </div>
        </div>

        <div class="row mb-minus-30">
            <?php

            $f = 0;
            if ($showAll) {
                $f = sizeof($brands);
            } else {
                $f = 3;
            }

            for ($z = 0; $z < $f; $z++) {
                $brand = $brands[$z];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="similar-work__item mb-30 d-flex justify-content-between flex-column">
                        <div class="top d-flex align-items-center">
                            <div class="icon color-white text-center">
                                <img src="<?php echo $brand->aboutLink; ?>" alt="">
                            </div>

                            <h4 class="title color-secondary">
                                <a href="<?php echo $brand->logoUrl; ?>"><?php echo $brand->categoryName; ?></a></h4>
                        </div>

                        <div class="bottom">
                            <div class="media overflow-hidden">
                                <img
                                        style="padding: 20px"
                                        src="<?php echo $brand->logoUrl; ?>"
                                        class="img-fluid" alt="">
                            </div>

                            <div class="text pt-30 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la">
                                <p><?php echo $brand->description; ?></p>
                            </div>

                            <a href="<?php echo $brand->aboutLink; ?>" target="_blank"
                               class="theme-btn text-center fw-600 btn-yellow">Discover
                                More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <div class="row">
            <?php if (!$showAll) { ?>
                <div class="col-12">
                    <div class="theme-btn-wrapper mt-50 mt-md-40 mt-sm-30 mt-xs-25 text-center">
                        <a href="our_brands.php" class="theme-btn btn-transparent fw-600"><i
                                    class="far fa-sync-alt"></i>
                            Show More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

