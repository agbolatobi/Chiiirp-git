// JavaScript Document
$(document).ready(function(){
	$("#commentloader").hide();
 $("#combutton").click(function(){
	  var postid=$("#pid").val();
	 var comment=$("#comment").val();
	 $("#comment").val(" ");
	 $("#commentloader").show();
	 if(comment=="" || comment==" "){ }else{
			 $.post('ajax/addcomment.php', {postid : postid , comment : comment},function(data){
	              $("#comment_con").prepend(data);
				  $("#commentloader").hide();
				});}
				$("#commentloader").hide();
	 });
	 $("#subcombutton").click(function(){
		 
	  var idnum=$("#hiddendismessage").val();
	 alert("15")
	   
	  
	 });
	 });
	
			 
			 	 
