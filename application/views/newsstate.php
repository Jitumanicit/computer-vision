
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $metaTitle; ?></title>

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
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6642596179672273",
    enable_page_level_ads: true
  });
</script>
  <?php 
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
  ?> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="google-site-verification" content="KLbraL3yEKZ0-oNTC4SbfhCmMR5g2rzp8P_oue7rocI"/>
  <meta name="description" content="<?php echo $description; ?>"/>  
  <meta name="keywords" content="<?php echo $metaKeyword; ?>"/>
  <link rel="icon" type="image/x-icon" href="https://newsner.in/assets/images/NewsNER Icon.png" />  
  <meta name="msapplication-starturl" content="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'; ?>"/>
  <link rel="canonical" href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'; ?>"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type"   content="article"/>
  <meta property="og:title" content="<?php echo $metaTitle; ?>"/>
  <meta property="og:url" content="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'; ?>" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="<?php echo $description; ?>"/>
  <meta property="og:image" content="assets/images/MLF-BANNER-IMAGE-NEW1.jpg">
  <meta name="twitter:card" content="newsner - hot trending news"/>
  <meta name="twitter:site" content="@newsner"/>
  <meta name="twitter:title" content="<?php echo $metaTitle; ?>"/>
  <meta name="twitter:description" content="<?php echo $description; ?>"/>
  <meta name="twitter:image" content="assets/images/MLF-BANNER-IMAGE-NEW1.jpg"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css?vs=1') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css?vs=1') ?>">  
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
                                 <?php                 
                                 foreach($result as $val)               
                                 {
                                 ?>
                                  <li><a href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/category/'.strtolower($val['category']); }else{ echo base_url().'news/category/'.strtolower($val['category']); } ?>"><?php echo $val['category']; ?></a></li>
                                <?php              
                                 }
                                ?> 
                               </ul>
                             </li>                             
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                               <li style="padding-top: 15px;color:#fff;font-size: 16px">Feedback : contact@newsner.in</li>
                               <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook"></i></a></li>
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
         <a href="<?php echo base_url();?>"><img src="https://newsner.in/assets/images/Final Logo.jpg" alt="<?php echo $uri_segments[1]; ?> news" class="img-responsive center-logo" ></a>
       </div>
       <div class="col-md-9">  
         <img src="https://newsner.in/assets/images/Final Banner.png" alt="northeast news live" class="img-responsive">
       </div>
    </div>  
  </div>
  <div class="container-fluid bg-3"> 
         <div class="col-sm-6">       
              <a class="top-image" href="<?php if($uri_segments[1]!=''){ echo base_url().$uri_segments[1].'/latestnews/'.$Latest[0]['news_url']; }else{ echo base_url().'news/latestnews/'.$Latest[0]['news_url']; } ?>"><img src="<?php echo $path.$Latest[0]['picture']; ?>" class="auto-resize-landscape-single" alt="<?php echo $uri_segments[1]; ?> latest news"><span class="main-title"><?php echo $Latest[0]['Title']; ?></span></a>
         </div> 
         <div class="col-sm-3">       
          <h3 class="heading"><span class="heading-name">Breaking News</span></h3>	           
		      <?php
           if($Latest!='')
	          { 		 
            for($i=1;$i<count($Latest);$i++)
            {		    
		      ?>	          
		        <div class="media">
              <div class="media-left">
               <img src="<?php echo $path.$Latest[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> latest news" title="<?php echo $Latest[$i]['Title']; ?>">
              </div>
              <div class="media-body">			  
                <h5>                    
                 <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; }   echo base_url().$cantro.'/'.strtolower($Latest[$i]['category']).'/'.$Latest[$i]['news_url']; ?>"><?php echo substr($Latest[$i]['Title'], 0, 56); ?>  </br></a>
                </h5>              
		          </div>
            </div>          
		       <?php 
		        }
		      }
		     ?>	       
         </div> 
	      <div class="col-sm-3">	    
		     <div id="slider1_container"  height="450px" style="visibility: hidden; position: relative; margin: 0 auto;; overflow: hidden;" class="auto-resize-landscape-single-slider">         
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                  <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
                </div>    
                <div class="auto-resize-landscape-single-slider" data-u="slides" style="position: absolute; left: 0px; top: 0px; overflow: hidden;">
                  <?php foreach($advertiseTop as $val){?> 
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
 <?php if(count($Hot)>1){ ?>
  <div class="container-fluid bg-3">
    <h3 class="heading"><span class="heading-name">Hot & Trending</span></h3>
	  <div class="col-sm-3">   
     <?php
     if($Hot!='' && count($Hot)>1)
	   {        
      for($i=0;$i<1;$i++)
	    {			
       if($Hot[$i]['Type_Post']=='Post')
		   {		        
	     ?>
      <div class="thumbnail">
          <img src="<?php echo $path.$Hot[$i]['picture']; ?>" alt="<?php echo $uri_segments[1]; ?> news today" title="<?php echo $Hot[$i]['Title'];?>">
          <div class="caption">
            <p><a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php  echo substr($Hot[$i]['Title'], 0, 56); ?> </br></a></p>
            <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>
          </div>
      </div>
	    <?php 
		   }		
	   }
	 } 
	 ?>   
	</div>
  <div class="col-sm-3">     
	 <?php
   if($Hot!='' && count($Hot)>2)
	  { 
    for($i=1;$i<2;$i++)  
	  {		
    if($Hot[$i]['Type_Post']=='Post')
	   {        
	    ?>     
	     <div class="thumbnail">
          <img class="top-hot-image" src="<?php echo $path.$Hot[$i]['picture']; ?>" alt="<?php echo $uri_segments[1]; ?> news today" title="<?php echo $Hot[$i]['Title'];?>">
          <div class="caption">
            <p><a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php  echo substr($Hot[$i]['Title'], 0, 56); ?> </br></a></p>
            <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>
          </div>
      </div>		  
	    <?php 
		    }		 
	    }
	  } 
   ?>   
 </div>	 
<div class="col-sm-3"> 	 	
	 <?php
   if($Hot!='' && count($Hot)>8)
	 { 
   for($i=6;$i<=8;$i++)  
	 {		
   if($Hot[$i]['Type_Post']=='Post')
	  {	        
	 ?>	      
	  <div class="media">
      <div class="media-left">
        <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> news" title="<?php echo $Hot[$i]['Title']; ?>">
      </div>
      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php echo substr($Hot[$i]['Title'], 0, 56); ?> <br></a>
        </h5>
        <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>           
		  </div>       
    </div> 
	  <?php 
		 }			
	  }
	} 
 ?>   
</div>
<div class="col-sm-3"> 	 	
	<?php
   if($Hot!='' && count($Hot)>11)
	  { 
    for($i=9;$i<=11;$i++)  
	  {			
    if($Hot[$i]['Type_Post']=='Post')
	  {		        
	  ?>	      
	  <div class="media">
     <div class="media-left">
       <img src="<?php echo $path.$Hot[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> news" title="<?php echo $Hot[$i]['Title']; ?>"> 
     </div>
     <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($Hot[$i]['category']).'/'.$Hot[$i]['news_url']; ?>"> <?php echo substr($Hot[$i]['Title'], 0, 56); ?> <br></a>
        </h5>
        <span class="label label-primary"><?php echo $Hot[$i]['category']; ?></span>           
      </div>       
    </div>			  
	  <?php 
		 }			
	  }
   } 
 ?>   
 </div> 
</div> 
<hr>
<?php } ?>
 <div class="container-fluid bg-3">
    <div id="slider2_container">
       <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
       </div>
       <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1740px; height: 261px; overflow: hidden;">
          <?php foreach($advertiseMiddle as $val){?> 			
		       <div>
            <img data-u="image" src="<?php echo $path.$val['image'];?>"/>
           </div>
		     <?php } ?>	
      </div>
   </div>
 </div>
<hr>
<?php if(count($center)>1){ ?>
 <div class="container-fluid bg-3">
  <div class="col-sm-3"> 	 	
	<?php 
   if($center!='')
	 { 
   for($i=0;$i<count($center);$i++)  
	 {			
   if($center[$i]['Type_Post']=='Post')
	 {	        
	?>	      
  <div class="media">
   <div class="media-left">
    <img src="<?php echo $path.$center[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center[$i]['Title']; ?>">
   </div>
   <div class="media-body">
      <h5 class="media-heading">
        <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center[$i]['category']).'/'.$center[$i]['news_url']; ?>"> <?php echo substr($center[$i]['Title'], 0, 56); ?> <br></a>        
      </h5>
      <span class="label label-primary"><?php echo $center[$i]['category']; ?></span>         
	 </div>       
  </div>			  
	<?php 
	 }			
  }
 } 
?>   
</div> 
	
	<div class="col-sm-3"> 	 	
	 <?php 
    if($center1!='')
	  { 
    for($i=0;$i<count($center1);$i++)  
	   {			
     if($center1[$i]['Type_Post']=='Post')
	    {	        
	   ?>	      
	    <div class="media">
           <div class="media-left">
              <img src="<?php echo $path.$center1[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center1[$i]['Title']; ?>">
           </div>
           <div class="media-body">
              <h5 class="media-heading">
                <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center1[$i]['category']).'/'.$center1[$i]['news_url']; ?>"> <?php echo substr($center1[$i]['Title'], 0, 56); ?> <br></a>
              </h5>
              <span class="label label-primary"><?php echo $center[$i]['category']; ?></span>           
		   </div>       
        </div>			  
	    <?php 
		   }			
	   }
	  } 
	 ?>   
	</div> 
	
	<div class="col-sm-3"> 	 	
	 <?php 
      if($center2!='')
	  { 
      for($i=0;$i<count($center2);$i++)  
	  {			
      if($center2[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	    <div class="media">
          <div class="media-left">
              <img src="<?php echo $path.$center2[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election result" title="<?php echo $center2[$i]['Title']; ?>">
          </div>
          <div class="media-body">
             <h5 class="media-heading">
               <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center2[$i]['category']).'/'.$center2[$i]['news_url']; ?>"> <?php echo substr($center2[$i]['Title'], 0, 56); ?> <br></a>
             </h5>
            <span class="label label-primary"><?php echo $center2[$i]['category']; ?></span>          
		      </div>       
      </div>			  
	    <?php 
		  }			
	  }
	 } 
	 ?>   
	</div> 	
	<div class="col-sm-3">
       <div id="slider4_container" style="width:100%;height:100%;">           
         <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
         </div>          
         <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
            <?php foreach($advertiseCenter as $val){ ?> 
			   <div>
                   <img data-u="image" src="<?php echo $path.$val['image'];?>"/>
               </div>
			<?php } ?>
         </div>
       </div>
	</div>
 </div>

  <hr>
<?php } ?>

<?php if(count($center21)>1){ ?>
<div class="container-fluid bg-3">

 <div class="col-sm-3"> 	 	
	 <?php 
    if($center21!='')
	  { 
    for($i=0;$i<count($center21);$i++)  
	  {			
    if($center21[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	   <div class="media">
      <div class="media-left">
        <img src="<?php echo $path.$center21[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center21[$i]['Title']; ?>">
      </div>
      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center21[$i]['category']).'/'.$center21[$i]['news_url']; ?>"> <?php echo substr($center21[$i]['Title'], 0, 56); ?> <br></a>
        </h5>
        <span class="label label-primary"><?php echo $center21[$i]['category']; ?></span>          
		  </div>       
     </div>			  
	   <?php 
	    }			
	  }
	 } 
	 ?>   
	</div> 
    
	<div class="col-sm-3"> 	 	
	 <?php 
     if($center22!='')
	 { 
      for($i=0;$i<count($center22);$i++)  
	  {			
       if($center22[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	      <div class="media">
             <div class="media-left">
                <img src="<?php echo $path.$center22[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election result" title="<?php echo $center22[$i]['Title']; ?>">
             </div>
             <div class="media-body">
               <h5 class="media-heading"><a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center22[$i]['category']).'/'.$center22[$i]['news_url']; ?>"> <?php echo substr($center22[$i]['Title'], 0, 56); ?> <br></a>
               </h5>
               <span class="label label-primary"><?php echo $center22[$i]['category']; ?></span>        
		          </div>       
        </div>			  
	   <?php 
	    }			
	   }
	 } 
   ?>   
 </div> 
    
 <div class="col-sm-3"> 	 	
	 <?php 
    if($center23!='')
	  { 
    for($i=0;$i<count($center23);$i++)  
	  {			
    if($center23[$i]['Type_Post']=='Post')
	  {	        
	 ?>	      
	   <div class="media">
        <div class="media-left">
            <img src="<?php echo $path.$center23[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center23[$i]['Title']; ?>"> <!--  media-object  style="width:60px; height:auto"-->
        </div>
        <div class="media-body">
          <h5 class="media-heading">
            <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center23[$i]['category']).'/'.$center23[$i]['news_url']; ?>"> <?php echo substr($center23[$i]['Title'], 0, 56); ?> <br></a>
          </h5>
          <span class="label label-primary"><?php echo $center23[$i]['category']; ?></span>           
		  </div>       
    </div>			  
	  <?php 
	   }			
	  }
	 } 
	 ?>   
	</div> 
	
	<div class="col-sm-3"> 	 	
	 <?php 
    if($center24!='')
	  { 
    for($i=0;$i<count($center24);$i++)  
	  {			
    if($center24[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	     <div class="media">
          <div class="media-left">
              <img src="<?php echo $path.$center24[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election result" title="<?php echo $center24[$i]['Title']; ?>"> <!--  media-object  style="width:60px; height:auto"-->
          </div>
          <div class="media-body">
              <h5 class="media-heading">
                <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center24[$i]['category']).'/'.$center24[$i]['news_url']; ?>"> <?php echo substr($center24[$i]['Title'], 0, 56); ?> <br></a>                  
              </h5>
              <span class="label label-primary"><?php echo $center24[$i]['category']; ?></span>         
		      </div>       
        </div>			  
	   <?php 
	   }			
	  }
	 } 
	 ?>   
	</div>
</div>
<hr>
<?php } ?>
<?php if(count($center25)>1){ ?>
 <div class="container-fluid bg-3">
  <div class="col-sm-3"> 	 	
	 <?php 
   if($center25!='')
	  { 
    for($i=0;$i<count($center25);$i++)  
	  {			
    if($center25[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	   <div class="media">
       <div class="media-left">
           <img src="<?php echo $path.$center25[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center25[$i]['Title']; ?>">
       </div>
       <div class="media-body">
         <h5 class="media-heading">
          <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center25[$i]['category']).'/'.$center25[$i]['news_url']; ?>"> <?php echo substr($center25[$i]['Title'], 0, 56); ?> <br></a>            
         </h5>
         <span class="label label-primary"><?php echo $center25[$i]['category']; ?></span>           
		   </div>       
     </div>			  
	   <?php 
	    }			
	  }
	 } 
	 ?>   
	</div> 
    
	<div class="col-sm-3"> 	 	
	 <?php 
   if($center26!='')
	 { 
   for($i=0;$i<count($center26);$i++)  
	  {			
    if($center26[$i]['Type_Post']=='Post')
	   {	        
	   ?>	      
	    <div class="media">
          <div class="media-left">
              <img src="<?php echo $path.$center26[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election result" title="<?php echo $center26[$i]['Title']; ?>"> 
          </div>
          <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center26[$i]['category']).'/'.$center26[$i]['news_url']; ?>"> <?php echo substr($center26[$i]['Title'], 0, 56); ?> <br></a>   
            </h5>
            <span class="label label-primary"><?php echo $center26[$i]['category']; ?></span>          
		     </div>       
      </div>			  
	   <?php 
	    }			
	  }
	 } 
	 ?>   
	</div> 
    
	<div class="col-sm-3"> 	 	
	 <?php 
     if($center27!='')
	   { 
      for($i=0;$i<count($center27);$i++)  
	    {			
       if($center27[$i]['Type_Post']=='Post')
	     {	        
	     ?>	      
	     <div class="media">
           <div class="media-left">
             <img src="<?php echo $path.$center27[$i]['picture']; ?>" class="auto-resize-landscape" alt="<?php echo $uri_segments[1]; ?> election news" title="<?php echo $center27[$i]['Title']; ?>">
           </div>
           <div class="media-body">
            <h5 class="media-heading">
              <a href="<?php if($uri_segments[1]!=''){ $cantro = $uri_segments[1]; }else{ $cantro = "news"; } echo base_url().$cantro.'/'.strtolower($center27[$i]['category']).'/'.$center27[$i]['news_url']; ?>"> <?php echo substr($center27[$i]['Title'], 0, 56); ?> <br></a>
            </h5>
            <span class="label label-primary"><?php echo $center27[$i]['category']; ?></span>          
		    </div>       
      </div>			  
	   <?php 
	     }			
	    }
	  } 
	 ?>   
	</div>

	<div class="col-sm-3"> 			
	  <div id="slider3_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
       <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
       </div>           
       <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
         <?php foreach($advertiseBottom as $val){ ?> 			
		     <div>
            <img data-u="image" src="<?php echo $path.$val['image'];?>"/>
         </div>
		    <?php } ?>	                   
      </div> 
    </div>	 
  </div> 

 </div>
<hr>
<?php }  ?>

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
                <source src="<?php echo base_url().$path.$val['picture']; ?>" type="video/mp4">
             </video>
          </div>   
            <p>
              <?php  $pieces = explode(" ", $val['Title']); $first_part = implode(" ", array_splice($pieces, 0, 6)); ?>
              <a href="<?php echo base_url().$uri_segments[1].'/Video/'; ?>"><br><b><?php echo $first_part; ?></b></a>
            </p>  
	      </div>
	     <?php }else{ ?>
	        <div>
	           <div class="embed-responsive embed-responsive-4by3"> 
	              <iframe width="320" height="240"  src="<?php echo 'https://www.youtube.com/embed/'.$val['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	           </div>
             <p> 
              <?php  $pieces = explode(" ", $val['Title']);  $first_part = implode(" ", array_splice($pieces, 0, 5)); ?>
              <a href="<?php echo base_url().$uri_segments[1].'/video/'; ?>"><br><b><?php echo $first_part; ?></b></a>
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
                $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 2000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
                $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 },$BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };
			      var options1 = {
              $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800, $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 }, $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
            };
            var options2 = {
                $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
                $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 }, $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12,$Orientation: 1 }
            };
            var options3 = {
                $AutoPlay: 1, $AutoPlaySteps: 1, $Idle: 5000, $PauseOnHover: 1, $ArrowKeyNavigation: 1, $SlideEasing: $Jease$.$OutQuint, $SlideDuration: 800,
                $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1, $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$, $ChanceToShow: 2, $Steps: 1 }, $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$, $ChanceToShow: 2, $Steps: 1, $SpacingX: 12, $Orientation: 1 }
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
                if (parentWidth) { jssor_slider2.$ScaleWidth(parentWidth - 30);}else{ window.setTimeout(ScaleSliders, 30); }
            }ScaleSliders();
			      $(window).bind("load", ScaleSliders);
            $(window).bind("resize", ScaleSliders);
            $(window).bind("orientationchange", ScaleSliders);			
			      
            var jssor_slider3 = new $JssorSlider$("slider3_container", options2);           
            function ScaleSlider2()
			      {
              var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
              if (parentWidth){ jssor_slider3.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSlider2, 30);  }
            }ScaleSlider2();            			
			      $(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);
            
            var jssor_slider4 = new $JssorSlider$("slider4_container", options3);           
            function ScaleSlider4()
			      {
              var parentWidth = jssor_slider4.$Elmt.parentNode.clientWidth;
              if (parentWidth){ jssor_slider4.$ScaleWidth(parentWidth - 30); }else{ window.setTimeout(ScaleSlider4, 30); }
            }ScaleSlider4();			
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