<?php

include("conn.php");
if(isset($_POST["create"])){
  $patient = mysqli_real_escape_string($conn, $_POST["patient"]);
  $birthday = mysqli_real_escape_string($conn, $_POST["birthday"]);
  $sex = mysqli_real_escape_string($conn, $_POST["sex"]);
  $kin = mysqli_real_escape_string($conn, $_POST["kin"]);
  $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]); 
  $admission = mysqli_real_escape_string($conn, $_POST["admission"]); 
  $permission = mysqli_real_escape_string($conn, $_POST["permission"]); 
  $disease = mysqli_real_escape_string($conn, $_POST["disease"]); 
  $medicine = mysqli_real_escape_string($conn, $_POST["medicine"]); 
  $doctor = mysqli_real_escape_string($conn, $_POST["doctor"]); 

  $sql = "INSERT INTO sicksheet (Patientname, Birthday, Sex, Nextofkin, Phone, Admitteddate, Leavedate, Disease, Medicine, Doctorname) VALUES ('$patient', '$birthday', '$sex', '$kin', '$phonenumber',  '$admission', '$permission', '$disease', '$medicine', '$doctor')";
  if(mysqli_query($conn, $sql)){
    echo "Record inserted";
  } else{
    die("something went wrong");
  }
}

if(isset($_POST["update"])){
  $patient = mysqli_real_escape_string($conn, $_POST["patient"]);
  $birthday = mysqli_real_escape_string($conn, $_POST["birthday"]);
  $sex = mysqli_real_escape_string($conn, $_POST["sex"]);
  $kin = mysqli_real_escape_string($conn, $_POST["kin"]);
  $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]); 
  $admission = mysqli_real_escape_string($conn, $_POST["admission"]); 
  $permission = mysqli_real_escape_string($conn, $_POST["permission"]); 
  $disease = mysqli_real_escape_string($conn, $_POST["disease"]); 
  $medicine = mysqli_real_escape_string($conn, $_POST["medicine"]); 
  $doctor = mysqli_real_escape_string($conn, $_POST["doctor"]);
  $id = mysqli_real_escape_string($conn, $_POST["id"]); 

  $sql= "UPDATE sicksheet SET Patientname = '$patient', Birthday = '$birthday', Sex='$sex', Nextofkin = '$kin', Phone = '$phonenumber', Admitteddate = '$admission', Leavedate = '$permission', Disease = '$disease', Medicine = '$medicine', Doctorname = '$doctor' WHERE id=$id";
  if(mysqli_query($conn, $sql)){
    echo "Record Updated";
  } else{
    die("something went wrong");
  }
}
?>
