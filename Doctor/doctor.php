<?php
include('connect.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Doctor Profile</title>
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
          <a class="nav-link active text-dark" aria-current="page" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="doctor.php">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="patient.php">Patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Appoinment</a>
        </li>
      </ul>
    </div>
    </div>
    </nav>
<!-- Navbar Ends -->
    <!-- Button Start-->
    <div class="container">
        <button type="submit" class = "btn btn-primary my-5">
            <a href="index.php" class = "text-light text-decoration-none">Add Doctor</a>
        </button>
    </div>
    <!-- Button End -->

  <!-- table -->
  <div class="container">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $sql = "select * from `doctor`";
        $result = mysqli_query($conn,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $speciality = $row['speciality'];
                echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$speciality.'</td>
                    <td>
                    <button class = "btn btn-primary"><a href="update.php?updateid='.$id.'" class = "text-light text-decoration-none">Update</a>
                    </button>
                    <button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'" class = "text-light text-decoration-none">Delete</a>
                    </button>
                    </td>
                </tr>';


            }
        }

    ?>



  </tbody>
</table>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>