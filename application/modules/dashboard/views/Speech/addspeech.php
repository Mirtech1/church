<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add speech</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_addspeech_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="addSpeechForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/speech/addnewspeech" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <style>
                                        /* Limit image width to avoid overflow the container */
                                        img {
                                            max-width: 25%; /* This rule is very important, please do not ignore this! */
                                        }
                                </style>

                                <div class="imageWrapper d-flex justify-content-center align-items-center">
                                    <img id="image" src="">
                                </div>

                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating">
                                    <label class="image_select_text"><?php echo $this->lang->line('dash_gpanel_spp'); ?></label>
                                    <input type="file" onchange="previewFile()" name="profileimage" id="profileimage" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_fname'); ?> (*)</label>
                                    <input type="text" id="fname" name="fname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_lname'); ?></label>
                                    <input type="text" id="lname" name="lname" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_position'); ?> (*)</label>
                                    <input type="text" id="position" name="position" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_speech'); ?></label>
                                    <textarea type="text" id="speech" name="speech" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_facebook'); ?></label>
                                    <input type="text" id="fname" name="facebook" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_twitter'); ?></label>
                                    <input type="text" id="fname" name="twitter" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_googleplus'); ?></label>
                                    <input type="text" id="lname" name="googleplus" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_linkedin'); ?></label>
                                    <input type="text" id="position" name="linkedin" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_youtube'); ?></label>
                                    <input type="text" id="fname" name="youtube" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_pinterest'); ?></label>
                                    <input type="text" id="fname" name="pinterest" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_instagram'); ?></label>
                                    <input type="text" id="lname" name="instagram" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_whatsapp'); ?></label>
                                    <input type="text" id="position" name="whatsapp" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addSpeechSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_addspeech_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
