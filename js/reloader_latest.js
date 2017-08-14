// JavaScript Document
$( document ).ready(function() {
    sessionStorage.offset = 20;
});
var imagevisible=false;
$(window).scroll(function () {

if ($(window).scrollTop() + $(window).height() == $(document).height()) 
   {
	   if(imagevisible==false){
	   $("#content").append("<div id='loader' class='loader' align='center'><img src='image/loading/ajax-loader.gif' width='40' height='40' /> </div>")
	   imagevisible=true;
	   // handle the event here
	    $.post('ajax/content_latest.php', {offset : sessionStorage.offset },function(data){
				 $("#loader").remove();
				 imagevisible=false;
				  $("#content").append(data);
				  sessionStorage.offset=Number(sessionStorage.offset)+20;
				  FB.XFBML.parse();
				});
	   }
    
	
 }
});
