<?php get_header() ?>

<!-- Start Home Banner Area -->
<div class="home-banner-area banner-bg banner-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content mb-30">
                    <h1 class="title">Chúng tôi nhận thiết kế gia công sản phẩm theo yêu cầu của khách hàng</h1>
                    <p class="text">Áp dụng công nghệ hoàn toàn mới, giao diện chuẩn SEO google, sản phẩm độc đáo, sáng tạo, mới lạ.</p>
                    <div class="cta-btns">
                        <a href="contact.html" class="btn primary-btn">Sản phẩm News</a>
                        <a href="https://www.youtube.com/watch?v=YF6xJzbzaYs&ab_channel=WindLậpTrình" class="btn secondary-btn youtube-popup"><i class="fas fa-play-circle"></i>Video Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-image image-right mb-30">
                    <img src="public/images/price/price_1.png" class="shadow-none" alt="Banner Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home Banner Area -->

<!-- Start Features Area -->
<section id="features" class="main-features-area main-features-2">
    <div class="ptb-90">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Wind Lập Trình</h2>
                <p>Chúng tôi cung cấp những sản phẩm chất lượng, độc đáo, sáng tạo, chúng tôi thiết kế theo yêu cầu của khách hàng đặt trãu nghiệm người dùng lên hàng đầu.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon blue bg-blue"><i class="fal fa-crop"></i></div>
                        <h3>Thiết kế phần mềm </h3>
                        <p>Chúng tôi nhận thiết kế phần mềm theo yêu cầu của khách hàng đa lĩnh vực, đa ngành nghề.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon yellow bg-yellow"><i class="fal fa-chart-network"></i></div>
                        <h3>Thiết kế website</h3>
                        <p>Chúng tôi nhận thiết kế website đa ngành nghề, đa lĩnh vực thiết kế chuẩn SEO google.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon green bg-green"><i class="fal fa-file-certificate"></i></div>
                        <h3>SEO top Google</h3>
                        <p>Chúng nhận seo website top google nhận website thiết kế chuẩn SEO.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon red bg-red"><i class="fal fa-user-headset"></i></div>
                        <h3>Thiết kế Mini App</h3>
                        <p>Chúng tôi nhận thiết mini app zalo theo nhu cầu của khách hàng, nhằm maketing bên Zalo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Divider -->
    <div class="divider">
        <div class="icon"><a href="#integration"><i class="fal fa-angle-down"></i></a></i></div>
        <span class="line"></span>
    </div>
</section>
<!-- End Features Area -->

<!-- Start integration Area -->

<!-- End Integration Area -->

<!-- Start About Area -->
<section id="about" class="about-area about-2 pb-90">
    <div class="container-fluid p-0">
        <?php foreach ($getList as $item) {
            if ($item['section'] == 'contact') {
        ?>
                <div class="row align-items-center justify-content-lg-end">
                    <div class="col-lg-auto left-content">
                        <div class="section-title">
                            <h2 class="title"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <?php foreach ($getListContent as $itemContent) {
                            if ($item['category'] == $itemContent['category']) {
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
                                <!-- <hr class="mt-0 mb-30"> -->
                            <?php } ?>
                        <?php } ?>

                    </div>
                    <div class="col-lg-6 right-content">
                        <div class="image mb-30">
                            <img src="public/images/price/<?php echo $item['image'] ?>" alt="about Image">
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
<!-- End About Area -->

<!-- Start Integrations Area -->
<section id="integration" class="integration-area pt-120 pb-90">
    <div class="container">
        <div class="section-title">
            <span class="tag">Wind Lập Trình</span>
            <h2 class="title">Hãy dến với chúng tôi</h2>
        </div>
        <div class="row justify-content-center gx-xl-5">
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/git.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Tư duy thiết kế sáng tạo</h3>
                        <p>Áp dụng phương pháp thiết kế tư duy (design thinking) để hiểu sâu sắc nhu cầu và mong muốn của người dùng.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/slack.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Công nghệ tiên tiến</h3>
                        <p>Công nghệ hiện đại được tích hợp để mang lại những tính năng ưu việt và hiệu suất cao nhất cho sản phẩm.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-single mb-30">
                    <div class="icon">
                        <img src="public/images/trello.png" alt="Git">
                    </div>
                    <div class="content">
                        <h3>Quy trình phát triển</h3>
                        <p>Sử dụng các phương pháp quản lý dự án để đảm bảo quy trình phát triển sản phẩm linh hoạt, hiệu quả.</p>
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
        <?php foreach ($getList as $item) {
            if ($item['section'] == 'creative') {
        ?>
                <div class="row align-items-center gx-xl-5">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <span class="tag"><?php echo $item['note'] ?></span>
                            <h2 class="title"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <?php foreach ($getListContent as $itemContent) {
                                if ($item['category'] == $itemContent['category']) {
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
                                <img class="lazyload lazy-image" src="public/images/<?php echo $item['image'] ?>" data-src="public/images/price/<?php echo $item['image'] ?>" alt="Choose Image">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</section>
<!-- End Choose ARea -->

<!-- Start About Area -->
<section id="about" class="about-area pt-120 pb-90">
    <div class="container">
        <?php foreach ($getList as $item) {
            if ($item['section'] == 'technology') {
        ?>
                <div class="row align-items-center gx-xl-5">
                    <div class="col-lg-7">
                        <div class="image image-left mb-30">
                            <img src="public/images/price/<?php echo $item['image'] ?>" alt="about Image">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title">
                            <h2 class="title"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <?php foreach ($getListContent as $itemContent) {
                            if ($item['category'] == $itemContent['category']) {
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
                            <?php } ?>
                        <?php } ?>
                        <div class="cta-btns mb-30">
                            <a href="contact.html" class="btn secondary-btn secondary-btn-2">Liên hệ ngay</a>
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
        <?php foreach ($getList as $item) {
            if ($item['section'] == 'process') {
        ?>
                <div class="row align-items-center justify-content-lg-end gx-xl-5">
                    <div class="col-lg-6 left-content">
                        <div class="section-title">
                            <h2 class="title"><?php echo $item['name'] ?></h2>
                            <p><?php echo $item['content'] ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <?php foreach ($getListContent as $itemContent) {
                                if ($item['category'] == $itemContent['category']) {
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
                            <img src="public/images/price/<?php echo $item['image'] ?>" alt="integration Image">
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
<!-- End Integration Area -->
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