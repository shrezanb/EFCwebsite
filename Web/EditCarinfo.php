<?php

include('Header.php');
$id =$_GET['id'];
$result= $car_act -> getbyID($id);
?>


<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Post A Car</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Create a Publish</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Ad Information -->
              <?php $i=1;
              while($data = $db_database ->fetch($result)){
              ?>
              <h5>Car Information</h5>
              <form method="post" action="functions/cars/EditCarAction.php" enctype="multipart/form-data">
                  <div class="row">
                       <input type="text" name="id" value="<?php echo $id?>" hidden>
                      <div class="col-md-12">

                          <div class="formrow">
                              <label> Car Name:</label>
                              <input type="text" name="carname" class="form-control" placeholder="Car Name" required value="<?php echo $data['carname'];?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="formrow">
                              <label> Car Type:</label>
                              <select class="form-control" name="cartype" " >
                                  <option>Car Type</option>
                                  <option>Hybrid Cars</option>
                                  <option>Bio Fuel</option>
                                  <option>Solar</option>
                              </select>
                          </div>
                      </div>


                      <div class="col-md-4">
                          <div class="formrow">
                              <label> Battery Life:</label>
                              <input type="text" name="batterylife" class="form-control" placeholder="Battery Life"
                                     required  value="<?php echo $data['batterylife'];?>">
                          </div>
                      </div>


                      <div class="col-md-4">
                          <div class="formrow">
                              <label> MpGe:</label>
                              <input type="text" placeholder="MPGe" class="form-control" name="Mpge" required value="<?php echo $data['MPGe'];?>">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="formrow">
                              <label>Release Date</label>
                              <input type="date" class="form-control " name="Rdate" required value="<?php echo $data['releasedate'];?>">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="formrow">
                              <label>Price:</label>
                              <input type="number"  class="form-control " placeholder="Price" name="price" value="<?php echo $data['price'];?>" required>
                          </div>
                      </div>


                      <div class="col-md-12">
                          <div class="formrow">
                              <div class="uploadphotobx"><i class="fa fa-upload" aria-hidden="true"></i>
                                  <h4>Upload your photo</h4>
                                  <p>It must be a Beautiful car photo</p>
                                  <label class="uploadBox">Click here to Upload
                                      <?php
                                      if (isset($_POST['image'])) {
                                          $target = "images/" . basename($_FILES['image']['name']);

                                          print_r($_FILES);
                                          if (move_uploaded_file($_FILES['image']['name'], $target)) {

                                              echo $msg = "Photo Uploaded";
                                          } else {

                                              echo $msg = "file not Uploded";
                                          }
                                      }
                                      ?>
                                      <input type="file" name="image" id="image">
                                      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                                      <script type="text/javascript">
                                          $(document).ready(function () {
                                              $('input[type="file"]').change(function (e) {
                                                  var fileName = e.target.files[0].name;
                                                  $("#fotoname").html(fileName);

                                              });
                                          });
                                      </script>
                                  </label>
                              </div>
                              <div class="fileattached"><span id="fotoname"> <?php echo $data['carimage'];?></span> <i class="fa fa-check-circle"
                                aria-hidden="true"></i>

                                  <div class="clearfix"></div>
                              </div>

                          </div>
                      </div>


                      <div class="col-md-12">
                          <div class="formrow">
                              <label>Review Title:</label>
                              <input type="text" placeholder="Review Title" class="form-control" name="reviewTitles"
                                     required value="<?php echo $data['ReviewTitle'];?>">
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="formrow">
                              <label>Descriptions:</label>
                              <textarea class="form-control" placeholder="Descriptions" name="desctiptions"
                                        required ><?php echo $data['ReviewTitle'];?></textarea>
                          </div>
                      </div>

                  </div>
                  <br>
                  <input type="submit" class="btn" value="Update and Publish">
              </form>
          </div>
            <?php
            }
            ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('Footer.php');
?>
