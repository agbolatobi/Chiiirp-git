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
    <title><?php echo" ".$_SESSION["Username"]." | Upforposts "; ?></title>

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
    <?php include"includes/header_user.php" ?>
    <section class="content">
    <br />
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 contentcon">
        <br />
        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
        <br />
        <br />
        <div class="round">

        <img src="<?php if(empty($_SESSION["profic_pic"]) ){echo "profile/no-profile-img-240x300.gif";}else{echo $_SESSION["profic_pic"];} ?>" width="140px" height="180px" />
        </div>


        </div>
        <div class="col-sm-7"><div class="row"><div class="col-xs-12"><h2 class="user_profile">
		<?php echo"".$_SESSION["Lastname"]." " .$_SESSION["Firstname"].""; ?></h2>
        <br />
        <h5 class="user_profile"><?php echo"".$_SESSION["Username"].""; ?></h5>
        <br />
         <div class="col-sm-2"><h5 class="user_profile">Description</h5></div><div class="col-sm-10"><p class="user_profile"><?php echo"".$_SESSION["Description"].""; ?>   <a href="#" data-toggle="modal" data-target="#description"><span class="glyphicon glyphicon-pencil"></span></a></p></div>
        </div></div>

        </div>
        <div class="col-sm-1"></div>
        </div>
        <br />
        <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
        <button data-toggle="collapse" class="btn btn-default login" data-target="#demo">Change Profile Picture</button>	<br />
<div id="demo" class="collapse">
<form action="includes/profileupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image_file"  />
        <input type="submit" class="btn btn-default login" name="submit" value="Upload" />
        </form>
      </div>
			<br />
			<button data-toggle="collapse" class="btn btn-default login" data-target="#demo2">Change Password</button>
<div id="demo2" class="collapse">
<form action="includes/changepassword.php" method="post" enctype="multipart/form-data">
			<input type="password" class="form-control" name="newpassword" placeholder="New Password"  />
			<br>
			<input type="password" class="form-control" name="oldpassword" placeholder="Old Password"  />
				<br>
			<input type="submit" class="btn btn-default login" name="submit" value="submit" />
			</form>
		</div>

        </div>
        <div class="col-sm-7">
        <div class="col-xs-6"><h5 class="user_profile">Date of Birth: <?php echo"".$_SESSION["Date_Of_Birth"].""; ?></h5></div><div class="col-xs-6"><h5 class="user_profile">Sex: <?php echo"".$_SESSION["Sex"].""; ?></h5></div>
        <div class="col-xs-6"><h5 class="user_profile">Phone Number: <?php echo"0".$_SESSION["Phone_Number"].""; ?></h5></div><div class="col-xs-6"><h5 class="user_profile">Email: <?php echo"".$_SESSION["Email"].""; ?></h5> </div>
        <div class="col-xs-6"><a href="editprofile.php"><h5>Edit Profile <span class="glyphicon glyphicon-pencil"></span></h5></a></div><div class="col-xs-6">

        </div>
        <div class="col-xs-7"></div><div class="col-xs-">
        <br />
        </div>
        </div>

        </div>
        </div>
  		</div>
		<div class="col-lg-2"></div>
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
      <form action="includes/updatedesc.php" method="post" >
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
  </body>
</html>
