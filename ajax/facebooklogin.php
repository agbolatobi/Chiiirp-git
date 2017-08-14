<?php
error_reporting(0);
if(is_numeric($_REQUEST["facebookid"])){
session_start();
include"../includes/conn.php";
$sql = "SELECT * FROM users where Email='".mysqli_real_escape_string($conn,$_REQUEST["email"])."' and Facebook_id='".mysqli_real_escape_string($conn,$_REQUEST["facebookid"])."' ";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
 $_SESSION["User_id"]=$row["User_id"];
 $_SESSION["Username"]=$row["Username"];
 $_SESSION["Firstname"]=$row["Firstname"];
 $_SESSION["Lastname"]=$row["Lastname"];
 $_SESSION["Email"]=$row["Email"];
 $_SESSION["Date_Of_Birth"]=$row["Date_Of_Birth"];
 $_SESSION["Sex"]=$row["Sex"];
 $_SESSION["Phone_Number"]=$row["Phone_Number"];
 $_SESSION["Status"]=$row["Status"];
 $_SESSION["Description"]=$row["Description"];
 $_SESSION["profic_pic"]=$row["Profile_pic_link"];
 $_SESSION["Facebook_id"]=$row["Facebook_id"];
 echo "loggedin";
	}
else{
$Username=mysqli_real_escape_string($conn,$_REQUEST["username"]);
$name=explode(" ",$_REQUEST["username"]);
$Firstname=mysqli_real_escape_string($conn,$name[0]);
$Lastname=mysqli_real_escape_string($conn,$name[1]);
$Email=mysqli_real_escape_string($conn,$_REQUEST["email"]);
$Sex=mysqli_real_escape_string($conn,$_REQUEST["gender"]);
$facebook_id=mysqli_real_escape_string($conn,$_REQUEST["facebookid"]);
$status="facebook";
 $datestring = $Year."/".$Month."/".$Day;
$sql = "INSERT INTO users (Username, Firstname, Lastname, Email, Sex, Status,Facebook_id)VALUES ('$Username', '$Firstname','$Lastname','$Email','$Sex','$status','$facebook_id')";

if ($conn->query($sql) === TRUE) {
	$sql = "SELECT * FROM users where Email='".mysqli_real_escape_string($conn,$_REQUEST["email"])."' and Facebook_id='".mysqli_real_escape_string($conn,$_REQUEST["facebookid"])."' ";
$resultsel = $conn->query($sql);
if($resultsel){
if ($resultsel->num_rows > 0) {
$row = $resultsel->fetch_assoc();
	 $_SESSION["User_id"]=$row["User_id"];
 $_SESSION["Username"]=$row["Username"];
 $_SESSION["Firstname"]=$row["Firstname"];
 $_SESSION["Lastname"]=$row["Lastname"];
 $_SESSION["Email"]=$row["Email"];
 $_SESSION["Date_Of_Birth"]=$row["Date_Of_Birth"];
 $_SESSION["Sex"]=$row["Sex"];
 $_SESSION["Phone_Number"]=$row["Phone_Number"];
 $_SESSION["Status"]=$row["Status"];
 $_SESSION["Description"]=$row["Description"];
 $_SESSION["profic_pic"]=$row["Profile_pic_link"];
 $_SESSION["Facebook_id"]=$row["Facebook_id"];
 echo "loggedin";
 }else{echo"error user select";}
 }else{echo"error user select";}
	}else{echo"error user insert";}
	}
}else{echo "error";}}else{echo"no value sent";}
?>