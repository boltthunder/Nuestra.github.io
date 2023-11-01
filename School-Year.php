<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'School Year';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-academicYear">
        Add Scool Year
    </button>
    </div>
    <!-- Button trigger modal -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Start Date - Closing Date</th>
                            <th>Student Enrolled</th>
                            <th>Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>03/20/2023 - 03/20/2024</td>
                            <td>100</td>
                            <td class="bg-green-500">Active</td>
                            <td><a href="#"><i class="fas fa fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>03/20/2021 - 03/20/2022</td>
                            <td>100</td>
                            <td class="bg-red-500">Inactive</td>
                            <td><a href="#"><i class="fas fa fa-edit"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php 
include_once 'include/modal/SchoolYear-modal.php';
include_once 'include/header-footer/footer.php';
?>