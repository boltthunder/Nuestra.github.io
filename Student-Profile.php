<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Student Profile';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
include 'config/view/View-Student-Record.php';
?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Student
        </button>
    </div>

    <div class="flex justify-end grid-cols-2 border-0 mb-1 ">
        <div class="flex justify-end">
            <label for="grade-list" class="mt-1 mr-1 text-black">Grade</label>
            <select class="text-center custom-select custom-select-sm " style="width: 150px; height: auto;" name="grade"
                id="grade-list">
                <option selected value="none">All</option>
                <option value="Grade-7">Graade-7</option>
                <option value="Grade-8">Graade-8</option>
                <option value="Grade-9">Graade-9</option>
                <option value="Grade-10">Graade-10</option>
                <option value="Grade-11">Graade-11</option>
                <option value="Graade-12">Graade-12</option>
            </select>
        </div>

        <div class="flex ml-2" >
            <label for="section-list" class="mt-1 mr-1 text-black">Section</label>
            <select id="section-list" class="form-control text-center custom-select custom-select-sm " style="width: 150px; height: auto;" name="section" required>

            </select>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive" id="stud_result">

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include_once 'include/modal/register-student.php';
include_once 'include/header-footer/footer.php';
?>