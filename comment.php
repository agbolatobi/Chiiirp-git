<?php
	session_start();
	if(empty($_SESSION["User_id"]))
{
	header("Location:comment_out?id=".$_GET['id']."&type=".$_GET['type']."");
}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
		<?php
		include'class/getposttitle.php';
		$posttitle= new posttitle ;
		if(ctype_digit($_GET['id']))
		{
			$headtitle=$posttitle->getposttitle($_GET['id']);
		echo "".$headtitle." | chiiirp";
	  }
		 ?>
    </title>
	    <?php
		if(ctype_digit($_GET['id']))
		{
			$postid=$_GET['id'];
		}else
		{
			header('Location:myposts.php');
		}
		if($_GET['type']=="text" || $_GET['type']=="link" || $_GET['type']=="audio" || $_GET['type']=="videoembed" || $_GET['type']=="video" || $_GET['type']=="image")
		{
			$type=$_GET['type'];
		}
		else{
			header('Location:myposts.php');
		}
		 ?>
    <meta property="og:url"              
      content="<?php echo"comment_out?id=".$_GET['id']."&type=".$_GET['type']."";?>" />
<meta property="og:type"               content="<?php echo $_GET['type']; ?>" />
<meta property="og:title"              content="<?php echo $headtitle; ?>" />
<meta property="og:description"        content="Chiiirp post" />

    <meta name="description" content="<?php echo $headtitle; ?>">
    <meta name="keywords" content="<?php echo $headtitle; ?> , Chiiirp">
    <meta name="robots" content="index ,follow">
		<?php include"includes/favicon.php"; ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/letthemknow.css" rel="stylesheet">

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

    
         <br />
         <?php include"includes/conn.php";
	 include'class/Diff_time_getter.php';
	 include'class/getuser.php';
	 include'class/vote.php';
include'class/Comment_Number.php';
	 $time= new Difftime;
	 $user=new Userinfo;
	 $vote= new vote_get;
	 $commentnummber= new commentnumber;
		$currentdate=date("Y-m-d H:i:s");
		$id=$_SESSION["User_id"];
		$sql = "SELECT * FROM posts where Post_id = '$postid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userinfo=$user->getinfo($row['User_id']);
if(empty($_SESSION["profic_pic"]))
		{
			$profilelink="profile/no-profile-img-240x300.gif";
		}
		else
		{
			$profilelink=$_SESSION["profic_pic"];
		}
		include"includes/blogpage_user.php";

		 ?>
         
				<div class="row">
				<div class="col-lg-1"></div>
    <div class="col-lg-8 col-xs-9"  style="padding-left:1%;" >
    <form>
    <textarea class="form-control"  name="comment" id="comment" placeholder="Comment or Give Your opinion" rows="4"></textarea>
    </div>
		<div class="col-lg-2 col-xs-3 combutton" align="center"><button type="button" class="btn btn-default login" id="combutton"><a href="javascript:void(0)" style="color:#FFF; text-decoration:none;" ><i class='fa fa-comment size' aria-hidden='true'></i></a></button><span id="commentloader"><img src='image/loading/ajax-loader.gif' width='20' height='20' /></span>
					 <input type="hidden" id="pid" value="<?php echo $postid; ?>"
				  </div>
    </div>
	</form>

         </div>
         <div class="row"><div class="col-sm-12 visible-md visible-lg-block">
         <br />
         <button data-toggle="collapse" data-target="#Smiley" class="btn btn-default login">Smileys</button>

<div id="Smiley" class="collapse">
<div class="row">
<div class="col-xs-12"><h3><a class="smiley" href="javascript:void(0)" id="smile1" >😀</a><a class="smiley" href="javascript:void(0)" id="smile2" >😬</a><a class="smiley" href="javascript:void(0)" id="smile3" >😁</a><a class="smiley" href="javascript:void(0)" id="smile4" >😂</a><a class="smiley" href="javascript:void(0)" id="smile5" >😃</a><a class="smiley" href="javascript:void(0)" id="smile6" >😄</a><a class="smiley" href="javascript:void(0)" id="smile7" >😅</a><a class="smiley" href="javascript:void(0)" id="smile8" >😆</a><a class="smiley" href="javascript:void(0)" id="smile9" >😇</a><a class="smiley" href="javascript:void(0)" id="smile10" >😉</a><a class="smiley" href="javascript:void(0)" id="smile11" >😊</a><a class="smiley" href="javascript:void(0)" id="smile12" >😡</a></a><a class="smiley" href="javascript:void(0)" id="smile13" >😋</a><a class="smiley" href="javascript:void(0)" id="smile14" >😌</a><a class="smiley" href="javascript:void(0)" id="smile15" >😍</a><a class="smiley" href="javascript:void(0)" id="smile16" >😘</a><a class="smiley" href="javascript:void(0)" id="smile17" >😗</a><a class="smiley" href="javascript:void(0)" id="smile18" >😜</a><a class="smiley" href="javascript:void(0)" id="smile19" >😎</a><a class="smiley" href="javascript:void(0)" id="smile20" >😐</a><a class="smiley" href="javascript:void(0)" id="smile21" >😒</a><a class="smiley" href="javascript:void(0)" id="smile22" >😟</a><a class="smiley" href="javascript:void(0)" id="smile23" >😣</a><a class="smiley" href="javascript:void(0)" id="smile24" >😤</a><a class="smiley" href="javascript:void(0)" id="smile25" >😰</a></a><a class="smiley" href="javascript:void(0)" id="smile26" >😭</a></h3></div>
<div class="col-xs-12"><h3><a class="smiley" href="javascript:void(0)" id="smile27" >😵</a><a class="smiley" href="javascript:void(0)" id="smile28" >😷</a><a class="smiley" href="javascript:void(0)" id="smile29" >😸</a><a class="smiley" href="javascript:void(0)" id="smile30" >😹</a><a class="smiley" href="javascript:void(0)" id="smile31" >😿</a><a class="smiley" href="javascript:void(0)" id="smile32" >👏</a><a class="smiley" href="javascript:void(0)" id="smile33" >😱</a><a class="smiley" href="javascript:void(0)" id="smile34" >👏</a><a class="smiley" href="javascript:void(0)" id="smile35" >🇳🇬</a><a class="smiley" href="javascript:void(0)" id="smile36" >❤️</a><a class="smiley" href="javascript:void(0)" id="smile37" >🍑</a><a class="smiley" href="javascript:void(0)" id="smile38" >🍆</a></a><a class="smiley" href="javascript:void(0)" id="smile39" >🚶</a><a class="smiley" href="javascript:void(0)" id="smile40" >🏃</a><a class="smiley" href="javascript:void(0)" id="smile41" >💃</a><a class="smiley" href="javascript:void(0)" id="smile42" >⛅️</a><a class="smiley" href="javascript:void(0)" id="smile43" >🌍</a><a class="smiley" href="javascript:void(0)" id="smile44" >💩</a><a class="smiley" href="javascript:void(0)" id="smile45" >✌️</a><a class="smiley" href="javascript:void(0)" id="smile46" >👌</a><a class="smiley" href="javascript:void(0)" id="smile47" >💪</a><a class="smiley" href="javascript:void(0)" id="smile48" >🙏</a><a class="smiley" href="javascript:void(0)" id="smile49" >👄</a><a class="smiley" href="javascript:void(0)" id="smile50" >🎓</a><a class="smiley" href="javascript:void(0)" id="smile51" >👑</a></a><a class="smiley" href="javascript:void(0)" id="smile52" >👀</a></h3></div>
</div>
</div>
         </div>

         <div class="comment_con" id="comment_con">
     <?php
		 $sql = "SELECT * FROM discussion where Post_id = '$postid' ORDER BY input_time DESC";
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
		 		 <div class='col-md-10 col-xs-10' >
 </div><div class='col-md-2 col-xs-1' ><p class='time'>".$time->Cal_Diff($currentdate,$rowdis['input_time'])."</p></div></div>
		 <div class=row >
		 		 <div class='col-md-2 col-xs-4' >
				 <a href='user_profile.php?id=".base64_encode(json_encode($rowdis['Author_id']))."'> <div class=profile ><img src='".$userinfo['Profile_pic_link']."' width='80'  height='100'  /></div>
				 <p><h5 class=mini-profile>
				 ".$userinfo['Username']."</h5>
						</p></a>
				  </div>
				 <div class='col-md-10 col-xs-8'   >  ".$rowdismessage['content']." </div>
		 </div>

		 </div>
		 <br/>

	";
}
		 ?>
    </div>
		<br />
  		</div>
		<div class="col-lg-2">
   
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
    <script src="js/insertsmiley.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84156146-1', 'auto');
  ga('send', 'pageview');

</script>
 <script src="js/notification.js"></script>
 <script src="js/voter.js"></script>
  </body>
</html>
