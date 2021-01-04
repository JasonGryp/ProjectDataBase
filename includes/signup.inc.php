<?php
	include_once'dbh.inc.php';

	$onoma = $_POST['onoma'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$tilefono = $_POST['tilefono'];

	$sql = "INSERT INTO user (Onoma,password,email,tilefono) VALUES ('$onoma','$password','$email','$tilefono');";
	mysqli_query($conn,$sql);
	header("Location: ../index.php?signup=success");