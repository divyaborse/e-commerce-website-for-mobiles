<?php
session_start();
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Mobi-Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav navbar-right">

      <li class="nav-item">
        <a class="nav-link" href="about.php"><span class="fa fa-info"></span> About Us</a></li>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><span class="fa fa-phone"></span> Contact Us</a></li>
              <?php
           if(isset($_SESSION['username'])){
             echo '<a class="nav-link" href="product.php"><span class="fa fa-phone"></span> products</a></li>';
            echo '<a class="nav-link" href="cart.php"><span class="fa fa-phone"></span> Cart</a></li>';


              echo '<a class="nav-link" href="settings.php"><span class="fa fa-phone"></span> Settings</a></li>';

              echo '<a class="nav-link" href="logout.php"><span class="fa fa-phone"></span> Logout</a></li>';

            }
            else{
             echo '<li class="nav-item">
        <a class="nav-link" href="signup.php"><span class="fa fa-sign-in"></span> Sign Up</a></li>';
     echo  '<li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#loginModal"><span class="fa fa-user"></span> Login</a></li>';
            }

        ?>

      
    </ul>

    
  </div>   <div class="modal" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p> Don't have an account?<a href="signup.php">&nbsp;&nbsp;Register</a></p>
          <form action="logindb.php" method="post" name="f1">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <!--<div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
     <!--<p><a href="settings.php">Forgot Password ?</a></p>-->
  </form>
</div>
        </div>
        

        
      </div>
    </div>


</nav>

