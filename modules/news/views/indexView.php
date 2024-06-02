<?php get_header() ?>

<!-- Start Page Title area-->
<div class="page-title-area">
    <div class="container">
        <div class="content text-center">
            <h1>Wind Lập Trình</h1>
            <ul class="list-unstyled">
                <li class="d-inline"><a href="index.html">Tin Tức</a></li>
                <li class="d-inline">/</li>
                <li class="d-inline active">Về chúng tôi</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center gx-xl-5">
            <div class="col-lg-8">
                <?php foreach ($getList as $item) { ?>
                    <div class="blog-description mb-50">
                        <article class="item-single">
                            <div class="image">
                                <div class="lazy-container aspect-ratio">
                                    <img class="lazyload lazy-image" src="public/images/news/<?php echo $item['image'] ?>" data-src="public/images/news/<?php echo $item['image'] ?>" alt="Blog Image">
                                </div>
                                <a href="?mod=contact&act=index" class="btn primary-btn primary-btn-2"><i class="fas fa-share-alt"></i>Tư vấn ngay</a>
                            </div>
                            <div class="content">
                                <ul class="info-list">
                                    <li><i class="far fa-calendar-alt"></i><?php echo $item['startDay'] ?></li>
                                    <li><i class="fas fa-user"></i><?php echo $item['customer'] ?></li>
                                    <li><i class="fas fa-tag"></i><?php echo $item['address'] ?></li>
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html">
                                        <?php echo $item['name'] ?>
                                    </a>
                                </h3>
                                <p>
                                    <?php echo $item['content'] ?>
                                </p>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="video-image mb-30">
                                            <a href="https://www.youtube.com/watch?v=YF6xJzbzaYs" class="youtube-popup video-btn">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <blockquote class="blockquote mb-30">
                                            <i class="fas fa-quote-left"></i>
                                            <p><?php echo $item['note'] ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                                <p class="m-0"><?php echo $item['content_new'] ?></p>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar-widget-area">
                    <div class="widget widget-search mb-30">
                        <h3 class="title">Team Wind Lập Trình</h3>
                        <form class="search-form">
                            <img src="public/images/news/contact_2.jpg" alt="">
                        </form>
                    </div>
                    <div class="widget widget-social-link mb-30">
                        <h3 class="title">Thông tin liên hệ</h3>
                        <ul class="list-unstyled m-0">
                            <li class="d-inline">
                                <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="d-inline ms-1">
                                <a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li class="d-inline ms-1">
                                <a href="https://www.google.com/" target="_blank" class="google"><i class="fab fa-google-plus-square"></i></a>
                            </li>
                            <li class="d-inline ms-1">
                                <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-post mb-30">
                        <h3 class="title">Dự án</h3>

                        <?php foreach ($getListProduct as $item) {
                            if ($item['id'] <= 4) {
                        ?>
                                <article class="article-item mb-30">
                                    <div class="image">
                                        <a href="?mod=product&act=index" class="lazy-container aspect-ratio">
                                            <img class="lazyload lazy-image" src="public/images/product/<?php echo $item['image'] ?>" data-src="public/images/product/<?php echo $item['image'] ?>" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6>
                                            <a href="?mod=product&act=index"><?php echo $item['name'] ?></a>
                                        </h6>
                                        <div class="time">
                                            <?php echo $item['startDay'] ?>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                        <?php } ?>

                    </div>
                    <div class="widget widget-categories mb-30">
                        <h3 class="title">Danh mục</h3>
                        <ul class="list-unstyled m-0">
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="http://localhost/wind-lap-trinh/wind-project/san-pham/thiet-ke-web.html"><i class="fal fa-folder"></i>Website</a>
                                <span class="tqy">(11)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="http://localhost/wind-lap-trinh/wind-project/dich-vu/phan-mem.html"><i class="fal fa-folder"></i>Software</a>
                                <span class="tqy">(02)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="http://localhost/wind-lap-trinh/wind-project/?mod=error&action=index"><i class="fal fa-folder"></i>SEO top google</a>
                                <span class="tqy">(45)</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="http://localhost/wind-lap-trinh/wind-project/dich-vu/zalo-mini-app.html"><i class="fal fa-folder"></i>Mini app</a>
                                <span class="tqy">(26)</span>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>

            <div class="col-lg-12">
                <div class="more-news mb-20">
                    <span class="h2 d-block mb-20">Sản phẩm nổi bật</span>
                    <div class="row">
                        <?php foreach ($getListProduct as $item) { ?>
                            <div class="col-md-4">
                                <article class="item-single mb-30">
                                    <div class="image">
                                        <a href="blog-details.html" class="lazy-container aspect-ratio">
                                            <img class="lazyload lazy-image" src="public/images/product/<?php echo $item['image'] ?>" data-src="public/images/product/<?php echo $item['image'] ?>" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <ul class="info-list">
                                            <li><i class="far fa-calendar-alt"></i><?php echo $item['startDay'] ?></li>
                                            <li><i class="fas fa-user"></i><?php echo $item['customer'] ?></li>
                                        </ul>
                                        <h3 class="title m-0">
                                            <a href="blog-details.html">
                                                <?php echo $item['name'] ?>
                                            </a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>

                    </div>
                </div>

                <div class="pagination mb-30">
                    <a href="#" class="page-numbers"><i class="fas fa-angle-left"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Blog Details Area -->
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