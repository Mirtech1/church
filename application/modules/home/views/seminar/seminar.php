<main class="fix">

            <!-- Page Header Banner
            ======================= -->
            <div class="page-header" data-background="<?php echo base_url(); ?>landingdep/images/home2/hero-2-bg.png">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-2 text-white">Upcoming Events</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"></ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Event Post List - Section
            ============================== -->
            <div class="event-section-2 section-padding pb-80px">
                <div class="container">
                    <div class="row">
                    <?php	
                    foreach ($seminar as $seminar){    
                    ?>
                        <div class="col-lg-4">
                            <div class="thumb">
                                <a href="<?php echo base_url();?>home/seminar/view/<?php echo $seminar->seminarid;?>">
                                    <img class="rounded mt-sm-0 w-100" src="<?php echo base_url();?>assets/assets/images/seminar/banner/<?php echo $seminar->seminarbanner;?>" alt="Blessed" data-aos="fade-up">
                                </a>
                            </div>
                            <div class="position-relative mb-5 d-flex justify-content-center event-card-1 hover-up">
                                <div class="content-event rounded">
                                    <h4 class="mt-4 fw-medium"><a href="<?php echo base_url();?>home/seminar/view/<?php echo $seminar->seminarid;?>"><?php echo $seminar->seminartitle;?></a></h4>
                                    <p class="content-p pb-4" data-aos="fade-up"></p>
                                    <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between">
                                        <div class="times">
                                            <p class="time fs-8 mb-1"></p>
                                            <p class="location fs-8">
                                                <i class="size-12" data-feather="map-pin"></i>
                                                <span><?php echo $seminar->seminarlocation;?></span>
                                            </p>
                                        </div>
                                        <div class="button">
                                            <a href="<?php echo base_url();?>home/seminar/view/<?php echo $seminar->seminarid;?>" class="d-inline-flex rounded-5 tc-btn-md fs-8 text-center">
                                                <span>View Details</span>
                                                <i data-feather="arrow-right" class="size-12"></i>
                                            </a>
                                        </div>
                                        <div class="date fs-8 text-white d-flex flex-column justify-content-center position-absolute">
                                            <?php
                                            // Original event time
                                            $eventTime = $seminar->seminarstart;

                                            // Convert to DateTime object, with error checking
                                            $date = DateTime::createFromFormat('d/m/Y', $eventTime);
                                            if (!$date) {
                                                $date = DateTime::createFromFormat('d-m-Y', $eventTime);
                                            }
                                            if ($date) {
                                                // Format day, month, and year separately
                                                $day = $date->format('d');
                                                $month = $date->format('M'); // 'M' gives the short month name (e.g., Jul)
                                                $year = $date->format('Y');
                                            } else {
                                                // Handle error: invalid date format
                                                $day = '';
                                                $month = '';
                                                $year = '';
                                            }
                                            ?>
                                            <h4 class="text-white mb-0 lh-0"><?php echo $day; ?></h4>
                                            <span class="fs-8"><?php echo $month; ?></span>
                                            <span><?php echo $year; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>


                    <div class="row">
                        <div class="col-12 d-flex justify-content-lg-start justify-content-center mt-5">
                            <nav aria-label="Page navigation example">
                                <?php  echo $pagination; ?>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

        </main>




