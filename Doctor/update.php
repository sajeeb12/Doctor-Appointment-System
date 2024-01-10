<?php
include 'connect.php';

$id = $_GET['updateid'];

$sql = "select * from `doctor` where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$phone = $row['phone'];
$speciality = $row['speciality'];


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $speciality = $_POST['speciality'];

    $sql = "update `doctor` set id = $id, name = '$name',email = '$email',password = 'password',phone = '$phone',speciality = '$speciality' where id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:doctor.php');
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
  <nav class="navbar navbar-expand-lg bg-light">
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
    </nav>
<!-- Navbar Ends -->



    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class = "form-control" placeholder="Enter Name" value = <?php echo $name ?> name = "name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class = "form-control" placeholder="Enter Email" value = <?php echo $email ?> name = "email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class = "form-control" placeholder="Enter password" value = <?php echo $password ?> name = "password">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class = "form-control" placeholder="Enter Phone" value = <?php echo $phone ?> name = "phone">
            </div>
            <div class="form-group">
                <label>Speciality</label>
                <input type="text" class = "form-control" placeholder="Enter Speciality" value = <?php echo $speciality ?> name = "speciality">
            </div>
            <button type="submit" class = "btn btn-primary" name = "submit">
                Update
            </button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>