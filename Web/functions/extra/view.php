<?php
$result= $gallery_act -> select();

?>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Content Management</h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>SN</th>
								<th>Title</th>
								<th>Category</th>
								<th>Date</th>
                                
								<th>Active</th>
                                <th>Ext</th>
                                <th>Images</th>
								<th width="110" class="ac">Content Control</th>
							</tr>	
							
							
							<?php
							$i=1;
							while($data = $db_database ->fetch($result)){
							?>
								<tr>
								<td><?php echo $i++;?></td>
								<td><h3><a href="#"><?php echo $data['title'];?></a></h3></td>
								 <td> 
								<?php 
									$result11 = $category_act->selectId($data['category']);
									$data11 = $db_database ->fetch($result11);
									echo $data11['title'];
								?>								
								</td>
								<td>12.05.09</td>
                           
								<td><?php echo $data['active'];?></td>
                                <td><?php echo $data['photo'];?></td>
                                <td><img src="uploads/<?php echo $data['id'].".".$data['photo'];?>" width="60" height="60"/></td>
                                
								<td>
								<a href="index.php?folder=galleery&file=delete.php&id=<?php echo $data['id'];?>" class="ico del">Delete</a>
								<a href="index.php?folder=galleery&file=edit.php&id=<?php echo $data['id'];?>" class="ico edit">Edit</a></td>
                                
							</tr>
							<?php
							}
							?>
					</table>	
					
					</div>
					<!-- Table -->
					
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
						<a href="index.php?folder=galleery&file=add.php" class="add-button"><span>Upload New Photo</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
						
					</div>
				</div>
				<!-- End Box -->