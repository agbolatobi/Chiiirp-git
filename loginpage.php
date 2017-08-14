<?php session_start();
if(isset($_SESSION["User_id"]))
{
	header('location:user_home');
}
 ?>
<!DOCTYPE html>
  <head>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | chiiirp</title>
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
  <script src="js/facebooklogin.js"></script>
    <?php include"includes/header.php" ?>
    <section class="head">
    <br />
<br />
<br /><br />
 <div class="container-fluid ">
<div class="row ">
<div class="col-md-3 ">
</div>
<div class="col-md-6 sidebarcontent">
<br />
<br />
<h2 align="center">Login</h2>
<form action="includes/login.php" method="post" >
        <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <input type="text" name="loginname" required class="form-control" placeholder="Username or Email" />
        <br />
        <br />
        <input type="password" name="password" required  class="form-control" placeholder="Password" />
        <br />
        <div class="row login-bottom">
        <div class="col-sm-6 col-xs-6">
        <button type="submit" class="btn btn-default login">Login</button>
        </div>
        <div class="col-sm-6 col-xs-6"><a href="forgotpassword.php">Forgot Password</a>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        </form>
  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-auto-logout-link="true">
</fb:login-button>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1031852396940459";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<br />
<button type="button" id='fbbutton' class='fbbutton' onclick="fblogin()">Continue with Facebook</button>

        </div>
        </div>
        
</div>
<div class="col-md-3 ">
</div>
</div>
</div>
<br />
    </section>
    <br />
    <br />
    <br />
<br />
<br />
<br />
<br />
    <?php include"includes/footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
