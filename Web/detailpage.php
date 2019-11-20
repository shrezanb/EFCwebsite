
<?php

include('Header.php');
$id = $_GET['id'];
$result= $car_act -> getbyID($id);
$commentResult = $com_act->getcommentByid($id);
$views=$car_act->insertviews($id);
$userid=0;
if(isset( $_SESSION['login_id'])){
    $userid = $_SESSION['login_id'];
}


    ?>


    <!-- Page Title start -->
    <div class="pageTitle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1 class="page-heading">Blog Detail</h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="breadCrumb"><a href="#.">Home</a> / <span>Details</span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="listpgWraper">
        <div class="container">

            <!-- Blog start -->
            <div class="row">
                <div class="col-md-12">

                        <!-- Blog List start -->
                        <div class="blogWraper">
                            <div class="blogList blogdetailbox">
                    <?php
                    while($data = $db_database ->fetch($result)) {
                    ?>
                                <div class="postimg"><img src="images/<?php echo $data['carimage'];?>" alt=" Title" width="500" height="250">
                                    <div class="date">  Published : <?php echo $data['postdate'];?></div>
                                </div>
                                <div class="post-header margin-top30">
                                    <h4><a href="#."><?php echo $data['ReviewTitle'];?></a></h4>
                                    <div class="postmeta">MPGe -<span> <?php echo $data['MPGe'];?>  <span></div>
                                </div>
                              <?php echo $data['Description'];?>
                                
                                    
                                    

                                <?php
                                }
                                ?>
                            </div>
                            <div class="comments margin-top30">
                                <h4>Comments</h4>
                                <ul class="media-list">
                                    <!-- COMMENTS -->
                                    <?php
                                    while($data = $db_database ->fetch($commentResult)) {
                                        ?>
                                        <li class="media">
                                            <div class="media-left"><a href="#."> <img
                                                            class="media-object img-responsive"
                                                            src="images/uses.png"
                                                            alt="">
                                                    <br>
                                                </a></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">
                                                    <?php
                                                    $getid = $data['userid'];
                                                   $getUsername =  $com_act->getuserdetailbyid($getid);
                                                    while($getUserdata = $db_database ->fetch($getUsername)){
                                                        echo $getUserdata['user_name'];

                                                    }


                                                    ?>
                                                    <span> <?php $date= $data['cmdate']; echo date("M jS, Y", strtotime($date));?></span>
                                                </h6>
                                                <p> <?php echo $data['comment'];?> </p>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    <!-- COMMENTS -->

                                </ul>

                                <!-- LEAVE COMMENTS -->
                                <div class="commnetsfrm">
                                    <h4>Leave Your Comments</h4>
                                    <p>Make sure to Sign in to post your Queries.</p>
                                    <form method="post" action="functions/comment/postcommentction.php">
                                       <input type="text" name="postid"  value="<?php echo $id;?>" hidden>
                                        <input type="text" name="userid"  value="<?php echo $_SESSION['login_id']?>" hidden>
                                        <ul class="row">

                                            <li class="col-sm-12">
                                                <label>
                                                    <textarea class="form-control" placeholder="MESSAGE" name="messages"></textarea>
                                                </label>
                                            </li>
                                            <li class="col-sm-12"><?php
                                                if(isset($_SESSION['login_id'])){
                                                ?>
                                                <button type="submit" class="btn margin-top-20">SEND</button>
                                               <?php
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>


<?php
include('Footer.php');
?>