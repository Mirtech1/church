<div class="container-fluid">
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Assets/Inventory</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-offset-0 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_addnewrecord'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="fund_add_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/financial/addnewassets" method="post" enctype="multipart/form-data">
                        <div class="row py-2">
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_date'); ?> (*)</label>
                                    <input type="text" id="assetsdate" name="assetsdate" class="datepicker form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_aassets'); ?> (*)</label>
                                    <input type="text" id="assetsitem" name="assetsitem" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_aavalue'); ?> (*)</label>
                                    <input type="text" id="assetsamount" name="assetsamount" class="form-control" required>
                                </div>
                            </div>	

                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_verifier'); ?> (*)</label>
                                    <input type="text" id="assetsverifiedby" name="assetsverifiedby" class="form-control" required>
                                </div>
                            </div>

                        </div>

                        <div class="row py-2">	                                        
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_rnote'); ?></label>
                                    <textarea type="text" rows="3" id="assetsnote" name="assetsnote" class="form-control"></textarea>
                                </div>
                            </div>	                                        
                        </div>

                        <button type="submit" class="btn btn-primary pull-right py-2"> <?php echo $this->lang->line('dash_gpanel_add_now'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php if ($assets) { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <div class="pull-left">
                            <h4 class="title"><?php echo $this->lang->line('dash_gpanel_rrecords'); ?> <?php echo $this->lang->line('dash_allfunds_panel_title'); ?> ( <?php
                            $this->db->from('assets');
                            echo $this->db->count_all_results();
                            ?> )</h4>
                            <p class="category"><?php echo $this->lang->line('dash_gpanel_newrecord'); ?> <?php echo getCreateDate('assetsid','assets'); ?></p>
                        </div>
                        <div class="pull-right">
                            <h5><?php echo $this->lang->line('dash_gpanel_total'); ?>/<?php echo $this->lang->line('dash_gpanel_aavalue'); ?>: <?php
                                            echo globalCurrency();
                                            echo number_format($sum_assets, 2);
                                            ?></h5>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="dtAssets table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                            <thead>
                            <th><?php echo $this->lang->line('dash_gpanel_sl'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_date'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_aassets'); ?></th>												
                            <th><?php echo $this->lang->line('dash_gpanel_aavalue'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_note'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                            </thead>
                            <tbody>

                                <?php
                                $i = 0;
                                foreach ($assets as $row) {
                                    $i++;
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->assetsdate; ?></td>
                                        <td><?php echo $row->assetsitem; ?></td>
                                        <td><?php
                                            echo globalCurrency();
                                            echo number_format($row->assetsamount, 2);
                                            ?></td>	
                                        <td><?php
                                            $assetsnote = $row->assetsnote;
                                            echo word_limiter($assetsnote, 3);
                                            ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>dashboard/financial/editassets/<?php echo $row->assetsid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/financial/deleteassets/<?php echo $row->assetsid; ?>" class="btn btn-danger delete"> <?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>



</div>