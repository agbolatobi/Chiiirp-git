<div class="usersearch sidebarcontent">
<h3 align="center" class="usersearch" >User Search</h3>

<?php 
$usersearch=$search->searchusers($_GET['search']);
if(is_array($usersearch)){ ?>

<br />
<?php foreach ($usersearch as $userid) { 
$userinfo=$user->getsearch($userid);
?><div class="row">
<div class="col-xs-3" align="center"><div align="center"><img class="img-responsive img-circle"  src="<?php echo $userinfo['Profile_pic_link']; ?>" alt="<?php echo $userinfo['Username']; ?>" width="40" height="50" /></div></div><div class="col-xs-9"><a href='out_profile?id=<?php echo base64_encode(json_encode($userid)); ?>'><h4>Username - <?php echo $userinfo['Username']; ?></h4></a>
<h5><?php echo"".$userinfo['Firstname']." ".$userinfo['Lastname'].""; ?></h5>
<br/>
<p><?php echo $userinfo['Description']; ?></p>
</div>
    </div>
		</br>
    
	<?php } } ?>
</div>
<br />