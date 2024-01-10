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

    <title>Patient Profile</title>
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
            <a href="patient_index.php" class = "text-light text-decoration-none">Add Patient</a>
        </button>
    </div>
    <!-- Button End -->

  <!-- table -->
  <div class="container">

  <table class="table">
  <thead class ="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">History</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $sql = "select * from `Patient`";
        $result = mysqli_query($conn,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $p_id = $row['p_id'];
                $p_name = $row['p_name'];
                $p_gender = $row['p_gender'];
                $p_email = $row['p_email'];
                $p_mobile = $row['p_mobile'];
                $p_age = $row['p_age'];
                $p_history = $row['p_history'];
                echo '<tr>
                    <th scope="row">'.$p_id.'</th>
                    <td>'.$p_name.'</td>
                    <td>'.$p_gender.'</td>
                    <td>'.$p_email.'</td>
                    <td>'.$p_mobile.'</td>
                    <td>'.$p_age.'</td>
                    <td>'.$p_history.'</td>
                    <td>
                    <button class = "btn btn-primary"><a href="patient_update.php?updateid='.$p_id.'" class = "text-light text-decoration-none">Update</a>
                    </button>
                    <button class = "btn btn-danger"><a href="patient_delete.php?deleteid='.$p_id.'" class = "text-light text-decoration-none">Delete</a>
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