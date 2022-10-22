<?php
include("MySQLConexion.php");

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    header("Location: index.php");
    die;
  }

  $_SESSION['message'] = 'Task Removed';
  $_SESSION['message_type'] = 'warning';
  header("Location: index.php");
}
?>