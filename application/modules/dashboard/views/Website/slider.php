<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Sliders</h4>
        </div>
    </div>
    <div class="row">
        <div class="#">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_addslider_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="website_slider_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/website/uploadslider" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-offset-1 col-md-4">
                                <div class="form-group label-floating">
                                    <p class="image_select_text"><?php echo $this->lang->line('dash_gpanel_addslider'); ?> (*)</p>
                                    <input type="file" id="slider" name="userfile[]"  class="form-control" multiple="multiple">
                                </div>
                            </div>
                        </div>

                        <button id="website_slider_submit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_gpanel_add_now'); ?></button>
                    </form>
                </div>
            </div>


            <div class="card gusers">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_allslider_panel_title'); ?> ( <?php
                        $this->db->from('slider');
                        echo $this->db->count_all_results();
                        ?> ) </h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newslider'); ?> <?php echo getCreateDate('sliderid','slider'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th style="width: 1%"><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th style="width: 3%"><?php echo $this->lang->line('dash_gpanel_photo'); ?></th>
                        <th style="width: 5%"><?php echo $this->lang->line('dash_gpanel_title'); ?></th>
                        <th style="width: 4%"><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($slider as $row) {
                                $i++;
                                ?>
                                <tr data-id="<?php echo $row->sliderid; ?>" style="color: rgba(33, 33, 33, 0.70); font-weight: bold" class="parent-slider">
                                    <td><?php echo $i; ?></td>
                                    <td title="Click & Hold To Sort/Rearrange Section"><img style="width: 80px;" src="<?php echo base_url(); ?>assets/assets/images/website/slider/<?php echo $row->filename; ?>"></td>                                        
                                    <td><?php echo $row->filename; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/website/sliderdelete/<?php echo $row->sliderid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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
