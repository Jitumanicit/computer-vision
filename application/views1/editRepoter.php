<?php //include('header.php'); ?>
	<!-- page content -->
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
                    <h2>Registration</h2>
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
                   <br/>									
                    <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/NewReporter';?>" enctype="multipart/form-data">
                      <div> 
				        <?php if($msg!='')
				         {						  
                         ?>
						 <script>
					         var a = "<?php echo $id; ?>";							
						     $(document).ready(function(){ success(a) });
					     </script> 
                        <!--<div class="alert alert-success" id="successmsg" role="alert">-->
                        <div class="alert alert-success alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php echo $msg; ?></div>
				        <?php
				         }
				        ?>						
						<?php if($error!='')
				         {				           	
                         ?>
						 <script>
					         var b = "<?php echo $id; ?>";							
						     $(document).ready(function(){ success(b) });
					     </script>
                        <!--<div class="alert alert-danger" id="successmsg" role="alert">-->
                        <div class="alert alert-danger alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php echo $error; ?></div>
				        <?php
				         }
				        ?>						
						<?php if($user!='' || $pass!='' || $emailid!='' || $phone!='' || $reporter!='' || $pancard!='' || $passerror!=''|| $phoneerror!='')
				         {				          
                         ?>
						  <script>
					         var b = "<?php echo $id; ?>";							
						     $(document).ready(function(){ success(b) });
					     </script>
                        <!--<div class="alert alert-danger" id="successmsg" role="alert">-->
                        <div class="alert alert-danger alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php if($user!=''){ echo $user."<br>";} if($pass!=''){ echo $pass."<br>";} if($emailid!=''){ echo $emailid."<br>";} if($phone!=''){ echo $phone."<br>";}  if($reporter!=''){ echo $reporter."<br>";} if($pancard!=''){ echo $pancard."<br>";} if($passerror!=''){ echo $passerror."<br>";} if($phoneerror!=''){ echo $phoneerror."<br>";}   ?></div>
				        <?php
				         }
				        ?>							
			          </div>
					  
					  <div class="form-group">					   
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Username<span class="required"></span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Username" name="Username" value="<?php echo $result[0]['username']; ?>" class="form-control col-md-7 col-xs-12" required>
						   <input type="hidden" id="types" name="types" value="reporter" class="form-control col-md-7 col-xs-12">
						   <input type="hidden" id="editid" name="editid" value="<?php echo $result[0]['id']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>							 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Password<span class="required"></span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="password" id="Password" name="Password" value="<?php echo $result[0]['password']; ?>" class="form-control col-md-7 col-xs-12" placeholder="6 characters only" required>
                        </div>							 
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Email<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Email" name="Email" value="<?php echo $result[0]['email']; ?>" class="form-control col-md-7 col-xs-12" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Title="Enter valid email id" required>
                        </div>						 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name"> Mobile No <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="Phone" name="Phone" value="<?php echo $result[0]['phone']; ?>" class="form-control col-md-7 col-xs-12" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="10 digit only" required> 
                        </div>						
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Reporter Image<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="file" id="picture" name="picture"><b style="color:red">(Only jpg,png,gif format allowed)</b>
						   <input type="hidden" id="pictures" name="pictures" value="<?php echo $result[0]['picture']; ?>"> 
                        </div> 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Pan Card<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="pan_card" name="pan_card" value="<?php echo $result[0]['pan_card']; ?>" class="form-control col-md-7 col-xs-12" pattern="[A-Z]{4}\d{4}[A-Z]{1}" Title="EX -AAAA0000A" required> 
                        </div>		
                      </div>
					  
					  <div class="form-group">                        				 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Reporter Id<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="reporter_id" name="reporter_id" value="<?php echo $result[0]['reporter_id']; ?>" class="form-control col-md-7 col-xs-12" required> 
                        </div>	
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Address Proof<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="file" id="address_proof" name="address_proof"><b style="color:red">(Only jpg,png,gif format allowed)</b> 
						   <input type="hidden" id="address_proofs" name="address_proofs" value="<?php echo $result[0]['address_proof']; ?>" class="form-control col-md-7 col-xs-12"> 
                        </div>							
                      </div>                    
                     				  
					  <div class="form-group">                        					 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Organization<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="organization" name="organization" value="<?php echo $result[0]['organization']; ?>" class="form-control col-md-7 col-xs-12" required> 
                        </div>						
                      </div>  
					  
                      <div class="form-group" align="center">
                         <input type="submit" name="Submit" value="Submit" class="btn btn-primary">		 
                      </div>
					  
                    </form>		 
                   </div>
                 </div>
               </div>
             </div>  
            </div>
          </div>
        </div> <!-- /page content -->     
      <script>
	    function success(id)
   	    { 
			$('#successmsg').delay(2000).fadeOut('slow');
			var hostname = $(location).attr('hostname');
			var delay = 2000; 
		    //var url = "http://"+ hostname +"/admin/editrepoter/"+id; 			
			//setTimeout(function(){window.location.href = url;}, delay);
        } 

        function isNumberKey(evt)
		{
		  var charCode = (evt.which) ? evt.which : evt.keyCode;
		  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
		    return false;
			return true;
		} 		
	  </script>
	 		
	 <?php include('footer.php');?>	
	 