<main class="fix">

    <!-- Page Header Banner
    ======================= -->
    <section class="page-header" data-background="<?php echo base_url();?>landingdep/images/home2/hero-2-bg.png">
        <div class="container">
            <div class="row">
                <h1 class="mb-2 text-white">Our Sermons</h1>
                <nav aria-label="breadcrumb"></ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Sermon Posts
    ================= -->
    <section class="sermons-section-2 section-padding pb-80px">
        <div class="container">
            <div class="row">
                <?php foreach ($sermon as $row) { ?>
                <div class="col-lg-4">
                    <div class="card-sermon-1 rounded-2 overflow-hidden bg-white shine-animate-item hover-up mb-4">
                        <div class="position-relative overflow-hidden mb-2">
                            <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" class="shine-animate">
                                <img src="<?php echo base_url();?>assets/assets/images/sermon/feature/<?php echo $row->sermonbanner;?>" alt="Blessed" style="width: 100%">
                            </a>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="font-body text-dark fs-3 lh-base"><a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" class=""><?php echo $row->sermontitle; ?></a></h3>
                            <div class="meta-1 fs-7 mb-3">
                                <span class="author">Sermon By: <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" class="text-decoration-underline"> <?php echo $row->sermonauthor; ?></a></span>
                            </div>
                            <div class="meta-1 fs-7 mb-3">
                                <span class="author">Date: <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" class="text-decoration-underline"> <?php echo $row->sermondate; ?></a></span>
                            </div>
                            <p class="fs-7 mb-4 text-dark"><?php echo character_limiter(strip_tags($row->sermondescription), 100); ?></p>
                            <div class="d-flex justify-content-between">
                                <div class="icons d-flex gap-2 align-items-center">
                                    <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" title="Soundcloud" target="_blank"><i class="fab fa-soundcloud"></i></a>

                                    <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" title="Audio"><i class="fas fa-video"></i></a>

                                    <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" title="Music" ><i class="fas fa-music"></i></a>
                                </div>
                                <a href="<?php echo base_url();?>home/sermon/view/<?php echo $row->sermonid;?>" class="d-inline-flex btn-outline rounded-5 tc-btn-md fs-7 gap-2">
                                    <span>Read More</span>
                                    <i data-feather="arrow-right" class="size-14"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-12 d-flex justify-content-lg-start justify-content-center mt-5">
                    <nav aria-label="Page navigation example">
                        <?php echo $pagination; ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action
    =================== -->
    <div class="event-section-3 pb-110px">
        <div class="container container-1 position-relative">
            <div class="row card-event-sec-3">
                <div class="col-lg-7 col-12 content pt-110px pb-110px flex-column">
                    <div class="d-flex gap-5 align-items-end" data-aos="fade-up">
                        <div class="section-title">
                            <span class="sub-title">Volunteer</span>
                        </div>
                    </div>
                    <h2 class="fw-normal ds-5 mb-4" data-aos="fade-up">We're Dedicated to Making Earth a Better Planet
                        Through
                        Small Steps</h2>
                    <p class="fs-5" data-aos="fade-up">
                        Each small step we take contributes to a larger movement towards a more sustainable and vibrant
                        planet.
                    </p>
                    <div class="d-flex flex-column align-items-lg-center">
                        <a href="javascript:" class="pt-4 d-flex align-items-center" data-aos="flip-up">
                            <span class="icon text-white me-4">
                                <i class="size-26" data-feather="users"></i>
                            </span>
                            <div class="contact">
                                <p class="fw-light fs-6 mb-2">Need help?</p>
                                <p class="fs-3 mb-0 phone-num">(229) 555-0109</p>
                            </div>
                        </a>
                        <a href="javascript:" class="pt-4 d-flex align-items-center" data-aos="flip-up">
                            <span class="icon text-white me-4">
                                <i class="size-26" data-feather="users"></i>
                            </span>
                            <div class="contact">
                                <p class="fw-light fs-6 mb-2">Register to Volunteer</p>
                                <p class="fs-3 mb-0 phone-num">(229) 555-0109</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 px-0">
                    <div class="position-relative">
                        <div class="background">
                            <img src="<?php echo base_url();?>landingdep/images/events/img-event-sec-3.png" alt="Blessed" data-aos="zoom-in">
                        </div>
                        <div class="card-float position-absolute br-4 alltuchtopdown">
                            <div class="card-float-top rounded-top-1">
                                <img class="mb-2" src="<?php echo base_url();?>landingdep/images/home1/book-card-sec6.png" alt="Blessed" data-aos="flip-left">
                                <p class="mb-0 pt-2 fs-7 text-dark">Reach out to us for support, counseling, or prayer.</p>
                            </div>
                            <div class="rounded-bottom-1 card-float-bot d-flex align-items-center justify-content-center">
                                <p class="text-white mb-0">Start Your Journey</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-asset position-absolute">
                <img class="alltuchtopdown" src="<?php echo base_url();?>landingdep/images/events/img-bg-event-sec-3.png" alt="Blessed">
            </div>
        </div>
    </div>

</main>




