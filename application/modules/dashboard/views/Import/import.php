<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Import</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_menu_import'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    
                    <!--Speech Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_speech'); ?> (*) <span><a class="colorwhite" href="<?php echo base_url()?>files/speech.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></span></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="speech" class="form-control">
                                </div>
                            </div>                                                               
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0 mb-0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Events Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_event'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/event.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="event" class="form-control">
                                </div>
                            </div>                                
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Prayer Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_prayer'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/prayer.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="prayer" class="form-control">
                                </div>
                            </div>                                   
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Notice Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_notice'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/notice.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="notice" class="form-control">
                                </div>
                            </div>                                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Funds Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_funds'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/funds.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="funds" class="form-control">
                                </div>
                            </div>                                      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Donation Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_donation'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/donation.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="donation" class="form-control">
                                </div>
                            </div>                                         
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    
                    <!--Assets Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_assets'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/assets.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="assets" class="form-control">
                                </div>
                            </div>                                      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    <!--Users Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_users'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/users.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="users" class="form-control">
                                </div>
                            </div>                                           
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    
                    <!--Members Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_members'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/members.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="members" class="form-control">
                                </div>
                            </div>                                      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    
                    <!--Pastor Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_pastor'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/pastor.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="pastors" class="form-control">
                                </div>
                            </div>                                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    
                    <!--Seminar Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_seminar'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/seminar.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="seminar" class="form-control">
                                </div>
                            </div>                                           
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                    
                    <!--Seminar Applicants Import Form-->
                    <form id="addImportForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/import/import" method="post" enctype="multipart/form-data">
                        <div class="row">								
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="file_import_btn mb-0"><?php echo $this->lang->line('dash_gpanel_seminarapplicants'); ?> (*) <a class="colorwhite" href="<?php echo base_url()?>files/seminarapplicants.csv"><?php echo $this->lang->line('dash_gpanel_downloadcsv'); ?></a></p>													
                                    <input type="file" name="file" class="form-control">
                                    <input type="hidden" name="filetype" value="seminarapplicants" class="form-control">
                                </div>
                            </div>                                       
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button id="" type="submit" class="btn btn-primary pull-right margin0"><?php echo $this->lang->line('dash_gpanel_importnow'); ?></button>
                                </div>
                            </div>                                        
                        </div> 
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>