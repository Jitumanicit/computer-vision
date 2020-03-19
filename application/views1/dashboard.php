<?php //include('header.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
			
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-video-camera"></i></div>
                  <div class="count"><?php echo $Video; ?></div>
                  <h3>Post Videos</h3>                 		  
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                  <div class="count"><?php echo $Posts; ?></div>
                  <h3>Post News</h3>                  
                </div>
              </div> 
			  
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check"></i></div>
                  <div class="count"><?php echo $PostPublish; ?></div>
                  <h3>Publish Post News</h3>                  
                </div>
              </div>  

			  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-remove"></i></div>
                  <div class="count"><?php echo $PostunPublish; ?></div>
                  <h3>Un Publish Post News</h3>                  
                </div>
              </div> 
			  
			   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check"></i></div>
                  <div class="count"><?php echo $VideoPublish; ?></div>
                  <h3>Publish Video News</h3>                  
                </div>
              </div>  

			  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-remove"></i></div>
                  <div class="count"><?php echo $VideounPublish; ?></div>
                  <h3>Un Publish Video News</h3>                  
                </div>
              </div> 
			  
			  
             </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
   <?php include('footer.php');?>	