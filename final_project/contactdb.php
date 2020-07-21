<?php

include 'co.php';
session_start();
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db,$_POST['name']);

	$email =  mysqli_real_escape_string($db,$_POST['email']); 
	$comment =  mysqli_real_escape_string($db,$_POST['comment']);

	$query = "INSERT INTO contact(name,email,comment) VALUES('$name','$email','$comment')";

	$result = mysqli_query($db,$query);
	if($result){
		echo "string";
	}
	else{
		echo "no";
	}
}




?>