<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Description</title>
  <style>
    .Passenger-description{
      background: #f5f5f5;
      padding: 50px;
    }
    
    
  </style>
</head>
<body>
  <div class="container">
  <header class="d-flex justify-content-between my-4">
  <h1>Details</h1>
  <div>
    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
</header>
<div class="Pasenger-description my-4">
<?php 
if(isset($_GET["id"])){
  $id = $_GET["id"];
  include("conn.php");
  $sql = "SELECT *FROM sicksheet WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>
  <h2>Patient Name</h2>
  <p><?php echo $row["Patientname"]; ?></p>
  <h2>Date of Birth</h2>
  <p><?php echo $row["Birthday"]; ?></p>
  <h2>Sex</h2>
  <p><?php echo $row["Sex"]; ?></p>
  <h2>Next of Kin</h2>
  <p><?php echo $row["Nextofkin"]; ?></p>
  <h2>Phone Number</h2>
  <p><?php echo $row["Phone"]; ?></p>
  <h2>Date of Admission</h2>
  <p><?php echo $row["Admitteddate"]; ?></p>
  <h2>Date of Permission</h2>
  <p><?php echo $row["Leavedate"]; ?></p>
  <h2>Disease Name</h2>
  <p><?php echo $row["Disease"]; ?></p>
  <h2>Medicine</h2>
  <p><?php echo $row["Medicine"]; ?></p>
  <h2>Doctor Name</h2>
  <p><?php echo $row["Doctorname"]; ?></p>
  <?php

}
?>
</div>
  </div>
</body>
</html>