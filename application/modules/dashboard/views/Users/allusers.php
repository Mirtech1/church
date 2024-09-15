<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Users</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">
                        <?php echo $this->lang->line('dash_alluser_panel_title'); ?>
                        ( <?php
                        $this->db->from('users');
                        echo $this->db->count_all_results();
                        ?> ) 
                    </h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newuser'); ?> <?php echo getCreateDate('userid','users'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtUser table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_name'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_position'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_phone'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_email'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($users as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->fname . " " . $row->lname; ?></td>
                                    <td><?php echo $row->position; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/user/view/<?php echo $row->userid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/user/edit/<?php echo $row->userid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/user/delete/<?php echo $row->userid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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