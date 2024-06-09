<?php get_header() ?>
<!-- Start Home Banner Area -->
<div class="home-banner-area banner-bg overflow-visible">
    <div class="container">
        <div class="banner-content text-center mb-50">
            <span class="tag">
                <span class="icon"><i class="fas fa-bolt"></i></span> # Đội ngũ Lập Trình GenZ
            </span>
            <h1 class="title">Thiết kế website chất lượng, độc đáo từ Wind Lập Trình.</h1>
            <p class="text text-white mx-auto">Wind Lập Trình tạo ra các trang web đẹp mắt, dễ sử dụng và tối ưu hóa cho mọi thiết bị, giúp doanh nghiệp nổi bật trên mạng.</p>
            <div class="cta-btns">
                <a href="contact.html" class="btn primary-btn">Sản phẩm News</a>
                <a href="https://www.youtube.com/watch?v=YF6xJzbzaYs&ab_channel=WindLậpTrình" class="btn secondary-btn youtube-popup"><i class="fas fa-play-circle"></i>Video Design</a>
            </div>
        </div>
        <div class="banner-image image-bottom">
            <img class="banner-website" src="public/images/service/web_1.jpg" alt="Banner Background">
        </div>
    </div>
    <!-- Shape -->
    <div class="shape">
        <img class="shape-1" src="public/images/triangle.png" alt="Shape">
        <img class="shape-2" src="public/images/circle.png" alt="Shape">
        <img class="shape-3" src="public/images/rectengle.png" alt="Shape">
        <img class="shape-4" src="public/images/rectengle.png" alt="Shape">
        <img class="shape-5" src="public/images/circle.png" alt="Shape">
        <img class="shape-6" src="public/images/triangle.png" alt="Shape">
    </div>
</div>
<!-- End Home Banner Area -->

<!-- Start Integrations Area -->
<section id="integration" class="integration-area pt-120 pb-90">
    <div class="container">
        <div class="section-title">
            <span class="tag">Wind Lập Trình</span>
            <h2 class="title">Dịch vụ thiết kế Website theo yêu cầu</h2>
        </div>
        <div class="row justify-content-center gx-xl-5">
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/git.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Github</h3>
                        <p>Bạn có thể xem những website bên Wind để chế độ public cho coder </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/slack.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Slack</h3>
                        <p>Tự động hóa các tác vụ thường ngày với sức mạnh của AI tạo ra</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/trello.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Trello</h3>
                        <p>Nền tảng dựa trên web giúp bạn sắp xếp các tác vụ, đồng đội và công cụ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Integrations Area -->

<!-- Start Choose Area -->
<section id="choose" class="choose-area">
    <div class="container">
        <div class="row align-items-center gx-xl-5">
            <div class="col-lg-5">
                <?php foreach ($getServiceWebsite as $item) {
                    if ($item['section'] == 'website' && $item['category'] == 'analysis') {
                ?>
                        <div class="section-title">
                            <span class="tag"><?php echo $item['note'] ?></span>
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php foreach ($getServiceWebsite as $item) { ?>
                    <?php foreach ($getContentServiceWeb as $itemContent) {
                        if (($item['category'] == 'analysis' && $itemContent['category'] == 'analysis') && ($item['section'] == 'website' && $itemContent['section'] == 'website')) {
                    ?>
                            <div class="row justify-content-center">
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

                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>

            <?php foreach ($getServiceWebsite as $item) {
                if ($item['section'] == 'website' && $item['category'] == 'analysis') {
            ?>
                    <div class="col-lg-7">
                        <div class="image image-right mb-30">
                            <div class="lazy-container aspect-ratio aspect-ratio-4-3">
                                <img class="lazyload lazy-image image-content" src="public/images/service/<?php echo $item['image'] ?>" data-src="public/images/service/<?php echo $item['image'] ?>" alt="Choose Image">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>
<!-- End Choose ARea -->

<!-- Start About Area -->
<section id="about" class="about-area pt-120 pb-90">
    <div class="container">
        <?php foreach ($getServiceWebsite as $item) {
            if ($item['section'] == 'website' && $item['category'] == 'optimum') {
        ?>
                <div class="row align-items-center gx-xl-5">
                    <div class="col-lg-7">
                        <div class="image image-left mb-30">
                            <img src="public/images/service/<?php echo $item['image'] ?>" alt="about Image">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title">
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <?php foreach ($getContentServiceWeb as $itemContent) {
                            if (($item['category'] == 'optimum' && $itemContent['category'] == 'optimum') && ($item['section'] == 'website' && $itemContent['section'] == 'website')) {

                        ?>
                                <div class="item-single mb-30">
                                    <div class="icon">
                                        <i class="fal fa-webcam"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Nội Dung Chất Lượng</h3>
                                        <p>Business Analytics không chỉ tạo ra giao diện mỹ quan mà còn phát triển nội dung hấp dẫn, phản ánh đúng giá trị và thông điệp của doanh nghiệp bạn, từ đó tạo ra trải nghiệm người dùng độc đáo và gắn kết.</p>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <div class="cta-btns mb-30">
                            <a href="contact.html" class="btn secondary-btn secondary-btn-2">Tư Vấn Ngay</a>
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
            <?php foreach ($getServiceWebsite as $item) {
                if ($item['section'] == 'website' && $item['category'] == 'seo') {
            ?> <div class="col-lg-6 left-content">
                        <div class="section-title">
                            <h2 class="name"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <?php foreach ($getContentServiceWeb as $itemContent) {
                                if (($item['category'] == 'seo' && $itemContent['category'] == 'seo') && ($item['section'] == 'website' && $itemContent['section'] == 'website')) {
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
                    <div class="col-lg-6 -content">
                        <div class="image mb-30">
                            <img src="public/images/service/<?php echo $item['image'] ?>" alt="integration Image">
                        </div>
                    </div>
        </div>
    <?php } ?>
<?php } ?>
    </div>
</section>
<!-- End Integration Area -->

<!-- Start Features Area -->
<section id="features" class="features-area">
    <div class="section-gap">
        <div class="container">
            <div class="section-title">
                <span class="tag text-white">Wind Lập Trình</span>
                <h2 class="title text-white">Đội ngũ Lập Trình GenZ</h2>
                <p class="text-white">Wind Lập Trình tự hào với đội ngũ Lập Trình GenZ đầy năng động và sáng tạo. Chúng tôi kết hợp sự trẻ trung, đam mê công nghệ và kiến thức chuyên môn để mang đến các giải pháp lập trình đỉnh cao và tiên tiến nhất cho khách hàng.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon blue"><i class="fal fa-laptop"></i></div>
                        <h3>Dịch Vụ Thiết Kế Website</h3>
                        <p>Wind Lập Trình cung cấp dịch vụ thiết kế website chuyên nghiệp, tạo ra các trang web đẹp mắt, tối ưu hóa trải nghiệm người dùng và tăng khả năng tương tác.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon yellow"><i class="fal fa-th-list"></i></div>
                        <h3>Phát Triển Ứng Dụng</h3>
                        <p>Với kỹ năng và kinh nghiệm sâu rộng, Wind Lập Trình phát triển các ứng dụng di động
                            tùy chỉnh, từ những ứng dụng đơn giản đến các ứng dụng phức tạp.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon red"><i class="fal fa-users"></i></div>
                        <h3>Tối Ưu Hóa SEO và Dịch Vụ </h3>
                        <p>Wind Lập Trình cung cấp dịch vụ tối ưu hóa SEO và tiếp thị trực tuyến, giúp doanh
                            nghiệp tăng cường sự hiện diện trực tuyến, thu hút khách hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Fun-fact Area -->
<section id="funFact" class="fun-fact-area pb-90">
    <div class="container-sm">
        <div class="row text-center justify-content-center">
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">20</span>+</h3>
                    <span>Thiết kế Website</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">10</span>+</h3>
                    <span>Mini App</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-single mb-30">
                    <h3><span class="counter">25</span>+</h3>
                    <span>SEO Google</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun-fact Area -->
<!-- Start Contact Area -->
<section id="contact" class="contact-area ptb-120">
    <div class="container">
        <div class="section-title">
            <h2 class="title text-white">Liên hệ Wind Lập Trình</h2>
            <p class="text-white"> Chúng tôi là đội ngũ chuyên nghiệp, cam kết đem lại dịch vụ tốt nhất cho khách hàng.Wind Lập Trình luôn tạo ra các giải pháp sáng tạo và linh hoạt, phù hợp với mọi nhu cầu của khách hàng. Từ thiết kế website, phát triển ứng dụng di động đến tối ưu hóa SEO và tiếp thị trực tuyến, chúng tôi đáp ứng đầy đủ mọi yêu cầu của doanh nghiệp.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-30">
                                <input type="text" name="name" class="form-control" id="name" required data-error="Tên không được để trống" placeholder="Tên của bạn..." />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-30">
                                <input type="email" name="email" class="form-control" id="email" required data-error="Email không được để trống" placeholder="Nhập Email của bạn..." />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-30">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="8" required data-error="Nội dung không được để trống" placeholder="Nhập nội dung của bạn..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn primary-btn" title="Send message">Giửi Tin Nhắn</button>
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