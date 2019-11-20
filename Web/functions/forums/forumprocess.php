<?php
include('../../Header.php');

$userid = $_SESSION['login_id'];
$subject = $_POST['subject'];
    $body= $_POST['body'];
$result= $forum_act->insertForum($subject,$body,$userid);
if ($result== 1){

   header('location: ../../forums.php?d=1');
    $msg = "Image Deleted succesfully";
}
else
{
    echo "ERROR";
}

?>
