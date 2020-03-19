
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">                 
              </div>              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>                       
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>				  
                  <div class="x_content">
				     <?php if($msg!="")
					 {
						echo '<script>$(document).ready(function(){  success(); });</script>';	  
					 ?> 
					  <!--<div class="alert alert-success">-->
					  <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					      <?php echo $msg; ?></div>
					 <?php
					 }
					 ?>
					 
					 <?php if($error!="")
					 {
						echo '<script>$(document).ready(function(){  success(); });</script>';	  
					 ?> 
					  <!--<div class="alert alert-danger">-->
					  <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					     <?php echo $error; ?></div>
					 <?php
					 }
					 ?>
                    <br/>									
                     <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/saveCategory';?>" enctype="multipart/form-data">
                       <div class="form-group">					   
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Category <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="category" name="category" class="form-control col-md-7 col-xs-12 alphaonly" required>
                         </div>				 
                       </div> 	   
                       <div class="form-group" align="center">
                           <input type="submit" name="userSubmit" value="Submit" class="btn btn-primary">		 
                       </div>					   
                     </form>		 
                   </div>
                 </div>
               </div>
             </div>  
            </div>
          </div>
        </div> 
    <script>
	  function success()
   	      {	       
		     $('#successmsg').delay(2000).fadeOut('slow');		     
			 var hostname = $(location).attr('hostname');
		     var delay = 2000; 
		     //var url = "http://"+ hostname +"/admin/NewCategory/";
			 //var url = "http://localhost/News/admin/NewCategory/";		   
             //setTimeout(function(){window.location.href = url;}, delay);
          }	
		  
		  $('.alphaonly').bind('keyup blur',function(){ 
                    var node = $(this);
                    node.val(node.val().replace(/[^a-z A-Z]/g,'') ); }
             );
		  
	</script>
    <?php include('footer.php');?>
 
	
