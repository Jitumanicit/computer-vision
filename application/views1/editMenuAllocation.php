<?php //include('header.php');?>
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
                    <h2>Menu Allocation</h2>
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
					  //echo '<script>$(document).ready(function(){  success(); });</script>';	  
					 ?> 
					  <!--<div class="alert alert-success">-->
					   <script>
					     var a = "<?php echo $id; ?>";
						 $(document).ready(function(){ success(a)});
					   </script>
					   <div class="alert alert-success alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					     <?php echo $msg; ?>
					   </div>
					 <?php
					}
					?>
                    <br/>									
                    <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/saveMenu';?>" enctype="multipart/form-data">
                       <div class="form-group">							 
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">User Name<span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <select name="username" id="username" class="form-control col-md-7 col-xs-12" required>
						     <option value="">select</option>
							 <?php foreach($results as $val)
							  { ?>
							   <option value="<?php echo $val['id']; ?>" <?php if ($result[0]['user_id'] == $val['id']) echo ' selected="selected"'; ?> ><?php echo $val['username']; ?></option>							   
						     <?php } ?>
						   </select>
						   <input type="hidden" id="editid" name="editid" value="<?php echo $result[0]['id'];?>">
                         </div>							
                       </div>					  
					   
					   <div class="form-group">
                          <div class="col-md-2 col-sm-2 col-xs-12"></div>                         
						  <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="Checkbox" id="P_article_post" name="P_article_post" <?php if ($result[0]['P_article_post']=="on"){ echo "checked";}?> ><span class="required"> Publish article with image </span>
                          </div>
						  <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="Checkbox" id="P_article_video" name="P_article_video" <?php if ($result[0]['P_article_video']=="on"){ echo "checked";}?> ><span class="required"> Publish article with video </span>
                          </div>
						  <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="Checkbox" id="P_category" name="P_category" <?php if ($result[0]['P_category']=="on"){ echo "checked";}?> ><span class="required"> Create Category</span>
                          </div>
						  <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="Checkbox" id="P_advertise" name="P_advertise" <?php if ($result[0]['P_advertise']=="on"){echo "checked";}?> ><span class="required"> Add Advertise</span>
                          </div>
                       </div>					  
					   					  				  
                       </div>					   
                       <div class="form-group" align="center">
                         <input type="submit" name="userSubmit" value="Submit" class="btn btn-primary">		 
                       </div>
					   <div id="post_error" class="alert alert-danger" style="display:none"></div>
                       <div id="post_success" class="alert alert-success" style="display:none"></div>
                     </form>		 
                   </div>
                 </div>
               </div>
             </div>  
            </div>
          </div>
        </div>
        <script>
	    function success(id)
   	    { 			
			$('#successmsg').delay(2000).fadeOut('slow');
			var hostname = $(location).attr('hostname');
			var delay = 2000; 
		    //var url = "http://"+ hostname +"/admin/editMenu/"+id; 			
			//setTimeout(function(){window.location.href = url;}, delay);
        } 
		
	  </script>
	 <?php include('footer.php');?>					

