<?php


function check_if_added($item_id){
 $db = mysqli_connect("localhost","root","","mobi_store");

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM user_items where item_id = '$item_id' and user_id = '$user_id' and status = 'Added to the cart'";
$result = mysqli_query($db,$sql);

if(mysqli_num_rows($result) >=1){
	return 1;
}
else{
	return 0;
}



}


?>