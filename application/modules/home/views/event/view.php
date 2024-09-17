<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <div class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">Event</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"></ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?php foreach ($event as $event) { ?>
            <!-- Event Details Page
            ======================= -->
            <section class="event-details-section-1 pt-80">
                <div class="container container-1">
                    <div class="row">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"></ol>
                            </nav>
                        </div>
                        <div class="col-12 mb-5 d-flex justify-content-center">
                            <h1 class="text-center page-title fw-medium"><?php echo $event->eventtitle; ?></h1>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <img src="<?php echo base_url(); ?>assets/assets/images/event/feature/<?php echo $event->eventimage; ?>" alt="Blessed" width="90%">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Event Organizer Team
            ========================= -->
            <section class="pt-110px pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="Introduction">
                                
                                <div class="row">
                                    <div class="col-sm-8 col-12">
                                        <h2 class="fw-medium pb-2">About This Event</h2>
                                    </div>
                                    <div class="col-sm-4 text-end d-none d-xxl-block d-lg-block d-md-block">
                                        
                                    </div>                                        
                                </div>
                                <div class="pb-2"><?php echo $event->eventdescription; ?></div>
                                <h4 class="fw-medium pb-2">Event Details</h4>
                                <ul class="fs-6 pb-2 list-style">
                                    <li><span class="fw-semibold text-dark">Dates: </span><?php echo $event->eventdate; ?></li>
                                    <li><span class="fw-semibold text-dark">Time: </span><?php echo $event->eventtime; ?></li>
                                    <li><span class="fw-semibold text-dark">Location: </span><?php echo $event->eventlocation; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get In Touch - Section
            =========================== -->
             <section class="map-contact">
                <div class="contact-map p-0">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=<?php echo getBasic()->mapapi;?>&q=<?php echo $event->eventlocation; ?>" allowfullscreen loading="lazy"></iframe>
                </div>
            </section>
            <?php } ?>
        </main>
