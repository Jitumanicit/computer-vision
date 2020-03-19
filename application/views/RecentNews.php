
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  
  
  <style>    
   /*.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }*/
       
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
  </style>
</head>
<body>

<div class="bs-example">
    <nav id="myNavbar" class="navbar-fixed-top navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">News</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="About">About Us</a></li>                    
					          <li class="dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Category<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                              <li><a href="Entertainment">Entertainment</a></li>
                              <li><a href="Business">Business</a></li>
                              <li><a href="Politics">Politics</a></li>                            
							                <li><a href="Technology">Science and Technology</a></li>
                              <li><a href="Sports">Sports</a></li>
							                <li><a href="Law">Law</a></li>
                              <li><a href="Education">Education</a></li>							
							                <li><a href="Lifestyle">Lifestyle</a></li>
							                <li><a href="LawOrder">Law and Order</a></li>
							                <li><a href="Others">Others</a></li>
                        </ul>
                    </li>					
				           <li><a href="Video">Video</a></li>
					        <li><a href="RecentNews">Recent News</a></li>
                </ul>  
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="https://www.facebook.com/NewsNer-850639061994943/" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-square" style="font-size:20px;color:#fff;"></i></a></li>
                   <li><a href="https://twitter.com/NewsNerIndia" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter" style="font-size:20px;color:#fff;"></i></a></li> 
                   <li><a href="https://www.instagram.com/newsnerind/" target="_blank" title="Follow Us On Instagram"><i class="fa fa-instagram" style="font-size:20px;color:#fff;"></i></a></li> 
                </ul>             
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>

  <div class="jumbotron">
     <div class="container text-center">
       <h1>News</h1>
     </div>
  </div>
  <div class="container-fluid bg-3"> 
    <div class="row">
      <div class="col-md-12"> 
	    <div class="col-sm-1"></div> 		
        <div class="col-sm-6" height="50px">       
          <img src="<?php echo base_url().'uploads/images/'.$results[0]['picture'];?>" class="responsive" width="100%" height="500px" alt="Image">
		  <span>
		  <a><h3><?php echo $result[0]['Title']; ?></h3></a>
		  <br/>
		  <p style="font-size:20px">		 
			  <?php echo $result[0]['Contents']; ?> 		  		  
		  </p>
		  </span>
        </div>		
        <div class="col-sm-4">
		 <?php foreach($results as $val)
	     {			
	     ?>
	     <div class="media">
           <div class="media-left">
               <img src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" class="media-object" style="width:60px">
           </div>
           <div class="media-body">
              <h4 class="media-heading"><?php echo $val['Category']; ?></h4>
              <p><a href="<?php echo base_url().'admin/'.$val['Category'].'/'.$val['id']; ?>"><?php echo $val['Title']; ?></a></p>
           </div>
         </div>
	    <?php } ?>			
	  </div> 		
	  <div class="col-sm-1"></div>
	 </div> 
	 <hr>
     <div class="container-fluid bg-3 text-center">    
      <h2>Video</h2>
       <div class="row">
	     <?php foreach($Video as $val)
	     {			
	     ?>
          <div class="col-sm-3">     
            <video width="320" height="240" controls>
                <source src="<?php echo base_url().'uploads/images/'.$val['picture']; ?>" type="video/mp4">
            </video>      
          </div>
		<?php } ?>			 
        </div>
      </div>
	 <br>	 
    </div> 
   </div>   
  </div>
 </div>
 <br/>
 <footer class="container-fluid text-center">
   <p>Footer Text</p>
 </footer>
 
</body>
</html>
