<?php
class search {
      /* Member variables */
      var $searchitem;

      /* Member functions */
      function setSearch($searchitem){
         $this->searchitem = $searchitem;
      }
	  function getSearch()
	  {
		  return searchitem;
	  }
	  function searchpostsajax($searchitem)
	  {
		  include"conn.php";
		  $tables=array("audios","text","video","link","video_embed","image","image_embed");
		  $table_column=array("Audio_title","Title","video_title","Link_title","video_title","Image_title","image_title");
		  $searchresult=array();
		  function likeajax($e) {
			  $result1 =str_replace("%" ,"",$e); 
		  $result2=str_replace("_" ,"",$result1);
		  if($result2 !== ''){
			  return $result2;
			}else{
				return"Chiiirp";
				}
			  }
      $search=mysqli_real_escape_string($conn,likeajax($searchitem));
		  for ($count = 0; $count <= 6; $count++) {
		$sql = "SELECT Post_id FROM ".$tables[$count]." where LOWER(".$table_column[$count].") LIKE LOWER('%/".$search."%') LIMIT 2";
	    $result = $conn->query($sql);
        if($result){
	    while($row = $result->fetch_assoc())
		{
		$searchresult[]=$row['Post_id'];
		}

		}
		else{
		  $searchresult[]=$tables[$count];
		  }
		}
		return $searchresult;
	  }
	   function searchposts($searchitem)
	  {
    


		  include"conn.php";
		  $tables=array("audios","text","video","link","video_embed","image","image_embed");
		  $table_column=array("Audio_title","Title","video_title","Link_title","video_title","Image_title","image_title");
		  $searchresult=array();
		  function likepost($e) {
		$result1 =str_replace("%" ,"",$e); 
		  $result2=str_replace("_" ,"",$result1);
		 if($result2 !== ''){
			  return $result2;
			}else{
				return"Chiiirp";
				}
		  }
		  
$search=mysqli_real_escape_string($conn,likepost($searchitem));
		  for ($count = 0; $count <= 6; $count++) {
		$sql = "SELECT Post_id FROM ".$tables[$count]." where LOWER(".$table_column[$count].") LIKE LOWER('%".$search."%') LIMIT 5";
	    $result = $conn->query($sql);
        if($result){
	    while($row = $result->fetch_assoc())
		{
		$searchresult[]=$row['Post_id'];
		}

		}
		else{
		  $searchresult[]=$tables[$count];
		  }
		}
		return $searchresult;
	  }
	    function searchusers($searchitem)
	  {
		  include"conn.php";
		  function like($e) { 
		  $result1 =str_replace("%" ,"",$e); 
		  $result2=str_replace("_" ,"",$result1);
		 if($result2 !== ''){
			  return $result2;
			}else{
				return"Chiiirp";
				}
		   }
		  $search=mysqli_real_escape_string($conn,like($searchitem));
		  $searchresult=array();
		  $sql = "SELECT User_id FROM users where LOWER(Username) LIKE LOWER('%".$search."%') or LOWER(Firstname) LIKE LOWER('%".$search."%') or LOWER(Lastname) LIKE LOWER('%".$search."%')LIMIT 5";
	    $result = $conn->query($sql);
        if($result){
		if(mysqli_num_rows($result)>0){
	     while($row = $result->fetch_assoc())
		{
		$searchresult[]=$row['User_id'];
		}
		return $searchresult;
		}else
		{
			return "empty";
		}
		}else{
		return "Error: " . $sql . "<br>" . $conn->error;;
		}
		  
	  }

}
?>
