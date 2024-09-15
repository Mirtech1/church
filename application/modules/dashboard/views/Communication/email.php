<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Email</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_email_title'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">

                    <form id="smsForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/communication/sendemail" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_email_multi'); ?> (*)</label>
                                    <input type="email" name="emails" class="form-control" required>
                                    <span class="material-input"></span></div>

                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_email_subject'); ?> (*)</label>
                                    <input type="text" name="subject" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                    <textarea maxlength="160" rows="5" type="text" name="description" class="form-control"></textarea>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button id="smsSubmit" type="submit" class="btn btn-primary pull-right mt-2"><?php echo $this->lang->line('dash_gpanel_send'); ?></button>
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">
                        <?php echo $this->lang->line('dash_gpanel_email_title'); ?>
                        ( <?php
                        $this->db->from('email');
                        echo $this->db->count_all_results();
                        ?> )
                    </h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="dtSMS table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_time'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_emailto'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_email_subject'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_message'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_network'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                            if ($this->uri->segment(4)) {
                                $i = $this->uri->segment(4);
                            } else {
                                $i = "";
                            }
                            foreach ($emails as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->time; ?></td>
                                    <td><?php echo $row->emailTo; ?></td>
                                    <td><?php echo $row->emailSubject; ?></td>
                                    <td><?php echo character_limiter(strip_tags($row->message), 50); ?></td>
                                    <td><?php echo $row->network; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>dashboard/communication/deleteemail/<?php echo $row->emailID; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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
