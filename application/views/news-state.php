
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $metaTitle; ?></title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139430200-1"></script>
  <script>
    window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date());gtag('config', 'UA-139430200-1');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KP744NQ');
  </script>
   <!-- End Google Tag Manager -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script> 
     (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-6642596179672273", enable_page_level_ads: true });
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="google-site-verification" content="KLbraL3yEKZ0-oNTC4SbfhCmMR5g2rzp8P_oue7rocI"/>
  <meta name="description" content="<?php echo $description; ?>"/>  
  <meta name="keywords" content="<?php echo $metaKeyword; ?>"/> 
  <link rel="icon" type="image/x-icon" href="https://newsner.in/assets/images/NewsNER Icon.png" /> 
  <meta name="msapplication-starturl" content="http://www.newsner.in"/>
  <link rel="canonical" href="http://www.newsner.in"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type"   content="article"/>
  <meta property="og:title" content="Newsner: Latest news, Top Breaking news,Trending news, Current news & Northeast news"/>
  <meta property="og:url" content="http://www.newsner.in" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="<?php echo $description; ?>"/>
  <meta property="og:image" content="assets/images/MLF-BANNER-IMAGE-NEW1.jpg">
  <meta name="twitter:card" content="newsner - hot trending news"/>
  <meta name="twitter:site" content="@newsner"/>
  <meta name="twitter:title" content="Newsner: Latest news, Top Breaking news,Trending news, Current news & Northeast news"/>
  <meta name="twitter:description" content="<?php echo $description; ?>"/>
  <meta name="twitter:image" content="assets/images/MLF-BANNER-IMAGE-NEW1.jpg"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url('assets/css/docs.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.js')?>"></script>  
  <script type="text/javascript" src="<?php echo base_url('assets/css/jssor.slider.min.js')?>"></script>
  <script charset="UTF-8" src="//cdn.sendpulse.com/js/push/ae663e05fadcb37b8caad1c70ccd8cd6_0.js" async></script>

  <style>
    Slider -->.jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0)}to{transform:rotate(360deg)}}
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
              <li><a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/video'; }else{ echo base_url().'news/video'; }?>">Videos</a></li>
              <li><a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/blog'; }else{ echo base_url().'news/blog'; }?>">Blog</a></li>
              <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">All Sections<span class="caret"></span></a>
				      <ul class="dropdown-menu">
				       <?php foreach($result as $val) { ?>
				       <li><a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/category/'.strtolower($val['category']); }else{ echo base_url().'news/category/'.strtolower($val['category']); } ?>"><?php echo $val['category']; ?></a></li>
              <?php	} ?> 
				    </ul>
			     </li>						               
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li style="padding-top: 15px;color:#fff;font-size: 14px">Feedback : contact@newsner.in</li>
           <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square"></i></a></li>
           <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter"></i></a></li> 
			     <li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram"></i></a></li> 
         </ul>					
       </div>
     </nav>               
   </div>
 </div>
 <div class="well">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php echo base_url();?>"><img src="https://newsner.in/assets/images/Final Logo.jpg" alt="north east news" class="img-responsive center-logo" ></a>
      </div>
      <div class="col-md-9">
        <img src="https://newsner.in/assets/images/Final Banner.png" alt="northeast news live" class="img-responsive">
      </div>
    </div>
  </div>
  <?php 
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
  ?> 
   <div class="container-fluid bg-3">  
         <div class="col-sm-6">       
            <a class="top-image" href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/latestnews/'.$Latest[0]['news_url']; }else{ echo base_url().'news/latestnews/'.$Latest[0]['news_url']; } ?>"><img src="<?php echo $path.$Latest[0]['picture']; ?>" class="auto-resize-landscape-single" alt="north east news today"  title="<?php echo $Latest[0]['Title']; ?>"><span class="main-title"><?php echo $Latest[0]['Title']; ?></span>
            </a>
         </div>
         <div class="col-sm-3">        
          <h3 class="heading"><span class="heading-name">Breaking News</span></h3>	              
		       <?php if($Latest!=''){ for($i=1;$i<count($Latest);$i++){ ?>	            
		        <div class="media">
               <div class="media-left">
                    <img src="<?php echo $path.$Latest[$i]['picture']; ?>" class="auto-resize-landscape"  alt="latest news today"  title="<?php echo $Latest[$i]['Title']; ?>">
               </div>
               <div class="media-body">
                  <h5>                        
                   <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($Latest[$i]['category']).'/'.$Latest[$i]['news_url']; ?>">  <?php echo substr($Latest[$i]['Title'], 0, 56); ?></br></a>
                  </h5>              
		            </div>
              </div>            
		      <?php  } } ?>	
        </div> 

	 <div class="col-sm-3">	    
		 <div id="slider1_container" height="450px" style="visibility: hidden; position: relative; margin: 0 auto; overflow: hidden;" class="auto-resize-landscape-single-slider">  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
           <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>    
        <div class="auto-resize-landscape-single-slider" data-u="slides" style="position: absolute; left: 0px; top: 0px; overflow: hidden;">
         <?php foreach($advertiseTop as $val){ ?> 
		      <div  class="auto-resize-landscape-single-slider">
           <img data-u="image" src="<?php echo $path.$val['image'];?>"/>
          </div>
		     <?php } ?>
        </div> 
       </div>
	 </div>
   </div>  
  <br>
  <hr> 
  <div class="container-fluid bg-3">
   <h3 class="heading"><span class="heading-name">Hot & Trending</span></h3>
	  <div class="col-sm-3">  
      <?php if($Hot!=''  && count($Hot)>2){ for($i=0;$i<=2;$i++){ if($Hot[$i]['Type_Post']=='Post'){	?>	      
	     <div class="media">
          <div class="media-left">
            <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="breaking news today"  title="<?php echo $Hot[$i]['Title']; ?>">
          </div>
          <div class="media-body">
            <h5 class="media-heading">
                <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php echo substr($Hot[$i]['Title'], 0, 56); ?></a>
            </h5>
            <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>                
		      </div>       
      </div>
	    <?php } } } ?>   
  </div>

  <div class="col-sm-3">     
   <?php if($Hot!='' && count($Hot)>5){ for($i=3;$i<=5;$i++){ if($Hot[$i]['Type_Post']=='Post'){ ?>	      
	  <div class="media">
      <div class="media-left">
       <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="north east news headlines"  title="<?php echo $Hot[$i]['Title']; ?>">
      </div>
      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>">   <?php echo substr($Hot[$i]['Title'], 0, 56); ?> <br></a>
        </h5>
        <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>          
		 </div>       
       </div>		  
	   <?php }	} } ?>   
   </div>
	 
   <div class="col-sm-3"> 	 	
	 <?php if($Hot!='' && count($Hot)>8){ for($i=6;$i<=8;$i++){ if($Hot[$i]['Type_Post']=='Post'){	?>	      
	  <div class="media">
        <div class="media-left">
          <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="north east news headlines"  title="<?php echo $Hot[$i]['Title']; ?>">
        </div>
        <div class="media-body">
          <h5 class="media-heading">
            <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>">  <?php echo substr($Hot[$i]['Title'], 0, 56); ?> <br></a>
          </h5>
          <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>          
		   </div>       
      </div>	 
	   <?php } } } ?>   
	 </div>

   <div class="col-sm-3"> 	 	
	   <?php if($Hot!='' && count($Hot)>11){ for($i=9;$i<=11;$i++){ if($Hot[$i]['Type_Post']=='Post'){	 ?>	      
	      <div class="media">
         <div class="media-left">
           <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="north east news headlines"  title="<?php echo $Hot[$i]['Title']; ?>">
         </div>
         <div class="media-body">
            <h5 class="media-heading">
                <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php echo substr($Hot[$i]['Title'], 0, 56); ?> <br></a>
            </h5>
            <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>           
		      </div>       
        </div>			  
	    <?php } } } ?>   
	</div> 
 </div> 
 <hr>
 <div class="container-fluid bg-3">
    <div id="slider2_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1740px; height:261px; overflow: hidden;">
       <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
         <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
       </div>
       <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1740px; height: 261px; overflow: hidden;">
         <?php foreach($advertiseMiddle as $val){?> 			
			    <div>
            <img data-u="image" alt="northeast latest news" src="<?php echo $path.$val['image'];?>"/>
          </div>
		     <?php } ?>		  
			 </div>
    </div>
 </div>
<hr>
<div class="container-fluid bg-3"> 
  <div class="col-sm-3">
   <h3 class="heading"><span class="heading-name">Sport News</span></h3>
	  <?php if($Sport!=''){ foreach($Sport as $val){ if($val['Type_Post']=='Post'){?>
	  <div class="media">
      <div class="media-left">
        <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="sports news" title="<?php echo $val['Title']; ?>"> 
      </div>
      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>
        </h5>
        <span class="label label-primary"><?php echo $val['category']; ?></span>
      </div>
    </div>
	  <?php } } }  ?>     
  </div>        
  <div class="col-sm-3">
    <h3 class="heading"><span class="heading-name">Politics News</span></h3>
	   <?php if($Politics!=''){ foreach($Politics as $val){ if($val['Type_Post']=='Post'){ ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="political news" title="<?php echo $val['Title']; ?>">
         </div>
         <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>              
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>
         </div>
     </div>
		<?php } } } ?>      
  </div> 
  <div class="col-sm-3">
   <h3 class="heading"><span class="heading-name">Business News</span></h3>
	  <?php
     if($Business!='') { foreach($Business as $val){ if($val['Type_Post']=='Post'){ 			 
	  ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="business news" title="<?php echo $val['Title']; ?>">
         </div>
         <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>">  <?php  echo substr($val['Title'], 0, 56); ?> </br></a>
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>
         </div>
       </div>
      <?php } } } ?>     
  </div>	
	
	<div class="col-sm-3">
    <div id="slider4_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
       <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
           <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
       </div>           
       <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
         <?php foreach($advertiseCenter as $val){ ?> 
			    <div>
           <img data-u="image" alt="northeast latest news" src="<?php echo $path.$val['image'];?>"/>
          </div>
			  <?php } ?>
       </div> 
     </div>
	</div>
 </div> 
 <hr>
 
 <div class="container-fluid bg-3"> 
   <div class="col-sm-3">
     <h3 class="heading"><span class="heading-name">Entertainment News</span></h3>
	  <?php if($Entertainment!=''){ foreach($Entertainment as $val){ if($val['Type_Post']=='Post'){ ?>
	  <div class="media">
       <div class="media-left">
          <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="entertainment news" title="<?php echo $val['Title']; ?>">
       </div>
       <div class="media-body">
          <h5 class="media-heading">
            <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>">  <?php echo substr($val['Title'], 0, 56); ?> </br></a>
          </h5>
          <span class="label label-primary"><?php echo $val['category']; ?></span>          
       </div>
    </div>
	  <?php } } } ?>	  
</div>
<div class="col-sm-3">
  <h3 class="heading"><span class="heading-name">Law News</span></h3>
	 <?php if($Law!=''){ foreach($Law as $val){ if($val['Type_Post']=='Post'){ ?>
	  <div class="media">
        <div class="media-left">
          <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="law news" title="<?php echo $val['Title']; ?>">
        </div>
        <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>            
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>
       </div>
      </div>
	  <?php } } } ?>  
	</div>
	
  <div class="col-sm-3">
   <h3 class="heading"><span class="heading-name">Lifestyle News</span></h3>
	  <?php if($Lifestyle!=''){ foreach($Lifestyle as $val){ if($val['Type_Post']=='Post'){ ?>
	    <div class="media">
         <div class="media-left">
            <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="lifestyle news" title="<?php echo $val['Title']; ?>">
         </div>
         <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>            
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>
       </div>
      </div>
	  <?php } } } ?>   
</div> 

<div class="col-sm-3">	
  <h3 class="heading"><span class="heading-name">Crime News</span></h3>
	  <?php if($Crime!=''){ foreach($Crime as $val){ if($val['Type_Post']=='Post'){ ?>
	  <div class="media">
       <div class="media-left">
          <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="crime news" title="<?php echo $val['Title']; ?>">
       </div>
       <div class="media-body">
          <h5 class="media-heading">
            <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }  echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>            
          </h5>
          <span class="label label-primary"><?php echo $val['category']; ?></span>
       </div>
     </div>
	  <?php } } } ?> 	 
</div> 
</div>
<hr>
<div class="container-fluid bg-3">  
   <div class="col-sm-3">
     <h3 class="heading"><span class="heading-name">Technology News</span></h3>
	    <?php if($Technology!=''){ foreach($Technology as $val){ if($val['Type_Post']=='Post'){	 ?>
	    <div class="media">
        <div class="media-left">
           <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape"  alt="technology news" title="<?php echo $val['Title']; ?>">
        </div>
        <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>        
         </div>
       </div>
	    <?php } }	} ?>     
  </div>

  <div class="col-sm-3">	
   <h3 class="heading"><span class="heading-name">Education News</span></h3>
	  <?php if($Education!=''){ foreach($Education as $val){ if($val['Type_Post']=='Post'){	 ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="education news" title="<?php echo $val['Title']; ?>">
         </div>
         <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>"> <?php echo substr($val['Title'], 0, 56); ?> </br></a>
            </h5>
            <span class="label label-primary"><?php echo $val['category']; ?></span>         
         </div>
     </div>
	  <?php } } } ?>     
</div>
<div class="col-sm-3">
  <h3 class="heading"><span class="heading-name">Others News</span></h3>	
	 <?php if($Other!=''){ foreach($Other as $val) { if($val['Type_Post']=='Post') {	 ?>
	  <div class="media">
      <div class="media-left">
        <img src="<?php echo $path.$val['picture']; ?>" class="auto-resize-landscape" alt="medical news today" title="<?php echo $val['Title']; ?>">
      </div>
      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($val['category']).'/'.$val['news_url']; ?>">  <?php echo substr($val['Title'], 0, 56); ?> </br></a>
        </h5>
        <span class="label label-primary"><?php echo $val['category']; ?></span>
      </div>
    </div>	   
	  <?php  } } } ?>     
</div> 	  
<div class="col-sm-3"> 			
	<div id="slider3_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" alt="northeast latest news" src="../svg/loading/static-svg/spin.svg" />
    </div>           
    <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
      <?php foreach($advertiseBottom as $val){?> 			
	     <div>
          <img data-u="image" alt="northeast latest news" src="<?php echo $path.$val['image'];?>"/>
      </div>
		 <?php } ?>	                   
    </div> 
   </div>
  </div>   
</div> 
<hr>
<div class="container-fluid bg-3 text-center">    
  <h4>Videos</h4>   
    <div class="row">
      <?php
      if($Video!=''){ foreach($Video as $val){?> 
	   <div class="col-sm-3"> 
      <?php if($val['Types']!="youtube"){ ?>
	 	     <div>
	 	        <div class="embed-responsive embed-responsive-4by3" style="background-color:#000">  
		         <video width="320" height="240" controls>
                 <source src="<?php echo base_url().$path.$val['picture']; ?>"  type="video/mp4">
              </video>
            </div>   
            <p> 
              <?php  $pieces = explode(" ", $val['Title']); $first_part = implode(" ", array_splice($pieces, 0, 6)); ?>
              <a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/Video/'; }else{ echo base_url().'news/Video/'; } ?>"><br><b><?php $first_part; ?></b></a>
            </p>  
	      </div>
	     <?php }else{ ?>
	     <div>
	      <div class="embed-responsive embed-responsive-4by3"> 
	        <iframe width="320" height="240"  src="<?php echo 'https://www.youtube.com/embed/'.$val['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	     </div>
        <p> 
          <?php  $pieces = explode(" ", $val['Title']); $first_part = implode(" ", array_splice($pieces, 0, 5)); ?>
          <a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/video/'; }else{ echo base_url().'news/video/'; } ?>"><br><b><?php echo $first_part; ?></b></a>
        </p>
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
 <script>
  (function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
  })(jQuery);
</script>

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
                $AutoPlay: 1,$AutoPlaySteps: 1, $Idle: 2000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint,$SlideDuration: 800,$MinDragOffsetToSlide: 20, $SlideSpacing: 0,$UISearchMode: 1, $PlayOrientation: 1,$DragOrientation: 1,$ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };			
			     var options1 = {
                $AutoPlay: 1,$AutoPlaySteps: 1,$Idle: 5000,$PauseOnHover: 1,$ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint,$SlideDuration: 800,$MinDragOffsetToSlide: 20,$SlideSpacing: 0,$UISearchMode: 1,$PlayOrientation: 1, $DragOrientation: 1,$ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };
            var options2 = {
                $AutoPlay: 1,$AutoPlaySteps: 1,$Idle: 5000,$PauseOnHover: 1,$ArrowKeyNavigation: 1,$SlideEasing: $Jease$.$OutQuint,$SlideDuration: 800,$MinDragOffsetToSlide: 20,$SlideSpacing: 0,$UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1,$ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };
           var options3 = {
                $AutoPlay: 1, $AutoPlaySteps: 1,$Idle: 5000,$PauseOnHover: 1, $ArrowKeyNavigation: 1,$SlideEasing: $Jease$.$OutQuint,$SlideDuration: 800,$MinDragOffsetToSlide: 20, $SlideSpacing: 0,$UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1,$ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12,$Orientation: 1 }
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
            function ScaleSliders() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth) { jssor_slider2.$ScaleWidth(parentWidth - 30); }
                else{ window.setTimeout(ScaleSliders, 30); }
            }ScaleSliders();
			      $(window).bind("load", ScaleSliders);
            $(window).bind("resize", ScaleSliders);
            $(window).bind("orientationchange", ScaleSliders);			
		       	var jssor_slider3 = new $JssorSlider$("slider3_container", options2);           
            function ScaleSlider2()
			      {
               var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
               if (parentWidth){ jssor_slider3.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSlider2, 30); }
            }ScaleSlider2();			
		      	$(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);
            var jssor_slider4 = new $JssorSlider$("slider4_container", options3);           
            function ScaleSlider4()
			      {
              var parentWidth = jssor_slider4.$Elmt.parentNode.clientWidth;
              if (parentWidth){ jssor_slider4.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSlider4, 30); }
            }
            ScaleSlider4();			
			      $(window).bind("load", ScaleSlider4);
            $(window).bind("resize", ScaleSlider4);
            $(window).bind("orientationchange", ScaleSlider4);           
        });
    </script>
     <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KP744NQ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
     <!-- End Google Tag Manager (noscript) -->
 </body>
</html>
