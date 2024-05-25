<?php get_header()  ?>

<!-- Start Home Banner Area -->
<div class="home-banner-area banner-bg banner-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content mb-30">
                    <h1 class="title mb-20">Tích hợp Zalo mini App trên nền tảng kinh doanh Online</h1>
                    <ul class="info-list list-unstyled text-white mb-20">
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>Website và mini app
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>Gia tăng doanh số
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>Công nghệ hiện đại
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>Tiện ích thanh toán
                        </li>
                    </ul>
                    <div class="cta-btns">
                        <a href="contact.html" class="btn secondary-btn">Tư Vấn Ngay</a>
                        <a href="https://www.youtube.com/watch?v=dxfuUwcqvKk" class="btn icon-btn youtube-popup"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-image image-right mb-30">
                    <img class="image-zalo" src="public/images/zalo/zalo_3.jpg" class="shadow-none" alt="Banner Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Shape -->
    <div class="bg-shape">
        <img src="public/images/banner/wave-shape-3.png" alt="wave shape">
    </div>
</div>
<!-- End Home Banner Area -->

<!-- Start Features Area -->
<section id="features" class="main-features-area main-features-3">
    <div class="pt-120 pb-90">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Zalo Mini App</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon"><i class="fal fa-crop"></i></div>
                        <h3>Đối Tượng Khách Hàng</h3>
                        <p>Với hơn 100 triệu người dùng Zalo, việc tích hợp mini app Zalo vào website bán hàng giúp doanh nghiệp tiếp cận một đối tượng khách hàng rất lớn.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon"><i class="fal fa-chart-network"></i></div>
                        <h3>Tính Năng Xã Hội</h3>
                        <p>Zalo có các tính năng xã hội như chat, chia sẻ sản phẩm, tương tác với bạn bè. Việc tích hợp mini app Zalo giúp tăng tương tác và thúc đẩy bán hàng.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon"><i class="fal fa-file-certificate"></i></div>
                        <h3>Thuận tiện cho người dùng</h3>
                        <p>Người dùng Zalo có thể trải nghiệm mua sắm một cách dễ dàng và thuận tiện mà không cần phải chuyển sang ứng dụng hoặc website khác.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Divider -->
    <div class="divider">
        <div class="icon"><a href="#services"><i class="fal fa-long-arrow-down"></i></a></i></div>
        <span class="line"></span>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Services Area -->
<section id="services" class="services-area pt-120 pb-90">
    <div class="container">
        <?php foreach ($getServiceZalo as $item) {
            if ($item['section'] == 'zalo' && $item['category'] == 'manager') {
        ?>
                <div class="row align-items-center gx-xl-5">
                    <div class="col-lg-6">
                        <div class="content mb-30">
                            <div class="section-title">
                                <h2 class="name"><?php echo $item['name'] ?></h2>
                                <p><?php echo $item['content'] ?></p>
                                <a href="404-error.html" class="btn primary-btn primary-btn-8">Giửi Tin Nhắn</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-first">

                        <div class="row justify-content-center">
                            <?php foreach ($getContentServiceZalo as $itemContent) {
                                if (($item['section'] == $itemContent['section']) && ($item['category'] == $itemContent['category'])) {
                            ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="<?php echo $itemContent['style'] ?>">
                                            <div class="icon"><i class="<?php echo $itemContent['icon'] ?>"></i></div>
                                            <h3><?php echo $itemContent['name'] ?></h3>
                                            <p><?php echo $itemContent['content'] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Promo Area -->
<section id="promo" class="promo-area">
    <div class="container">
        <?php foreach ($getServiceZalo as $item) {
            if ($item['section'] == 'zalo' && $item['category'] == 'contact') {
        ?>
                <div class="promo pb-90">
                    <div class="row align-items-center justify-content-center gx-xl-5">
                        <div class="col-lg-7">
                            <div class="image mb-30">
                                <img src="public/images/zalo/<?php echo $item['image'] ?>" alt="Promo Image">
                            </div>
                        </div>
                        <div class="<?php echo $item['style'] ?>">
                            <div class="content mb-30">
                                <h2 class="title mb-30"><?php echo $item['name'] ?></h2>
                                <p class="mb-30"><?php echo $item['content'] ?></p>
                                <a href="contact.html" class="btn primary-btn primary-btn-8">Giửi Tin Nhắn</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>


    </div>
</section>
<!-- End Promo Area -->

<!-- Start Integration Area -->
<section id="integration" class="integration-area integration-5 pt-120 pb-90">
    <div class="container-fluid p-0">
        <div class="row align-items-center justify-content-lg-end">
            <?php foreach ($getServiceZalo as $item) {
                if ($item['section'] == 'zalo' && $item['category'] == 'miniapp') {
            ?>
                    <div class="col-lg-3 left-content">
                        <div class="content mb-30">
                            <h2 class="title text-white"><?php echo $item['name'] ?></h2>
                            <p class="text-white"><?php echo $item['content'] ?></p>

                            <ul class="info-list list-unstyled text-white mb-30">
                                <?php foreach ($getContentServiceZalo as $itemContent) {
                                    if ($item['section'] == $itemContent['section'] && $item['category'] == $itemContent['category']) {
                                ?>
                                        <li><i class="<?php echo $itemContent['icon']?>"></i><?php echo $item['content'] ?></li>
                                    <?php } ?>
                                <?php } ?>

                            </ul>

                            <a href="contact.html" class="btn secondary-btn">Liên Hệ Ngay</a>
                            <div class="client">
                                <h6 class="text-white"><?php echo $item['note'] ?></h6>
                                <span class="text-white"><i><small><?php echo $item['icon'] ?></small></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 right-content">
                        <div class="image mb-30">
                            <img src="public/images/zalo/<?php echo $item['image'] ?>" alt="integration Image">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>
<!-- End Integration Area -->

<!-- Start Pricing Plan Area -->
<!-- <section id="pricingPlan" class="pricing-plan-area pricing-plan-4 bg-white pt-120 pb-90">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Our pricing plan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="item-single mb-30">
                        <div class="top-content">
                            <span class="label">Basic Plan</span>
                            <h3 class="price">$49.00</h3>
                            <span class="date">Billed Monthly</span>
                        </div>
                        <div class="content">
                            <ul class="item-list list-unstyled">
                                <li>Push Notifications</li>
                                <li>Offline Synchronization</li>
                                <li>SQL Database</li>
                                <li>Speech & Text about</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="pricing.html" class="btn primary-btn primary-btn-8">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item-single mb-30">
                        <div class="top-content">
                            <span class="label">Stander Plan</span>
                            <h3 class="price">$59.00</h3>
                            <span class="date">Billed Monthly</span>
                        </div>
                        <div class="content">
                            <ul class="item-list list-unstyled">
                                <li>Push Notifications</li>
                                <li>Offline Synchronization</li>
                                <li>SQL Database</li>
                                <li>Speech & Text about</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="pricing.html" class="btn primary-btn primary-btn-8">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item-single mb-30">
                        <div class="top-content">
                            <span class="label">Premeium Plan</span>
                            <h3 class="price">$69.00</h3>
                            <span class="date">Billed Monthly</span>
                        </div>
                        <div class="content">
                            <ul class="item-list list-unstyled">
                                <li>Push Notifications</li>
                                <li>Offline Synchronization</li>
                                <li>SQL Database</li>
                                <li>Speech & Text about</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="pricing.html" class="btn primary-btn primary-btn-8">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Pricing Plan Area -->

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