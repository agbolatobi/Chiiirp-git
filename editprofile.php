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
    <title><?php echo $_SESSION["Username"]; ?> | chiiirp</title>
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
    <section class="head">
 <div class="container-fluid ">
<div class="row ">
<div class="col-lg-2 ">
</div>
<div class="col-lg-8 contentcon">
<h1 align="center">Edit Profile</h1>
<br />
<br />
<form  action="includes/updateprofile.php"  method="post"  >
<div class="row"><div class="col-md-6"><?php echo"<input required type=text class=form-control name=Username  value=".$_SESSION["Username"]." />" ?><br /></div>
<div class="col-md-2"></div><div class="col-md-5">
<?php echo"<input type=text class=form-control name=Firstname required  value=".$_SESSION["Firstname"]."  />"; ?><br /></div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6"><?php echo"<input type=text required   name=Lastname class=form-control value=".$_SESSION["Lastname"]."  />" ?><br /></div>
<div class="col-md-2"></div><div class="col-md-5">
<?php echo"<input type=text class=form-control required   name=Email value=".$_SESSION["Email"]." />" ?><br /></div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6"><?php
echo"<input type=text class=form-control required   name=phonenumber value="; ?><?php echo"".$_SESSION["Phone_Number"]."  />"; ?><br /></div>
<div class="col-md-2"></div><div class="col-md-5">
<select name="sex" class="form-control">
<?php
if($_SESSION["Sex"]=="Male")
{
echo"<option selected>Male</option>";
echo"<option>Female</option>";
}
else
{
echo"<option >Male</option>";
echo"<option selected>Female</option>";
}
?>
</select><br /></div><div class="col-md-1"></div></div>

<div class="row"><div class="col-md-6"><br /><?php
echo"<input type=text class=form-control required   name=date value=".$_SESSION["Date_Of_Birth"]."  />" ?></div>
<div class="col-md-2"></div><div class="col-md-5"><button type="submit" class="btn btn-default login">edit</button><br /></div><div class="col-md-1"></div></div>


</form>
<br />
<br />
<br />
</div>
<div class="col-lg-2 ">
</div>
</div>
</div>
    </section>
    <br />
    <br />
<br />
    <?php include"includes/footer_user.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
