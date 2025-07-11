

<?php
if ($this->uri->uri_string() == '') {
    $home = true;
} else {
    $home = false;
}
?>

<?php foreach ($basicinfo as $basic)

    ?>
<!-- Footer Widget Area
        ======================= -->
        <footer>
            <div class="footer-area text-white">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 order-xl-1 order-lg-1 order-md-1 mb-xxl-0 mb-xl-0 mb-lg-5 mb-md-5 mb-sm-5 mb-5">
                                <div class="footer-widget">
                                    <div class="fw-logo mb-25">
                                        <a href="index-2.html"><img src="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->logo;?>" alt="Blessed"></a>
                                    </div>
                                    <div class="footer-content">
                                        <div class="footer-info-list">
                                            <ul class="list-wrap fs-6">
                                                <li>
                                                    <div class="icon">
                                                        <i class="size-16" data-feather="phone-call"></i>
                                                    </div>
                                                    <div class="content">
                                                        <a href="tel:2295550109" class="text-white fs-6">(229) 555-0109</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="size-16" data-feather="map-pin"></i>
                                                    </div>
                                                    <div class="content">
                                                        <span class="fs-6">2118 Thornridge Cir. Syracuse, Connecticut
                                                            35624</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer-social mt-4">
                                            <h5 class="font-body fw-600 fs-6 fs-6 text-white mb-2">Follow Us</h5>
                                            <ul class="list-wrap">
                                                <li><a href="javascript:"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 order-xl-2 order-lg-3 order-md-3 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                                <div class="footer-link-list">
                                    <div class="footer-widget">
                                        <h4 class="font-body mb-4 text-white fs-18px">About Us</h4>
                                        <ul class="list-wrap">
                                            <li><a href="javascript:">Worship</a></li>
                                            <li><a href="javascript:">Sermons</a></li>
                                            <li><a href="javascript:">Events</a></li>
                                            <li><a href="javascript:">Outreach</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 order-xl-3 order-lg-4 order-md-4 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                                <div class="footer-link-list">
                                    <div class="footer-widget">
                                        <h4 class="font-body mb-4 text-white fs-18px">Links</h4>
                                        <ul class="list-wrap">
                                            <li><a href="javascript:">Donate</a></li>
                                            <li><a href="javascript:">Leadership</a></li>
                                            <li><a href="javascript:">Youth Programs</a></li>
                                            <li><a href="javascript:">Testimonials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 order-xl-4 order-lg-5 order-md-5 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                                <div class="footer-link-list">
                                    <div class="footer-widget">
                                        <h4 class="font-body mb-4 text-white fs-18px">Support</h4>
                                        <ul class="list-wrap">
                                            <li><a href="javascript:">Services</a></li>
                                            <li><a href="javascript:">Assistance</a></li>
                                            <li><a href="javascript:">Crisis Hotline</a></li>
                                            <li><a href="javascript:">Spiritual Guidance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-12 order-xl-5 order-lg-2 order-md-2 mb-xxl-0 mb-xl-0 mb-lg-5 mb-md-4">
                                <div class="footer-widget">
                                    <h4 class="font-body mb-4 text-white fs-18px">Subscribe Newsletter</h4>
                                    <p class="fs-7 mb-3 text-white">Subscribe our newsletter to get the latest news and updates!</p>
                                    <div class="footer-newsletter">
                                        <form action="javascript:">
                                            <input type="text" id="newsletter" class="newsletter" placeholder="Your email...">
                                            <button class="btn btn-two" type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                    <p class="fs-7 mt-3">* Your email is kept private</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-lg-5">
                                <div class="copyright-text">
                                    <p>© <?php echo date("Y"); ?> <a class="text-primary" href=""><?php echo $basic->title; ?> | <?php echo $basic->tag; ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 mb-3 mb-xxl-0 mb-xl-0 mb-lg-0">
                                <ul class="tiny-footer-menu float-end d-none d-xxl-block d-xl-block d-lg-block">
                                    <li><a href="javascript:" class="fs-7 text-100 text-hover-primary">Terms</a></li>
                                    <li><a href="javascript:" class="fs-7 text-100 text-hover-primary">Privacy policy</a></li>
                                    <li><a href="javascript:" class="fs-7 text-100 text-hover-primary">Legal notice</a></li>
                                    <li><a href="javascript:" class="fs-7 text-100 text-hover-primary">Accessibility</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--  Back To Top - Button When Document Scroll Down to Display
        ============================================================== -->
        <button class="scroll__top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></button>

        <!-- Blessed Template - Jquery Library Script Files
        =================================================== -->
        <script src="<?php echo base_url(); ?>landingdep/library/jquery-3.7.1.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/bootstrap-5.3.2/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/magnific-popup/magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/odometer/odometer.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/jquery.appear/script.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/parallax-scroll/jquery.parallaxScroll.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/isotop/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/images-loaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/swiper/swiper-bundle.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/wow/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/aos/aos.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/feather/feather.min.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/gsap-3.10.4/gsap.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/gsap-3.10.4/ScrollTrigger.js"></script>
        <script src="<?php echo base_url(); ?>landingdep/library/gsap-3.10.4/SplitText.js"></script>

        <!-- Blessed - Template Custom Script
        ===================================== -->
        <script src="<?php echo base_url(); ?>landingdep/script.js"></script>
            <?php if($this->uri->segment(2) == "blog" && $this->uri->segment(3) == "view"){ ?>

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=<?php echo getBasic()->fbappid;?>&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <?php } ?>


        <!-- Include VideoJS JS -->
        <script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
    </body>
    <!-- body end -->
</html>