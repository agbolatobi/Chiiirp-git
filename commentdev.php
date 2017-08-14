<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>chiiirp</title>

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
		<div class="col-lg-1"></div>
		<div class="col-lg-10 contentcon">
        <?php
		if(ctype_digit($_GET['id']))
		{
			$id=$_GET['id'];
		}else
		{
			header('Location:myposts.php');
		}
		if($_GET['type']=="text" || $_GET['type']=="link" || $_GET['type']=="audio" || $_GET['type']=="videoembed" || $_GET['type']=="video")
		{
			$type=$_GET['type'];
		}
		else{
			header('Location:myposts.php');
		}
		 ?>
         <br />
         <?php include"includes/conn.php";
	 include'class/Diff_time_getter.php';
	 include'class/getuser.php';
	 $time= new Difftime;
	 $user=new Userinfo;
		$currentdate=date("Y-m-d H:i:s");
		$sql = "SELECT User_id, Post_time FROM posts where Post_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userinfo=$user->getinfo($row['User_id']);
			if($type=="text"){
	$sql = "SELECT * FROM text where Post_id=$id ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();

		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2>". $time->Cal_Diff($currentdate,$row['Post_time'])."</div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h3 class="title" align="center">'.$row_item['Title'].'</h3>
                        <p>'.$row_item['Description'].'</p>
					</div>
                    </div>
                    <div class="bottomcontent"><div class="row">

                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">upvote</a>
                    </div>
                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">downvote</a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-1">
                      <a class="bottomcontent" href="Report.php?id='.$id.'&type='.$type.'">Report</a>
                    </div>
</div>
                    </div>
				</div>

	';
	}
	}

	}
	else if($type=="audio"){
	$sql = "SELECT * FROM audios where Post_id=$id ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2>".$time->Cal_Diff($currentdate,$row['Post_time'])."</div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h2 class="title" align="center">'.$row_item['Audio_title'].'</h2>
					<div align="center">
                        <p><audio controls>
                             <source src="'.$row_item['Audio_link'].'" type='.$row_item['Audio_type'].'  >
                              Your browser does not support the audio element.
                            </audio></p></div>
					</div>
                    </div>
                    <div class="bottomcontent"><div class="row">

                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">upvote</a>
                    </div>
                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">downvote</a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-1">
                      <a class="bottomcontent" href="Report.php?id='.$id.'&type='.$type.'">Report</a>
                    </div>
</div>
                    </div>
				</div>

	';
	}
	}

	}
	else if($type=="link"){
	$sql = "SELECT * FROM link where Post_id=$id ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2>".$time->Cal_Diff($currentdate,$row['Post_time'])."</div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h3 class="title" align="center"><a href='.$row_item['Link_url'].' target="_blank">'.$row_item['Link_title'].'</a></h3>
                        <p></p>
					</div>
                    </div>
                    <div class="bottomcontent"><div class="row">

                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">upvote</a>
                    </div>
                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">downvote</a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-1">
                      <a class="bottomcontent" href="Report.php?id='.$id.'&type='.$type.'">Report</a>
                    </div>
</div>
                    </div>
				</div>


	';
	}
	}

	}
	else if($type=="video"){
	$sql = "SELECT * FROM video where Post_id=$id ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2>".$time->Cal_Diff($currentdate,$row['Post_time'])."</div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content" align="center">
                    <h3 class="title" align="center">'.$row_item['video_title'].'</h3>
					 <video width="500" height="450" controls>
  <source src="'.$row_item['video_link'].'" type='.$row_item['video_type'].'>
Your browser does not support the video tag.
</video>
                        <p></p>
					</div>
                    </div>
                    <div class="bottomcontent"><div class="row">

                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">upvote</a>
                    </div>
                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">downvote</a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-1">
                      <a class="bottomcontent" href="Report.php?id='.$id.'&type='.$type.'">Report</a>
                    </div>
</div>
                    </div>
				</div>


	';
	}
	}

	}
	else if($type=="videoembed"){
	$sql = "SELECT * FROM video_embed where Post_id=$id ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2>".$time->Cal_Diff($currentdate,$row['Post_time'])."</div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h3 class="title" align="center">'.$row_item['video_title'].'</h3>
                     <div align="center">'.$row_item['frame_link'].'</div>
					</div>
                    </div>
                    <div class="bottomcontent"><div class="row">

                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">upvote</a>
                    </div>
                    <div class="col-sm-1">
                    <a class="bottomcontent" href="#">downvote</a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-1">
                      <a class="bottomcontent" href="Report.php?id='.$id.'&type='.$type.'">Report</a>
                    </div>
</div>
                    </div>
				</div>

	';
	}
	}

	}
		 ?>
         <br />
				<div class="row">
				<div align="center" class="col-lg-1"><div class="profile"><img src="image/profile/no-profile-img-240x300.gif" width="80px" height="100px" /></div> </div>
    <div class="col-lg-11">
    <form>
    <textarea class="form-control"  name="comment" id="comment" placeholder="Comment or Give Your opinion" rows="5"></textarea>
    </div>
    </div>
	<div class="row">
	<div class="col-lg-10"></div>
	<div align="center" class="col-lg-2" style="padding-top:1%; margin-bottom:1%;"><button type="button"
				 class="btn btn-default login" id="combutton"><a href="javascript:void(0)" style="color:#FFF; text-decoration:none;" >Comment</a></button></div>
                 <input type="hidden" id="pid" value="<?php echo $id; ?>"
				</div>
	</form>

         </div>


         <div class="comment_con" id="comment_con">
     <?php
		 $sql = "SELECT * FROM discussion where Post_id = '$id' ORDER BY input_time DESC";
$result = $conn->query($sql);

while($rowdis = $result->fetch_assoc())
{
	$userinfo=$user->getinfo($rowdis['Author_id']);
	$dis_id=$rowdis['Discussion_id'];
	$sql = "SELECT * FROM discussion_message where discussion_id = '$dis_id'";
$resultmess = $conn->query($sql);
$rowdismessage = $resultmess->fetch_assoc();
$dismessage_id=$rowdismessage['message_id'];
echo"
	<div class=supcomment >
		 <div class=row >
		 		 <div class=col-md-10 > </div><div class=col-md-2 >".$time->Cal_Diff($currentdate,$rowdis['input_time'])."</div></div>
		 <div class=row >
		 		 <div class=col-md-1 >
				 <div class=profile ><img src=image/profile/no-profile-img-240x300.gif width=80px  height=100px /></div>
				 <p>
							<h5 class=mini-profile>
				 ".$userinfo['Username']."</h5>
						</p>
				  </div>
				 <div class=col-md-11 >  ".$rowdismessage['content']." </div>
		 </div>

		 <div class=row >
		 		 <div class=col-md-1 >Like</div>
				 <div class=col-md-1 ><a data-toggle=collapse data-target='"."#demo".$dismessage_id."' >Reply</a></div>
				 <div class=col-md-8 ></div>
				 <div class=col-md-1 >Report</div>
		 </div>
		 <input type=hidden value='$dismessage_id' id=".'hiddendismessage'." />
		 <div id='"."demo".$dismessage_id."' class=collapse>
		 <div class='row commenthide' id='submessage'.$dismessage_id style='padding-top:1%;'>
		 		 <div class=col-md-1 ></div>
				 <div class=col-md-1  ><div class=profile ><img src=image/profile/no-profile-img-240x300.gif width=80px  height=100px /></div></div>
				 <div class=col-md-7 >
				 <textarea class='form-control' rows='4' cols='73'></textarea>
				 <input type=hidden value='$dismessage_id' id=".'hiddendismessage'." />
				 </div id='replycontent'>
				 <div class=col-md-1 align='center' style='padding-top:3%; margin-bottom:1%;' ><button type='button'
				 class='btn btn-default login' id='subcombutton'>Comment</button></div>
				 <div class=col-md-2 ></div>
		 </div>
		 </div>
		 <br/>
		 </div>
	";
}
		 ?>
    </div>
  		</div>
		<div class="col-lg-1"></div>
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
    <script src="js/comment.js"></script>
  </body>
</html>
