<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Families</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_allfamily_panel_title'); ?> ( <?php
                        $this->db->from('family');
                        echo $this->db->count_all_results();
                        ?> ) </h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newfamily'); ?> <?php echo getCreateDate('familyid','family'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtFamily table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_familyname'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_familyleader'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_familyquantity'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_familycontact'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($family as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    
                                    <td><?php echo $row->familyname; ?></td>
                                    <td><?php echo $row->familyleader; ?></td>
                                    <td><?php echo $row->memberquantity; ?></td>
                                    <td><?php echo $row->familycontact; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/family/view/<?php echo $row->familyid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/family/edit/<?php echo $row->familyid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/family/delete/<?php echo $row->familyid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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