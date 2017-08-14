<?php
session_start();
include"conn.php";

 $desc=mysqli_real_escape_string($conn,$_POST['desc']);
 $id=$_SESSION["User_id"];
 $sql = "UPDATE users SET Description='$desc' WHERE User_id=$id ";

if ($conn->query($sql) === TRUE) {
 $_SESSION["Description"]=$desc;
	header('Location:../profile_user');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location:../profile_user');
}

$conn->close();
?>
