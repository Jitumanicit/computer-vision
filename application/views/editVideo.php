<?php //include('header.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left"></div>              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Article With Video</h2>
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
					?>
					 <script>
					   var a = "<?php echo $id ?>";
					   $(document).ready(function(){ success(a) });
					 </script>
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
					
                    <br/>									
                    <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/savePost';?>" enctype="multipart/form-data" novalidate>
                       <div class="form-group">					   
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Title</label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Title" name="Title" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['Title']; ?>">
						    <input type="hidden" id="editid" name="editid" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['id']; ?>">
						    <input type="hidden" id="username" name="username" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['username']; ?>">             
                            <input type="hidden" id="user_id" name="user_id" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['user_id']; ?>">              
                            <input type="hidden" id="ststus" name="status" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['status']; ?>">
                            <input type="hidden" id="reporter_name" name="reporter_name" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['reporter_name']; ?>">
                            <input type="hidden" id="created_at" name="created_at" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['created_at']; ?>">
                            <input type="hidden" id="role" name="role" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['role']; ?>">
                         </div>							 
						 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Select Priority</label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="Priority" id="Priority" class="form-control col-md-7 col-xs-12">
						      <option value="">select</option>
							  <option value="Low" <?php if($result[0]['Priority'] == 'Low') echo ' selected="selected"'; ?>>Low</option>
							  <option value="Medium" <?php if($result[0]['Priority'] == 'Medium') echo ' selected="selected"'; ?>>Medium</option>
							  <option value="High" <?php if($result[0]['Priority'] == 'High') echo ' selected="selected"'; ?>>High</option>  
						    </select>
                         </div>							 
                       </div>
					  
					   <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Select Category</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <select name="Category" id="Category" class="form-control col-md-7 col-xs-12" onchange="Categorys();">						      
							 
							 <option value="">select</option>							   
							    <?php                                 
							     foreach($results as $val)
								 { 
								 ?>
								  <option value="<?php echo $val['id'];?>" <?php if ($val['id'] == $result[0]['Category']) echo ' selected="selected"'; ?>><?php echo $val['category'];?></option>	 
							     <?php
								 }
							    ?>
						    </select>
                          </div>						  
						  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Select Sub Category</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">                            
							 <select name="subCategory" id="subCategory" class="form-control col-md-7 col-xs-12"></select>						   
                          </div>						  						
                       </div>
                       <script>
                            var catid="<?php echo $result[0]['subCategory']; ?>";
							$(document).ready(function(){  Categorys(catid); });
					   </script>					   
					   
                       <div class="form-group">
					     <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Type</label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                          <select name="Types" id="Types" class="form-control col-md-7 col-xs-12" onchange="videoTypes();" required>							     
							<option value=""> Select </option>
							<option value="own" <?php if ("own" == $result[0]['Types']){ echo 'selected="selected"';} ?>> Video </option>
							<option value="youtube" <?php if ("youtube" == $result[0]['Types']){ echo 'selected="selected"';} ?>> Youtube Video </option>
						  </select>
                        </div> 
						<script>
                            //var catid="<?php echo $result[0]['Types']; ?>";
							$(document).ready(function(){ videoTypes(); });
					    </script>						
					    <div id="ownvideo"> 
					      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Video</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">						    
                           
                            <input type="file" id="picture" name="picture"><b style="color:red">(Only MP4 format allowed)</b>
							<input type="hidden" id="pictures" name="pictures" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['picture']; ?>">
                            <input type="hidden" name="Type_Post" id="Type_Post" value ="Video" class="form-control col-md-7 col-xs-12">
						  </div>
					    </div>
						<div id="youtube">
						  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Url</label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" name="Url" id="Url" class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities($result[0]['Url']); ?>"> 
						  </div>	
					    </div>	
						<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Type Post<span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                           <select name="Type_Post" id="Type_Post" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['Type_Post']; ?>">							     
							 <option value="Video"> Video </option>
						   </select>
                         </div>-->
					   </div>
					   <div class="form-group">
					   	<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">State</label>
			            <div class="col-md-4 col-sm-4 col-xs-12">
                          <select name="State" id="State" class="form-control col-md-7 col-xs-12" required>
					       <option value="">select</option>
					       <option value="Assam" <?php if ("Assam"==$result[0]['State']) echo ' selected="selected"'; ?>>Assam</option>
					       <option value="Arunachal Pradesh" <?php if ("Arunachal Pradesh"==$result[0]['State']) echo ' selected="selected"'; ?>>Arunachal Pradesh</option>
					       <option value="Manipur" <?php if("Manipur"==$result[0]['State']) echo ' selected="selected"'; ?>>Manipur</option>
					       <option value="Meghalaya" <?php if("Meghalaya"==$result[0]['State']) echo ' selected="selected"'; ?>>Meghalaya</option>  
					       <option value="Mizoram"  <?php if("Mizoram"==$result[0]['State']) echo ' selected="selected"'; ?>>Mizoram</option> 
					       <option value="Nagaland" <?php if("Nagaland"==$result[0]['State']) echo ' selected="selected"'; ?>>Nagaland</option>
					       <option value="Sikkim" <?php if("Sikkim"==$result[0]['State']) echo ' selected="selected"'; ?>>Sikkim</option> 
                           <option value="Tripura" <?php if("Tripura"==$result[0]['State']) echo ' selected="selected"'; ?>>Tripura</option>
                           <option value="Universal" <?php if("Universal"==$result[0]['State']) echo ' selected="selected"'; ?>>Universal</option>    					
				         </select>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12"></div>	
                       </div>
					   <div class="form-group">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Enter Contents</label>
                         <div class="col-md-10 col-sm-10 col-xs-12">
                          <!--<textarea class="form-control col-md-7 col-xs-12" rows="10" name="Contents" id="Contents"><?php echo $result[0]['Contents']; ?></textarea>-->
                             <textarea class="tinymce" name="Contents" id="Contents" required="required"><?php echo $result[0]['Contents']; ?></textarea>
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
		  function Categorys(ids)
		  {
			 var id = $('#Category').val();			 
			 $.ajax({
                       type: "post",                       
                       url: "<?php echo base_url().'admin/getsubCategory'?>",
                       data: {'id':id},
                       success: function(data)
					   {
						   var response = JSON.parse(data);						   
                           var option ='<option value="">select</option>';
                           for(var i=0;i<response.results.length;i++)
						   {							 
							 option+='<option value="'+ response.results[i]['id'] +'">'+ response.results[i]['subcategory'] +'</option>'  
						   } 
						   $('#subCategory').html(option);
						   $('#subCategory').val(ids);
						   //alert(ids);
					   }
			       });
		  }
		  
		  
		 function success(id)
   	     {	       
		   $('#successmsg').delay(2000).fadeOut('slow');		   
		   //var url = "http://localhost/News/admin/editVideo/"+id;	

		   //var hostname = $(location).attr('hostname');
            var hostname ="<?php echo base_url() ?>";
            var url = hostname +"admin/editVideo/"+id;

		   var delay = 2000; 
		   //var url = "http://"+ hostname +"/admin/editVideo/"+id;	

 


           setTimeout(function(){window.location.href = url;}, delay);
         }
				 
        function videoTypes()
		{
			 var a = $('#Types').val();				
			 if('own'==a)
			 {
				$('#ownvideo').show(); 
				$('#youtube').hide();  
			 }
			 else
			 {				
				$('#ownvideo').hide();
				$('#youtube').show();				
			 }			 
		}
		 
	 </script> 
		
    <?php include('footer.php');?>
  