<?php
error_reporting(0);
session_start();
include"../conn.php";
if(isset($_SESSION["User_id"]))
{
$status="viewed";
	$sql="UPDATE user_notifications SET status='".$status."' WHERE User_notifications_id='".$_REQUEST["usernotificationid"]."'";
$result = $conn->query($sql);
if($result){
	echo"done";
 }
 else{
	 echo "Error: " . $sql . "<br>" . $conn->error;
	 }
}
?>