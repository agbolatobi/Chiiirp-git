<?php include"includes/conn.php";
 ?>
 <?php 
 $currentdate=date("Y-m-d H:i:s");
	 $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("7 days"));
	 $sqlpost = "SELECT a.*, b.* FROM posts a LEFT JOIN vote b ON a.Post_id = b.Post_id where 	Post_time > ' ".date_format($querydate,"Y-m-d H:i:s")."' ORDER BY popu_score DESC ,a.Post_id DESC LIMIT 1 ";

$result = $conn->query($sqlpost);
if($result){
$row = $result->fetch_assoc();?>
<div class="sidebarcontent visible-md-block visible-lg-block">
<h4 class="sidebarheader" align="center">Post Of The Week</h4>
<?php $postid=$row['Post_id'];
$userinfo=$user->getinfo($row['User_id']);
 ?>
<?php if($row['Post_type']=="text"){
$sql = "SELECT * FROM text where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc(); ?>
	<a class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['Title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
 <?php
}
}
}
else if($row['Post_type']=="audio"){
$sql = "SELECT * FROM audios where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();
?>
<a class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['Audio_title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
else if($row['Post_type']=="link"){
$sql = "SELECT * FROM link where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();
?>
<a  class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['Link_title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
else if($row['Post_type']=="video"){
$sql = "SELECT * FROM video where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();

?>
<a class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['video_title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
else if($row['Post_type']=="videoembed"){
$sql = "SELECT * FROM video_embed where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();

?>
<a class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['video_title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
else if($row['Post_type']=="image"){
$sql = "SELECT * FROM image where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();

?>
<a class="sidebarlink"  href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5 class="sidebarlink"><?php echo $row_item['Image_title']; ?></h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id']));?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
else if($row['Post_type']=="imageembed"){
$sql = "SELECT * FROM image_embed where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
if ($result_item->num_rows > 0)
{
  $row_item = $result_item->fetch_assoc();

?>
<a class="sidebarlink" href='comment_out?id=<?php echo"".$postid."";?>&type=<?php echo"".$row['Post_type']."";?>'><h5> <?php echo $row_item['image_title']; ?> </h5></a>
<p align="right">Posted by <a class="sidebarlink" href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id'])) ;?>'> <?php echo $userinfo['Username']; ?></a></p>
<?php
}
}
}
?>
</div>
<br />
<?php }
	?>
<div class="sidebarcontent visible-md-block visible-lg-block">
<h4 class="sidebarheader" align="center">Most Active Users</h4>
<?php
$currentdate=date("Y-m-d H:i:s");
	 $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("30 days"));
$sql = "SELECT  User_id , COUNT(*) As UserActivity  FROM posts WHERE Post_time > ' ".date_format($querydate,"Y-m-d H:i:s")."' Group by User_id order by UserActivity desc LIMIT 5 ";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0){
	while($row = $result->fetch_assoc())
	{
		$userinfo=$user->getinfo($row['User_id']);?>
	<div class="row">
<div class="col-xs-3" align="center"><div align="center"><img class="img-responsive img-circle"  src="<?php echo $userinfo['Profile_pic_link']; ?>" alt="<?php echo $userinfo['Username']; ?>" width="40" height="50" /></div></div><div class="col-xs-9"><a href='out_profile?id=<?php echo base64_encode(json_encode($row['User_id'])); ?>'><h4><?php echo $userinfo['Username']; ?></h4></a>
</div>
    </div>
    <br />
        <?php
	}
	}else{
		//echo "Error: " . $sql . "<br>" . $conn->error;
		}}else{
			//echo "Error: " . $sql . "<br>" . $conn->error;
			}
?>
</div>
<br />