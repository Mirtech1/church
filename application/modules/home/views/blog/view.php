<main class="fix">

    <!-- Page Header Banner
    ======================= -->
    <section class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
        <div class="container">
            <div class="row">
                <h1 class="mb-2 text-white">Blog</h1>
                <nav aria-label="breadcrumb"></nav>
            </div>
        </div>
    </section>

    <!-- Blog Details
    ================= -->
    <?php foreach ($blog as $blog) { ?>
    <section class="sermon-details-section-1">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center flex-column justify-content-center">
                    <h1 class="text-center page-title fw-medium"><?php echo $blog->title; ?>
                    </h1>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center">
                    <?php if($blog->image){ ?>
                                <img src="<?php echo base_url(); ?>assets/assets/images/blog/<?php echo $blog->image; ?>" alt="<?php echo $blog->title;?>"></img>
                            <?php }else{ ?>
                                <img src="<?php echo base_url(); ?>assets/assets/images/no-preview.png" alt="<?php echo $blog->title;?>"></img>
                            <?php } ?>
                </div>
                <div class="col-10">
                    <div class="d-block d-md-flex underlined-bottom justify-content-between">
                        <div class="position-relative w-fit-content overflow-hidden shine-animate-item hover-up d-flex align-items-center py-4">
                            <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $blog->postID; ?>" class="shine-animate">
                                <!-- <img src="assets/images/pastors/avatar-img-pastors-sec-4.png" alt="Blessed"> -->
                            </a>
                            <div class="title ps-4">
                                <h3 class="fs-5 fw-semibold mb-0">
                                    <a href="#"><?php echo getUserByID($blog->author)->username; ?></a>
                                </h3>
                                <p class="fs-7 mb-0"><?php echo $blog->cdate; ?></p>
                            </div>
                        </div>
                        <div class="icons d-flex align-items-center mb-4 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-sm-4">
                            <p class="text-dark mb-0 me-2">Share:</p>
                            <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-pinterest-p"></i></a>
                            <a href="javascript:" target="_blank" class="fw-600 text-dark px-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <?php echo $blog->content; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?> 
    <!-- Related Blog Posts
    ======================= -->
    <section class="pt-80px pb-80px bg-linear-1 mt-80px">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="section-title tg-heading-subheading animation-style3">
                        <span class="sub-title">Our news and blog</span>
                        <h5 class="title tg-element-title">Updated Latest News</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if( is_array($recents) ){ ?>
                <?php foreach ($recents as $recent){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-blog-1 mb-4 mb-lg-0  rounded-2 overflow-hidden bg-white shadow-1 shine-animate-item hover-up">
                        <div class="position-relative overflow-hidden mb-2">
                            <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $recent->postID; ?>" class="shine-animate">
                                <?php if($recent->image){ ?>
                            <img src="<?php echo base_url(); ?>assets/assets/images/blog/<?php echo $recent->image; ?>" alt="<?php echo $recent->title;?>"></img>
                        <?php }else{ ?>
                            <img src="<?php echo base_url(); ?>assets/assets/images/no-preview.png" alt="<?php echo $recent->title;?>"></img>
                        <?php } ?>
                            </a>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="font-body text-dark fs-5 lh-base"><a href="<?php echo base_url(); ?>home/blog/view/<?php echo $recent->postID; ?>" class=""><?php echo $recent->title; ?></a></h5>
                            <div class="meta-1 fs-7 mb-3">
                                <span class="author">by <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $recent->postID; ?>" class="text-decoration-underline"> <?php echo getUserByID($recent->author)->username; ?></a></span>
                                <span class="date ms-1"><?php echo $recent->cdate; ?></span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $recent->postID; ?>" class="text-decoration-underline fs-7">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>

</main>
