<?php //error_reporting(0); ?>
<header class="header">
<div class="topbar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3  col-xs-4"><a href="index"><img src="image/logo/Logo.png" class="img-responsive" /></a></div>
<div class="col-lg-9  col-xs-8" >
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
        <span class="icon-bar color"></span>
      </button>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav header navbar-right">
<li class="topbar"><a class="topbar" href="index"><i class="fa fa-home header-size" aria-hidden="true"> </i> Home</a></li>
<li class="topbar"><a class="topbar" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in header-size" aria-hidden="true"></i>
 Login</a></li>
<li class="topbar"><a class="topbar" href="signup"><i class="fa fa-level-up header-size" aria-hidden="true"></i>
 Sign Up</a></li>
</ul>

</div></div>
</div>
</div>
</div>

</header>
<section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      <form action="includes/login" method="post" >
        <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-7">
        <input type="text" name="loginname" required  class="form-control" placeholder="Username or Email" />
        <br />
        <br />
        <input type="password" name="password" required  class="form-control" placeholder="Password" />
        <br />
        <div class="row login-bottom">
        <div class="col-sm-6 col-xs-6">
        <button type="submit" class="btn btn-default login">Login</button>
        </form>
        </div>
        <div class="col-sm-6 col-xs-6"><a href="forgotpassword">Forgot Password</a>
        </div>
        </div>
        </div>
        <div class="col-sm-4">
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
<br />

        </div>
        <br />
        <button type="button" id='fbbutton' class='fbbutton' onclick="fblogin()">Continue with Facebook</button>
        </div>
        
      </div>
    </div>

  </div>
</div>
</section>
<div class="space visible-md-block visible-lg-block visible-sm-block"></div>
<div class="spacemobile visible-xs-block"></div>
<div class="upload">
</div>
