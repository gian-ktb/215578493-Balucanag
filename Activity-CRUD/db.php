<?php
    $servername="localhost:3306";
    $username= "gian";
    $password= "securedpassword";
    $dbname= "student_list";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
?>