<?php
class commentnumber {
      /* Member variables */
      var $postid;

      /* Member functions */
      function setpostid($postid){
      
         $this->postid = $postid;
      
      }
	   function getpostid(){
      
         return $this->postid;
      
      }
	  function getcommentnumber($postid)
	  {
		  include"conn.php";
      $sqlpost = "SELECT Discussion_id FROM discussion where Post_id = '$postid'";
   $result = $conn->query($sqlpost);
   if($result){
   	return mysqli_num_rows($result);
	}
	else {return 0;}
   }
	  
	  }
?>