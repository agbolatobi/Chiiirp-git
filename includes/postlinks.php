<?php
session_start();
if(isset($_POST['submit']))
{

    include"conn.php";
if($_POST['Anonymous']=="Anonymous")
{
	$Post_Visibility="Anonymous";
	}
	else
	{
		$Post_Visibility="Normal";
		}
		   $title=mysqli_real_escape_string($conn,$_POST['title']);
	$url=mysqli_real_escape_string($conn,$_POST['url']);
	$id=$_SESSION['User_id'];
    $post_type="link";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  //  echo"".$url." is a TOO valid URL";


	$sql = "INSERT INTO posts (User_id, Post_type,Post_time, Post_Visibility)
VALUES ('$id', '$post_type','".date("Y-m-d H:i:s")."','$Post_Visibility')";
//insert into the post table
if ($conn->query($sql) === TRUE) {
    //get the id of the now value in the post table
	$sql = "SELECT Post_id FROM posts where User_id = '$id' and Post_type='$post_type' and Post_time='".date("Y-m-d H:i:s")."'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();	$post_id=$row['Post_id'];

	//insert the content in the text table with the new element
	$sql = "INSERT INTO link(Post_id, 	Link_title, Link_url)
VALUES ('$post_id', '$title', '$url')";

if ($conn->query($sql) === TRUE) {
   //insert the content in the vote table with the new element
	$sql = "INSERT INTO vote(Post_id)
VALUES ('$post_id')";

if ($conn->query($sql) === TRUE) {
    header('location:../myposts');
	$conn->close();
} else {
    
	header('location:../posts?link_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
} else {
	header('location:../posts?link_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}


	}else{
		
		header('location:../posts?link_error=error occured while posting');
		echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		}
}else{
	header('location:../posts?link_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}



} else {
    
	header('location:../posts?link_error=error occured while posting');
	echo "Error 1: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
} else {
    header('location:../posts?link_error=invalid url');
}
}else
{
 header('location:../posts?link_error=error occured while posting');
	$conn->close();
}
?>
