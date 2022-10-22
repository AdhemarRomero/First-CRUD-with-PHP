<?php

  session_start();

  // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'phpcrud';

  // Conexión a bd - MySQL
  $conn = mysqli_connect(
    $server, 
    $user, 
    $pass, 
    $db
  );

  // if(isset($conn)){
  //   echo 'DB is connect'
  // }
?>