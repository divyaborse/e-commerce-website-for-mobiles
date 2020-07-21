<?php

include_once("co.php");
session_start();

if(is_numeric($_GET['id']) && isset($_GET['id'])){
	$item_id = $_GET['id'];
	$user_id  = $_SESSION['id'];
	
	$sql = "DELETE FROM user_items WHERE item_id = '$item_id' and user_id = '$user_id' And status = 'Added to the cart'";
	$result = mysqli_query($db,$sql) or die(mysqli_error($db));

	header("location:cart.php");


}

?>