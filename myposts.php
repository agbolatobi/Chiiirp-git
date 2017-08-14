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
    <title>My Posts | chiiirp</title>

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
    <?php include"includes/header_user.php" ?>
    <section class="content">
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 contentcon" id="content">
        <input type="hidden" id="id" value="<?php echo $_SESSION['User_id']; ?>" />
    <?php
	 include"includes/conn.php";
	 include'class/Diff_time_getter.php';
	 include'class/vote.php';
	include'class/Comment_Number.php';
	$commentnummber= new commentnumber;
	 $id=$_SESSION['User_id'];
	 $time= new Difftime;
	 $vote= new vote_get;
	 include'class/getuser.php';
	$user=new Userinfo;
		$currentdate=date("Y-m-d H:i:s");
	 $sqlpost = "SELECT * FROM posts where User_id = '$id' ORDER BY Post_time DESC LIMIT 20  ";

$result = $conn->query($sqlpost);
if($result){
		$userinfo=$user->getinfo($id);
		while($row = $result->fetch_assoc())
		{
	$postid=$row['Post_id'];
include"includes/blogpage_user.php";
}
	}
	$conn->close();
	?>


  		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
    </section>

    <?php include'includes/footer_user.php' ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/voter.js">

    </script>
     <script src="js/user_mypost.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84156146-1', 'auto');
  ga('send', 'pageview');

</script>
 <script src="js/notification.js"></script>
 <script src="js/backtotop.js"></script>
  </body>
</html>
