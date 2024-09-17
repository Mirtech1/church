<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <div class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">Our Pastors/Ministers</h1>
                        <nav aria-label="breadcrumb"></nav>
                    </div>
                </div>
            </div>

            <!-- Lead Paster Info
            ===================== -->
            <section class="pastors-section-2 position-relative section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="ds-5 fw-normal mb-4">Meet Our Lead Pastors</h5>
                            <p class="mb-4">At Blessed Church, our Lead Pastors are dedicated spiritual guides, committed to shepherding our congregation with love, wisdom, and compassion. They bring years of experience, deep faith, and a heart for service to their roles, leading our community on a journey of spiritual growth and transformation.</p>
                            <h3 class="fs-3 fw-normal mb-0">
                                <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>">Esther Howard</a>
                            </h3>
                            <p class="fs-7 mb-4">Leader Pastor</p>
                            <div class="icons">
                                <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-pinterest-p"></i></a>
                                <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-5 mt-lg-0 overflow-hidden shine-animate-item hover-up">
                                <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>" class="shine-animate">
                                    <img src="<?php echo base_url();?>landingdep/images/pastors/img-pastors-sec-2.png" alt="Blessed">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-asset position-absolute">
                    <img class="alltuchtopdown" src="<?php echo base_url();?>landingdep/images/pastors/img-bg-sec-2.png" alt="Blessed">
                </div>
            </section>

            <!-- Our Team Section
            ===================== -->
            <section class="pastors-section-3 position-relative">
                <div class="container">
                    <div class="row mb-5 align-items-end">
                        <div class="col-lg-7 mb-3 mb-lg-0">
                            <div class="section-title tg-heading-subheading animation-style3">
                                <span class="sub-title">Church Officers</span>
                                <h5 class="title ds-5 tg-element-title">Get Acquainted with Our Exceptional Clergy Team</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach ($pastor as $pastor){ ?>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="team-style-01">
                                <figure class="mb-0 hover-box box-hover position-relative">
                                    <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>">
                                        <img src="<?php echo base_url();?>assets/assets/images/pastor/profile/<?php echo $pastor->profileimage;?>" alt="Pastor - <?php echo $pastor->fname. " " . $pastor->lname;?>" class="border-radius-6px">
                                    </a>
                                    <figcaption class="w-100 p-20px lg-p-25px bg-white text-center">
                                        <div class="position-relative z-3">
                                            <p class="d-block fw-600 fs-5 text-dark mb-0">
                                                <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>"><?php echo $pastor->fname. " " . $pastor->lname;?></a>
                                            </p>
                                            <p class="fs-7"><?php echo $pastor->position ?></p>
                                            <div class="social-icon hover-text mt-20px lg-mt-10px social-icon-style-05">
                                                <a href="javascript:" target="_blank" class="fw-600 text-dark-gray"><i class="fab fa-facebook-f"></i></a>
                                                <a href="javascript:" target="_blank" class="fw-600 text-dark-gray"><i class="fab fa-instagram"></i></a>
                                                <a href="javascript:" target="_blank" class="fw-600 text-dark-gray"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="javascript:" target="_blank" class="fw-600 text-dark-gray"><i class="fab fa-twitter"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px">
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="wrap-asset position-absolute">
                    <img class="alltuchtopdown" src="<?php echo base_url();?>landingdep/images/pastors/img-bg-sec-3.png" alt="Blessed">
                </div>
            </section>

            <!-- Paster Testimonial Section
            =============================== -->
            <section class="pastors-section-4 pt-80px pb-80px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="wrap-asset position-absolute">
                                <img class="alltuchtopdown" src="<?php echo base_url();?>landingdep/images/pastors/img-pastors-sec-4.png" alt="Blessed">
                            </div>
                        </div>
                        <div class="col-lg-9 ps-4">
                            <p class="fs-3 text-dark">“Get to know the heart and soul behind our ministry as we introduce you to the dedicated individuals who lead our congregation with love, wisdom, and grace.”</p>
                            <div class="position-relative w-fit-content overflow-hidden shine-animate-item hover-up d-flex align-items-center py-4">
                                <a href="blog-details.html" class="shine-animate">
                                    <img src="<?php echo base_url();?>landingdep/images/pastors/avatar-img-pastors-sec-4.png" alt="Blessed">
                                </a>
                                <div class="title ps-4">
                                    <h3 class="fs-5 fw-normal mb-0">
                                        <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>">Esther Howard</a>
                                    </h3>
                                    <p class="fs-7 mb-0">Lead Pastor</p>
                                </div>
                            </div>
                            <p class="pt-5 lorem-text">In this sacred space, we invite you to learn more about the spiritual stewards who illuminate our path, inspire our hearts, and uplift our spirits. Explore their unique backgrounds, heartfelt messages, and unwavering commitment to serving God and His people as we introduce you to the remarkable individuals who shape our church family.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blessed - About Section
            ============================ -->
            <section class="pastors-section-5 section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-lg-0 col-12 position-relative d-flex align-items-center">
                            <div class="image-1 ">
                                <img src="<?php echo base_url();?>landingdep/images/pastors/img-pastors-sec-5-1.png" alt="Blessed">
                            </div>
                            <div class="image-2 position-absolute">
                                <img src="<?php echo base_url();?>landingdep/images/pastors/img-pastors-sec-5-2.png" alt="Blessed">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mt-5 mt-lg-0 ps-5">
                            <div class="header-sec-5">
                                <div class="d-flex gap-5 align-items-end" data-aos="fade-up">
                                    <div class="section-title">
                                        <span class="sub-title fs-5">Church Officers</span>
                                    </div>
                                </div>
                                <h3 class="fw-medium" data-aos="fade-up">Blessed Church, where hearts are open, spirits are lifted,
                                    and love abounds</h3>
                                <p data-aos="fade-up fs-6 mb-0">
                                    Through our various community initiatives, educational programs, and advocacy efforts, we strive
                                    to promote sustainability, environmental stewardship, and compassion for our planet and all its
                                    inhabitants.
                                </p>
                            </div>
                            <div class="feature-list">
                                <div class="feature-box d-flex p-4 ps-0">
                                    <img class="align-self-start mb-3" src="<?php echo base_url();?>landingdep/images/about/icon-sec5-0.png" alt="Blessed">
                                    <div class="text-box ps-4">
                                        <h5 class="fw-medium">Library & Research</h5>
                                        <p class="fs-6 mb-0">Our library and muniment room houses our extensive and historic
                                            collections of books, manuscripts, archival material, photographs and more.</p>
                                    </div>
                                </div>
                                <div class="feature-box d-flex p-4 ps-0">
                                    <img class="align-self-start mb-3" src="<?php echo base_url();?>landingdep/images/about/icon-sec5-1.png" alt="Blessed">
                                    <div class="text-box ps-4">
                                        <h5 class="fw-medium">Our Mission and Values</h5>
                                        <p class="fs-6 mb-0">We see ourselves as a living symbol of faith at the heart of the
                                            nation. Our main purpose is to be a working, inclusive church.</p>
                                    </div>
                                </div>
                                <div class="feature-box d-flex p-4 ps-0">
                                    <img class="align-self-start mb-3" src="<?php echo base_url();?>landingdep/images/about/icon-sec5-2.png" alt="Blessed">
                                    <div class="text-box ps-4">
                                        <h5 class="fw-medium">Jobs & Volunteering</h5>
                                        <p class="fs-6 mb-0">If you want a position that’s really fulfilling, in a place that’s
                                            truly unique, explore our vacancies and apply to work here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Paster Said with background Section
            ======================================== -->
            <section class="pastors-section-6">
                <div class="container--fluid pt-110px" data-background="<?php echo base_url();?>landingdep/images/pastors/img-bg-sec-6.png">
                    <div class="container">
                        <div class="row">
                            <div class="offset-xl-4 col-xl-8 mx-auto col-lg-9 col-12">
                                <div class="hover-up w-fit-content pb-5 d-flex align-items-center py-4">
                                    <a href="blog-details.html">
                                        <img src="<?php echo base_url();?>landingdep/images/pastors/avatar-img-pastors-sec-6.png" alt="Blessed">
                                    </a>
                                    <div class="title ps-4">
                                        <!-- <a class="fs-6 fw-semibold mb-0"> -->
                                            <a href="<?php echo base_url();?>home/pastor/view/<?php echo $pastor->pastorid;?>">- Michael Thompson -</a>
                                        <!-- </a> -->
                                        <p class="fs-8 fw-regular mb-0 text-white">@thompson098</p>
                                    </div>
                                </div>
                                <h4 class="text-white fw-normal">"In various moments throughout the day or across changing seasons, the light streaming into the Abbey unveils hidden treasures, illuminating aspects previously overlooked, even amidst familiar surroundings."</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Instagram Gallery Section
            ===================-========== -->
            <div class="box-swiper">
                <div class="swiper-container swiper-6-items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-1.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-2.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-3.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-4.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-5.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-6.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-7.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-8.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-9.png" alt="Blessed">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>landingdep/images/gallery/thumbnail-10.png" alt="Blessed">
                        </div>
                    </div>
                </div>
            </div>

        </main>