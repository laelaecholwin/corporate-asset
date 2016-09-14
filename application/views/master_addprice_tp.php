



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
                                      <div class="text-danger"><?php echo validation_errors(); ?></div><br>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>masterdata/insert_price_tp" method="post">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Agent From</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="codefrom" required>
                                                                <?php
                                                                    foreach($result  as $r):
                                                                        echo '<option value="'.$r->id.'">('.$r->id.') '.$r->agentName.' - '.$r->statediv.'</option>';
                                                                    endforeach
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">To State/Div </label>
                                                <div class="col-sm-10">
                                                    <select class="form-control statediv" name="statediv" required>
                                                                <?php
                                                                    foreach($state  as $r):
                                                                        echo '<option value="'.$r->StateDiv.'">'.$r->StateDiv.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">To Point </label>
                                                <div class="col-sm-10 point" name="point">
                                                    <select class="form-control topoint" name="agentid" required>

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

        $(".statediv").change(function()
        {

        var id=$(this).val();
        var dataString = { 'statediv': id , 'target': 'blah'};

        $.ajax
        ({
        type: "POST",
        url: "<?php echo base_url(); ?>masterdata/get_point_from_city",
        data: dataString,
        cache: false,
        success: function(html)
        {
        var slashed = html.replace(new RegExp("\\\\","g"),"");
        $(".topoint").html(slashed);
        }
        });
        });


        });
        </script>
	</body>
</html>
