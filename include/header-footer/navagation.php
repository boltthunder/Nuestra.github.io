<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">NSDN<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($_SESSION['title'] == 'Home') {
            echo 'active';
        } ?>">
            <a class="nav-link" href="Home.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Student Management
        </div>

        <li class="nav-item <?php if ($_SESSION['title'] == 'Student Profile' || $_SESSION['title'] == "Section" || $_SESSION['title'] == 'School Year') {
            echo 'active';
        } ?>">
            <a class="nav-link <?php if ($_SESSION['title'] == 'Student Profile' || $_SESSION['title'] == "Section" || $_SESSION['title'] == 'School Year') {
                echo ' ';
            } else {
                echo "collapsed";
            } ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>Student Record</span>
            </a>
            <div id="collapseTwo" class="collapse <?php if ($_SESSION['title'] == 'Student Profile' || $_SESSION['title'] == 'Section' || $_SESSION['title'] == 'School Year') {
                echo 'show';
            } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Student Record:</h6>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'Student Profile') {
                        echo 'active';
                    } ?>" href="Student-Profile.php">Student Profile</a>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'Section') {
                        echo 'active';
                    } ?>" href="Section.php">Section</a>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'School Year') {
                        echo 'active';
                    } ?>" href="School-Year.php">Academic Year</a>
                </div>
            </div>
        </li>


        <li class="nav-item <?php if($_SESSION['title'] == 'Subject List'){ echo "active";} ?>">
            <a class="nav-link <?php if($_SESSION['title'] == 'Subject List'){ echo " ";}else{echo "collapsed";} ?>" href="#" data-toggle="collapse" data-target="#subjectManagement"
                aria-expanded="true" aria-controls="subjectManagement">
                <i class="fas fa-fw fa-folder"></i>
                <span>Subject Management</span>
            </a>
            <div id="subjectManagement" class="collapse <?php if($_SESSION['title'] == 'Subject List'){ echo "show";} ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Subject Management:</h6>
                    <a class="collapse-item <?php if($_SESSION['title'] == 'Subject List'){ echo "active";} ?>" href="Subject-List.php">Subject List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item <?php if ($_SESSION['title'] == 'Attendance') {
            echo 'active';
        } ?>">
            <a class="nav-link  <?php if ($_SESSION['title'] == 'Attendance') {
                echo ' ';
            } else {
                echo "collapsed";
            } ?> " href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
                aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-list"></i>
                <span>Attendance</span>
            </a>
            <div id="collapseUtilities" class="collapse <?php if ($_SESSION['title'] == 'Attendance') {
                echo "show";
            } ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage:</h6>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'Attendance') {
                        echo 'active';
                    } ?>" href="attendance.php">Student Attendance</a>
                </div>
            </div>
        </li>


        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Account Management
        </div>
        <li class="nav-item <?php if ($_SESSION['title'] == 'Teacher Account') {
            echo "active";
        } ?>">
            <a class="nav-link <?php if ($_SESSION['title'] == 'Teacher Account') {
                echo " ";
            } else {
                echo "collapsed";
            } ?>" href="#" data-toggle="collapse" data-target="#accountManagement" aria-expanded="true"
                aria-controls="accountManagement">
                <i class="fas fa-fw fa-user"></i>
                <span>Account Management</span>
            </a>
            <div id="accountManagement" class="collapse <?php if ($_SESSION['title'] == 'Teacher Account' || $_SESSION['title'] == 'Student Account') {
                echo "show";
            } ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Account:</h6>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'Teacher Account') {
                        echo "active";
                    } ?>" href="Teacher-Account.php">Teacher Account</a>
                    <a class="collapse-item <?php if ($_SESSION['title'] == 'Student Account') {
                        echo "active";
                    } ?>" href="Student-Account.php">Student Account</a>
                </div>
            </div>
        </li>

        

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Report Management
        </div>
        <li class="nav-item <?php if($_SESSION['title'] == 'Generate Report'){ echo'active';}?>">
            <a class="nav-link <?php if($_SESSION['title'] == 'Generate Report'){ echo' ';}else{echo'collapsed';}?>" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Report Management</span>
            </a>
            <div id="collapsePages" class="collapse <?php if($_SESSION['title'] == 'Generate Report'){ echo'show';}?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Print Report:</h6>
                    <a class="collapse-item <?php if($_SESSION['title'] == 'Generate Report'){ echo'active';}?>" href="Generate-Report.php">Generate Report</a>
                </div>
            </div>
        </li>



        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <h1 class="h3 text-gray-800">
                    <?= $_SESSION['title'] ?>
                </h1>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>