
<!DOCTYPE html>
<html lang="en">
<head>  
  <!--<script>
  if (screen.width < 680) //if if mobile window is less then 780
  window.location.replace("../../m/")
  </script>-->
  <title>Newsner: Latest videos news, Breaking news videos & watch online news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" property="og:description" content="Watch the latest news online, viral videos news and full live coverage of regional news of Northeast only in newsner.in"/>
  <meta name="Keywords" content="Latest technology news, top breaking news in technology, current affair videos, watch trending news, viral video news, watch celebrity news, Watch online videos"/> 
  <meta name="msapplication-starturl" content="https://newsner.in/News/Video"/>
  <link rel="canonical" href="https://newsner.in/News/Video"/>
  <meta name="robots" content="index, follow" />
  <meta property="og:type"   content="article" />
  <meta property="og:title" content="Newsner: Latest videos news, Breaking news videos & watch online news" />
  <meta property="og:url" content="https://newsner.in/News/Video" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="Watch the latest news online, viral videos news and full live coverage of regional news of Northeast only in newsner.in" />
  <meta property="og:image" content="https://newsner.in/assets/images/MLF-BANNER-IMAGE-NEW1.jpg">
  <meta name="twitter:card" content="newsner - hot trending news" />
  <meta name="twitter:site" content="@newsner" />
  <meta name="twitter:title" content="Newsner: Latest videos news, Breaking news videos & watch online news" />
  <meta name="twitter:description" content="Watch the latest news online, viral videos news and full live coverage of regional news of Northeast only in newsner.in" />
  <meta name="twitter:image" content="https://newsner.in/assets/images/MLF-BANNER-IMAGE-NEW1.jpg" />

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    hr
     {
        color: #E1261D;
        background-color: #E1261D;
        height: 5px;
     }

    .media hr{
        color: #E1261D;
        background-color: #E1261D;
        height: 0.5px;
     }

    h4{
       color:#E1261D;    	
    }
    h3,h2
    {
     color: #E1261D;    
    }
    
  /* .video-responsive p
    {
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
   .video-responsive iframe p
    {
       left:0;
       top:0px;
       height:100%;
       width:100%;
       position:absolute;
    }*/
  
  
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
.header_bottom { /*background: #0071ba*/  background:#1357AC}
.header_area .header_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    color: #fff;
    font-size: 14px;
    text-transform: capitalize;
    padding: 16px 10px;
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
.mainmenu .collapse ul > li:hover > a{/*background: #54c6d4;*/ background: #E4252A;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{/*background: #CBEAF0;*/background:#E4252A;}
.mainmenu .collapse ul ul ul > li:hover > a{/*background: #CBEAF0;*/ background: #E4252A;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{/*background:#98D7E1;*/background:#1357AC;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{/*background:#0a1464;*/background:#E4252A;}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{/*background:#e4eeb8*/background:#E4252A;}

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
   
 /* 
  .video-container {
     position: relative;
     padding-bottom: 56.25%;
     padding-top: 30px; height: 0; overflow: hidden;
}*/

.video-container iframe,
.video-container object,
.video-container embed {
position: static;
top: 0;
left: 0;
width: 100%;
height: 100%;
 
}

.video-container video
{
position: relative;
top: 0;
left: 0;
width: 100%;
height: 100%;
padding-top: 30px;overflow: hidden;
}

 footer
   {
      margin-top: 0px;
      padding-top: 18px;
      background-color: #1357AC;
      border-top:none;
      color: #fff;
      height:auto;
   }
   footer a 
   {
      color:#fff;
   }
   footer hr
   {
       border-bottom: 1px solid #fff;
   }
   footer .container 
   {
     background-color: #1357AC;
     min-height: 40px;
     margin-bottom: 10px;
     padding: 20px 20px 20px 20px;
     overflow: hidden;
     border: 1px solid #fff;
     box-shadow: inset 0px 0px 45px pink;
     -webkit-box-shadow: inset 0px 0px 15px pink;
     -moz-box-shadow: inset 0px 0px 15px pink;
     border-radius: 5px 5px 5px 5px;
     -webkit-border-radius: 5px 5px 5px 5px;
     -moz-border-radius: 5px 5px 5px 5px;
     clear: both;
   }  
   

   
  </style>
</head>
<body>

<div id="header-area" class="header_area">
 <div class="header_bottom">
            <!--<div class="container">
                <div class="row">-->
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
                             <?php                 
                             foreach($result as $val)               
                             {
                            ?>
                            <li><a href="<?php echo base_url().$uri_segments[1].'/category/'.strtolower($val['category']); ?>"><?php echo $val['category']; ?></a></li>                   
                           <?php               
                            }
                           ?> 
                          </ul>
                        </li>
                       </ul>
                       <ul class="nav navbar-nav navbar-right">
                          <li style="padding-top: 15px;color:#fff;font-size: 14px">Feedback : contact@newsner.in</li>
                          <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square" style="font-size:20px;color:#fff;"></i></a></li>
                          <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter" style="font-size:20px;color:#fff;"></i></a></li> 
                          <li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram" style="font-size:20px;color:#fff;"></i></a></li>
                       </ul>
					  <!--<div id="google_translate_element" align="right"></div>  </div>-->
                    </nav>
              <!--  </div> </div> -->           
            </div>

           <!--<div class="jumbotron">             
               <img src="<?php echo base_url().'assets/images/MLF-BANNER-IMAGE-NEW1.jpg'; ?>" class="img-responsive" style="width:100%" alt="Image">
           </div>-->
           <div class="well"> 
             <div class="row">
               <div class="col-md-3">  
                 <a href="<?php echo base_url();?>"><img src="https://newsner.in/assets/images/Final Logo.jpg" class="img-responsive"></a>
              </div>
              <div class="col-md-9">  
                 <img src="https://newsner.in/assets/images/Final Banner.png" class="img-responsive">
              </div>
           </div>
        </div>


           <div class="container-fluid bg-3"> 
           <!--<div class="row">
               <div class="col-md-12"> 
                <div class="col-sm-2"></div> 
	             <div class="col-sm-6">       
                   <video width="820" height="540" controls>
                       <source src="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>" type="video/mp4">
                   </video> 	  
	             </div>    
               <div class="col-sm-4"></div> 
              </div> 
            </div>--> 
           <br>
           <!--<hr> </div>-->
 
<div class="container-fluid bg-3" style="text-align: justify; text-justify:auto;">    
  <!--<h2>Video</h2>-->
  <!--<div class="row">-->
  <?php 
  for($i=0;$i<count($results);$i++) 
  //foreach($results as $val)
	{			
	?>
	<div class="col-md-12">
  <h3 style="border-bottom: 4px solid red; color: white; font-size: 16px;"><span style="background-color: red; padding: 4px;"><?php echo $results[$i]['Title'];?></span></h3> 
   <div class="col-sm-6">
		<?php if($results[$i]['Types']=="youtube")
		{
		?>	
		<div class="embed-responsive embed-responsive-16by9">
		   <iframe width="820" height="440"  src="<?php  echo 'https://www.youtube.com/embed/'.$results[$i]['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
    <?php		
		}
		else
		{
		?>
	  <div class="embed-responsive embed-responsive-16by9" style="background-color:#000"> 
		  <video width="820" height="440" controls>
          <source src="<?php echo base_url().'uploads/images/'.$results[$i]['picture']; ?>" type="video/mp4">
      </video>
    </div>  
		<?php } ?>
    </div>
    <div class="col-sm-6">
	     <p><?php echo $results[$i]['Contents'].'<br>';?><br></p>
	  </div> 
	</div>	 
	<?php } ?> 
	
  <!--</div>-->

</div><br>
</div>
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
      <div class="fb-page" data-href="https://www.facebook.com/NewsNerInd/" data-tabs="timeline" data-width="400" data-height="438" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/NewsNerInd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NewsNerInd/">NewsNer India</a></blockquote></div>
    </div>
    <div class="col-sm-4">
      <script src="https://snapwidget.com/js/snapwidget.js"></script>
      <iframe src="https://snapwidget.com/embed/788813" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
    </div>
    <div class="col-sm-4">
      <a class="twitter-timeline" data-width="400" data-height="438" data-theme="light" href="https://twitter.com/Newsner1?ref_src=twsrc%5Etfw">Tweets by Newsner1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
 <p>© Newsner 2019 All Rights Reserved.</p>
</footer>
</body>
</html>
