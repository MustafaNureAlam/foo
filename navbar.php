<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    
    <!-- Navbar Header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php">Byeah Dashboard</a>
    </div>
    <!-- End Navbar Header -->
    
    <!-- Navbar Top Links -->
    <ul class="nav navbar-top-links navbar-right">

        <!-- Dashboard - Messages -->
        <li class="dropdown">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-messages">

                <li>
                    <a href="#">
                        <div>
                            <strong>User full name</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>

        </li>
        <!-- End Dashboard - Messages -->
        
        <!-- Dashboard - User Settings -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                User Full name 
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
        <!-- End Dashboard - User Settings -->

    </ul>
    <!-- End Navbar Top Links -->
    
    <!-- Navbar - Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        
        <!-- Sidebar Collapse -->
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                
                <!-- Form - Sidebar Search -->
                <li class="sidebar-search">
                    <div class="form-group">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </li>
                <!-- Form - Sidebar Search -->
                
                <!-- Dashboard Links -->
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <!-- #### -->
                
                <!-- Start Outreach Workshop -->
                <li>
                    <a href="#">
                        <i class="fa fa-cogs fa-fw"></i> Outreach Workshop <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="outreach-data_entry.php">Enter Data</a>
                        </li>
                        <li>
                            <a href="morris.html">Generate Reports <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="outreach-generate_report-overall.php">Overall</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-individual.php">Individual</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-batch_wise.php">Batch-wise</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="outreach-analytics.php">Analytics <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="outreach-generate_report-overall.php">KPI</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-individual.php">Workshop</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-batch_wise.php">Participants</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-batch_wise.php">Elligible for Individual assesment</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #### -->

                <!-- Start Individusal Assement -->
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-fw"></i> Individual Assessment <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="Individusal_Assessment-enter_data.php">Enter Data</a>
                        </li>
                        <li>
                            <a href="#">Generate Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="Individusal_Assessment-Generate_Reports-overall.php">Overall</a>
                                </li>
                                <li>
                                    <a href="Individusal_Assessment-Generate_Reports-indivisual.php">Individual</a>
                                </li>
                                <li>
                                    <a href="#">Batch-wise</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="individusal_Assement-analytics.php">Analytics</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Registration -->
                <li>
                    <a href="#">
                        <i class="fa fa-user-plus fa-fw"></i> Registration <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Enter Data</a>
                        </li>
                        <li>
                            <a href="#">Generate Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Overall</a>
                                </li>
                                <li>
                                    <a href="#">Individual</a>
                                </li>
                                <li>
                                    <a href="#">Batch-wise</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="registration-analytics.php">Analytics <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="outreach-generate_report-overall.php">KPI</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-individual.php">Individusal Assessment</a>
                                </li>
                                <li>
                                    <a href="outreach-generate_report-batch_wise.php">Participants</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Ell Data -->
                <li>
                    <a href="#">
                        <i class="fa fa-database fa-fw"></i> Ell Data <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Enter Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Enter baseline Data</a>
                                </li>
                                <li>
                                    <a href="#">How I Am</a>
                                </li>
                                <li>
                                    <a href="#">What I Know</a>
                                </li>
                                <li>
                                    <a href="#">How I Know</a>
                                </li>
                                <li>
                                    <a href="#">What I Earn </a>
                                </li>
                                <li>
                                    <a href="#">Enter Midline Data </a>
                                </li>
                                <li>
                                    <a href="#">Enter Endline Data </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Generate Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Overall</a>
                                </li>
                                <li>
                                    <a href="#">Individual</a>
                                </li>
                                <li>
                                    <a href="#">Batch-wise</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Analytics <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="Ell_data-analytics-who_i_am.php">How I Am</a>
                                </li>
                                <li>
                                    <a href="#">What I Know</a>
                                </li>
                                <li>
                                    <a href="Ell_data-analytics-how_i_know.php">How I Know</a>
                                </li>
                                <li>
                                    <a href="Ell_data-analytics-what_i_earn.php">What I Earn </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #### -->

                <!-- Start Mentorship -->
                <li>
                    <a href="#">
                        <i class="fa fa-wrench fa-fw"></i> Mentorship <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Recruitment and Registration</a>
                        </li>
                        <li>
                            <a href="#">Orientation</a>
                        </li>
                        <li>
                            <a href="#">Matching Workshop</a>
                        </li>
                        <li>
                            <a href="#">Mentoring Club</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Basic Traning -->
                <li>
                    <a href="#">
                        <i class="fa fa-language fa-fw"></i> Basic Training <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Enter Traning Data</a>
                        </li>
                        <li>
                            <a href="#">Pre-Test Score</a>
                        </li>
                        <li>
                            <a href="#">Post-Test Score</a>
                        </li>
                        <li>
                            <a href="#">Analytics</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->

                <!-- Start Advance Traning -->
                <li>
                    <a href="#">
                        <i class="fa fa-users fa-fw"></i> Advance Training <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Enter Traning Data</a>
                        </li>
                        <li>
                            <a href="#">Pre-Test Score</a>
                        </li>
                        <li>
                            <a href="#">Post-Test Score</a>
                        </li>
                        <li>
                            <a href="#">Analytics <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Business Plan Lab -->
                <li>
                    <a href="#">
                        <i class="fa fa-thermometer-full fa-fw"></i> Business Plan Lab <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Participant</a>
                        </li>
                        <li>
                            <a href="#">Admin</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Business Plan Trial -->
                <li>
                    <a href="#">
                        <i class="fa fa-gavel fa-fw"></i> Business Plan Trial <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Link #</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Loan Panel Review -->
                <li>
                    <a href="#">
                        <i class="fa fa-list fa-fw"></i> Loan Panel Review <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Review Schedule</a>
                        </li>
                        <li>
                            <a href="#">Show Calender</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start FI / NBFI Orientation -->
                <li>
                    <a href="#">
                        <i class="fa fa-handshake-o fa-fw"></i> FI / NBFI Orientation <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Calender Entry</a>
                        </li>
                        <li>
                            <a href="#">Show Calender</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->
                
                <!-- Start Follow Up -->
                <li>
                    <a href="#">
                        <i class="fa fa-map-signs fa-fw"></i> Follow Up <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Calender Entry</a>
                        </li>
                        <li>
                            <a href="#">Show Calender</a>
                        </li>
                    </ul>
                </li>
                <!-- #### -->

                <!-- End Dashboard Links -->

            </ul>
        </div>
        <!-- Sidebar Collapse -->

    </div>
    <!-- End Navbar - Sidebar -->
</nav>