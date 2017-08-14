<?php
session_start();
if(isset($_SESSION['User_id'])){
if(isset($_POST['postid'])){
include"conn.php";
$sql = "UPDATE video SET video_title='".mysqli_real_escape_string($conn,$_POST['title'])."' WHERE Post_id='".$_POST['postid']."'  ";

if ($conn->query($sql) === TRUE) {
	
header("location:../comment?id=".$_POST['postid']."&type=video");
}else
{
	header("location:../mypost");
}}}else{ header("location:../mypost");}
?>
