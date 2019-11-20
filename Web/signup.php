<?php
include('Header.php');
$result= $car_act ->  Latestposted();
$allcarresult= $car_act ->  selectnineCar();
?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Register</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Register</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
        <?php
       if(isset($_GET['uxs'])){
        if($_GET['uxs']==1){
        ?>
        <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Danger!</strong> User Already Exists!
        </div>
        <div class="col-md-6 col-md-offset-3">
            <?php
            }
            }
            ?>
        <div class="userccount">


          <div class="tab-content">
              <form action="functions/users/UserInsert.php" method="post">
            <div id="wsell" class="formpanel tab-pane fade in active">
              <div class="formrow">
                  <label>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
                <div class="formrow">
                    <label>First Name:</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
                </div>
                <div class="formrow">
                    <label>Last Name:</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                </div>
                <div class="formrow">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
              <div class="formrow">
                <select class="form-control" name="gender">
                    <label>Gender:</label>
                  <option>Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="formrow">
                  <label>Address:</label>
                <input type="text" name="address" class="form-control" placeholder="Address" required>
              </div>

              <div class="formrow">
                  <label>Post code:</label>
                <input type="text" name="postcode" class="form-control" placeholder="Postcode" required>
              </div>
              <div class="formrow">
                  <label>Date:</label>
                <input type="date" name="date" class="form-control" placeholder="CDate of Birth" required>
              </div>
                <div class="formrow">
                    <label>Contact:</label>
                    <input type="number" name="contact" class="form-control" placeholder="Contact" required>
                </div>

                <div class="formrow">
                    <label>Password:</label>
                    <input type="password"  id="password" name="password" class="form-control" placeholder="password" onkeyup='check();' required>
                </div>
                <div class="formrow">
                    <label> Confirm Password:</label>
                    <input type="password"  id="password2" name="password2" class="form-control" placeholder=" confirm password" onkeyup='check();' required>
                </div><div id="message"></div>



              <input type="submit" id="submitbutton" class="btn" value="Register">
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

              </form>
          </div>
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="login.php">Login Here</a></div>
          <div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
include('Footer.php');

?>
