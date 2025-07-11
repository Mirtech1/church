<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Products</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">
                        <?php echo $this->lang->line('dash_allproducts_panel_title'); ?>
                        ( <?php
                        $this->db->from('product');
                        echo $this->db->count_all_results();
                        ?> )
                    </h4>
                    <p class="category"><?php echo $this->lang->line('dash_gpanel_newproduct'); ?> <?php echo getCreateDate('productID','product'); ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtUser gusers table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_photo'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_title'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_pprice'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_category'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_tag'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($products as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/<?php if($row->image){ echo "product/photo/" . $row->image; }else{ echo "thumb.jpg"; } ?>" style="width:100px">
                                    </td>
                                    <td><?php echo $row->title; ?></td>
                                    <td><?php echo $row->price; ?></td>
                                    <td><?php echo $row->category; ?></td>
                                    <td><?php echo $row->tag; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/shop/view/<?php echo $row->productID; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/shop/edit/<?php echo $row->productID; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/shop/delete/<?php echo $row->productID; ?>" class="btn btn-danger delete"> <?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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
