<?php
session_start();
if(isset($_SESSION['User_id'])){
if(isset($_POST['postid'])){
include"conn.php";
$sql = "UPDATE audios SET Audio_title='".mysqli_real_escape_string($conn,$_POST['title'])."' WHERE Post_id='".$_POST['postid']."'  ";

if ($conn->query($sql) === TRUE) {
	
header("location:../comment?id=".$_POST['postid']."&type=audio");
}else
{
	header("location:../mypost");
}}}else{ header("location:../mypost");}
?>
