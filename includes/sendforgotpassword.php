<?php
if(isset($_POST['submit']))
{
include"conn.php";
$email=mysqli_real_escape_string($conn,$_POST['email']);
$from="no-reply@ravcontest.com";
$sql = "SELECT Email , User_id ,Username FROM users where Email = '$email'";
$result = $conn->query($sql);
if($result){
$row = $result->fetch_assoc();
if( strtolower($email) == strtolower($row['Email']))
{
$length=10;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $charactersLength = strlen($characters);
   $randomString = '';
   for ($i = 0; $i < $length; $i++) {
       $randomString .= $characters[rand(0, $charactersLength - 1)];
   }
   $password=md5($randomString);
   $sql = "UPDATE users SET Password ='$password' WHERE User_id=".$row['User_id']." ";
  if ($conn->query($sql) === TRUE) {
    $to=$email;
  	$subject="Password Reset";
  	$message="Welcome ".$row['Username']."
	
    Your New Password is ".$randomString."
  
    Please change your password as soon as possible.
    ";
  	if(mail($to,$subject,$message)){ header('location:../loginpage?forgotpassword=true');
	}else{header('location:../loginpage?forgotpassword=error4');}
}else{
  header('location:../loginpage?forgotpassword=error1');
  }
}else{header('location:../loginpage?forgotpassword=error2');}
}else{header('location:../loginpage?forgotpassword=error3');}
}else{header('location:../index');}
 ?>
