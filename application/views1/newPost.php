<?php //include('header.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                 <!--<h3>Form Elements</h3>-->
              </div>              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Post</h2>
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
					  echo '<script>$(document).ready(function(){  success(); });</script>'	
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
					   echo '<script>$(document).ready(function(){ success(); });</script>';  
					?>
					   <!--<div class="alert alert-danger">-->
					   <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					     <?php echo $error; ?></div>
                    <?php
					 }					 
					?>
                    <!--
					else
					 {
						echo '<script>$(document).ready(function(){ success(); });</script>';
						echo '<div class="alert alert-danger"><?php echo $error; ?></div>'; 
					   
					 }
					--->

					
                    <br/>									
                    <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/savePost';?>" enctype="multipart/form-data" novalidate>
                       <div class="form-group">					   
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Title <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Title" name="Title" class="form-control col-md-7 col-xs-12" required>
                         </div>							 
						 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Select Priority <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="Priority" id="Priority" class="form-control col-md-7 col-xs-12" required>
						       <option value="">select</option>
							   <option value="Low">Low</option>
							   <option value="Medium">Medium</option>
							   <option value="High">High</option>  
						    </select>
                         </div>							 
                       </div> 
					   
					   <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Select Category <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="Category" id="Category" class="form-control col-md-7 col-xs-12" onchange="Categorys();">
						       <option value="">select</option>
							   <?php 
							     foreach($result as $val)
								 { 
							   ?>
								  <option value="<?php echo $val['id'];?>"><?php echo $val['category'];?></option>	 
							   <?php
								 }
							   ?>
						    </select>
                          </div>						 
						 
						 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Select Sub Category <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">                            
							 <select name="subCategory" id="subCategory" class="form-control col-md-7 col-xs-12">						        
						     </select>						   
                          </div>
                       </div>
					   
				   <!--<div class="form-group">
					      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Enter Source <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="Source" name="Source" class="form-control col-md-7 col-xs-12" required>
                          </div>	
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Enter Tags <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="Tags" name="Tags" class="form-control col-md-7 col-xs-12" required>
                          </div>						  						  
                       </div>-->
					   
                       <div class="form-group">
					     <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Images<span class="required"></span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">						    
                            <input type="file" id="picture" name="picture" required><b style="color:red">(Only jpg,png,gif format allowed)</b>
							<input type="hidden" name="Type_Post" id="Type_Post" value ="Post" class="form-control col-md-7 col-xs-12">
                         </div>					   
					   <!--
						 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Type Post<span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <select name="Type_Post" id="Type_Post" class="form-control col-md-7 col-xs-12" required>							     
							  <option value ="Post"> Post </option>							      
						   </select>
                         </div>
					   -->
					   </div>
					   <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Enter Contents <span class="required">*</span></label>
                         <div class="col-md-10 col-sm-10 col-xs-12">                            
                           <textarea class="tinymce" name="Contents" id="Contents" required="required"></textarea>
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
        <!-- /page content -->
        <script>
		  function Categorys()
		  {
			 var id = $('#Category').val();
			 $.ajax({
                       type: "post",                       
                       url: "<?php echo base_url().'admin/getsubCategory'?>",
                       data: {'id':id},
                       success: function(data)
					   {
						   var response = JSON.parse(data);	
						   //alert(response.results.length); 
						   var option ='<option value="">select</option>';
                           for(var i=0;i<response.results.length;i++)
						   {							 
							 option+='<option value="'+ response.results[i]['id'] +'">'+ response.results[i]['subcategory'] +'</option>'  
						   } 
						   $('#subCategory').html(option);						  				   
					   }
			       });
		  }
		  
		  function success()
   	      {	       
		     $('#successmsg').delay(2000).fadeOut('slow');		     
			 var hostname = $(location).attr('hostname');
		     var delay = 2000; 
		     //var url = "http://"+ hostname +"/admin/newPost/";
			//var url = "http://localhost/News/admin/newPost/";		   
             //setTimeout(function(){window.location.href = url;}, delay);
          }	
		</script> 
	 <?php include('footer.php');?>		 
	 
     