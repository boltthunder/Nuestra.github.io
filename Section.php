<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Section';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
include 'config/View/View-Student-Record.php';
?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-section">
            Add Section
        </button>
    </div>
    <!-- Button trigger modal -->

    <div class="flex justify-end grid-cols-2 border-0 mb-1">
        <div class="flex justify-end">
            <label for="grade-list" class="mt-1 mr-1 text-black">Grade</label>
            <select class="text-center custom-select custom-select-sm " style="width: 150px; height: auto;" name="grade"
                id="gradelist">
                <option selected value="All">All</option>
                <option  value="Grade-7">Grade-7</option>
                <option  value="Grade-8">Grade-8</option>
                <option  value="Grade-9">Grade-9</option>
                <option  value="Grade-10">Grade-10</option>
                <option  value="Grade-11">Grade-11</option>
                <option  value="Grade-12">Grade-12</option>
            </select>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive" id="result">
                
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php
include_once 'include/modal/section-modal.php';
include_once 'include/header-footer/footer.php';
?>