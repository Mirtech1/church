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
                    <h4 class="title"><?php echo $this->lang->line('dash_adduser_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="addUserForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/user/addnewuser" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_fname'); ?> (*)</label>
                                    <input type="text" id="fname" name="fname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_lname'); ?></label>
                                    <input type="text" id="lname" name="lname" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_phone'); ?> (*)</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_email'); ?> (*)</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_pass'); ?> (*)</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_cpass'); ?> (*)</label>
                                    <input type="password" id="conpassword" name="conpassword" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_position'); ?> (*)</label>
                                    <select name="position" class="form-control select" required>
                                        <option value=""><?php echo $this->lang->line('dash_gpanel_spt'); ?></option>
                                        <option value="Superadmin">Superadmin</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Contributor">Contributor</option>
                                        <option value="Subscriber">Subscriber</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Commissioner">Commissioner</option>
                                        <option value="Coordinator">Coordinator</option>
                                        <option  value="Others">Others</option>
                                    </select>
                                    <span class="material-input"></span></div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_bpdate'); ?></label>
                                    <input type="text" id="bpdate" name="bpdate" class="datepicker form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_blood'); ?></label>
                                    <input type="text" id="blood" name="blood" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_dob'); ?></label>
                                    <input type="text" id="dob" name="dob" class="datepicker form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_nationality'); ?></label>
                                    <input type="text" id="nationality" name="nationality" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_about'); ?></label>
                                    <textarea type="text" rows="5" id="about" name="about" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_address'); ?></label>
                                    <textarea type="text" rows="5" id="address" name="address" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_city'); ?></label>
                                    <input type="text" id="city" name="city" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_country'); ?></label>
                                    <input type="text" id="country" name="country" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_zone'); ?></label>
                                    <input type="text" id="postal" name="postal" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_facebook'); ?></label>
                                    <input type="text" id="fname" name="facebook" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_twitter'); ?></label>
                                    <input type="text" id="fname" name="twitter" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_googleplus'); ?></label>
                                    <input type="text" id="lname" name="googleplus" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_linkedin'); ?></label>
                                    <input type="text" id="position" name="linkedin" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_youtube'); ?></label>
                                    <input type="text" id="fname" name="youtube" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_pinterest'); ?></label>
                                    <input type="text" id="fname" name="pinterest" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_instagram'); ?></label>
                                    <input type="text" id="lname" name="instagram" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group py-1 is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_whatsapp'); ?></label>
                                    <input type="text" id="position" name="whatsapp" class="form-control">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addUserFormSubmit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_adduser_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>