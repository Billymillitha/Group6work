<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Patients List</title>
  <style>
    body{
      color: purple;
      background-color: greenyellow;
    }
    table{
color: green;
background-color: purple;
    }
    tbody{
      background-color: greenyellow;
    }
    .container{
      background-color: grey;
      color: peru;
    }
  </style>
   </head>
<body>
<div class="container"> 
  <header class="d-flex justify-content-between my-4">
  <h1>Patients List</h1>
  <div>
    <a href="create.php" class="btn btn-primary">Add Patient</a>
  </div>
</header>
<table class="table table-bordered">
  <thead class="table">
    <tr>
      <th></th>
      <th>Patient Name</th>
      <th>Date of Birth</th>
      <th>Sex</th>
      <th>Next of Kin</th>
      <th>Phone Number</th>
      <th>Date of Admission</th>
      <th>Date of Permission</th>
      <th>Disease Name</th>
      <th>Medicine</th>
      <th>Doctor Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("conn.php");
    $sql = "SELECT * FROM sicksheet";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["Patientname"]; ?></td>
        <td><?php echo $row["Birthday"]; ?></td>
        <td><?php echo $row["Sex"]; ?></td>
        <td><?php echo $row["Nextofkin"]; ?></td>
        <td><?php echo $row["Phone"]; ?></td>
        <td><?php echo $row["Admitteddate"]; ?></td>
        <td><?php echo $row["Leavedate"]; ?></td>
        <td><?php echo $row["Disease"]; ?></td>
        <td><?php echo $row["Medicine"]; ?></td>
        <td><?php echo $row["Doctorname"]; ?></td>
        <td>
          <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Details</a>
          <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
          <a href="delete.php?id=<?php echo $row["id"]; ?>"  class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php
    }
    ?>
      </tbody>
</table>
  </div>
</body>
</html>