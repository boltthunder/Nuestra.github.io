<?php
include "../db_connection.php";
include_once("../controller/DeleteController.php");

$db = new DatabaseConnection;


if (isset($_POST['DeleteStudent'])) {
    $studentId = mysqli_real_escape_string($db->con, $_POST['stud-id']);
    $DelStudent = new DeleteStudentController;
    $result = $DelStud = $DelStudent->DeleteRecord($studentId);

    if ($result) {
        header("location: ../../Student-Profile");
        exit(0);
    } else {
        header("location: ../../Student-Profile");
        echo "error";
        exit(0);
        
    }

}


?>