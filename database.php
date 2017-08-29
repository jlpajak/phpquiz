<?php
  //connect credentials
  $db_host = 'localhost';
  $db_name = 'quiz';
  $db_user = 'root';
  $db_pass = '';

  //mysqli object
  $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

  //err handling
  if($mysqli->connect_error){
    printf("Failed: %s\n", $mysqli->connect_error);
    exit();
  }
