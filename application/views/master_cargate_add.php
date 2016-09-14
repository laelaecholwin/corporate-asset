



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
                                <h4 class="pull-left page-title">Master Third Party</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="#">Master Third Party</a></li>
                                    <li class="active">Add Third Party</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Detail</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>masterdata/cargate_insert">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Company Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Company Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Company PIC</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="pic" placeholder="Enter PIC Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone Number</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="addr" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Additional Remark</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="remark"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Location Code</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="statediv">
                                                                <?php
                                                                    foreach($result  as $r):
                                                                       echo '<option value="'.$r->StateDiv.'">'.$r->StateDiv.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Submit</button>
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


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

	</body>
</html>
