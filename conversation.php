<?php
$member_id=0;
$member_name='';		

if(isset($_GET['id']))
{
  $member_id=$_GET['id'];
  $strJsonFileContents = file_get_contents("members.json"); 
  $json_data = json_decode($strJsonFileContents, true);

       

  //var_dump($json_data);             

  for($i=0;$i<count($json_data['Members']);$i++)
  {
    
    if(in_array($member_id,$json_data['Members'][$i]))   
    {
    	$member_name=$json_data['Members'][$i]['name'];   
    	$member_chats=$json_data['Members'][$i]['chat'];   
    }

  }  								
}

											

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-640x920.png">
<title>Hookup | Chat Line</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/style.min.css">
<link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/main.min.css">
<link rel="stylesheet" href="css/spanel.css">

</head>
<body id="mobile_wrap">

    <div class="panel-overlay"></div>

	<!-- Left panel -->
	<div id="panel-left"></div>
	<!-- Right panel -->
	<div id="panel-right"></div>
	<!-- Bottom panel -->
	<div id="panel-bottom"></div>

    <div class="views">

      <div class="view view-main">			
	  
<div class="pages">
  <div data-page="conversation" class="page page--conversation chat-bot-page">
    <div class="page-content">
		<div class="navbar navbar--fixed navbar--fixed-top navbar--page">
			<div class="navbar__col navbar__col--icon navbar__col--icon-left">
				<a href="lp-catbot.php?id=<?php echo $member_id;?>"><img src="images/back-btn.png" alt="" title="" /></a>		
			</div>
			<div class="navbar__col navbar__col--title navbar__col--title-sm navbar__col--title-centered">
				<h2><?php echo $member_name;?></h2>													
			</div>
			<div class="navbar__col navbar__col--icon navbar__col--icon-right">
			</div>
        </div>
											
     	<div id="pages_maincontent" class="pages_maincontent--conversation chatting-sec">
			<div class="page_single layout_fullwidth_padding">	
	    		<section id="demo" class="chatting-form-sec">
					<div class="card no-border">
                        <div id="chat" class="conv-form-wrapper">								
							<form action="" method="GET" class="hidden">
							<?php
							foreach($member_chats[0] AS $key=>$val)
							{
								if(strstr("$val","@"))
								{
									$place_text="<a href='#'>$val</a>";			
								?>									
								<input type="text" name="name" data-conv-question="<a href='#'><?php echo $place_text;?></a>" data-no-answer="true"> 				
								<?php 	
								}
								else
								{
									echo "<input type='text' data-conv-question='$val' data-no-answer='true'>";					
								}

							}

							?>		

                                								 
                                                    
                            <!--                        
                                 <input type="text" name="name" data-conv-question="<a href='#'>@Profile: mala2: mala2 sends a link to her profile. Click to connect with mala2 and others you may know. Get the power to share and make the world more open and connected.</a>" data-no-answer="true">   --->						
								
								 <input type="text" name="name" data-conv-question="see my profile:" data-callback="openmodal">                                                                                      
								 
											        

								<!---
								 <input type="text" name="name" data-conv-question="see my profile:">
								 
								 <input type="text" name="name" data-conv-question="@Profile: mala2: mala2 sends a link to her profile. Click to connect with mala2 and others you may know. Get the power to share and make the world more open and connected.">
								 
								 <input type="text" name="name" data-conv-question="hookup does not allow unverified users to create sex requests">
								 <input type="text" name="name" data-conv-question="make an account there and let me kno">
								 
								 <input type="text" name="name" data-conv-question="u'll stick me with your dick">
								 
								 <input type="text" name="name" data-conv-question="u'll eat my pussy">
								 
								 <input type="text" name="name" data-conv-question="no limits there, just sign up">
								 
								 <input type="text" name="name" data-conv-question="@Profile: Ryan: Ryan sends a link to her profile. Click to connect with Ryan and others you may know. Get the power to share and make the world more open and connected.no limits there, just sign up">		
								 <input type="text" name="name" data-conv-question="hookup does not allow unverified users to create sex requests">
								 
								 <input type="text" name="name" data-conv-question="make an account there and let me kno">
								 
								 <input type="text" name="name" data-conv-question="u'll stick me with your dick">
								 
								 <input type="text" name="name" data-conv-question="u'll eat my pussy">
								 
								 <input type="text" name="name" data-conv-question="no limits there, just sign up">
								 
								 <input type="text" name="name" data-conv-question="do you want to see my boobs first?">
								 
								 <input type="text" name="name" data-conv-question="liked 'em?">	
								 <input type="text" name="name" data-conv-question="lets fuck, get down to business :)">	
								 <input type="text" name="name" data-conv-question="@Profile: formysta24: formysta24 sends a link to her profile. Click to connect with formysta24 and others you may know. Get the power to share and make the world more open and connected.">	
								 
								 <input type="text" name="name" data-conv-question="I'll be here waiting online">	
								 
								 <input type="text" name="name" data-conv-question="wow, you 1st who writes to me..">	
								 <input type="text" name="name" data-conv-question="do you really think we can fuck?">	
								 
								 <input type="text" name="name" data-conv-question="add me to friends on this website:">	
								 
								 <input type="text" name="name" data-conv-question="@Profile: shadyLady: shadyLady sends a link to her profile. Click to connect with shadyLady and others you may know. Get the power to share and make the world more open and connected.">	
								 
								 <input type="text" name="name" data-conv-question="seeeeex wow u'r fast">	
								 <input type="text" name="name" data-conv-question="i have not even seen you">	
								 
								 <input type="text" name="name" data-conv-question="do have a big dick?">	
								 <input type="text" name="name" data-conv-question="???">	
								 
								 <input type="text" name="name" data-conv-question="do you even have dick lol, i'm not a lesbian">	
								 
								 <input type="text" name="name" data-conv-question="okay, you can verify yourself here">	
								 
								 <input type="text" name="name" data-conv-question="@Profile: ImaniSexy: ImaniSexy sends a link to her profile. Click to connect with ImaniSexy and others you may know. Get the power to share and make the world more open and connected.">	
								 
								 <input type="text" name="name" data-conv-question="there are verified profiles, we can hook up there">	
								 
								 <input type="text" name="name" data-conv-question="c ya" data-callback="openmodal">	---->							
                            </form>
                        </div>         
				    </div>
				</section>
    

			  
			  
         </div>
      
      </div>
      
      
    </div>
  </div>
</div>
         </div>
    </div>

    <!--  Popup -->
    <button type="button" id="hangoutButtonId" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display:none;">Open Modal</button>		
	<div id="myModal" class="modal fade cta-popup" role="dialog">							
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <div class="popup-img">
	        	<img src="images/popup.jpg">
	        </div>
	        <div class="popup-status">
	        	<h3>Flirtylatina</h3>
	        	<p>Status: <b>OFFLINE</b></p>
	        </div>
	      </div>
	      <div class="modal-body">
	        <p>"I am offline here. You can find my profile on another site."</p>
	        <a href="#" class="cta-btn btn btn-access">VIEW PROFILE</a>
	      </div>
	    </div>

	  </div>
	</div>


<!-- Start of Modal for iPhone -->
<div class="cd-panel from-bottom">
			<div class="cd-panel-container">
				<header class="cd-panel-header">
					<a href="javascript:void(0)" class="cd-panel-close">Close</a>
				</header>
				<div class="cd-panel-content">
					<div class="frame-container container">
                        <!-- iframe goes here -->
					</div>
				</div>
			</div>
		</div>
<!-- End of Modal for iPhone -->

    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>													
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>			
	<script type="text/javascript" src="js/autosize.min.js"></script>
	<script type="text/javascript" src="js/jquery.convform.js"></script>

	<script>
		function openmodal(stateWrapper, ready)
		{
			//window.open("https://msn.com");									
			//alert('got this');								
			
			//$("#myModal").modal('show');									
			var hangoutButton = document.getElementById("hangoutButtonId");
			hangoutButton.click();												
			//$('#myModal').modal('show');								
			//ready();			
		}
		
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});			
			console.log(convForm);
		});
	</script>

<!-- Start of Sript for iframe -->
	<script>
		$(document).ready(function($){
	'use strict';
	
	$('.btn-access').on('click', function(event){
		event.preventDefault();
		$('.cd-panel').addClass('is-visible');
	});
	
	$('.cd-panel-close').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});
});
	</script>
<!-- Start of Sript for iframe -->
  
  </body>
	
</html>							