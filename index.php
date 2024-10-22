<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<title>Stephan Azevedo | Modern Influencer</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="dist/css/main.min.css">
<link rel="stylesheet" href="css/spanel.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap"> 
</head>
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

	<!-- Bottom panel -->
<div class="panel panel-bottom panel-reveal">
		 <div class="swiper-container-toolbar swiper-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
				<a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/white/pin.png" alt="Map Pin"/><span>Near Me</span></a>
				<a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/white/lips.png" alt="Sexy lips"/><span>Dates</span></a>
			    <a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/white/photos.png" alt="Model Icon"/><span>Models</span></a>
				<a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img src="images/icons/white/chat.png" alt="Chat Icon"/><span>Chat</span></a>
				
			  </div>
			</div>
		  </div>
</div>


    <div class="views">

      <div class="view view-main">

        <div class="pages">

          <div data-page="index team" class="page homepage">
            <div class="page-content">
			
		<div class="navbar navbar--fixed navbar--fixed-top">
			<div class="navbar__col navbar__col--title">
				<a href="lp.php?<?php echo http_build_query($_REQUEST); ?>"><img class="logo"src="images/logo.png"></a>
			</div>
			<div class="navbar__col navbar__col--icon navbar__col--icon-menu">
				<a href="#" data-panel="left" class="open-panel"><span></span><span></span><span></span><span></span></a>
			</div>
                </div>

                  <!-- Slider -->
                 <div class="swiper-container introslider">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="background-image:url(images/slide1.jpg);">
		   
			 <div class="slider-caption">
			          <div class="slider-caption__line" data-swiper-parallax="-200%">UGC Media</div>
				  <h2>The New Influencer</h2>
				  <div class="lp-single-bottombtn">
                          <ul>
                            <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>">REQUEST A DATE</a></li>
                            <li><a href="lp.php?<?php echo http_build_query($_REQUEST); ?>">START CHAT</a></li>
                          </ul>
                        </div>
			 </div>
		      </div> 
                      
                      <div class="swiper-slide" style="background-image:url(images/slide2.jpg);">
				  
				<div class="slider-caption">
				 <div class="slider-caption__line" data-swiper-parallax="-200%">02</div>
				<h2 data-swiper-parallax="-100%">I never think of the future – it comes soon enough</h2>
				<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">VIEW MORE</a>
				</div>
		
                </div>
                      <div class="swiper-slide" style="background-image:url(images/slide3.jpg);">
		  
				<div class="slider-caption">
				<div class="slider-caption__line" data-swiper-parallax="-200%">03</div>
				<h2 data-swiper-parallax="-100%">Creativity makes life more fun and more interesting</h2>
				<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">VIEW MORE</a>
				</div>
		   		</div> 		   
                    </div>
                    <div class="swiper-pagination"></div>
<!-- 			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>	 -->
                  </div>
			  

		 <div class="bottom-menu-open">
		         <div class="bottom-menu-open__left"></div>
			 <div class="bottom-menu-open__container">
				  <div id="bottom-menu-icon" class="bottom-menu-open__icon open-panel" data-panel="bottom">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				  </div>
			</div>
			<div class="bottom-menu-open__right"></div>			
		 </div>  
            </div>
          </div>
        </div>
      </div>
    </div>

    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>















































