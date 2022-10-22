<?php

include("MySQLConexion.php");

if(isset($_POST['save_task'])){
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result){
    $_SESSION['message'] = 'Failed to save task';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
    die;
  }

  $_SESSION['message'] = 'Task Saved successfully';
  $_SESSION['message_type'] = 'success';

  header("Location: index.php");
}

?>