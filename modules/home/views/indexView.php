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
            <div class="slider-item">
                <a href="404-error.html" class="image mb-30">
                    <img src="public/images/logo/casa_viet.png" alt="Sponsor">
                </a>
            </div>
            <div class="slider-item">
                <a href="404-error.html" class="image mb-30">
                    <img src="public/images/logo/nail_nellies.png" alt="Sponsor">
                </a>
            </div>
            <div class="slider-item">
                <a href="404-error.html" class="image mb-30">
                    <img src="public/images/sponsor-3.png" alt="Sponsor">
                </a>
            </div>
            <div class="slider-item">
                <a href="404-error.html" class="image mb-30">
                    <img src="public/images/sponsor-4.png" alt="Sponsor">
                </a>
            </div>
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
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="fas fa-quote-right"></i></span>
                    <h3>Ứng dụng dịch vụ nổi bật</h3>
                    <p class="text">
                        Wind Lập Trình đã mang đến cho chúng tôi những dịch vụ vượt trội với chất lượng không ngừng được nâng cao. Chúng tôi hoàn toàn hài lòng với sự chuyên nghiệp và tận tâm của đội ngũ Wind. Wind Lập Trình cho bất kỳ ai đang tìm kiếm dịch vụ chất lượng.
                    </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/icon-khach-hang.png" data-src="public/images/icon-khach-hang.png" alt="Hình ảnh của khách hàng">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name">Nhà hàng CasaViet</h5>
                            <span class="designation">Thiết kế giao diện website nhà hàng</span>
                        </div>
                    </div>
                </div>
            </div> <!-- Slider Item-->
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="fas fa-quote-right"></i></span>
                    <h3>Thiết kế Website</h3>
                    <p class="text">
                        Chúng tôi rất hạnh phúc với trải nghiệm làm việc với đội ngũ tại Wind Lập Trình. Họ đã đem đến cho chúng tôi một trang web đẹp mắt và chuyên nghiệp, phản ánh đúng với tinh thần và dịch vụ mà chúng tôi cung cấp
                    </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/icon-khach-hang.png" data-src="public/images/icon-khach-hang.png" alt="Person Image">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name">Nellie's Hair & Nail Specialists</h5>
                            <span class="designation">Thiết kế Website tiệm Nail</span>
                        </div>
                    </div>
                </div>
            </div> <!-- Slider Item-->
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="fas fa-quote-right"></i></span>
                    <h3>App bán hàng online</h3>
                    <p class="text">
                        Tôi đã sử dụng ứng dụng bán hàng trực tuyến này trong một thời gian và tôi rất ấn tượng
                        với trải nghiệm của App do Wind thiết kế. Giao diện người dùng thân thiện và dễ sử dụng, cho phép tôi
                        dễ dàng duyệt qua các danh mục sản phẩm và tìm kiếm.
                    </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/icon-khach-hang.png" data-src="public/images/icon-khach-hang.png" alt="Person Image">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name">Shop HoangAnh</h5>
                            <span class="designation">Mini app bán hàng Online</span>
                        </div>
                    </div>
                </div>
            </div> <!-- Slider Item-->
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="fas fa-quote-right"></i></span>
                    <h3>Thiết kế Website</h3>
                    <p class="text">
                        Tôi đã sử dụng dịch vụ thiết kế website từ Wind cho cửa hàng linh kiện ô tô của mình và rất hài lòng với kết quả. Trang web được thiết kế một cách chuyên nghiệp và hiện đại, giúp khách hàng dễ dàng tìm kiếm và mua sắm sản phẩm. </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/icon-khach-hang.png" data-src="public/images/icon-khach-hang.png" alt="Person Image">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name">Oto Đoàn Long</h5>
                            <span class="designation">Thiết kế Website linh kiện oto</span>
                        </div>
                    </div>
                </div>
            </div> <!-- Slider Item-->
            <div class="slider-item">
                <div class="slider-item-inner">
                    <span class="quote"><i class="fas fa-quote-right"></i></span>
                    <h3>Thiết kế Website</h3>
                    <p class="text">
                        Chelsea Ho đã sử dụng dịch vụ thiết kế website cho sản phẩm chai lọ in ấn từ Wind
                        và không thể hài lòng hơn với kết quả. Trang web được thiết kế một cách chuyên
                        nghiệp và tinh tế, phản ánh đúng với chất lượng cao cấp của sản phẩm.
                    </p>
                    <div class="client">
                        <div class="image">
                            <div class="lazy-container aspect-ratio aspect-ratio-1-1">
                                <img class="lazyload lazy-image" src="public/images/icon-khach-hang.png" data-src="public/images/icon-khach-hang.png" alt="Person Image">
                            </div>
                        </div>
                        <div class="content">
                            <h5 class="name">Chelsea Ho</h5>
                            <span class="designation">Thiết kế website chai lọ in ấn</span>
                        </div>
                    </div>
                </div>
            </div> <!-- Slider Item-->
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