<?php
session_start();
  include("../connection.php");
  $sql = "DELETE FROM items WHERE iId = $_GET[id]";
  // echo $sql;
  // exit();
  $result = setData($sql);   
  header('Location: dashboard.php');
?>