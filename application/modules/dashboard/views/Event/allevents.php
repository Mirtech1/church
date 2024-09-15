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
                        <th><?php echo $this->lang->line('dash_gpanel_title'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_date'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_time'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_location'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($event as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <?php if ($row->eventimage) { ?>
                                            <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/event/feature/<?php echo $row->eventimage; ?>" style="width:100%;">
                                        <?php } else { ?>
                                            <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/thumb.jpg" style="width:100%;">
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $row->eventtitle; ?></td>
                                    <td><?php echo $row->eventdate; ?></td>
                                    <td><?php echo $row->eventtime; ?></td>
                                    <td><?php echo $row->eventlocation; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/event/view/<?php echo $row->eventid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/event/edit/<?php echo $row->eventid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/event/delete/<?php echo $row->eventid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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
