<?php
session_start();
if(isset($_POST['Submit']))
{
	if (empty($_FILES['image_file']['name'])) {
    header('location:../posts');
}
$maxsize=5000000;
if(($_FILES['image_file']['size'] > $maxsize))
{

	header('location:../posts?image_error=5mb limit file size too large');
	echo $_FILES['image_file']['size'];
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
	   $post_type="image";

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
		$file_name = mysqli_real_escape_string($conn,$_FILES['image_file']['name']);
		}
	   else{
	        $file_name=mysqli_real_escape_string($conn,$_POST['title']);
	   }

if($_FILES['image_file']['type']=='image/jpeg' || $_FILES['image_file']['type']=='image/gif' || $_FILES['image_file']['type']=='image/png' || $_FILES['image_file']['type']=='image/WebP' || $_FILES['image_file']['type']=='image/BPG' || $_FILES['image_file']['type']=='image/BMP' )
{
 $new_file_name="$post_id" . "_" .$_FILES['image_file']['name'];

 // Where the file is going to be placed
 $target_path = "../imagestore/".$new_file_name;
 //target path where u want to store file.

 //following function will move uploaded file to audios folder.
if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) {


 //insert query if u want to insert file
 list($width, $height)=getimagesize($target_path);
 //the link that will be uploaded
 $target_path = "imagestore/".$new_file_name;
}
	//insert the content in the text table with the new element
	$sql = "INSERT INTO image (Post_id, Image_title,Image_link, Image_width, Image_length)
VALUES ('$post_id','".$file_name."','".$target_path."','".$width."','".$height."')";

if ($conn->query($sql) === TRUE) {
//insert the content in the vote table with the new element
	$sql = "INSERT INTO vote(Post_id)
VALUES ('$post_id')";

if ($conn->query($sql) === TRUE) {
    header('location:../myposts');
	$conn->close();
} else {
    
	header('location:../posts?image_error=error posting file');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
} else {
    
	header('location:../posts?image_error=error posting file');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
}else{ header('location:../posts?image_error=wrong file type');}
}
else {
    
	header('location:../posts?image_error=error posting file');
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
}else {
    
     header('location:../posts?image_error=error posting file');
	 echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}
	}else{
		
		header('location:../posts?image_error=error posting file');
		echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		}}
}else
{
	header('location:../posts?image_error=button not Clicked');
}


?>
