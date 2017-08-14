<?php session_start();
if(empty($_SESSION["User_id"]))
{
	header('location:index');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Update | chiiirp</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/letthemknow.css" rel="stylesheet">
		<?php include"includes/favicon.php"; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<script src="js/facebooksdk.js"></script>
    <?php include"includes/header_user.php" ?>
    <section class="content">
    <br />
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 contentcon">
        <br /><?php
				include"includes/conn.php";
				if(!is_numeric($_GET['postid']))
				 { header("Location:../myposts.php");  }

				 if($_GET['posttype']=="text" || $_GET['posttype']=="link" || $_GET['posttype']=="audio" || $_GET['posttype']=="videoembed" || $_GET['posttype']=="video" || $_GET['posttype']=="image" || $_GET['posttype']=="imageembed")
						{ ?>
						<?php	if($_GET['posttype']=="text"){
							$sql = "SELECT * FROM text where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();

							?>

							<div class="row">
							<div class="col-sm-2" > <div style=" margin-top:50%; margin-left:20%;"><img src="image/editclip/text.fw.png" width="100" height="100" /> </div></div>
							<div class="col-sm-9">
							<h3 align="center" >
							Edit Text
							</h3>
							<br />
							<form action="includes/updatetext" method="post" >
							<input type="text" name="title" class="form-control" value="<?php echo $row_item['Title']; ?>" placeholder="Write a post , ask a question or a title" required>
							<br />
							<textarea class="form-control" name="description" rows="6" cols="70" placeholder="description or extra stuff..." ><?php echo $row_item['Description']; ?></textarea>
							<br />
							<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
							<button type="submit" name="submit" class="btn btn-default login" >Update</button>
							<br />
							</form>
							<?php if(isset($_GET['text_error'])){
									 echo $_GET['text_error'];} ?>
							</div>
							<div class="col-sm-1"></div>
							<br />
							</div>
						<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}?>
							<?php	if($_GET['posttype']=="link"){
								$sql = "SELECT * FROM link where Post_id=".$_GET['postid']."";
								$result_item = $conn->query($sql);
								if($result_item){
								if ($result_item->num_rows > 0)
								{
								  $row_item = $result_item->fetch_assoc();

								?>
								<div class="row">
					        <div class="col-sm-2" > <div style=" margin-top:20%; margin-left:20%;"><img src="image/editclip/circlelink.fw.png" width="100" height="100" /> </div></div>
					        <div class="col-sm-9">
					      <h3 align="center" >
					        Edit links
					      </h3>
					      <form action="includes/updatelinks" method="post">
					      <input type="text"  class="form-control" value="<?php echo $row_item['Link_title']; ?>" name="title" placeholder="Post the link title or Something" required />
					      <br />
					      <input type="text" class="form-control" value="<?php echo $row_item['Link_url']; ?>" name="url" placeholder="Url aka Link" required />
								 <br />
	 							<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
					       <button type="submit" class="btn btn-default login" name="submit" >Edit</button>
								 <br />
					      </form>
					      <?php if(isset($_GET['link_error'])){
						           echo $_GET['link_error'];} ?>
					      </div>
					      <div class="col-lg-1">
					      </div>
					      <br />
					      </div>
								<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}?>
						<?php	if($_GET['posttype']=="audio"){
							$sql = "SELECT * FROM audios where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();
							 ?>
							<div class="row" id="audio">
						 <div class="col-sm-2" > <div style=" margin-top:30%; margin-left:20%;"><img src="image/editclip/audio.fw.png" width="100" height="100" /> </div></div>
						 <div class="col-sm-9">
							<h3  align="center">

						 Edit Audio
					 </h3>
				 <form name="audio_form" id="audio_form" action="includes/updateaudio" method="post" enctype="multipart/form-data">        <fieldset>
         <input type="text"  class="form-control" name="title" placeholder="Post the Audio title or Something" value="<?php echo $row_item['Audio_title']; ?>" />
				 <input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
		 <button type="submit" name="Submit" class="btn btn-default login" id="Submit" name="submit" >Update</button>
		 </fieldset>
		 <br />
		 </form>
		 <?php if(isset($_GET['audio_error'])){
									echo $_GET['audio_error'];} ?>
		 </div>
		 <div class="col-lg-1">
		 </div>
		 <br />
		 </div>
						<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}	?>
						<?php	if($_GET['posttype']=="videoembed"){
						$sql = "SELECT * FROM video_embed where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();
						?>
							<div class="row" id="video">
							        <div class="col-sm-2" > <div style=" margin-top:80%; margin-left:20%;"><img src="image/editclip/video.fw.png" width="100" height="100" /> </div></div>
							        <div class="col-sm-9">
							       <h3 align="center">

							        Edit Video
							      </h3>
							      <h4>Edit Embeded Video</h4>
							      <form action="includes/updatevidembed" method="post">
							      <input type="text"  class="form-control" name="title" placeholder="Post the Video title or Something"  value="<?php echo $row_item['video_title']; ?>" required />
							      <br />
							      <input type="text"  class="form-control" name="embedlink" placeholder="Embed Link" required />
										<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
							      <br/>
							      <button type="submit" class="btn btn-default login" name="submit" >Update</button>
							      </form>
							      <?php if(isset($_GET['embed_video_error'])){
								           echo $_GET['embed_video_error'];} ?>

							<br /><br />
							   </div>
							   <div class="col-lg-1"</div>

							   </div>

						<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}	?>
						<?php	if($_GET['posttype']=="video"){
							$sql = "SELECT * FROM video where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();
							 ?>
							<div class="row" id="video">
							        <div class="col-sm-2" > <div style=" margin-top:80%; margin-left:20%;"><img src="image/editclip/video.fw.png" width="100" height="100" /> </div></div>
							        <div class="col-sm-9">

							   <h4>Edit Video</h4>
							     <form name="video_form" id="video_form" action="includes/updatevideos" method="post" enctype="multipart/form-data">
							<fieldset>
							<input type="text"  class="form-control" name="title" value="<?php echo $row_item['video_title']; ?>" placeholder="Post the Video title or Something" />
							<br />
							<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
							<button type="submit" name="Submit" class="btn btn-default login" id="Submit" name="submit" >Edit</button>
							</fieldset>
							</form>
							<?php if(isset($_GET['video_error'])){
								           echo $_GET['video_error'];} ?>
							<br /><br />
							   </div>
							   <div class="col-lg-1"</div>

							   </div>

						<?php	}else{header("location:myposts");}
						}else{header("location:myposts");}}	?>
						<?php	if($_GET['posttype']=="image"){
							$sql = "SELECT * FROM image where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();
							 ?>
							<div class="row" id="image">
								<div class="col-sm-2" > <div style=" margin-top:50%; margin-left:20%;"><img src="image/editclip/circleimg.fw.png" width="100" height="100" /> </div></div>
								<div class="col-sm-9">
							<h3  align="center">  Edit Images      </h3>
								 <form name="image_form" id="image_form" action="includes/updateimage" method="post" enctype="multipart/form-data">
						<fieldset>
						<input type="text"  class="form-control" name="title" value="<?php echo $row_item['Image_title']; ?>"  placeholder="Post the image title or Something" />
						<br />
						<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
						<button type="submit" name="Submit" class="btn btn-default login" id="Submit" name="submit" >Edit</button>
						<br />
						</fieldset>
						</form>
						<?php if(isset($_GET['image_error'])){
										 echo $_GET['image_error'];} ?>
								 </div>
								 <div class="col-lg-1">
								 </div>
								 <br />
								 </div>

						<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}	?>
						<?php	if($_GET['posttype']=="imageembed"){
								$sql = "SELECT * FROM image_embed where Post_id=".$_GET['postid']."";
							$result_item = $conn->query($sql);
							if($result_item){
							if ($result_item->num_rows > 0)
							{
							  $row_item = $result_item->fetch_assoc();
							   ?>
							<div class="row" id="image">
								<div class="col-sm-2" > <div style=" margin-top:50%; margin-left:20%;"><img src="image/editclip/circleimg.fw.png" width="100" height="100" /> </div></div>
								<div class="col-sm-9">
				<br />
				<h3  align="center"> Edit Embed Images </h3>
				<form action="includes/Updateimageembed" method="post">
							<input type="text"  class="form-control" name="title" value="<?php echo $row_item['image_title']; ?>"  placeholder="Post the image title or Something" required />
							<br />
							<input type="hidden" name="postid" value="<?php echo$_GET['postid']; ?>" />
							<button type="submit" class="btn btn-default login" name="Submit" >Edit</button>
							<br />
							</form>
				<?php if(isset($_GET['embed_image_error'])){
										 echo $_GET['embed_image_error'];} ?>

								 </div>
								 <div class="col-lg-1">
								 </div>
								 <br />
								 </div>

						<?php	}else{header("location:myposts");}	}else{header("location:myposts");}}	?>


					<?php	}else{header("location:myposts");}
							?>
				<br />
        </div>
  		</div>
		<div class="col-lg-2"></div>
	</div>
</div>

<br />
<br />
    </section>

    <?php include"includes/footer_user.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84156146-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
