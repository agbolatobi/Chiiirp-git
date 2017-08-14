  <?php error_reporting(0);
  session_start();
	if(isset($_SESSION["Username"]))
{
	header("Location:user_home_lastest");
}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="User-generated Content links, text , images , videos, . Upvotes promote posts to the Top ">
    <meta name="keywords" content="Bored, Funny, News, Entertainment, Art, Music">
    <meta name="robots" content="index ,follow">
    <title>Latest Posts | chiiirp</title>
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
    <script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
  </head>
  <body>
  <script src="js/facebooksdk.js"></script>
  <script src="js/facebooklogin.js"></script>
  <div class="backtotop">
<button class="btn btn-default login" id="toTop"> <i class="fa fa-arrow-up size" aria-hidden="true"></i> </button>
</div>
    <?php include"includes/header.php";
     include"includes/conn.php";
	 include'class/Diff_time_getter.php';
	 include'class/vote.php';
	 include'class/getuser.php';
  include'class/Comment_Number.php';
    $user=new Userinfo;
	 $time= new Difftime;
	 $vote= new vote_get;
   $commentnummber= new commentnumber;
    ?>

  
    <section class="content">
    <div class="container-fluid">
	<div class="row">
  <div class="col-lg-1 col-md-1"></div>
		<div class="col-lg-3 col-md-3">
    <?php include"includes/sidebar.php"; ?>
    </div>
		<div class="col-lg-7 col-md-7 contentcon"  id="content">
    <?php include"includes/searchbox.php" ?>
			<?php
	
	
		$currentdate=date("Y-m-d H:i:s");
	 $querydate=date_create(date("Y-m-d H:i:s"));
		date_sub($querydate,date_interval_create_from_date_string("2 days"));
	 $sqlpost = "SELECT * FROM posts ORDER BY Post_time DESC ,Post_id DESC  LIMIT 20";

$result = $conn->query($sqlpost);
if($result){
	while($row = $result->fetch_assoc())
	{
		$userinfo=$user->getinfo($row['User_id']);
	$postid=$row['Post_id'];
  include"includes/blogpage_out.php";
	}}
	$conn->close();
	?>
  		</div>
		<div class="col-lg-1 col-md-1"></div>
	</div>
</div>
    </section>

    <?php include"includes/footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/reloader_latest.js"></script>
    <script src="js/backtotop.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84156146-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="js/socialloginbutton.js"></script>
  </body>
</html>
