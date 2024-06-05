<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <title>Edit Information</title>

  <style>
    .container{
      background-color: greenyellow;
      color: purple;
    }
  </style>
   </head>
<body>
  
<div class="container"> 
  <header class="d-flex justify-content-between my-4">
  <h1>Edit Information</h1>
  <div>
    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
</header>
<?php 
if(isset($_GET["id"])) {
  $id = $_GET["id"];
  include("conn.php");
  $sql = "SELECT *FROM sicksheet WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  ?>
<form action="processing.php" method="post">
 
  <div class="form-element my-4">
      <label for="">Patient Name</label>
      <input type="text" name="patient" class="form-control" value="<?php echo $row["Patientname"]; ?>">
  </div>

  <div class="form-element my-4">
    <label for="">Date of Birth</label>
    <input type="date" name="birthday"  class="form--control" value="<?php echo $row["Birthday"]; ?>" >
  </div>

  <div class="form-element my-4">
<label for="">Sex</label>
<input type="radio" name="sex" value="<?php echo $row["Sex"]; ?>">Male
<input type="radio" name="sex" value="<?php echo $row["Sex"]; ?>">Female
</div>

  <div class="form-element my-4">
      <label for="">Next of Kin</label>
      <input type="text" name="kin" class="form-control" value="<?php echo $row["Nextofkin"]; ?>">
  </div>

  <div class="form-element my-4">
    <label for="">Phone Number</label> 
    <input type="tel" name="phonenumber"  class="form-control" value="<?php echo $row["Phone"]; ?>" >
  </div>
  
  <div class="form-element my-4">
    <label for="">Date of Admission</label>
    <input type="date" name="admission"  class="form--control" value="<?php echo $row["Admitteddate"]; ?>" >
  </div>

  <div class="form-element my-4">
    <label for="">Date of Permission</label>
    <input type="date" name="permission"  class="form--control" value="<?php echo $row["Leavedate"]; ?>" >
  </div>

  <div class="form-element my-4">
      <label for="">Disease Name</label>
      <input type="text" name="disease" class="form-control" value="<?php echo $row["Disease"]; ?>">
  </div>

  <div class="form-element my-4">
      <label for="">Medicine</label>
      <input type="text" name="medicine" class="form-control" value="<?php echo $row["Medicine"]; ?>">
  </div>

  <div class="form-element my-4">
      <label for="">Doctor Name</label>
      <input type="text" name="doctor" class="form-control" value="<?php echo $row["Doctorname"]; ?>">
  </div>

  
<input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
  <div class="form-element my-4"> 
    <input type="submit" name="update" class="btn btn-success" value="Edit Information">
  </div>

 </form>
  <?php

}
?>

 
 </div>
 </body>
</html>