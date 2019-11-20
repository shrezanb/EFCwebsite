
<?php

include('Header.php');
$result= $car_act -> selectCar();

?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Change Password</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#">Home</a> / <span>Change Password</span></div>
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
          <h5>Change Password</h5>
          <!-- form -->

            <form action="functions/users/UAchangePassword.php" method="post">
          <div class="formpanel">
            <div class="formrow">
              <input type="password"  id="password" class="form-control"  name="password" placeholder="New Password" onkeyup='check();' required>
            </div>
            <div class="formrow">
              <input type="password" id="password2" class="form-control"  name="password2"  placeholder="Confirm Password" onkeyup='check();' required>
            </div>
            <input type="submit" class="btn" value="Update" id="submitbutton">
          </div>
          <!-- form  end-->

            </form>
            <div id="message"></div>
            <script type="application/javascript">
                var check = function() {
                    if (document.getElementById('password').value ==
                        document.getElementById('password2').value) {
                        document.getElementById('message').style.color = 'green';
                        document.getElementById('message').innerHTML = 'Password Matched';
                        document.getElementById('submitbutton').style.visibility = 'visible';

                    } else {
                        document.getElementById('message').style.color = 'red';
                        document.getElementById('message').innerHTML = 'Password does not match.';
                        document.getElementById('submitbutton').style.visibility = 'hidden';
                    }
                }

            </script>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('Footer.php');
?>
