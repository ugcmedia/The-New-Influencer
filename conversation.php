<?php
$member_id=0;
$member_name='';
$member_pic='';	

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
    	$member_pic_arr=$json_data['Members'][$i]['photos'];

    foreach($member_pic_arr[0] as $k=>$v)  
                                        {
                                          if($k=='avatar')
                                          {  
                                            $avtar_img_url=$v;   
                                            $member_avtar_img_url=ltrim($avtar_img_url,'/');

                                            $member_avtar_img_arr=explode('.',$member_avtar_img_url);           
                                            $member_avtar_img=$member_avtar_img_arr[0].'.'.'jpg'; 
                                          }  
                                        }
                                    }
                                }
                            }?>


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

    <div class="views">

      <div class="view view-main">			
	  
<div class="pages">
  <div data-page="conversation" class="page page--conversation chat-bot-page">
    <div class="page-content">
		<div class="navbar navbar--fixed navbar--fixed-top navbar--page">
			<div class="navbar__col navbar__col--icon navbar__col--icon-left">
				<a href="javascript:void() "onclick="history.back()"><img src="images/back-btn.png" alt="" title="" /></a>		
			</div>
				      


	        	
			<div class="navbar__col navbar__col--title navbar__col--title-sm navbar__col--title-centered">
				<h2><?php echo $member_name; $indx=0; $indx2=0;?></h2>
				<?php 
				foreach($member_chats[0] AS $key=>$val)			
				{	
					$indx2++;							
				?>	
				<input type='hidden' id="line<?php echo $indx2;?>" value="<?php echo $val;?>">																																				
				<?php 
				}	
				?>

				<input type='hidden' id='arr_cnt' value="<?php echo count($member_chats[0]);?>"/>		

				<input type='hidden' id='lp_cnt' value="1"/>													
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
								//$ques_text=addslashes($val);	
								$indx++;
								if($indx<=count($member_chats[0]))
								{

									$ques_text=str_replace("'","/","$val");									

									if(strstr("$ques_text","@"))
									{
										$place_text="<a href='#'>".$ques_text."</a>";									
									?>									
										<input type="text" name="line<?php echo $indx;?>" data-conv-question="<?php echo $place_text;?>" data-no-answer="true"> 								
									<?php 				
									}
									else    																		
									{
										echo "<input type='text' name='line$indx' data-conv-question='$ques_text' data-no-answer='true' data-custom-value='some text'>";								
									}	

								}				

							}

							?>		      									          
                            			
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
	        	<img src="<?php echo $member_avtar_img;?>" alt="" title="" />
	        </div>
	        <div class="popup-status">
	        	<h3><?php echo $member_name;?></h3>
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

                        <iframe id="frame" src="//<?php echo $_REQUEST["a_aid"]; ?>.joinsafelyonline.com/routes/<?php echo $_REQUEST["a_aid"]; ?>/?ofid=442&<?php echo http_build_query($_REQUEST); ?>" frameborder="0" scrolling="no"></iframe>

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
<script src="js/iframe.resizer.min.js"></script>
<script>$('iframe').iFrameResize({checkOrigin: false});</script>


	<script>
		function openmodal(stateWrapper, ready)
		{
			//window.open("https://msn.com");									
			//alert('got this');								
			
			//$("#myModal").modal('show');									
			var hangoutButton = document.getElementById("hangoutButtonId");
			hangoutButton.click();													
			//ready();																	
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
			convForm = $('#chat').convform({
				selectInputStyle: 'disable',			
				eventList : 
				{
	 				onInputSubmit : function(convState,readyCallback) 
	 				{
	 					
	 					var curnt_ques=convState.current.input.questions;			

  						
  						var n = curnt_ques[0].search("@");	

  						var j1,j2;

  						j1=$("#arr_cnt").val();
  						j2=$("#lp_cnt").val();																									
	
	 					
	 					if(j2>j1) 				
			            {   							
			                var hangoutButton = document.getElementById("hangoutButtonId");
							hangoutButton.click();  																	
			            }																
	 					else 
	 					{
	 						readyCallback();													
	 					}												
	 					
	 				}					
				}
												
			});			
			//console.log(convForm);								
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