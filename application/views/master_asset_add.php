



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
                                <h4 class="pull-left page-title">Master Assets</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>masterdata/asset">Master Assets</a></li>
                                    <li class="active">Add Assets</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add New Assets</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>masterdata/insert_branch" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Asset Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Branch Name" required>
                                                </div>
                                            </div> 
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">Asset Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="type">
                                                                <?php 
                                                                    foreach($result  as $r): 
                                                                       echo '<option value="'.$r->PlaceID.'">('.$r->PlaceID.') '.$r->StateDiv.' - '.$r->Township.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Brand</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="brand">
                                                                <?php 
                                                                    foreach($result  as $r): 
                                                                       echo '<option value="'.$r->PlaceID.'">('.$r->PlaceID.') '.$r->StateDiv.' - '.$r->Township.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div> 
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category">
                                                                <?php  
                                                                    foreach($result  as $r): 
                                                                       echo '<option value="'.$r->PlaceID.'">('.$r->PlaceID.') '.$r->StateDiv.' - '.$r->Township.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>    
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Business Unit</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="bu">
                                                                <?php 
                                                                    foreach($result  as $r): 
                                                                       echo '<option value="'.$r->PlaceID.'">('.$r->PlaceID.') '.$r->StateDiv.' - '.$r->Township.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Location</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="code">
                                                                <?php 
                                                                    foreach($result  as $r): 
                                                                       echo '<option value="'.$r->PlaceID.'">('.$r->PlaceID.') '.$r->StateDiv.' - '.$r->Township.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>                                                                                           
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Responsible Person</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="responsibleperson" placeholder="Enter Branch PIC">
                                                </div>
                                            </div>                                                
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Assigned To</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="assignedto" placeholder="Enter Phone Number">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="description" placeholder="Enter Phone Number">
                                                </div>
                                            </div>                                                                                                                
                                            <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                                <div class="col-md-2">
                                                    
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">submit</button>

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