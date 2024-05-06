<?php get_header() ?>
<!-- Start Home Banner Area -->
<div class="home-banner-area banner-bg banner-8">
    <div class="container-fluid p-0">
        <div class="row align-items-center justify-content-lg-end">
            <div class="col-lg-6 left-content">
                <div class="banner-content mb-30">
                    <h1 class="title">Chào mừng đến với đội ngũ lập trình GenZ</h1>
                    <a href="contact.html" class="btn btn-2 primary-btn primary-btn-6">Trãi nghiệm ngay</a>
                </div>
            </div>
            <div class="col-lg-6 right-content">
                <div class="banner-image image-right mb-30">
                    <img src="public/images/banner/banner_wind_1.jpg" class="shadow-none" alt="Banner Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Shape -->
    <div class="bg-shape">
        <img src="public/images/banner/wave-shape-2.png" alt="wave shape">
    </div>
</div>
<!-- End Home Banner Area -->

<!-- Start Sponsor Area -->
<div id="sponsor" class="sponsor pt-120 pb-90">
    <div class="container">
        <div class="sponsor-slider owl-carousel">
            <?php foreach($getCustomer as $item){ ?>
            <div class="slider-item">
                <a href="404-error.html" class="image mb-30">
                    <img src="public/images/logo/<?php echo $item['logo'] ?>" alt="Sponsor">
                </a>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>
<!-- End Sponsor Area -->

<!-- Start Features Area -->
    <section id="features" class="main-features-area">
        <div class="pb-90">
            <div class="container">
                <div class="section-title">
                    <span class="icon">
                        <i class="fas fa-tools"></i>
                    </span>
                    <h2 class="title">Wind Lập Trình đội ngủ lập trình GenZ</h2>
                </div>
                <div class="row justify-content-center">
                <?php foreach ($post_home as $item) { ?>
                    <?php if($item['section'] === 'features'){ ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item-single mb-30">
                            <div class="icon red">
                                <img class="img-service" src="public/images/<?php echo $item['icon'] ?>" alt="Icon">
                            </div>
                            <h3><?php echo $item['title'] ?></h3>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- Divider -->
        <div class="divider">
            <div class="icon"><a href="#about"><i class="fal fa-angle-down"></i></a></div>
            <span class="line"></span>
        </div>
    </section>
<!-- End Features Area -->

<!-- Start About Area -->
<section id="about" class="about-area about-3 bg-white pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
        <?php foreach ($post_home as $item) {
            if($item['section'] == "about"){
            
            ?>

            <div class="col-lg-5">
                <div class="section-title">
                    <span class="icon ms-0">
                        <i class="<?php echo $item['icon'] ?>"></i>
                    </span>
                    <h2 class="title"><?php echo $item['title'] ?></h2>
                    <p><?php echo $item['content'] ?></p>
                </div>
                <div class="item-single mb-30">
                    <div class="icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="content">
                        <p><?php echo $item['comment'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-first">
                <div class="image image-left">
                    <img src="public/images/<?php echo $item['image'] ?>" alt="About Image">
                </div>
            </div>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start integration Area -->
<section id="integration" class="integration-area integration-4 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach($post_home as $item){ 
                if($item['section'] == 'contact'){
                ?>
            <div class="col-lg-5">
                <div class="section-title">
                    <span class="icon ms-0">
                        <i class="<?php echo $item['icon'] ?>"></i>
                    </span>
                    <h2 class="title"><?php echo $item['title'] ?></h2>
                    <p><?php echo $item['content'] ?></p>
                </div>
                <div class="item-single mb-30">
                    <div class="icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="content">
                        <p><?php echo $item['comment'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>

            <div class="col-lg-7">
                <div class="images mb-30">
                    <div class="image">
                        <img src="public/images/play-store.png" alt="Google Play Store">
                    </div>
                    <div class="image">
                        <img src="public/images/skype.png" alt="Skype">
                    </div>
                    <div class="image">
                        <img src="public/images/whatsapp.png" alt="Whatsapp">
                    </div>
                    <div class="image">
                        <img src="public/images/google.png" alt="Google">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Integration Area -->

<!-- Start Feedback Area -->
<section id="feedback" class="feedback-area feedback-3 ptb-120">
    <div class="container">
        <div class="section-top mb-20">
            <div class="section-title">
                <div class="icon ms-0"><i class="fas fa-quote-right"></i></div>
                <h2 class="title">Nhận sét từ khách hàng</h2>
            </div>
            <div id="feedbackNav" class="custom-owl-nav"></div>
        </div>
        <div class="feedback-slider-3 owl-carousel">
            <?php foreach($getCustomer as $item){ ?>
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="<?php echo $item['icon'] ?>"></i></span>
                    <h3><?php echo $item['title'] ?></h3>
                    <p class="text">
                    <?php echo $item['content'] ?>
                    </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/<?php echo $item['avatar'] ?>" data-src="public/images/<?php echo $item['avatar'] ?>" alt="Hình ảnh của khách hàng">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name"><?php echo $item['name'] ?></h5>
                            <span class="designation"><?php echo $item['note'] ?></span>
                        </div>
                    </div>
                </div>
            </div> 
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Feedback Area -->

<!-- Start Pricing Plan Area -->
<section id="pricingPlan" class="pricing-plan-area pricing-plan-3 pt-120 pb-90">
    <div class="container">
        <div class="section-title">
            <div class="icon"><i class="far fa-dollar-sign"></i></div>
            <h2 class="title">Sản Phẩm New</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="item-single mb-30">
                    <div class="image">
                        <img src="public/images/service/anh_3.jpg" alt="Illustration">
                    </div>
                    <div class="content">
                        <span class="price">$25</span>
                        <span class="type">/MO</span>
                        <span class="label">Layout Shop bán giày</span>
                        <ul class="item-list list-unstyled p-0">
                            <li>Power And Predictive Dialing</li>
                            <li>Quality & Customer Experience</li>
                            <li>24/7 phone and email support</li>
                        </ul>
                        <a href="pricing.html" class="btn btn-2 primary-btn primary-btn-6">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-single mb-30">
                    <div class="image">
                        <img src="public/images/service/anh_4.png" alt="Illustration">
                    </div>
                    <div class="content">
                        <span class="price">$35</span>
                        <span class="type">/MO</span>
                        <span class="label">LAYOUT NHÀ HÀNG HIỆN ĐẠI</span>
                        <ul class="item-list list-unstyled p-0">
                            <li>Power And Predictive Dialing</li>
                            <li>Quality & Customer Experience</li>
                            <li>24/7 phone and email support</li>
                        </ul>
                        <a href="pricing.html" class="btn btn-2 primary-btn primary-btn-6">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-single mb-30">
                    <div class="image">
                        <img src="public/images/service/anh_5.png" alt="Illustration">
                    </div>
                    <div class="content">
                        <span class="price">$45</span>
                        <span class="type">/MO</span>
                        <span class="label">LAYOUT THƯƠNG MẠI ĐIỆN TỬ</span>
                        <ul class="item-list list-unstyled p-0">
                            <li>Power And Predictive Dialing</li>
                            <li>Quality & Customer Experience</li>
                            <li>24/7 phone and email support</li>
                        </ul>
                        <a href="pricing.html" class="btn btn-2 primary-btn primary-btn-6">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Plan Area -->

<!-- Start Newsletter Area -->
<div id="newsLetterArea" class="newsletter-area newsletter-bg newsletter-2">
    <div class="section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="content mb-30">
                        <h2 class="text-white">Wind Lập Trình Đội Ngũ Lập Trình GenZ</h2>
                        <p class="text-white">Liên hệ ngay cho Wind Lập Trình để được tư vấn cho mình nha.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="newsletter-form mb-30" id="newsletterForm">
                        <div class="input-group">
                            <input class="form-control" placeholder="Enter Your Email" type="text" name="EMAIL" required="" autocomplete="off">
                            <button class="btn primary-btn primary-btn-6" type="submit">
                                Submit Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Area -->
<?php get_footer() ?>