<?php
include('Database/database.php');
include('functions/cars/carAction.php');
include('functions/users/UsersAction.php');
include('functions/comment/commentAction.php');
include('functions/forums/forumsAction.php');
session_start();
$pagename =basename($_SERVER['PHP_SELF']);
$cookie_name =  $pagename;
$View = 1;
if(isset($_COOKIE[$cookie_name])){

    $View = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name, $View, time() + (60 * 60), "/");
}else {
    setcookie($cookie_name, $View, time() + (60 * 60), "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Eco Friendly Car</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Owl carousel -->
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom Style -->
<link href="css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head><body>
<!-- Top Bar start -->
<div class="topbar-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="tpinfo"> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 9843564772</a> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Kathmandu Street, Nepal</a> </div>
      </div>
      <div class="col-md-6 col-sm-6">
          <?php


              if(isset( $_SESSION['login_name'])) {
                  $username = $_SESSION['login_name'];
                  ?>
                  <div class="toplinks"><a> <?php echo $username; ?>  </a>
                      <a href="EdituserinfoAction.php?id=<?php echo $_SESSION['login_id']; ?>"
                         class="mt-style-button small">Edit Profile </a>
                      <a href="logoutAction.php" class="mt-style-button small">LogOut </a>
                  </div>
                  <?php
              }
else {?>

               <div class="toplinks">
              <a href="login.php" >Sign in</a>
              <a href="signup.php" >Sign up</a>
              </div>
    <?php
          }

          ?>
      </div>
    </div>
  </div>
</div>

<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="Index.php" class="logo"><img src="images/eco.png" height="50px", width=""50px alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
               <?php
                      if(isset($_SESSION['roles'])){
         if($_SESSION['roles'] == "admin"){
          ?>
            <li><a href="DashBoard.php">DashBoard </a>  </li>
        <?php

         }
       }
                  ?>
              <li><a href="Index.php">Home </a>  </li>
				<li><a href="BlogGridFullWidth.php">Reviews</a></li>
              <li><a href="forums.php">Forums</a></li>
              

             
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>
<!-- Header end -->
