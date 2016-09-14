

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">


                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('images/big/bg.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?php echo $avatar; ?>" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white"><?php echo $fullname; ?></h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">About Me</span>
                                </a>
                            </li>
                            <li class="tab">
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs">Activities</span>
                                </a>
                            </li>
                            <li class="tab" >
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Settings</span>
                                </a>
                            </li>
                        <div class="indicator"></div></ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="tab-content profile-tab-content">
                            <div class="tab-pane active" id="home-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Personal Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $fullname; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Role</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $role; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $mobile; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $email; ?></p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Location</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $location; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->


                                        <!-- Agent Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Agent Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Agency Name</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $fullname; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Agency ID</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $fullname; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Owner</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $role; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Location</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $mobile; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Phone Number</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $email; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Languages -->
                                    </div>


                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">About Me</h3>
                                            </div>
                                            <div class="panel-body">
                                            <?php echo $aboutme; ?>
                                          
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                    </div>

                                </div>
                            </div>




                            <div class="tab-pane" id="profile-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">

                                    <div class="panel-body">
                                        <div class="timeline-2">
                                      <?php foreach ($logs as $l)
                                      {
                                        echo   '<div class="time-item">
                                                <div class="item-info">
                                                <div class="text-muted">'.$l->time.'</div>
                                                <p>'.$l->textlog.'</p>
                                                </div>
                                              </div>';
                                      }
                                      ?>


                                    </div>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>


                            <div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Edit Profile</h3>
                                        <?php echo validation_errors(); ?>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" method="post" action="profile/update_profile">
                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" value="<?php echo $fullname; ?>" id="FullName" name="FullName" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" value="<?php echo $email; ?>" id="Email" name="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="FullName">Mobile Number</label>
                                                <input type="text" value="<?php echo $mobile; ?>" id="Mobile" name="Mobile" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="FullName">Location</label>
                                                <input type="text" value="<?php echo $location; ?>" id="Location" name="Location" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Username</label>
                                                <input type="text" value="<?php echo $username; ?>" id="Username" name="Username" class="form-control" disabled>
                                                <input type="hidden" value="<?php echo $username; ?>" id="Username" name="idname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Password</label>
                                                <input type="password" placeholder="6 - 15 Characters" id="Password" name="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Re-Password</label>
                                                <input type="password" placeholder="6 - 15 Characters" id="RePassword" name="RePassword" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="AboutMe">About Me</label>
                                                <textarea style="height: 125px;" id="AboutMe" name="aboutme" class="form-control"><?php echo $aboutme; ?></textarea>
                                            </div>
                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © <?php echo COPYRIGHT; ?>.
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
        <script src="assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/assets/fastclick/fastclick.js"></script>
        <script src="assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.app.js"></script>

	</body>
</html>
