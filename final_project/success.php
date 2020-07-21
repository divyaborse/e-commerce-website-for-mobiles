<html lang="en">
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
session_start();
include "co.php";
if(!isset($_SESSION['email'])){
	header("location:index.php");

}
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$sql ="UPDATE user_items set status = 'Confirmed order' where user_id = '$user_id' and item_id = '$item_id' and status = 'Added to the cart'";
mysqli_query($db,$sql) or die(mysqli_error($db));

?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Mobi-Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav navbar-right">

     
              <?php
           if(isset($_SESSION['username'])){
            


              echo '<a class="nav-link" href="settings.php"><span class="fa fa-phone"></span> Settings</a></li>';

              echo '<a class="nav-link" href="logout.php"><span class="fa fa-phone"></span> Logout</a></li>';

            }
            

        ?>

      
    </ul>

    
  </div>  
</nav>
<center>
<div class="alert alert-success" style="margin-top: 50px;">
  <strong>Thank You</strong> for ordering from Mobi-Store.The order shall be delivered to you shortly.
  <center><hr width="300"></center> Other some more electronics from<a href="product.php" class="alert-link"> here</a>..
</div>
</center>
<?php
include "footer.php";


?></body>
</html>