<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	  
    <title>News </title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/AdminPanel/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/AdminPanel/css/nprogress.min.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/AdminPanel/css/green.css')?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url('assets/AdminPanel/css/prettify.min.css')?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets/AdminPanel/css/select2.min.css')?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url('assets/AdminPanel/css/switchery.min.css')?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url('assets/AdminPanel/css/starrr.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets/AdminPanel/css/daterangepicker.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/AdminPanel/css/bootstrap-datetimepicker.css')?>" rel="stylesheet">	
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/AdminPanel/css/custom.min.css')?>" rel="stylesheet">
	<!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.min.js')?>"></script>	

    <script src="<?php echo base_url('tinymce/tinymce.min.js')?>"></script>	 
	
	<script type="text/javascript">
      tinymce.init({
        selector: "textarea.tinymce",
        theme: "modern",
        //width: 1030,
        height: 300,
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    }); 
    </script>
	
	
  </head>
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
		  <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>News</span></a>
            </div>
            <div class="clearfix"></div>            
            <br/>			
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">                
                <ul class="nav side-menu">
				
				  <li><a href="<?php echo base_url().'admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
				  
				  <?php
				      if(count($menu)!=0)
					  {
					    $articlepost  = $menu[0]['P_article_post'];
					    $articlevideo = $menu[0]['P_article_video'];
						$category     = $menu[0]['P_category'];
						$advertise    = $menu[0]['P_advertise'];
					  }
					  else
					  {
						  $articlepost  = "off";
						  $articlevideo = "off";
						  $category     = "off";
						  $advertise    = "off";
					  }
				  ?>
				  				  
				  <li>
                   <?php if('sub_admin' == $sessarrs1['type']){					 
					if(count($menu)!=0)
					{
					 if('on' == $articlepost ||'on' == $articlevideo)
					 {
					 ?>	
					  <a><i class="fa fa-desktop"></i> Article <span class="fa fa-chevron-down"></span></a>
                     
					  <?php } } }else{ ?>
					 <a><i class="fa fa-desktop"></i> Article <span class="fa fa-chevron-down"></span></a>
					<?php } ?>

				   <ul class="nav child_menu">
                    <?php if('reporter' == $sessarrs1['type'])
					{
					?>
					  <li><a href="<?php echo base_url().'admin/newPost'; ?>"><i class="fa fa-edit"></i> Add Article With Image</a></li>;
				    <?php
					}
					if('reporter' == $sessarrs1['type']||'admin' == $sessarrs1['type']||'on' == $articlepost)
					{
					?>
                    <li><a href="<?php echo base_url().'admin/viewPost'; ?>"><i class="fa fa-eye"></i> View Article With Image</a></li>;
					<?php
					}
                    if('reporter' == $sessarrs1['type'])	
					{
					?>					  
                    <li><a href="<?php echo base_url().'admin/newVideo'; ?>"><i class="fa fa-edit"></i>Add Article With Video</a></li>;
					<?php
					}
					if('reporter' == $sessarrs1['type']||'admin' == $sessarrs1['type']||'on' == $articlevideo)
					{
					?> 
                    <li><a href="<?php echo base_url().'admin/viewVideo'; ?>"><i class="fa fa-eye"></i>View Article With Video</a></li>;                      
                    <?php
					}
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
					<li><a href="<?php echo base_url().'admin/viewSubAdmin'; ?>"><i class="fa fa-desktop"></i> View Sub Admin</a></li> 
                  <?php
					}
				  ?>
				  <?php  
					if('admin' == $sessarrs1['type'])	
					{	
				  ?>
					 <li><a href="<?php echo base_url().'admin/Reporter'; ?>"><i class="fa fa-desktop"></i> Reporter Registration</a></li> 
				     <li><a href="<?php echo base_url().'admin/viewReporter'; ?>"><i class="fa fa-desktop"></i> View Reporter</a></li>                  
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
					 <li><a href="<?php echo base_url().'admin/menuAllocation';?>"><i class="fa fa-dashboard"></i> Menu Allocation</a></li>
				     <li><a href="<?php echo base_url().'admin/viewMenu';?>"><i class="fa fa-dashboard"></i> View Menu</a></li> 
					</ul>
                  </li> 
				<?php
				 }
				?>				  				 
				<?php
                   if('reporter' != $sessarrs1['type'])	
				   {				  
				    if('admin' == $sessarrs1['type']||'on' == $category)	 
				    {	
				  ?>
				     <li><a><i class="fa fa-desktop"></i> Category <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                        <li><a href="<?php echo base_url().'admin/NewCategory';?>"><i class="fa fa-dashboard"></i> New Category</a></li>
				        <li><a href="<?php echo base_url().'admin/NewSubCategory';?>"><i class="fa fa-dashboard"></i> New Sub Category</a></li>	         
                       </ul>
                     </li> 
				  <?php
				    }
				   ?> 			   
				   
				    <?php 
				     if('admin' == $sessarrs1['type']||'on' == $advertise)	
				     {	
				     ?>
				      <li><a><i class="fa fa-desktop"></i> Advertise <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">                    
					    <li><a href="<?php echo base_url().'admin/advertise';?>"><i class="fa fa-dashboard"></i> Advertise </a></li>
				        <li><a href="<?php echo base_url().'admin/view_advertise';?>"><i class="fa fa-dashboard"></i> View Advertise</a></li> 
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
					  <li><a href="<?php echo base_url().'admin/ReportArticleImage';?>"><i class="fa fa-dashboard"></i>Report Image Article</a></li>
				      <li><a href="<?php echo base_url().'admin/ReportArticleVideo';?>"><i class="fa fa-dashboard"></i>Report Video Article</a></li> 
					  <li><a href="<?php echo base_url().'admin/ReportAdvertise';?>"><i class="fa fa-dashboard"></i>Report Advertise</a></li> 
					</ul>
                  </li>
				  <?php				    
				    }					
				   ?>
				</ul>
              </div>            
            </div>
            <!-- /sidebar menu -->
			
			<!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen"><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="Lock"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
            </div>
            <!-- /menu footer buttons -->
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
                      <!--<img src="" alt="">--><?php echo $sessarrs1['username']; ?>
                      <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="<?php echo base_url().'admin/Profile'; ?>"> Profile</a></li>                   
                      <li><a href="<?php echo base_url().'admin/logout'; ?>"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                    </ul>
                  </li>
                  <li role="presentation" class="dropdown">                 
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu"> </ul>
                  </li>
               </ul>
             </nav>
           </div>
        </div>
        <!-- /top navigation -->	
		