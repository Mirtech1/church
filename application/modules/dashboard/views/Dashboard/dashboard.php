<!-- Start Content-->
 <?php $user_position = $this->session->userdata('user_position');?> 
<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
        </div>
    </div>
    <?php if($user_position == "Admin"){ ?>     
    <!-- start row -->
    <div class="row g-3">
        
        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                <div class="bg-primary rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_total_user'); ?></p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php echo $user; ?></h3>
                            <div class="text-center">
                                <span class="text-primary fs-14"><i class="mdi mdi-trending-up fs-14"></i>
                                <p class="text-dark fs-13 mb-0"><?php echo $this->lang->line('dash_total'); ?>  <?php echo $user; ?> <?php echo $this->lang->line('dash_users'); ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-danger border-opacity-10 bg-danger-subtle rounded-pill me-2">
                                <div class="bg-danger rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_total_pastor'); ?></p>   
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php echo $pastor; ?></h3>
                            <div class="text-center">
                                <span class="text-primary fs-14 me-2"><i class="mdi mdi-trending-up fs-14"></i></span>
                                <p class="text-dark fs-13 mb-0"><?php echo $this->lang->line('dash_total'); ?> <?php echo $pastor; ?> <?php echo $this->lang->line('dash_pastors'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-warning border-opacity-10 bg-warning-subtle rounded-pill me-2">
                                <div class="bg-warning rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_total_member'); ?></p>
                        </div>
                        

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php echo $member; ?></h3>

                            <div class="text-muted">
                                <span class="text-success fs-14 me-2"><i class="mdi mdi-trending-up fs-14"></i></span>
                                <p class="text-dark fs-13 mb-0"><?php echo $this->lang->line('dash_total'); ?> <?php echo $member; ?> <?php echo $this->lang->line('dash_members'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end start -->
    <?php }else{ ?>
    <div class="row g-3">
        
        <div class="col-md-6 col-xl-6">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                <div class="bg-primary rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_allposts_panel_title'); ?></p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php $this->db->from('blog');
                            $this->db->where('author', $this->session->userdata('user_id'));
                            echo $this->db->count_all_results(); ?></h3>
                            <div class="text-center">
                                <span class="text-primary fs-14"><i class="mdi mdi-trending-up fs-14"></i>
                                <p class="text-dark fs-13 mb-0"><?php echo $this->lang->line('dash_allposts_panel_title'); ?> <?php $this->db->from('blog');
                            $this->db->where('author', $this->session->userdata('user_id'));
                            echo $this->db->count_all_results(); ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-6">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                <div class="bg-warning rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M5.574 4.691c-.833.692-1.052 1.862-1.491 4.203l-.75 4c-.617 3.292-.926 4.938-.026 6.022C4.207 20 5.88 20 9.23 20h5.54c3.35 0 5.025 0 5.924-1.084c.9-1.084.591-2.73-.026-6.022l-.75-4c-.439-2.34-.658-3.511-1.491-4.203C17.593 4 16.403 4 14.02 4H9.98c-2.382 0-3.572 0-4.406.691" opacity="1"></path><path fill="#988D4D" d="M12 9.25a2.251 2.251 0 0 1-2.122-1.5a.75.75 0 1 0-1.414.5a3.751 3.751 0 0 0 7.073 0a.75.75 0 1 0-1.414-.5A2.251 2.251 0 0 1 12 9.25"></path></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_menu_allorders'); ?></p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php $this->db->from('orders');
                            $this->db->where('orderUserID', $this->session->userdata('user_id'));
                            echo $this->db->count_all_results(); ?></h3>
                            <div class="text-center">
                                <span class="text-success fs-14 me-2"><i class="mdi mdi-trending-up fs-14"></i></span>
                                <p class="text-dark fs-13 mb-0"><?php echo $this->lang->line('dash_menu_allorders'); ?> <?php $this->db->from('orders');
                            $this->db->where('orderUserID', $this->session->userdata('user_id'));
                            echo $this->db->count_all_results(); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</div> <!-- container-fluid -->
