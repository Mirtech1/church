<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Applicants</h4>
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

                    <form id="pastor_add_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/event/applicantslist" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_eventtitle'); ?> (*)</label>
                                    <select name="eventid" class="select form-control">
                                        <?php foreach ($events as $event) { ?>
                                            <option value="<?php echo $event->eventid; ?>">
                                                <?php echo word_limiter($event->eventtitle, 6);?>
                                            </option>
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

    <?php if (isset($applicants) && !empty($applicants)) { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 gusers">
                <div class="card">
                    <div class="card-header">
                        <h4 class="title"><?php echo $this->lang->line('dash_gpanel_applicantslist'); ?><strong> | <?php echo $current_event; ?></strong> </h4>
                        <p class="category"><?php echo $this->lang->line('dash_gpanel_newapplicant'); ?> <?php echo getCreateDate('registrationID','eventregistration'); ?></p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="dtApplicants table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons" cellspacing="0" width="100%">
                            <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
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
                                        <td><?php echo $row->address; ?></td>
                                        <td><?php echo $row->city; ?></td>
                                        <td><?php echo $row->country; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>dashboard/event/viewapplicant/<?php echo $row->registrationID; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/event/editapplicant/<?php echo $row->registrationID; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/event/deleteapplicant/<?php echo $row->registrationID; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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