<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Roles</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_menu_roles'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form action="<?php echo base_url(); ?>dashboard/user/rolepermission" method="post" enctype="multipart/form-data">
                        <div class="row py-1">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_menu_srole'); ?> (*)</label>
                                    <select name="roletype" class="form-control roletype" required>
                                        <option value=""><?php echo $this->lang->line('dash_menu_srole'); ?></option>
                                        <option value="1">Superadmin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Contributor</option>
                                        <option value="4">Subscriber</option>
                                        <option value="5">Manager</option>
                                        <option value="6">Commissioner</option>
                                        <option value="7">Coordinator</option>
                                        <option  value="8">Others</option>
                                    </select>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                        <div class="row py-1">
                                <div class="checkbox col-md-3">
                                        <input type="checkbox" name="website" id="website">
                                        <label for="website" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_website'); ?></label>
                                </div>
                                <div class="checkbox col-md-3">
                                        <input type="checkbox" name="finance" id="finance">
                                        <label for="finance" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_financial') ?></label>
                                </div>
                                <div class="checkbox col-md-3">
                                        <input type="checkbox" name="sermons" id="sermons">
                                        <label for="sermons" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_sermons') ?></label>
                                </div>
                                <div class="checkbox col-md-3">
                                        <input type="checkbox" name="events" id="events">
                                        <label for="events" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_events'); ?></label>
                                </div>
                        </div>

                        <div class="row py-1">
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="prayers" id="prayers">
                                    <label for="prayers" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_prayer') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="notice" id="notice">
                                    <label for="notice" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_notice') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="speech" id="speech">
                                    <label for="speech" class="radGroup1 chk"><?php echo $this->lang->line('dash_gpanel_speech'); ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="family" id="family">
                                    <label for="family" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_families') ?></label>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="department" id="department">
                                    <label for="department" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_department') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="committee" id="committee">
                                    <label for="committee" class="radGroup1 chk"><?php echo $this->lang->line('dash_gpanel_committee'); ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="members" id="members">
                                    <label for="members" class="radGroup1 chk"><?php echo $this->lang->line('dash_gpanel_members') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="pastors" id="pastors">
                                    <label for="pastors" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_pastors') ?></label>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="clans" id="clans">
                                    <label for="clans" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_clans'); ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="chorus" id="chorus">
                                    <label for="chorus" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_chorus') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="staffs" id="staffs">
                                    <label for="staffs" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_churchstaffs') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="sundays" id="sundays">
                                    <label for="sundays" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_sundayschool'); ?></label>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="users" id="users">
                                    <label for="users" class="radGroup1 chk"><?php echo $this->lang->line('dash_users') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="seminar" id="seminar">
                                    <label for="seminar" class="radGroup1 chk"><?php echo $this->lang->line('dash_gpanel_seminar') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                <input type="checkbox" name="attendance" id="attendance">
                                <label for="attendance" class="radGroup1 chk"><?php echo $this->lang->line('dash_gpanel_attendance'); ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="communication" id="communication">
                                    <label for="communication" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_communication') ?></label>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="blog" id="blog">
                                    <label for="blog" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_blog') ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="shop" id="shop">
                                    <label for="shop" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_shop'); ?></label>
                            </div>
                            <div class="checkbox col-md-3">
                                    <input type="checkbox" name="import" id="import">
                                    <label for="import" class="radGroup1 chk"><?php echo $this->lang->line('dash_menu_import'); ?></label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary pull-right mt-2"><?php echo $this->lang->line('dash_menu_submitn'); ?></button>
                        <div class="clearfix"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
