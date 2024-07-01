<?php
include './header.php';
include './Sidebar.php';
include './themeSettings.php';

?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Uukow Projects</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Customer Data Table</h4>


                            <!-- end nav-->




                                    <form id="jobForm">
                                        <div class="row">


                                                <button type="submit" id="addNew" class="btn btn-info float-right m-2">Get Job Report</button>

                                        </div>

                                                </form>
                                                <div class="row">
                                                    <div class="col-sm-12 float-right text-right">
                                                    <button class="btn btn-success" id="print_statment"><i class="fa-solid fa-print"></i> Print</button>
                                            <button onclick="exportToExcel()" class="btn btn-info" id="export_statment"><i class="fa-solid fa-file-export"></i> Export</button>
                                                    </div>
                                                </div>


                                            </div>

                                            

                                            <div class="table-responsive " id="print_area">

                                            <!-- <img src="../assets/img/logo.png" width="100%" >
                                                 -->
                                                <table class="table table-striped" id="jobTable">
                                                    <thead>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                            
                                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php
    include './footer.php';
    ?>

    <script src="../js/JobsReport.js"></script>