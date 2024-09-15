<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Funds/Tithes/Offerings</h4>
        </div>
    </div>

    <!-- start row -->
    <div class="row py-3">
        
        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                <div class="bg-primary rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_gpanel_totalcollect'); ?></p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php
                                echo globalCurrency();
                                echo number_format($sum_collect, 2);
                        ?></h3>
                            <div class="text-center">
                                <span class="text-primary fs-14"><i class="mdi mdi-trending-up fs-14"></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                <div class="bg-secondary rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_gpanel_totalspend'); ?></p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php
                                echo globalCurrency();
                                echo number_format($sum_spend, 2);
                            ?></h3>
                            <div class="text-center">
                                <span class="text-success fs-14 me-2"><i class="mdi mdi-trending-up fs-14"></i></span>
                                <p class="text-dark fs-13 mb-0"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="widget-first">

                        <div class="d-flex align-items-center mb-2">
                            <div class="p-2 border border-danger border-opacity-10 bg-danger-subtle rounded-pill me-2">
                                <div class="bg-danger rounded-circle widget-size text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                </div>
                            </div>
                            <p class="mb-0 text-dark fs-15"><?php echo $this->lang->line('dash_gpanel_totalbalance'); ?></p>   
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0 fs-22 text-black me-3"><?php
                                echo globalCurrency();
                                echo number_format($sum_collect - $sum_spend, 2);
                            ?></h3>
                            <div class="text-center">
                                <span class="text-primary fs-14 me-2"><i class="mdi mdi-trending-up fs-14"></i></span>
                                <p class="text-dark fs-13 mb-0"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-3">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title d-inline"><?php echo $this->lang->line('dash_gpanel_addnewrecord'); ?></h4>
                <p class="text-small d-inline">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
            </div>
            <div class="card-body">
                <form id="addFundForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/financial/addnewfunds" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo $this->lang->line('dash_gpanel_date'); ?> (*)</label>
                                <input type="text" id="fdate" name="fdate" class="datepicker form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo $this->lang->line('dash_gpanel_amount'); ?> (*)</label>
                                <input type="text" id="amount" name="amount" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo $this->lang->line('dash_gpanel_rtype'); ?> (*)</label>
                                <select id="amounttype" name="amounttype" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="Collect"><?php echo $this->lang->line('dash_gpanel_collect'); ?></option>
                                    <option value="Spend"><?php echo $this->lang->line('dash_gpanel_spend'); ?></option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label class="form-label"><?php echo $this->lang->line('dash_gpanel_verifier'); ?> (*)</label>
                                <input type="text" id="receivedby" name="receivedby" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label class="form-label"><?php echo $this->lang->line('dash_gpanel_rsource'); ?></label>
                                <input type="text" id="source" name="source" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php //echo $this->lang->line('dash_gpanel_rnote'); ?></label>
                                <textarea type="text" rows="3" id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div> -->
                    <div class="row py-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="quill-editor" style="height: 250px;"></div>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <button id="addFundSubmit" type="submit" class="btn btn-primary pull-right"><i class="mdi mdi-cash-plus"></i> <?php echo $this->lang->line('dash_gpanel_add_now'); ?></button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-md-offset-0 col-md-6">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_rbmonth'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="browse_funds_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/financial/browse" method="post" enctype="multipart/form-data">
                        <div class="row py-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_month'); ?> (*)</label>
                                    <select id="month" name="month" class="form-control" required>
                                        <option value="">Select Month</option>
                                        <option value="January"><?php echo $this->lang->line('dash_gpanel_jan'); ?></option>
                                        <option value="February"><?php echo $this->lang->line('dash_gpanel_feb'); ?></option>
                                        <option value="March"><?php echo $this->lang->line('dash_gpanel_mar'); ?></option>
                                        <option value="April"><?php echo $this->lang->line('dash_gpanel_apr'); ?></option>
                                        <option value="May"><?php echo $this->lang->line('dash_gpanel_may'); ?></option>
                                        <option value="June"><?php echo $this->lang->line('dash_gpanel_jun'); ?></option>
                                        <option value="July"><?php echo $this->lang->line('dash_gpanel_jul'); ?></option>
                                        <option value="August"><?php echo $this->lang->line('dash_gpanel_aug'); ?></option>
                                        <option value="September"><?php echo $this->lang->line('dash_gpanel_sep'); ?></option>
                                        <option value="October"><?php echo $this->lang->line('dash_gpanel_oct'); ?></option>
                                        <option value="November"><?php echo $this->lang->line('dash_gpanel_nov'); ?></option>
                                        <option value="December"><?php echo $this->lang->line('dash_gpanel_dec'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_year'); ?> (*)</label>
                                    <select id="year" name="year" class="form-control" required>
                                        <option value="">Select Year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary pull-right py-2"> <?php echo $this->lang->line('dash_gpanel_browse_now'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-offset-0 col-md-6">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?php echo $this->lang->line('dash_gpanel_rbyear'); ?></h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form id="browse_funds_form" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/financial/browse" method="post" enctype="multipart/form-data">
                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label"><?php echo $this->lang->line('dash_gpanel_year'); ?> (*)</label>
                                    <select id="year" name="year" class="form-control" required>
                                        <option value="">Select Year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary pull-right py-2"><?php echo $this->lang->line('dash_gpanel_browse_now'); ?></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($funds) { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <div>
                            <div class="pull-left">
                                <h4 class="title"><?php echo $this->lang->line('dash_gpanel_rrecords'); ?> ( <?php
                                $this->db->from('funds');
                                $this->db->limit(10);
                                echo $this->db->count_all_results();
                                ?> )</h4>
                                <p class="category"><?php echo $this->lang->line('dash_gpanel_newrecord'); ?> <?php echo getCreateDate('fundsid','funds'); ?></p>
                            </div>
                            <div class="pull-right">
                                <h6><?php echo $this->lang->line('dash_gpanel_collect'); ?>: <?php
                                            echo globalCurrency();
                                            echo number_format($sum_collect, 2);
                                            ?></h6>
                                <h6><?php echo $this->lang->line('dash_gpanel_spend'); ?>: <?php
                                            echo globalCurrency();
                                            echo number_format($sum_spend, 2);
                                            ?></h6>
                                <h6><?php echo $this->lang->line('dash_gpanel_balance'); ?>: <?php
                                            echo globalCurrency();
                                            echo number_format($sum_collect - $sum_spend, 2);
                                            ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="dtFunds table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                            <thead>
                            <th><?php echo $this->lang->line('dash_gpanel_sl'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_date'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_note'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_rsource'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_rtype'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_amount'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_verifier'); ?></th>
                            <th><?php echo $this->lang->line('dash_gpanel_action'); ?></th>
                            </thead>
                            <tbody>

                                <?php
                                if ($this->uri->segment(4)) {
                                    $i = $this->uri->segment(4);
                                } else {
                                    $i = "";
                                }
                                foreach ($funds as $row) {
                                    $i++;
                                    ?>

                                    <tr <?php
                                    if ($row->fundstype == "Spend") {
                                        echo "style='    background: #fffacc; color: #424242;' title='Expense'";
                                    }
                                    ?>>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->fundsdate; ?></td>
                                        <td><?php
                                            $fundsnote = $row->fundsnote;
                                            echo word_limiter($fundsnote, 3);
                                            ?></td>
                                        <td><?php echo $row->fundssource; ?></td>
                                        <td><?php echo $row->fundstype; ?></td>
                                        <td><?php
                                            echo globalCurrency();
                                            echo number_format($row->fundsamount, 2);
                                            ?></td>
                                        <td><?php echo $row->receivedby; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>dashboard/financial/edit/<?php echo $row->fundsid; ?>" class="btn btn-warning"> <?php echo $this->lang->line('dash_gpanel_edit'); ?></a>
                                            <a href="<?php echo base_url(); ?>dashboard/financial/delete/<?php echo $row->fundsid; ?>" class="btn btn-danger delete"> <?php echo $this->lang->line('dash_gpanel_delete'); ?></a>
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
