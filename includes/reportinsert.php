<?php
session_start();
if(isset($_POST['submit']))
{
    include"conn.php";

	   $id=mysqli_real_escape_string($conn,$_SESSION['User_id']);
	   $post_id=mysqli_real_escape_string($conn,$_POST['post_id']);
	   $post_type=mysqli_real_escape_string($conn,$_POST['post_type']);
	   $report_content=mysqli_real_escape_string($conn,$_POST['report']);
	   $status="waiting";
$sql = "INSERT INTO report (author_id, post_id,post_type,report_content,status,report_time)
VALUES ('$id', '$post_id', '$post_type', '$report_content', '$status','".date("Y-m-d H:i:s")."')";
//insert into the post table
if ($conn->query($sql) === TRUE) {
	header("location:../report_result?Result=success");
	}else
	{
	header("location:../report_result?Result=failed");
	}

	}else{
	header("location:../user_home");
	}
?>
