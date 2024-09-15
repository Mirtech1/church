<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All events</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple"><h4><?php echo $this->lang->line('dash_allevents_panel_title'); ?> (<?php
                        $this->db->from('event');
                        echo $this->db->count_all_results();
                        ?>)</h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newevent'); ?> <?php echo getCreateDate('eventid','event'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtEvent table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_image'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_position'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_name'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_description'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                                $i = 1;
                                foreach ($pastor as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                            <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/<?php if($row->profileimage){ echo "pastor/profile/" . $row->profileimage; }else{ echo "avatar.png"; } ?>" style="width:100px;">
                                    </td>
                                    <td><?php echo $row->position; ?></td>
                                    <td><?php echo $row->fname . " " . $row->lname; ?></td>
                                    <td><?php echo word_limiter(strip_tags($row->speech), 20); ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/pastor/view/<?php echo $row->pastorid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/pastor/edit/<?php echo $row->pastorid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/pastor/delete/<?php echo $row->pastorid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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