<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <section class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">Notice</h1>
                        <nav aria-label="breadcrumb"></nav>
                    </div>
                </div>
            </section>

            <!-- Blog Post List
            =================== -->
            <section class="pt-110px ">
                <div class="container">
                    <div class="row">
                        <?php             	        
                        foreach ($notice as $notice){?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="card-blog-1 rounded-2 overflow-hidden bg-white shadow-1 shine-animate-item hover-up">
                                <div class="position-relative overflow-hidden mb-2"></div>
                                <div class="card-body p-4">
                                    <h5 class="font-body text-dark fs-5 lh-base"><a href="<?php echo base_url();?>home/notice/view/<?php echo $notice->noticeid;?>" class=""><?php echo character_limiter($notice->noticetitle, 15);?></a></h5>
                                    <div class="meta-1 fs-7 mb-3"></div>
                                    <p class="fs-7 mb-4 text-dark"><?php echo word_limiter($notice->noticedescription, 50);?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- <div class="view">
                                            <i class="size-14" data-feather="eye"></i>
                                            <span class="text-dark fs-7">27 views</span>
                                        </div> -->
                                        <a href="<?php echo base_url();?>home/notice/view/<?php echo $notice->noticeid;?>" class="text-decoration-underline fs-7">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </main>