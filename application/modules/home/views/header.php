
<?php
if ($this->uri->uri_string() == '') {
    $home = true;
} else {
    $home = false;
}
?>

<?php

    $query = $this->db->get('websitebasic');
    foreach ($query->result() as $basic):
?>

<!DOCTYPE html>

<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->favicon;?>"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $basic->title;?> | <?php echo $basic->tag;?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&amp;family=Sora:wght@100..800&amp;display=swap">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/font-awesome-5.15.4/fontawesome-all.min.css">

        <!-- Bootstrap And Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/bootstrap-5.3.2/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/animate/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/odometer/odometer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/swiper/swiper-bundle.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/library/aos/aos.css">

        <!-- Custom - CSS here -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>landingdep/style.css">

        <style>
            <?php $themeColor = $basic->color;?>

            a {
                color: <?php echo $themeColor; ?>;
            }

            .header_sec_bg {
                background: <?php echo $themeColor; ?> !important;
                position: relative !important;
            }

            .header_sec_bg .navbar-nav li ul li a:focus, .navbar-nav li ul li a:hover {
                color: <?php echo $themeColor; ?>
            }

/*            .header_section {
                background: <?php echo $themeColor; ?> !important;
            }*/

            .navbar-nav li ul li a:hover {
                color: <?php echo $themeColor; ?>;
                border-bottom:1px solid;
            }

            .allperson ul.pagination li.active a {
                background: <?php echo $themeColor; ?>;
            }

            .allperson ul.pagination li a {
                color: <?php echo $themeColor; ?>;
            }

            .person-view a.socialbtn, .footer a.socialbtn, .sermon a.socialbtn {
                background: <?php echo $themeColor; ?>;
                color: #fff;
            }

            .person-view a.socialbtn {
                background: <?php echo $themeColor; ?>;
                color: #fff;
            }

            .carousel-indicators .active {
                background-color: <?php echo $themeColor; ?> !important;
            }

            .cs_sections h2 {
                color: <?php echo $themeColor; ?>;
            }

            .separator:before, .separator:after {
                border: 1px solid <?php echo $themeColor; ?>;
            }

            .separator {
                color: <?php echo $themeColor; ?>;
            }

            .cs_sections .pastors h4 {
                color: <?php echo $themeColor; ?>;
            }

            .cs_sections .pastors a.read_more:hover {
                color: <?php echo $themeColor; ?> !important;
                border: 1px solid <?php echo $themeColor; ?> !important;
            }

            .owl-dots .owl-dot.active span, .owl-dots .owl-dot:hover span {
                background: <?php echo $themeColor; ?>;
            }

            .cs_sections .pastors a {
                color: <?php echo $themeColor; ?>;
            }

            blockquote {
                border-left: 5px solid <?php echo $themeColor; ?>;
            }

            ul.nav.nav-tabs.tab li.active a, ul.nav.nav-tabs.tab li a:hover {
                color: #ffffff;
                background: rgba(255, 255, 255, 0.06) !important;
            }

            .fc th {
                color:#ffffff;
            }

            .fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
                color:#ffffff;
            }

            .fc-event, .fc-event-dot {
                background: rgba(255, 255, 255, 0.06) !important;
            }

            .fc-unthemed td.fc-today {
                background: rgba(255, 255, 255, 0.06) !important;
            }

            .column input#submit {
                background: <?php echo $themeColor; ?>;
            }

            .box {
                background: <?php echo $themeColor; ?>;
            }

            a.read_more {
                border: 1px solid <?php echo $themeColor; ?>;
                background: <?php echo $themeColor; ?>;
            }

            .parallax a.read_more:hover {
                border: 0;
                border: 1px solid <?php echo $themeColor; ?>;
                background: <?php echo $themeColor; ?>;
                color: #fff;
            }

            .prayer_request h4, .event h4, .church_time h4 {
                background: linear-gradient(60deg, <?php echo $themeColor; ?>, rgba(142, 36, 170, 0));
            }


            /* .donation_sector {
                background: <?php echo $themeColor; ?>;
            }


            .next_event_sector {
                background: <?php echo $themeColor; ?>;
            } */

            .next_event_sector #countdown_clock {
                color: #fff;
            }

            .next_event_sector #countdown_clock span {
                background: #fff;
                color:#3d4de7;
                /* color:<?php echo $themeColor; ?> !important; */
            }

            .next_event_sector #countdown_clock span small {
                color:#3d4de7;
                /* color:<?php echo $themeColor; ?> !important; */
            }

            /* .next_event_sector p.buttons a {
                color: <?php echo $themeColor; ?> !important;
                border: 1px solid #fff !important;
                background: #fff !important;
            }

            .next_event_sector p.buttons a:hover {
                color: #fff !important;
                border: 1px solid #fff !important;
                background: <?php echo $themeColor; ?> !important;
            } */

            .sermon .right .btn {
                background: <?php echo $themeColor; ?>;
            }

            .footer-below {
                background: <?php echo $themeColor; ?>;
            }

            ul.pagination li.active a {
                background: <?php echo $themeColor; ?>;
            }

            ul.pagination li a {
                color: <?php echo $themeColor; ?>;
            }

            a.scroll {
                background: <?php echo $themeColor; ?>;
            }


        </style>

    </head>
    <body>
        <!-- <div id="preloader">
            <div id="loader" class="loader">
                <div class="loader-container text-center">
                    <div class="loader-icon"><img src="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->logo;?>" alt="Preloader"></div>
                    <h6 class="text-center"><?php echo $basic->title; ?></h6>
                </div>
            </div>
        </div> -->
        <header class="transparent-header">
            <div class="tc-header__top d-none d-xxl-block d-xl-block">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 justify-content-md-center">
                            <div class="position-relative overflow-hidden top-news">
                                <div class="swiper-1-vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="d-flex fs-7 fw-normal align-items-center justify-content-md-center justify-content-lg-start mb-md-2 mb-lg-0">
                                                <span class="me-2 has-dot"><strong>UP COMING:</strong> St. Patrick's Cathedral Day of Giving</span>
                                                <a href="blog-details.html" class="d-flex rounded-5 tc-btn-xs">
                                                    <span>Read More</span>
                                                    <i data-feather="arrow-right" class="size-12"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex fs-7 fw-normal align-items-center justify-content-md-center justify-content-lg-start mb-md-2 mb-lg-0">
                                                <span class="me-2 has-dot"><strong>UP COMING:</strong> Renewal Retreat: Restoring Spirit, Mind & Body</span>
                                                <a href="blog-details.html" class="d-flex rounded-5 tc-btn-xs">
                                                    <span>Read More</span>
                                                    <i data-feather="arrow-right" class="size-12"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex fs-7 fw-normal align-items-center justify-content-md-center justify-content-lg-start mb-md-2 mb-lg-0">
                                                <span class="me-2 has-dot"><strong>UP COMING:</strong> Sacred Steps: Charity Walk for Compassion and Hope</span>
                                                <a href="blog-details.html" class="d-flex rounded-5 tc-btn-xs">
                                                    <span>Read More</span>
                                                    <i data-feather="arrow-right" class="size-12"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="tc-header__top-right list-wrap fs-7 fw-normal">
                                <li>
                                    <i class="size-16" data-feather="phone"></i>
                                    <a href="tel:2295550109"><span class="text-dark">(229) 555-0109</span></a>
                                </li>
                                <li>
                                    <i class="size-16" data-feather="map-pin"></i>
                                    <span class="text-dark">2118 Thornridge Cir. Syracuse, Connecticut 35624</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- While User Scroll to Dispaly Sticky Header
            =============================================== -->
            <div id="sticky-header" class="tc-header__area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tgmenu__wrap py-xxl-0 py-xl-0 py-3">
                                <nav class="tgmenu__nav d-flex align-items-center justify-content-between justify-content-xxl-between justify-content-xl-evenly">
                                    <div class="logo">
                                        <a class="d-flex align-items-center" href="<?php echo base_url();?>">
                                            <img src="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->logo;?>" alt="Blessed">
                                        </a>
                                    </div>
                                    <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xxl-flex d-xl-flex">
                                        <!--Main Menu-->
                                        <ul class="navigation">
                                            <?php

                                            $this->db->where('menuparentid', " ");
                                            $this->db->order_by('serialid', "ase");
                                            $parentmenu = $query = $this->db->get('menu');
                                            $parentmenu->result();

                                                foreach ($parentmenu->result() as $row) { 
                                                $this->db->where('menuparentid', $row->menuid);
                                                $pmquery = $this->db->get('menu');
                                                ?>
                                            <li class="<?php if($pmquery->num_rows() > 0){ echo "menu-item-has-children";} ?>"><a href="<?php if($row->menupageid){echo base_url('home/page'). "/". $row->menupageid;}else{echo ($row->menulink !='') ? $row->menulink : 'javascript:'; } ?>"><?php echo $row->menuname;?> <?php if( $pmquery->num_rows() > 0 ){ echo '<i class="fa-fw fa fa-angle-down"></i>'; } ?></a>
                                            <?php
                                                $this->db->where('serialid', $row->menuid);
                                                $this->db->order_by('subserialid', "ase");
                                                $cmquery = $this->db->get('menu');

                                                if($cmquery->num_rows() > 0){ ?>
                                                <ul class="sub-menu">
                                                    <?php foreach ($cmquery->result() as $cm) { ?>
                                                        <li><a href="<?php echo $cm->menulink;?>"><?php echo $cm->menuname;?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="tgmenu__action d-none d-xxl-flex">
                                        <ul class="list-wrap">
                                            <li class="header-search">
                                                <a href="javascript:" class="search-open-btn">
                                                    <i class="size-24" data-feather="search"></i>
                                                </a>
                                            </li>
                                            <li class="header-language d-none d-xl-block">
                                                <a href="javascript:" class="d-inline-flex align-items-center gap-1">
                                                    <i class="size-16" data-feather="globe"></i>
                                                    <span class="fs-6 text-400">EN</span>
                                                    <i class="size-16" data-feather="chevron-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a class="dropdown-item" href="javascript:">English</a></li>
                                                    <li><a class="dropdown-item" href="javascript:">French</a></li>
                                                    <li><a class="dropdown-item" href="javascript:">German</a></li>
                                                    <li><a class="dropdown-item" href="javascript:">Spanish</a></li>
                                                </ul>
                                            </li>
                                            <li class="header-btn">
                                                <a href="javascript:" class="btn text-white rounded-5 btn-circle-arrow menu-tigger">
                                                    <span>Book Ticket</span>
                                                    <span class="bg-transparent ms-2">
                                                        <i class="size-16" data-feather="arrow-right"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mobile-nav-toggler d-block d-xxl-none d-xl-none d-flex justify-content-center align-items-center justify-content-end">
                                        <i data-feather="menu"></i>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="tgmobile__menu">
                                <nav class="tgmobile__menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->logo;?>" alt="Blessed"></a>
                                    </div>
                                    <div class="tgmobile__search"></div>
                                    <div class="tgmobile__menu-outer">
                                    </div>
                                    <div class="tgmobile__menu-bottom">
                                        <div class="contact-info">
                                            <ul class="list-wrap">
                                                <li><a href="mailto:contact@blessed.com">contact@blessed.com</a></li>
                                                <li><a href="tel:2295550109">(229) 555-0109</a></li>
                                            </ul>
                                        </div>
                                        <div class="social-links">
                                            <ul class="list-wrap">
                                                <li><a href="javascript:"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="javascript:"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="tgmobile__menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Contact Us Sidebar
            ============================= -->
            <div class="offCanvas__info">
                <div class="offCanvas__close-icon menu-close">
                    <button><i class="far fa-window-close"></i></button>
                </div>
                <div class="offCanvas__logo mb-30">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->logo;?>" alt="Blessed"></a>
                </div>
                <div class="offCanvas__side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>
                            123/A, Miranda City Likaoli <br>
                            Prikano, Dope
                        </p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <div class="offCanvas__social-icon mt-30">
                    <a href="javascript:"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:"><i class="fab fa-google-plus-g"></i></a>
                    <a href="javascript:"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offCanvas__overly"></div>

        </header>
        
<?php endforeach;?>
