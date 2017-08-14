<?php
class notifications {
      /* Member variables */
      var $notifications;

      /* Member functions */
      function setNotifications($notifications){
         $this->notifications = $notifications;
      }
	  function getNotifications()
	  {
		  return notifications;
	  }
	  function checklastNotifications($id)
	  {
		  include"conn.php";
		  $sql = "SELECT notification_time FROM user_notifications where user_id='$id' ORDER BY notification_time DESC";
	$result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0)
	{
	$row = $result->fetch_assoc();
	$date=date_create($row['notification_time']);
	return date_format($date,"Y/m/d H:i:s");
		}
		else
		{
			$date=date_create("1970-01-01 0:0:0.000000");
           return date_format($date,"Y/m/d H:i:s");
		}
		}

	  }
	  function getposts($id)
	  {
		  include"conn.php";
		  //for Comments
		  //$posttime=date_create($lastnotificationtime);
  $sql ="SELECT * FROM posts where User_id='$id'";
$result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0){

	$postids=Array();
while($row = $result->fetch_assoc())
{
    $postid[]=$row['Post_id'];
    }
   return $postid;
	}	

	}
}
 function getpostsreply($id)
	  {
		  include"conn.php";
		  //for Comments
		  //$posttime=date_create($lastnotificationtime);
  $sql ="SELECT DISTINCT Post_id FROM discussion where Author_id='$id'";
$result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0){

	$postids=Array();
while($row = $result->fetch_assoc())
{
    $postid[]=$row['Post_id'];
    }
   return $postid;
   
	}	

	}
}
function checkcommentsreply($postid , $posttime)
	  {    session_start();     
	       include"conn.php";
	       include_once"getuser.php";
		   include_once'getposttitle.php';
		$posttype= new posttitle ;
		   $id=$_SESSION['User_id'];
		   $userreply=new Userinfo;
		   $postidsent=Array();
		  foreach ($postid as $value) { 
		  $sql ="SELECT * FROM posts where Post_id='".$value."' and User_id <> '".$id."'";
		  $result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0){
		  $sqldis = "SELECT * FROM discussion where Post_id='".$value."' and input_time > '".date_format(date_create($posttime),"Y/m/d H:i:s")."'";
		  $resultdis = $conn->query($sqldis);
	if($resultdis){
		if(mysqli_num_rows($resultdis)>0)
			{
			$notification_type="discussion";
			$status="created";
			$rowdis = $resultdis->fetch_assoc();
			$userinfo=$userreply->getinfo($rowdis['Author_id']);
			$type=$posttype->getposttype($value);
			$link="comment?id=".$rowdis['Post_id']."&type=".$type."";
		if(mysqli_num_rows($resultdis)===1)
			{
				if($_SESSION['User_id']!==$rowdis['Author_id']){
			$content="".$userinfo['Username']."Commented on a post";
			$postidsent[]=$rowdis['Post_id'];
			
			$sql = "INSERT INTO user_notifications(User_id, notification_type, Content, link, 	notification_time, status, event_time)
         VALUES ('$id', '$notification_type','$content','$link','".date("Y-m-d H:i:s")."','$status', '".date_format(date_create($rowdis['input_time']),"Y/m/d H:i:s")."')";
          //insert into the post table
          $conn->query($sql) === TRUE;
		  }

			}else{
			$content=" ".mysqli_num_rows($resultdis)." Users Commented on a post";
			$postidsent[]=$rowdis['Post_id'];
			$sql = "INSERT INTO user_notifications(User_id, notification_type, Content, link, 	notification_time, status, event_time)
         VALUES ('$id', '$notification_type','$content','$link','".date("Y-m-d H:i:s")."','$status', '".date_format(date_create($rowdis['input_time']),"Y/m/d H:i:s")."')";
          //insert into the post table
          $conn->query($sql) === TRUE;
			}
				
			}
			
	}
		  } 
		  }
		   
		  }
		    unset($userreply);
		  return $postidsent;
		
	  }
 function checkcomments($postid , $posttime)
	  {    session_start();     
	       include"conn.php";
	       include_once"getuser.php";
		   include_once'getposttitle.php';
		$posttype= new posttitle ;
		   $id=$_SESSION['User_id'];
		   $user=new Userinfo;
		   $postidsent=Array();
		  foreach ($postid as $value) { 
		  $sqldis = "SELECT * FROM discussion where Post_id='".$value."' and input_time > '".date_format(date_create($posttime),"Y/m/d H:i:s")."'";
		  $resultdis = $conn->query($sqldis);
	if($resultdis){
		if(mysqli_num_rows($resultdis)>0)
			{
			$notification_type="discussion";
			$status="created";
			$rowdis = $resultdis->fetch_assoc();
			$userinfo=$user->getinfo($rowdis['Author_id']);
			$type=$posttype->getposttype($value);
			$link="comment?id=".$rowdis['Post_id']."&type=".$type."";
		if(mysqli_num_rows($resultdis)===1)
			{
				if($_SESSION['User_id']!==$rowdis['Author_id']){
			$content="".$userinfo['Username']." Commented on Your Post";
			$postidsent[]=$rowdis['Post_id'];
			
			$sql = "INSERT INTO user_notifications(User_id, notification_type, Content, link, 	notification_time, status, event_time)
         VALUES ('$id', '$notification_type','$content','$link','".date("Y-m-d H:i:s")."','$status', '".date_format(date_create($rowdis['input_time']),"Y/m/d H:i:s")."')";
          //insert into the post table
          $conn->query($sql) === TRUE;
		  }

			}else{
			$content=" ".mysqli_num_rows($resultdis)." Comments were made on Your Post";
			$postidsent[]=$rowdis['Post_id'];
			$sql = "INSERT INTO user_notifications(User_id, notification_type, Content, link, 	notification_time, status, event_time)
         VALUES ('$id', '$notification_type','$content','$link','".date("Y-m-d H:i:s")."','$status', '".date_format(date_create($rowdis['input_time']),"Y/m/d H:i:s")."')";
          //insert into the post table
          $conn->query($sql) === TRUE;
			}
				
			}
			
	}
		  }
		    unset($user);
		  return $postidsent;
	  }


	  function ViewNotifications($id)
	  {  include"conn.php";
	  $posttime=date_create($lastnotificationtime);
	  $status="created";
	  $newstatus="sent";
	   $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("1 days"));
		  $sql = "SELECT * FROM user_notifications WHERE User_id='".$id."' and status='".$newstatus."' or status='".$status."' and notification_time > '".date_format($querydate,"Y-m-d H:i:s")."' ";
$result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0){
while($row = $result->fetch_assoc()){
	echo"<li><a href='javascript:void(0)'onclick='User_Notification_onClick(".$row['User_notifications_id'].")'>".$row['Content']."</a></li>
	<input type='hidden' id='".$row['User_notifications_id']."' value='".$row['link']."''></>
	";
	$sql = "UPDATE user_notifications SET status='".$newstatus."' WHERE User_notifications_id =".$row['User_notifications_id']."";

if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
} else {
   // echo "Error updating record: " . $conn->error;
}}
	}else{
		echo"empty";
	}
}else{// echo"Error: " . $sql . "<br>" . $conn->error;
}
		  }
		  
		  
		  function AjaxViewNotifications($id)
	  {  include"conn.php";
	  $posttime=date_create($lastnotificationtime);
	  $status="created";
	  $newstatus="sent";
	   $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("1 days"));
		  $sql = "SELECT * FROM user_notifications WHERE User_id='".$id."' and status='".$status."' and notification_time > '".date_format($querydate,"Y-m-d H:i:s")."' ORDER BY notification_time DESC ";
$result = $conn->query($sql);
if($result){
	if(mysqli_num_rows($result)>0)
			{
while($row = $result->fetch_assoc()){
	echo"<li><a href='javascript:void(0)'onclick='User_Notification_onClick(".$row['User_notifications_id'].")'>".$row['Content']."</a></li>
	<input type='hidden' id='".$row['User_notifications_id']."' value='".$row['link']."''></>
	";
	$sql = "UPDATE user_notifications SET status='".$newstatus."' WHERE User_notifications_id =".$row['User_notifications_id']."";

if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
} else {
   // echo "Error updating record: " . $conn->error;
}
	}
}else{// echo"Error: " . $sql . "<br>" . $conn->error;
echo"empty";
}
}
		  }
}
?>