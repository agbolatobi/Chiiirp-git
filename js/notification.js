// JavaScript Document
$( document ).ready(function() {
	sessionStorage.Loginstatus="Loggedin";
	if (!sessionStorage.iconstatus) {
		sessionStorage.iconstatus="unchecked";
		}
		 if(sessionStorage.iconstatus==="unchecked"){ 
			 $.post('ajax/notificationview.php',function(data){
				  
				  if(data==="empty"){}
					 else{
				
					 $('#notificationicon').css("color","red");
					 $("#notifications").prepend(data);
					 sessionStorage.iconstatus="checked";
					}

		  });
			 }
              

	
				});
				$('#notificationbutton').click(function() {
					 $('#notificationicon').css("color","#1c97b5");
					 sessionStorage.iconstatus="checked";
					});
 function User_Notification_onClick(usernotificationid){
	 var part="#";
	 var id=part.concat(usernotificationid);
	 var notificationlink=$(id).val()
	  $.post('ajax/updatenotificationstatus.php', {usernotificationid : usernotificationid},function(data){
		  window.location.href=notificationlink;
		  });
	 
 }
 setInterval(function(){ 
 $.post('ajax/checkernotificationview.php',function(data){
	 if(data=="empty"){
		 
	 }else{
					  $('#notificationicon').css("color","red");
					   $("#notifications").prepend(data);}
					  
				 
				  });
  }, 200000);