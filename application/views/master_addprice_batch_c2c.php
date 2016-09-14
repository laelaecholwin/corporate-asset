



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
                                <h4 class="pull-left page-title">Master Price</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="#">Master Price</a></li>
                                    <li class="active">Add Price</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form elements</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>masterdata/insert_price_batch_c2c" method="post">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">City From</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="codefrom">
                                                      <?php
                                                          foreach($state  as $r):
                                                              echo '<option value="'.$r->StateDiv.'">'.$r->StateDiv.'</option>';
                                                          endforeach;
                                                          ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">City To </label>
                                                <div class="col-sm-10">
                                                    <select class="form-control codeto" name="codeto">
                                                                <?php
                                                                    foreach($state  as $r):
                                                                        echo '<option value="'.$r->StateDiv.'">'.$r->StateDiv.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" name="price" placeholder="enter price per kg" required>
                                                </div>
                                            </div>
                                            <div class="additional">
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

        <script type="text/javascript">
        $(document).ready(function()
        {

        $(".servtype").change(function()
        {

        var id=$(this).val();
        var target=$(".codeto").val();
        var dataString = { 'servtype': id , 'target': target};

        $.ajax
        ({
        type: "POST",
        url: "<?php echo base_url(); ?>masterdata/getservtype",
        data: dataString,
        cache: false,
        success: function(html)
        {
        var slashed = html.replace(new RegExp("\\\\","g"),"");
        $(".additional").html(slashed);
        }
        });
        });


        });
        </script>
	</body>
</html>
