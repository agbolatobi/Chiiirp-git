<?php
error_reporting(0);
session_start();
include"../includes/conn.php";
	 include'../class/getuser.php';
	 $user=new Userinfo;
$userid=$_SESSION["User_id"];
$postid=$_REQUEST["postid"];
$comment=mysqli_real_escape_string($conn ,$_REQUEST["comment"]);
$userinfo=$user->getinfo($userid);
//insert into discussion table
$sql = "INSERT INTO discussion(	Post_id, Author_id, input_time)
VALUES ('$postid', '$userid','".date("Y-m-d H:i:s")."')";
$result = $conn->query($sql);
if($result){
$sql = "SELECT Discussion_id FROM discussion where Post_id = '$postid' and Author_id ='$userid' and input_time='".date("Y-m-d H:i:s")."'";
$result = $conn->query($sql);
if($result){
	$row = $result->fetch_assoc();
	$discussion_id=$row['Discussion_id'];
	$sql = "INSERT INTO discussion_message(	discussion_id, content)
VALUES ('$discussion_id', '$comment')";
$result = $conn->query($sql);
if($result){
	     echo"
		 <div class=supcomment >
		 <div class=row >
		 		 <div class=col-xs-11 > </div><div class=col-xs-1 ><p class='time'>0 secs ago</p></div></div>
		 <div class=row >
		 		 <div class='col-md-2 col-xs-4' >
				 <div class=profile ><img src='".$userinfo['Profile_pic_link']."' width=80  height=100 /></div>
				 <p>
							<h5 class=mini-profile>
				 ".$userinfo['Username']."</h5>
						</p>
				  </div>
				 <div class='col-md-10 col-xs-8'  >  ".$_REQUEST["comment"]." </div>
		 </div>
		 </div> ";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo"error in inserting";
	}
}else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo"error in inserting";
	}}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo"error in inserting";
		}
?>
