<?php get_header() ?>
  <!-- Start Page Title area-->
  <div class="page-title-area">
        <div class="container">
            <div class="content text-center">
                <h1>Wind Lập Trình</h1>
                <ul class="list-unstyled">
                    <li class="d-inline"><a href="lien-he.html">Liên hệ</a></li>
                    <li class="d-inline">/</li>
                    <li class="d-inline active">Wind</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title area -->
    
    <!-- Start Contact Area -->
    <div id="contact" class="contact-area contact-6 pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon">
                            <i class="fal fa-phone-plus"></i>
                        </div>
                        <div class="text">
                            <p><a href="tel:+81387799985">+81 387 799 985</a></p>
                            <p><a href="tel:+81368191416">+81 368 191 416</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailTo:info.windlaptrinh@gmail.com">info.windlaptrinh@gmail.com</a></p>
                            <p><a href="mailTo:windlaptrinh.vn@gmail.com">windlaptrinh.vn@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-50">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <p>Tp. Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <form id="contactForm" action="" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="nhận tên của bạn...*" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Enter your email" placeholder="nhập email của bạn...*" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-30">
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="8" required data-error="Please enter your message" placeholder="nhập nội dung tư vấn..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="btn-add" class="btn primary-btn primary-btn-5" title="Send message">Xác nhận</button>
                                <div id="msgSubmit"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mb-30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.5407345099!2d106.36556175435443!3d10.754618130150035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1717926914293!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
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
                                Xác nhận
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

