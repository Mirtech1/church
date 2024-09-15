<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All seminars</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_addSeminar_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="addSeminarForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/seminar/addnewseminar" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="imageWrapper">
                                    <img id="image" src="">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating">
                                    <p class="image_select_text"><?php echo $this->lang->line('dash_gpanel_ssb'); ?></p>
                                    <input type="file" onchange="seminarbanner()" name="profileimage" id="profileimage" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_title'); ?> (*)</label>
                                    <input type="text" id="title" name="title" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_slogan'); ?> (*)</label>
                                    <input type="text" id="slogan" name="slogan" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_description'); ?> (*)</label>
                                    <textarea type="text" id="description" name="description" class="form-control" required></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_start'); ?> (*)</label>
                                    <input type="text" id="basic-datepicker" name="sstart" class="form-control flatpickr-input" required>
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_end'); ?> (*)</label>
                                    <input type="text" id="basic-datepicker" name="send" class="form-control flatpickr-input" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_location'); ?></label>
                                    <input type="text" id="location" name="location" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>


                        <button id="addSeminarSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_addSeminar_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>