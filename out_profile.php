<?php session_start();
if(isset($_SESSION["User_id"]))
{
	header('location:user_profile?id='.$_GET['id'].'');
}
if(!is_numeric(json_decode( base64_decode($_GET['id']))))
{
	header('location:user_home');
}
include'class/getuser.php';
$user=new Userinfo;
$userinfo=$user->getall(json_decode( base64_decode($_GET['id'])));
include'class/postcount.php';
$postcount=new postcount;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo" ".$userinfo['Username']." | chiiirp "; ?></title>

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
   <div class="backtotop">
<button class="btn btn-default login" id="toTop"> <i class="fa fa-arrow-up size" aria-hidden="true"></i> </button>
</div>
  <script src="js/facebooksdk.js"></script>
    <?php include"includes/header.php";
	include'class/Comment_Number.php';
	$commentnummber= new commentnumber; ?>
    <section class="content">
    <br />
 <div class="container-fluid">
	 <div class="row"><div class="col-lg-1 "></div>
	 	<div class="col-lg-3 profilebox " >
	 			<br />

	 			<div align="center" class="round">
	 			<img src="<?php if(empty($userinfo['Profile_pic_link']) ){echo "profile/no-profile-img-240x300.gif";}else{echo $userinfo['Profile_pic_link'];} ?>" width="140px" height="180px" />
	 			</div>
				<h3 class="user_profile"><?php echo"".$userinfo["Username"].""; ?></h3>
	     <h5 class="user_profile">	<?php echo"".$userinfo["Lastname"]." " .$userinfo["Firstname"].""; ?></h5>
	 			 <h5 class="user_profile">Description</h5><p class="user_profile"><?php echo"".$userinfo["Description"].""; ?></p>
	 			<h5 class="user_profile">Date of Birth: <?php echo"".$userinfo["Date_Of_Birth"].""; ?></h5>
	 			<h5 class="user_profile">Sex: <?php echo"".$userinfo["Sex"].""; ?></h5>
				<h5 class="user_profile">Post Count: <?php echo $postcount->getUserview(json_decode( base64_decode($_GET['id']))); ?></h5>
                <input type="hidden" id="user_id" value="<?php echo json_decode( base64_decode($_GET['id'])); ?>" />
	 			<br />
	 			</div>
	 	<div class="col-lg-7 contentcon" id="content">
	 		<?php
	 	 include"includes/conn.php";
	 	 include'class/Diff_time_getter.php';
	 	 include'class/vote.php';
	 	 $id=json_decode( base64_decode($_GET['id']));
	 	 $time= new Difftime;
	 	 $vote= new vote_get;
		  $Anonymous="Anonymous";
	 		$currentdate=date("Y-m-d H:i:s");
	 	 $sqlpost = "SELECT * FROM posts where User_id = '$id' AND Post_Visibility <> '$Anonymous' ORDER BY Post_time DESC LIMIT 20  ";

	 $result = $conn->query($sqlpost);
	 if($result){
	 		$userinfo=$user->getinfo($id);
	 		while($row = $result->fetch_assoc())
	 		{
	 	$postid=$row['Post_id'];
	 include"includes/blogpage_out.php";
	 }
	 	}
	 	$conn->close();
	 	?>


	 	</div>
	 	<div class="col-lg-1 "></div>
	 </div>

	</div>
</div>

<br />
<br />
    </section>
    <section>
    <div id="description" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
      <form action="includes/updatedesc" method="post" >
        <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <textarea rows="6" cols="70" name="desc" ><?php echo"".$_SESSION["Description"].""; ?></textarea>
        <br />
        <div class="row login-bottom">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6" align="right">
        <br />
        <button type="submit" class="btn btn-default login">Update Description</button>
        </div>
        </div>
        </div>
        <div class="col-md-1">
        </div>
        </div>
        </form>
      </div>
    </div>

    </section>
    <?php include"includes/footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/user_profile_posts_outs.js"></script>
    <script src="js/backtotop.js"></script>
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
