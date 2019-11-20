<?php
class comment_action{


    public function insertComment($postId,$userId,$message){

        global $db_database;
        $postId = $db_database -> injection($postId);
        $userId = $db_database -> injection($userId);
        $message = $db_database -> injection($message);
        $cmdate =date("Y-m-d");

        $query= "INSERT INTO `comments`( `postId`, `userid`, `comment`, `cmdate`) VALUES ('$postId','$userId','$message','$cmdate')";
        $result= $db_database -> run($query);
        return $result;
    }
	public function getcommentByid($id)
		{
			global $db_database;
            $id = $db_database->injection($id);
			$query= "SELECT * FROM `comments`  WHERE `postId`= '$id'  ";
			$result= $db_database -> run($query);
			return $result;
		}
        public function getuserdetailbyid($userid){
            global $db_database;

            $query= "SELECT * FROM `user` WHERE `id`= $userid";
            $result= $db_database -> run($query);
            return $result;

        }
		public function deleteCommentbyUser( $id){
			
			global $db_database;
			
			$id = $db_database -> injection($id);
			$query= "DELETE FROM  `comments` WHERE postId``='$id'";
			$result = $db_database -> run($query);
			return $result;

		}


    public function getForumcommentByid($id)
    {
        global $db_database;
        $id = $db_database->injection($id);
        $query= "SELECT * FROM `forumcomments`  WHERE `forumId`= '$id'  ";
        $result= $db_database -> run($query);
        return $result;
    }
    public function insertForumComment($useriD,$forumId,$comments){

        global $db_database;
        $useriD = $db_database -> injection($useriD);
        $forumId = $db_database -> injection($forumId);
        $comments = $db_database -> injection($comments);
        $cmdate =date("Y-m-d");

        $query= "INSERT INTO `forumcomments`( `useriD`, `forumId`, `comments`, `cmdate`) VALUES ('$useriD','$forumId','$comments','$cmdate')";
        $result= $db_database -> run($query);
        return $result;
    }

		
		
	
	
}
$com_act = new comment_action();
?>