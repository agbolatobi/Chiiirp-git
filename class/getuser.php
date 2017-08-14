<?php
class Userinfo {
      /* Member variables */
      var $user_id;

      /* Member functions */
      function setUserid($user_id){
         $this->User_id = $user_id;
      }
	  function getinfo($user_id)
	  {
		include"conn.php";
		$sql = "SELECT Username, Profile_pic_link, Sex FROM users where User_id = '$user_id' ";
	    $result = $conn->query($sql);
        if($result){
	    $row = $result->fetch_assoc();
		$user=$row;
		if(empty($user['Profile_pic_link']))
		{$user['Profile_pic_link']="profile/no-profile-img-240x300.gif";}
		return $user;
	    }else
		{
		$user = array("Username"=>"Not Returned", "Sex"=>"Not Returned", "Profile_pic_link"=>"image/profile/no-profile-img-240x300.gif");

			}
	    }
		function getsearch($user_id)
	  {
		include"conn.php";
		$sql = "SELECT Username, Firstname, Lastname, Profile_pic_link, Sex, Description FROM users where User_id = '$user_id' ";
	    $result = $conn->query($sql);
        if($result){
	    $row = $result->fetch_assoc();
		$user=$row;
		if(empty($user['Profile_pic_link']))
		{$user['Profile_pic_link']="profile/no-profile-img-240x300.gif";}
		return $user;
	    }else
		{
		$user = array("Username"=>"Not Returned", "Firstname"=>"Not Returned", "Lastname"=>"Not Returned", "Sex"=>"Not Returned", "Profile_pic_link"=>"image/profile/no-profile-img-240x300.gif");

			}
	    }
      function getall($user_id)
      {
      include"conn.php";
      $sql = "SELECT * FROM users where User_id = '$user_id' ";
        $result = $conn->query($sql);
          if($result){
        $row = $result->fetch_assoc();
      $user=$row;
      if(empty($user['Profile_pic_link']))
      {$user['Profile_pic_link']="profile/no-profile-img-240x300.gif";}
      return $user;
        }else
      {
      $user = array("Username"=>"Not Returned", "Sex"=>"Not Returned", "Profile_pic_link"=>"image/profile/no-profile-img-240x300.gif");

        }
        }
}
?>
