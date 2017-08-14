<?php
session_start();
if(isset($_POST['submit']))
{
    include"conn.php";

	  if(isset($_SESSION['User_id'])){
	   $id=$_SESSION['User_id'];
	   $author_type="user";
	   }else{
		$id=0;
		$author_type="unregistered";
	   }
	   $content=mysqli_real_escape_string($conn,$_POST['content']);
	   $status="waiting";
$sql = "INSERT INTO feedback (author_id, author_type,content,send_time,status)
VALUES ('$id', '$author_type', '$content','".date("Y-m-d H:i:s")."' , '$status')";
//insert into the feedback table
if ($conn->query($sql) === TRUE) {
	if(isset($_SESSION['User_id'])){

	header("location:../user_feedback_result?Result=success");
	}else
	{

		header("location:../feedback_result?Result=success");
		}
	}else
	{
		if(isset($_SESSION['User_id'])){

	header("location:../user_feedback_result?Result=failed");
	}else
	{
		header("location:../feedback_result?Result=failed");
		}
	}

	}else{

		if(isset($_SESSION['User_id'])){

	header("location:../user_home");
	}else
	{

		header("location:../index");
		}
	}
?>
