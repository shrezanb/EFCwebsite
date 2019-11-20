<?php

include('Header.php');
$result= $car_act -> selectCar();
$userResult= $user_act->SelectAllUsers();

 $roles = $_SESSION['roles'];
 if($roles != "admin"){
     header('location:Index.php?noAccess=true');

 }
?>

<!-- Page Title start -->
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Dashboard</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><span>Welcome!  <?php   echo $_SESSION['login_name']?> </span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="inner-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <ul class="usernavdash">
          <li class="active"><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          
          <li><a href="logoutAction.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
       
      </div>
      <div class="col-md-9 col-sm-8"> 
        
        <!-- Mailbox -->

          <div class="mainboxouter">
              <div class="titlebox">
                  <h4><i class="fa fa-users" aria-hidden="true"></i> Users <span><?php echo $data = $db_database ->countNum($userResult)?></span></h4>
                  <div class="count"> <span><?php echo $data = $db_database ->countNum($userResult)?> of <?php echo $data = $db_database ->countNum($userResult)?></span> <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> </div>
                  <div class="clearfix"></div>
              </div>
              <div class="msgbox">
                  <ul class="mailList">
                      <?php
                      while($data = $db_database ->fetch($userResult)){
                      ?>
                      <li class="unread">
                          <div class="mailico"> <a href="EdituserinfoAction.php?id=<?php echo $data['id'];?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                          <div class="mailico"> <a href="functions/users/DeleteUserInfo.php?id=<?php echo $data['id'];?>" class="edit"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                          <span><a href="EdituserinfoAction.php?id=<?php echo $data['id'];?>" class="user"><?php echo $data['user_name'];?></a>
                         </span> <hr><div class="midbox">
                              <?php echo $data['first_name'];?> <?php echo $data['last_name'];?> from <?php echo $data['address'];?>.<br>
                           <b> Email:</b> <?php echo $data['email'];?><br>
                              <b> Gender: </b> </<?php echo $data['gender'];?> <br>
                          <b>  Date of Birth: </b><?php  $phpdate = strtotime( $data['dob']);
                              echo $mysqldate = date( 'Y-m-d', $phpdate ); ?><br>
                          <b>  Contact: </b> <?php echo $data['contact_no'];?><br>

                          </div>
                          <div class="date"><?php $phpdate = strtotime( $data['createdDate'] );
                              echo $mysqldate = date( 'Y-m-d', $phpdate ); ?>  </div>

                          <div class="clearfix"></div>
                      </li>
                      <?php
                      }
                      ?>
                  </ul>
              </div>
          </div>

          <?php
            if(isset($_GET['d'])) {
                $callbackId = $_GET['d'];
                if ($callbackId == 1) {
                    ?>
                    <div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                          aria-label="close">×</a>
                        <strong>Success!</strong>
                        Selected Row Deleted.
                    </div>
                    <?php
                }else if ($callbackId == 121){

                        ?>
                        <div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                              aria-label="close">×</a>
                            <strong>Success!</strong>
                           New Row Inserted.
                        </div>
                        <?php

                }
                else if ($callbackId == 222) {

                    ?>
                    <div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                          aria-label="close">×</a>
                        <strong>Success!</strong>
                        Selected Row Updated.
                    </div>
                    <?php
                }
            }
          ?>
       
        </div>
        <div class="mt-button-text mt-style-button43"> <a href="NewCarInfo.php" class="mt-style-button normal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add  New Car</a>
        </div> <div class="clearfix"></div>
        <div class="myads">
		
          <h3>My  Posts</h3>
					
			
          <ul class="searchList">
		  <?php $i=1;
			while($data = $db_database ->fetch($result)){
								?>
								
            <!-- ad start -->
            <li>
              <div class="row">
                <div class="col-md-3 col-sm-4">
<!--                  <div class="ribbon_3 popular"><span>Featured</span></div>-->
				  <?php 
				
					
				  ?>
                  <div class="adimg"><img src="images/<?php echo $data['carimage'];?>" alt="Ad Name"></div>
                </div>
                <div class="col-md-9 col-sm-8">
                  <div class="jobinfo">
                    <div class="row">
                      <div class="col-md-8 col-sm-7">
                        <h3><a href="#."><?php echo $data['carname'];?></a></h3>
                        <div class="location"><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php $date= $data['postdate']; echo $yearOnly = date('Y', strtotime($date))?></span></div>
                        <div class="location"><i class="fa fa-tachometer" aria-hidden="true"></i> <span><?php echo "MPGe - ". $data['MPGe'];?></span></div>

                        <div class="clearfix"></div>
                        <div class="vinfo"><span>Views-<?php echo $data['views'];?></span></div>
                        <div class="clearfix"></div>
                        <div class="date">Last Updated: <?php echo $data['postdate'];?></div>
                      </div>
                      <div class="col-md-4 col-sm-5 text-right">
                        <div class="adprice">$<?php echo $data['price'];?></div>
                        <div class="listbtn">
						<a href="EditCarinfo.php?id=<?php echo $data['id'];?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a href="functions/cars/DeleteCar.php?id=<?php echo $data['id'];?>" class="edit" name="<?php echo $data['id'];?>"><i class="fa fa-times" aria-hidden="true"></i></a>

						</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- ad end --> 
            
            <?php					
				}
		  
		  ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('Footer.php');
?>
