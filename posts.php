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
    <title>Upload Posts | chiiirp</title>

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
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 contentcon">
        <div class="row">
			<div class="col-md-1" ></div>
						<div class="col-sm-2 col-xs-4 pushdown" align="center" ><button type="submit" name="submit" class="btn btn-default login" id="buttontext" ><i class="fa fa-file-text-o" aria-hidden="true"></i> Text</button><br /></div>
				<div class="col-sm-2 col-xs-4 pushdown" align="center"><button type="submit" name="submit" class="btn btn-default login" id="buttonlink"  ><i class="fa fa-link" aria-hidden="true"></i> Links </button> <br /> </div>
				<div class="col-sm-2 col-xs-4 pushdown" align="center" ><button class="btn btn-default login" type="submit" name="submit" id="buttonimage"  ><i class="fa fa-picture-o" aria-hidden="true"></i> Image</button> <br /></div>
						<div class="col-sm-2 col-xs-6 pushdown" align="center"><button type="submit" name="submit" class="btn btn-default login" id="buttonaudio"  ><i class="fa fa-file-audio-o" aria-hidden="true"></i> Audio</button> <br /> </div>
						<div class="col-sm-2 col-xs-6 pushdown" align="center" ><button type="submit" name="submit" class="btn btn-default login" id="buttonvideo"  ><i class="fa fa-file-video-o" aria-hidden="true"></i> Video</button> <br /> </div>
                    <div class="col-md-1" ></div>
			</div>

        <br />
        <br />
        <div class="row" id="text"> 
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
			<h3 align="center" >

        Post Text
      </h3>
      <br />
      <form action="includes/posttext" method="post" >
      <input type="text" name="title" class="form-control" placeholder="Write a post , ask a question or a title" required>
      <br />
      <textarea class="form-control" name="description" rows="6" cols="70" placeholder="description or extra stuff..." ></textarea>
      <br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
      <br />
      <button type="submit" name="submit" class="btn btn-default login" >Post it</button>
			<br />
      </form>
      <?php if(isset($_GET['text_error'])){
	           echo $_GET['text_error'];} ?>
      </div>
      <div class="col-sm-1"></div>
      <br />
      </div>
      <div class="row" id="link">
        <div class="col-sm-1" > </div>
        <div class="col-sm-10">
      <h3 align="center" >

        Post links

      </h3>
      <form action="includes/postlinks" method="post">
      <input type="text"  class="form-control" name="title" placeholder="Post the link title or Something" required />
      <br />
      <input type="text" class="form-control" name="url" placeholder="Url aka Link" required />
      <br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
       <br />
       <button type="submit" class="btn btn-default login" name="submit" >Post it</button>
			 <br />
      </form>
      <?php if(isset($_GET['link_error'])){
	           echo $_GET['link_error'];} ?>
      </div>
      <div class="col-sm-1">
      </div>
      <br />
      </div>
      <div class="row" id="image">
        <div class="col-sm-1" > </div>
        <div class="col-sm-7">
      <h3  align="center">  Post Images      </h3>
         <form name="image_form" id="image_form" action="includes/postimage" method="post" enctype="multipart/form-data">
<fieldset>
<input type="text"  class="form-control" name="title" placeholder="Post the image title or Something" />
<br />
<label>Image File:</label>
<input name="image_file" class="form-control" required id="image_file" type="file"/>
<br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
<br />
<button type="submit" name="Submit" class="btn btn-default login" id="imagesubmit" name="submit" >Upload</button><span id="imageloader"><img src='image/loading/ajax-loader.gif' width='40' height='40' /></span>
<br />
<p>Max Filesize 5mb Preferred Formats (Jpg , Png and Gif)</p>
</fieldset>
</form>
<?php if(isset($_GET['image_error'])){
	           echo $_GET['image_error'];} ?>
<br />
<h3  align="center">  Embed Images </h3>
<form action="includes/postimageembed" method="post">
      <input type="text"  class="form-control" name="title" placeholder="Post the image title or Something" required />
      <br />
      <input type="text"  class="form-control" name="embedlink" placeholder="Embed Link" required />
      <br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
      <br/>
      <button type="submit" class="btn btn-default login" name="Submit" >Post it</button>
			<br />
      <br />
      </form>
<?php if(isset($_GET['embed_image_error'])){
	           echo $_GET['embed_image_error'];} ?>

         </div>
         <div class="col-sm-3" align="center">
         <br />
         <a class="bottomcontent" href="https://imgflip.com/memegenerator" target="_blank" />
         <h3>Create Meme <i class="fa fa-picture-o size" aria-hidden="true"></i></h3>
         </a>

         </div>
         <br />
         
         </div>
         
         <div class="row" id="audio">
        <div class="col-sm-1" > </div>
        <div class="col-sm-9">
         <h3  align="center">

        Post Audio
      </h3>
    <form name="audio_form" id="audio_form" action="includes/postaudio" method="post" enctype="multipart/form-data">
<fieldset>
<input type="text"  class="form-control" name="title" required placeholder="Post the Audio title or Something" />
<br />
<label>Audio File:</label>
<input name="audio_file" class="form-control" id="audio_file" type="file"/>
<br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
<br />
<button type="submit" name="Submit" class="btn btn-default login" id="audiosubmit" name="submit" >Upload</button><span id="audioloader"><img src='image/loading/ajax-loader.gif' width='40' height='40' /></span>
</fieldset>
<br />
<p>Max Filesize 7mb Preferred Formats (Mpeg, Mpeg3, x-Mpeg, Mp3, x-wav and wav)</p>
</form>
<?php if(isset($_GET['audio_error'])){
	           echo $_GET['audio_error'];} ?>
</div>
<div class="col-sm-1">
</div>
<br />
</div>
<div class="row" id="video">
<div class="col-sm-1"></div>
        <div class="col-sm-10">
       <h3 align="center">

        Post Video
      </h3>
      <h4>Embed Video</h4>
      <form action="includes/postvidembed" method="post">
      <input type="text"  class="form-control" name="title" placeholder="Post the Video title or Something" required />
      <br />
      <input type="text"  class="form-control" name="embedlink" placeholder="Embed Link" required />
      <br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
      <br/>
      <button type="submit" class="btn btn-default login" name="submit" >Post it</button>
      </form>
      
      <?php if(isset($_GET['embed_video_error'])){
	           echo $_GET['embed_video_error'];} ?>
      <br />
   <h4>Upload Video</h4>
     <form name="video_form" id="video_form" action="includes/postvideos" method="post" enctype="multipart/form-data">
<fieldset>
<input type="text"  class="form-control" name="title" placeholder="Post the Video title or Something" />
<br />
<label>Video File:</label>
<input name="video_file" class="form-control" required id="video_file" type="file"/>
<br />
      <div class="checkbox">
  <label><input type="checkbox" name="Anonymous" value="Anonymous">Post As Anonymous</label>
      </div>
<br />
<button type="submit" name="Submit" class="btn btn-default login" id="videosubmit" name="submit" >Upload</button><span id="videoloader"><img src='image/loading/ajax-loader.gif' width='40' height='40' /></span>
</fieldset>
</form>
<p>Max Filesize 11mb Preferred Formats (Mp4, webm, and MPEG)</p>
<?php if(isset($_GET['video_error'])){
	           echo $_GET['video_error'];} ?>
<br /><br />
   </div>
   <div class="col-lg-1"</div>

   </div>
          <br />
        <br />
  		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
    </section>

    <?php include"includes/footer_user.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/loader.js"></script>
		  <script src="js/button_post_select.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84156146-1', 'auto');
  ga('send', 'pageview');

</script>
 <script src="js/notification.js"></script>
  </body>
</html>
