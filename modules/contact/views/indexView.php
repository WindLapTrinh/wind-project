<?php get_header() ?>

  <!-- Start Page Title area-->
  <div class="page-title-area">
        <div class="container">
            <div class="content text-center">
                <h1>Contact us</h1>
                <ul class="list-unstyled">
                    <li class="d-inline"><a href="index.html">Home</a></li>
                    <li class="d-inline">/</li>
                    <li class="d-inline active">Contact</li>
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
                            <p><a href="tel:+990123456789">+990 123 456 789</a></p>
                            <p><a href="tel:+990456123789">+990 456 123 789</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-30">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailTo:hello@example.com">hello@example.com</a></p>
                            <p><a href="mailTo:info@example.com">info@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item-single mb-50">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <p>West Palm Beach, 4669, Travis Street</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30">
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
                                <button type="submit" class="btn primary-btn primary-btn-5" title="Send message">Send Message</button>
                                <div id="msgSubmit"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mb-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57015.866600733796!2d-80.1461976445511!3d26.72868216144084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWest%20Palm%20Beach%2C%204669%2C%20Travis!5e0!3m2!1sen!2sbd!4v1653371634659!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
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