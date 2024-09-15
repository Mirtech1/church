<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add Department</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-offset-0 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_adddepartment_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="addDepartmentForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/department/addnewdepartment" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_dptname'); ?> (*)</label>
                                    <input type="text" name="departmentname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_dpthead'); ?></label>
                                    <input type="text" id="lname" name="departmentleader" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">	                                        
                            <div class="col-md-6">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_dptcontact'); ?></label>
                                    <input type="text" id="phone" name="departmentcontact" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_dptarea'); ?></label>
                                    <input type="text" id="email" name="departmentarea" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                                                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                    <textarea type="text" id="description" name="description" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_address'); ?></label>
                                    <textarea type="text" id="address" name="address" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_city'); ?></label>
                                    <input type="text" id="city" name="city" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_country'); ?></label>
                                    <input type="text" id="country" name="country" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_zone'); ?></label>
                                    <input type="text" id="postal" name="postal" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addDepartmentSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_adddepartment_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>