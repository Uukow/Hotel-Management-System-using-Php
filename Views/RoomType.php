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
                            <h4 class="header-title">Room Type Data Table</h4>


                            <!-- end nav-->
                            <div class="tab-content">

                                <div class="row">


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="searchInput">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button id="AddNew" class="btn btn-primary float-end">Add New Job</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane show active" id="basic-datatable-preview">
                                    <table id="TypeTable" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th onclick="sortTable(0)">#</th>
                                                <th onclick="sortTable(1)">Room Type</th>
                                                <th onclick="sortTable(2)">Description</th>


                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>



                                        </tbody>
                                    </table>
                                </div> <!-- end preview-->


                            </div> <!-- end tab-content-->

                        </div> <!-- end card body-->
                    </div>

                    <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row-->



            <div class="modal" tabindex="-1" id="typeModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Rooms Type Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form id="typeForm">
                                <input type="hidden" name="update_id" id="update_id">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="alert-success" class="alert alert-success d-none" role="alert"></div>
                                        <div id="alert-danger" class="alert alert-danger d-none" role="alert"></div>

                                    </div>



                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Room Type</label>
                                        </div>
                                        <input type="text" name="typeRoom" id="typeRoom" class="form-control" pattern="[^0-9]*" title="Please enter a valid String without numbers" required>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Room Decription</label>
                                        </div>
                                        <input type="text" name="description" id="description" class="form-control" pattern="[^0-9]*" title="Please enter a valid String without numbers" required>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                            </form>



                        </div>
                    </div>
                </div>


            </div> <!-- container -->

        </div> <!-- content -->



    </div>








    <?php
    include './footer.php';
    ?>

    <script src="../js/RoomType.js"></script>

    <script>
        function sortTable(columnIndex) {
            const table = document.getElementById('TypeTable');
            const rows = Array.from(table.rows).slice(1); // Exclude the header row
            const isAscending = table.rows[0].cells[columnIndex].classList.toggle('asc');

            rows.sort((a, b) => {
                const aValue = a.cells[columnIndex].textContent;
                const bValue = b.cells[columnIndex].textContent;

                return isAscending ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            // Clear the table body
            table.tBodies[0].innerHTML = '';

            // Append the sorted rows
            rows.forEach(row => {
                table.tBodies[0].appendChild(row);
            });
        }

        document.getElementById('searchInput').addEventListener('input', function() {
            filterTable(this.value.toLowerCase());
        });

        function filterTable(query) {
            const table = document.getElementById('TypeTable');
            const rows = Array.from(table.rows).slice(1); // Exclude the header row

            rows.forEach(row => {
                const visible = Array.from(row.cells).some(cell => cell.textContent.toLowerCase().includes(query));
                row.style.display = visible ? '' : 'none';
            });
        }
    </script>