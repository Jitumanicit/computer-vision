
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $result[0]['Title']; ?></title>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139430200-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-139430200-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KP744NQ');</script>
<!-- End Google Tag Manager -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-6642596179672273", enable_page_level_ads: true });
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $result[0]['Title']; ?>"/>  
  <meta name="keywords" content="<?php echo $result[0]['Title']; ?>"/>
  <link rel="icon" type="image/x-icon" href="https://newsner.in/assets/images/NewsNER Icon.png" />
  <meta name="msapplication-starturl" content="<?php echo 'http://www.newsner.in/'.$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3);?>"/>
  <link rel="canonical" href="<?php echo 'http://www.newsner.in/'.$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type"   content="article"/>
  <meta property="og:title" content="<?php echo $result[0]['Title']; ?>"/>
  <meta property="og:url" content="<?php echo 'http://www.newsner.in/'.$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>" />
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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url('assets/css/docs.min.js')?>"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.js')?>"></script>
  <!-- jssor slider scripts-->
  <script type="text/javascript" src="<?php echo base_url('assets/css/jssor.slider.min.js')?>"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
  <style>
   
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
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">All Sections<span class="caret"></span></a>
				<ul class="dropdown-menu">								   
				 <?php foreach($result1 as $val){ ?>	                              
					<li><a href="<?php echo base_url().$uri_segments[1].'/category/'.strtolower($val['category']); ?>"><?php echo $val['category'];?></a></li>
        <?php } ?>
			</ul>
		 </li>							                
    </ul>						  
    <ul class="nav navbar-nav navbar-right">
       <li style="padding-top: 15px;color:#fff;font-size: 14px">Feedback : contact@newsner.in</li>
       <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square" style="font-size:20px;color:#fff;"></i></a></li>
       <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter" style="font-size:20px;color:#fff;"></i></a></li> 
       <li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram" style="font-size:20px;color:#fff;"></i></a></li>
    </ul>							
  </div>
 </nav>
</div>
<div class="well"> 
  <div class="row">
   <div class="col-md-3">  
     <a href="<?php echo base_url();?>"><img src="https://newsner.in/assets/images/Final Logo.jpg" alt="latest news" class="img-responsive center-logo"></a>
   </div>
   <div class="col-md-9">  
     <img src="https://newsner.in/assets/images/Final Banner.png" alt="breaking news" class="img-responsive">
   </div>
  </div>
</div>
<div class="container-fluid bg-3"> 
  <div class="row">
	  <div class="col-md-8 single-news">
        <h1 class="single-news-heading"><?php if($result!=''){ echo  $result[0]['Title']; } ?></h1>
        <h5><span class="single-state"><?php if($result!=''){ echo  $result[0]['State']; } ?> , <?php if($result!=''){ echo  $result[0]['created_at']; } ?> </span></h5>

    </div>
     <div class="col-md-12"> 	 
      <div class="col-sm-8">
		   <?php if($result!=''){?>		    
			   <img src="<?php echo base_url().'uploads/images/'.$result[0]['picture']; ?>" class="auto-resize-landscape-single" alt="breaking news" title="<?php echo $result[0]['Title']; ?>">
		     <span>		      
		      <br/>
			     <p class="social" style="margin: 0 auto;"> 
			        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[2].'/'.$result[0]['news_url']; ?>" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a> 
              <a target="_blank" href="http://twitter.com/share?text=<?php echo $result[0]['Title']; ?>&url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[2].'/'.$result[0]['news_url']; ?>"><i class="fa fa-twitter o"></i></a>
              <a href="http://www.reddit.com/submit?url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[2].'/'.$result[0]['news_url']; ?>&title=<?php echo $result[0]['Title']; ?>" target="_blank" rel="nofollow"><i class="fa fa-reddit"></i></a>
              <a href="https://www.linkedin.com/cws/share?url=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[2].'/'.$result[0]['news_url']; ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>
              <a href="whatsapp://send?text=<?php echo 'https://newsner.in/'.$uri_segments[1].'/'.$uri_segments[2].'/'.$result[0]['news_url']; ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
		      </p>
         <br>
		    <h6><?php $str = $result[0]['Contents']; $a = explode("\n",$str); for($i=0;$i<count($a);$i++){ echo $a[$i]; }?></h6><br>			
		    <p><?php echo "<b>Updated by: </b>".$result[0]['reporter_name'].'&nbsp'.$result[0]['created_at']; ?></p>
		  </span>
		 <?php } ?>
    </div>
    <div class="col-sm-4">
       <?php if($results!=''){ $age=array_chunk($results,5,true); if(count($age[0])!=''){ for($i=0;$i<count($age[0]);$i++){ ?>
         <div class="media">
           <div class="media-left"><img src="<?php echo base_url().'uploads/images/'.$results[$i]['picture']; ?>" class="auto-resize-landscape" alt="north east news" title="<?php echo $results[$i]['Title']; ?>"></div>
           <div class="media-body"> <h5><a href="<?php echo base_url().$uri_segments[1].'/'.strtolower($results[$i]['category']).'/'.$results[$i]['news_url']; ?>"><?php echo $results[$i]['Title']; ?></a></h5> </div>
         </div>
        <?php }}} ?> <br>   
    </div>
	  <div class="col-sm-3">
	 	 <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"><img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
      </div>           
      <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
         <?php foreach($advertiseTop as $val){?> 
			     <div><img data-u="image" src="<?php echo base_url().'uploads/images/'.$val['image'];?>"/></div>
			   <?php } ?>			 
      </div> 
     </div>
	  </div>      
    <div class="col-sm-4">
    <br>   
     <?php if($results!=''){  $age=array_chunk($results,5,true); if(count($age)!=1){ for($j=1;$j<count($age[1]);$j++){ ?> 
      <div class="media">
        <div class="media-left">
          <img src="<?php echo base_url().'uploads/images/'.$age[1][$j+4]['picture']; ?>" class="auto-resize-landscape" alt="north east news" title="<?php echo $results[$i]['Title']; ?>">
        </div>
        <div class="media-body">            
         <h5><a href="<?php echo base_url().$uri_segments[1].'/'.strtolower($age[1][$j+4]['category']).'/'.$age[1][$j+4]['news_url']; ?>"><?php echo $age[1][$j+4]['Title']; ?></a></h5>
        </div>
      </div>
    <?php }}} ?>
  </div>  
  </div> 
  </div> 
 </div>   
 </div>
 </div>
<br/>
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
  function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
     jQuery(document).ready(function ($) {
            var options = {
             $AutoPlay: 1,$AutoPlaySteps: 1, $Idle: 2000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
             $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };
			      var options1 = {
             $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint,
             $SlideDuration: 800, $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2,$Steps: 1,$SpacingX: 12, $Orientation: 1 }
            };	
            var options2 = {
            $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
            $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 }, $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }};	
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);           
            function ScaleSlider() { var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth){ jssor_slider1.$ScaleWidth(parentWidth - 30); }else{  window.setTimeout(ScaleSlider, 30);  }}ScaleSlider();			
			      $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
			      var jssor_slider2 = new $JssorSlider$("slider2_container", options1);           
            function ScaleSliders() { var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
            if (parentWidth) { jssor_slider2.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSliders, 30); }}
            ScaleSliders();
			      $(window).bind("load", ScaleSliders);
            $(window).bind("resize", ScaleSliders);
            $(window).bind("orientationchange", ScaleSliders);			
			      var jssor_slider3 = new $JssorSlider$("slider3_container", options2);           
            function ScaleSlider2(){ var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
            if (parentWidth){ jssor_slider3.$ScaleWidth(parentWidth - 30); }else{  window.setTimeout(ScaleSlider2, 30); }}ScaleSlider2();			
			      $(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);	
        });
    </script>
</body>
</html>