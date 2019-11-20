<?php
include('Header.php');
$result= $car_act ->  Latestposted();
$allcarresult= $car_act ->  selectnineCar();
?>
<div class="formpanel ">
    <form method="post" action="functions/forums/forumprocess.php">
    <!-- Ad Information -->

    <div class="col-md-10 ">
        <h5>Create your own Discussion.</h5>
        <div class="col-md-6 ">
            <div class="formrow col-offset-2">
                <label>Subject:</label>
                <input type="text" name="subject" class="form-control" placeholder="subject">
            </div>
        </div>
        <div class="col-md-8 col-offset-1">
            <div class="formrow">

                <textarea class="form-control" name="body" placeholder="Messages"></textarea>
            </div>
        </div>

    </div>
    <input type="submit" class="btn" value="Submit" >
    <br>
    </form>
</div>
<?php
include('Footer.php');

?>