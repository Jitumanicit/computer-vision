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
                    <h2>Reporter Registration</h2>
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
				           echo '<script>$(document).ready(function(){  success(); });</script>'	
                         ?>                       
                         <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
                             <?php echo $msg; ?></div>
				        <?php
				         }
				        ?>						
						<?php if($error!='')
				         {
				           echo '<script>$(document).ready(function(){  success(); });</script>'	
                         ?>                       
                        <div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                             <?php echo $error; ?></div>
				        <?php
				         }
				        ?>						
						<?php if($user!='' || $pass!='' || $emailid!='' || $phone!='' || $reporter!='' || $pancard!='' || $passerror!=''|| $phoneerror!='')
				         {
				           echo '<script>$(document).ready(function(){ success(); });</script>';
                         ?>                      
                         <div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
                             <?php if($user!=''){ echo $user."<br>";} if($pass!=''){ echo $pass."<br>";} if($emailid!=''){ echo $emailid."<br>";} if($phone!=''){ echo $phone."<br>";}  if($reporter!=''){ echo $reporter."<br>";} if($pancard!=''){ echo $pancard."<br>";} if($passerror!=''){ echo $passerror."<br>";} if($phoneerror!=''){ echo $phoneerror."<br>";}   ?></div>
				        <?php
				         }
				        ?>							
			          </div>
					  
					  <div class="form-group">					   
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Username</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Username" name="Username" class="form-control col-md-7 col-xs-12" onkeypress="return testInput(event)" required>
						   <input type="hidden" id="types" name="types" value="reporter" class="form-control col-md-7 col-xs-12">
                        </div>							 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Password</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="password" id="Password" name="Password" class="form-control col-md-7 col-xs-12" placeholder="6 characters only"  required>
                        </div>							 
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Reporter Name</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="reporter_name" name="reporter_name" class="form-control col-md-7 col-xs-12" onkeypress="return testInputpRoprterName(event)" required>					  
                        </div> 
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Email</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <input type="text" id="Email" name="Email" class="form-control col-md-7 col-xs-12" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Title="Enter valid email id" required>
                        </div>			
                      </div>
					  
                       <div class="form-group">
                      	 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name"> Mobile No</label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                             <input type="text" id="Phone" name="Phone" class="form-control col-md-7 col-xs-12" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="10 digit only" required>
                            </div>	
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Pan Card</label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                               <input type="text" id="pan_card" name="pan_card" class="form-control col-md-7 col-xs-12" pattern="[A-Z]{5}\d{4}[A-Z]{1}" Title="EX -AAAAA0000A" onkeypress="return testInputPancard(event)" required> 
                            </div>	
                       </div>

					            <div class="form-group"> 
						            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Reporter Id</label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" id="reporter_id" name="reporter_id" class="form-control col-md-7 col-xs-12" value="<?php echo "REP".($reportercount+1); ?>" readonly> 
                         </div> 
                         <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Organization</label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="organization" name="organization" class="form-control col-md-7 col-xs-12" required> 
                        </div>	                     						
                      </div>                    
                     				  
					           <div class="form-group"> 
					              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Reporter Image</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<img src="" id="pics" height="100" width="100">
                           <input type="file" id="picture" name="picture" onchange="previewFile()" style="color: transparent;" required><b style="color:red">(Only jpg,png,gif format allowed)</b> 
                        </div>  
					              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Address Proof</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<img src="" id="pics1" height="100" width="100">
                           <input type="file" id="address_proof" name="address_proof" onchange="previewFile1()" style="color: transparent;" required><b style="color:red">(Only jpg,png,gif format allowed)</b> 
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
        </div>
      <!-- /page content -->
      <script>
	    function success()
   	    {	            	
			$('#successmsg').delay(2000).fadeOut('slow');
			//var hostname = $(location).attr('hostname');
			var delay = 2000; 
		  //  var url = "http://"+ hostname +"/admin/Reporter"; 

            var hostname ="<?php echo base_url() ?>";
            var url =  hostname +"admin/Reporter";
			//var url = "http://localhost/News/admin/Reporter";
		    //setTimeout(function(){window.location.href = "http://"+ hostname +"/admin/Reporter";}, delay);
			//window.location.href = url;
			setTimeout(function(){window.location.href = url;}, delay);
        } 

        function isNumberKey(evt)
		{
		      var charCode = (evt.which) ? evt.which : evt.keyCode;
		      // if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
		     if (charCode < 48 || charCode > 57)
		       return false;
			   return true;
		} 
		
		function testInput(event)
		{        
           var regex = new RegExp("^[a-zA-Z0-9-  _]+$");
           var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
           if (!regex.test(key))
           {
              event.preventDefault();
              return false;
           }
       }

      function testInputpRoprterId(event) 
      {  
           var regex = new RegExp("^[a-zA-Z0-9-]+$");
           var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
           if (!regex.test(key))
           {
              event.preventDefault();
              return false;
           }
       }

      function testInputpRoprterName(event) 
      {  
           var regex = new RegExp("^[a-zA-Z ]+$");
           var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
           if (!regex.test(key))
           {
              event.preventDefault();
              return false;
           }
       }

       function testInputPancard(event) 
       {          
            var regex = new RegExp("^[A-Z0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
           if (!regex.test(key))
           {
                event.preventDefault();
               return false;
           }
       }
      
      function previewFile()
	   {
           var preview = document.querySelector('#pics'); //selects the query named img
           var file    = document.querySelector('#picture').files[0]; //sames as here
           var reader  = new FileReader();
           reader.onloadend = function ()
           {
              preview.src = reader.result;
           }
          if (file) {
               reader.readAsDataURL(file); //reads the data as a URL
           } 
           else
           {
               preview.src = "";
           }
        }	
       
       function previewFile1()
	   {
           var preview = document.querySelector('#pics1'); //selects the query named img
           var file    = document.querySelector('#address_proof').files[0]; //sames as here
           var reader  = new FileReader();
           reader.onloadend = function () {
               preview.src = reader.result;
            }
           if (file) 
           {
              reader.readAsDataURL(file); //reads the data as a URL
           }
           else 
           {
               preview.src = "";
           }
        }	
		
	  </script>
	 		
	 <?php include('footer.php');?>	