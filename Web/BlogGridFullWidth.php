
<?php
include('Header.php');
$allcarresult= $car_act ->  selectCar();

?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Blog Full Width</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>All Products</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Blog start --> 
    
    <!-- Blog List start -->
    <div class="blogWraper">
      <ul class="blogGrid row">
            <!-- Blog Box -->
          <?php $i=1;
          while($data = $db_database ->fetch($allcarresult)) {
              ?>
              <li class="col-md-4 col-sm-6">
                  <div class="int">
                      <!-- Blog Image -->
                      <div class="postimg"><img src="images/<?php echo $data['carimage'];?>" alt="review Title"></div>

                      <!-- Blog info -->
                      <div class="post-header">
                          <h4><a href="detailpage.php?id=<?php echo $data['id'];?>"><?php echo $data['ReviewTitle'];?></a></h4>
                          <div class="postmeta">MPGe -<span> <?php echo $data['MPGe'];?> </span> 
                              <br>
                              views: <?php echo $data['views'];?></div>
                          <div class="date">Published:  <?php echo $data['postdate'];?></div>
                      </div>
                      <p> <?php echo substr($data['Description'],0,200);?></p>
                      <a href="detailpage.php?id=<?php echo $data['id'];?>" class="readmore">Read More</a></div>
              </li>
              <?php
          }
          ?>

            
            <!-- Blog Box -->

            
            
          </ul>
    </div>
    

  </div>
</div>
<?php
include('Footer.php');

?>