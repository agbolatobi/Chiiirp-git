// JavaScript Document

         function upvote_onClick(postid){
			 var up="#upnumber";
				 var id = up.concat(postid);
				 var store=$(id).text();
				 var newvalue=parseInt(store)+1;
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+ iduplink +" style='color:#847E7E;'> <i class='fa fa-thumbs-up size' aria-hidden='true'></a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+"  onclick='downvote_again_onClick("+postid+")' ><i class='fa fa-thumbs-down size' aria-hidden='true'></a>"
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
			 $.post('ajax/upvote.php', {postid : postid},function(data){
				 // $(id).text(data);
				 $(id).text(newvalue);
				 });

			 	 }
				  function downvote_onClick(postid){
					  var down="#downnumber";
				 var id = down.concat(postid);
				 var store=$(id).text();
				 var newvalue=parseInt(store)-1;
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+'uplink'+postid+" onclick='upvote_again_onClick("+postid+")' > <i class='fa fa-thumbs-up size' aria-hidden='true'></a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+" style='color:#847E7E;'><i class='fa fa-thumbs-down size' aria-hidden='true'></a>";
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
			 $.post('ajax/downvote.php', {postid : postid},function(data){

				// $(id).text(data);
				$(id).text(newvalue);

				 });

			 	 }
				  function upvote_again_onClick(postid){
					  	 var up="#upnumber";
				 var down="#downnumber"
				 var id = up.concat(postid);
				 var id2=down.concat(postid);
				 var storedown=$(id2).text();
				 var storeplus=$(id).text();
				 var newstore=parseInt(storedown)-1;
				 var newstoreplus=parseInt(storeplus)+1;
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				// $(id).text(data);
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+'uplink'+postid+" style='color:#847E7E;'> <i class='fa fa-thumbs-up size' aria-hidden='true'></a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+"  onclick='downvote_again_onClick("+postid+")' ><i class='fa fa-thumbs-down size' aria-hidden='true'></a>"
				 $(iduplink).replaceWith(upreplace);
				 $(iddownlink).replaceWith(downreplace);
				 $(id2).text(newstore);
				 $(id).text(newstoreplus);
			 $.post('ajax/reupvote.php', {postid : postid},function(data){
			

				
				 });

			 	 }
				  function downvote_again_onClick(postid){
					   var up="#upnumber";
				 var down="#downnumber";
				 var id = down.concat(postid);
				 var id2=up.concat(postid);
				 var store=$(id2).text();
				  var storeplus=$(id).text();
				 var newstore=parseInt(store)-1;
				  var newstoreplus=parseInt(storeplus)+1;
				 var uplink="#uplink"
				 var downlink="#downlink"
				 var iduplink=uplink.concat(postid);
				 var iddownlink=downlink.concat(postid);
				// $(id).text(data);
				 var upreplace="<a class=bottomcontent href=javascript:void(0) id="+'uplink'+postid+" onclick='upvote_again_onClick("+postid+")' > <i class='fa fa-thumbs-up size' aria-hidden='true'></a>";
 var downreplace="<a class=bottomcontent  href=javascript:void(0) id="+'downlink'+postid+" style='color:#847E7E;'><i class='fa fa-thumbs-down size' aria-hidden='true'></a>";
				 $(iduplink).replaceWith(upreplace);
         var check=$(iduplink).text();
				 $(iddownlink).replaceWith(downreplace);
				 $(id2).text(newstore);
				 $(id).text(newstoreplus);
			 $.post('ajax/redownvote.php', {postid : postid},function(data){
				
				 });}
