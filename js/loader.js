// JavaScript Document
$( document ).ready(function() {
	$("#imageloader").hide();
	$("#audioloader").hide();
	$("#videoloader").hide();
	$("#imagesubmit").click(function(){
		$("#imageloader").show()
		});
	$("#audiosubmit").click(function(){
		$("#audioloader").show()
	});
	$("#videosubmit").click(function(){
		$("#videoloader").show()
	});
});