<?php

ob_start();
include('../../Header.php');
$id =$_POST['ids'];
//$username=$_POST['username'];

$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];

//$email=$_POST['email'];

$address=$_POST['address'];
$post_code=$_POST['postcode'];
$dob=$_POST['date'];
$gender =$_POST['gender'];
$contact_no=$_POST['contact'];
$password=$_POST['password2'];


$result = $user_act ->updateUsers($id,$first_name , $last_name, $address, $post_code, $dob, $gender , $contact_no,$password);
if ($result== 1){

    header('location: ../../Index.php?d=1');
    $msg = "updated succesfully";
}
else
{
    echo "ERROR";
}
?>