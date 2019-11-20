<?php

include('Header.php');

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
            <h5>Car Information</h5>
              <form  enctype="multipart/form-data" method="post" action="functions/cars/CarInsertAction.php" >
            <div class="row">

              <div class="col-md-12">

                <div class="formrow">
                    <label> Car Name:</label>
                  <input type="text" name="carname" class="form-control" placeholder="Car Name"  required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                    <label>Car Type:</label>
                  <select class="form-control" name="cartype">
                      <option>Car Type</option>
                    <option>Biodiesel</option>
                            <option>All-electric</option>
                            <option>Hybrid Electric</option>
                            <option>Hydrogen Fuel Cell</option>

                  </select>
                </div>
              </div>
             



                <div class="col-md-4">
                    <div class="formrow">
                        <label>Battery Life:</label>
                        <input type="text" name="batterylife" class="form-control" placeholder="Battery Life" required>
                    </div>
                </div>
                
              


              
              <div class="col-md-4">
                <div class="formrow">
                    <label>MPGe:</label>
                  <input type="text" placeholder="MPGe" class="form-control" name="Mpge" required  >
                </div>
              </div>
                <div class="col-md-4">
                    <div class="formrow">
                        <label>Release Date</label>
                        <input type="date"  class="form-control " name="Rdate" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formrow">
                        <label>Price:</label>
                        <input type="number"  class="form-control " placeholder="Price" name="price" required>
                    </div>
                </div>


              <div class="col-md-12">
                <div class="formrow">
                  <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                    <h4>Upload your photo</h4>
                    <p>It must be a Beautiful car photo</p>
                    <label class="uploadBox">Click here to Upload

                      <input type="file" name="image"  id="image">

                        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('input[type="file"]').change(function(e){
                                    var fileName = e.target.files[0].name;
                                    $("#fotoname").html(fileName) ;


                                });
                            });
                        </script>
                    </label>
                  </div>
                  <div class="fileattached"> <span id="fotoname"></span> <i class="fa fa-check-circle" aria-hidden="true"></i>

                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>


                <div class="col-md-12">
                    <div class="formrow">
                        <label>Review Title:</label>
                        <input type="text" placeholder="Review Title" class="form-control" name="reviewTitles" required>
                    </div>
                </div>

              <div class="col-md-12">
                <div class="formrow">
                    <label>Descriptions:</label>
                  <textarea class="form-control"  placeholder="Descriptions" name="desctiptions" required></textarea>
                </div>
              </div>

            </div>
            <br>
            <input type="submit" class="btn" value="Publish">
              </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('Footer.php');
?>
