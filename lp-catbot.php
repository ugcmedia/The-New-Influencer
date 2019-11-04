<?php
$member_id=0;
$member_age=0;
$member_images_count=0;
$member_name='';  
$member_likes_count='';  
$member_fwlrs_count='';  
$member_status='';
$member_bio='';

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
        //echo '<pre>';
        $member_name=$json_data['Members'][$i]['name'];     
        $member_images_count=$json_data['Members'][$i]['images'];   
        $member_likes_count=$json_data['Members'][$i]['likes'];      
        $member_fwlrs_count=$json_data['Members'][$i]['followers'];     

        $member_age=$json_data['Members'][$i]['age'];                 
        $member_status=$json_data['Members'][$i]['status'];     
        $member_bio=$json_data['Members'][$i]['bio'];     

        $member_pic_arr=$json_data['Members'][$i]['photos'];     

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

                   

        /*
        foreach($member_pic_arr[0] AS $k=>$v)  
        {
          if($k !='avatar')
            echo $k.':'.$v;                  
            echo '<br/>';             
        }*/

       // print_r($json_data['Members'][$i]);             
    }     
      
  }  
  //echo $member_id;          
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
<title>Hookup | Get Laid Tonight!</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/simplelightbox.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="dist/css/main.min.css">
<link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&display=swap" rel="stylesheet"> 
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
        <div data-page="lp-single" class="page profile-page">
          <div class="page-content">
            <div class="navbar navbar--page">
              <div class="navbar__col navbar__col--title">
                <a href="lp.php"><img class="logo" src="images/logo.png"></a>
              </div>
              <div class="navbar__col navbar__col--icon-menu">
                <ul>
                  <li><a href="#" class="premium-btn">PREMIUM</a></li>
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
              <div class="profile-banner">
                <div class="layout_fullwidth_padding">
                  <div class="profile-banner-back-btn">
                    <a href="lp.php"><img src="images/back-btn.png"></a>
                  </div>
                </div>
                <div class="profile-banner-img">
                  <img src="<?php echo $member_avtar_img;?>" alt="" title=""/>              
                </div>
                <div class="layout_fullwidth_padding">
                  <div class="profile-banner-content">
                    <div class="model-name"><h1><?php echo $member_name;?></h1></div>         
                    <div class="profile-banner-numbers">
                      <div class="profile-img-number"><span><?php echo $member_images_count;?></span>Images</div>
                      <div class="profile-like-number"><span><?php echo $member_likes_count;?></span>Likes</div>            
                      <div class="profile-follow-number"><span><?php echo $member_fwlrs_count;?></span>Followers</div>        
                    </div>
                  </div>
                </div>
              </div>
              <div class="center-column">
                <div class="container">
                  <div class="page_single layout_fullwidth_padding">
                    <div class="lp-single">
                      <div class="section profile-header flex">
                         <div class="profile-info-wrap">
                          <div class="model-age"><b>Age:</b>&nbsp;<?php echo $member_age;?></div>   
                          <div class="model-status"><b>Status:</b>&nbsp;<?php echo $member_status;?></div>          
                          <div class="city"><b>City:</b> Current City</div>
                          <div class="model-location"><b>Location:</b>
                            <a class="profile-location" href="#"> See Location</a>
                          </div>
                        </div>              
                        <div class="lp-single-bottombtn">
                          <ul>
                            <li><a href="conversation.php?id=<?php echo $member_id;?>">REQUEST SEX</a></li>
                            <li><a href="conversation.php?id=<?php echo $member_id;?>">START CHAT</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="section profile-about">
                          <h2>About Me:</h2>
                          <div class="model-description add-lines"><?php echo $member_bio;?></div>        
                        </div>

                        <div class="section profile-gallery">
                          <h2>Photo Gallery</h2>
                            <ul id="photoslist" class="photo_gallery_box">
                              <?php 
                              //echo '<pre>';                       
                                $member_pic_arr_count=count($member_pic_arr[0]); 
                                //echo $member_pic_arr_count;               
                                $img_cntr=0;           
                                    

                              foreach($member_pic_arr[0] AS $k=>$v)  
                              {
                                  $img_cntr++;    
                                  if($k !='avatar')
                                  {       
                                    $image_url=$v;
                                    $member_image_url=ltrim($image_url,'/');       
                                    $member_image_arr=explode('.',$member_image_url);           
                                    $member_image_name=$member_image_arr[0].'.'.'jpg';   

                                    if($img_cntr==$member_pic_arr_count)        
                                    {
                                        echo "<li><a href='conversation.php?id=$member_id'><img src='$member_image_name'><h3>More Photos</h3></a></li>";          
                                    }  
                                    else      
                                    {
                                        echo "<li><a href='$member_image_name'><img src='$member_image_name'></a></li>";           
                                    }           
                                            
                                  }                 
                                                                      
                              }
                            ?>  
                              
                            </ul>
                        </div> 
                        <div class="lp-single-bottombtn bottom">      
                          <ul>
                            <li><a href="conversation.php?id=<?php echo $member_id;?>">REQUEST SEX</a></li>
                            <li><a href="conversation.php?id=<?php echo $member_id;?>">START CHAT</a></li>    
                          </ul>   
                        </div>                    
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/simple-lightbox.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>