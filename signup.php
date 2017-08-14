<?php session_start();
if(isset($_SESSION["User_id"]))
{
	header('location:user_home');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up | chiiirp</title>

    <!-- Bootstrap -->
		<?php include"includes/favicon.php"; ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/letthemknow.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/jquery-ui.css">
    
  </head>
  <body>
  <script src="js/facebooksdk.js"></script>
    <?php include"includes/header.php" ?>
    <section class="head">
 <div class="container-fluid ">
<div class="row ">
<div class="col-lg-2 ">
</div>
<div class="col-lg-8 contentcon">
<h1 align="center">Sign up</h1>
<br />
<br />
<form  action="includes/register" role="form" data-toggle="validator"  method="post"  >
<div class="row"><div class="col-md-6"><input type="text" id="username" required  class="form-control"  name="Username" placeholder="Username" /><br />
<label class="userlabel"></label>
</div>
<div class="col-md-2"></div><div class="col-md-5">
<input type="text" class="form-control"  name="Firstname" required placeholder="Firstname" id="firstname"  /><br /><label class="firstlabel"></label></div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6"><input type="text" required id="lastname" name="Lastname" class="form-control" placeholder="Lastname"  /><br /><label class="lastlabel"></label></div>
<div class="col-md-2"></div><div class="col-md-5">
<input type="email" class="form-control"  placeholder="Email" required name="Email" id="email"  /><br /><label class="emaillabel"></label></div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6">   
 <div class="col-xs-3">
<input type="number" max="31" min="0" class="form-control" name="day" required />


</div>
<div class="col-xs-1">/</div>
<div class="col-xs-3">
<select class="form-control" name="month" required>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>
<div class="col-xs-1">/</div>
<div class="col-xs-3">
<input type="text"  class="form-control" placeholder="Year" name="year" required year/><br />
</div><br />
</div>
<div class="col-md-2"></div><div class="col-md-5">
<select name="sex" class="form-control">
<option selected>Male</option>
<option>Female</option>
</select><br /></div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6"><input type="text" class="form-control" placeholder="Phone Number" id="phonenumber" required  name="phonenumber"/><br /><label class="phonenumberlabel"></label></div>
<div class="col-md-2"></div><div class="col-md-5"><input type="password" class="form-control" id="password" required placeholder="Password" name="password" type="password" /><br /><label class="passwordlabel"></label>
</div><div class="col-md-1"></div></div>
<div class="row"><div class="col-md-6"><input type="password"  class="form-control" name="passwordretype" required  placeholder="Retype Password" id="retypepassword" /> <br /><label class="passwordretypelabel"></label>
</div>
<div class="col-md-2"></div><div class="col-md-5"><button type="submit" id="signup" class="btn btn-default login searchbox">Sign up</button><br /><label class="signupin"></label></div><div class="col-md-1"></div></div>
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

    <?php include"includes/footer.php" ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/signup_formvalidation.js"></script>
    <script src="js/facebooklogin.js"></script>
    <script src="js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script>
	$( document ).ready(function() {
		$( "#datepicker" ).datepicker({
			
			});
		
	});
    </script>
<script src="js/socialloginbutton.js"></script>
  </body>
</html>
