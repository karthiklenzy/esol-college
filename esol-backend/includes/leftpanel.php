 <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">ESOL College</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="<?php echo HTTP_PATH;?>" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        
                        
                            <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?><b class="caret"></b>

                        
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo ADMIN_PATH; ?>edit-user?userid=<?php echo $_SESSION['userid']; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo ADMIN_PATH;?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_PATH;?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <?php 
                            if ($_SESSION['usertype'] == "admin") {
                            
                            ?>
                            <li>
                                <a href="#"><i class="fa fa-file fa-fw"></i> Sliders<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH;?>sliders">View / Edit Slider</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ADMIN_PATH;?>add-slider">Add Slider</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Includes<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH."edit-includes";?>">View / Edit includes</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add includes</a>
                                    </li> -->
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comments fa-fw"></i> News<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH."news";?>">Add / Edit news</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add news</a>
                                    </li> -->
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-calendar-plus-o fa-fw"></i> Events<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH."events";?>">Add / Edit events</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add news</a>
                                    </li> -->
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-book fa-book"></i> Courses<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>courses">View / edit Course</a>
                                    </li>
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cubes fa-fw"></i> Library<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>library">View / Edit books</a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo ADMIN_PATH; ?>add-library-book">Add book</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="<?php echo ADMIN_PATH; ?>edit-library-book">Edit book</a>
                                    </li> -->
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar fa-fw"></i> Intake dates<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>intake-calendar">View / Delete calendar</a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo ADMIN_PATH; ?>add-library-book">Add book</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="<?php echo ADMIN_PATH; ?>edit-library-book">Edit book</a>
                                    </li> -->
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil fa-fw"></i>Semester Calendar<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>semester-calendar">View / Delete semester date</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>calendar-alert">View / Delete calendar alert</a>
                                    </li>
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i>Staffs<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>staff">View / Edit staff</a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> Administration<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>users">View / edit user</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add user</a>
                                    </li>
                                    <li>
                                        <a href="#">Edit profile</a>
                                    </li> -->
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <?php 
                        }

                            ?>
                            <li>
                                <a href="#"><i class="fa fa-child"></i> Admissions<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>admission">View Students</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>tkt-admission">View TKT Students</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add user</a>
                                    </li>
                                    <li>
                                        <a href="#">Edit profile</a>
                                    </li> -->
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-paper-plane"></i> Inquiry<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo ADMIN_PATH; ?>inquiry">Edit Inquiries</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Add user</a>
                                    </li>
                                    <li>
                                        <a href="#">Edit profile</a>
                                    </li> -->
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>