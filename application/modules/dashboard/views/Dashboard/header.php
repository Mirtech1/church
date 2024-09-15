<?php
$cmodule = $this->uri->segment(1); //Church Module
$ccontroller = $this->uri->segment(2); //Church Controller
$cmethod = $this->uri->segment(3); //Church Method

if (!$ccontroller && $cmodule == "dashboard") {
    $itdash = "dashboard";
} else {
    $itdash = "notdashboard";
}

$user_position = $this->session->userdata('user_position');
$siteinfo = $this->db->get('websitebasic');
$siteinfo = $siteinfo->result();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>dep/<?php echo base_url(); ?>dep/images/website/<?php echo $siteinfo[0]->favicon; ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo $siteinfo[0]->title; ?> | <?php echo $siteinfo[0]->tag; ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>dep/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Cropper CDN CSS     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Main JS Loading Here -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <!-- App css -->
    <link href="<?php echo base_url(); ?>dep/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="<?php echo base_url(); ?>dep/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>dep/libs/quill/quill.core.js" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>dep/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>dep/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-menu-color="light" data-sidebar="default">

    <div id="app-layout">

        <div class="topbar-custom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>
                        <li class="d-none d-lg-block">
                            <h5 class="mb-0"><?php echo $siteinfo[0]->title; ?> | <?php echo $siteinfo[0]->tag; ?></h5>
                        </li>
                    </ul>

                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                        <li class="d-none d-sm-flex">
                            <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                            </button>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>dep/images/users/user-5.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    John Smith <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a class='dropdown-item notify-item' href='<?php echo base_url(); ?>dashboard/setting/profile'>
                                    <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                    <span>View profile</span>
                                </a>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='<?php echo base_url(); ?>dashboard/website/header'>
                                    <i class="mdi mdi-cog-outline fs-16 align-middle"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a class='dropdown-item notify-item' href='<?php echo base_url(); ?>access/login/logout/'>
                                    <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>
                </div>

            </div>
        </div>

        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' href='index.html'>
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>assets/assets/images/website/<?php echo $siteinfo[0]->logo; ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>assets/assets/images/website/<?php echo $siteinfo[0]->logo; ?>" alt="" height="24">
                            </span>
                        </a>
                        <a class='logo logo-dark' href='index.html'>
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>assets/assets/images/website/<?php echo $siteinfo[0]->logo; ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>assets/assets/images/website/<?php echo $siteinfo[0]->logo; ?>" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <ul id="side-menu">

                        <li class="menu-title">Menu</li>

                        <li class="<?php
                                if ($itdash == "dashboard") {
                                    echo "menuitem-active";
                                }
                                ?>">
                            <a href="<?php echo base_url('dashboard'); ?>" class="<?php
                                if ($itdash == "dashboard") {
                                    echo "tp-link active";
                                }
                                ?>">
                                <i data-feather="home"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title">Pages</li>
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->website) && chkpms()->website == "on") { ?>
                            <li class="<?php if ($ccontroller == "website" || $ccontroller == "page" || $ccontroller == "menu" || $ccontroller == "section") {
                                            echo "menuitem-active";
                                        } ?>">
                                <a href="#sidebarWebsite" data-bs-toggle="collapse">
                                    <i data-feather="home"></i>
                                    <span><?php echo $this->lang->line('dash_menu_website'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarWebsite">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "website" || $ccontroller == "page" || $ccontroller == "section" || $ccontroller == "menu") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "header") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/website/header'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_basic'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($ccontroller == "menu") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/menu'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_menus'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "slider") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/website/slider'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_slider'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "gallery") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/website/gallery'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_gallery'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($ccontroller == "section") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/section'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_section'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($ccontroller == "page") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/page'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_page'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php }
                        } ?>
                        
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->finance) && chkpms()->finance == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "financial") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarFinance" data-bs-toggle="collapse">
                                    <i data-feather="dollar-sign"></i>
                                    <span><?php echo $this->lang->line('dash_menu_financial'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarFinance">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "financial") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "funds") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/financial/funds'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_finfunds'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "donation") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/financial/donation'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_findonations'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "assets") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/financial/assets'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_fincassets'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->sermon) && chkpms()->sermon == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "sermon") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarSermon" data-bs-toggle="collapse">
                                    <i data-feather="mic"></i>
                                    <span><?php echo $this->lang->line('dash_menu_sermons'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarSermon">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "sermon") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "addsermon") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/sermon/addsermon'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addsermon'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "allsermons") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/sermon/allsermons'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allsermons'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>
                        
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->event) && chkpms()->event == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "event") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarEvent" data-bs-toggle="collapse">
                                    <i data-feather="bell"></i>
                                    <span><?php echo $this->lang->line('dash_menu_events'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarEvent">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "event") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "addevent") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/event/addevent'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addevent'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "allevents") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/event/allevents'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allevents'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "registered") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/event/addapplicant'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addapplicant'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "registered") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/event/applicants'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allapplicants'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>
                        
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->prayer) && chkpms()->prayer == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "prayer") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarPrayer" data-bs-toggle="collapse">
                                    <i data-feather="bookmark"></i>
                                    <span><?php echo $this->lang->line('dash_menu_prayer'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarPrayer">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "prayer") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "addprayer") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/prayer/addprayer'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addprayer'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "allprayers") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/prayer/allprayers'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allprayers'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->notice) && chkpms()->notice == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "notice") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarNotice" data-bs-toggle="collapse">
                                    <i data-feather="bookmark"></i>
                                    <span><?php echo $this->lang->line('dash_menu_notice'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarNotice">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "notice") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "addnotice") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/notice/addnotice'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addnotice'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "allnotices") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/notice/allnotices'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allnotices'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->family) && chkpms()->family == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "family") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarFamily" data-bs-toggle="collapse">
                                    <i data-feather="users"></i>
                                    <span><?php echo $this->lang->line('dash_menu_families'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarFamily">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "family") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "addfamily") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/family/addfamily'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_addfamily'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "allfamily") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/family/allfamily'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_allfamilies'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>
                        
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->department) && chkpms()->department == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "department") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarDepartment" data-bs-toggle="collapse">
                                    <i data-feather="grid"></i>
                                    <span><?php echo $this->lang->line('dash_menu_department'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarDepartment">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "department") {
                                                    echo "menuitem-active";
                                                }
                                                ?> nav_child">

                                        <li class="<?php
                                                    if ($cmethod == "adddepartment") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/department/adddepartment'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_adddepartment'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "alldepartment") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/department/alldepartment'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_alldepartment'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>
                        
                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->member) && chkpms()->member == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "member") {
                        echo "menuitem-active";
                    }
                    ?> nav_parent">
            <a href="#sidebarMember" data-bs-toggle="collapse">
                <i data-feather="users"></i>
                <span><?php echo $this->lang->line('dash_menu_members'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarMember">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "member") {
                                echo "menuitem-active";
                            }
                            ?> nav_child">

                    <li class="<?php
                                if ($cmethod == "addmember") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/member/addmember'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_addmembers'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allmembers") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/member/allmembers'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allmembers'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->pastor) && chkpms()->pastor == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "pastor") {
                        echo "menuitem-active";
                    }
                    ?> nav_parent">
            <a href="#sidebarPastor" data-bs-toggle="collapse">
                <i data-feather="users"></i>
                <span><?php echo $this->lang->line('dash_menu_pastors'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarPastor">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "pastor") {
                                echo "menuitem-active";
                            }
                            ?> nav_child">

                    <li class="<?php
                                if ($cmethod == "addpastor") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/pastor/addpastor'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_addpastors'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allpastors") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/pastor/allpastors'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allpastors'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->user) && chkpms()->user == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "user") {
                        echo "menuitem-active";
                    }
                    ?>">
            <a href="#sidebarUsers" data-bs-toggle="collapse">
                <i data-feather="users"></i>
                <span><?php echo $this->lang->line('dash_menu_users'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarUsers">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "user") {
                                echo "menuitem-active";
                            }
                            ?>">

                    <li class="<?php
                                if ($cmethod == "adduser") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/user/adduser'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_adduser'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allusers") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/user/allusers'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allusers'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "roles") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/user/roles'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_roles'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->seminar) && chkpms()->seminar == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "seminar") {
                        echo "menuitem-active";
                    }
                    ?>">
            <a href="#sidebarSeminars" data-bs-toggle="collapse">
                <i data-feather="sun"></i>
                <span><?php echo $this->lang->line('dash_menu_seminars'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarSeminars">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "seminar") {
                                echo "menuitem-active";
                            }
                            ?>">

                    <li class="<?php
                                if ($cmethod == "addseminar") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/seminar/addseminar'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_addseminar'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allseminar") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/seminar/allseminar'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allseminars'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allregistered") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/seminar/applicants'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allapplicants'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->attendance) && chkpms()->attendance == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "attendance") {
                        echo "menuitem-active";
                    }
                    ?>">
            <a href="#sidebarAttendance" data-bs-toggle="collapse">
                <i data-feather="check-square"></i>
                <span><?php echo $this->lang->line('dash_menu_attendance'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarAttendance">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "attendance") {
                                echo "menuitem-active";
                            }
                            ?>">

                    <li class="<?php
                                if ($cmethod == "attendancetype") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/attendance/addtype'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_attendancetype'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "attendance") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/attendance'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_attendancebrowse'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <!-- communication -->
                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->communicaction) && chkpms()->communicaction == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "communication") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="#sidebarCommunication" data-bs-toggle="collapse">
                                    <i data-feather="message-circle"></i>
                                    <span><?php echo $this->lang->line('dash_menu_communication'); ?></span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarCommunication">
                                    <ul class="nav-second-level <?php
                                                if ($ccontroller == "communication") {
                                                    echo "menuitem-active";
                                                }
                                                ?>">

                                        <li class="<?php
                                                    if ($cmethod == "sms") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/communication/sms'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_sms'); ?>
                                            </a>
                                        </li>

                                        <li class="<?php
                                                    if ($cmethod == "email") {
                                                        echo "menuitem-active";
                                                    }
                                                    ?>">
                                            <a href="<?php echo base_url('dashboard/communication/email'); ?>" class="tp-link">
                                                <?php echo $this->lang->line('dash_menu_email'); ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->blog) && chkpms()->blog == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "blog") {
                        echo "menuitem-active";
                    }
                    ?>">
            <a href="#sidebarBlog" data-bs-toggle="collapse">
                <i data-feather="book-open"></i>
                <span><?php echo $this->lang->line('dash_menu_blog'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarBlog">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "blog") {
                                echo "menuitem-active";
                            }
                            ?>">

                    <li class="<?php
                                if ($cmethod == "addpost") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/blog/addpost'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_addblog'); ?>
                        </a>
                    </li>

                    <li class="<?php
                                if ($cmethod == "allposts") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/blog/allposts'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allblog'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
    <?php if (isset(chkpms()->shop) && chkpms()->shop == "on") { ?>
        <li class="<?php
                    if ($ccontroller == "shop") {
                        echo "menuitem-active";
                    }
                    ?>">
            <a href="#sidebarShop" data-bs-toggle="collapse">
                <i data-feather="shopping-bag"></i>
                <span><?php echo $this->lang->line('dash_menu_shop'); ?></span>
                <span class="menu-arrow"></span>
            </a>

            <div class="collapse" id="sidebarShop">
                <ul class="nav-second-level <?php
                            if ($ccontroller == "shop") {
                                echo "menuitem-active";
                            }
                            ?>">

                    <?php 
                    $userID = $this->session->user_id;
                    $userPosition = $this->session->user_position;
                    if ($userPosition !== 'Contributor' && $userPosition !== 'Subscriber') { ?>
                        <li class="<?php
                                    if ($cmethod == "addproduct") {
                                        echo "menuitem-active";
                                    }
                                    ?>">
                            <a href="<?php echo base_url('dashboard/shop/addproduct'); ?>" class="tp-link">
                                <?php echo $this->lang->line('dash_menu_addproduct'); ?>
                            </a>
                        </li>

                        <li class="<?php
                                    if ($cmethod == "allproducts") {
                                        echo "menuitem-active";
                                    }
                                    ?>">
                            <a href="<?php echo base_url('dashboard/shop/allproducts'); ?>" class="tp-link">
                                <?php echo $this->lang->line('dash_menu_allproducts'); ?>
                            </a>
                        </li>
                    <?php } ?>

                    <li class="<?php
                                if ($cmethod == "orders") {
                                    echo "menuitem-active";
                                }
                                ?>">
                        <a href="<?php echo base_url('dashboard/shop/allorders'); ?>" class="tp-link">
                            <?php echo $this->lang->line('dash_menu_allorders'); ?>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    <?php } ?>
                        <?php } ?>

                        <?php if ($user_position) { ?>
                        <?php if (isset(chkpms()->import) && chkpms()->import == "on") { ?>
                            <li class="<?php
                                        if ($ccontroller == "import") {
                                            echo "menuitem-active";
                                        }
                                        ?>">
                                <a href="<?php echo base_url('dashboard/import'); ?>">
                                    <i data-feather="upload"></i>
                                    <span><?php echo $this->lang->line('dash_menu_import'); ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>




                        



                    </ul>
        
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <div class="content-page">
            <div class="content">