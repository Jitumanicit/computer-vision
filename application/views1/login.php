<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News </title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/AdminPanel/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/AdminPanel/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/AdminPanel/css/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/AdminPanel/css/animate.min.css')?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/AdminPanel/css/custom.min.css')?>" rel="stylesheet">
	
	<script src="<?php echo base_url('assets/AdminPanel/js/jquery.min.js')?>"></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">			  
            <form method="post" action="<?php echo base_url().'admin/loginverify'?>">
              <h1>Login Form</h1>
			  <?php if($msg!=''||$msg1!='')
			  {				  
                echo '<script>$(document).ready(function(){ success(); });</script>'; 
			  ?>
              <div class="alert alert-danger" id="successmsg" role="alert"> <?php if($msg!=''&&$msg1!=''){ echo "Please enter your correct username and password.";  }else{ if($msg!=''){ echo $msg."<br>";} if($msg1!=''){ echo $msg1;} } ?></div>
			 <?php			 
			  } 
			  ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="Username" id="Username" required=""/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required=""/>
              </div>
              <div>
			    <input type="submit" name="submit" value="Log in" class="btn btn-default submit">                
               <!-- <a class="reset_pass" href="#">Lost your password?</a>-->
              </div>
              <!--<div> 
				 <a class="reset_pass" href="<?php echo base_url().'admin/Registration'?>">Registration</a>
              </div>-->
              <div class="clearfix"></div>

              <div class="separator">              
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
			  
			  
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>	
	<script>
	    function success()
   	    {
	      $('#successmsg').delay(2000).fadeOut('slow');	
		  var hostname = $(location).attr('hostname');		
		  var delay = 2000; 
		  setTimeout(function(){window.location.href = "http://"+ hostname +"/admin/login";}, delay);
          //setTimeout(function(){window.location.href = "http://"+ a +"/News/admin/login";}, delay);
        } 
	</script>	
  </body>
</html>
