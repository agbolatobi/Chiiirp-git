<?php
session_start();
if(isset($_SESSION['User_id'])){
if(isset($_POST['postid'])){
include"conn.php";
$sql = "UPDATE link SET Link_title='".mysqli_real_escape_string($conn,$_POST['title'])."' , Link_url='".mysqli_real_escape_string($conn,$_POST['url'])."'  WHERE Post_id='".$_POST['postid']."'  ";

if ($conn->query($sql) === TRUE) {
	
header("location:../comment?id=".$_POST['postid']."&type=link");
}else
{
	header("location:../mypost");
}}}else{ header("location:../mypost");}
?>
