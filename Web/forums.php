<?php
include('Header.php');
$forumResult =$forum_act->getallForums();
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
            <th scope="col"> <h5>Views </h5></th>
            <th scope="col"> <h5>Last Post</h5></th>
        </tr>
        </thead>
        <tbody>

<?php $i=1;
while($data = $db_database ->fetch($forumResult)) {
    ?>
    <tr>
        <th scope="row"><i class="fa fa-flag" aria-hidden="true"></i></th>
        <td><h6><a href="forumsDetail.php?fid=<?php echo $data['id'];?>"><?php echo $data['subject'];?></a></h6> <br>
            <p class="text-sm-left">
               by:  <?php  $userresult =$forum_act->getUserDetailbyId($data['userid']);
         while($datas = $db_database ->fetch($userresult)) {
                echo $datas['user_name'];
    }
            ?> <br><?php $date= $data['createdDate']; echo date("M jS, Y", strtotime($date));?>
                </p>
        </td>
        <td><?php echo $data['views'];?></td>
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
        </div>
    </div>
</div>
</div>
<?php
include('Footer.php');
?>

