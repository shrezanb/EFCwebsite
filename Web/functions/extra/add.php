<?php	
if(isset($_POST['submit'])){
		
			$category = $_POST['category'];
			$title =$_POST['title'];
			$active=$_POST['active'];
			
		$photo = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION );
			$photo=strtolower($photo);
			
			
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
  		
			
			$result = $gallery_act->add($category,$title,$photo,$active);
			$new_id = $db_database ->getId();
			echo $new_name = $new_id. "." . $photo;

		if($result==true)
		{
		move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/".$new_name);	
	header("Location:index.php?folder=galleery&file=view.php&msg=File accepted");
		ECHO "SUCCESS";
			
		}
		else
		{
			echo "Error:";
		}
		
		
}




?>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Upload Images</h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	
                    <!-- Table -->
					<div class="table">
					<form name="myForm" onsubmit="return(validate());" enctype="multipart/form-data" method="POST">
<table border="0" width="100%">

<tr>
<td>Category
<div class="drop_down_menu">
 <form name="drop_down">
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
 <input class="field size1" type="text" required name="title" /><br /></td></tr>

<tr><td>
       <b>Your Photo:</b>
       <br /> <input type="file" name="photo" size="25" id="photo" /><br /></td></tr>
      
       

	<tr><td>Active<input type="radio" name="active" value="yes" checked />Yes
    <input type="radio" name="active" value="no"  />No</td></tr>

<tr><td>
       
       
       <tr><td>
       <input type="submit" name="submit" value="submit" /></td></tr>


       </form>
       
       </table>		
	</div>
</div>



</body>
</html>