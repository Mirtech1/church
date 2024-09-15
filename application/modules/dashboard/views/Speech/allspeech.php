<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Seminars</h4>
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
                    <table class="dtEvent table table-striped table-bordered dt-responsive" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_image'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_title'); ?></th>
                        <th>Description</th>
                        <th><?php echo $this->lang->line('dash_gpanel_date'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_location'); ?></th>
                        <th>Registered</th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                                if ($this->uri->segment(4)) {
                                    $i = $this->uri->segment(4);
                                } else {
                                    $i = "";
                                } foreach ($seminars as $row) {
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/seminar/banner/<?php
                                            if ($row->seminarbanner) {
                                                echo $row->seminarbanner;
                                            } else {
                                                echo "banner.jpg";
                                            }
                                            ?> " style="width: 200px;">
                                    </td>
                                    <td><a href="<?php echo base_url(); ?>home/seminar/view/<?php echo $row->seminarid; ?>"><?php echo word_limiter($row->seminartitle, 5); ?></a></td>
                                    <td><?php echo word_limiter($row->seminardescription, 30); ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_duration'); ?> - <?php echo $row->seminarstart; ?> <?php echo $this->lang->line('dash_gpanel_to'); ?> <?php echo $row->seminarend; ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_location'); ?> - <?php echo $row->seminarlocation; ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_tregistration'); ?> - ( <?php
                                    $seminarid = $row->seminarid;
                                    $this->db->like('selectedseminarid', $seminarid);
                                    $this->db->from('seminarregistration');
                                    echo $this->db->count_all_results();
                                    ?> )</td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/seminar/view/<?php echo $row->seminarid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/seminar/edit/<?php echo $row->seminarid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/seminar/delete/<?php echo $row->seminarid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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

<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">All Seminars</h4>
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
                    <table class="dtEvent table table-striped table-bordered dt-responsive" id="datatable-buttons">
                        <thead class="text-default">
                        <th><?php echo $this->lang->line('dash_gpanel_no'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_image'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_title'); ?></th>
                        <th>Description</th>
                        <th><?php echo $this->lang->line('dash_gpanel_date'); ?></th>
                        <th><?php echo $this->lang->line('dash_gpanel_location'); ?></th>
                        <th>Registered</th>
                        <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                        </thead>
                        <tbody>

                            <?php
                                if ($this->uri->segment(4)) {
                                    $i = $this->uri->segment(4);
                                } else {
                                    $i = "";
                                } foreach ($seminars as $row) {
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <img class="committee img" src="<?php echo base_url(); ?>assets/assets/images/seminar/banner/<?php
                                            if ($row->seminarbanner) {
                                                echo $row->seminarbanner;
                                            } else {
                                                echo "banner.jpg";
                                            }
                                            ?> " style="width: 200px;">
                                    </td>
                                    <td><a href="<?php echo base_url(); ?>home/seminar/view/<?php echo $row->seminarid; ?>"><?php echo word_limiter($row->seminartitle, 5); ?></a></td>
                                    <td><?php echo word_limiter($row->seminardescription, 30); ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_duration'); ?> - <?php echo $row->seminarstart; ?> <?php echo $this->lang->line('dash_gpanel_to'); ?> <?php echo $row->seminarend; ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_location'); ?> - <?php echo $row->seminarlocation; ?></td>
                                    <td><?php echo $this->lang->line('dash_gpanel_tregistration'); ?> - ( <?php
                                    $seminarid = $row->seminarid;
                                    $this->db->like('selectedseminarid', $seminarid);
                                    $this->db->from('seminarregistration');
                                    echo $this->db->count_all_results();
                                    ?> )</td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/seminar/view/<?php echo $row->seminarid; ?>" class="btn btn-primary"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/seminar/edit/<?php echo $row->seminarid; ?>" class="btn btn-warning"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                        <a href="<?php echo base_url(); ?>dashboard/seminar/delete/<?php echo $row->seminarid; ?>" class="btn btn-danger delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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

<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Speeches</h4>
        </div>
    </div>
    <div class="container-fluid">
        <?php
        $num = 1;
        $breaker = 3; //How many cols inside a row?
        foreach ($speech as $row) {
            if ($num == 1){
                echo '<div class="row">';
            }
            ?>

            <div class="col-md-4">
                <div class="allspeechs card d-block">
                        <img class="committee card-img-top rounded-top" src="<?php echo base_url(); ?>assets/assets/images/<?php if($row->profileimage){ echo "speech/profile/" . $row->profileimage; }else{ echo "avatar.png"; } ?>">

                    <div class="card-body">
                        <h6 class="category text-gray"><?php echo $row->position; ?></h6>
                        <h4 class="card-title"><?php echo $row->fname . " " . $row->lname; ?></h4>
                        <p class="card-content speech"><?php echo word_limiter(strip_tags($row->speech), 10); ?></p>

                        <div class="col-md-12 action-btn">
                            <a href="<?php echo base_url(); ?>home/speech/view/<?php echo $row->speechid; ?>" class="btn btn-primary btn-round"><?php echo $this->lang->line('dash_gpanel_view'); ?></a>
                            <a href="<?php echo base_url(); ?>dashboard/speech/edit/<?php echo $row->speechid; ?>" class="btn btn-warning btn-round"><?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                            <a href="<?php echo base_url(); ?>dashboard/speech/delete/<?php echo $row->speechid; ?>" class="btn btn-danger btn-round delete"><?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $num++;
            if($num == 4) {
                echo '</div>';
                $num = 1;
            }
        }
        ?>


    </div>

    <div class="col-md-12">
        <?php echo $pagination; ?>
    </div>
</div>