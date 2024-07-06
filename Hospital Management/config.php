<?php

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "SeaTechHospitalManagement";

    $conn = new mysqli($server_name,$username,$password,$database);

    if($conn->connect_error){
        echo "Connection Failed " . $conn->error;
    }else{
        echo "Success";
    }
?>