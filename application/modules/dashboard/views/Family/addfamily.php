<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add Families</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-offset-0 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_addfamily_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="addFamilyForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/family/addnewfamily" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_familyname'); ?> (*)</label>
                                    <input type="text" name="familyname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_familyleader'); ?></label>
                                    <input type="text" id="lname" name="familyleader" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">	                                        
                            <div class="col-md-6">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_familyquantity'); ?></label>
                                    <input type="number" min="1" id="phone" name="memberquantity" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_familycontact'); ?></label>
                                    <input type="text" id="email" name="familycontact" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_address'); ?></label>
                                    <textarea type="text" id="address" name="address" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_city'); ?></label>
                                    <input type="text" id="city" name="city" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_country'); ?></label>
                                    <input type="text" id="country" name="country" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-control"><?php echo $this->lang->line('dash_gpanel_zone'); ?></label>
                                    <input type="text" id="postal" name="postal" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addFamilySubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_addfamily_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>