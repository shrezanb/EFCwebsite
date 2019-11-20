<?php
class car_action{


	public function selectCar()
		{
			global $db_database;
			
			$query= "SELECT * FROM `carreviews` order BY id desc ";
			$result= $db_database -> run($query);
			return $result;
		}
    public function forRssFeed()
    {
        global $db_database;

        $query= "SELECT * FROM `carreviews` WHERE MONTH(postdate) like MONTH(CURRENT_DATE()) and views > 10 ";
        $result= $db_database -> run($query);
        return $result;
    }
    public function selectnineCar()
    {
        global $db_database;

        $query= "SELECT * FROM `carreviews` order BY id asc limit 9 ";
        $result= $db_database -> run($query);
        return $result;
    }
		
		public function CheckExistsCar($username,$password){
			global $db_database;
			
			$query= "SELECT * FROM `admin` WHERE `name`='$username' and `password`='$password'";
			$result= $db_database -> run($query);
			return $result;
			
		}
		public function DeleteCar( $id){
			
			global $db_database;
			
			$id = $db_database -> injection($id);
			$query= "DELETE FROM `carreviews` WHERE `id`='$id'";
			$result = $db_database -> run($query);
			return $result;
			
			
			
		}
		
		public function Insert($carname,$cartype,$carimage,$ReviewTitle,$Description,$releasedate,$batterylife,$price,$MPGe){
			
			global $db_database;
			$carname = $db_database -> injection($carname);
			$cartype = $db_database -> injection($cartype);
			
			$ReviewTitle = $db_database -> injection($ReviewTitle);
			$Description = $db_database -> injection($Description);
			$postdate = date("Y-m-d");
			$releasedate = $db_database -> injection($releasedate);
			$batterylife = $db_database -> injection($batterylife);
			$price = $db_database -> injection($price);
			$MPGe = $db_database -> injection($MPGe);
			
			$query= "INSERT INTO `carreviews`( `carname`, `cartype`, `carimage`, `ReviewTitle`, `Description`, `postdate`, `releasedate`, `batterylife`,  `price`, `MPGe`,`views`) 
VALUES ('$carname','$cartype','$carimage','$ReviewTitle','$Description','$postdate','$releasedate','$batterylife','$price','$MPGe',0)";
			echo $query;
			$result = $db_database -> run($query);
			return $result;
			
		}

		public  function Update($id,$carname,$cartype,$carimage,$ReviewTitle,$Description,$releasedate,$batterylife,$price,$MPGe){
            global $db_database;
            $carid = $db_database -> injection($id);
            $carname = $db_database -> injection($carname);
            $cartype = $db_database -> injection($cartype);
            $postdate = date("Y-m-d");
            $ReviewTitle = $db_database -> injection($ReviewTitle);
            $Description = $db_database -> injection($Description);

            $releasedate = $db_database -> injection($releasedate);
            $batterylife = $db_database -> injection($batterylife);
            $price = $db_database -> injection($price);
            $MPGe = $db_database -> injection($MPGe);
            $query= "UPDATE `carreviews` SET `carname`='$carname',`postdate`='$postdate',`cartype`='$cartype',`carimage`='$carimage',`ReviewTitle`='$ReviewTitle',`Description`='$Description',`releasedate`='$releasedate',`batterylife`='$batterylife',`price`='$price',`MPGe`='$MPGe'  WHERE id=$carid";
            echo $query;
            $result = $db_database -> run($query);
            return $result;

        }
		public function getbyID($id){
			global $db_database;
			$id = $db_database -> injection($id);
			$query= "SELECT * FROM `carreviews` WHERE `id`=$id";
			$result = $db_database -> run($query);
			return $result;
		}


		 public function Latestposted(){
			 global $db_database;
		
			$query= "SELECT * FROM `carreviews` ORDER BY `id`  desc LIMIT 10";
			$result = $db_database -> run($query);
			return $result;
			 
		 }
    public  function insertviews($id){
        global $db_database;
        $id = $db_database->injection($id);
        $query= "UPDATE `carreviews` SET `views`=`views`+ 1 WHERE `id`= $id";
        $result= $db_database -> run($query);
        return $result;
    }
		
		
	
	
}
$car_act = new car_action();
?>