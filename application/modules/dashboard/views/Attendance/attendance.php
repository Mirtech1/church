<div class="container-fluid">        
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Attendance</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_attendance'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="browse_attendance_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/attendance/browse" method="post" enctype="multipart/form-data">
                        <div class="row py-2">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_date'); ?> (*)</label>
                                    <input type="text" id="basic-datepicker" name="attendancedate" class="flatpickr-input form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_grouptype'); ?> (*)</label>				
                                    <select id="grouptype" name="grouptype" class="select form-control" required>
                                        <option value="">Select Group Type</option>
                                        <option value="committee">Committee</option>
                                        <option value="pastor">Pastor</option>
                                        <option value="member">Member</option>
                                        <option value="chorus">Chorus</option>
                                        <option value="clan">Clan</option>
                                        <option value="sundayschool">Sunday School Students</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_attendancetype'); ?> (*)</label>				
                                    <select id="attendancetype" name="attendancetype" class="select form-control" required>
                                        <option value="">Select Attendance Type</option>
                                        <?php foreach ($attendancetypes as $row){ ?>
                                            <option value="<?php echo $row->attendancetype; ?>"><?php echo $row->attendancetype; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_gpanel_browse_now'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>            
    </div>
</div>