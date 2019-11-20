<?php
include('rssheader.php');
$result= $car_act ->  forRssFeed();
echo '<?xml version="1.0" enconding="ISO-8859-1"?>'."\n";
?>

<rss version="2.0">
<channel>
<title>EcoFriendly.com</title>
    <language>en-Us</language>
    <copyright>CopyRight (c) 2018 EcoFriendly.com</copyright>


    <?php
    while($data = $db_database ->fetch($result)) {
    ?>
        <item>
   <Title><?php echo $data['ReviewTitle'];?></Title>
    <Description><?php echo $data['Description'];?></Description>
    <cartype><?php echo $data['cartype'];?></cartype>
    <carimage><?php echo $data['carimage'];?></carimage>
    <batterylife><?php echo $data['batterylife'];?></batterylife>
    <MPGe><?php echo $data['MPGe'];?></MPGe>
    <price><?php echo $data['price'];?></price>
            <postdate><?php echo $data['postdate'];?></postdate>
        </item>
    <?php
}
?>

</channel>

</rss>


