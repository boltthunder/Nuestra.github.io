<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Teacher Account';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-section">
        Add Section
    </button> -->
    </div>
    <!-- Button trigger modal -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject Handle</th>
                            <th>Student Enrolled</th>
                            <!-- <th>View   </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Dela Cruz</td>
                            <td>3</td>
                            <td>100</td>
                            <!-- <td><a href="#"><i class="fas fa fa-eye"></i></a></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php 
include_once 'include/modal/register-student.php';
include_once 'include/header-footer/footer.php';
?>