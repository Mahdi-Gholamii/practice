<?php

$hostName = "localhost";
$username = "root";
$password = "";
$database = "northwind";

$mysqli = new mysqli($hostName ,$username ,$password ,$database );

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "select * from customers";

$resalt = mysqli_query($mysqli ,$query);

$arr = mysqli_fetch_assoc($resalt);

echo json_encode($arr);

mysqli_close($mysqli);

?>