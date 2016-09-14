            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url().$avatar;?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php  echo $fullname;?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>profile"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="<?php echo base_url(); ?>lockscreen"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="<?php echo base_url(); ?>logout"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><?php  echo $role;?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>home" class="waves-effect <?php if ($this->uri->segment(1)=='home') {echo "active";} ?>"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>masterdata/user" class="waves-effect <?php if ($this->uri->segment(2)=='user') {echo "active";} ?>"><i class="md md-people"></i><span> Manage User</span></a>
                            </li>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>masterdata/asset" class="waves-effect <?php if ($this->uri->segment(2)=='asset') {echo "active";} ?>"><i class="md md-domain"></i><span> Manage Asset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>masterdata/category" class="waves-effect <?php if ($this->uri->segment(2)=='branch') {echo "active";} ?>"><i class="md md-location-city"></i><span> Manage Category </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>masterdata/type" class="waves-effect <?php if ($this->uri->segment(2)=='driver') {echo "active";} ?>"><i class="md md-directions-car"></i><span> Manage Type </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>masterdata/export" class="waves-effect <?php if ($this->uri->segment(2)=='township') {echo "active";} ?>"><i class="md md-nature-people"></i><span> Export </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
