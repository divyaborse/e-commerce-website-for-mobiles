<?php


include_once("co.php");
session_start();

if(is_numeric($_GET['id']) && isset($_GET['id'])){

	$item_id= $_GET['id'];
	$user_id = $_SESSION['id'];
	
	$sql = "INSERT INTO user_items(user_id,item_id,status) VALUES('$user_id','$item_id','Added to the cart')";
	mysqli_query($db,$sql) or die(mysqli_error($db));
	header("location:index.php");


}
?>

