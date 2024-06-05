<?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  include("conn.php");
  $sql = "DELETE FROM sicksheet WHERE id = $id";
  if(mysqli_query($conn, $sql)){
    session_start();
    $_SESSION["delete"] = "Record Deleted Successfully";
    header("Location:index.php");
  }
}
?>