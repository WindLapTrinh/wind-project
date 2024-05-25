<?php get_header() ?>


<!-- Start Home Banner Area -->
<div class="home-banner-area banner-bg banner-6">
    <div class="container">
        <div class="banner-content text-center">
            <h1 class="title">Dịch vụ thiết kế Phần mềm</h1>
            <form id="newsletterForm" class="newsletter-form">
                <div class="input-group">
                    <input class="form-control" placeholder="Nhập Email của bạn..." type="text" name="EMAIL" required="" autocomplete="off">
                    <button class="btn primary-btn primary-btn-6" type="submit">
                        Giửi Tin Nhắn
                    </button>
                </div>
            </form>
        </div>
        <div class="banner-image">
            <img class="image-sofware" src="public/images/sofware/sofware_3.jpg" alt="Banner Image">
        </div>
    </div>
</div>
<!-- End Home Banner Area -->

<!-- Start Features Area -->
<section id="features" class="main-features-area pt-120 pb-90">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Thiết kế phần mềm thống kế doanh thu, quản lý nhân lực</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-1.png" alt="Icon">
                    </div>
                    <h3>Thống Kê Doanh Thu</h3>
                    <p>Wind Lập Trình cung cấp dịch vụ tạo phần mềm thống kê doanh thu chuyên nghiệp, giú
                        p bạn quản lý và phân tích dữ liệu một cách hiệu quả nhất.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-2.png" alt="Icon">
                    </div>
                    <h3>Phát Triển Theo Yêu Cầu</h3>
                    <p> Chúng tôi tạo ra các giải pháp phần mềm thống kê doanh thu cá nhân hóa, đáp ứng đầy đủ nhu cầu và yêu cầu riêng của từng doanh nghiệp.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-3.png" alt="Icon">
                    </div>
                    <h3>Tối Ưu Hóa Quản Lý</h3>
                    <p>Wind Lập Trình giúp bạn tối ưu hóa quản lý doanh thu thông qua việc phát triển phần mềm thống kê tiên tiến và dễ sử dụng.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-4.png" alt="Icon">
                    </div>
                    <h3>Cải Thiện Hiệu Quả Kinh Doanh</h3>
                    <p>Với phần mềm thống kê doanh thu từ chúng tôi, doanh nghiệp của bạn sẽ có những quyết định kinh doanh đúng đắn và hiệu quả hơn.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-5.png" alt="Icon">
                    </div>
                    <h3>Giải Pháp Phần Mềm </h3>
                    <p>Wind Lập Trình phát triển các giải pháp phần mềm thống kê doanh thu linh hoạt, tương thích trên nhiều nền tảng, từ máy tính đến thiết bị di động.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/icon-6.png" alt="Icon">
                    </div>
                    <h3>AI Phần Mềm Tiên Tiến</h3>
                    <p>Chúng tôi cung cấp các giải pháp phần mềm thống kê doanh thu tiên tiến, giúp bạn quản lý doanh thu một cách thông minh và hiệu quả.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start About Area -->
<section id="about" class="about-area pt-120 pb-90">
    <div class="container">
        <?php foreach ($getServiceSoftware as $item) {
            if ($item['section'] == 'software' && $item['category'] == 'solution') {
        ?>
                <div class="row align-items-center gx-xl-5">
                    <div class="col-lg-7">
                        <div class="image image-left mb-30">
                            <img src="public/images/sofware/<?php echo $item['image'] ?>" alt="about Image">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title">
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <?php foreach ($getContentServiceSoftware as $itemContent) {
                            if (($item['category'] == 'solution' && $itemContent['category'] == 'solution') && ($item['section'] == 'software' && $itemContent['section'] == 'software')) {
                        ?>
                                <div class="item-single mb-30">
                                    <div class="icon">
                                        <i class="<?php echo $itemContent['icon'] ?>"></i>
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $itemContent['name'] ?></h3>
                                        <p><?php echo $itemContent['content'] ?></p>
                                    </div>
                                </div>
                            <?php }  ?>
                        <?php }  ?>


                        <div class="cta-btns mb-30">
                            <a href="contact.html" class="btn secondary-btn secondary-btn-2">Giửi Tin Nhắn</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</section>
<!-- End About Area -->

<!-- Start Integration Area -->
<section id="integration" class="integration-area integration-2 pt-120 pb-90">
    <div class="container-fluid p-0">
        <div class="row align-items-center justify-content-lg-end gx-xl-5">
            <?php foreach ($getServiceSoftware as $item) {
                if ($item['section'] == 'software' && $item['category'] == 'analysis') {
            ?>
                    <div class="col-lg-6 left-content">
                        <div class="section-title">
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <?php foreach ($getContentServiceSoftware as $itemContent) {
                                if (($item['section'] == 'software' && $itemContent['section'] == 'software') && ($item['category'] == 'analysis' && $itemContent['category'] == 'analysis')) {
                            ?>
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="item-single mb-30">
                                            <div class="icon">
                                                <i class="<?php echo $itemContent['icon'] ?>"></i>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $itemContent['content'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-6 right-content">
                        <div class="image mb-30">
                            <img src="public/images/sofware/<?php echo $item['image'] ?>" alt="integration Image">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>
<!-- End Integration Area -->

<!-- Start Choose Area -->
<section id="choose" class="choose-area choose-2">
    <div class="container">
        <div class="row align-items-center gx-xl-5">
            <?php foreach ($getServiceSoftware as $item) {
                if ($item['section'] == 'software' && $item['category'] == 'manager') {
            ?>
                    <div class="col-lg-5">
                        <div class="section-title">
                            <span class="tag"><?php echo $item['note'] ?></span>
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <?php foreach ($getContentServiceSoftware as $itemContent) { 
                                if(($item['section'] == $itemContent['section'] ) && ($item['category'] == $itemContent['category'])){
                            ?>
                                <div class="col-md-12 col-sm-6">
                                    <div class="item-single mb-30">
                                        <div class="icon blue bg-blue">
                                            <i class="<?php echo $itemContent['icon'] ?>"></i>
                                        </div>
                                        <div class="content">
                                            <h3><?php echo $itemContent['name'] ?></h3>
                                            <p><?php echo $itemContent['content'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="image image-right mb-30">
                            <div class="lazy-container aspect-ratio aspect-ratio-4-3">
                                <img class="lazyload lazy-image" src="public/images/sofware/<?php echo $item['image'] ?>" data-src="public/images/sofware/<?php echo $item['image'] ?>" alt="Choose Image">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <!-- Bg Shape -->
    <div class="bg-image">
        <img src="public/images/choose-bg.png" alt="wave shape">
    </div>
</section>
<!-- End Choose ARea -->

<!-- Start Fun-fact Area -->
<section id="funFact" class="fun-fact-area fun-fact-2 mb-1">
    <div class="container-sm">
        <div class="row text-center justify-content-center">
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">2</span>K+</h3>
                    <span>Người sử dụng</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">600</span>+</h3>
                    <span>Lượt đánh giá</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">13</span>+</h3>
                    <span>Đối tác</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun-fact Area -->
<section id="contact" class="contact-area ptb-120">
    <div class="container">
        <div class="section-title">
            <h2 class="title text-white">Contact us</h2>
            <p class="text-white">Samu lets you manage software development and track bugs. Samu's streamlined design is built for speed and efficiency helping high performing team.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-30">
                                <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="Your Name*" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-30">
                                <input type="email" name="email" class="form-control" id="email" required data-error="Enter your email" placeholder="Your Email*" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-30">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="8" required data-error="Please enter your message" placeholder="Your Message..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn primary-btn" title="Send message">Send Message</button>
                            <div id="msgSubmit"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
<?php get_footer() ?>