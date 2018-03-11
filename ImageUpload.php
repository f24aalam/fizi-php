<?php
class ImageUpload{
    var $name,$path;
    function __construct($name){
        $this->name = $name;
    }
    function getFileName(){
    if(isset($_FILES['webimg'])&&!empty($_FILES['webimg']['name'])){
        return $_FILES[$this->name]['name'];
        }else{
            return 0;
        }
    }
    function getFileType(){
        if(isset($_FILES['webimg'])&&!empty($_FILES['webimg']['name'])){
        return $_FILES[$this->name]['type'];
        }else{
            return 0;
        }
    }
    function getFileSize(){
        if(isset($_FILES['webimg'])&&!empty($_FILES['webimg']['name'])){
        return $_FILES[$this->name]['size'];
        }else{
            return 0;
        }
    }
    function getFileTemp(){
        if(isset($_FILES['webimg'])&&!empty($_FILES['webimg']['name'])){
        return $_FILES[$this->name]['tmp_name'];
        }else{
            return 0;
        }
    }
    function uploadFile($path){
        $this->path = $path;
        if($this->getFileName()!=NULL){
            if(copy($this->getFileTemp(), $path)){
                return 1;
            }
        }else{
            return 0;
        }
    }
}