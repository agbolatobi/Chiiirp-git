<?php
error_reporting(0);
session_start();
include"../includes/conn.php";
if(isset($_SESSION["User_id"]))
{
$voterid=$_SESSION["User_id"];
$postid=$_REQUEST["postid"];
$vote_type="upvote";
$sql = "SELECT * FROM vote where Post_id = '$postid'";
$resultsel = $conn->query($sql);
if($resultsel){
$row = $resultsel->fetch_assoc();
$upvotes=$row['upvotes']+1;
$popular=$row['popu_score']+1;
$upsql="UPDATE vote SET Post_id='$postid', upvotes='$upvotes', popu_score='$popular' WHERE Post_id='$postid'";
$upresult = $conn->query($upsql);
if($upresult){
	$insql="INSERT INTO vote_log1 (Post_id, Voter_id, Vote_type, Vote_time) VALUES ('$postid', '$voterid', '$vote_type', '".date("Y-m-d H:i:s")."')";
$inresult = $conn->query($insql);
if($inresult){
	echo $upvotes;
	}else{
		echo $row['upvotes'];
	}

	}else
	{
		echo $row['upvotes'];
	}

}else
	{
		echo $row['upvotes'];
	}
}
?>
