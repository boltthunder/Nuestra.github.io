<?php

class ViewStudentList
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
    public function ViewStudent()
    {

        $Student_View = "SELECT * FROM register_student";
        $result = $this->con->query($Student_View);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
class ViewGrade
{
    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->con = $db->con;
    }
    public function viewgrade()
    {
        $GradeView = "SELECT grade FROM section GROUP BY grade";
        $result = $this->con->query($GradeView);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }

    }
}

class ViewSection
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
    public function viewsection()
    {
        $SectionView = "SELECT * FROM section";
        $result = $this->con->query($SectionView);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }

    }
}







?>