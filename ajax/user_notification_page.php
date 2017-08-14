<?php
error_reporting(0);
session_start();
include"../includes/conn.php";
	 include'../class/Diff_time_getter.php';
	 $time= new Difftime;
		$currentdate=date("Y-m-d H:i:s");
	 $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("2 days"));
	  $sqluser = "SELECT * FROM user_notifications where User_id=".$_SESSION['User_id']." order by notification_time desc LIMIT 30 OFFSET ".$_REQUEST["offset"]." ";
$result =$conn->query($sqluser);
if($result){
  if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc())
		{
       echo"<div class='notify'> <a class='notify' href='".$row['link']."'> ".$row['Content']." </a> <span align='right' class='notify'>".$time->Cal_Diff($currentdate,$row['event_time'])."</span> </div> <br />";
	   }
  }else{ 
  }
	}else{//echo "Error: " . $sql . "<br>" . $conn->error;
  }
	$conn->close();
?>
