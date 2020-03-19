<?php //include('header.php'); ?>
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
				    <div> 
				        <?php if($msg!='')
				         {
				           echo '<script>$(document).ready(function(){ success(); });</script>';
                         ?>
                        <!--<div class="alert alert-success" id="successmsg" role="alert">--> 
						<div class="alert alert-success alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <?php echo $msg; ?></div>
				        <?php
				         }
				        ?>
						
						<?php if($error!='')
				         {
				           echo '<script>$(document).ready(function(){ success(); });</script>';
                         ?>
                        <!--<div class="alert alert-danger" id="successmsg" role="alert">-->
                        <div class="alert alert-danger alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php echo $error; ?></div>
				        <?php
				         }
				        ?>
						
						<?php if($user!='' || $pass!='' || $emailid!=''||$phone!=''|| $passerror!='' || $phoneerror!='')
				         {
				           echo '<script>$(document).ready(function(){ success(); });</script>';
                         ?>
						 <div class="alert alert-danger alert-dismissible">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>						 
                        <!--<div class="alert alert-danger" id="successmsg" role="alert">--> <?php if($user!=''){ echo $user."<br>";} if($pass!=''){ echo $pass."<br>";} if($emailid!=''){ echo $emailid."<br>";} if($phone!=''){ echo $phone."<br>";} if($passerror!=''){ echo $passerror."<br>";} if($phoneerror!=''){ echo $phoneerror."<br>";} ?></div>
				        <?php
				         }
				        ?>	
			         </div> 
                    <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/NewRegistration';?>" enctype="multipart/form-data">
                      <div class="form-group">					   
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Username<span class="required"></span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="Username" name="Username" class="form-control col-md-7 col-xs-12" required>
						  <input type="hidden" id="types" name="types" value="sub_admin" class="form-control col-md-7 col-xs-12" >						  
                        </div>							 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Password<span class="required"></span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="Password" name="Password" class="form-control col-md-7 col-xs-12" placeholder="6 characters only" required>
                        </div>							 
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Email<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Email" name="Email" class="form-control col-md-7 col-xs-12" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Title="Enter valid email id" required> 
                        </div>						 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name"> Mobile No <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="Phone" name="Phone" class="form-control col-md-7 col-xs-12" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="10 digit only" required> 
                        </div>						
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">File<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="file" id="picture" name="picture" required><b style="color:red">(Only jpg,png,gif format allowed)</b>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="hidden" id="reporter_id" name="reporter_id" class="form-control col-md-7 col-xs-12"> 
						   <input type="hidden" id="pan_card" name="pan_card" class="form-control col-md-7 col-xs-12"> 
                           <input type="hidden" id="address_proof" name="address_proof" class="form-control col-md-7 col-xs-12"> 
						   <input type="hidden" id="organization" name="organization" class="form-control col-md-7 col-xs-12"> 
                        </div>	
                      </div>					  
			       <!--<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Id<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12"></div>
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Address Proof<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12"></div>	
                      </div>					  
					   <div class="form-group">                        					 
						 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Organization<span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12"></div>						
                      </div>-->	
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
      </div>
      <!-- /page content -->
      <script>
	    function success()
   	    {			
	      $('#successmsg').delay(2000).fadeOut('slow');	
		  var hostname = $(location).attr('hostname');
		  var delay = 2000; 
          //setTimeout(function(){window.location.href = "http://"+ hostname +"/admin/Registration";}, delay);
		  //setTimeout(function(){window.location.href = "http://localhost/News/admin/Registration";}, delay);		   
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
	 