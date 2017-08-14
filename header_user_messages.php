
<header class="header">
<div class="topbar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
      </button></div>
<div class="col-lg-8" >
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav header navbar-right">
<li class="topbar"><a class="topbar" href="user_home.php">Home</a></li>
<?php

echo"<li class=topbar><a class=topbar href=profile_user.php >".$_SESSION["Username"]."</a></li>";
?>
<li class="topbar"><a class="topbar" href="messages.php">Messages</a></li>
<li class="topbar dropdown"><a class="topbar dropdown-toggle" data-toggle="dropdown" href="#">Notifications</a>
<ul class="dropdown-menu ">
          <li class="notifications"><a href="#"><div class="row"><div class="col-sm-3"><div class="image"><img src="image/profile/no-profile-img-240x300.gif" height="60px" width="60px" /></div></div><div class="col-sm-9"> <h5>The LoneWolf commented on your Post</h5></div></div></a></li>
          <li class="notifications"><a href="#"><div class="row"><div class="col-sm-3"><div class="image"><img src="image/profile/no-profile-img-240x300.gif" height="60px" width="60px" /></div></div><div class="col-sm-9"> <h5>The LoneWolf commented on a Post</h5></div></div></a> </li>
          <li class="notifications"><a href="#"><div class="row"><div class="col-sm-12"> <h5 align="center">Your Post Was Reported</h5></div></div></a></li>
        </ul>
</li>
<li class="topbar"><a class="topbar" href="myposts.php">My Posts</a></li>
<li class="topbar"><a class="topbar" href="includes/logout.php">Log Out</a></li>
</ul>
      </div>
    </div>

  </div>
</div>
</div></div>
</div>
</div>
</div>
<div class="lowbar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3"><img src="image/logo/Logo.png"/></div>
<div class="col-lg-9"></div>
</div>
</div>
</div>
</header>
