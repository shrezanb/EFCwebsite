<?php

ob_start();
 include('../../Header.php');
$id= $_GET['id'];
$result = $car_act ->DeleteCar($id);

if ($result== 1){
	
	header('location: ../../DashBoard.php?d=1');
	$msg = "Image Deleted succesfully";
}
else
{
	echo "ERROR";
}

?>