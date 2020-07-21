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
<script>
	function validate(){
var password = document.f1.password.value;
var phone = document.f1.contact.value;
var email=document.f1.email.value;  
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
var name = document.f1.name.value;
var mob = '/^[1-9]{1}[0-9]{9}$/';
var city = document.f1.city.value;
var status=false;  
if(password.length <6){
	document.getElementById("passwordl").innerHTML = "Password must be at least 6 char long";
	status=false;  
}
if(contact.length < 10 || contact.length > 10 || (mob.test(contact) == false)){
	document.getElementById("contactl").innerHTML = "Phone number must be 10 digits";
	status=false;  
}

if(name.length < 2 || (!isNaN(name)) ){
	document.getElementById("namel").innerHTML = "Please enter a valid name";
	status=false;  
}
if(city.length < 2 || (!isNaN(city)) ){
	document.getElementById("cityl").innerHTML = "Please enter a valid city name";
	status=false;  
}
return status;  
}
	</script>

<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-sm-5 col-md-6 col-lg-5 col-xs-5">
			<img src="images/yess.jpg" width="400">
		</div>
		<div class="col-sm-7 col-md-6 col-lg-7 col-xs-7">
			<div class="container">
  <h2>SIGN UP</h2>
  <form action="signupdb.php" method="post" onsubmit="return validate()" name="f1">
  	<?php 
  	if(isset($_SESSION['message']) && isset($_POST['submit'])){
  	if($_SESSION['message'] == 'Email already exists'){
echo '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION['message'].'</div>';}
else if($_SESSION['message'] == 'You are now logged in')
	{
echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION['message'].'</div>';
}}?>
  	<div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      <span id="namel"></span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <span id="emaill"></span>
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      <span id="passwordl"></span>
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="city" class="form-control" id="city" placeholder="Enter city" name="city" required>
      <span id="cityl"></span>
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="Address" class="form-control" id="address" placeholder="Enter Address" name="address" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="contact" class="form-control" id="contact" placeholder="Enter Contact" name="contact" required>
      <span id="contactl"></span>
    </div>
    <div class ="inline">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    	
 &nbsp;&nbsp;&nbsp;&nbsp;Already have an account ?&nbsp;&nbsp;<a href="login.php" class="btn btn-primary"> Login</a>
   </div>

  </form>

</div>

		 </div>
	</div>

	</div>
	<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Information</h4>
          <ul class="list-unstyled">
          
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
           
          </ul>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
            <li>Contact :<a href="tel:+123 123456789">+123 123456789</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - Divya Rajendra Borse.  All rights reserved.</p>
    </div>
  </div>


  </div>
  </div>
</footer>   

</body>
</html>