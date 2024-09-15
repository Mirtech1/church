<div class="container-fluid">        
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Attendance Type</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_addattendancetype'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="attendanceTypeForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/attendance/browse" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_attendance'); ?> (*)</label>
                                    <input type="text" name="attendancetype" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <button id="attendanceTypeSubmit" type="submit" class="btn btn-primary pull-right mt-2"><?php echo $this->lang->line('dash_gpanel_add_now'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            
            
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"> <?php echo $this->lang->line('dash_gpanel_allattendancetype'); ?> ( <?php
                        $this->db->from('attendancetype');
                        echo $this->db->count_all_results();
                        ?> ) </h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtChorus table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_name'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($attendancetypes as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>                                        
                                    <td><?php echo $row->attendancetype; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/attendance/delete/<?php echo $row->attendancetypeid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            
        </div>            
    </div>
</div>