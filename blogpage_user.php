<?php
	if($row['Post_type']=="text"){
	$sql = "SELECT * FROM text where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post text'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post text'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div> <div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	} ?>
        <?php
		echo"

            <div class=row>

					<div class=col-sm-12 content>
                   <a class=title href='comment?id=".$postid."&type=".$row['Post_type']."'> <h3 class=title align=center>".$row_item['Title']."</h3></a>
                        <pre class='prestyle'>".$row_item[Description]."</pre>
					</div>
                    </div>
		<div class=row ><div class='col-sm-12 displayname' align='right' >posted by ";?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo"</div></div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1  ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' >   <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >   <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
					<div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment?id=".$postid."&type=".$row['Post_type']."'><i class='fa fa-comment size' aria-hidden='true'></i></a>
					  <br />
					  <p>".$commentnummber->getcommentnumber($postid)."</p>
                    </div>
                    <div class='col-sm-5'>
                    </div>
					<div class='col-sm-2 col-xs-3' align='right'>
					<!-- Your share button code -->
	              <div class='fb-share-button' 
		          data-href='http://www.ravcontest.com/upforposts/comment?id=".$postid."&type=".$row['Post_type']."' 
		          data-layout='button_count'>
	               </div>
	             </div>
                    <div class='col-sm-2 col-xs-3'>      			   
 <a href='https://twitter.com/share'
				  data-text='".$row_item['Title']."'
                  data-url='http://www.ravcontest.com/upforposts/comment?id=".$postid."&type=".$row['Post_type']."'
				   class='twitter-share-button' data-show-count='false'  >Tweet</a>
	  <script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>
</div>
                    </div>
        </div>
        </div>
                <br />
	";
	}
	}

	}
	else if($row['Post_type']=="audio"){
	$sql = "SELECT * FROM audios where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post audio'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."&link=".$row_item['Audio_link']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post audio'>
  <div class=row><div class=col-xs-3><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    
    <li><a  href='report?id=".$postid."&type=".$row['Post_type']."'></a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	}
		echo'
            <div class="row">
					<div class="col-sm-12 content">
                    <a class=title href="comment?id='.$postid."&type=".$row['Post_type'].'"><h2 class="title" align="center">'.$row_item['Audio_title'].'</h2></a>
					<div align="center">
                        <p><audio controls preload="none">
                             <source src="'.$row_item['Audio_link'].'" type='.$row_item['Audio_type'].'  >
                              Your browser does not support the audio element.
                            </audio></p></div>
					</div>
                    </div>
					<div class=row ><div class="col-sm-12 displayname" align="right" >posted by ';?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo'</div></div>
					<div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >   <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
					<div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment?id='.$postid.'&type='.$row['Post_type'].'"><i class="fa fa-comment size" aria-hidden="true"></i></a>
					    <br />
					  <p>'.$commentnummber->getcommentnumber($postid).'</p>
                    </div>
                    <div class="col-sm-5">
                    </div>
					<div class="col-sm-2 col-xs-3 fbsharebtn" align="right">
					<!-- Your share button code -->
	              <div class="fb-share-button" 
		          data-href="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'" 
		          data-layout="button_count">
	               </div>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                      <a href="https://twitter.com/share"
				  data-text="'.$row_item['Audio_title'].'"
                  data-url="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'"
				   class="twitter-share-button" data-show-count="false"  >Tweet</a>
	  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                   </div>
                    </div>

				</div>
				 </div>
                <br />
	';
	}
	}

	}
	else if($row['Post_type']=="link"){
	$sql = "SELECT * FROM link where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
		if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post link'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post link'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	}
		echo'
            <div class="row">
					<div class="col-sm-12 content">
                    <h3 class="title" align="center"><a href='.$row_item['Link_url'].' target="_blank">'.$row_item['Link_title'].'</a></h3>
                        <p></p>
					</div>
                    </div>
					<div class=row ><div class="col-sm-12 displayname" align="right" >posted by ';?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo'</div></div>
                  <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
					<div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment?id='.$postid.'&type='.$row['Post_type'].'"><i class="fa fa-comment size" aria-hidden="true"></i></a>
					    <br />
					  <p>'.$commentnummber->getcommentnumber($postid).'</p>
                    </div>
					<div class="col-sm-5">
                    </div>
					<div class="col-sm-2 col-xs-3 fbsharebtn" align="left">
					<!-- Your share button code -->
	              <div class="fb-share-button" 
		          data-href="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'" 
		          data-layout="button_count">
	               </div>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <a href="https://twitter.com/share"
				  data-text="'.$row_item['Audio_title'].'"
                  data-url="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'"
				   class="twitter-share-button" data-show-count="false"  >Tweet</a>
	  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></a>
</div>
                    </div>
				</div>
				 </div>
                <br />
	';
	}
	}

	}
	else if($row['Post_type']=="video"){
	$sql = "SELECT * FROM video where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
	if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post video'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."&link=".$row_item['video_link']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post video'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	}
		echo'
            <div class="row">
					<div class="col-sm-12 content" align="center">
                   <a class=title href="comment?id='.$postid."&type=".$row['Post_type'].'"> <h3 class="title" align="center">'.$row_item['video_title'].'</h3></a>
					 <video preload="none" class="img-responsive"  width="500" height="450" controls>
  <source src="'.$row_item['video_link'].'" type='.$row_item['video_type'].'>
Your browser does not support the video tag.
</video>
                        <p></p>
					</div>
                    </div>
					<div class=row ><div class="col-sm-12 displayname" align="right" >posted by ';?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo'</div></div>
               <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >   <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
					<div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment?id='.$postid.'&type='.$row['Post_type'].'"><i class="fa fa-comment size" aria-hidden="true"></i></a>
					    <br />
					  <p>'.$commentnummber->getcommentnumber($postid).'</p>
                    </div>
                    <div class="col-sm-5">
                    </div>
					<div class="col-sm-2 col-xs-3 fbsharebtn" align="left">
				  <!-- Your share button code -->
	              <div class="fb-share-button" 
		          data-href="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'" 
		          data-layout="button_count">
	               </div>
                    </div>
                    
                    <div class="col-sm-2 col-xs-3">
                   <a href="https://twitter.com/share"
				  data-text="'.$row_item['Audio_title'].'"
                  data-url="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'"
				   class="twitter-share-button" data-show-count="false"  >Tweet</a>
	  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div></div>
                    </div>
				</div> 
                <br />
	';
	}
	}

	}
	else if($row['Post_type']=="videoembed"){
	$sql = "SELECT * FROM video_embed where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
	if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post videoembed'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post videoembed'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	}?>
		<?php echo"
            <div class='row'>
          <div class='col-sm-12 content'>
                    <a class=title href='comment?id=".$postid."&type=".$row['Post_type']."'><h3 class='title' align='center'>".$row_item['video_title']."</h3></a>
                     <div align='center'><iframe width='750' src='embedframe?embed_link=".$row_item['frame_link']."' frameborder='0' scrolling='no' onload='resizeIframe(this)'></iframe></div>
          </div>
                    </div>
					<div class=row ><div class='col-sm-12 displayname' align='right' >posted by ";?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo"</div></div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
					 <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment?id=".$postid."&type=".$row['Post_type']."'><i class='fa fa-comment size' aria-hidden='true'></i></a>
					    <br />
					  <p>".$commentnummber->getcommentnumber($postid)."</p>
                    </div>
					<div class='col-sm-5'>
                    </div>
					<div class='col-sm-2 col-xs-3 fbsharebtn' align='left'>

					<!-- Your share button code -->
	              <div class='fb-share-button' 
		          data-href='http://www.ravcontest.com/upforposts/comment?id=".$postid."&type=".$row['Post_type']."' 
		          data-layout='button_count'>
	               </div>
				  
		
                    </div>
                   
                    <div class='col-sm-2 col-xs-3'>
	  <a href='https://twitter.com/share'
				  data-text='".$row_item['video_title']."'
                  data-url='http://www.ravcontest.com/upforposts/comment?id=".$postid.'&type='.$row['Post_type']."'
				   class='twitter-share-button' data-show-count='false'  >Tweet</a>
	  <script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>
</div>
                    </div>
        </div> </div>
                <br />
	";
	}
	}

	}
	else if($row['Post_type']=="image"){
	$sql = "SELECT * FROM image where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
	if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post image'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."&link=".$row_item['Image_link']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post image'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	}
		echo'
            <div class="row">
					';
					echo'
					<div class="col-sm-12 content" align="center">
                    <a class=title href="comment?id='.$postid."&type=".$row['Post_type'].'"><h3 class="title" align="center">'.$row_item['Image_title'].'</h3></a>
		<img src="'.$row_item['Image_link'].'" alt="'.$row_item['Image_title'].'" class="img-responsive"  />

					</div>
					';

					echo'
					</div>
					<div class=row ><div class="col-sm-12 displayname" align="right" >posted by ';?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo'</div></div>
               <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
					 <div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment?id='.$postid.'&type='.$row['Post_type'].'"><i class="fa fa-comment size" aria-hidden="true"></i></a>
					    <br />
					  <p>'.$commentnummber->getcommentnumber($postid).'</p>
                    </div>
                    <div class="col-sm-5">
                    </div>
					 <div class="col-sm-2 col-xs-3 fbsharebtn">
	  <!-- Your share button code -->
	  <div class="fb-share-button"  data-href="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'" data-layout="button_count">
	               </div>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                      <a href="https://twitter.com/share"
				  data-text="'.$row_item['Image_title'].'"
                  data-url="http://www.ravcontest.com/upforposts/comment?id='.$postid.'&type='.$row['Post_type'].'"
				   class="twitter-share-button" data-show-count="false"  >Tweet</a>
	  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
                    </div>
				</div>  </div>
                <br />
	';
	}
	}

	}
	else if($row['Post_type']=="imageembed"){
	$sql = "SELECT * FROM image_embed where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();
	if($_SESSION["User_id"]==$row['User_id']){
		echo"<div class='post imageembed'> <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
    <li><a href='Update?postid=".$postid."&posttype=".$row['Post_type']."'>Update</a></li>
    <li><a href='includes/deleteposts?postid=".$postid."&posttype=".$row['Post_type']."'>Delete</a></li>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul>
</div> </div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";}else{
	echo"<div class='post imageembed'>
  <div class=row><div class='col-xs-3'><div class=dropdown>
  <button class='btn dropdown-toggle transparent' type=button data-toggle=dropdown><i class='fa fa-ellipsis-h size' aria-hidden='true'></i></button>
  <ul class='dropdown-menu'>
	<li><a href='report?id=".$postid."&type=".$row['Post_type']."'>Report</a></li>
  </ul></div>
</div><div class=col-xs-7></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
	} ?>
		<?php echo"
            <div class='row'>";


                  echo'

					<div class="col-sm-12 content" align="center">
                   <a class=title href="comment?id='.$postid."&type=".$row['Post_type'].'"> <h3 class="title" align="center">'.$row_item['image_title'].'</h3></a>
					<div><iframe src="embedframe?embed_link='.$row_item['link'].'" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="750"></iframe></div>
							</div>
					';
					echo"
                    </div>
					<div class=row ><div class='col-sm-12 displayname' align='right' >posted by ";?>
        <?php if($row['Post_Visibility']=="Anonymous"){echo"<a href='#'>Anonymous</a>";}else{
        echo"<a href='user_profile?id=".$row['User_id']."'>".$userinfo['Username']."</a>";}
        ?>
		<?php echo"</div></div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-up vote' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > <i class='fa fa-thumbs-up vote' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-up size' aria-hidden='true'></i></a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >  <i class='fa fa-thumbs-down size' aria-hidden='true'></i></a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
					  <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment?id=".$postid."&type=".$row['Post_type']."'><i class='fa fa-comment size' aria-hidden='true'></i></a>
					    <br />
					  <p>".$commentnummber->getcommentnumber($postid)."</p>
                    </div>
                    <div class='col-sm-5'>
                    </div>
					<div class='col-sm-2 col-xs-3 fbsharebtn'>
			
					<!-- Your share button code -->
	              <div class='fb-share-button' 
		          data-href='http://www.ravcontest.com/upforposts/comment?id=".$postid."&type=".$row['Post_type']."' 
		          data-layout='button_count'>
	               </div>
                    </div>
                    <div class='col-sm-2 col-xs-3'>
                         <a href='https://twitter.com/share'
				  data-text='".$row_item['image_title']."'
                  data-url='http://www.ravcontest.com/upforposts/comment?id=".$postid.'&type='.$row['Post_type']."'
				   class='twitter-share-button' data-show-count='false'  >Tweet</a>
	  <script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>
</div>
                    </div>
        </div>  </div>
                <br />
	";
	}
	}

	}
?>
