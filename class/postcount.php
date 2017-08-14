<?php
class postcount{
      /* Member variables */
      var $User_id;
      
      /* Member functions */
     
	  function getUserview($User_id)
	  {
		  include"conn.php";
		$sql = "SELECT Post_id FROM posts where User_id = '$User_id' ";
	    $result = $conn->query($sql);
        if($result){
		  $rowcount=mysqli_num_rows($result);
		  return $rowcount;
		}
		else{
			return 0;
		}
	  }
	}
?>