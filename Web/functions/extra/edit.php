<?php
$id= $_GET['id'];
$result = $gallery_act ->getId($id);

 $data= $db_database ->fetch($result);
 $id = $data['id'];
 $photo= $data['photo'];
 $path = "uploads/";
 $file = $path.$data['id'].".".$data['photo'];
if (isset($_POST['edit'])){
	
	if($_FILES['photo']['name'])
	{
	$category = $_POST['category'];
	$title= $_POST['title'];
	$active= $_POST['active'];

	
			$photo = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION );
			$photo=strtolower($photo);
			
			if(file_exists($file))
			
			{
				@unlink($file);// delete the file 
				}
			
			
	
	$result = $gallery_act -> edit($id, $category, $title, $photo, $active);
	
	
	echo $new_name = $id. "." . $photo;
	
	echo move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/" . $new_name);
	if($result==1){
			
	
		header('location:index.php?folder=galleery&file=view.php');
	}else
	{
		echo $err= $db_database ->errorDetail() ;
		}
	
	
	
	}else
	{


	$category= $_POST['category'];		
	$title= $_POST['title'];
	$active= $_POST['active'];
	
	
	 echo $new_name = $data['id']. "." . $data['photo'];	
		
		$result = $gallery_act -> edit($id, $category, $title, $photo, $active);
	
	
	
	
	$result= mysqli_query($conn,$sql);
	
	
	}
	header('location:index.php?folder=galleery&file=view.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <script>
function validateForm() {
  if(document.getElementById('title').value==""){
                alert('Name Not Entered.');

                return false;
  }

        }
    </script>

</head>

		
<body>
<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Edit &nbsp;<span style="font-size:18px;"><?php echo $data['title']; ?></span></h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	
                    <!-- Table -->
					<div class="table">
					<form name="myForm" onsubmit="return(validate())" enctype="multipart/form-data" method="POST">

<table border="0" width="100%">
<tr>
<td>Category
<div class="drop_down_menu">
 <form name="drop_down">
<p align="center">
<select name="category">

<?php
	$result= $category_act->view();
	while($data = $db_database ->fetch($result)){
							
							
?>

<option selected="selected" value="<?php echo $data['id'];?>" > <?php echo $data['title'];?></option>
						<?php
						}
?>

</select>
</p>
</form>
</div>
<br /></td></tr>

<tr>
<td> Title<br />
 <input class="field size1" type="text" required name="title"value="<?php echo $data['title']; ?>" /><br /></td></tr>

<tr><td>
       <b>Your Photo:</b>
       <br /> <input type="file" name="photo" size="25" id="photo" /><br /></td></tr>
      
       

	<tr><td>Active<input type="radio" name="active" value="yes" checked />Yes
    <input type="radio" name="active" value="no"  />No</td></tr>



<tr><td>
<input type="submit" name="edit" value="Edit" /></td></tr>
</form>
</table>
		
				</div>
				
				</div>
				
				<!-- End Box -->
                
                <div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="index.php?folder=content&file=add.php" class="add-button"><span>Add new Article</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
					</div>
				</div>
				<!-- End Box -->
</div>
</body>
</html>
