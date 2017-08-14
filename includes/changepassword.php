<?php
session_start();
include"conn.php";
if(isset($_POST['submit'])){
if(isset($_SESSION["User_id"])){
$newpassword=md5(mysqli_real_escape_string($conn,$_POST['newpassword']));
$oldpassword=md5(mysqli_real_escape_string($conn,$_POST['oldpassword']));
$sql = "SELECT Password FROM users where User_id = '".$_SESSION["User_id"]."'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
if($oldpassword===$row['Password']){
$sql = "UPDATE users SET Password='$newpassword' WHERE User_id=".$_SESSION["User_id"]."";
if ($conn->query($sql) === TRUE) {
header('location:../myprofile.php?cstatus=success');
}else { header('location:../myprofile?cstatus=failed'); }
}else { header('location:../myprofile?cstatus=failed'); }
}else { header('location:../myprofile?cstatus=failed'); }
}else { header('location:../myprofile?cstatus=failed'); }
}else { header('location:../index'); }
}else { header('location:../myprofile?cstatus=failed'); }
 ?>
