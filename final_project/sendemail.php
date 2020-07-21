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
include 'navbar.php';
?>
<?php
#header('Content-type: application/json');
$array = array(
'type' => 'Success',
'message'=> 'Thank you for contact us.We will contact you as early as possible'
);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comment'];


$email_from = $email;
$email_to = "borsedivya301@gmail.com";


$body = 'Name: ' . $name ."\n\n" . 'Email :' .$email ."\n\n" .'Message :' .$message;

$success = @mail($email_to,$subject,$body,'From :<'.$email_from.'>');

echo '<center>
<div class="alert alert-success" style="margin-top: 50px;">
  <strong>'.json_encode($array).'</strong></div>';



include "footer.php";

?>