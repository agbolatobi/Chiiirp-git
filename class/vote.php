<?php
class vote_get{
      /* Member variables */
      var $upvote;
      var $downvote;
      
      /* Member functions */
     
	  function getUpvote($Post_id)
	  {
		  include"conn.php";
		  $sql = "SELECT upvotes FROM vote where Post_id = '$Post_id' ";
	 
$result = $conn->query($sql);
if($result){
	$row = $result->fetch_assoc();
	return $row['upvotes'];
}
else
{
	return 0;
	}
	  }
	  function getDownvote($Post_id)
	  {
		  include"conn.php"; 
		  $sql = "SELECT downvotes FROM vote where Post_id = '$Post_id'";
	 
$result = $conn->query($sql);
if($result){
	$row = $result->fetch_assoc();
	return $row['downvotes'];
}
else
{
	return 0;
	}
	  }
   }
?>