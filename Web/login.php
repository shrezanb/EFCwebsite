<?php

include('Header.php');


?>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#">Home</a> / <span>Login</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
          <h5>User Login</h5>
          <!-- login form -->
		  <form action="login_process.php" method="post">
          <div class="formpanel">
            <div class="formrow">
              <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
			
            <div class="formrow">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

              <?php

              if(!isset($_COOKIE["loginAttempts"])) {
                  $attempts=0;

              }else {
                  $attempts =$_COOKIE['loginAttempts'];
              }
             if( $attempts <3) {
                 ?>
                 <input type="submit" class="btn" value="Login">
                 <?php
             } else{
                 ?>
                 <input type="submit" class="btn disabled " value="Login" onclick="banned();" >
              <?php
             }
              ?>
          </div>
              <script type="application/javascript">

                  function banned(){
                      alert("you are banned for five minutes. Please be Patient!")

                  }
              </script>
		 </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="signup.php">Register Here</a></div>
          <!-- sign up form end-->
          
          
      </div>
    </div>
  </div>
</div>



<?php
include('Footer.php');
?>
