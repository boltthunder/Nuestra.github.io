<?php
header("Content-Type: application/json");
include "../db_connection.php";
include_once("../controller/DataController.php");

$db = new DatabaseConnection;

$data = json_decode(file_get_contents("php://input"), true);

if (isset($_POST['student-reg'])) {

    $Student_Data = [

        'fname' => mysqli_real_escape_string($db->con, $_POST['fname']),
        'mname' => mysqli_real_escape_string($db->con, $_POST['mname']),
        'lname' => mysqli_real_escape_string($db->con, $_POST['lname']),
        'age' => mysqli_real_escape_string($db->con, $_POST['age']),
        'bdate' => mysqli_real_escape_string($db->con, $_POST['bdate']),
        'sex' => mysqli_real_escape_string($db->con, $_POST['sex']),
        'lrn' => mysqli_real_escape_string($db->con, $_POST['lrn']),
        'grade' => mysqli_real_escape_string($db->con, $_POST['grade']),
        'section' => mysqli_real_escape_string($db->con, $_POST['section']),
        'province' => mysqli_real_escape_string($db->con, $_POST['province']),
        'city' => mysqli_real_escape_string($db->con, $_POST['city']),
        'street' => mysqli_real_escape_string($db->con, $_POST['street']),
        'brgy' => mysqli_real_escape_string($db->con, $_POST['brgy']),
        'zipcode' => mysqli_real_escape_string($db->con, $_POST['zipcode']),
        'status' => mysqli_real_escape_string($db->con, $_POST['status']),
        'contact' => mysqli_real_escape_string($db->con, $_POST['contact']),

    ];

    $student = new StudentController;
    $result = $student->create($Student_Data);

    if ($result) {
        header("location: ../../Student-Profile.php");
    } else {
        header("location: ../../attendance.php");
        exit(0);
    }

}

if (isset($_POST['add-section'])) {
    $SectionData = [
        'grade-sec' => mysqli_real_escape_string($db->con, $_POST['grade-sec']),
        'section' => mysqli_real_escape_string($db->con, $_POST['section']),
    ];
    $Section = new SectionController;
    $SectionResult = $Section->create($SectionData);

    if ($SectionResult) {
        echo 'success';
        header('location: ../../Section.php');
    } else {
        echo "error";
        header('location: ../../Section.php');
        exit(0);
    }
}

if(isset($_POST['sub-SchoolYear'])){

    $SchoolYear = [
        'from_date'=> mysqli_real_escape_string($db->con,$_POST['from_date']),
        'to_date'=> mysqli_real_escape_string($db->con,$_POST['to_date']),
        'status'=> mysqli_real_escape_string($db->con,$_POST['status']),
    ];

    $AcadYear = new AcademicYearConroller;
    $AcadResult = $AcadYear->create($SchoolYear);

    if ($SectionResult) {
        echo 'success';
        header('location: ../../School-Year.php');
    } else {
        echo "error";
        header('location: ../../School-Year.php');
        exit(0);
    }

}

if(isset($_POST['add-subject'])){
    $Subject = [
        'subject-reg' => mysqli_real_escape_string($db->con,$_POST['subject-reg']),
    ];
    $SubjectRes = new SubjectController;
    $SubjectResult = $SubjectRes->create($Subject);

    if ($SubjectResult) {
        echo 'success';
        header('location: ../../Subject-List.php');
    } else {
        echo "error";
        header('location: ../../Subject-List.php');
        exit(0);
    }
}

?>