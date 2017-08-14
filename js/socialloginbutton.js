// JavaScript Document
$("#fbbutton").hide();
function fblogin()
{
	console.log("loggedin");
	sessionStorage.Loginstatus=undefined;
	checkLoginState();
}