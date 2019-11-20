<?php
ob_start();
include('../../Header.php');

$id = $_SESSION['login_id'];
$password= $_POST['password2'];

$result= $user_act-> adminPasswordChange($id,$password);

if ($result== 1){

header('location: ../../DashBoard.php?d=36985');
    $msg = "Password changed succesfully";
}
else
{
    echo "ERROR";
}
?>