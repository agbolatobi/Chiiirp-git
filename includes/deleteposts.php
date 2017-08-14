<?php
include"conn.php";
if(!is_numeric($_GET['postid']))
 { header("Location:../myposts");  }
 
 if($_GET['posttype']=="text" || $_GET['posttype']=="link" || $_GET['posttype']=="audio" || $_GET['posttype']=="videoembed" || $_GET['posttype']=="video" || $_GET['posttype']=="image" || $_GET['posttype']=="imageembed")
		{
$sql = "DELETE FROM posts WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
    if($_GET['posttype']=="text"){
		$sql = "DELETE FROM  text WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="link"){
		$sql = "DELETE FROM  link WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="audio"){
		$sql = "DELETE FROM  audios WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	if(!unlink('../'.$_GET['link'])){header("Location:../myposts");}
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="videoembed"){
		$sql = "DELETE FROM  video_embed WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="video"){
		$sql = "DELETE FROM  video WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	if(!unlink('../'.$_GET['link'])){header("Location:../myposts");}
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="image"){
		$sql = "DELETE FROM  image WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	if(!unlink('../'.$_GET['link'])){header("Location:../myposts");}
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	else if($_GET['posttype']=="imageembed"){
		$sql = "DELETE FROM  image_embed WHERE Post_id=".$_GET['postid']."";
if (mysqli_query($conn, $sql)) {
	header("Location:../myposts");
	}else {header("Location:../myposts");}
		}
	
} else {header("Location:../myposts");}

mysqli_close($conn);
			
		}else{header("Location:../myposts");}
 
 ?>
