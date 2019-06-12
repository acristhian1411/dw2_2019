<?php
$servidor="localhost";// 127.0.0.1
$usuario="root";
$password="";
  $db="dw2_personas";
$con = mysqli_connect($servidor,$usuario,$password,$db);
//echo $con->host_info . "\n";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
