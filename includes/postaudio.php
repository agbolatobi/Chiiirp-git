<?php
session_start();
if(isset($_POST['Submit']))
{
	if (empty($_FILES['audio_file']['name'])) {
    header('location:../posts');
}
$maxsize=7000000;
if(($_FILES['audio_file']['size'] > $maxsize))
{
	header('location:../posts?audio_error=File Size Above 7mb Maximum');
	echo $_FILES['audio_file']['size'];
	echo'2';
}else{
if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav')
{
}else
{
header('location:../posts?audio_error=Invalid File Format');
}
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
    $post_type="audio";

	$sql = "INSERT INTO posts (User_id, Post_type,Post_time, Post_Visibility)
VALUES ('$id', '$post_type','".date("Y-m-d H:i:s")."','$Post_Visibility')";
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
		$file_name = mysqli_real_escape_string($conn,$_FILES['audio_file']['name']);
		}
	   else{
	        $file_name=mysqli_real_escape_string($conn,$_POST['title']);
	   }


 $new_file_name="$post_id" . "_" .$_FILES['audio_file']['name'];

 // Where the file is going to be placed
 $target_path = "../audios/".$new_file_name;

 //target path where u want to store file.

 //following function will move uploaded file to audios folder.
if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {

 //insert query if u want to insert file
}else{header('location:../posts?audio_error=Error While Posting File');}
//the file link that will be uploaded
 $target_path = "audios/".$new_file_name;
	//insert the content in the text table with the new element
	$sql = "INSERT INTO audios (Post_id, Audio_title, Audio_link, Audio_type)
VALUES ('$post_id','".$file_name."' ,'".$target_path."','".$_FILES['audio_file']['type']."')";

if ($conn->query($sql) === TRUE) {
    //insert the content in the vote table with the new element
	$sql = "INSERT INTO vote(Post_id)
VALUES ('$post_id')";

if ($conn->query($sql) === TRUE) {
    header('location:../myposts');
	$conn->close();
} else {
    
	header('location:../posts?audio_error=Error While Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
} else {
    
	header('location:../posts?audio_error=Error While Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}

}
else {
    
	header('location:../posts?audio_error=Error While Posting File');
	echo "Error: " . 	$conn->close();
$sql . "<br>" . $conn->error;
}
}else {
    
	header('location:../posts?audio_error=Error While Posting File');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
	}else{
		
		header('location:../posts?audio_error=Error While Posting File');
		echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		}}
}else
{
 header('location:../posts?audio_error=Error While Posting File');
	$conn->close();
	echo"12";
}
?>