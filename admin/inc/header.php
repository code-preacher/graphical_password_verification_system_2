
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php">
                <!-- Logo icon -->
                <b><img src="img/logo.jpg" alt="" class="img img-responsive img-circle" style="width: 30%;" /></b>
                <!--End Logo icon -->
                <span><img src="" alt="" class="dark-logo" /></span>
            </a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                
            </ul>
            <!-- User profile and search -->
            <ul class="navbar-nav my-lg-0">

              <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                <form class="app-search">
                    <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
                <!-- Comment -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
                    $pz=$crud->displayOne('user',$_SESSION['id']);
                    echo $lib->greeting().' '.$pz['name']; ?> </a>

                    </li>
                    

                    
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/avatar-a.jpg" alt="user image" class="profile-pic" /></a>

                     <span style="font-size: 12px;"></span>  
                     <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                            
                            <li><a href="logout.php" onClick="return confirm('Are you sure you want to logout ?')"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

