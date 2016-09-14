



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
                                <h4 class="pull-left page-title">Add Driver</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="#">Master Driver</a></li>
                                    <li class="active">Add Driver</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Driver Detail</h3></div>
                                    <div class="panel-body">

                                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>masterdata/driver_insert">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="username" placeholder="Enter Driver's Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">NRC</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nrc" placeholder="Enter NRC">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="addr" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="phone1" placeholder="Enter Phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone2</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="phone2" placeholder="Enter Phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Licence Number</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="licence" placeholder="Enter Licence Number">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Select Branch</label>
                                                <div class="col-md-10">
                                                  <select class="form-control rolex" name="branchid" required>
                                                  <?php foreach ($branch as $r) {
                                                      echo '<option value='.$r->id.'>'.$r->branchName.'</option>';
                                                  }
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
        <script type="text/javascript">
        $(document).ready(function()
        {

        $(".rolex").change(function()
        {

        var id=$(this).val();
        var dataString = { 'role': id , 'target': 'blah'};

        $.ajax
        ({
        type: "POST",
        url: "<?php echo base_url(); ?>masterdata/get_entity_from_role",
        data: dataString,
        cache: false,
        success: function(html)
        {
        var slashed = html.replace(new RegExp("\\\\","g"),"");
        $(".entity").html(slashed);
        }
        });
        });


        });
        </script>
	</body>
</html>
