<?php

include './header.php';
include './Sidebar.php';

include '../config/conn.php';
include '../Api/dashboard.php';

?>



<!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="ri-hotel-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalRooms; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Rooms</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-team-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalEmployees; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Employees</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-follow-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalCustom; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Customers</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-account-pin-circle-fill text-muted font-24"></i>
                                                        
                                                        <h3><span><?php echo "   " . $totalUsers; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Users</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                           
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="ri-building-2-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalCompus; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Compuses</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-group-2-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalJobs; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Jobs</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-service-fill text-muted font-24"></i>
                                                        <h3><span><?php echo "   " . $totalServices; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Services</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-2-fill text-muted font-24"></i>
                                                        
                                                        <h3><span><?php echo "   " . $totalTeams; ?></span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Teams</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                           
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                       
                                        <!-- end row -->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
<?php 
include './themeSettings.php';
include './Footer.php';


?>


