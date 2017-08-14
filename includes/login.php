<?php
session_start();
include"conn.php";
if(isset($_POST['loginname'])){
$loginname=mysqli_real_escape_string($conn,$_POST['loginname']);
$password=md5(mysqli_real_escape_string($conn,$_POST['password']));
$sql = "SELECT * FROM users where Username='$loginname' or Email='$loginname'   and Password='$password'";
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
 header('location:../user_home');
} else {
header('location:../loginpage');
}
}
else{
	echo"Query in error ".mysqli_error($conn)."";
	}
$conn->close();
}else
{
header('location:../loginpage');
}
?>
