<main class="fix">

    <!-- Page Breadcrumps
    ===================== -->
    <section class="page-header" data-background="<?php echo base_url();?>landingdep/images/home2/hero-2-bg.png">
        <div class="container">
            <div class="row">
                <h1 class="mb-2 text-white">Sermon</h1>
                <nav aria-label="breadcrumb"></ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Sermon Details
    =================== -->
    <?php foreach ($sermon as $sermon) { ?>
    <section class="sermon-details-section-1">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-4 d-flex justify-content-center">
                    <nav aria-label="breadcrumb"></nav>
                </div>
                <div class="col-12 d-flex align-items-center flex-column justify-content-center ">
                    <h1 class="text-center page-title fw-medium"><?php echo $sermon->sermontitle; ?></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative mb-4">
                        <div class="thumb rounded">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-1-items">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="rounded-4 img-fluid w-100" src="<?php echo base_url(); ?>assets/assets/images/sermon/feature/<?php echo $sermon->sermonbanner; ?>" alt="Blessed" data-aos="fade-up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-event rounded-4 z-2">
                            <div class="content-event-item d-lg-flex d-block  align-items-center justify-content-between rounded-4 mb-5  p-4">
                                <div class="times d-flex flex-column justify-content-start mb-4 mb-lg-0">
                                    <p class="time fs-8 mb-3">
                                        <i class="size-16 me-2" data-feather="user"></i>
                                        <span class="text-300">Sermon By:</span>
                                        <span class="text-dark"> <?php echo $sermon->sermonauthor; ?></span>
                                    </p>
                                    <p class="time fs-8 mb-3">
                                        <i class="size-16 me-2" data-feather="clock"></i>
                                        <span class="text-300">Date:</span>
                                        <span class="text-dark"><?php echo $sermon->sermondate; ?></span>
                                    </p>
                                    <p class="location  mb-0 fs-8">
                                        <i class="size-16 me-2" data-feather="map-pin"></i>
                                        <span class="text-300">Location:</span>
                                        <span class="text-dark"><?php echo $sermon->sermonlocation; ?></span>
                                    </p>
                                </div>
                                <div class="hr-vertical"></div>
                                <div class="icons d-flex gap-2 flex-column mb-4 mb-lg-0">
                                    <?php if (!empty($sermon->sermonyoutube)) { ?>
                                    <div class="items gap-2 d-flex align-items-center">
                                        <a href="<?php echo $sermon->sermonyoutube; ?>">
                                            <i class="me-2 fab fa-youtube"></i>
                                        </a>
                                        <a href="<?php echo $sermon->sermonyoutube; ?>" class="fs-6 text-dark mb-0">Youtube</a>
                                    </div>
                                    <?php } if(!empty($sermon->sermonsoundcloud)){ ?>
                                    <div class="items gap-2 d-flex align-items-center">
                                        <a href="<?php echo $sermon->sermonsoundcloud; ?>">
                                            <i class="me-2 fab fa-soundcloud"></i>
                                        </a>
                                        <a class="fs-6 text-dark mb-0"  href="<?php echo $sermon->sermonsoundcloud; ?>">Soundcloud</a>
                                    </div>
                                    <?php } if(!empty($sermon->audio)){ ?>
                                    <div class="items gap-2 d-flex align-items-center">
                                        <a href="<?php echo base_url('assets/assets/audio/sermon/') . $sermon->audio; ?>" target="_blank">
                                            <i class="me-2 fas fa-music"></i>
                                        </a>
                                        <a href="<?php echo base_url('assets/assets/audio/sermon/') . $sermon->audio; ?>" class="fs-6 text-dark mb-0" target="_blank">Audio</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="hr-vertical"></div>
                                <?php if(!empty($sermon->video)){ ?>
                                <a href="<?php echo base_url('assets/assets/video/sermon/') . $sermon->video; ?>" class="btn text-white rounded-5 btn-circle-arrow my-auto" target="_blank" data-aos="flip-up">
                                    <span>Watch Online</span>
                                    <span class="bg-transparent ms-2">
                                        <i class="size-14" data-feather="arrow-right"></i>
                                    </span>
                                </a>
                                <?php }?>
                            </div>
                            <div>
                                <?php echo $sermon->sermondescription; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- Sermon Carousel
    ==================== -->
    <section class="home1-section3 position-relative" id="about">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-lg-8 col-md-8 col-sm-8 sub-title2">
                    <div class="d-flex gap-5 align-items-end">
                        <div class="section-title tg-heading-subheading animation-style3">
                            <span class="sub-title">Sacred Teachings</span>
                            <h5 class="title tg-element-title">Explore Our Sermons</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 d-xxl-block d-lg-block d-md-block d-sm-block d-none">
                    <div class="d-flex justify-content-end align-items-end">
                        <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-animate">
                            <i class="size-24" data-feather="arrow-left"></i>
                        </div>
                        <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-animate">
                            <i class="size-24" data-feather="arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 position-relative">
                    <div class="box-swiper-padding">
                        <div class="swiper-container blessed-sermon-slider-two">
                            <div class="swiper-wrapper">
                                 <?php if( is_array($recents) ){ ?>
                                <?php foreach ($recents as $recent){ ?>
                                <div class="swiper-slide">
                                    <div class="postion-relative">
                                        <div class="project__item-four">
                                            <div class="project__thumb-four">
                                                <a href="<?php echo base_url();?>home/sermon/view/<?php echo $recent->sermonid;?>"><img src="<?php echo base_url();?>assets/assets/images/sermon/feature/<?php echo $recent->sermonbanner;?>" alt="Blessed"></a>
                                            </div>
                                            <div class="project__content-four">
                                                <div class="left-content">
                                                    <h4 class="title text-white">
                                                        <a href="<?php echo base_url();?>home/sermon/view/<?php echo $recent->sermonid;?>"><?php echo $recent->sermontitle; ?></a>
                                                    </h4>
                                                    <p class="fs-7 text-white des">
                                                        <?php echo character_limiter(strip_tags($recent->sermondescription), 100); ?>
                                                    </p>
                                                    <span>Sermon By: <?php echo $recent->sermonauthor; ?></span>
                                                </div>
                                                <div class="more-details d-flex gap-2 mt-4">
                                                    <a href="<?php echo base_url();?>home/sermon/view/<?php echo $recent->sermonid;?>" class="btn d-flex gap-1 btn-rounded-1">
                                                        <span>View Details</span>
                                                        <i class="size-12" data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <div class="blessed-sermon-slider-two-pagination"></div>
                </div>
            </div>
        </div>
        <div class="wrap-asset position-absolute top-50 left-5 ms-5">
            <img class="alltuchtopdown" src="assets/images/sermon-details/cornflower-bgr.png" alt="Blessed">
        </div>
    </section>

</main>
