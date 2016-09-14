



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
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="fa fa-usd"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $instock; ?></span> package
                                        in stock
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="fa fa-shopping-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">956</span>
                                        New Orders
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="fa fa-user"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">5210</span>
                                        To Be Delivered
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="fa fa-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">20544</span>
                                        Delivered
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->



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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/assets/chat/moment-2.2.1.js"></script>
        <script src="assets/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/assets/fastclick/fastclick.js"></script>
        <script src="assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="assets/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="assets/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="assets/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="assets/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="assets/js/jquery.todo.js"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    </body>
</html>
