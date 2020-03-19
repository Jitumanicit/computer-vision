
<!DOCTYPE html>
<html lang="en">
<head>
     <!--<script>
     if (screen.width < 680) //if if mobile window is less then 780
     window.location.replace("../../m/")
    </script>--> 
    <title><?php echo $metaTitle; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139430200-1"></script>
    <script>
     window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-139430200-1');
   </script>
   <!-- Google Tag Manager -->
   <script>
   (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KP744NQ');
   </script>
   <!-- End Google Tag Manager -->
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   <script>
     (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-6642596179672273", enable_page_level_ads: true });
   </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $description; ?>"/>  
  <meta name="keywords" content="<?php echo $metaKeyword; ?>"/>
  <link rel="icon" type="image/x-icon" href="https://newsner.in/assets/images/NewsNER Icon.png" />
  <meta name="msapplication-starturl" content="<?php echo 'https://newsner.in/'.$this->uri->segment(1).'/category/'.$this->uri->segment(3); ?>"/>
  <link rel="canonical" href="<?php echo 'https://newsner.in/'.$this->uri->segment(1).'/category/'.$this->uri->segment(3); ?>"/>
  <meta name="robots" content="index, follow" />
  <meta property="og:type"   content="article" />
  <meta property="og:title" content="<?php echo $metaTitle; ?>"/>
  <meta property="og:url" content="<?php echo 'https://newsner.in/'.$this->uri->segment(1).'/category/'.$this->uri->segment(3); ?>" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="<?php echo $description; ?>"/>
  <meta property="og:image" content="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>">
  <meta name="twitter:card" content="newsner - hot trending news"/>
  <meta name="twitter:site" content="@newsner"/>
  <meta name="twitter:title" content="<?php echo $metaTitle; ?>"/>
  <meta name="twitter:description" content="<?php echo $description; ?>"/>
  <meta name="twitter:image" content="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>"/> 
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
   .navbar { margin-bottom: 0; border-radius: 0;}       
   footer { background-color: #f2f2f2; padding: 25px; }
	.img-valign { vertical-align: middle;	margin-bottom: 0.75em; }
  .text1 { font-size: 44px; }
  .text2 { font-size: 14px;	}	
	p{ margin-bottom: 0.75em; }		
	hr{ color: #E1261D; background-color: #E1261D; height: 5px;}
 .media hr{ color: #E1261D; background-color: #E1261D; height: 0.5px; }
  h4,h5{ color:#E1261D; }
  h3,h2{color: #E1261D;}
  @import url('https://fonts.googleapis.com/css?family=Roboto');
    a:hover,
    a:focus { text-decoration: none; outline: none; }
    body{font-family: 'Lato', sans-serif; font-size: 16px;}  
    .navbar-nav > li > a { padding-top: 0; padding-bottom: 0;}
    .mainmenu { background-color: transparent; border-color: transparent; margin-bottom: 0; border: 0px !important; }
    .navbar-nav > li:last-child > a { padding-right: 0px; margin-right: 0px;}
    .dropdown-menu { padding: 0px 0; margin: 0 0 0; border: 0px solid transition !important;	border: 0px solid rgba(0,0,0,.15);border-radius: 0px; -webkit-box-shadow: none !important; box-shadow: none !important; }  
    .navbar-nav .open .dropdown-menu > li > a {padding: 16px 15px 16px 25px;}
    .header_bottom { background:#1357AC }
    .header_area .header_bottom .mainmenu a , .navbar-default .navbar-nav > li > a { color: #fff; font-size: 14px; text-transform: capitalize; padding: 16px 10px; font-family: 'Roboto', sans-serif; }
    .header_area .mainmenu .active a,
    .header_area .mainmenu .active a:focus,
    .header_area .mainmenu .active a:hover,
    .header_area .mainmenu li a:hover,
    .header_area .mainmenu li a:focus ,
    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{ color: #fff;	background:#FF0000; outline: 0; }  
    .navbar-default .navbar-toggle { border-color: #fff }
    .navbar-default .navbar-toggle .icon-bar { background-color: #fff }  
    .mainmenu .collapse ul > li:hover > a{ background: #E4252A;}
    .mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{background: #E4252A;}
    .mainmenu .collapse ul ul ul > li:hover > a{ background: #E4252A;}
    .mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#1357AC;}
    .mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#E4252A;}
    .mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#E4252A;}  
    .mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px}
   @media only screen and (min-width: 767px) {
    .mainmenu .collapse ul li{position:relative;}
    .mainmenu .collapse ul li:hover> ul{display:block}
    .mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none} 
    .mainmenu .collapse ul ul li{position:relative}
    .mainmenu .collapse ul ul li:hover> ul{display:block}
    .mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}  
    .mainmenu .collapse ul ul ul li{position:relative}
    .mainmenu .collapse ul ul ul li:hover ul{display:block}
    .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}
   }

  .goog-te-banner-frame.skiptranslate { display: none !important; } 
  body { top: 0px !important; }
  .goog-logo-link { display:none !important; }   
  .jssorl-009-spin img { animation-name: jssorl-009-spin; animation-duration: 1.6s; animation-iteration-count: infinite; animation-timing-function: linear; }
   @keyframes jssorl-009-spin { from { transform: rotate(0deg); }to { transform: rotate(360deg); } }
  .auto-resize-landscape { height: 70px; width: 80px; margin-bottom:10px; } 
  .auto-resize-landscape-single { height: 450px; width: 100%; margin-bottom:10px; }  
  footer { margin-top: 0px; padding-top: 18px; background-color:#1357AC; border-top:none; color: #fff; height:auto; }
  footer a { color:#fff; }
  footer hr { border-bottom: 1px solid #fff; }
  footer .container { background-color: #1357AC; min-height: 40px; margin-bottom: 10px; padding: 20px 20px 20px 20px; overflow: hidden; border: 1px solid #fff; box-shadow: inset 0px 0px 45px pink; -webkit-box-shadow: inset 0px 0px 15px pink; -moz-box-shadow: inset 0px 0px 15px pink; border-radius: 5px 5px 5px 5px; -webkit-border-radius: 5px 5px 5px 5px; -moz-border-radius: 5px 5px 5px 5px; clear: both;
   } 
	.center-logo { display: block; margin-left: auto; margin-right: auto; width: 100%; padding-top: 20px; }
   @media only screen and (max-width: 768px) {    
    .auto-resize-landscape-single { height: 100%; width: 100%; margin-bottom:10px;}
    .auto-resize-landscape-single-slider {height: 300px; width: 300px; } 
   } 
  </style>
 </head>
<body>
  
<div id="header-area" class="header_area">
  <div class="header_bottom">          
	  <?php 
       $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
       $uri_segments = explode('/', $uri_path);
     ?>
     <nav role="navigation" class="navbar navbar-default mainmenu">              
      <div class="navbar-header">
       <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
    </div>    
    <div id="navbarCollapse" class="collapse navbar-collapse">
       <ul id="fresponsive" class="nav navbar-nav dropdown">
       <li><a href="<?php echo base_url();?>">Home</a></li>                             
       <li><a href="<?php echo base_url().'arunachalpradesh/';?>">Arunachal Pradesh</a></li>
       <li><a href="<?php echo base_url().'assam/';?>">Assam</a></li>
       <li><a href="<?php echo base_url().'manipur/';?>">Manipur</a></li>
       <li><a href="<?php echo base_url().'meghalaya/';?>">Meghalaya</a></li>
       <li><a href="<?php echo base_url().'mizoram/';?>">Mizoram</a></li>
       <li><a href="<?php echo base_url().'nagaland/';?>">Nagaland</a></li>
       <li><a href="<?php echo base_url().'sikkim/';?>">Sikkim</a></li>
       <li><a href="<?php echo base_url().'tripura/';?>">Tripura</a></li> 
			 <li><a href="<?php echo base_url().$uri_segments[1].'/video';?>">Videos</a></li>
       <li><a href="<?php echo base_url().$uri_segments[1].'/blog';?>">Blog</a></li>
       <li class="dropdown"><a data-toggle="dropdown"  class="dropdown-toggle">All Sections<span class="caret"></span></a>
       <ul class="dropdown-menu">                   
         <?php foreach($result as $val){ ?>                               
            <li><a href="<?php echo base_url().$uri_segments[1].'/category/'.strtolower($val['category']); ?>"><?php echo $val['category']; ?></a></li>
          <?php } ?> 
        </ul>
        </li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li style="padding-top: 15px;color:#fff;font-size: 14px">Feedback : contact@newsner.in</li>
         <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square" style="font-size:20px;color:#fff;"></i></a></li>
         <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter" style="font-size:20px;color:#fff;"></i></a></li><li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram" style="font-size:20px;color:#fff;"></i></a></li>
       </ul>
			</div>
    </nav>
 </div>
 <div class="well"> 
    <div class="row">
       <div class="col-md-3">  
         <a href="<?php echo base_url();?>"><img src="https://newsner.in/assets/images/Final Logo.jpg" alt="<?php strtolower($val['category']); ?> news" class="img-responsive center-logo"></a>
      </div>
      <div class="col-md-9">  
         <img src="https://newsner.in/assets/images/Final Banner.png" alt="<?php strtolower($val['category']); ?> latest news" class="img-responsive">
      </div>
   </div> 
 </div>
 <div class="container-fluid bg-3"> 
  <div class="col-md-12"><h1><?php echo $results[0]['Title']; ?></h1></div>
   <div class="row">
     <div class="col-md-12"> 
      <div class="col-sm-8" style="text-align: justify; text-justify:auto;">   
        <?php if($results!=''){ ?>    
        <img src="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>" class="auto-resize-landscape-single" alt="<?php strtolower($val['category']); ?> breaking news" title="<?php echo $results[0]['Title']; ?>">
        <span>
		    <br/>
		    <p style="padding-right:20px; margin-left:5px;"> 
			   <ul class="nav navbar-nav navbar-right" style="bagroundcolor:#000;padding-right:20px; margin-left:5px;"> 
				   <b>Share</b>&nbsp;&nbsp;       
           <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[3].'/'.$results[0]['news_url']; ?>" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook-square" style="font-size:20px;color:#1357AC;"></i></a>&nbsp; | &nbsp;
				   <a target="_blank" href="http://twitter.com/share?text=<?php echo $results[0]['Title']; ?>&url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[3].'/'.$results[0]['news_url']; ?>"><i class="fa fa-twitter" style="font-size:20px;color:#1357AC;"></i></a>&nbsp; | &nbsp;
				   <a href="http://www.reddit.com/submit?url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[3].'/'.$results[0]['news_url']; ?>&title=<?php echo $results[0]['Title']; ?>" target="_blank" rel="nofollow"><i class="fa fa-reddit" style="font-size:20px;color:#1357AC;"></i></a>&nbsp; |&nbsp;
				   <a href="https://www.linkedin.com/cws/share?url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[3].'/'.$results[0]['news_url']; ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin" style="font-size:20px;color:#1357AC;"></i></a> 
			  </ul>
		   </p>
		   <br>		
       <p style="font-size:20px"> 
         <?php
           $str = $results[0]['Contents'];         
           $a= explode("\n",$str);
           for($i=0;$i<count($a);$i++)
           {
              echo $a[$i];
           }
           ?>             
       </p>
       <p style="font-size:12px;"><?php
              echo "<b>Updated by: </b>".$results[0]['reporter_name'].'&nbsp'.$results[0]['created_at']; ?>
       </p>
      </span>
     <?php } ?>
    </div>
    <div class="col-sm-4">
	   <?php 
	    if($results!='')
       {
        $age=array_chunk($results,5,true);
		    if(count($age[0])!=''){
		    for($i=1;$i<count($age[0]);$i++){  ?>
			  <div class="media">
           <div class="media-left">
             <img src="<?php echo base_url().'uploads/images/'.$results[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php strtolower($val['category']); ?> latest news" title="<?php echo $results[$i]['Title']; ?>">
           </div>
           <div class="media-body">            
             <p>
               <a href="<?php echo base_url().$uri_segments[1].'/'.strtolower($results[$i]['category']).'/'.$results[$i]['news_url']; ?>"><?php echo $results[$i]['Title']; ?></a>
            </p>
          </div>
        </div>
		  <?php				
		   }}}
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
		   if($results!=''){
         $age=array_chunk($results,5,true);
		      if(count($age)!=1){
		       for($j=1;$j<count($age[1]);$j++){ 		 
		     ?> 
		  <div class="media">
       <div class="media-left">
         <img src="<?php echo base_url().'uploads/images/'.$age[1][$j+5]['picture']; ?>" class="auto-resize-landscape" alt="<?php strtolower($val['category']); ?> latest news" title="<?php echo $age[1][$j+5]['Title']; ?>">
       </div>
       <div class="media-body">            
        <p><a href="<?php echo base_url().$uri_segments[1].'/'.strtolower($age[1][$j+5]['category']).'/'.$age[1][$j+5]['news_url']; ?>"><?php echo $age[1][$j+5]['Title'];?></a></p>
       </div>
      </div>
		  <?php				
		  }}}
		 ?>
	  </div>
  </div> 
 </div>
<br>
<hr>
  <div class="container-fluid bg-3">  
   <div class="row">       
	 <?php 
	  if($results1!='')
	  {
		foreach($results1 as $val)
	   {
		 if('Video'!=$val['Type_Post'])
		   {  
	      ?>
	      <div class="col-sm-3"> 
	        <div class="media">
               <div class="media-left">
                 <img src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" class="auto-resize-landscape" style="width:100px" alt="<?php strtolower($val['category']); ?> latest news" title="<?php echo $val['Title']; ?>">
               </div>
               <div class="media-body">
                 <h5 class="media-heading"><?php echo $val['subcategory']; ?></h5>
                 <p>
                   <?php  $pieces = explode(" ", $val['Title']);
                    $first_part = implode(" ", array_splice($pieces, 0,5));
                    //echo $first_part; ?>
                   <a href="<?php echo base_url().$uri_segments[1].'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"><?php echo $first_part; ?></a>
                 </p>
               </div>       
             </div>	
           </div>
	      <?php 
		     }
		    }
	     }	
	    ?>  	
     </div> 
    </div>	
   </div>
  </div>
 
  <div class="container-fluid bg-3 text-center">    
  <h4>Videos</h4>   
   <div class="row">
    <?php
     if($Video!=''){
  	  foreach($Video as $val){?> 
	     <div class="col-sm-3"> 
       <?php if($val['Types']!="youtube")		 
		    {
	 	    ?>
	 	   <div>
		     <div class="embed-responsive embed-responsive-4by3" style="background-color:#000">  
          <video width="320" height="240" controls>
            <source src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" type="video/mp4">
          </video>
       </div>     
		   <p><a href="<?php echo base_url().$uri_segments[1].'/video/'; ?>"><b><?php echo $val['Title']; ?></b></a></p> 
	   </div>
	   <?php }else{ ?>
	   <div class="video-responsive">
	      <div class="embed-responsive embed-responsive-4by3"> 
           <iframe width="320" height="240"  src="<?php echo 'https://www.youtube.com/embed/'.$val['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	      </div>
        <p><a href="<?php echo base_url().$uri_segments[1].'/video/'; ?>"><b><?php echo $val['Title']; ?></b></a></p>
	   </div>
    <?php } ?>
   </div> 
  <?php }} ?>
 </div>  
</div>
<br>
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
      <div class="fb-page" data-href="https://www.facebook.com/NewsNerInd/" data-tabs="timeline" data-width="400" data-height="438" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/NewsNerInd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NewsNerInd/">NewsNer India</a></blockquote></div>
    </div>
    <div class="col-sm-4">
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/788826" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
    </div>
    <div class="col-sm-4">
      <a class="twitter-timeline" data-width="400" data-height="438" data-theme="light" href="https://twitter.com/Newsner1?ref_src=twsrc%5Etfw">Tweets by Newsner1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
 <p>© Newsner 2019 All Rights Reserved.</p>
</footer>
 
 <script type="text/javascript">
   function googleTranslateElementInit() 
   {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
   }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
        jQuery(document).ready(function ($) {
            var options = {
              $AutoPlay: 1,$AutoPlaySteps: 1,$Idle: 2000,$PauseOnHover: 1,$ArrowKeyNavigation: 1,$SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
              $MinDragOffsetToSlide: 20,$SlideSpacing: 0,$UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1,$ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$,$ChanceToShow: 2,$Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };				
			     var options1 = {
             $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000,$PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint,$SlideDuration: 800,$MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1,
             $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },
             $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
           };
           var options2 = {
              $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1,$SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
              $MinDragOffsetToSlide: 20,$SlideSpacing: 0,$UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1,
              $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },
              $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$,$ChanceToShow: 2,$Steps: 1,$SpacingX: 12,$Orientation: 1 }
            };
           var jssor_slider1 = new $JssorSlider$("slider1_container", options);           
           function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) { jssor_slider1.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSlider, 30); }
            }ScaleSlider();
			      $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
			      var jssor_slider2 = new $JssorSlider$("slider2_container", options1);           
            function ScaleSliders() 
            {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth) { jssor_slider2.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSliders, 30);}
            }ScaleSliders();	
			      $(window).bind("load", ScaleSliders);
            $(window).bind("resize", ScaleSliders);
            $(window).bind("orientationchange", ScaleSliders);			
			      var jssor_slider3 = new $JssorSlider$("slider3_container", options2);           
            function ScaleSlider2()
			       {
              var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
              if (parentWidth){ jssor_slider3.$ScaleWidth(parentWidth - 30);}else{ window.setTimeout(ScaleSlider2, 30);}
            }ScaleSlider2();			
			      $(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);						
            //responsive code end
        });
    </script>
 </body>
</html>