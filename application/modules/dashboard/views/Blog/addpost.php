<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add Blog</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title"><?php echo $this->lang->line('dash_addblog_panel_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="addBlogForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/blog/addnewblog" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <p class="image_select_text"><?php echo $this->lang->line('dash_gpanel_bpp'); ?></p>
                                    <input type="file" onchange="blogFeaturePhoto()" name="blogimage" id="blogimage" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_title'); ?> (*)</label>
                                    <input type="text" name="blogtitle" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                    <textarea rows="5" type="text" id="blogdescription" name="blogdescription" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="addBlogSubmit" type="submit" class="btn btn-primary pull-right mt2"><?php echo $this->lang->line('dash_addblog_panel_title'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>