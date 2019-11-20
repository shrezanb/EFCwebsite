<?php

include('../../Header.php');
$useriD = $_POST['useriD'];
$forumId = $_POST['forumId'];
$comments = $_POST['comments'];

$commentResult = $com_act->insertForumComment($useriD,$forumId,$comments);
if ($commentResult== 1){

    header('location: ../../forumsDetail.php?fid='.$forumId);
    $msg = "succesfully";
}
else {
    echo "ERROR";
}
?>