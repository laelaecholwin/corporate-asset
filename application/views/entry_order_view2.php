
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                    <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="assets/assets/form-wizard/jquery.steps.css" />


            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Entry Order</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Entry Order</li>
                                </ol>
                            </div>
                        </div>
                                          <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading"><h3 class="panel-title">Form elements</h3></div>
                                                            <div class="panel-body">
                                                                <form class="form-horizontal" role="form" action="entry_order/neweo" method="post">
                                                                    <div class="form-group">
                                                                        <label class="col-md-2 control-label">Select Package Type</label>
                                                                        <div class="col-md-10">
                                                                          <select class="required form-control" id="packages" name="packages" required>
                                                                            <?php
                                                                                foreach($packages  as $p):
                                                                                    echo '<option value="'.$p->id.'">'.$p->name.'</option>';
                                                                                endforeach;
                                                                                ?>
                                                                          </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label class="col-lg-2 control-label" for="userName2">Select Destination City</label>
                                                                      <div class="col-lg-10">
                                                                          <select class="required form-control SendDiv" name="senddiv" required>
                                                                              <option value=""> Select State / Division</option>
                                                                              <?php
                                                                                  foreach($result  as $r):
                                                                                      echo '<option>'.$r->StateDiv.'</option>';
                                                                                  endforeach;
                                                                                  ?>
                                                                          </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label class="col-lg-2 control-label" for="userName2">Select Destination Point</label>
                                                                      <div class="col-lg-10">
                                                                          <select class="required form-control PriceOption" name="option" required>
                                                                          </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label class="col-lg-2 control-label " for="sendernrc">Sender NRC*</label>
                                                                      <div class="col-lg-10">
                                                                          <input class="form-control required" id="sendernrc" name="sendernrc" type="text">
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-2 control-label " for="sendername">Sender Name*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="sendername" name="sendername" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-2 control-label " for="senderphone">Sender Phone*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="senderphone" name="senderphone" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-2 control-label " for="senderadd">Sender Address*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="senderadd" name="senderadd" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label " for="recnrc">Receiver NRC*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="recnrc" name="recnrc" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label " for="recname">Receiver Name*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="recname" name="recname" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label " for="recphone">Receiver Phone*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="recphone" name="recphone" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label " for="recadd">Receiver Address*</label>
                                                                        <div class="col-lg-10">
                                                                            <input class="form-control required" id="recadd" name="recadd" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label " for="content">Description of Goods</label>
                                                                        <div class="col-lg-10">
                                                                            <textarea rows="5" class="form-control required" id="content" name="content"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group m-b-0">
                                                                      <label class="col-lg-2 control-label " for="content"></label>
                                                                        <div class="col-lg-10">
                                                                          <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div> <!-- panel-body -->
                                                        </div> <!-- panel -->
                                                    </div> <!-- col -->
                                                </div> <!-- End row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © <?php echo MY_CONSTANT; ?>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>

<script type="text/javascript">
$(document).ready(function()
{

$(".SendDiv").change(function()
{

  var id=$(this).val();
  var weight =$('#packages').val();
    $.ajax
    ({
    type: "POST",
    url: "entry_order/getprice",
    data: { 'div': id,'weight': weight},
    cache: false,
    success: function(html)
    {
    //var slashed = html.replace(new RegExp("\\\\","g"),"");
    //$(".SendTownship").html(slashed);
    $(".PriceOption").html(html);
    //alert(html);
    console.log(html);
    }
    });
    });

});
</script>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <!--Form Validation-->
        <script src="<?php echo base_url(); ?>assets/assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="<?php echo base_url(); ?>assets/assets/form-wizard/jquery.steps.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="<?php echo base_url(); ?>assets/assets/form-wizard/wizard-init.js" type="text/javascript"></script>
  </body>
</html>
