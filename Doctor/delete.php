<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `doctor` where id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:doctor.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>