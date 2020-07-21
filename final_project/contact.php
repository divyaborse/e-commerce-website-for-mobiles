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
<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-sm-9">
			<h2>LIVE SUPPORT</h2>
			<h4>24 Hours | 7 Days | 365 days a year Live Technical Support</h4>
			<p class="text-justify">We are an established e-commerce firm which aims at delivering quality products which includes mobile phones,smart phones and tablets.We at Mobi-Store are always ready to help our customers to resolve their problems.</p>
			<p class="text-justify">Having said that,we treat our customers as our family members and look into their issues immediately.
</p>
		</div>
		<div class="col-sm-3">
			<img src="images/contact.png">
		</div>
	</div>
</div>
<script>
	function validate(){
		var name = document.f3.name.value;
		var email=document.f3.email.value; 
		var status = false;
		if(name.length < 2 || (!isNaN(name)) ){
	document.getElementById("namel").innerHTML = "Please enter a valid name";
	status=false;  
}
return status;
	}
</script>
<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-sm-8">
			<h2>Contact Us</h2>
			<div class="container">
   <form method="post" action="sendemail.php">
				    
                    <div class="form-group">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				        <span id="namel"></span>
				    </div>
				    
                    <div class="form-group">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group">
				        <textarea name="comment" id="comment" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
</div>
		</div>
		<div class="col-sm-4">
			<h4>Company Information :</h4>
			<ul class="list-unstyled">
				<li>
					My Company , 4578 Manorama Road, Glasgow D04 89GR


				</li>
				<li>Maharashtra,India</li>
				<li>Call us now: +123 123456789</li>
				<li>Email: info@mobistore.com</li>
			</ul>
		</div>
	</div>
</div>
<?php 
include 'footer.php';
?>
</body>
</html>