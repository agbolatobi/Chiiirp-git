<?php
session_start();
if(isset($_SESSION["User_id"])){
if(isset($_POST['postid'])){
include"conn.php";
$sql = "UPDATE text SET title='".mysqli_real_escape_string($conn,$_POST['title'])."' , Description='".mysqli_real_escape_string($conn,$_POST['description'])."' WHERE Post_id='".$_POST['postid']."'  ";

if ($conn->query($sql) === TRUE) {
	
header("location:../comment?id=".$_POST['postid']."&type=text");
}else
{header("location:../mypost");
echo "Error1: " . $sql . "<br>" . $conn->error;
}}}else{ header("location:../mypost");
echo "Error2: " . $sql . "<br>" . $conn->error;
}
?>
