



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
                                <h4 class="pull-left page-title">Master Agent</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>masterdata/agent">Master Agent</a></li>
                                    <li class="active">Detail Agent</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <form action="<?php echo base_url().'masterdata/edit_agent/'.$id; ?>"><button type="submit" class="btn btn-primary waves-effect waves-light m-b-5"> <i class="fa fa-edit"></i> <span> Edit</span></button></form>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>masterdata/insert_agent">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Agent ID</label>
                                                <div class="col-md-10">
                                                    <p class="tutube"><?php echo $id; ?></p>
                                                </div>
                                            </div>                                             
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Agent Name</label>
                                                <div class="col-md-10">
                                                    <p class="tutube"><?php echo $name; ?></p>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Agent Owner</label>
                                                <div class="col-md-10">
                                                    <p class="tutube"><?php echo $pic; ?></p>
                                                </div>
                                            </div>                                               
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone Number</label>
                                                <div class="col-md-10">
                                                    <p class="tutube"><?php echo $phone; ?></p>
                                                </div>
                                            </div>                                                
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Address</label>
                                                <div class="col-md-10">
                                                    <p class="tutube"><?php echo $address; ?></p>
                                                </div>
                                            </div>                                                               
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">State/Div</label>
                                                <div class="col-sm-10">
                                                    <p class="tutube"><?php echo $statediv; ?></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Branch Id</label>
                                                <div class="col-sm-10">
                                                <p class="tutube"><?php echo $branch; ?></p>
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
                    2015 © Moltran.
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