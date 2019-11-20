<?php
include('Header.php');
$id = $_GET['id'];
$result= $user_act ->  GetById($id);

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
            <div class="col-md-6 col-md-offset-3">
                <div class="userccount">


                    <div class="tab-content">
                        <?php
                        while($data = $db_database ->fetch($result)) {
                            ?>
                            <form action="functions/users/EditUserinfo.php" method="post">

                                <div id="wsell" class="formpanel">

                                    <input type="text" name="ids" id="ids"  value="<?php echo $data['id'];?>" hidden>
                                    <div class="formrow">

                                        <label>Username:</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username"
                                               required value="<?php echo $data['user_name'];?>" disabled>

                                    </div>
                                    <div class="formrow">
                                        <label>First Name:</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Firstname"
                                               required value="<?php echo $data['first_name'];?>">
                                    </div>
                                    <div class="formrow">
                                        <label>Last Name:</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Lastname"
                                               required value="<?php echo $data['last_name'];?>">
                                    </div>
                                    <div class="formrow">
                                        <label>Email:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                               required value="<?php echo $data['email'];?>" disabled>
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
                                        <input type="text" name="address" class="form-control" placeholder="Address"
                                               required value="<?php echo $data['address'];?>">
                                    </div>

                                    <div class="formrow">
                                        <label>Post code:</label>
                                        <input type="text" name="postcode" class="form-control" placeholder="Postcode"
                                               required value="<?php echo $data['post_code'];?>">
                                    </div>
                                    <div class="formrow">
                                        <label>Date:</label>
                                        <label>Current Age:  <?php 
                                                 $from = new DateTime($data['dob']);
                                                        $to   = new DateTime('today');
                                                        echo $from->diff($to)->y;
                                                 ?></label>
                                        <input type="date" name="date" class="form-control" placeholder="CDate of Birth"
                                               required value="<?php echo $data['dob'];?>">
                                    </div>
                                    <div class="formrow">
                                        <label>Contact:</label>
                                        <input type="number" name="contact" class="form-control" placeholder="Contact"
                                               required value="<?php echo $data['contact_no'];?>">
                                    </div>

                                    <div class="formrow">
                                        <label>Password:</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="password" onkeyup='check();' required>
                                    </div>
                                    <div class="formrow">
                                        <label> Confirm Password:</label>
                                        <input type="password" id="password2" name="password2" class="form-control"
                                               placeholder=" confirm password" onkeyup='check();' required>
                                    </div>
                                    <div id="message"></div>


                                    <input type="submit" id="submitbutton" class="btn" value="Update">
                                    <script type="application/javascript">
                                        var check = function () {
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
                            <?php
                        }
                        ?>
                    </div>
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
