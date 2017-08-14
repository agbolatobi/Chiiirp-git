// JavaScript Document

         function upvote_onClick(postid){
			 $.post('ajax/upvote.php', {postid : postid},function(data){
				 var up="#upnumber";
				 var id = up.concat(postid);
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 $(id).text(data);
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+ iduplink +" style='color:#847E7E;'> upvote</a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+"  onclick='downvote_again_onClick("+postid+")' >downvotes</a>"
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
				 
				 });
			 
			 	 }
				  function downvote_onClick(postid){
			 $.post('ajax/downvote.php', {postid : postid},function(data){
				 var down="#downnumber";
				 var id = down.concat(postid);
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 $(id).text(data);
var upreplace="<a class=bottomcontent href=javascript:void(0) id="+'uplink'+postid+" onclick='upvote_again_onClick("+postid+")' > upvote</a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+" style='color:#847E7E;'>downvotes</a>";
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
				 
				 });
				 
			 	 }
				  function upvote_again_onClick(postid){
			 $.post('ajax/reupvote.php', {postid : postid},function(data){
				 var up="#upnumber";
				 var down="#downnumber"
				 var id = up.concat(postid);
				 var id2=down.concat(postid);
				 var store=$(id2).text();
				 var newstore=store-1;
				  var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 $(id).text(data);
				 
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+ iduplink +" style='color:#847E7E;'> upvote</a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+"  onclick='downvote_again_onClick("+postid+")' >downvotes</a>"
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
				 $(id2).text(newstore);
				 });
			 
			 	 }
				  function downvote_again_onClick(postid){
			 $.post('ajax/redownvote.php', {postid : postid},function(data){
				 var up="#upnumber";
				 var down="#downnumber";
				 var id = down.concat(postid);
				 var id2=up.concat(postid);
				 var store=$(id2).val();
				 var newstore=store-1;
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 $(id).text(data);
				 
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+'uplink'+postid+" onclick='upvote_again_onClick("+postid+")' > upvote</a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+" style='color:#847E7E;'>downvotes</a>";
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
				 $(id2).text(newstore);
				 });}