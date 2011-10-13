

<html lang="en">
<html xmlns:fb="https://www.facebook.com/2008/fbml">
 
<head> 
	<title>WishForge | a collaboration platform to make dreams come true.</title> 
	<link rel="shortcut icon" href="/ui/favicon.ico" type="image/x-icon" />
	<meta charset="utf-8"> 
	
	<!--	
	
	/*
		Main page.
		div for
			title
			pic
			buttons
			lists
	*/
	
	
	
	
	
	-->
	
	
	


	<!-- TABLESORTER stuff -->
		<!-- CSS for table sorter (table.js) -->
		<LINK href="wishforge.css" rel="stylesheet" type="text/css">
		<!-- script reference for table sorting and filtering (from http://www.javascripttoolbox.com/lib/table/index.php) -->
		<script type="text/javascript" src="http://www.fractalgames.com/js/table.js"></script> 
		<!--References for jquery tablesorter (functionality for sorting tables). See http://tablesorter.com for details. -->
	
	<!-- Jquery -->
		<script type="text/javascript" src="http://www.fractalgames.com/js/jquery-latest.js"></script> 
		<!-- Jquery Calendar CSS [this also allows for tabs.]-->
		<!-- <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		-->

	<!-- POPUP stuff -->
		<!-- CSS for popup script (from http://www.dynamicdrive.com/dynamicindex4/imagetooltip.htm)-->
		<LINK href="http://www.fractalgames.com/js/popup.css">
		<!-- JS for popup script (from http://www.dynamicdrive.com/dynamicindex4/imagetooltip.htm)-->
		<script type="text/javascript" src="http://www.fractalgames.com/js/popup.js"></script>

	<!-- Google Maps + Places API -->	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places"></script> 	


	<script> 	
	
		// JQuery scripts		
		/* Sticky header */ // Hack - actually doing this from the child windows, not this one. Ick
		var y=0;
		$(document).ready(function(){
			
			 $(window).scroll(function(){
			  // get the height of #wrap
				
			  y = $(window).scrollTop();
			  // alert ('y was '+y); 
			  if( y > (446) ){ // Check if we scrolled down past the tabs
			   
				   // if we are show keyboardTips
				   $("#sticky").fadeIn("fast");
		  		   $("#stickyMap").fadeIn("fast");				   
				  } else {
				   $('#sticky').fadeOut('fast');
				   $('#stickyMap').fadeOut('fast');
			  }
			  
			 });
			 
			 
			})
			
		// JQuery to dynamically change div heights
			function showHeight(ele, h) {
			      $("div").text("The height for the " + ele + 
			                    " is " + h + "px.");
			    }

	       $("#getp").click(function () { 
		      showHeight("paragraph", $("p").height()); 
		    });
		    
		    			    
			$("div").one('click', function () {
			      $(this).height(30)
			             .css({});
			    });
			
			
		// For mousover locations to hover map, see: http://api.jquery.com/mouseover/
		
			
			
			
			
			
			
 	</script>
	<script>
	function emailMe(subject,form) {
		/* alert ('test');*/ 
    	$.ajax({
            type: "POST",  
            url: "/php/EmailMe.php",  
            data: "subject="+subject
            	+"&message="+form.URL.value, 
            success: function(data){  
            	alert ('Thank you for your submission. '+form.URL.value+' has been received.');
                // alert('AddRowCoworking success: data was '+data);
                // On success, immediately redraw the div so the user can see the new values they just entered.
            },
            error: function (xhr, ajaxOptions, thrownError){
				//alert(xhr.statusText);
				//alert(thrownError);
				alert(xhr.statusText+', '+thrownError+' Error: your entry was not received. Please email it directly to charles@hactus.com and I will add it manually.');
            }
        });
	}
	
	
	function iFrameHeight (height) {
//		document.getElementById("iFrame").style.height = height;
		document.getElementById("notiframe").style.height = height;

	
	}
	
			
	function switchTab(url) {
		
		document.getElementById('tabIframeWrapper').innerHTML = 
			'<object id="notiframe" name="foo" type="text/html" data="'+url+'"></object>';

	}

	// Tabs functionality [from view-source:http://www.brainjar.com/css/tabs/demo.html] 
	function synchTab(n) {

	  // Check all links.
	  var tabs = document.getElementById("tabs");	
	  var elList = tabs.getElementsByTagName("A");
	  for (var i = 0; i < elList.length; i++) {

		    // Check if the link's target matches the frame being loaded.
		    if (i == n)  {  // If the link's URL matches the page being loaded, activate it.
		        elList[i].className += " activeTab";
		        elList[i].blur();
		      }
		      else removeName(elList[i], "activeTab"); // Otherwise, make sure the tab is deactivated.
		}
		
	}
	
	function removeName(el, name) {	  var i, curList, newList;	  if (el.className == null)    return;	  // Remove the given class name from the element's className property.
	  newList = new Array();	  curList = el.className.split(" ");	  for (i = 0; i < curList.length; i++)	    if (curList[i] != name)
	      newList.push(curList[i]);	  el.className = newList.join(" ");	}
	
	//]]>



	function fade(eid)	{
		var TimeToFade = 500; //ms
		var element = document.getElementById(eid);
		if(element == null)
		  return;
		 
		if(element.FadeState == null)
		{
		  if(element.style.opacity == null 
		      || element.style.opacity == '' 
		      || element.style.opacity == '1')
		  {
		    element.FadeState = 2;
		  }
		  else
		  {
		    element.FadeState = -2;
		  }
		}
		  
		if(element.FadeState == 1 || element.FadeState == -1)
		{
		  element.FadeState = element.FadeState == 1 ? -1 : 1;
		  element.FadeTimeLeft = TimeToFade - element.FadeTimeLeft;
		}
		else
		{
		  element.FadeState = element.FadeState == 2 ? -1 : 1;
		  element.FadeTimeLeft = TimeToFade;
		  setTimeout("animateFade(" + new Date().getTime() + ",'" + eid + "')", 33);
		}  
	}


	
		// Simple WaitForMiliseconds function
		function WaitForSeconds(seconds) 	{	
			millis = seconds * 1000;
			var date = new Date();	
			var curDate = null;
			do { curDate = new Date(); }  while(curDate-date < millis);
		} 

		
	function initialize() {
		// Select the first tab. 
		//synchTab(0);
		/*
		var t=setTimeout(function(){ 
			showMarkers(mapObject.events, markerColor.green)},
			750);
		*/
	}
		
	
	}

</script>




	
	<!-- Google Analytics -->	
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20709274-3']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	<!-- /Google Analytics -->
	
</head> 
<body> <!-- onload="initialize()"-->
	<div id="sticky" style="display:none"></div>
	<div id="stickyMap" style="display:none"></div>
<div id="whole document">
	<div id="header">
	
		<!-- wish picture -->
		<div id="picture"> <!-- style="background: url('/ui/wishforge_pic.png'); position:absolute; left:0%; top:0px;"-->	
			<img src="/ui/wishforge_pic.png">
		</div>
		
		
		<!-- WishForge Logo -->
		<div style="position:absolute; right:10%; z-index:10001; top:100px">
			<a href="http://www.wishforge.com">
				<img src="/ui/wishforge_logo.png" style="margin:10px;">
			</a>
		</div>
		
		<!-- line -->
		<div id="line" style="position:absolute; top:208px; left:640px">
			<img src="/ui/wishforge_line.png">
		</div>
			
		
		<!-- One Liner Elevator Pitch -->
		<div style="position:absolute; right:10%; z-index:10001; top:225px; width:35%">
			<font color=white><i>Collaboration platform that pays a cash prize to all participants who help make a wish come true.</i>
		</div>		
		
		<!-- Buttons --> 
			<!-- create a wish -->
			<div id="createWish" style="float: left; position:absolute; left:10%; top:415px;">
				<a href="CreateWish.html"><img src="/ui/wishforge_button_create.png"></a>	
			</div>
			
			<!-- How it works -->
			<div class="rounded" style="float: left; position:absolute; left:40%; top:415px;">
				<a href="HowItWorks.html"><img src="/ui/wishforge_button_how.png"></a>	
			</div>		
		
			<!-- How it works -->
			<div class="rounded" style="float: left; position:absolute; left:70%; top:415px;">
				<a href="About.html"><img src="/ui/wishforge_button_about.png"></a>	
			</div>	

			
		<!-- Hidden divs -->
			<!-- Funding Articles -->
			<div style="display:none;" id="fundingArticles">
				
							<br>
							<br>
							<br>
							<br>


			</div>
						
	<div id="icons" style="position:absolute; top:10px; z-index:1000; margin:auto; width:100%; white-space:nowrap;">

		
		<!-- feedback -->
		<div><!-- style="width:15%; position:absolute; top:10px; z-index:1000; margin:auto"-->
			<a href="mailto:charles@hactus.com?subject=WishForge feedback"><img src="/ui/feedback.png"></a>
		</div>
		
		<!-- Facebook Like button -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) {return;}
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#appId=122497581184323&xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div> <!-- position:absolute; left:70%; top:185px; z-index:1000;  -->
		<fb:like href="www.hactus.com" send="false" width="250" show_faces="false" action="recommend" colorscheme="light" font="arial"></fb:like> </div>

		<!-- Twitter Tweet  -->
		<div style=" width:225px"> <!-- position:absolute; left:70%; top:225px; z-index:1000; -->
			<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
			<a href="https://twitter.com/share" class="twitter-share-button"data-count="horizontal" data-via="theleanstartup" data-related="hactus:Check out the Cheat Sheet for Startups - funding, programs, and more!">
				Tweet
			</a>
		</div>
		
		<!-- Twitter Follow  -->
		<div style="width:225px">	<!-- position:absolute; left:70%; top:260px; z-index:1000; -->
			<a href="https://twitter.com/hactus" class="twitter-follow-button" data-show-count="false">
				Follow @hactus
			</a>	
		</div>		
	
	<!-- Subscribe / email submisison -->
		<div style="width:25%"> <!-- position:absolute; left:70%; top:290px; -->
			<font size=3>Subscribe to our newsletter:
			<br>
			<form><input type="text" 
					name="URL" 
					value="you@example.com"
					onClick="this.select();"
					style="width:55%">
				<input type="submit" 
					value="Submit" 
					class ="button" 
					onClick="emailMe('someone subscribed to WishForge updates.',this.form);"
					style="width:25%"> 
			</form>
		</div>

	</div>


	
	
	<!-- place you jump to if you hit a new tab -->
	<div id="divMarker">
	
		 </center>
		 <br>
		<font size=4>
		
		
	
		<center>
		<div class="tabBox" style="clear:both; position:relative; top:300px;">
		
		
		</div>
		 
	</body> 
</html> 