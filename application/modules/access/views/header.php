
<?php
if ($this->uri->uri_string() == '') {
    $home = true;
} else {
    $home = false;
}
?>

<?php

    $query = $this->db->get('websitebasic');
    foreach ($query->result() as $basic):
?>

<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="no-js ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/assets/images/website/<?php echo $basic->favicon;?>"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $basic->title;?> | <?php echo $basic->tag;?></title>
        <link href="<?php echo base_url(); ?>dep/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="<?php echo base_url(); ?>dep/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
<?php endforeach;?>


        <?php
            $success = $this->session->flashdata('success');
            $notsuccess = $this->session->flashdata('notsuccess');

            if ($success) {
                ?>

                <div class="success_notifi notifi" id="success_notifi" style="display:block;">
                    <p><i class="fa fa-check"></i> <?php echo $success; ?></p>
                </div>

            <?php } elseif ($notsuccess) { ?>

                <div class="warning_notifi notifi" id="warning_notifi" style="display:block;">
                    <p><i class="fa fa-times"></i> <?php echo $notsuccess; ?></p>
                </div>

            <?php } ?>
