<?php
class StudentController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }

    public function create($Student_Data)
    {
        $Student_info = "'" . implode("','", $Student_Data) . "'";


        $Student_query = "INSERT INTO `register_student` (fname,mname,lname,age,bdate,gender,lrn,grade,section,province,city,street,brgy,zipcode,status,contact) 
        VALUES($Student_info)";
        $result = $this->con->query($Student_query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
class SectionController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }

    public function create($SectionData)
    {
        $Grade = $SectionData['grade-sec'];
        $Section = $SectionData['section'];

        $Section_Query = "INSERT INTO section (grade,section) VALUES('$Grade','$Section')";
        $result = $this->con->query($Section_Query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}

class AcademicYearConroller
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }

    public function create($SchoolYear)
    {
        $from = $SchoolYear['from_date'];
        $to = $SchoolYear['to_date'];
        $status = $SchoolYear['status'];

        $Acad_query = "INSERT INTO schoolyear (from_date,to_date,status) VALUES('$from','$to','$status')";
        $result = $this->con->query($Acad_query);

        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}

class SubjectController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->con = $db->con;
    }
    public function create($Subject)
    {
        $subjectNew = $Subject['subject-reg'];

        $subject_query = "INSERT INTO `subject`(`subject`) VALUES ('$subjectNew')";
        $result = $this->con->query($subject_query);

        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}


?>