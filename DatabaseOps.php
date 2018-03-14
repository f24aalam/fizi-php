<?php
include_once 'Conn.php';
class DatabaseOps {
    var $conn;
    function __construct($database = DBConfig::DATABASE) {
        $connection = new Conn();
        $this->conn = $connection->connectDB($database);
    }
    function setData($sql){
        if($this->conn->query($sql) === true){
            return 1;
        }else{
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function setMultiData($sql){
        if($this->conn->multi_query($sql) === true){
            return 1;
        }else{
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function getData($sql){
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }else{
            return 0;
        }
    }
    function getRows($sql){
        $result = $this->conn->query($sql);
        $rows = $result->num_rows;
        return $rows;
    }
    
    function runQuery($sql){
        $result = $this->conn->query($sql);
        return $result;
    }
}
