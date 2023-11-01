<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Attendance';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
?>
<div class="container-fluid">

    <div class="grid mb-2">
        <div class="card">
            <div class="card-body sm:flex grid-cols-2 sm:justify-between gap-3">

                <!-- <div class="d-flex align-items-center">
                    <select class="text-center custom-select custom-select-sm select2"
                        style="width: 150px; height: auto;" id="brgy_list">
                        <option selected value="Morning">Morning</option>
                        <option value="Afternoon">Afternoon</option>
                    </select>
                </div> -->

                <div class="grid sm:grid-cols-2 gap-3">
                    <div>
                        <label for="fromDate">From Date</label>
                        <input type="date" name="" id="fromDate" class="form-control">
                    </div>
                    <div>
                        <label for="toDate">To Date</label>
                        <input type="date" name="" id="toDate" class="form-control">
                    </div>
                </div>

                <div class="d-flex align-items-center mt-4">
                    <select class="text-center custom-select custom-select-sm " style="width: 150px; height: auto;"
                        id="brgy_list">
                        <option selected value="Morning">Morning</option>
                        <option value="Afternoon">Afternoon</option>
                    </select>
                </div>

            </div>
        </div>



    </div>
    <!-- Button trigger modal -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Time-in</th>
                            <th>Time-out</th>
                            <th>Date</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Filip A. Jabungan</td>
                            <td>8:30 a.m</td>
                            <td>12:20 p.m</td>
                            <td>10/20/2023</td></td>
                            <td><a href="#"><i class="fas fa fa-eye"></i></a></td>
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