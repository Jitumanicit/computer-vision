
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
   
   
  .video-container video{
position: relative;
top: 0;
left: 0;
width: 100%;
height: 100%;
padding-top: 30px;overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed {
position: relative;
top: 0;
left: 0;
width: 100%;
height: 200px;
}

.container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}
.video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
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
    <h1>News</h1> 
  </div>-->
  <img src="<?php echo base_url().'assets/images/MLF-BANNER-IMAGE-NEW1.jpg'; ?>" class="img-responsive" style="width:100%" alt="Image">
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
 <!--<hr>
</div>-->
 
<div class="container-fluid bg-3 text-center">    
  <!--<h2>Video</h2>-->
  <div class="row">
    <?php foreach($results as $val)
	{			
	?>
	<div class="col-md-12"> 
     <!--<div class="col-sm-2"></div> -->
      <div class="col-sm-6">     
        <p><h4><?php echo $val['Title'];?></h4></p>
		<div class="container">
		<?php if($val['Types']=="youtube")
		{
			echo $val['Url'];
		?>	
		</div>
        <?php		
		}
		else
		{
		?>
	
		<div class="video-container">
		<video width="560" height="315" controls>
          <source src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" type="video/mp4">
        </video>
		</div>
		<?php
		}
		?>
		<p><?php echo $val['Contents'].'<br>';?><br></p>		
	  </div>
	  <div class="col-sm-4"></div> 	  
	</div>	 
	<?php } ?> 
	
  </div>
</div><br>
</div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
</html>
