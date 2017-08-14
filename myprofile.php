<?php session_start();
if(empty($_SESSION["User_id"]))
{
	header('location:index');
}
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
    <title><?php echo" ".$_SESSION["Username"]." | chiiirp "; ?></title>

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
    <?php include"includes/header_user.php";
	include'class/Comment_Number.php';
	$commentnummber= new commentnumber; ?>
    <section class="content">
    <br />
 <div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-3 contentcon profilebox" >
        <br />
        <div class="round">

        <img src="<?php if(empty($_SESSION["profic_pic"]) ){echo "profile/no-profile-img-240x300.gif";}else{echo $_SESSION["profic_pic"];} ?>" width="140px" height="180px" />
        </div>
      <h2 class="user_profile">
		<?php echo"".$_SESSION["Lastname"]." " .$_SESSION["Firstname"].""; ?></h2>

        <h5 class="user_profile"><?php echo"".$_SESSION["Username"].""; ?></h5>

         <h5 class="user_profile">Description</h5><p class="user_profile"><?php echo"".$_SESSION["Description"].""; ?>   <a href="#" data-toggle="modal" data-target="#description"><span class="glyphicon glyphicon-pencil"></span></a></p>
        <h5 class="user_profile">Date of Birth: <?php echo"".$_SESSION["Date_Of_Birth"].""; ?></h5><h5 class="user_profile">Sex: <?php echo"".$_SESSION["Sex"].""; ?></h5>
        <h5 class="user_profile">Phone Number: <?php echo"0".$_SESSION["Phone_Number"].""; ?></h5>
				<h5 class="user_profile">Email: <?php echo"".$_SESSION["Email"].""; ?>
      <a href="editprofile.php"><h5>Edit Profile <span class="glyphicon glyphicon-pencil"></span></a></h5>
			<h5 class="user_profile">Post Count: <?php echo $postcount->getUserview($_SESSION["User_id"]); ?></h5>
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
		<input type="password" class="form-control" name="oldpassword" placeholder="Old Password"  />
		<input type="submit" class="btn btn-default login" name="submit" value="submit" />
		</form>
	</div>
	<br />
  		</div>
		<div class="col-lg-7 contentcon" id="content">
			<?php
		 include"includes/conn.php";
		 include'class/Diff_time_getter.php';
		 include'class/vote.php';
		 include'class/getuser.php';
		 $user=new Userinfo;

		 $id=$_SESSION["User_id"];
		 $userinfo=$user->getinfo($id);
		 $time= new Difftime;
		 $vote= new vote_get;
			$currentdate=date("Y-m-d H:i:s");
		 $sqlpost = "SELECT * FROM posts where User_id = '".$id."' ORDER BY Post_time DESC LIMIT 20  ";

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
        <input type="hidden" id="id" value="<?php echo $id; ?>" />
		</div>
		<div class="col-lg-1"></div>
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
