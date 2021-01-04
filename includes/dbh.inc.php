<?php

$dbServername = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "mydb";

$conn=mysqli_connect($dbServername,$dbUserName,$dbPassword,$dbName);

if($conn === false ){
	die("ERROR :Could not connect.",,mysqli_connect_error());
}

