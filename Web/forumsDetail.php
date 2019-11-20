<?php
include('Header.php');
$id = $_GET['fid'];
$forumResult =$forum_act->getforumbyid($id);
$commentResult = $com_act->getForumcommentByid($id);
$views=$forum_act->insertviews($id);
?>

<div class="">
    <div class="container">
        <div class="col-md-10 col-lg-offset-1">
            <div class="mt-wrapper mt-style-button1">

                <div class="mt-button-text"><a href="addForum.php" class="mt-style-button normal">+ New Topic</a> </div>

            </div>
            <div>


                <table class="table table-striped table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><h5> Topics </h5></th>
<!--                        <th scope="col"> <h5>Views </h5></th>-->
                        <th scope="col"> <h5>Posted on:</h5></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i=1;
                    while($data = $db_database ->fetch($forumResult)) {
                        ?>
                        <tr>
                            <th scope="row"><i class="fa fa-flag" aria-hidden="true"></i></th>
                            <td><h6><a ><?php echo $data['subject'];?></a></h6> <br>
                                <p><?php echo $data['body'];?></p>
                            </td>

                            <td><p class="text-sm-left">by  <?php  $userresult =$forum_act->getUserDetailbyId($data['userid']);
                                    while($datas = $db_database ->fetch($userresult)) {
                                        echo $datas['user_name'];
                                    }
                                    ?><br>
                                    <?php $date= $data['createdDate']; echo date("M jS, Y", strtotime($date));?></p></td>
                        </tr>
                        <?php
                    }
                    ?>



                    </tbody>
                </table>





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
                                    $getid = $data['useriD'];
                                    $getUsername =  $com_act->getuserdetailbyid($getid);
                                    while($getUserdata = $db_database ->fetch($getUsername)){
                                        echo $getUserdata['user_name'];

                                    }


                                    ?>
                                    <span> <?php $date= $data['cmdate']; echo date("M jS, Y", strtotime($date));?></span>
                                </h6>
                                <p> <?php echo $data['comments'];?> </p>
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
                    <form method="post" action="functions/forums/forumComments.php">
                        <input type="text" name="forumId"  value="<?php echo $id;?>" hidden>
                        <input type="text" name="useriD"  value="<?php echo $_SESSION['login_id']?>" hidden>
                        <ul class="row">

                            <li class="col-sm-12">
                                <label>
                                    <textarea class="form-control" placeholder="MESSAGE" name="comments"></textarea>
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
<?php
include('Footer.php');
?>

