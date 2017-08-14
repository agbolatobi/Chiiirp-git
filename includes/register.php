<?php
if(isset($_POST['Firstname']))
{

include"conn.php";
$Username=mysqli_real_escape_string($conn,$_POST['Username']);
$Firstname=mysqli_real_escape_string($conn,$_POST['Firstname']);
$Lastname=mysqli_real_escape_string($conn,$_POST['Lastname']);
$Email=mysqli_real_escape_string($conn,$_POST['Email']);
$Sex=mysqli_real_escape_string($conn,$_POST['sex']);
$Day=mysqli_real_escape_string($conn,$_POST['day']);
$Month=mysqli_real_escape_string($conn,$_POST['month']);
$Year=mysqli_real_escape_string($conn,$_POST['year']);
$Phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
$Password=md5(mysqli_real_escape_string($conn,$_POST['password']));
$status="unverified";
 $datestring = $Year."/".$Month."/".$Day;
$sql = "INSERT INTO users (Username, Firstname, Lastname, Email, Date_Of_Birth, Sex, Phone_Number, Password,Status)VALUES ('$Username', '$Firstname','$Lastname','$Email',STR_TO_DATE('".$datestring."', '%Y/%m/%d'),'$Sex','$Phonenumber','$Password','$status')";

if ($conn->query($sql) === TRUE) {
//	$to=$Email;
//	$subject="Registration Verification Email";
//	$message="Welcome".$Username."
//	<br />
//	Click this on this link to verify your email address <a href=verify?".$Email." >Verify</a>";
//	mail($to,$subject,$message);
	header('Location: ../loginpage');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location: ../signup');
}

$conn->close();
}else
{
	header('Location: ../signup');
}
?>
