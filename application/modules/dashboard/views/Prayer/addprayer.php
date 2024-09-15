<div class="container">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add prayer</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_addprayer_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="addPrayerForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/prayer/addnewprayer" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_title'); ?> (*)</label>
                                    <input type="text" id="title" name="title" class="form-control" required>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                    <textarea rows="5" type="text" id="description" name="description" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addPrayerSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_addprayer_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>