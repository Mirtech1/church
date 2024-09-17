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

    <!-- Pastor Details
    =================== -->
    <?php foreach ($pastor as $pastor) { ?>
    <section class="event-details-section-1 pt-80px py-5">
        <div class="container container-1">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/assets/images/pastor/profile/<?php echo $pastor->profileimage; ?>" alt="Blessed" style="border-radius: 100%">
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-12 d-flex align-items-center flex-column mb-4 mb-lg-0 justify-content-center ">
                    <h1 class="text-center page-title fw-medium"><?php echo $pastor->fname . " " . $pastor->lname; ?></h1>
                    <p class="mt-0 text-dark"><?php echo $pastor->position; ?></p>
                    <div>
                        <?php echo strip_tags($pastor->speech); ?>
                    </div>
                    <div class="icon-top d-flex gap-1">
                        <a href="https://www.facebook.com/" target="_blank" class="text-dark rounded-5 size-50 d-block hover-up"><i class="p-2 fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-dark rounded-5 size-50 d-block hover-up"><i class="p-2 fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com/" target="_blank" class="text-dark rounded-5 size-50 d-block hover-up"><i class="p-2 fab fa-pinterest-p"></i></a>
                        <a href="https://dribbble.com/" target="_blank" class="text-dark rounded-5 size-50 d-block hover-up"><i class="p-2 fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

</main>