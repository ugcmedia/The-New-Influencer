<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<title>Stephan Azevedo | Modern Influencer</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="dist/css/main.min.css">
<link rel="stylesheet" href="css/spanel.css">
<link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap" rel="stylesheet"> 
</head>

<?php
$strJsonFileContents = file_get_contents("members.json");	
$json_data = json_decode($strJsonFileContents, true);

$member_id=0;
$member_pic='';   
//print_r($json_data['Members']);	        
?>
<body id="mobile_wrap">

  <div class="panel-overlay"></div>

  <!-- Left panel -->
  <div class="panel panel-left panel-reveal">
                  <!-- Slider -->
                 <div class="swiper-container-subnav multinav">
                    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <nav class="main_nav_icons_inline_3">
        <ul>
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/home.png" alt="" title="" /><span>Home</span></a></li>
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/lips.png" alt="" title="" /><span>Members</span></a></li>
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/chat.png" alt="" title="" /><span>Chat</span></a></li>
        
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/camera.png" alt="" title="" /><span>Photos</span></a></li>
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/live.png" alt="" title="" /><span>Live</span></a></li>
        <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/orange/pin.png" alt="" title="" /><span>Near Me</span></a></li>
        </ul>
        </nav>
      </div>  
        </div>
    </div>
</div>
<!-- End of Left panel -->


    <div class="views">
      <div class="view view-main">
        <div class="pages">
          <div data-page="lp" class="page homepage">
            <div class="page-content">
      
                <div class="navbar navbar--page">
                  <div class="navbar__col navbar__col--title">
                    <a href="index.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/logo.png"></a>
                  </div>
                  <div class="navbar__col navbar__col--icon-menu">
                    <ul>
                      <li><a href="#" class="premium-btn btn-access">PREMIUM</a></li>
                      <li><a href="#" data-panel="left" class="open-panel">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                      </a></li>
                    </ul>        
                  </div>      
                </div>

                <div class="lp-listingpage">
                  <div class="center-column">
                    <div class="container">
                      <div class="page_single layout_fullwidth_padding">

                      <div class="top-team-sec">
                        <div class="page_single layout_fullwidth_padding">
  
                          <div class="swiper-container-lp">
                          
                            <div class="swiper-wrapper">
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_001.jpg" alt="" title="" /></a>                     
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_002.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_003.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_004.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_005.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_006.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_007.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_008.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_009.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_010.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_011.jpg" alt="" title="" /></a>
                              </div>
                              <div class="swiper-slide lp-slideitem-block btn-access">
                                <a href="#"><img src="images/circle/img_012.jpg" alt="" title="" /></a>
                              </div>
                            </div>
                          </div>

                          <div class="lp-listint-titlebox">

                            <div class="right-box btn-access">
                              <h3><a href="#">See More Girls</a></h3>
                            </div>
                          </div>
                        </div>
                      </div>

                  <!-- Member Section -->
                      <div class="team-container-team">
                        <div class="left-box">
                          <h3 >Models near <span class="city"></span></h3>
                        </div>
                        <div class="team-wrapper">

                          <!-- start of for loop to generate each member avatar -->
                           <?php
                                for($i=0;$i<count($json_data['Members']);$i++)
                                {
                                       $memeber_id=$json_data['Members'][$i]['id'];    
                                       $member_pic_arr=$json_data['Members'][$i]['photos'];
                                       $member_name=$json_data['Members'][$i]['name'];     

                                        foreach($member_pic_arr[0] AS $k=>$v)  
                                        {
                                          if($k=='avatar')
                                          {  
                                            $avtar_img_url=$v;   
                                            $member_avtar_img_url=ltrim($avtar_img_url,'/');

                                            $member_avtar_img_arr=explode('.',$member_avtar_img_url);           
                                            $member_avtar_img=$member_avtar_img_arr[0].'.'.'jpg'; 
                                          }  
                                        }    
                           ?>

                           <!-- End of for loop to generate each member avatar -->

                           <div class="team-block">
                            <a href="lp-catbot.php?id=<?php echo $memeber_id;?>&<?php echo http_build_query($_REQUEST); ?>" data-view=".view-main">         
                              
                              <div class="img-box">				
                                <img src="<?php echo $member_avtar_img;?>" alt="" title=""/>                      		                                    
                              </div>
                              <strong><?php echo $member_name;?></strong><span><?php echo $member_name;?></span>           
                            </a>
                          </div>      
                          <?php  			
                               			
                            }
                          ?>
                        </div>
                      </div>
                  <!-- End team-box -->
                      
                        <div class="lp-pagination">
                          <a href="#" class="prev-btn btn btn-access">PREV PAGE</a>
                          <span class="page-nbr">1/37</span>
                          <a href="#" class="start-chat-btn btn btn-access">NEXT PAGE</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Modal for iFrame -->
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
<!-- Modal for iFrame -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="https://geoip.joinsafelyonline.com/"></script>
<script src="js/iframe.resizer.min.js"></script>
<script>$('iframe').iFrameResize({checkOrigin: false});</script>


<!-- End of GEO Location -->
        <script src="https://geoip.joinsafelyonline.com/"></script>
        <script>
            $(document).ready(function () {
                var city = geoip_city();
                var state = geoip_region();

                if (!city) {
                    $('.city').html('In Your Area');
                } else {
                    $('.city').html(city);
                }
            });
        </script>
<!-- End of GEO Location -->


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
<!-- End of Sript for iframe -->


  </body>
</html>