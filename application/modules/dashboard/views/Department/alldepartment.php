<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Departments</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_alldepartment_panel_title'); ?> ( <?php
                        $this->db->from('department');
                        echo $this->db->count_all_results();
                        ?> ) </h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newdepartment'); ?> <?php echo getCreateDate('departmentid','department'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtDepartment table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_dptname'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_dpthead'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_dptcontact'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_dptarea'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($department as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    
                                    <td><?php echo $row->departmentname; ?></td>
                                    <td><?php echo $row->departmentleader; ?></td>
                                    <td><?php echo $row->departmentcontact; ?></td>                                        
                                    <td><?php echo $row->departmentarea; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/department/view/<?php echo $row->departmentid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/department/edit/<?php echo $row->departmentid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/department/delete/<?php echo $row->departmentid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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