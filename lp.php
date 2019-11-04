<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<title>Hookup | Get Laid Tonight!</title>
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
        <li><a href="lp.php"><img src="images/icons/orange/home.png" alt="" title="" /><span>Home</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/lips.png" alt="" title="" /><span>Members</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/chat.png" alt="" title="" /><span>Chat</span></a></li>
        
        <li><a href="lp.php"><img src="images/icons/orange/camera.png" alt="" title="" /><span>Photos</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/live.png" alt="" title="" /><span>Live</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/pin.png" alt="" title="" /><span>Near Me</span></a></li>    

        <li><a href="lp.php"><img src="images/icons/orange/badgirls.png" alt="" title="" /><span>Bad Girls</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/babes.png" alt="" title="" /><span>Babes</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/cuff.png" alt="" title="" /><span>Sex</span></a></li>
        
        <li><a href="lp.php"><img src="images/icons/orange/dilldo.png" alt="" title="" /><span>Shop</span></a></li>    
        <li><a href="lp.php"><img src="images/icons/orange/toys.png" alt="" title="" /><span>Toys</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/sexdate.png" alt="" title="" /><span>Sex Date</span></a></li>
        
        <li><a href="lp.php"><img src="images/icons/orange/anal.png" alt="" title="" /><span>Anal</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/hardcore.png" alt="" title="" /><span>SNM</span></a></li>
        <li><a href="lp.php"><img src="images/icons/orange/shoes.png" alt="" title="" /><span>Fetish</span></a></li> 
        </ul>
        </nav>
      </div>  
        </div>
    </div>
</div>
<!-- End of Left panel -->
  <!-- Right panel -->
  <div id="panel-right"></div>
  <!-- Bottom panel -->
  <div id="panel-bottom"></div>


    <div class="views">

      <div class="view view-main">



        <div class="pages">

          <div data-page="lp" class="page homepage">
            <div class="page-content">
      
                <div class="navbar navbar--page">
                  <div class="navbar__col navbar__col--title">
                    <a href="index.php"><img src="images/logo.png"></a>
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
                  <!-- Team-box -->
                      <div class="team-container-team">
                        <div class="left-box">
                          <h3 >Females Online in <span class="city"></span></h3>
                        </div>
                        <div class="team-wrapper">
                          <!----
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1001/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1001</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1002/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1002</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1003/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1003</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1004/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1004</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1005/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1005</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1006/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1006</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1007/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1007</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1008/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1008</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1009/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1009</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1010/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1010</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1011/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1011</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1012/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1012</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1013/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1013</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1014/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1014</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1015/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1015</strong><span>Current City</span>
                            </a>
                          </div>
                          <div class="team-block">
                            <a href="lp-catbot.php" data-view=".view-main">
                              <div class="img-box">
                                <img src="images/model/1016/avatar.jpg" alt="" title="" />
                              </div>
                              <strong>1016</strong><span>Current City</span>
                            </a>
                          </div>---->  
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
                           <div class="team-block">
                            <a href="lp-catbot.php?id=<?php echo $memeber_id;?>" data-view=".view-main">           
                              <div class="img-box">				
                                <img src="<?php echo $member_avtar_img;?>" alt="" title="" />                      		                                    
                              </div>
                              <strong><?php echo $member_name;?></strong><span class="city">Current City</span>           
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

    <!-- Login Popup -->
    <div id="popup-login"></div>

    <!-- Register Popup -->
    <div id="popup-signup"></div>
  
    <!-- Forgot Password Popup -->
    <div id="popup-forgot"></div>

    <!-- Social Icons Popup -->
    <div id="popup-social"></div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="https://geoip.joinsafelyonline.com/"></script>

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
            ;
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