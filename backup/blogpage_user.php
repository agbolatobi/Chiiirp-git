<?php
	if($row['Post_type']=="text"){
	$sql = "SELECT * FROM text where Post_id=$postid ";
$result_item = $conn->query($sql);
if($result_item){
	if ($result_item->num_rows > 0)
	{
		$row_item = $result_item->fetch_assoc();

		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>". $time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>"; ?>
        <?php
		echo"
	<div class=post>
            <div class=row>
				<div class=col-sm-2>
					<div class=profile><img src='".$userinfo['Profile_pic_link']."' width=80px height=100px /></div>
						<p>
							<h5 class=mini-profile>".$userinfo['Username']."</h5>
						</p>
						<p class=mini-profile>Sex : ".$userinfo['Sex']."</p>
						</div>
					<div class=col-sm-10 content>
                    <h3 class=title align=center>".$row_item['Title']."</h3>
                        <p>$row_item[Description]</p>
					</div>
                    </div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1  ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
                    <div class='col-sm-8 col-xs-3'>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment.php?id=".$postid."&type=".$row['Post_type']."'>Comment</a>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='Report.php?id=".$postid."&type=".$row['Post_type']."'>Report</a>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="'.$userinfo['Profile_pic_link'].'" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h2 class="title" align="center">'.$row_item['Audio_title'].'</h2>
					<div align="center">
                        <p><audio controls>
                             <source src="'.$row_item['Audio_link'].'" type='.$row_item['Audio_type'].'  >
                              Your browser does not support the audio element.
                            </audio></p></div>
					</div>
                    </div>
					<div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
                    <div class="col-sm-8 col-xs-3">
                    </div>
                    <div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment.php?id='.$postid.'&type='.$row['Post_type'].'"> Comment</a>
                    </div>
                    <div class="col-sm-1 col-xs-3">
                      <a class="bottomcontent" href="Report.php?id='.$postid.'&type='.$row['Post_type'].'">Report</a>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="'.$userinfo['Profile_pic_link'].'" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content">
                    <h3 class="title" align="center"><a href='.$row_item['Link_url'].' target="_blank">'.$row_item['Link_title'].'</a></h3>
                        <p></p>
					</div>
                    </div>
                  <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
                    <div class="col-sm-8 col-xs-3">
                    </div>
                    <div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment.php?id='.$postid.'&type='.$row['Post_type'].'">Comment</a>
                    </div>
                    <div class="col-sm-1 col-xs-3">
                      <a class="bottomcontent" href="Report.php?id='.$postid.'&type='.$row['Post_type'].'">Report</a>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="'.$userinfo['Profile_pic_link'].'" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					<div class="col-sm-10 content" align="center">
                    <h3 class="title" align="center">'.$row_item['video_title'].'</h3>
					 <video class="img-responsive"  width="500" height="450" controls>
  <source src="'.$row_item['video_link'].'" type='.$row_item['video_type'].'>
Your browser does not support the video tag.
</video>
                        <p></p>
					</div>
                    </div>
               <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
                    <div class="col-sm-8 col-xs-3">
                    </div>
                    <div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment.php?id='.$postid.'&type='.$row['Post_type'].'">Comment</a>
                    </div>
                    <div class="col-sm-1 col-xs-3">
                      <a class="bottomcontent" href="Report.php?id='.$postid.'&type='.$row['Post_type'].'">Report</a>
                    </div>
</div>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>"; ?>
		<?php echo"

	<div class='post'>
            <div class='row'>
        <div class='col-sm-2'>
          <div class='profile'><img src='".$userinfo['Profile_pic_link']."' width='80px' height='100px' /></div>
            <p>
              <h5 class='mini-profile'>".$userinfo['Username']."</h5>
            </p>
            <p class='mini-profile'>Sex : ".$userinfo['Sex']."</p>
            </div>
          <div class='col-sm-10 content'>
                    <h3 class='title' align='center'>".$row_item['video_title']."</h3>
                     <div align='center'><iframe width='750' src='embedframe.php?embed_link=".$row_item['frame_link']."' frameborder='0' scrolling='no' onload='resizeIframe(this)'></iframe></div>
          </div>
                    </div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
                    <div class='col-sm-8 col-xs-3'>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment.php?id=".$postid."&type=".$row['Post_type']."'>Comment</a>
                    </div>
                    <div class='col-sm-1 col-xs-3'>
                      <a class='bottomcontent' href='Report.php?id=".$postid."&type=".$row['Post_type']."'>Report</a>
                    </div>
</div>
                    </div>
        </div>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>";
		echo'
	<div class="post">
            <div class="row">
				<div class="col-sm-2">
					<div class="profile"><img src="'.$userinfo['Profile_pic_link'].'" width="80px" height="100px" /></div>
						<p>
							<h5 class="mini-profile">'.$userinfo['Username'].'</h5>
						</p>
						<p class="mini-profile">Sex : '.$userinfo['Sex'].'</p>
						</div>
					';
						if($row_item['Image_width'] > 550 || $row_item['Image_length'] > 350){
							if($row_item['Image_width'] <= $row_item['Image_length'])
							{
								$imageratio=($row_item['Image_width']/$row_item['Image_length']);
								$height=350;
								$width=$imageratio*$height;

							}
							else
							{
								$imageratio=($row_item['Image_length']/$row_item['Image_width']);
								$width=550;
							$height=$imageratio*$width;
							}
						echo'
					<div class="col-sm-10 content" align="center">
                    <h3 class="title" align="center">'.$row_item['Image_title'].'</h3>
		<img src="'.$row_item['Image_link'].'" alt="'.$row_item['Image_title'].'" class="img-responsive"  width="'.$width.'" height="'.$height.'" />
                        <p></p>
					</div>
					';}else
					{
					echo'
					<div class="col-sm-10 content" align="center">
                    <h3 class="title" align="center">'.$row_item['Image_title'].'</h3>
		<img src="'.$row_item['Image_link'].'" alt="'.$row_item['Image_title'].'" class="img-responsive"  width="'.$row_item['Image_width'].'"
		width="'.$row_item['Image_length'].'" />
                        <p></p>
					</div>
					';
					}
					echo'
					</div>
               <div class=bottomcontent><div class=row>';
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."  onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2' >
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo'
                    <div class="col-sm-8 col-xs-3 ">
                    </div>
                    <div class="col-sm-1 col-xs-2">
                      <a class="bottomcontent" href="comment.php?id='.$postid.'&type='.$row['Post_type'].'">Comment</a>
                    </div>
                    <div class="col-sm-1 col-xs-3">
                      <a class="bottomcontent" href="Report.php?id='.$postid.'&type='.$row['Post_type'].'">Report</a>
                    </div>
</div>
                    </div>
				</div>
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
		echo"<div class=row><div class=col-xs-10></div><div class=col-xs-2><p class='time'>".$time->Cal_Diff($currentdate,$row['Post_time'])."</p></div></div>"; ?>
		<?php echo"

	<div class='post'>
            <div class='row'>
        <div class='col-sm-2'>
          <div class='profile'><img src='".$userinfo['Profile_pic_link']."' width='80px' height='100px' /></div>
            <p>
              <h5 class='mini-profile'>".$userinfo['Username']."</h5>
            </p>
            <p class='mini-profile'>Sex : ".$userinfo['Sex']."</p>
            </div>";


                  echo'

					<div class="col-sm-10 content" align="center">
                    <h3 class="title" align="center">'.$row_item['image_title'].'</h3>
					<div><iframe src="embedframe.php?embed_link='.$row_item['link'].'" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="750"></iframe></div>
							</div>
					';
					echo"
                    </div>
                    <div class=bottomcontent><div class=row>";
					$sqlvote = "SELECT * FROM vote_log1 where Voter_id='$id' and Post_id='$postid' ORDER BY Vote_time DESC LIMIT 1 ";
                    $result_vote = $conn->query($sqlvote);
					$rowvote = $result_vote->fetch_assoc();
					if($rowvote['Vote_type']=="upvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." style='color:#847E7E;'> upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid."   onclick='downvote_again_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else if($rowvote['Vote_type']=="downvote")
					{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_again_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) id=".'downlink'.$postid." style='color:#847E7E;'>downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";
						}
					else{
						 echo"
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent href=javascript:void(0) id=".'uplink'.$postid." onclick='upvote_onClick(".$postid.")' > upvote</a><br />
					<p id=".'upnumber'.$postid.">".$vote->getUpvote($postid)."</p>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                    <a class=bottomcontent  href=javascript:void(0) onclick='downvote_onClick(".$postid.")' >downvotes</a><br />
					<p id=".'downnumber'.$postid.">".$vote->getDownvote($postid)."</p>

                    </div>
					";

						}
					echo"
                    <div class='col-sm-8 col-xs-3'>
                    </div>
                    <div class='col-sm-1 col-xs-2'>
                      <a class='bottomcontent' href='comment.php?id=".$postid."&type=".$row['Post_type']."'>Comment</a>
                    </div>
                    <div class='col-sm-1 col-xs-3'>
                      <a class='bottomcontent' href='Report.php?id=".$postid."&type=".$row['Post_type']."'>Report</a>
                    </div>
</div>
                    </div>
        </div>
                <br />
	";
	}
	}

	}
?>