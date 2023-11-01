<?php 
class DeleteStudentController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
public function DeleteRecord($studentId){
    $StudId = mysqli_real_escape_string($this->con,$studentId);
    $Stud_delete = "DELETE FROM register_student WHERE id='$studentId' LIMIT 1 ";
    $result = $this->con->query($Stud_delete);

    if($result){
        return true;
    }else{
        return false;
    }

}

}

?>