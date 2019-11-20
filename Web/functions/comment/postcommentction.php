<?php

include('../../Header.php');
$postId = $_POST['postid'];
$userId = $_POST['userid'];
$message = $_POST['messages'];

$commentResult = $com_act->insertComment($postId,$userId,$message);
if ($commentResult== 1){

    header('location: ../../detailpage.php?id='.$postId);
    $msg = "Image Deleted succesfully";
}
else {
    echo "ERROR";
}
?>