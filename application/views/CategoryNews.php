
<!DOCTYPE html>
<html lang="en">
<head>  
  <title><?php if($this->uri->segment(3)=='business' ){  echo 'Newsner: Latest Business news, Trending business news, Top Business news of Northeast'; }else if($this->uri->segment(3)=='education'){ echo 'Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Newsner: Lifestyle news, Travel news, Health & Fitness news'; }else if($this->uri->segment(3)=='politics'){ echo 'Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast'; }else if($this->uri->segment(3)=='sports'){ echo 'Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news'; }else if($this->uri->segment(3)=='technology'){ echo 'Newsner: Latest technology news, Top breaking news, Trending technology news & technology news'; }else if($this->uri->segment(3)=='law'){ echo 'Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms'; }else if($this->uri->segment(3)=='crime'){ echo 'Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news.'; }else if($this->uri->segment(3)=='weather'){ echo 'Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates.'; }else{}  ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="Description" property="og:description" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Read the latest news in business today, share market, economy news, financial news, stock market of Northeast only in newsner.in'; }else if($this->uri->segment(3)=='education'){ echo 'Get the latest educational news online, recent educational news of northeast today only at newsner and top breaking news. Read stories and top articles of northeast in newsner.in'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Catch the Top trending news in entertainment industry of Northeast, latest news on film and cinema industry. Read top articles & stories of Northeast in newsner.in';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Catch the latest news on travel & lifestyle in newsner.in from all over northeast. Read top articles and stories of  lifestyle of Northeast in newsner.in'; }else if($this->uri->segment(3)=='politics'){ echo 'Get the latest Political news, online political news, current political news  and Politics news live. Newsner brings you the top breaking politcal news from all over northeast.'; }else if($this->uri->segment(3)=='sports'){ echo 'Catch all the sports live of northeast region at newsner.in. Get all the latest updates of sports and games online. Read top articles and stories of sports in northeast'; }else if($this->uri->segment(3)=='technology'){ echo 'Get the latest technology news and full live coverage of top technology in Northeast only in newsner.in.'; }else if($this->uri->segment(3)=='law'){ echo 'Get the latest Legal news and full coverage of top stories in Northeast, Shillong, Guwahati, Assam, Manipur,Nagaland, Mizoram only in newsner.in.'; }else if($this->uri->segment(3)=='crime'){ echo 'Get the latest crime news headlines from Northeast and full coverage of top stories in rape,crime,justice, only in newsner.in. Read about the latest crime online of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else if($this->uri->segment(3)=='weather'){ echo 'Get the latest weather updates and news weather alert from Northeast and full coverage of top stories of weather forecast only in newsner.in. Read about the top weather report of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else{}  ?>"/>

  <meta name="Keywords" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news'; }else if($this->uri->segment(3)=='education'){ echo 'times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Health & Fitness news, Travel news of northeast, Top travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news'; }else if($this->uri->segment(3)=='politics'){ echo 'Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news'; }else if($this->uri->segment(3)=='sports'){ echo 'live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news'; }else if($this->uri->segment(3)=='technology'){ echo 'Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology'; }else if($this->uri->segment(3)=='law'){ echo 'Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news'; }else if($this->uri->segment(3)=='crime'){ echo 'Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news'; }else if($this->uri->segment(3)=='weather'){ echo 'Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition'; }else{}  ?>"/> 

  <meta name="msapplication-starturl" content="<?php echo 'http://newsner.in/news/category/'.$this->uri->segment(3); ?>"/>
  <link rel="canonical" href="<?php echo 'http://newsner.in/news/category/'.$this->uri->segment(3); ?>"/>
  <meta name="robots" content="index, follow" />

  <meta property="og:type"   content="article" />
  <meta property="og:title" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Newsner: Latest Business news, Trending business news, Top Business news of Northeast'; }else if($this->uri->segment(3)=='education'){ echo 'Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Newsner: Lifestyle news, Travel news, Health & Fitness news'; }else if($this->uri->segment(3)=='politics'){ echo 'Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast'; }else if($this->uri->segment(3)=='sports'){ echo 'Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news'; }else if($this->uri->segment(3)=='technology'){ echo 'Newsner: Latest technology news, Top breaking news, Trending technology news & technology news'; }else if($this->uri->segment(3)=='law'){ echo 'Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms'; }else if($this->uri->segment(3)=='crime'){ echo 'Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news.'; }else if($this->uri->segment(3)=='weather'){ echo 'Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates.'; }else{}  ?>" />
  <meta property="og:url" content="<?php echo 'http://newsner.in/news/category/'.$this->uri->segment(3); ?>" />
  <meta property="og:site_name" content="Newsner"/>
  <meta property="og:description" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Read the latest news in business today, share market, economy news, financial news, stock market of Northeast only in newsner.in'; }else if($this->uri->segment(3)=='education'){ echo 'Get the latest educational news online, recent educational news of northeast today only at newsner and top breaking news. Read stories and top articles of northeast in newsner.in'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Catch the Top trending news in entertainment industry of Northeast, latest news on film and cinema industry. Read top articles & stories of Northeast in newsner.in';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Catch the latest news on travel & lifestyle in newsner.in from all over northeast. Read top articles and stories of  lifestyle of Northeast in newsner.in'; }else if($this->uri->segment(3)=='politics'){ echo 'Get the latest Political news, online political news, current political news  and Politics news live. Newsner brings you the top breaking politcal news from all over northeast.'; }else if($this->uri->segment(3)=='sports'){ echo 'Catch all the sports live of northeast region at newsner.in. Get all the latest updates of sports and games online. Read top articles and stories of sports in northeast'; }else if($this->uri->segment(3)=='technology'){ echo 'Get the latest technology news and full live coverage of top technology in Northeast only in newsner.in.'; }else if($this->uri->segment(3)=='law'){ echo 'Get the latest Legal news and full coverage of top stories in Northeast, Shillong, Guwahati, Assam, Manipur,Nagaland, Mizoram only in newsner.in.'; }else if($this->uri->segment(3)=='crime'){ echo 'Get the latest crime news headlines from Northeast and full coverage of top stories in rape,crime,justice, only in newsner.in. Read about the latest crime online of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else if($this->uri->segment(3)=='weather'){ echo 'Get the latest weather updates and news weather alert from Northeast and full coverage of top stories of weather forecast only in newsner.in. Read about the top weather report of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else{}  ?>" />

  <meta property="og:image" content="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>">
  <meta name="twitter:card" content="newsner - hot trending news"/>
  <meta name="twitter:site" content="@newsner" />

  <meta name="twitter:title" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Newsner: Latest Business news, Trending business news, Top Business news of Northeast'; }else if($this->uri->segment(3)=='education'){ echo 'Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Newsner: Lifestyle news, Travel news, Health & Fitness news'; }else if($this->uri->segment(3)=='politics'){ echo 'Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast'; }else if($this->uri->segment(3)=='sports'){ echo 'Newsner: sports news, Top breaking news, Health & Fitness news & Latest sports news'; }else if($this->uri->segment(3)=='technology'){ echo 'Newsner: Latest technology news, Top breaking news, Trending technology news & technology news'; }else if($this->uri->segment(3)=='law'){ echo 'Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms'; }else if($this->uri->segment(3)=='crime'){ echo 'Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news.'; }else if($this->uri->segment(3)=='weather'){ echo 'Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates.'; }else{}  ?>" />

  <meta name="twitter:description" content="<?php if($this->uri->segment(3)=='business' ){  echo 'Read the latest news in business today, share market, economy news, financial news, stock market of Northeast only in newsner.in'; }else if($this->uri->segment(3)=='education'){ echo 'Get the latest educational news online, recent educational news of northeast today only at newsner and top breaking news. Read stories and top articles of northeast in newsner.in'; }else if($this->uri->segment(3)=='entertainment'){ echo 'Catch the Top trending news in entertainment industry of Northeast, latest news on film and cinema industry. Read top articles & stories of Northeast in newsner.in';  }else if($this->uri->segment(3)=='lifestyle'){ echo 'Catch the latest news on travel & lifestyle in newsner.in from all over northeast. Read top articles and stories of  lifestyle of Northeast in newsner.in'; }else if($this->uri->segment(3)=='politics'){ echo 'Get the latest Political news, online political news, current political news  and Politics news live. Newsner brings you the top breaking politcal news from all over northeast.'; }else if($this->uri->segment(3)=='sports'){ echo 'Catch all the sports live of northeast region at newsner.in. Get all the latest updates of sports and games online. Read top articles and stories of sports in northeast'; }else if($this->uri->segment(3)=='technology'){ echo 'Get the latest technology news and full live coverage of top technology in Northeast only in newsner.in.'; }else if($this->uri->segment(3)=='law'){ echo 'Get the latest Legal news and full coverage of top stories in Northeast, Shillong, Guwahati, Assam, Manipur,Nagaland, Mizoram only in newsner.in.'; }else if($this->uri->segment(3)=='crime'){ echo 'Get the latest crime news headlines from Northeast and full coverage of top stories in rape,crime,justice, only in newsner.in. Read about the latest crime online of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else if($this->uri->segment(3)=='weather'){ echo 'Get the latest weather updates and news weather alert from Northeast and full coverage of top stories of weather forecast only in newsner.in. Read about the top weather report of Assam, Meghalaya, Manipur, Silchar, Arunachal, Mizoram & Nagaland.'; }else{}  ?>" />

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
    <!--.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
       
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
	
	.img-valign {
       vertical-align: middle;	  
       margin-bottom: 0.75em;
    }

    .text1 {
       font-size: 44px;
    }

    .text2 {
       font-size: 14px;	   
    }
	
	p{
	  /*border-bottom: 1px solid;*/
	  margin-bottom: 0.75em;
	}
		
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

    h4,h5{
       color:#E1261D;    	
    }
    h3,h2
    {
     color: #E1261D;    
    }-->
   @import url('https://fonts.googleapis.com/css?family=Roboto');
a:hover,
a:focus {
    text-decoration: none;
    outline: none;
}
/*body{font-family: 'Roboto', sans-serif;}*/
body{font-family: 'Lato', sans-serif;}

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
.mainmenu .collapse ul > li:hover > a{/*background: #54c6d4;*/ background: #E4252A;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{/*background: #CBEAF0;*/background: #E4252A;}
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
   .goog-logo-link {
       display:none !important;
     } 

	 
	 
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
    .auto-resize-landscape
	  {
          height: 70px;
          width: 80px;
          margin-bottom:10px;
     } 
  
     .auto-resize-landscape-single
     {
          height: 450px;
          width: 100%;
          margin-bottom:10px;
     }  

	  footer
   {
      margin-top: 0px;
      padding-top: 18px;
      background-color:#1357AC;
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
           <!-- <div class="container">
                <div class="row">-->
                    <nav role="navigation" class="navbar navbar-default mainmenu">              
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
                             <li class="dropdown"><a data-toggle="dropdown"  class="dropdown-toggle">All Sections<span class="caret"></span></a>
                              <ul class="dropdown-menu">                   
                                 <?php                 
                                 foreach($result as $val)
                                 { 
                                 ?>                               
                                 <li><a href="<?php echo base_url().'news/category/'.strtolower($val['category']); ?>"><?php echo $val['category']; ?></a></li>
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
							           <!--<div id="google_translate_element" align="right"></div> -->  
                        </div>
                    </nav>
               <!-- </div> 
            </div>  -->          
        </div><!-- /.header_bottom -->


<div class="jumbotron"> 
  <img src="<?php echo base_url().'assets/images/MLF-BANNER-IMAGE-NEW1.jpg'; ?>" class="img-responsive" style="width:100%" alt="Image">
</div>

<div class="container-fluid bg-3"> 
  <div class="row">
     <div class="col-md-12"><a><h1><?php if($results!=''){ echo  $results[0]['Title']; } ?></h1></a>  </div>
    <div class="col-md-12"> 
      <div class="col-sm-8" style="text-align: justify; text-justify:auto;">   
      <?php if($results!=''){ ?>    
        <img src="<?php echo base_url().'uploads/images/'.$results[0]['picture']; ?>" class="auto-resize-landscape-single" alt="Image"><!--- style="width:100%" height="100%"-->
         <!--<span><a><h3><?php echo $results[0]['Title']; ?></h3></a>--<br/>-->
           <p style="font-size:20px"> 
           <?php
             $str = $results[0]['Contents'];         
             $a= explode("\n",$str);
             for($i=0;$i<count($a);$i++)
             {
                echo $a[$i];//.'</br>'
             }
           ?>             
          </p>
          <p style="font-size:12px;"><?php
              echo "<br><b>Updated by: </b>".$results[0]['reporter_name'].'&nbsp'.$results[0]['created_at']; ?>
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
             <img src="<?php echo base_url().'uploads/images/'.$results[$i]['picture']; ?>" class="auto-resize-landscape"> <!--class="media-object"   style="width:60px"-->
           </div>
           <div class="media-body">
             <h4 class="media-heading"><?php echo $results[$i]['category']; ?></h4>
             <p><a href="<?php echo base_url().'news/'.strtolower($results[$i]['category']).'/'.$results[$i]['id']; ?>"><?php echo $results[$i]['Title']; ?></a></p>
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
             <img src="<?php echo base_url().'uploads/images/'.$age[1][$j+5]['picture']; ?>" class="auto-resize-landscape"><!--  media-object   style="width:60px"-->
           </div>
           <div class="media-body">
             <h4 class="media-heading"><?php echo $age[1][$j+5]['category']; ?></h4>
             <p><a href="<?php echo base_url().'news/'.strtolower($age[1][$j+5]['category']).'/'.$age[1][$j+5]['id']; ?>"><?php echo $age[1][$j+5]['Title']; ?></a></p>
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
  <!--<h2>Hot & Trending</h2>-->  
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
                 <img src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" class="auto-resize-landscape" style="width:100px">
               </div>
               <div class="media-body">
                 <h5 class="media-heading"><?php echo $val['subcategory']; ?></h5>
                 <p>
                   <?php  $pieces = explode(" ", $val['Title']);
                    $first_part = implode(" ", array_splice($pieces, 0,4));
                    echo $first_part; ?>
                   <a href="<?php echo base_url().'news/'.strtolower($val['category']).'/'.$val['id']; ?>"><b> Read More </b></a>
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
		    <p><a href="<?php echo base_url().'news/video/'; ?>"><b><?php echo $val['Title']; ?></b></a></p> 
	      </div>
	      <?php }else{ ?>
	       <div class="video-responsive">
	          <div class="embed-responsive embed-responsive-4by3"> 
                 <iframe width="320" height="240"  src="<?php echo 'https://www.youtube.com/embed/'.$val['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	          </div>
              <p><a href="<?php echo base_url().'news/video/'; ?>"><b><?php echo $val['Title']; ?></b></a></p>
	       </div>
          <?php } ?>
       </div> 
      <?php }} ?>
    </div>  
 </div>

 <br>
 <footer class="container-fluid text-center">
  © Newsner 2019 All Rights Reserved.
 </footer>
 
 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
 /* new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');*/
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
