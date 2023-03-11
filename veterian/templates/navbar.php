
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-yellow">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="home.php" class="nav-link">Nyumbani</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Navbar Search -->
        <li class="nav-item">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Status: <?php echo" <i>".$_SESSION['role']."</i>";?></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <div class="user-panel mt-1 pb-0 mb-0 d-flex">
                    <div class="image">
                        <img src="../uploads/users/<?php echo $_SESSION['profile']; ?>" 
                            class="img-circle elevation-2" height="20PX" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['uname'];?></a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../logout.php" class="nav-link">Ondoka</a>
            </li>
        </li>
    </ul>
</nav>
<!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-yellow">
        <img src="../dist/img/logo/chicken.jpg" alt="PMS Logo" class="brand-image img-circle elevation-6" style="opacity: .8">
        <span class="brand-text font-weight-dark"> POULTRY SYSTEM</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="background-color:green;">
                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->                                                                                         
                
                        <li class="nav-item">
                            <a href="taarfa_binafsi.php" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                    <p> Taarifa Binafsi </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mail-box.php" class="nav-link">
                                <i class="nav-icon fas fa-inbox"></i>      
                                    <p>Arifa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="taarf_gonjwa.php" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>      
                                    <p>Taarifa Magonjwa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="report_gonjwa.php" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>      
                                    <p>Reporti ya Magongwa</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="taarfa_madawa.php" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                    <p>Maelezo za  Madawa   </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="taarfa_arifa.php" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>      
                                    <p>Arifa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="taarfa_malisho.php" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                    <p>Maelezo ya Malisho  </p>
                            </a>
                        </li> -->
                        
                    </ul>                                                                 
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
    </aside>