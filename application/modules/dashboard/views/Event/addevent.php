<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add event</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_addevent_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="addEventForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/event/addnewevent" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-offset-0 col-md-12">

                                <div class="imageWrapper d-flex align-items-center justify-content-center">
                                    <style>
                                        /* Limit image width to avoid overflow the container */
                                        img {
                                            max-width: 25%; /* This rule is very important, please do not ignore this! */
                                        }
                                    </style>
                                    <img id="image" src="">
                                </div>

                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating">
                                    <label class="form-label"></label> <?php echo $this->lang->line('dash_gpanel_spp'); ?></label>
                                    <input type="file" onchange="eventFeaturePhoto()" name="profileimage" id="profileimage" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_title'); ?> (*)</label>
                                    <input type="text" id="eventtitle" name="eventtitle" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_date'); ?> (*)</label>
                                    <input type="text" id="basic-datepicker" name="eventdate" class="flatpickr-input form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_time'); ?> (*)</label>
                                    <input type="text" id="basic-timepicker" name="eventtime" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_location'); ?> (*)</label>
                                    <input type="text" id="eventlocation" name="eventlocation" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                    <textarea rows="5" type="text" id="eventdescription" name="eventdescription" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addEventSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_addevent_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>