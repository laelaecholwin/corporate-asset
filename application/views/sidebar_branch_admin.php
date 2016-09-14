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
                                <a href="<?php echo base_url(); ?>journey/originpoint" class="waves-effect <?php if ($this->uri->segment(2)=='originpoint') {echo "active";} ?>"><i class="md md-edit"></i><span> At Origin Point </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>journey/branchorigin" class="waves-effect <?php if ($this->uri->segment(2)=='originbranch') {echo "active";} ?>"><i class="md md-edit"></i><span> At Origin Branch </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>journey/driverorigin"><i class="md md-edit"></i><span> At Driver </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>journey/thirdparty"><i class="md md-edit"></i><span> At Third Party </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>journey/destinationpoint"><i class="md md-edit"></i><span> At Destination Point </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='instock') {echo "active";} ?>"><i class="md md-view-list"></i><span> History </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li <?php if ($this->uri->segment(2)=='tbd') {echo "class=active";} ?>><a href="<?php echo base_url(); ?>instock/tbd">Delivered</a></li>
                                    <li <?php if ($this->uri->segment(2)=='tbp') {echo "class=active";} ?>><a href="<?php echo base_url(); ?>instock/tbp">Other Status</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='history') {echo "active";} ?>"><i class="md md-now-widgets"></i><span> Dispute </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li <?php if ($this->uri->segment(2)=='inbound') {echo "class=active";} ?>><a href="<?php echo base_url(); ?>history/inbound">Missing</a></li>
                                    <li <?php if ($this->uri->segment(2)=='outbound') {echo "class=active";} ?>><a href="<?php echo base_url(); ?>history/outbound">Return</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
