<?php
	session_start();
	if(isset($_SESSION["Username"]))
{
	header("Location:comment?id=".$_GET['id']."&type=".$_GET['type']."");
}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php
		include'class/getposttitle.php';
		$posttitle= new posttitle ;
		if(ctype_digit($_GET['id']))
		{
		echo "".$posttitle->getposttitle($_GET['id'])." | chiiirp";
	  }
		 ?></title>
		 <?php include"includes/favicon.php"; ?>
         <meta name="description" content="<?php echo $headtitle; ?>">
    <meta name="keywords" content="<?php echo $headtitle; ?> , Chiiirp">
    <meta name="robots" content="index ,follow">
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
    <?php include"includes/header.php" ?>
     <?php
	if(isset($_SESSION["Username"]))
{
	header("Location:comment.php?id=".$_GET['id']."&type=".$_GET['type']."");
}
	?>
    <section class="content">
    <br />
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 contentcon">
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
		$sql = "SELECT * FROM posts where Post_id = '$postid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userinfo=$user->getinfo($row['User_id']);
				include"includes/blogpage_out.php";
		 ?>
         <br />
				<div class="row">
				<div class="col-lg-1"></div>
    <div class="col-lg-8 col-xs-9">
    <form>
    <textarea class="form-control"  name="comment" id="comment" placeholder="Comment or Give Your opinion" rows="4"></textarea>
    </div>
		<div class="col-lg-2 col-xs-3"  style="padding-top:3%; margin-bottom:1%;"><button type="button"
					 class="btn btn-default login" ><a href="loginpage.php" style="color:#FFF; text-decoration:none;" ><i class='fa fa-comment size' aria-hidden='true'></i></a> </button>
					 <input type="hidden" id="pid" value="<?php echo $postid; ?>"
				 </div>
    </div>
	</form>

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
		 		 <div class='col-md-10 col-xs-10' > </div><div class='col-md-2 col-xs-2' ><p class='time'>".$time->Cal_Diff($currentdate,$rowdis['input_time'])."</p></div></div>
		 <div class=row >
		 		 <div class='col-md-2 col-xs-4' >
				 <a href='out_profile.php?id=".base64_encode(json_encode($rowdis['Author_id']))."'><div class=profile ><img src='".$userinfo['Profile_pic_link']."' width=80  height=100  /></div>
				 <p>
							<h5 class=mini-profile>
				 ".$userinfo['Username']."</h5>
						</p></a>
				  </div>
				 <div class='col-md-10 col-xs-8' >  ".$rowdismessage['content']." </div>
		 </div>
		 </div>
		 <br/>

	";
}
		 ?>
    </div>
		<br />
  		</div>
		<div class="col-lg-2"></div>
	</div>


</div>

<br />
<br />
    </section>


   <?php include"includes/footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/comment.js"></script>
	<script src="js/socialloginbutton.js"></script>
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
