
<!-- X-editable css -->
        <link type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap3-editable/bootstrap-editable.css" rel="stylesheet">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Review Entry Order</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Review Entry Order</li>
                                </ol>
                            </div>
                        </div>

                        <?php foreach($result  as $r): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Inline Editor</h3>
                                    </div>
                                    <div class="panel-body">
                                       <form action="<?php echo base_url(); ?>instock/tbp_sendtodriver" class="form-horizontal" method="post">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">AWB</label>
                                            <div class="col-sm-9">
                                            	<p class="blend"><?php echo $r->awb; ?></p>
                                            	<input type="hidden" value="<?php echo $r->awb; ?>" name="awb">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Destination State/Division</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->receiverstate; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Destination Point</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo '(ID '.$r->codefrom.') '.$r->locationName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Name</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->senderName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender NRC</label>
                                            <div class="col-sm-9">

                                                <p class="blend"><?php echo $r->senderNRC; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Phone</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->senderPhone; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Address</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->senderAdd; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Name</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver NRC</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverNRC; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Phone</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverPhone; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Address</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverAdd; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Packages</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->name; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Price per kg</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->price; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Total Price</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->totalprice; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Service Type</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->servicetype; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Content of package</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->content; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Give to driver</label>
                                            <div class="col-sm-9">
                                              <select class="required form-control SendDiv" name="driver">
                                                  <?php
                                                      foreach($drivers as $r):
                                                         echo '<option>'.$r->driverName.'</option>';
                                                      endforeach;
                                                      ?>
                                              </select>

                                            </div>
                                        </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-success waves-effect waves-light" name="process" value="process">Process</button>
                                                </div>
                                            </div>

                                    </form>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row -->
                        <?php endforeach; ?>

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
        <script src="<?php echo base_url(); ?>assets/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <!-- XEditable Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap3-editable/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap3-editable/bootstrap-editable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap3-editable/demo-xeditable.js"></script>

	</body>
</html>
