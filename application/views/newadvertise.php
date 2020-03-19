<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- Meta, title, CSS, favicons, etc. -->    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title> <!-- Bootstrap -->   
    <link href="<?php echo base_url('assets/AdminPanel/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/AdminPanel/css/nprogress.min.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets/AdminPanel/css/daterangepicker.css')?>" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url('assets/AdminPanel/css/bootstrap-datetimepicker.css')?>" rel="stylesheet">   
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/AdminPanel/css/custom.min.css')?>" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.min.js')?>"></script>
  </head>  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url().'admin/dashboard'; ?>" class="site_title"><i class="fa fa-paw"></i><span>News</span></a>
            </div>
            <div class="clearfix"></div>            
            <div class="profile clearfix">             
            </div>            
            <br>            
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!--<h3>General</h3>-->
                <ul class="nav side-menu">
                 <li><a href="<?php echo base_url().'admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li><li>
                    <?php if('sub_admin' == $sessarrs1['type']){
                      if('on' == $menu[0]['P_article_post'] ||'on' == $menu[0]['P_article_video'])
					  {
					 ?>	
					<a><i class="fa fa-desktop"></i> Article <span class="fa fa-chevron-down"></span></a>
                     
					  <?php } }else{ ?>
					 <a><i class="fa fa-desktop"></i> Article <span class="fa fa-chevron-down"></span></a>
					<?php } ?>
                   
                    <ul class="nav child_menu">
                      <?php if('reporter' == $sessarrs1['type'])
					   {
					  ?>
					    <li><a href="<?php echo base_url().'admin/newPost'; ?>"><i class="fa fa-edit"></i> Add Article Post</a></li>;
					 <?php }
					   if('reporter' == $sessarrs1['type']||'admin' == $sessarrs1['type']||'admin' == $sessarrs1['type']||'on' == $menu[0]['P_article_post'])
					  { ?>
                        <li><a href="<?php echo base_url().'admin/viewPost'; ?>"><i class="fa fa-eye"></i> View Article Post</a></li>;
					 <?php }
                       if('reporter' == $sessarrs1['type'])	
					  {	?>					  
                        <li><a href="<?php echo base_url().'admin/newVideo'; ?>"><i class="fa fa-edit"></i>Add Article Video</a></li>;
					  <?php }
					   if('reporter' == $sessarrs1['type']||'admin' == $sessarrs1['type']||'on' == $menu[0]['P_article_video'])
					  {	 ?> 
                        <li><a href="<?php echo base_url().'admin/viewVideo'; ?>"><i class="fa fa-eye"></i>View Article Video</a></li>;                      
                      <?php }
					  ?>
					</ul>
                  </li> 
				 <?php  
					   if('admin' == $sessarrs1['type'])	
					   {	
				      ?> 
				  <li><a><i class="fa fa-desktop"></i> Registration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					 <?php  
					  if('admin' == $sessarrs1['type'])	
					  {	
				      ?>
                      <li><a href="<?php echo base_url().'admin/Registration'; ?>"><i class="fa fa-desktop"></i> Sub Admin Registration</a></li>				      
					  <li><a href="<?php echo base_url().'admin/viewSubAdmin'; ?>"><i class="fa fa-eye"></i> View Sub Admin</a></li> 
                      <?php
					  }
					  ?>
					  <?php  
					   if('admin' == $sessarrs1['type'])	
					   {	
				      ?>
					  <li><a href="<?php echo base_url().'admin/Reporter'; ?>"><i class="fa fa-desktop"></i> Reporter Registration</a></li> 
				      <li><a href="<?php echo base_url().'admin/viewReporter'; ?>"><i class="fa fa-eye"></i> View Reporter</a></li>                  
                      <?php
					   }
					  ?> 
					</ul>
                  </li> 
				  <?php
					   }
					  ?>
				   <?php  
					if('admin' == $sessarrs1['type'])	
					   {	
				      ?>
				   <li><a><i class="fa fa-desktop"></i> Menu Allocation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
					 <li><a href="<?php echo base_url().'admin/menuAllocation';?>"><i class="fa fa-desktop"></i> Menu Allocation</a></li>
				     <li><a href="<?php echo base_url().'admin/viewMenu';?>"><i class="fa fa-eye"></i> View Menu</a></li> 
					</ul>
                  </li> 
				  <?php
					 }
				   ?> 
				   <?php 
				   if('reporter' != $sessarrs1['type'])	
				   {
					if('admin' == $sessarrs1['type']||'on' == $menu[0]['P_category'])	
				    { 	
				   ?>
				   <li><a><i class="fa fa-desktop"></i> Category <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url().'admin/NewCategory';?>"><i class="fa fa-desktop"></i> New Category</a></li>
				        <li><a href="<?php echo base_url().'admin/NewSubCategory';?>"><i class="fa fa-desktop"></i> New Sub Category</a></li>	         
                      </ul>
                   </li> 
				  <?php
				    }
				  ?>
				  <?php 
				   if('admin' == $sessarrs1['type']||'on' == $menu[0]['P_advertise'])	
				   {	
				  ?>
				   <li><a><i class="fa fa-desktop"></i> Advertise <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
					  <li><a href="<?php echo base_url().'admin/advertise';?>"><i class="fa fa-desktop"></i> Advertise </a></li>
				      <li><a href="<?php echo base_url().'admin/view_advertise';?>"><i class="fa fa-eye"></i> View Advertise</a></li> 
					</ul>
                  </li>	
				  <?php
				    }
				  }					
				  ?>
                  <?php 
				   if('admin' == $sessarrs1['type'])	
				   {	
				   ?> 
				   <li><a><i class="fa fa-desktop"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
					  <li><a href="<?php echo base_url().'admin/ReportArticleImage';?>"><i class="fa fa-eye"></i>Report Image Article</a></li>
				      <li><a href="<?php echo base_url().'admin/ReportArticleVideo';?>"><i class="fa fa-eye"></i>Report Video Article</a></li> 
					  <li><a href="<?php echo base_url().'admin/ReportAdvertise';?>"><i class="fa fa-eye"></i>Report Advertise</a></li> 
					</ul>
                  </li>
				  <?php				    
				    }					
				   ?>				  
                </ul>
              </div>             
            </div>           
            <div class="sidebar-footer hidden-small">
             
            </div>           
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url().'uploads/images/'.$sessarrs1['picture']; ?>" alt=""><?php echo $sessarrs1['username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>                    
                    <li><a href="<?php echo base_url().'admin/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main"> 
         <div class="clearfix"></div>           
          <div class="x_panel" style="">
           <div class="x_title">
            <h2>Advertise</h2>
             <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                 <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a></li>
                   <li><a href="#">Settings 2</a></li>
                 </ul>
                </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
             </ul>
            <div class="clearfix"></div>
        </div> 
     <div class="x_content">
       <div class="container"> 
          <div class="row">	
		   <form method="post" action="<?php echo base_url().'admin/saveAdvertise';?>" enctype="multipart/form-data"> 
		   <?php if($msg!='')
			{ 
		      echo '<script>$(document).ready(function(){ success(); })</script>';	
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
		      echo '<script>$(document).ready(function(){ success(); })</script>';	
           ?>		    
              <!--<div class="alert alert-danger" id="successmsg" role="alert">-->
              <div class="alert alert-danger alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
                 <?php echo $error; ?></div>
		   <?php 
			}
		   ?>	
		   
			<div class='col-sm-6'>                    
              <div class="form-group">
			    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Customer Name</label>
                <div class='input-group  col-md-9 col-sm-9 col-xs-12'>
                   <input type='text' class="form-control" id="customer_name" name="customer_name" onkeypress="return testInput(event)" required>                   
                </div>
              </div>
            </div>
			
			<div class='col-sm-6'>                    
              <div class="form-group">
			    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mobile No</label>
                <div class='input-group col-md-9 col-sm-9 col-xs-12'>
                   <input type='text' class="form-control" id="mobile_no" name="mobile_no" onkeypress="return isNumberKey(event)" maxlength="10" required placeholder="10 digit only"><!--   pattern="[1-9]{1}[0-9]{9}" -->                   
                </div>
              </div>
            </div>
			
			<div class='col-sm-6'>                    
              <div class="form-group">
			    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email Id</label>
                <div class='input-group col-md-9 col-sm-9 col-xs-12'>
                   <input type='text' class="form-control" id="email_id" name="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Title="Enter valid email id" required>                   
                </div>
              </div>
            </div>
			
			
			<div class='col-sm-6'>                    
             <div class="form-group">
			   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> On Date</label>
               <div class='input-group date' id='myDatepicker1'>
                 <input type='text' class="form-control" id="on_date" name="on_date" required>
                 <span class="input-group-addon">
                   <span class="fa fa-calendar"></span>
                 </span>
               </div>
             </div>
            </div>
			
			<div class='col-sm-6'>                    
              <div class="form-group">
			   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Till Date</label>
                <div class='input-group date' id='myDatepicker2'>
                 <input type='text' class="form-control" id="till_date" name="till_date" required>
                 <span class="input-group-addon">
                   <span class="fa fa-calendar"></span>
                 </span>
                </div>
              </div>
            </div>
			
            <div class='col-sm-6'>                  
              <div class="form-group">
			    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> On Time </label>
                <div class='input-group date' id='myDatepicker3'>
                  <input type='text' class="form-control" id="on_time" name="on_time" required>
                  <span class="input-group-addon">
                    <span class="fa fa-clock-o"></span>
                  </span>
                </div>
              </div>
            </div>
            
			<div class='col-sm-6'>                  
       <div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Upto Time</label>
         <div class='input-group date' id='myDatepicker4'>
           <input type='text' class="form-control" id="upto_time" name="upto_time" required>
           <span class="input-group-addon">
             <span class="fa fa-clock-o"></span> <!--glyphicon glyphicon-calendar-->
           </span>
          </div>
         </div>
       </div>
			
			<div class='col-sm-6'>                  
       <div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Image Position</label>
         <div class='input-group col-md-9 col-sm-9 col-xs-12'>                 
          <select name="img_position" id="img_position" class="form-control" required onchange="Position(this.value)">			     
				  <option value="">select</option>
					  <option value="Bottom">Bottom</option>
					  <option value="Center">Center</option>
					  <option value="Middle">Middle</option>
					  <option value="Top">Top</option>
				  </select>
         </div>
        </div>
      </div>
			
			<div class='col-sm-6'>                  
        <div class="form-group">
			   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Image Upload </label>
         <div class='input-group'>
           <img src="" id="pics" height="100" width="100">
           <input type='file' id="picture" name="picture" onchange="previewFile()" style="color: transparent;" required ><b style="color:red" id="PositionImage"></b>                    
         </div>
        </div>
      </div>
			<div class='col-sm-6'>    </div>
			<div class='col-sm-12'>    
         <div class="form-group" align="center">
            <input type="submit" name="userSubmit" value="Submit" class="btn btn-primary">		 
         </div>
      </div>
		 </form>			
    </div>
   </div>
  </div>
 </div>		
</div>
  </div>
  <!-- /page content -->
      <!-- footer content -->
      <footer>
         <div class="pull-right">
            <a href="https://www.mobisofttech.co.in"> Mobisoft Technology India Pvt. Ltd.</a>Colorlib 2011-2018 All right reserved.
         </div>
         <div class="clearfix"></div>
      </footer><!-- /footer content -->        
      </div>
    </div>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/AdminPanel/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/AdminPanel/js/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/AdminPanel/js/nprogress.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/AdminPanel/js/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/daterangepicker.js')?>"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('assets/AdminPanel/js/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url('assets/AdminPanel/js/ion.rangeSlider.min.js')?>"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="<?php echo base_url('assets/AdminPanel/js/bootstrap-colorpicker.min.js')?>"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.inputmask.bundle.min.js')?>"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.knob.min.js')?>"></script>
    <!-- Cropper -->
    <script src="<?php echo base_url('assets/AdminPanel/js/cropper.min.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/AdminPanel/js/custom.min.js')?>"></script>
    
    <!-- Initialize datetimepicker -->
    <script>
       
       $('#myDatepicker1').datetimepicker({
          format: 'YYYY-MM-DD'
        });
	
	   $('#myDatepicker2').datetimepicker({
          format: 'YYYY-MM-DD'
        });   
    
       $('#myDatepicker3').datetimepicker({
          format: 'hh:mm A'
        });	
		
	   $('#myDatepicker4').datetimepicker({
          format: 'hh:mm A'
        });
				
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
          var value = String.fromCharCode(event.which);
          var pattern = new RegExp(/[a-zåäö ]/i);
          return pattern.test(value);
        }
		

		function success()
   	    {		   
			$('#successmsg').delay(2000).fadeOut('slow');	
		    //var hostname = $(location).attr('hostname');
		    var delay = 2000; 
        var hostname ="<?php echo base_url() ?>";
        var url =  hostname +"admin/advertise";

           // setTimeout(function(){window.location.href = "http://"+ hostname +"/admin/advertise";}, delay);
		    //setTimeout(function(){window.location.href = "http://localhost/News/admin/advertise";}, delay);		   
        } 	
        
       function Position(val)
		   {		   
		      if("Top"==val)		   
		      {
			        $('#PositionImage').html('Image 300x470 (Only jpg,png,gif format allowed)');
		      }
		      else if("Middle"==val)		   
		      {
			        $('#PositionImage').html('Image 1740x261 (Only jpg,png,gif format allowed)');
		      }
		     else if("Bottom"==val)		   
		     {
			       $('#PositionImage').html('Image 800x450 (Only jpg,png,gif format allowed)');
		     }
		     else if("Center"==val)		   
		     {
			       $('#PositionImage').html('Image 800x450 (Only jpg,png,gif format allowed)');
		     }
		     else
		     {
			      $('#PositionImage').html('');  
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


	</script>	
 </body>
</html>
