<?php
include 'DBConfig.php';
class Conn{
   public function connectDB($database = DBConfig::DATABASE) {
        $conn = new mysqli(DBConfig::SERVERNAME,  DBConfig::USERNAME, DBConfig::PASSWORD,  $database);
        if($conn->connect_error){
            die("Connection Failed:" .$conn->connect_error);
        }
        //echo "success";
        return $conn;
    }
}
//$conn = new Conn();
//$conn->connectDB();