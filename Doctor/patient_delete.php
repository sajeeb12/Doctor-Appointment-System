<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `Patient` where p_id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:patient.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>