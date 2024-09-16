<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <section class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">News & Blog</h1>
                        <nav aria-label="breadcrumb"></nav>
                    </div>
                </div>
            </section>

            <!-- Blog Post List
            =================== -->
            <section class="pt-110px ">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="w-75">
                                <h2 class="fw-normal mb-4">
                                    Exploring Faith, Inspiring<br> Hearts: Insights from Our Blog
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php             
                        $num = 1;
                        $breaker = 3; //Loop Break After 3 Cycle	        
                        foreach ($blog as $blog){?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="card-blog-1 rounded-2 overflow-hidden bg-white shadow-1 shine-animate-item hover-up">
                                <div class="position-relative overflow-hidden mb-2">
                                    <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $blog->postID; ?>" class="shine-animate">
                                        <?php if($blog->image){ ?>
                                            <img src="<?php echo base_url(); ?>assets/assets/images/blog/<?php echo $blog->image; ?>" alt="<?php echo $blog->title;?>"></img>
                                        <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>assets/assets/images/no-preview.png" alt="<?php echo $blog->title;?>"></img>
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="card-body p-4">
                                    <h5 class="font-body text-dark fs-5 lh-base"><a href="<?php echo base_url(); ?>home/blog/view/<?php echo $blog->postID; ?>" class=""><?php echo $blog->title; ?></a></h5>
                                    <div class="meta-1 fs-7 mb-3">
                                        <span class="author">by <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $blog->postID; ?>" class="text-decoration-underline"> <?php if(getUserByID($blog->author)){?><?php echo getUserByID($blog->author)->username; }?></a></span>
                                        <span class="date ms-1">Published - <?php echo $blog->cdate; ?></span>
                                    </div>
                                    <p class="fs-7 mb-4 text-dark"><?php echo character_limiter(strip_tags($blog->content), 150); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- <div class="view">
                                            <i class="size-14" data-feather="eye"></i>
                                            <span class="text-dark fs-7">27 views</span>
                                        </div> -->
                                        <a href="<?php echo base_url(); ?>home/blog/view/<?php echo $blog->postID; ?>" class="text-decoration-underline fs-7">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-12 d-flex justify-content-lg-start justify-content-center mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item text-center fs-6 pe-2">
                                        <a class="page-link size-48" href="javascript:">
                                            <i data-feather="arrow-left" class="size-12"></i>
                                        </a>
                                    </li>
                                    <li class="page-item text-center fs-6 pe-2"><a class="page-link size-48" href="javascript:">1</a></li>
                                    <li class="page-item text-center fs-6 pe-2 active"><a class="page-link size-48" href="javascript:">2</a></li>
                                    <li class="page-item text-center fs-6 pe-2"><a class="page-link size-48" href="javascript:">3</a></li>
                                    <li class="page-item text-center fs-6 pe-2"><a class="page-link size-48" href="javascript:">4</a></li>
                                    <li class="page-item text-center fs-6 pe-2"><a class="page-link size-48" href="javascript:">5</a></li>
                                    <li class="page-item text-center fs-6 pe-2"><a class="page-link size-48" href="javascript:">...</a></li>
                                    <li class="page-item text-center fs-6 pe-2">
                                        <a class="page-link size-48" href="javascript:" aria-label="Next">
                                            <i data-feather="arrow-right" class="size-12"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Newsletter Section
            ======================= -->
            <section class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="newsletter-box text-center position-relative overflow-hidden" data-background="assets/images/blog/bg-1.png">
                                <h2 class="fw-normal mb-3">
                                    Subscribe for Newletter
                                </h2>
                                <p class="w-75 m-4 fs-6 text-400 mx-auto">
                                    Stay Connected: Subscribe to Our Newsletter for Weekly Sermon <br> Reflections and Spiritual Insights
                                </p>
                                <div class="footer-newsletter mx-auto">
                                    <form action="javascript:">
                                        <input class="input-xs" type="text" placeholder="Your email . . .">
                                        <button class="btn btn-two btn-xs" type="submit">Subscribe</button>
                                    </form>
                                </div>
                                <img class="position-absolute d-none d-lg-block pattern-1" src="<?php echo base_url(); ?>landingdep/images/blog/pattern-1.png" alt="Blessed">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>