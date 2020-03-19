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
                    <h2>Edit Sub Admin Registration</h2>
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
				     <?php 
              if($msg!='')
				       {
				     ?>
						<script>
					    var a = "<?php echo $id; ?>";							
						  $(document).ready(function(){ success(a) });
					  </script>  
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>  
               <?php echo $msg; ?>
            </div>
				    <?php
				      }
				    ?>						
						<?php 
            if($error!='')
				    {
            ?>
					 <script>
					    var a = "<?php echo $id; ?>";							
						  $(document).ready(function(){ success(a) });
					 </script> 
           <div class="alert alert-danger alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <?php echo $error; ?>
           </div>
				   <?php
				      }
				    ?>						
						<?php if($user!='' || $pass!='' || $emailid!=''||$phone!=''|| $passerror!='' || $phoneerror!='')
				     {				         
             ?>
						<script>
					    var a = "<?php echo $id; ?>";							
						  $(document).ready(function(){ success(a) });
					  </script> 
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>  
                <?php if($user!=''){ echo $user."<br>";} if($pass!=''){ echo $pass."<br>";} if($emailid!=''){ echo $emailid."<br>";} if($phone!=''){ echo $phone."<br>";} if($passerror!=''){ echo $passerror."<br>";} if($phoneerror!=''){ echo $phoneerror."<br>";} ?>
            </div>
				    <?php
				      }
				     ?>	
			   </div> 
         <form id="postdata" method="post" class="form-horizontal form-label-left" action="<?php echo base_url().'admin/NewRegistration';?>" enctype="multipart/form-data">
           <div class="form-group">					   
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Username</label>
             <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="text" id="Username" name="Username" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['username']; ?>" onkeypress="return testInput(event)" required>
						  <input type="hidden" id="types" name="types" value="sub_admin" class="form-control col-md-7 col-xs-12" >	
						  <input type="hidden" id="editid" name="editid" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['id']; ?>" required>
            </div>							 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Password</label>
             <div class="col-md-4 col-sm-4 col-xs-12">
              <input type="password" id="Password" name="Password" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['password']; ?>" required placeholder="6 characters only">
             </div>							 
           </div>
					 <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Email</label>
             <div class="col-md-4 col-sm-4 col-xs-12">
               <input type="text" id="Email" name="Email" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Title="Enter valid email id" required> 
             </div>						 
					   <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name"> Mobile No </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
               <input type="text" id="Phone" name="Phone" class="form-control col-md-7 col-xs-12" value="<?php echo $result[0]['phone']; ?>" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="10 digit only" required> 
              </div>						
            </div>
					  
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">SubAdmin Image</label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="<?php echo base_url().'uploads/images/'.$result[0]['picture'];?>" id="pics" height="100" width="100">
                <input type="file" id="picture" name="picture" onchange="previewFile()" style="color: transparent;"><b style="color:red">(Only jpg,png,gif format allowed)</b> 
						    <input type="hidden" id="pictures" name="pictures" value="<?php echo $result[0]['picture']; ?>"> 
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="hidden" id="reporter_id" name="reporter_id" class="form-control col-md-7 col-xs-12"> 
						    <input type="hidden" id="pan_card" name="pan_card" class="form-control col-md-7 col-xs-12"> 
                <input type="hidden" id="address_proof" name="address_proof" class="form-control col-md-7 col-xs-12"> 
						    <input type="hidden" id="organization" name="organization" class="form-control col-md-7 col-xs-12"> 
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
	   function success(id)
   	 { 
			  $('#successmsg').delay(2000).fadeOut('slow');
		   	//var hostname = $(location).attr('hostname');
			  var delay = 2000; 
        var hostname ="<?php echo base_url() ?>";  
		    var url = hostname +"admin/editregistration/"+id; 
        //var url = "http://"+ hostname +"/admin/editregistration/"+id; 			
			  setTimeout(function(){window.location.href = url;}, delay);
     } 
		
    function isNumberKey(evt)
		{
		   var charCode = (evt.which) ? evt.which : evt.keyCode;
		   //if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
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

    function previewFile()
    {
           var preview = document.querySelector('#pics'); //selects the query named img
           var file    = document.querySelector('#picture').files[0]; //sames as here
           var reader  = new FileReader();
           reader.onloadend = function ()
           {
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
	 