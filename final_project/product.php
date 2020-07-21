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
  <style type="text/css">
    @media (max-width: 576px) {  
  .xs {color:red;font-weight:bold;}
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width:768px) {  
  .sm {color:red;font-weight:bold;}
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) and (max-width:992px) {  
 .md {color:red;font-weight:bold;}
}
 
/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width:1200px) { 
 .lg {color:red;font-weight:bold;}
}
 
/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  
    .xl {color:red;font-weight:bold;}
}
 
  </style>
</head>
<body>
<?php
include_once('navbar.php');
include_once('check_if_added.php');
?>
<div class="container" style="margin-top: 30px ">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
  <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/6-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title"> Samsung Galaxy S III</h5>

         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(1)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
    <!-- /.card --></div>

   <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">   
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/11-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">

        <h5 class="card-title">Apple iPhone 5S 64Gb</h5>

         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(2)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
    <!-- /.card -->

   <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">   
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/116-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">LG D802 (Optimus G2)</h5>
         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(3)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
    <!-- /.card -->

   <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">   
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/26-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">CAT B15</h5>
         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(4)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
    <!-- /.card -->



  <!-- /.card-deck -->

 <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">   
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/31-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">FLY EZZY4 gray</h5>
        <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(5)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
    <!-- /.card -->

<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/36-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">FLY IQ4410 Phoenix</h5>
        <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(6)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
    <!-- /.card -->

</div>



 <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/41-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">GIGA-BYTE Megatron GS202</h5>
         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(7)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div></div>
    </div>


<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/46-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">Gresso Grand Monaco</h5>
        <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(8)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
    <!-- /.card -->

</div>
<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/146-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">NOKIA 515</h5>
         <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(9)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
    <!-- /.card -->



</div>

<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
     <img class="card-img-top img-fluid" src="images/56-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">HTC Desire 601 315n</h5>
<?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(10)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
</div>
<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/61-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">HTC One</h5>
<?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(11)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>


<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/71-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">HTC One Pink Gel Case</h5>
<?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(12)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>

<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/76-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">Huawei Ascend Y300</h5>
        <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(13)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
<div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/86-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">iPhone 5S</h5>
       <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(14)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>

    <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/96-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">Cirque du Soleil - La Nouba</h5>
       <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(15)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div></div>
    <!-- /.card -->
 <div class="col mb-4">
     <div class="card border-dark mb-3 h-70">
      <!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="images/101-tm_home_default.jpg" alt="Card image cap" width="400">
      <div class="card-body">
         <h5 class="card-title">LENOVO K900 Steel Gray</h5>
       <?php
         if(!isset($_SESSION['email'])){
          echo '<a href= "login.php" class="btn btn-primary btn-block">Buy Now</a>';
         }
         else{
          if(check_if_added(16)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
          }
          else{
            echo '<a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
         }

         
         ?>
      </div>
    </div>
    </div>


</div>
</div><?php include "footer.php";?>
</body>
</html>