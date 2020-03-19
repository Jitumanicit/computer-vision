
<!DOCTYPE html>
<html lang="en">
<head>
  <!--<script>
  if (screen.width < 680) //if if mobile window is less then 780
  window.location.replace("../../m/")
  </script>-->
  <title><?php echo $result[0]['Title']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="Description" property="og:description" content="<?php echo $result[0]['Title']; ?>"/>
  <meta name="Keywords" content="<?php  echo $this->uri->segment(2).' news, Latest '.$this->uri->segment(2).' news, '.$this->uri->segment(2).' news online, '.$this->uri->segment(2).' news live, '.$this->uri->segment(2).' current news'; ?>"/> 
  <meta name="msapplication-starturl" content="<?php echo 'https://newsner.in/news/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>"/>
  <link rel="canonical" href="<?php echo 'https://newsner.in/news/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type"   content="article"/>
  <meta property="og:title" content="<?php echo $result[0]['Title']; ?>"/>
  <meta property="og:url" content="<?php echo 'https://newsner.in/news/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="<?php echo $result[0]['Title']; ?>"/>
  <meta property="og:image" content="<?php echo base_url().'uploads/images/'.$result[0]['picture']; ?>">
  <meta name="twitter:card" content="newsner - hot trending news"/>
  <meta name="twitter:site" content="@newsner"/>
  <meta name="twitter:title" content="<?php echo $result[0]['Title']; ?>"/>
  <meta name="twitter:description" content="<?php echo $result[0]['Title']; ?>"/>
  <meta name="twitter:image" content="<?php echo base_url().'uploads/images/'.$result[0]['picture']; ?>"/>
  

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url('assets/css/docs.min.js')?>"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.js')?>"></script>
  <!-- jssor slider scripts-->
  <script type="text/javascript" src="<?php echo base_url('assets/css/jssor.slider.min.js')?>"></script>
  
  <style>    
     footer { background-color: #f2f2f2; padding: 25px; }
	   .img-valign {vertical-align: middle; margin-bottom: 0.75em;}
     .text1 {font-size: 44px;}
     .text2 {font-size: 14px;}	
	   p{margin-bottom: 0.75em;}		
	   hr { color: #E1261D; background-color: #E1261D; height: 5px; }
    .media hr{ color: #E1261D; background-color: #E1261D; height: 0.5px; }
     h4{  color:#E1261D; }
     h3,h2{ color: #E1261D;}	
	   @import url('https://fonts.googleapis.com/css?family=Roboto');
       a:hover,
       a:focus { text-decoration: none; outline: none; }   
       body{font-family: 'Lato', sans-serif;}
      /* 1.1 Header Area  ***************************************************/
      /*Bootstrap Reset*/
      .navbar-nav > li > a { padding-top: 0; padding-bottom: 0; }
      .mainmenu {background-color: transparent; border-color: transparent; margin-bottom: 0;	border: 0px !important;}
      .navbar-nav > li:last-child > a { padding-right: 0px; margin-right: 0px;}
      .dropdown-menu {padding: 0px 0; margin: 0 0 0; border: 0px solid transition !important; border: 0px solid rgba(0,0,0,.15);	border-radius: 0px;-webkit-box-shadow: none important; box-shadow: none !important; }
      /*=-====Main Menu=====*/
      .navbar-nav .open .dropdown-menu > li > a {padding: 16px 15px 16px 25px; }
      .header_bottom { /*background: #0071ba*/  background:#1357AC}
      .header_area .header_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {color: #fff; font-size: 16px; text-transform: capitalize; padding: 16px 15px;	font-family: 'Roboto', sans-serif;}
      .header_area .mainmenu .active a,
      .header_area .mainmenu .active a:focus,
      .header_area .mainmenu .active a:hover,
      .header_area .mainmenu li a:hover,
      .header_area .mainmenu li a:focus ,
      .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{ color: #fff;	background:#FF0000; outline: 0;}
      /*-----./ Main Menu-----*/
      .navbar-default .navbar-toggle { border-color: #fff } /*Toggle Button*/
      .navbar-default .navbar-toggle .icon-bar { background-color: #fff } /*Toggle Button*/
      /*==========Sub Menu=v==========*/
     .mainmenu .collapse ul > li:hover > a{background: #E4252A;}
     .mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{background: #E4252A;}
     .mainmenu .collapse ul ul ul > li:hover > a{ background: #E4252A;}
     .mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#1357AC;}
     .mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#E4252A;}
     .mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#E4252A;}
     /******************************Drop-down menu work on hover**********************************/
     .mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px}
       @media only screen and (min-width: 767px) {.mainmenu .collapse ul li{position:relative;}
       .mainmenu .collapse ul li:hover> ul{display:block}
       .mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
       /*******/
       .mainmenu .collapse ul ul li{position:relative}
       .mainmenu .collapse ul ul li:hover> ul{display:block}
       .mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
       /*******/
      .mainmenu .collapse ul ul ul li{position:relative}
      .mainmenu .collapse ul ul ul li:hover ul{display:block}
      .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}
      .navbar-default .navbar-nav .open .dropdown-menu>li>a { color: #fff; }
    }
    .goog-te-banner-frame.skiptranslate { display: none !important; } 
    body { top: 0px !important; }
    .goog-logo-link{ display:none !important; } 
     <!-- Slider -->
    /* jssor slider loading skin spin css */
     .jssorl-009-spin img { animation-name: jssorl-009-spin; animation-duration: 1.6s; animation-iteration-count: infinite; animation-timing-function: linear; }
       @keyframes jssorl-009-spin { from { transform: rotate(0deg); } to {  transform: rotate(360deg); } }   
     .auto-resize-landscape { height: 70px; width: 80px; margin-bottom:10px; } 
     .auto-resize-landscape-single { height: 450px; width: 100%; margin-bottom:10px; }  
     footer { margin-top: 0px; padding-top: 18px; background-color: #1357AC; border-top:none; color: #fff; height:auto; }
    footer a { color:#fff; }
    footer hr { border-bottom: 1px solid #fff; }
    footer .container { background-color: #1357AC; min-height: 40px; margin-bottom: 10px; padding: 20px 20px 20px 20px; overflow: hidden; border: 1px solid #fff; box-shadow: inset 0px 0px 45px pink; -webkit-box-shadow: inset 0px 0px 15px pink; -moz-box-shadow: inset 0px 0px 15px pink; border-radius: 5px 5px 5px 5px; -webkit-border-radius: 5px 5px 5px 5px; -moz-border-radius: 5px 5px 5px 5px; clear: both; } 
  </style>
</head>
<body>
 <div id="header-area" class="header_area">
        <div class="header_bottom">
           <!-- <div class="container">
                <div class="row">-->
                    <nav role="navigation" class="navbar navbar-default mainmenu">
                   <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collection of nav links and other content for toggling -->
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul id="fresponsive" class="nav navbar-nav dropdown">
                               <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="<?php echo base_url().'news/category/business';?>">Business</a></li>
                                <li><a href="<?php echo base_url().'news/category/education';?>">Education</a></li>
                                <li><a href="<?php echo base_url().'news/category/entertainment';?>">Entertainment</a></li>                
                                <li><a href="<?php echo base_url().'news/category/lifestyle';?>">Lifestyle</a></li>
                                <li><a href="<?php echo base_url().'news/category/politics';?>">Politics</a></li>
                                <li><a href="<?php echo base_url().'news/category/sports';?>">Sports</a></li>
                                <li><a href="<?php echo base_url().'news/category/technology';?>">Technology</a></li>  
                                <li><a href="<?php echo base_url().'news/video';?>">Videos</a></li>
                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">All Sections<span class="caret"></span></a>
							                      <ul class="dropdown-menu">								   
								                      <?php 								 
								                      foreach($result1 as $val)								  
								                      { 
		                                  ?>	                              
						                           <li><a href="<?php echo base_url().'news/category/'.strtolower($val['category']); ?>"><?php echo $val['category'];?></a></li>
                                     <?php 
						                          }
						                        ?>
							                    </ul>
							                 </li>							                
                           </ul>
                           <ul class="nav navbar-nav navbar-right">
                               <li style="padding-top: 15px;color:#fff;font-size: 16px">Feedback : contact@newsner.in</li>
                               <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square" style="font-size:20px;color:#fff;"></i></a></li>
                               <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter" style="font-size:20px;color:#fff;"></i></a></li> 
                               <li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram" style="font-size:20px;color:#fff;"></i></a></li> 
                          </ul>							
                        </div>
                    </nav>
                <!--</div> 
            </div>-->            
        </div><!-- /.header_bottom -->

   <div class="jumbotron">  
	  <img src="<?php echo base_url().'assets/images/MLF-BANNER-IMAGE-NEW1.jpg'; ?>" class="img-responsive" style="width:100%" alt="Image">
  </div>
  <div class="container-fluid bg-3"> 
    <div class="row">
       <div class="col-md-12"><a><h1><?php if($result!=''){ echo  $result[0]['Title']; } ?></h1></a>  </div>
      <div class="col-md-12"> 	 
        <div class="col-sm-8" height="50px" style="text-align: justify; text-justify:auto;">       
         <?php if($result!=''){?>
		     <img src="<?php echo base_url().'uploads/images/'.$result[0]['picture']; ?>" class="auto-resize-landscape-single" alt="Image"><!-- width="100%" height="500px"-->
		     <span>
		      <!--<a><h1><?php echo $result[0]['Title']; ?></h1></a>-->
		      <br/>
		      <p style="font-size:20px"> 
		      <?php
   			     $str = $result[0]['Contents'];				 
                     $a= explode("\n",$str);
				     for($i=0;$i<count($a);$i++)
				     {
				        echo $a[$i];//.'</br>'
				     }
			    ?> 		  		  
		      </p>
		      <p style="font-size:12px"><?php
            echo "<br><b>Updated by: </b>".$result[0]['reporter_name'].'&nbsp'.$result[0]['created_at']; ?>
          </p>
		 </span>
		<?php } ?>
   </div> 

   <div class="col-sm-4">
     <?php        
       //if(count($results)!=0)
      //{
      if($results!='')
       {
        $age=array_chunk($results,5,true); 
        if(count($age[0])!=''){
        for($i=0;$i<count($age[0]);$i++){  ?>
        <div class="media">
           <div class="media-left">
             <img src="<?php echo base_url().'uploads/images/'.$results[$i]['picture']; ?>" class="auto-resize-landscape"><!-- media-object  style="width:60px"--->
           </div>
           <div class="media-body">
             <h4 class="media-heading"><?php echo $results[$i]['category']; ?></h4>
             <p class="img-responsive"><a href="<?php echo base_url().'news/'.strtolower($results[$i]['category']).'/'.$results[$i]['id']; ?>"><?php echo $results[$i]['Title']; ?></a></p>
           </div>
         </div>
      <?php       
      }}}
    // }
    ?>
   <br>
 </div>

 <div class="col-sm-3">
	 <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
     <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
       <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
     </div>           
     <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
       <?php foreach($advertiseTop as $val){?> 
		   <div>
          <img data-u="image" src="<?php echo base_url().'uploads/images/'.$val['image'];?>"/>
       </div>
			 <?php } ?>			 
     </div> 
   </div>
 </div>      
 <div class="col-sm-4">
  <br>   
  <?php 
     // if(count($a)>=5) 
     // { 
     if($results!='')
     {   
      $age=array_chunk($results,5,true);
       if(count($age)!=1){
        for($j=1;$j<count($age[1]);$j++){      
      ?> 
         <div class="media">
              <div class="media-left">
                <img src="<?php echo base_url().'uploads/images/'.$age[1][$j+4]['picture']; ?>" class="auto-resize-landscape">
              </div>
             <div class="media-body">
                <h4 class="media-heading"><?php echo $age[1][$j+4]['category']; ?></h4>
                <p><a href="<?php echo base_url().'news/'.strtolower($age[1][$j+4]['category']).'/'.$age[1][$j+4]['id']; ?>"><?php echo $age[1][$j+4]['Title']; ?></a></p>
             </div>
         </div>
        <?php       
        }}}
      // }
      ?>
     </div> 
	  </div> 
   </div> 
  </div>   
 </div>
</div>
<br/>
<footer class="container-fluid text-center">
  © Newsner 2019 All Rights Reserved.
</footer>
<script type="text/javascript">
function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      /*new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');*/
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };
			
			   var options1 = {
                $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 5000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var options2 = {
                $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 5000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);           
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();			
			      $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
			
			      var jssor_slider2 = new $JssorSlider$("slider2_container", options1);           
            function ScaleSliders() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider2.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSliders, 30);
            }
            ScaleSliders();		
			      $(window).bind("load", ScaleSliders);
            $(window).bind("resize", ScaleSliders);
            $(window).bind("orientationchange", ScaleSliders);

			     var jssor_slider3 = new $JssorSlider$("slider3_container", options2);           
           function ScaleSlider2()
			     {
              var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
              if (parentWidth)
			        {
                 jssor_slider3.$ScaleWidth(parentWidth - 30);
              }
              else
                window.setTimeout(ScaleSlider2, 30);
            }
            ScaleSlider2();			
			      $(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);					
            //responsive code end
        });
    </script>
  </body>
</html>