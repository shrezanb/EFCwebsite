<?php

	class gallery_action
	{
		public function select()
		{
			global $db_database;
			$query= "select * from gallery";
			$result = $db_database -> run($query);
			return $result;
		}
		public function viewImg()
		{
			global $db_database;
			$query= "select * from gallery limit 1";
			$result = $db_database -> run($query);
			return $result;
		}
		public function display()
		{
			global $db_database;
			$query= "select * from gallery where active='yes'";
			$result = $db_database -> run($query);
			return $result;
		}
		public function view()
		{
			global $db_database;
			$query= "select * from gallery where active='no' limit 1";
			$result = $db_database -> run($query);
			return $result;
		}
		
		
		public function add($category,$title,$photo,$active)
		{
			global $db_database;
			$category = $db_database -> injection($category);
			$title = $db_database -> injection($title);
			$photo = $db_database -> injection($photo);
			$active = $db_database -> injection($active);
			
			$query = "INSERT INTO gallery (category,title,photo,active)VALUES('$category','$title','$photo','$active')";
			$result = $db_database -> run($query);
			return $result;
			
			echo $new_name = mysqli_insert_id($conn) . "." . $photo;	
		}
	
		
		public function delete($id)
		{
			global $db_database;
			$id = $db_database -> injection($id);
			$query= "Delete from gallery where id = $id";
			$result = $db_database -> run($query);
			return $result;
		}
		
		public function getId($id)
		{
			global $db_database;
			$id = $db_database -> injection($id);
			$query= "select * from gallery where id= $id";
			$result = $db_database ->run($query);
			return $result;
		}
		
		public function getById($id)
		{
			global $db_database;
			$id = $db_database -> injection($id);
			$query= "select  from gallery where id= $id";
			$result = $db_database ->run($query);
			return $result;
		}
		
		public function getByCatId($id)
		{
			global $db_database;
			$query = "select * from content_management where category= $id";
			$result= $db_database-> run($query);
			return $result;
		}
		
		public function edit($id,$category,$title, $photo, $active)
		{
			global $db_database;
			$id = $db_database ->injection($id);
			$category = $db_database ->injection($category);
			$title = $db_database -> injection($title);
			$photo = $db_database -> injection($photo);
			$active = $db_database -> injection($active);
			
			$sql= "UPDATE gallery SET
			category= '$category',
			title='$title',
			photo= '$photo',
			active='$active'
			WHERE
			id=$id";
			$result = $db_database-> run($sql);
			return $result;
			
		}
	
	
	
	
	}
	
	

	
	$gallery_act = new gallery_action();
?>