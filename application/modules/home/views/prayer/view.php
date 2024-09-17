<main class="fix">

    <!-- Page Header Banner
    ======================= -->
    <section class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
        <div class="container">
            <div class="row">
                <h1 class="mb-2 text-white">Prayer</h1>
                <nav aria-label="breadcrumb"></nav>
            </div>
        </div>
    </section>

    <!-- Blog Details
    ================= -->
    <?php foreach ($prayer as $prayer) { ?>
    <section class="sermon-details-section-1">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center flex-column justify-content-center">
                    <h1 class="text-center page-title fw-medium"><?php echo $prayer->prayertitle; ?>
                    </h1>
                </div>
                <div class="col-10">
                    <div>
                        <?php echo $prayer->prayerdescription; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?> 
    <!-- Related Blog Posts
    ======================= -->

</main>