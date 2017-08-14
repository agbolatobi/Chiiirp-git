<?php session_start();
if(empty($_SESSION["User_id"]))
{
	header('location:index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Latest Posts | chiiirp</title>
<meta name="description" content="User-generated Content links, text , images , videos, . Upvotes promote posts to the Top ">
    <meta name="keywords" content="Bored, Funny, News, Entertainment, Art, Music">
    <meta name="robots" content="index ,follow">
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
    <script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
  </head>

  <body>
  <script src="js/facebooksdk.js"></script>
    <?php include"includes/header_user.php";
    include"includes/conn.php";
	 include'class/Diff_time_getter.php';
	 include'class/vote.php';
	 include'class/getuser.php';
	 include'class/Comment_Number.php';
      $time= new Difftime;
	 $user=new Userinfo;
	 $vote= new vote_get;
	 $commentnummber= new commentnumber;
     ?>

    
    <section class="content">
 <div class="container-fluid">
	<div class="row">
  <div class="col-lg-1 col-md-1"></div>
		<div class="col-lg-3 col-md-3"><?php include"includes/sidebar.php"; ?></div>
		<div class="col-lg-7 col-md-7 contentcon" id="content">
    <?php include"includes/searchbox_user.php" ?>
			  <?php
	 

		$currentdate=date("Y-m-d H:i:s");
	 $sqlpost = "SELECT * FROM posts ORDER BY Post_time DESC ,Post_id DESC LIMIT 20";
	$result = $conn->query($sqlpost);
if($result){
	$id=$_SESSION["User_id"];
	while($row = $result->fetch_assoc())
	{

	$postid=$row['Post_id'];
	$userinfo=$user->getinfo($row['User_id']);
include"includes/blogpage_user.php";
	}}
	$conn->close();
	?>
  		</div>
		<div class="col-lg-1 col-md-1"></div>
	</div>
</div>
    </section>

    <?php include"includes/footer_user.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/voter.js"></script>
    <script src="js/search.js"></script>
    <script src="js/user_reloader_latest.js"></script>
		 <script src="js/notification.js"></script>
  </body>
</html>
