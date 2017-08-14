<?php
error_reporting(0);
include"../includes/conn.php";
$sql = "SELECT * FROM users where Username='".mysqli_real_escape_string($conn,$_REQUEST["uservalue"])."'";
$resultsel = $conn->query($sql);
if($resultsel){
if ($resultsel->num_rows > 0) {
echo"true";
	}
else{
	echo "false";
	}
}else{echo "false";}
?>