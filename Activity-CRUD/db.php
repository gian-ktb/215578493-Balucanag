<?php
    $servername="localhost:3306";
    $username= "root";
    $password= "securedpassword";
    $dbname= "student_list";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
?>