<!DOCTYPE html>
<html>
<head>
	<title>Mobi-Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
require 'navbar.php';  
?>
<div class="container">
  
  <br><br>            
  <table class="table table-striped table-bordered">

  	<?php
  	$sum = 0;
  $id = 0;
  	$user_id = $_SESSION['id'];

  	$db = mysqli_connect("localhost","root","","mobi_store");

  	$sql = "SELECT product.name as Name , product.price as Price,product.id as id FROM user_items inner join product on user_items.item_id = product.id where user_items.user_id ='$user_id' and user_items.status = 'Added to the cart'";
  	$result =mysqli_query($db,$sql) or die(mysqli_error($db));
  	if(mysqli_num_rows($result) >=1){

  	?>
    <thead>
      <tr>
        <th>Item Number</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Confirm Order</th>
        <th>Remove Item</th>
      </tr>
    </thead>

    <tbody>
    <?php

    while($row = mysqli_fetch_array($result)){
    $sum = $sum + $row['Price'];
  
    $item_id =$row['id'];

  
echo '
      <tr>
        <td>'.++$id.'</td>
        <td>'.$row['Name'].'</td>
        <td>'.$row['Price'].'</td>
        <td>
        	<a href="success.php?id='.$item_id.'" class="btn btn-primary">Confirm Order</a></td>
        <td><a href="cart_remove.php?id='.$item_id.'" name="Remove" value="remove" class="btn btn-danger">Remove Item</a></td>
      </tr>';


    }

    ?>  
    </tbody>
    <?php 
}    else{
echo "<center><h2>Add items to the cart first!</h2></center>";
}
?>
  </table>
</div>


<?php

include "footer.php";

?>




</body>
</html>
