<?php

require "database.php";

$check_database = check_create_database();

if ($check_database == TRUE){
  header("Location: view/login.php");
  exit;
}else{
  echo $check_database;
}

?>