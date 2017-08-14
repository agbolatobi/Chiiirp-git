<?php session_start();
if(isset($_SESSION["User_id"]))
{
	header('location:search_user?search='.$_GET['search'].'');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($_GET['search'])){
			echo"".$_GET['search']." | chiiirp ";
		}else{
			echo" Search for posts | chiiirp ";
		}?></title>

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
	include"class/search.php";
		include'class/Diff_time_getter.php';
		include'class/getuser.php';
	    include'class/vote.php';
       include'class/Comment_Number.php';
	 $commentnummber= new commentnumber;
		$user=new Userinfo;
	 $time= new Difftime;
	 $vote= new vote_get;
	$currentdate=date("Y-m-d H:i:s");
		 $search= new search;
	?>
    <section class="content">
    <br />
 <div class="container-fluid">
	<div class="row">
    <div class="col-lg-1 col-md-1"></div>
		<div class="col-lg-3 col-md-3"><?php include"includes/usersearch.php"; ?></div>
		<div class="col-lg-7 col-md-7 contentcon">
        <br />
        <div class="row">
		<div class="col-xs-2">
        
        </div>
		<div class="col-xs-8">
        <form method="get" action="search" >
<input type="text" value="<?php echo $_GET['search']; ?>" id="searchquery" class="form-control" name="search" list="searchlist" />
<datalist id="searchlist">

</datalist>
  		</div>
		<div class="col-xs-2"><button type="submit" class="btn btn-default login"><span class="glyphicon glyphicon-search"></span></button>
</form>
</div></div>
<?php foreach ($search->searchposts($_GET['search']) as $id) {
	include"includes/conn.php";
	  $sqlpost = "SELECT * FROM posts where Post_id = '$id'  ";

$result = $conn->query($sqlpost);
if($result){
	while($row = $result->fetch_assoc())
	{
	$postid=$row['Post_id'];
	$userinfo=$user->getinfo($row['User_id']);
include"includes/blogpage_out.php";
	}}
	$conn->close();
	} ?>
  		</div>
		<div class="col-lg-1 col-md-1"></div>
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
      <form action="updatedesc" method="post" >
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
    <script src="js/search.js"></script>
<script src="js/backtotop.js"></script>
<script src="js/socialloginbutton.js"></script>

  </body>
</html>
