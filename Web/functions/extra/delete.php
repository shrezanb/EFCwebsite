<?php
$id= $_GET['id'];
$result = $gallery_act ->delete($id);

if ($result== 1){
	
	header('location:index.php?folder=galleery&file=view.php');
	$msg = "Image Deleted succesfully";
}
else
{
	echo "ERROR";
}

?>