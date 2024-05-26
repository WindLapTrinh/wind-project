<?php get_header() ?>

<!-- Start Page Title area-->
<div class="page-title-area">
    <div class="container">
        <div class="content text-center">
            <h1>Blog Details</h1>
            <ul class="list-unstyled">
                <li class="d-inline"><a href="index.html">Home</a></li>
                <li class="d-inline">/</li>
                <li class="d-inline active">Blog Details</li>

            </ul>
        </div>
    </div>
</div>
<!-- End Page Title area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center gx-xl-5">
            <div class="col-lg-12">
                <!-- can lay -->
                <div class="more-news mb-20">

                    <span class="h2 d-block mb-20">Danh mục Website</span>
                    <div class="row">
                        <?php foreach ($getProductWebsite as $item) {
                            if ($item['section'] == 'website') {
                        ?>
                                <div class="col-md-4">
                                    <article class="item-single mb-30">
                                        <div class="image">
                                            <a href="blog-details.html" class="lazy-container aspect-ratio">
                                                <img class="lazyload lazy-image" src="public/images/product/<?php echo $item['image'] ?>" data-src="public/images/product/<?php echo $item['image'] ?>" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <ul class="info-list">
                                                <li><i class="far fa-calendar-alt"></i> <?php echo $item['startDay'] ?></li>
                                                <li><i class="fas fa-user"></i> <?php echo $item['customer'] ?></li>
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
                        <?php } ?>


                    </div>
                </div>
                <!-- end  -->
            </div>

        </div>
    </div>
</div>
<!-- End Blog Details Area -->

<?php get_footer() ?>