<?php session_start();
if(empty($_SESSION["User_id"]))
{
	header('location:feedback_result');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feedback | chiiirp</title>

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
		<div class="col-lg-1">
        <div class="min-height" ></div>
        </div>
		<div class="col-lg-10 contentcon" align="center">
        <br/>
        <?php
		if(isset($_GET['Result'])){
		if($_GET['Result']==="success")
		{
			echo"<h1>Your Feedback was Successfully sent</h1>";
		}else
		{
			echo"<h1>An Error Occured While Sending Your Feedback</h1>";
		} }else
		{
			header('location:user_home');
		}
		?>
        <br/>
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
		 <script src="js/notification.js"></script>
  </body>
</html>
