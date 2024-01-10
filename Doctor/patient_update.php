<?php
include 'connect.php';

$p_id = $_GET['updateid'];

$sql = "select * from `Patient` where p_id = $p_id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$p_name = $row['p_name'];
$p_gender = $row['p_gender'];
$p_email = $row['p_email'];
$p_mobile = $row['p_mobile'];
$p_age = $row['p_age'];
$p_history = $row['p_history'];


if (isset($_POST['submit'])){
    $p_name = $_POST['p_name'];
    $p_gender  = $_POST['p_gender'];
    $p_email = $_POST['p_email'];
    $p_mobile = $_POST['p_mobile'];
    $p_age = $_POST['p_age'];
    $p_history = $_POST['p_history'];
    $sql = "update `Patient` set p_id = $p_id, p_name = '$p_name',p_gender = '$p_gender',p_email = '$p_email',p_mobile = '$p_mobile',p_age = '$p_age', p_history = '$p_history' where p_id = $p_id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:patient.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>














<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <!-- Navbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand text-dark" href="#">Doctor Appoinment System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="doctor.php">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Appoinment</a>
        </li>
      </ul>
    </div>
    </div>
    </nav> -->
<!-- Navbar Ends -->



    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Patient Name</label>
                <input type="text" class = "form-control" placeholder="Enter Name" value = "<?php echo $p_name ?>" name = "p_name">
            </div>
            <div class="form-group">
                <label>Patient Gender</label>
                <input type="text" class = "form-control" placeholder="Enter Gender" value = "<?php echo $p_gender ?>" name = "p_gender">
            </div>
            <div class="form-group">
                <label>Patient Email</label>
                <input type="text" class = "form-control" placeholder="Enter Email" value = "<?php echo $p_email ?>" name = "p_email">
            </div>
            <div class="form-group">
                <label>Patient Mobile</label>
                <input type="text" class = "form-control" placeholder="Enter Mobile" value = "<?php echo $p_mobile ?>" name = "p_mobile">
            </div>
            <div class="form-group">
                <label>Patient Age</label>
                <input type="text" class = "form-control" placeholder="Enter Age" value = "<?php echo $p_age ?>" name = "p_age">
            </div>

            <div class="form-group">
                <label>Patient Medical History</label>
                <input type="text" class = "form-control" placeholder="Enter Medical History" value = "<?php echo $p_history ?>" name = "p_history">
            </div>

            <button type="submit" class = "btn btn-primary" name = "submit">
                Update
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
