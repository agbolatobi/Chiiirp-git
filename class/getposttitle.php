<?php
class posttitle {
      /* Member variables */
      var $post_title;

      /* Member functions */
      function setposttitle($post_title){
      
         $this->post_title = $post_title;
       
      }
	  function getposttitle($post_id)
	  {
      include"conn.php";
      $sqlpost = "SELECT Post_type FROM posts  where Post_id = '$post_id'";

   $result = $conn->query($sqlpost);
   if($result){
   	while($row = $result->fetch_assoc())
   	{
   	$postid=$post_id;
   	if($row['Post_type']=="text"){
   	$sql = "SELECT Title FROM text where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['Title'];
		$conn->close();
   	}
   	}

   	}
   	else if($row['Post_type']=="audio"){
   	$sql = "SELECT Audio_title FROM audios where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   	return $row_item['Audio_title'];
	$conn->close();


   	}
   	}

   	}
   	else if($row['Post_type']=="link"){
   	$sql = "SELECT Link_title FROM link where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['Link_title'];
		$conn->close();
   	}
   	}

   	}
   	else if($row['Post_type']=="video"){
   	$sql = "SELECT video_title FROM video where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['video_title'];
		$conn->close();
   	}
   	}

   	}
   	else if($row['Post_type']=="videoembed"){
   	$sql = "SELECT video_title FROM video_embed where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['video_title'];
		$conn->close();
   	}
   	}

   	}
   	else if($row['Post_type']=="image"){
   	$sql = "SELECT Image_title FROM image where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['Image_title'];
		$conn->close();
   	}
   	}

   	}
   	else if($row['Post_type']=="imageembed"){
   	$sql = "SELECT image_title FROM image_embed where Post_id=$postid ";
   $result_item = $conn->query($sql);
   if($result_item){
   	if ($result_item->num_rows > 0)
   	{
   		$row_item = $result_item->fetch_assoc();
   		return $row_item['image_title'];
		$conn->close();
   	}
   	}

   	}
   	}}
   	$conn->close();
	    }
		 function getposttype($post_id)
	  {
      include"conn.php";
	   $sqlpost = "SELECT Post_type FROM posts  where Post_id = '$post_id'";

   $result = $conn->query($sqlpost);
   if($result){
   $row = $result->fetch_assoc();
	  return $row['Post_type'];
	  $conn->close();
	  }else{
		  return "Error: " . $sql . "<br>" . $conn->error;
		  }
	  $conn->close();
	  }
	  
}
?>
