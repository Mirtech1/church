<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Applicants</h4>
        </div>
    </div>
    <div class="row">	                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_bapplicants'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="pastor_add_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/seminar/applicantslist" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_seminartitle'); ?> (*)</label>
                                    <select id="selectedseminarid" name="selectedseminarid" class="select form-control">
                                        <?php
                                        foreach ($seminar_list as $slist) {
                                            ?>
                                            <option value="<?php echo $slist->seminarid; ?>"><?php
                                                echo word_limiter($slist->seminartitle, 6);
                                                echo " (";
                                                echo $slist->seminarstart;
                                                ?> to <?php echo $slist->seminarend; ?>)</option>
                                        <?php } ?>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>

                        <button id="website_user_submit" type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('dash_gpanel_bapplicants'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($applicants) { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 gusers">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title"><?php echo $this->lang->line('dash_gpanel_applicantslist'); ?> | <b><?php echo $current_seminar; ?></b></h4>
                        <p class="category"><?php echo $this->lang->line('dash_gpanel_newapplicant'); ?> <?php echo getCreateDate('seminarregid','seminarregistration'); ?></p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="dtApplicants table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons" cellspacing="0" width="100%">    
                            <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>									
                            <th>Church</th>
                            <th>City</th>
                            <th>Action</th>
                            </thead>
                            <tbody>

                                <?php
                                if ($this->uri->segment(4)) {
                                    $i = $this->uri->segment(4);
                                } else {
                                    $i = "";
                                }
                                foreach ($applicants as $row) {
                                    $i++;
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->fname . " " . $row->lname; ?></td>
                                        <td><?php echo $row->gender; ?></td>
                                        <td><?php echo $row->phone; ?></td>										
                                        <td><?php echo $row->church; ?></td>
                                        <td><?php echo $row->city; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>dashboard/seminar/viewapplicant/<?php echo $row->seminarregid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/seminar/editapplicant/<?php echo $row->seminarregid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/seminar/deleteapplicant/<?php echo $row->seminarregid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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