<?php
class user_action{
	

		
		public function CheckUserExists($username,$password){
			global $db_database;
			
			$query= "SELECT * FROM `user` WHERE `user_name`='$username' and `password`='$password'";
			$result= $db_database -> run($query);
			return $result;
			
		}
    public function CheckUserExistence($username){
        global $db_database;

        $query= "SELECT * FROM `user` WHERE `user_name`='$username'";
        $result= $db_database -> run($query);
        return $result;

    }

		public function create($user_name,$first_name , $last_name, $email,$address, $post_code, $dob, $gender , $contact_no,$password){
            global $db_database;
			$password = $db_database -> injection($password);
			$email = $db_database -> injection($email);
			$user_name = $db_database -> injection($user_name);
			$first_name = $db_database -> injection($first_name);
			$last_name = $db_database -> injection($last_name);
			$address = $db_database -> injection($address);
			$post_code = $db_database -> injection($post_code);
			$dob = $db_database -> injection($dob);
			$gender = $db_database -> injection($gender);
			$contact_no = $db_database -> injection($contact_no);
            $roles = "user";
			$createdDate =  date("Y-m-d h:i:sa");


			$query= "INSERT INTO `user`( `user_name`, `first_name`, `last_name`, `email`, `address`, `post_code`, `dob`, `gender`, `contact_no`, `password`, `createdDate`,`roles`) 
			VALUES ('$user_name','$first_name' , '$last_name', '$email','$address', '$post_code', '$dob', '$gender' , '$contact_no','$password','$createdDate','$roles')";
			$result= $db_database -> run($query);
			echo $result;
			return $result;
			
		}
		
		public function deleteUsers($id){
			global $db_database;
			
			$query= "DELETE FROM `user` WHERE `id`=$id";
			$result= $db_database -> run($query);
			return $result;
			
		}
		public function GetById($id){

            global $db_database;

            $query= "SELECT * FROM `user` WHERE `id`=$id";
            $result= $db_database -> run($query);
            return $result;
        }
        public function SelectAllUsers(){
            global $db_database;

            $query= "SELECT * FROM `user` order by id desc ";
            $result= $db_database -> run($query);
            return $result;
        }
		public function updateUsers($id,$first_name , $last_name, $address, $post_code, $dob, $gender , $contact_no,$password){
            global $db_database;
			$first_name = $db_database -> injection($first_name);
			$last_name = $db_database -> injection($last_name);
			$address = $db_database -> injection($address);
			$post_code = $db_database -> injection($post_code);
			$dob = $db_database -> injection($dob);
			$gender = $db_database -> injection($gender);
			$contact_no = $db_database -> injection($contact_no);
            $password = $db_database->injection($password);

			echo $query= "UPDATE `user` SET `first_name`='$first_name',`last_name`=' $last_name',`address`='$address',`post_code`='$post_code',`dob`='$dob',`gender`='$gender',`contact_no`='$contact_no', `password`='$password' WHERE `id`=$id";
			 $result= $db_database -> run($query);
			return $result;
		
		}

		public function adminPasswordChange($id,$password){
            global $db_database;
            $id = $db_database -> injection($id);
            $password = $db_database -> injection($password);
            $query= "UPDATE `admin` SET `password`='$password' WHERE `id`=$id";
            $result= $db_database -> run($query);
            return $result;
        }
	public function userPasswordChange($id,$password){

        global $db_database;
        $id = $db_database -> injection($id);
        $password = $db_database -> injection($password);
        $query= "UPDATE `user` SET `password`='$password' WHERE `id`=$id";
        $result= $db_database -> run($query);
        return $result;
    }
}

$user_act = new user_action();
		
	?>