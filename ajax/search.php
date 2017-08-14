<?php
error_reporting(0);
include"../class/search.php";
 $search= new search;
 foreach ($search->searchpostsajax($_REQUEST["searchquery"]) as $id){
	 include"../includes/conn.php";
	  $sqlpost = "SELECT * FROM posts where Post_id = '$id'   ";
	 
$result = $conn->query($sqlpost);
if($result){
	while($row = $result->fetch_assoc())
	{
	$postid=$row['Post_id'];
	if($row['Post_type']=="text"){
	$sql = "SELECT * FROM text where Post_id=$postid "; 
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		
		echo"<option>".$row_item['Title']." </option>"; ?>
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
		echo"<option>".$row_item['Audio_title']."  </option>";
	
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
		echo"<option>".$row_item['Link_title']." </option>";
		
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
		echo"<option>".$row_item['video_title']."  </option>  ";
		
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
		<?php echo"<option>".$row_item['video_title']."  </option>
	
	";
	}
	}
	
	}
	else
	{
		echo"<option> No Suggestions</option>";
	}
	}}
	$conn->close();
	 }
?>
