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
	$embedlink=mysqli_real_escape_string($conn,$_POST['embedlink']);
	$id=$_SESSION['User_id'];
    $post_type="videoembed";
	$embedcheck=substr($embedlink, -9);
	if($embedcheck !== "</iframe>")
	{

		header('location:../posts?embed_video_error=embed format not supported ');
	}
	echo"$embedcheck";
	$sql = "INSERT INTO posts (User_id, Post_type,Post_time, Post_Visibility)
VALUES ('$id', '$post_type','".date("Y-m-d H:i:s")."', Post_Visibility)";
//insert into the post table
if ($conn->query($sql) === TRUE) {
    //get the id of the now value in the post table
	$sql = "SELECT Post_id FROM posts where User_id = '$id' and Post_type='$post_type' and Post_time='".date("Y-m-d H:i:s")."'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
	$post_id=$row['Post_id'];
	//insert the content in the text table with the new element
	$sql = "INSERT INTO video_embed (Post_id, video_title, frame_link)
VALUES ('$post_id', '$title', '$embedlink')";

if ($conn->query($sql) === TRUE) {
  //insert the content in the vote table with the new element
	$sql = "INSERT INTO vote(Post_id)
VALUES ('$post_id')";

if ($conn->query($sql) === TRUE) {
    header('location:../myposts');
	$conn->close();
} else {
    
	header('location:../posts?embed_video_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}} else {
	header('location:../posts?embed_video_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
	}else{
		
		header('location:../posts?embed_video_error=error occured while posting');
		echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		}
}else{
	
	header('location:../posts?embed_video_error=error occured while posting');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}



} else {
    echo "Error 1: " . $sql . "<br>" . $conn->error;
	header('location:../posts?embed_video_error=error occured while posting');
	$conn->close();
}

$conn->close();
}else
{
 header('location:../posts?embed_video_error=Button not clicked');
	$conn->close();
}
?>
