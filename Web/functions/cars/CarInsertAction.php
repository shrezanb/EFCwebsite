<?php

ob_start();
 include('../../Header.php');

$carname=$_POST['carname'];

$cartype=$_POST['cartype'];
$reviewTitle=$_POST['reviewTitles'];
$description=$_POST['desctiptions'];
$releasedate=$_POST['Rdate'];
$batterylife=$_POST['batterylife'];
$price=$_POST['price'];
$MPGe=$_POST['Mpge'];


 $carimage = $_FILES['image']['name'];

// for images uploading
                         if(isset($_FILES['image']['name'])){
                            $target = "../../images/";
                            $files =$_FILES['image']['tmp_name'];
                            move_uploaded_file($files,$target.$_FILES['image']['name']);
                            }


$result= $car_act -> Insert($carname,$cartype,$carimage,$reviewTitle,$description,$releasedate,$batterylife,$price,$MPGe);


if ($result== 1){
	
header('location: ../../DashBoard.php?d=121');
	$msg = "Image Deleted succesfully";
}
else
{
	echo "ERROR";
}

?>