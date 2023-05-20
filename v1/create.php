<?php

include_once("../config/database.php");
include_once("../classes/student.php");

$db = new Database();
$connection = $db->connect();

$student = new Student($connection);
echo $student;exit;
if($_SERVER['REQUEST_METHOD']==="POST"){
    $student->name = "Alphy Joy";
    $student->email = "alphyjoy@gmail.com";
    $student->mobile = "1232423423";

    if($student->create_data()){
        echo "Student has been created";
    }else{
        echo "Failed to insert data";
    }

}else{
echo "Access Denied";
}


?>