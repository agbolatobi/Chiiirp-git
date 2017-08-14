<?php //error_reporting(0);
 ?>
 <script src="js/logout.js"></script>
<header class="header">
<div class="topbar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-2 col-xs-4 ">
<a class=" logobox" href="user_home"><img src="image/logo/Logo.png" class="img-responsive" /></a>
</div>
<div class="col-lg-10 col-xs-8" >
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
      </button>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav header navbar-right topbar">
<li class="topbar"><a class="topbar" href="user_home"><i class="fa fa-home header-size" aria-hidden="true"> </i> Home</a></li>
<?php
echo"<li class=topbar><a class=topbar href=myprofile ><i class='fa fa-user header-size' aria-hidden='true'></i> ".$_SESSION["Username"]."</a></li>";
?>
<li class="topbar dropdown"><a class="topbar dropdown-toggle" id="notificationbutton" data-toggle="dropdown" href="#"><i id="notificationicon" class="fa fa-bell header-size" aria-hidden="true"></i> Notifications</a>
<ul class="dropdown-menu " id="notifications">
<li class="notification_block"><a href="notifications">View All Notifications</a></li>
        </ul>
</li>
<li class="topbar"><a class="topbar" href="posts"><i class="fa fa-upload header-size" aria-hidden="true"></i> Chiiirp</a></li>

<li class="topbar"><a class="topbar" href="myposts"><i class="fa fa-inbox header-size" aria-hidden="true"></i>
 My Posts</a></li>
<li class="topbar"><a class="topbar"   href="includes/logout" ><i class="fa fa-sign-out header-size" aria-hidden="true"></i> Sign Out</a></li>
</ul>
      </div>
    </div>

  </div>
</div>
</div></div>
</div>
</div>
</div>
</header>
<div class="space visible-md-block visible-lg-block visible-sm-block"></div>
<div class="spacemobile visible-xs-block"></div>
<div class="upload visible-md-block visible-lg-block">
<a href="posts.php" class="upload"><img src="image/Chiiirpupload.fw.png" alt="upload" /></a>
</div>

