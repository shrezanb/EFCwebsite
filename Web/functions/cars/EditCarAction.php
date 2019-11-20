<?php

ob_start();
include('../../Header.php');

$id =$_POST['id'];
$carname=$_POST['carname'];

$cartype=$_POST['cartype'];
$reviewTitle=$_POST['reviewTitles'];
$description=$_POST['desctiptions'];
$releasedate=$_POST['Rdate'];
$fueltype=$_POST['fueltype'];
$batterylife=$_POST['batterylife'];
$ElectricRange=$_POST['electricrange'];
$price=$_POST['price'];
$MPGe=$_POST['Mpge'];

// for images
$carimage = $_FILES['image']['name'];

// for images uploading
if(isset($_FILES['image']['name'])){
    $target = "../../images/";
    $files =$_FILES['image']['tmp_name'];
    move_uploaded_file($files,$target.$_FILES['image']['name']);
}

$result= $car_act -> Update($id,$carname,$cartype,$carimage,$reviewTitle,$description,$releasedate,$fueltype,$batterylife,$ElectricRange,$price,$MPGe);

if ($result== 1){

    header('location: ../../DashBoard.php?d=222');
    $msg = "";
}
else
{
    echo "ERROR";
}
?>