<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <section class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">Our Gallery</h1>
                        <nav aria-label="breadcrumb"></nav>
                    </div>
                </div>
            </section>

            <!-- Gallery Category+  Filter Buttons
            ====================================== -->
            <section class="section-padding">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="w-lg-50">
                                <h2 class="fw-normal mb-4">
                                    Exploring Our Sacred Spaces A Journey Through Faith
                                </h2>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-4 filter-menu-active"></div>
                        </div>
                    </div>
                    <div class="row gy-60 gx-60 justify-content-between masonary-active">
                        <?php foreach ($gallery as $gallery) { ?>
                        <div class="col-lg-6 col-md-6 col-12 filter-item mb-lg-5 mb-4 cat1 cat3 cat7">
                            <div class="project-card-item8 shine-animate-item">
                                <div class="project-card-thumb">
                                    <a class="shine-animate" href="#">
                                        <img class="w-100 rounded" src="<?php echo base_url(); ?>assets/assets/images/website/gallery/small/<?php echo $gallery->filename; ?>" alt="<?php echo $gallery->filename; ?>">
                                    </a>
                                </div>
                                <div class="project-card-content mt-30">
                                    <p class="fs-6 text-300 fw-semibold"><?php echo $gallery->filename; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
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
            </section>

        </main>



