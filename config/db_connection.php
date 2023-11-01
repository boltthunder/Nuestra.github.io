<?php 
define('db_host', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_database', 'school');

class DatabaseConnection{
    public function __construct() {
        $con = new mysqli(db_host,db_user,db_pass,db_database);

        if($con->connect_error){
            die('<h2>DataBase Connection field!</h2>');
        }
        // echo "Connection Succesful";
        return $this->con = $con;
    }
  
  
}


?>