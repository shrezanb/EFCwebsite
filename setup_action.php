<?php
 $db_name="MachamasiSusanSiteDB";
$conn = mysqli_connect('localhost','root','');
mysqli_query($conn,"CREATE DATABASE $db_name");
mysqli_select_db($conn,$db_name);




$query ="CREATE TABLE `carreviews` (
  `id` int(11) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `cartype` varchar(100) NOT NULL,
  `carimage` varchar(200) DEFAULT NULL,
  `ReviewTitle` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `postdate` date DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `releasedate` date DEFAULT NULL,
  `batterylife` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `MPGe` varchar(100) NOT NULL
)";
mysqli_query($conn,$query);
$query ="CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `comment` text NOT NULL,
  `cmdate` datetime NOT NULL
)";
mysqli_query($conn,$query);
$query ="CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL  
)";
mysqli_query($conn,$query);
$query ="CREATE TABLE `forumcomments` (
  `id` int(11) NOT NULL,
  `useriD` int(11) NOT NULL,
  `username` text NOT NULL,
  `forumId` int(11) NOT NULL,
  `comments` text NOT NULL,
  `cmdate` datetime NOT NULL
)";
mysqli_query($conn,$query);
$query ="CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdDate` datetime NOT NULL,
  `roles` varchar(50) NOT NULL
)";
mysqli_query($conn,$query);

$query ="INSERT INTO `user` (`user_name`, `first_name`, `last_name`, `email`, `address`, `post_code`, `dob`, `gender`, `contact_no`, `password`, `createdDate`, `roles`) VALUES
( 'admin', 'susan', '  Machamasi', 'susan@susan.com', 'kathmandu', '097745', '2018-01-12', 'Male', 123456798, 'admin', '2018-01-11 00:00:00', 'admin')";
mysqli_query($conn,$query);


$query ="ALTER TABLE `carreviews` ADD PRIMARY KEY (`id`);    ";
mysqli_query($conn,$query);

$query =" ALTER TABLE `comments` ADD PRIMARY KEY (`id`);    ";
mysqli_query($conn,$query);

$query="ALTER TABLE `forum` ADD PRIMARY KEY (`id`);";
mysqli_query($conn,$query);

$query=" ALTER TABLE `forumcomments` ADD PRIMARY KEY (`id`);";
mysqli_query($conn,$query);

$query="ALTER TABLE `user` ADD PRIMARY KEY (`id`);";
mysqli_query($conn,$query);



$query ="ALTER TABLE `carreviews` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;  ";
mysqli_query($conn,$query);

$query="ALTER TABLE `comments` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;";
mysqli_query($conn,$query);

$query="ALTER TABLE `forum`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;";
mysqli_query($conn,$query);

$query=" ALTER TABLE `forumcomments` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;";
mysqli_query($conn,$query);

$query="ALTER TABLE `user` MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;";
mysqli_query($conn,$query);




$file=fopen('config.php','w');
fwrite($file,$db_name);
fclose($file);


header("location:index.php");
?>