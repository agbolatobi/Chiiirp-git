<?php
error_reporting(0);
include"../includes/conn.php";
	 include'../class/Diff_time_getter.php';
	 include'../class/vote.php';
	 include'../class/getuser.php';
	 include'../class/Comment_Number.php';
	 $commentnummber= new commentnumber;
	 $user=new Userinfo;
	 $time= new Difftime;
	 $vote= new vote_get;
	 
		$currentdate=date("Y-m-d H:i:s");
	 $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("2 days"));
	 $sqlpost = "SELECT * FROM posts  where User_id = '".$_REQUEST["userid"]."' LIMIT 20 OFFSET ".$_REQUEST["offset"]."";

$result = $conn->query($sqlpost);
if($result){
	?>
     
     <?php
	 echo"<div id='ajaxcontent".$_REQUEST["offset"]."'>";
	while($row = $result->fetch_assoc())
	{
		$userinfo=$user->getinfo($row['User_id']);
	$postid=$row['Post_id'];
include"../includes/blogpage_out.php";
	}
	echo"</div>";
	}else{
		echo "Error : " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
?>