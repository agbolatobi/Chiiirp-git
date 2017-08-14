<?php
class Difftime {
      /* Member variables */
      var $Current_date;
      var $Previous_date;

      /* Member functions */
      function setCurrentdate($Cur_date){
         $this->Current_date = $Cur_date;
      }

      function getCurrentdate(){
         echo $this->Current_date;
      }
       function setPreviousdate($Pre_date){
         $this->Current_date = $Pre_date;
      }

      function getPreviousdate(){
         echo $this->Previous_date;
      }
	  function Cal_Diff($Cur_date,$Pre_date)
	  {
	 $this->Current_date = $Cur_date;
	 $this->Current_date = $Pre_date;
$diff = abs(strtotime($Cur_date) - strtotime($Pre_date));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$year_check=365*60*60*24;
$hour=floor($diff/3600);
$min= floor($diff/60);
         if($diff >= $year_check)
		 {if($years==1){
			 return $years."y";
			 }else{
				 return $years."ys";
				 }
			 }
		 else if($diff >= 2592000 && $diff <= $year_check)
		 {if($months==1){
			return $months."m"; }
			else{
				return $months."ms";
				}
		  }else if($diff >= 86400 && $diff <= 2592000)
		  { if($days==1){
			  return $days."d"; }
			  else{
				  return $days."ds";
				 }
		  }else if($diff >=3600  && $diff <= 86400)
		  {   if($hour==1){
			  return $hour."h";}
			  else{
				  return $hour."hs";
				  }
		  }
		  else if($diff <= 86400 && $diff >= 60)
		  { if($min==1){
			  return $min." m"; }
			  else
			  {
				  return $min."ms";
				 }
			 }
			 else
			 {
				 if($diff==1){
				 return $diff."s";}
				 else{
					 return $diff."s";
					 }
				}


			 }

   }
?>
