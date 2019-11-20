<?php

ob_start();
 include('../../Header.php');

$username=$_POST['username'];
$first_name=$_POST['firstname'];
 $last_name=$_POST['lastname'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $post_code=$_POST['postcode'];
 $dob=$_POST['date'];
 $gender =$_POST['gender'];
 $contact_no=$_POST['contact'];
 $password=$_POST['password2'];

//$user_name="user";
//$first_name="firstname";
// $last_name="lastname";
// $email="email";
// $address="address";
// $post_code="postcode";
// $dob="2018-01-12";
// $gender ="male";
// $contact_no="123456798";
// $password="user";

$checkuserExists = $user_act->CheckUserExistence($username);
    $num= $db_database->countNum($checkuserExists);

    if($num>0){

        header('location: ../../signup.php?uxs=1');
    }
    else {

        $result = $user_act->create($username, $first_name, $last_name, $email, $address, $post_code, $dob, $gender, $contact_no, $password);


        if ($result == 1) {

            header('location: ../../login.php?d=121');
            $msg = "Image Deleted succesfully";
        } else {
            echo "ERROR";
        }
    }
?>