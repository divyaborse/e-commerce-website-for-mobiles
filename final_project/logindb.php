<?php

require 'co.php';
session_start();
if(isset($_POST['submit'])){
	
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	
	$password = md5($password);#hash password for security purpose

	$sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";

	$result = mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result) == 1){
		$sql1 = "SELECT name,email,id FROM signup where email = '$email' AND password = '$password'";
		$result1 = mysqli_query($db,$sql1);
		$row = mysqli_fetch_array($result1);
		$_SESSION['message'] = "You are logged in";
		$_SESSION['username'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];
		header('location:index.php');
		

	}
	else{
		
		
		$message = "Email/Password is incorrect";
		header("location:login.php?error".$message);
		
	}
	
 	
}
?>