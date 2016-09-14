
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
                                        <h3 class="panel-title">Order Data</h3>
                                    </div>
                                    <div class="panel-body">
                                       <form action="<?php echo base_url(); ?>entry_order/eo_continue" class="form-horizontal" method="post">
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
                                                <p class="blend"><?php echo '(ID '.$r->codefrom.') '.$r->agent_name; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Destination Address</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->locationAddress; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Name</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="sendername" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->senderName; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender NRC</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="sendernrc" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->senderNRC; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Phone</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="senderphone" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->senderPhone; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Address</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="senderadd" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->senderAdd; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Name</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="receivername" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->receiverName; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver NRC</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="receivernrc" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->receiverNRC; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Phone</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="receiverphone" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->receiverPhone; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Address</label>
                                            <div class="col-sm-9">
                                                <a href="#" id="receiveradd" data-type="text" data-pk="1" data-title="Enter username"><?php echo $r->receiverAdd; ?></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Package Type</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->name; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Price per kg</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->price.' ky (for first 5kg)'; ?></p>
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
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments"><?php echo $r->content; ?></a>
                                            </div>
                                        </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-danger waves-effect waves-light" name="cancel" value="cancel">Cancel</button>
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
