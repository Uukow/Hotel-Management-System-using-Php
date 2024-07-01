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
                                    <h4 class="page-title">Hotel Management System</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div id="messageContainer" class="container mt-4">
                            </div>
                                <div class="row" id="EmployeesContainer">

                                 </div>



                                 <div class="modal" tabindex="-1" id="EmployeeModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Employee Registration</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">


                                <form id="employeeForm">
                                <input type="hidden" name="update_id" id="update_id">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <div id="alert-success" class="alert alert-success d-none"></div>
                                            <div id="alert-danger" class="alert alert-danger d-none"></div>

                                            </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Full Name</label>
                                                <input type="text" name="name" id="name" class="form-control" value="" required>
                                            </div>
                                            </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Possition</label>
                                                <input type="text" name="possition" id="possition" class="form-control" value="" required>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="text" name="phone" id="phone" class="form-control" value="" required>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" value="" required>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Location</label>
                                                <input type="text" name="location" id="location" class="form-control" value="" required>
                                            </div>
                                            </div>


                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                                </form>


                              
                            </div>
                          </div>
                        </div>

                        
                    </div>

                    
                        </div> <!-- End row -->
                        </div> <!-- content -->

                

</div>








<?php
include './footer.php';
?>

<script src="../js/Employees.js"></script>
