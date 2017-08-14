<?php
session_start();
include"conn.php";
$Username=mysqli_real_escape_string($conn,$_POST['Username']);
$Firstname=mysqli_real_escape_string($conn,$_POST['Firstname']);
$Lastname=mysqli_real_escape_string($conn,$_POST['Lastname']);
$Email=mysqli_real_escape_string($conn,$_POST['Email']);
$Sex=mysqli_real_escape_string($conn,$_POST['sex']);
$datestring=mysqli_real_escape_string($conn,$_POST['date']);
$Phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
 $id=$_SESSION["User_id"];
$sql = "UPDATE users SET Username='$Username', Firstname='$Firstname', Lastname='$Lastname', Email='$Email', Date_Of_Birth=STR_TO_DATE('".$datestring."', '%Y/%m/%d'), Sex='$Sex',  Phone_Number='$Phonenumber' WHERE  User_id=$id ";

if ($conn->query($sql) === TRUE) {
 $_SESSION["Username"]=$Username;
 $_SESSION["Firstname"]=$Firstname;
 $_SESSION["Lastname"]=$Lastname;
 $_SESSION["Email"]=$Email;
 $_SESSION["Date_Of_Birth"]=$datestring;
 $_SESSION["Sex"]=$Sex;

 $_SESSION["Phone_Number"]=$Phonenumber;
	header('Location:../myprofile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location:../myprofile');
}

$conn->close();
?>
