<?php
include('Header.php');
//$result= $car_act ->  Latestposted();
$allcarresult= $car_act ->  selectnineCar();
$result= $car_act ->  forRssFeed();
?>



    <!-- Search start -->
    <div class="searchwrap">
        <div class="container">
            <h3>Find Eco-Friendly Cars </h3>
            <p>Feel Free to post your Queries. </p>

        </div>
    </div>
    <!-- Search End -->

    <!-- Featured Cars start -->
    <div class="section">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <h3>Most Popular eco Friendly Cars</h3>
                <p><marquee attribute_name = "attribute_value" >
                   These are the most popular Eco friendly cars of this month. . </marquee>
                    Get its Rss Feed <a href="RssFeed/Rss.php">Here </a>
                </p>
            </div>
            <!-- title end -->

            <ul class="gridlist itemgrid">
<?php $i=1;
while($data = $db_database ->fetch($result)) {
    ?>
    <li class="item">
        <div class="innerad">
            <h3><a href="detail.html"><?php echo $data['carname'];?></a></h3>
            <div class="price">$<?php echo $data['price'];?></div>
            <div class="location"><i class="fa fa-bolt" aria-hidden="true"></i> MPGe - <?php echo $data['MPGe'];?></div>
        </div>
        <div class="adimg">
<!--            <div class="ribbon_3 popular"><span>Featured</span></div>-->
            <a href="detailpage.php?id=<?php echo $data['id'];?>"><img src="images/<?php echo $data['carimage'];?>" alt="" width="400" height="300"></a></div>
        <div class="innerad"><a href="detailpage.php?id=<?php echo $data['id'];?>" class="readmore">View Details <i class="fa fa-arrow-circle-right"
         aria-hidden="true"></i></a></div>
    </li>
    <?php
}
?>


            </ul>
        </div>
    </div>
    <!-- Featured Cars end -->

    <!-- About start -->
    <div class="about-wrap">
        <div class="col-md-6">
            <div class="about-image"></div>
        </div>
        <div class="col-md-6">
            <div class="aboutinfo">
                <div class="title"> <span>World's Leading ECO Cars</span>
                    <h1><span>Welcome to</span> ECO Friendly Car</h1>
                </div>
                <p>Eco-friendly car run on electricity or a combination of electricity and hydrogen-based fuel. Both represent low-cost methods of transportation while also reducing the amount of the driver’s carbon footprint on the Earth. In addition, environmentally-friendly cars are constantly being enhanced and redesigned with even more emphasis on reducing pollution and waste. As a result, these cars often require less maintenance than gas-powered vehicles. No longer spending 1/3 of your paycheck for gas. For example, the hybrid Prius 46 which contains a gas tank big enough to carry 11 gallons, allows you to drive nearly 600 miles before needing to refuel. The cost per mile is less than $.08 per mile. Drivers of eco-friendly cars consume a minimum of natural resources by spewing less carbon dioxide into the atmosphere and using less fossil fuel. Potential for a tax break if you drive a green car. Purchasing a hybrid car means you may be eligible for as much as $3000 back when you file taxes. While not every eco-friendly vehicle qualified for this kind of tax break, the majority do. This tax credit could help you in many ways at the end of the year. Some of the newest hybrid cars are using sustainable and recyclable materials with which to construct the interior of these vehicles. This will slow down the use of materials garnered from deforestation as well as prevent habitat destruction. The message you send to everyone by buying and driving a hybrid car means you are serious about helping the environment.</p>
              
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- About end -->

    <!-- Cars By Make start -->

    <!-- Cars By Make ends -->








    <!-- App Start -->


    <!-- App End -->

    <!-- Blog start -->
    <div class="section whitebg">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <h3>Latest Published</h3>
                <p>These are Latest Published cars. Make sure to Review.</p>
            </div>
            <!-- title end -->
            <ul class="blogGrid row">
<?php $i=1;
while($data = $db_database ->fetch($allcarresult)) {
    ?>
    <li class="col-md-4 col-sm-4">
        <div class="int">
            <!-- Blog Image -->
            <div class="postimg"><img src="images/<?php echo $data['carimage'];?>" alt="review Title"></div>

            <!-- Blog info -->
            <div class="post-header">
                <h4><a href="detailpage.php?id=<?php echo $data['id'];?>"><?php echo $data['ReviewTitle'];?></a></h4>
                <div class="postmeta">MPGe -<span> <?php echo $data['MPGe'];?>  </span>  <br>
                views: <?php echo $data['views'];?>
                </div>
                <div class="date">Published:  <?php echo $data['postdate'];?></div>
            </div>
            <p> <?php echo substr($data['Description'],0,200);?></p>
            <a href="detailpage.php?id=<?php echo $data['id'];?>" class="readmore">Read More</a></div>
    </li>
    <?php
}
?>

            </ul>
        </div>
    </div>
    <!-- Blog ends -->

    <!-- How it Works start -->

    <!-- How it Works Ends -->


<?php
include('Footer.php');

?>