<?php
class forum_action{


    public function insertForum($subject,$body,$userid)
    {

        global $db_database;
        $subject = $db_database->injection($subject);
        $body = $db_database->injection($body);

        $userid = $db_database->injection($userid);
        $createdDate = date("Y-m-d h:i:sa");

       echo  $query = "INSERT INTO `forum`(`subject`, `body`, `createdDate`, `userid`,`views`) VALUES ('$subject','$body','$createdDate','$userid',0)";
        $result = $db_database->run($query);
        return $result;
    }
    public function getforumbyid($id){

    global $db_database;

    $id = $db_database -> injection($id);

    $query= "SELECT * FROM `forum` WHERE `id`='$id'";
    $result= $db_database -> run($query);
    return $result;
        }
    public function getallForums(){

        global $db_database;
        $query= "SELECT * FROM `forum` WHERE `id`order by id DESC";
        $result= $db_database -> run($query);
        return $result;
    }
    public function getUserDetailbyId($id){
        global $db_database;
        $id = $db_database->injection($id);
        $query= "SELECT * FROM `user` WHERE `id` = '$id'";
        $result= $db_database -> run($query);
        return $result;

    }
    public  function insertviews($id){
    global $db_database;
    $id = $db_database->injection($id);
    $query= "UPDATE `forum` SET `views`=`views`+ 1 WHERE `id`='$id'";
    $result= $db_database -> run($query);
    return $result;
}







}

$forum_act = new forum_action();
?>