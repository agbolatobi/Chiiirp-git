<?php
session_start();
if(isset($_POST['submit']))
{
	if (empty($_FILES['image_file']['name'])) {
    header('location:myprofile');
}
$maxsize=5000000;
if(($_FILES['image_file']['size'] > $maxsize))
{
echo $_FILES['image_file']['size'];
	header('location:myprofile?profile_error=file size too large');
}
  include"conn.php";

	   $post_type="image";
    //get the id of the now value in the post table
	if($_FILES['image_file']['type']=='image/jpeg' || $_FILES['image_file']['type']=='image/gif' || $_FILES['image_file']['type']=='image/png' || $_FILES['image_file']['type']=='image/WebP' || $_FILES['image_file']['type']=='image/BPG' || $_FILES['image_file']['type']=='image/BMP' )
{
 $new_file_name="".$_SESSION['User_id']."" . "_" .$_FILES['image_file']['name'];

 // Where the file is going to be placed
 $target_path = "../profile/".$new_file_name;

 //target path where u want to store file.

 //following function will move uploaded file to audios folder.
if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) {
	//link to be stored
	$target_path = "profile/".$new_file_name;
	$sql = "UPDATE users set Profile_pic_link='".$target_path."' WHERE User_id=".$_SESSION['User_id']."";

if ($conn->query($sql) === TRUE) {
	if(empty($_SESSION["profic_pic"])){
		$_SESSION["profic_pic"]=$target_path;
	header('location:../myprofile');
		}else{
	if(unlink("../".$_SESSION["profic_pic"])){
$_SESSION["profic_pic"]=$target_path;
	header('location:../myprofile');
}else {
	header('location:../myprofile');
}
			}

	}
}else{header('location:../myprofile');}

}else
{
	header('location:../myprofile?profile_error=Invalid File Format');
}
}else{header('location:../myprofile');}
?>
