<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "Project";

    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn){
        die('Failed to connect');
    }

?>