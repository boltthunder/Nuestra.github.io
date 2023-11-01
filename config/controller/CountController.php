<?php

class CountSection
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
    public function CountStudent(){
        $count = "SELECT register_student.*, section.* FROM register_student INNER JOIN section ON register_student.grade = section.grade WHERE section.grade = 'Grade-7' ";
    }
}

?>