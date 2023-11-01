<?php 
class FetchController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
    public function fetchSection($fetch_grade){
        $gradeFetch = mysqli_real_escape_string($this->con,$fetch_grade);
        $Fetch = $this->con->query("SELECT * FROM section");
        $result = $this->con->query("SELECT * FROM section WHERE grade = '$fetch_grade' ");
        if($fetch_grade == "All"){
            return $Fetch;
        }else if($fetch_grade == "none"){
            return $result;
        }else{
            return $result;
        }
    }
    public function FetchStudent($fetchStud,$fetchSec){
        $fetch = mysqli_real_escape_string($this->con,$fetchStud);
        $fetchS = mysqli_real_escape_string($this->con,$fetchSec);
        $firts_query = $this->con->query("SELECT * FROM register_student");
        $second_query = $this->con->query("SELECT * FROM register_student WHERE grade='$fetchStud' AND section='$fetchSec'");
        if($fetchStud == 'none'){
            return $firts_query; 
        }else{
            return $second_query;
        }

    }
}
?>