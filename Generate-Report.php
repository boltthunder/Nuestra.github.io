<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Generate Report';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>

    <div class="grid sm:grid-cols-2">

        <div class="card shadow mb-4" style="width:400px">
            <div class="card-title d-flex justify-center mt-2">
                <h3>Generate Report</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="generate" class="text-muted">Generate:</label>
                    <select value="" class="form-control" id="generate">
                        <option disabled selected>Please Select</option>
                        <option value="StudentID">Student ID</option>
                        <option value="Attendance">Attendance</option>
                        <!-- <option value=""></option> -->
                    </select>
                </div>

                <div class="form-group hide" id="StudentID">
                    <select name="" id="genRep" class="form-control">
                        <option disabled selected>Please Select Record To Print</option>
                        <option value="All">All</option>
                        <option value="LRN">LRN</option>
                    </select>
                </div>
                <div class="form-group hide" id="LRN">
                    <input type="text" placeholder="Please Enter Student LRN" class="form-control">
                </div>

                <div id="Attendance" class="hide">
                    <div class="form-group grid grid-cols-2 gap-2">
                        <div class="form-group">
                            <label for="from">From:</label>
                            <input type="date" name="" id="from" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="to">To:</label>
                            <input type="date" name="" id="to" class="form-control">
                        </div>
                    </div>
                    <div class="form-group grid grid-cols-2 gap-2">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option disabled selected>Select Grade Level</option>
                                <option value="">Grade-7</option>
                                <option value="">Grade-8</option>
                                <option value="">Grade-9</option>
                                <option value="">Grade-10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" id="section" class="form-control">
                                <option disabled selected>Select Section Level</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tex" id="" class="form-control" placeholder="Enter Student LRN No. . . . . . . ">
                    </div>
                </div>




            </div>
            <div class="card-footer d-flex justify-center">
                <input type="submit" name="" value="Generate" class="btn btn-primary float-right">
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">

            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
<?php
include_once 'include/modal/register-student.php';
include_once 'include/header-footer/footer.php';
?>