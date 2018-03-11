<?php
include_once 'DBConfig.php';
class Validation {
    var $data;
    
    function getTrimData($data){
        $this->data = trim($data);
        $this->data = stripslashes($this->data);
        $this->data = htmlspecialchars($this->data);
        return $this->data;
    }
    
    function checkName($data){
        if (!preg_match("/^[a-zA-Z ]*$/",$data)) {
            return 1;
        }
    }
    
    function  checkPassword($data){
        if(!preg_match("^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])\S*$", $data)){
            return 1;
        }
    }
    
    function checkEmail($data){
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return 1;
        }
    }
    
    function checkUrl($data){
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$data)) {
            return 1;
        }
    }
    
    function checkImage($fileType){
        if($fileType != "image/jpg" && $fileType != "image/png" && $fileType != "image/jpeg" && $fileType != "image/gif" ){
            return 1;
        }
    }
    
    function checkFileSize($filesize){
        if($filesize > Config::FILESIZE){
            return 1;
        }
    }
}
