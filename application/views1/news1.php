
<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url('assets/css/docs.min.js')?>"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.js')?>"></script>
  <!-- jssor slider scripts-->
  <script type="text/javascript" src="<?php echo base_url('assets/css/jssor.slider.min.js')?>"></script>
  <style>    
  hr
     {
        color: #f00;
        background-color: #f00;
        height: 5px;
     }

    .media hr{
        color: #f00;
        background-color: #f00;
        height: 0.5px;
     }

    h4{
       color:#f00;    	
    }
    h3,h2
    {
     color: #f00;    
    }
  
@import url('https://fonts.googleapis.com/css?family=Roboto');
a:hover,
a:focus {
    text-decoration: none;
    outline: none;
}
body{font-family: 'Roboto', sans-serif;}
/*
1.1 Header Area
***************************************************/
/*Bootstrap Reset*/
.navbar-nav > li > a {
    padding-top: 0;
    padding-bottom: 0;
}
.mainmenu {
    background-color: transparent;
    border-color: transparent;
    margin-bottom: 0;
	border: 0px !important;
}
.navbar-nav > li:last-child > a {
    padding-right: 0px;
    margin-right: 0px;
}
.dropdown-menu {
    padding: 0px 0; 
    margin: 0 0 0; 
    border: 0px solid transition !important;
	border: 0px solid rgba(0,0,0,.15);	
	border-radius: 0px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;

}
/*=-====Main Menu=====*/
.navbar-nav .open .dropdown-menu > li > a {padding: 16px 15px 16px 25px;
}
.header_bottom { /*background: #0071ba*/  background:#000000}
.header_area .header_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    color: #fff;
    font-size: 16px;
    text-transform: capitalize;
    padding: 16px 15px;
	font-family: 'Roboto', sans-serif;
}
.header_area .mainmenu .active a,
.header_area .mainmenu .active a:focus,
.header_area .mainmenu .active a:hover,
.header_area .mainmenu li a:hover,
.header_area .mainmenu li a:focus ,
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
    /*color: #0071ba;
    background: #54c6d4;*/
	color: #fff;
	background:#FF0000;
    outline: 0;
}
/*-----./ Main Menu-----*/

.navbar-default .navbar-toggle { border-color: #fff } /*Toggle Button*/
.navbar-default .navbar-toggle .icon-bar { background-color: #fff } /*Toggle Button*/

/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a{/*background: #54c6d4;*/ background: #ED5B5B;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{/*background: #CBEAF0;*/background: #FF9797;}
.mainmenu .collapse ul ul ul > li:hover > a{/*background: #CBEAF0;*/ background: #ED5B5B;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{/*background:#98D7E1;*/background:#ED5B5B;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{/*background:#0a1464;*/background:#ED5B5B;}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{/*background:#e4eeb8*/background:#ED5B5B;}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li{position:relative;}
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
}

  
     .goog-te-banner-frame.skiptranslate
	  {
        display: none !important;
      }
	  
      body
	  {
        top: 0px !important; 
      }
	
	/* .goog-te-spinner-pos + div
 	    {
           height: auto !important;
        }	   
    */
	   
	.goog-logo-link {
       display:none !important;
     } 

   /*
    .goog-te-gadget
	 {
          color: transparent !important;
     }
   */
   
   <!-- Slider -->
   /* jssor slider loading skin spin css */
   .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
   
   
   
   
  </style>
 </head>
<body>
 <div id="header-area" class="header_area">
        <div class="header_bottom">
            <div class="container">
                <div class="row">
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
                                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">service</a></li>
                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Category<span class="caret"></span></a>
								 <ul class="dropdown-menu">								   
								 <?php 								 
								 foreach($result as $val)								
								 {
		                         ?>
						           <li><a href="<?php echo base_url().'admin/Category/'.$val['category']; ?>"><?php echo $val['category']; ?></a></li>								   
                                  <?php							 
								 }
						        ?> 
							   </ul>
							  </li>
							  <li><a href="<?php echo base_url().'admin/Video';?>">Video</a></li>
                            </ul>
							<div id="google_translate_element" align="right"></div>  
                        </div>
                    </nav>
                </div> 
            </div>            
        </div>

 <div class="jumbotron">
   <!--<div class="container text-center">
    <h1>News</h1>-->
    <img src="assets/images/MLF-BANNER-IMAGE-NEW1.jpg" class="img-responsive" style="width:100%" alt="Image">	
   <!--</div>-->
 </div>
 
 <div class="container-fluid bg-3"> 
  <div class="row">
    <div class="col-md-12"> 
      <div class="col-sm-6">       
        <img src="<?php echo 'uploads/images/'.$Latest[0]['picture']; ?>" class="img-responsive" style="width:100%" alt="Image"><span><a><?php echo $Latest[0]['Title']; ?></a></span>
      </div>
      <h2>Latest News</h2>
	  
      <div class="col-sm-3">
	   <div class="row">         
		 <?php
         if($Latest!='')
		 { 
		  foreach($Latest as $val)
		  {		    
		 ?>	
		 <div class="media">	   
           <div class="media-left">
             <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
           </div>
           <div class="media-body">			  
              <h4 class="media-heading"><?php echo $val['category']; ?></h4>
              <p><a href="<?php echo base_url().'admin/LatestNews/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>			 
		   </div>
         </div>
		 <?php 
		  }
		 }
		 ?>	    
       </div>  
	 </div> 
	  <div class="col-sm-3">	    
		 <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width:100%;height:100%; overflow: hidden;">           
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>           
            <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:100%;height:100%; overflow: hidden;">
             <?php foreach($advertiseTop as $val){?> 
			  <div>
                 <img data-u="image" src="<?php echo 'uploads/images/'.$val['image'];?>"/>
              </div>
			 <?php } ?>			 
            </div> 
         </div>
	  </div>
   </div> 
  </div>
 <br>
 <hr>
 <div class="container-fluid bg-3">  
  <h2>Hot & Trending</h2>
   <div class="row">  
     <?php
     if($Hot!='')
	 { 
	   foreach($Hot as $val)
	   {	
         if($val['Type_Post']=='Post')
		 {			
	 ?>
	      <div class="col-sm-4"> 
	        <div class="media">
             <div class="media-left">
              <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
             </div>
             <div class="media-body">
              <h4 class="media-heading"><?php echo $val['category']; ?></h4>
              <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>           
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
 
 <hr>
 <div class="container-fluid bg-3">
    <div id="slider2_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1740px; height:200px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>
            <!-- Slides Container -->
            <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1740px; height: 200px;
            overflow: hidden;">
              <?php foreach($advertiseMiddle as $val){?> 			
			   <div>
                  <img data-u="image" src="<?php echo 'uploads/images/'.$val['image'];?>"/>
               </div>
		      <?php } ?>
			  
			  <!--
			  <div>
                    <img data-u="image" src="<?php echo base_url().'uploads/img/001.jpg';?>"/>
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url().'uploads/img/002.jpg';?>"/>
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url().'uploads/img/003.jpg';?>"/>
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url().'uploads/img/004.jpg';?>"/>
                </div>
				-->
            </div>
        </div>
 </div>
<hr>
<div class="container-fluid bg-3">  
 <div class="col-md-12"> 
  <div class="row">    
    <div class="col-sm-3">
     <h2>Sport News</h2>	
	 <?php
      if($Sport!='')
	  {
	    foreach($Sport as $val)
	    {
          if($val['Type_Post']=='Post')
		  {			
	 ?>
	     <div class="media">
          <div class="media-left">
            <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $val['category']; ?></h4>
            <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id'];?>"><?php echo $val['Title']; ?></a></p>
          </div>
        </div>
	 <?php 
		  }
	    }
	  } 
	 ?>     
    </div>        
    <div class="col-sm-3"> 
     <h2>Politics News</h2>
	   <?php
        if($Politics!='')
	    {
	     foreach($Politics as $val)
	     {
           if($val['Type_Post']=='Post')
		   { 			 
	   ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
         </div>
         <div class="media-body">
           <h4 class="media-heading"><?php echo $val['category']; ?></h4>
           <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
         </div>
       </div>
		<?php
		   }		
		 }
	   }
	   ?>      
    </div> 
    <div class="col-sm-3"> 
     <h2>Business News</h2> 	
	  <?php
       if($Business!='')
	    {
	     foreach($Business as $val)
	     {
          if($val['Type_Post']=='Post')
		   { 			 
	    ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
         </div>
         <div class="media-body">
           <h4 class="media-heading"><?php echo $val['category']; ?></h4>
           <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
         </div>
       </div>
      <?php
	       }
		 }
  	   }
	   ?>     
    </div>	
	
	<div class="col-sm-3">
       


	</div>
	
   </div>
  </div>   
 </div> 
 <hr>
 <div class="container-fluid bg-3">
 <div class="col-md-12"> 
  <div class="row">  
   <div class="col-sm-3">
     <h2>Entertainment News</h2> 	
	  <?php
       if($Entertainment!='')
	   {
	    foreach($Entertainment as $val)
	    {	
         if($val['Type_Post']=='Post')
		 {	  		 
	  ?>
	  <div class="media">
        <div class="media-left">
          <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $val['category']; ?></h4>
          <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
        </div>
      </div>
	  <?php 
		 }
		}
	   } 
	   ?>	  
    </div>
    <div class="col-sm-3"> 
     <h2>Law News</h2> 
	  <?php
       if($Law!='')
	   {
	    foreach($Law as $val)
	    {
         if($val['Type_Post']=='Post')
		 {			 
	  ?>
	  <div class="media">
        <div class="media-left">
          <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $val['category']; ?></h4>
          <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
        </div>
      </div>
	  <?php 
		 }
		}
	   }
	   ?>  
	</div>
    <div class="col-sm-3"> 
     <h2>Lifestyle News</h2> 	
	  <?php
       if($Lifestyle!='')
	   {
	    foreach($Lifestyle as $val)
	    {	
		  if($val['Type_Post']=='Post')
		  {  
	   ?>
	  <div class="media">
        <div class="media-left">
          <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $val['category']; ?></h4>
          <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
        </div>
      </div>
	 <?php 
		   }
		 }
	   }
	   ?>   
     </div> 
    <div class="col-sm-3"> 

	</div>
	
   </div>
  </div>   
 </div>
 <hr>
 <div class="container-fluid bg-3"> 
 <div class="col-md-12"> 
  <div class="row">  
   <div class="col-sm-3">
     <h2>Technology News</h2>
	  <?php
        if($Technology!='')
	    {
	     foreach($Technology as $val)
	     {
          if($val['Type_Post']=='Post')
		  {			 
	  ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
         </div>
         <div class="media-body">
           <h4 class="media-heading"><?php echo $val['category']; ?></h4>
           <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
         </div>
       </div>
	   <?php 
		  }
		 }
		}
	   ?>     
    </div>
   
   
    <div class="col-sm-3"> 
     <h2>Education News</h2> 	
	  <?php 
	    if($Education!='')
	    {
	     foreach($Education as $val)
	     {
          if($val['Type_Post']=='Post')
		  {			 
	    ?>
	   <div class="media">
         <div class="media-left">
           <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
         </div>
         <div class="media-body">
           <h4 class="media-heading"><?php echo $val['category']; ?></h4>
           <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
         </div>
       </div>
	  <?php 
	      }
		 }
		}
	   ?>     
    </div>
	 
    <div class="col-sm-3"> 
     <h2>Others News</h2> 	
	  <?php
	   if($Other!='')
	   {
	    foreach($Other as $val)
	    {
         if($val['Type_Post']=='Post')
	     {			 
	  ?>
	    <div class="media">
          <div class="media-left">
             <img src="<?php echo 'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $val['category']; ?></h4>
              <p><a href="<?php echo base_url().'admin/'.$val['category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
          </div>
        </div>	   
	  <?php 
		 }
	    } 
	   }
 	   ?>     
     </div> 	  
	 <div class="col-sm-3"> 
	      
		<div id="slider3_container" style="visibility: hidden; position: relative; margin: 0 auto; width:350px;height:200px; overflow: hidden;">           
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
          </div>           
          <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width:350px;height:200px; overflow: hidden;">
           <?php foreach($advertiseBottom as $val){?> 			
			<div>
               <img data-u="image" src="<?php echo 'uploads/images/'.$val['image'];?>"/>
            </div>
		   <?php } ?>	                   
          </div> 
        </div>
		
		
		
		
		
	  </div>
     </div>
    </div>   
   </div>
  </div>
 <hr>
 <div class="container-fluid bg-3 text-center">    
  <h2>Video</h2>   
    <div class="row">
      <?php
      if($Video!=''){
  	  foreach($Video as $val){?>	    
        <?php if($val['Types']!="youtube")		 
		 {
		?>
		<div class="col-sm-3">    
		   <video width="320" height="240" controls>
             <source src="<?php echo 'uploads/images/'.$val['picture']; ?>" type="video/mp4">
           </video> 
		   <p><a href="<?php echo base_url().'admin/Video/'; ?>"><b><?php echo $val['Title']; ?></b></a></p>
        </div> 
	   <?php } ?> 	   
      <?php }} ?>
    </div>  
 </div>
 <br>
 
 
 
 <footer class="container-fluid text-center">
  <p>Footer Text</p>
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
