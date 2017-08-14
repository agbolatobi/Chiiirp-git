<?php
session_start();
if(isset($_POST['Submit']))
{
	if (empty($_FILES['video_file']['name'])) {
    header('location:../posts');
}
$maxsize=11000000;
if(($_FILES['video_file']['size'] > $maxsize))
{

	header('location:../posts?video_error=File Size Above 11mb Limit');
	echo $_FILES['video_file']['size'];
}else{
if($_POST['Anonymous']=="Anonymous")
{
	$Post_Visibility="Anonymous";
	}
	else
	{
		$Post_Visibility="Normal";
		}
    include"conn.php";

	$id=$_SESSION['User_id'];
    $post_type="video";

	$sql = "INSERT INTO posts (User_id, Post_type,Post_time, Post_Visibility)
VALUES ('$id', '$post_type','".date("Y-m-d H:i:s")."', '$Post_Visibility')";
//insert into the post table
if ($conn->query($sql) === TRUE) {
    //get the id of the now value in the post table
	$sql = "SELECT Post_id FROM posts where User_id = '$id' and Post_type='$post_type' and Post_time='".date("Y-m-d H:i:s")."'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$post_id=$row['Post_id'];
	if(empty($_POST['title']))

	{
		$file_name = mysqli_real_escape_string($conn,$_FILES['video_file']['name']);
		}
	   else{
	        $file_name=mysqli_real_escape_string($conn,$_POST['title']);
	   }

if($_FILES['video_file']['type']=='video/mp4' || $_FILES['video_file']['type']=='video/webm' || $_FILES['video_file']['type']=='video/webm' || $_FILES['video_file']['type']=='video/MPEG')
{
 $new_file_name="$post_id" . "_" .$_FILES['video_file']['name'];

 // Where the file is going to be placed
 $target_path = "../video/".$new_file_name;

 //target path where u want to store file.

 //following function will move uploaded file to audios folder.
if(move_uploaded_file($_FILES['video_file']['tmp_name'], $target_path)) {

 //insert query if u want to insert file
}// Where the link that is going to be uploaded
 $target_path = "video/".$new_file_name;
	//insert the content in the text table with the new element
	$sql = "INSERT INTO video (Post_id, video_title, video_type, video_link)
VALUES ('$post_id','".$file_name."','".$_FILES['video_file']['type']."' ,'".$target_path."')";

if ($conn->query($sql) === TRUE) {
//insert the content in the vote table with the new element
	$sql = "INSERT INTO vote(Post_id)
VALUES ('$post_id')";

if ($conn->query($sql) === TRUE) {
    header('location:../myposts');
	$conn->close();
} else {
    
	header('location:../posts?video_error=Error Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
} else {
    
	header('location:../posts?video_error=Error Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
}else{ header('location:../posts?video_error=Invalid File Format'); }
}
else {
    
	header('location:../posts?video_error=Error Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
}else {
    
     header('location:../posts?video_error=Error Posting File');
	 echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
	}else{
		
		header('location:../posts?video_error=Error Posting File');
		echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		}
}}else
{
       header('location:../posts?video_error=Button Not Clicked');
	$conn->close();
	echo"12";
}
?>
