// JavaScript Document
$(document).ready(function(){
 $("#searchquery").keyup(function(){
	  var searchquery=$("#searchquery").val();
			 $.post('ajax/search.php', {searchquery : searchquery },function(data){
				 $( "#searchlist" ).empty();
				  $("#searchlist").append(data);
				  return false;
				});
	 });
	 
	 });