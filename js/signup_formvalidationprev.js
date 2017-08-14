// JavaScript Document
$(document).ready(function(){
	var username=false;
	var firstname=false;
	var lastname=false;
	var email=false;
	var phoneno=false;
	var password=false;
	var passwordrematch=false;
$("#username").blur(function(){
    if($("#username").val().length <= 2)
	{ 
	username=false;
	$(".userlabel").empty();
	$(".userlabel").html("<p style='color:red'>username is too short</p>");	
	}
	else
	{
		username=true;
	$(".userlabel").empty();
	$(".userlabel").html("<p style='color:green'>Valid Username</p>");
	}
});

$("#firstname").blur(function(){
    if($("#firstname").val().length <= 1)
	{
		firstname=false;
	$(".firstlabel").empty();
	$(".firstlabel").html("<p style='color:red'>firstname is too short</p>");	
	
	}
	else
	{
		firstname=true;
	$(".firstlabel").empty();
	$(".firstlabel").html("<p style='color:green'>Valid firstname</p>");
	}
});
$("#lastname").blur(function(){
    if($("#lastname").val().length <= 1)
	{
		lastname=false;
	$(".lastlabel").empty();
	$(".lastlabel").html("<p style='color:red'>lastname is too short</p>");	
	}
	else
	{ 
	lastname=true;
	$(".lastlabel").empty();
	$(".lastlabel").html("<p style='color:green'>Valid lastname</p>");
	}
});
$("#email").blur(function(){
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(regex.test($("#email").val())== true){
		email=true;
	$(".emaillabel").empty();
	$(".emaillabel").html("<p style='color:green'>Valid Email</p>");	
	}else{
		email=false
	$(".emaillabel").empty();
	$(".emaillabel").html("<p style='color:red'>Invalid Email</p>");
	}
});
$("#phonenumber").blur(function(){
    if($.isNumeric($("#phonenumber").val())== false && $("#phonenumber").val().length <= 5)
	{
	 phoneno=false;
	$(".phonenumberlabel").empty();
	$(".phonenumberlabel").html("<p style='color:red'>invalid PhoneNumber</p>");	
	}
	else
	{
		phoneno=true;
	$(".phonenumberlabel").empty();
	$(".phonenumberlabel").html("<p style='color:green'>Valid Phone Number</p>");
	}
});
$("#password").blur(function(){
    if($("#password").val().length < 6)
	{
		password=false;
	$(".passwordlabel").empty();
	$(".passwordlabel").html("<p style='color:red'>invalid password</p>");	
	}
	else
	{
		password=true;
	$(".passwordlabel").empty();
	$(".passwordlabel").html("<p style='color:green'>Valid password</p>");
	}
});
$("#retypepassword").blur(function(){
    if($("#retypepassword").val() === $("#password").val())
	{
		passwordrematch=true;
	$(".passwordretypelabel").empty();
	$(".passwordretypelabel").html("<p style='color:green'>Passwords Match</p>");	
	}
	else
	{
		passwordrematch=false
	$(".passwordretypelabel").empty();
	$(".passwordretypelabel").html("<p style='color:red'>Passwords Don't Match</p>");
	}
});


$("#signup").mouseover(function(){
	
	if(username===true && firstname===true && lastname===true && email===true && phoneno===true && password===true && passwordrematch===true ){
		$("#signup").prop( "disabled", false );
		}else
		{
			$( "#signup" ).prop( "disabled", true );
			alert("Fill All Fields");
		}
	});
	$("#signup").mouseleave(function(){
		$("#signup").prop( "disabled", false );
	});
}); 