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
$downvotes=$row['downvotes']-1;
$popular=$row['popu_score']+3;
$upsql="UPDATE vote SET Post_id='$postid', upvotes='$upvotes', downvotes='$downvotes', popu_score='$popular' WHERE Post_id='$postid'";
$upresult = $conn->query($upsql);
if($upresult){
	$uplogsql="UPDATE vote_log1 SET Vote_type='$vote_type', Vote_time='".date("Y-m-d H:i:s")."' WHERE Post_id='$postid' and Voter_id=$voterid";
$uplogresult = $conn->query($uplogsql);
if($uplogresult){
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
	}}
?>
