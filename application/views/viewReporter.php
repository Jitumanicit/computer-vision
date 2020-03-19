<?php //include('header.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <!-- <h3>Users <small>Some examples to get you started</small></h3>-->
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>-->
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 
                    <h2>View Reporter <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <!--<li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>-->
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($msg!="")
					{
					  echo '<script>$(document).ready(function(){  success(); });</script>'	
					?>					
					  <div class="alert alert-success"><?php echo $msg; ?></div>
                    <?php
					 }
					?>					
					<p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>User Name</th>
                          <th>Password</th>
                          <th>Reporter Name</th>
                          <th>Email</th>
                          <th>Reporter Id</th>
 						              <th>Phone No</th>
						              <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                        if($results!='')
                        {
						              $i=1;	 
					                foreach($results as $val)
	                        {			
	                     ?> 
						            <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $val['username']; ?></td>
                          <td><?php echo $val['password']; ?></td>
                          <td><?php echo $val['reporter_name']; ?></td>
                          <td><?php echo $val['email']; ?></td>
                          <td><?php echo $val['reporter_id']; ?></td>
							            <td><?php echo $val['phone']; ?></td>
                          <td>
                            <!--<a href="<?php echo base_url().'admin/deletesReporter/'.$val['id'];?>" onclick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"  style="color:#d9534f; font-size: 1.5em;"></i></a>-->
                            <?php if($val['recent']==1){ ?>
                              <a href="<?php echo base_url().'admin/deletesReporter/'.$val['id'];?>" onclick="return confirm('Are you sure?');"  class="btn btn-success btn-xs">Active</a><!--<i class="fa fa-trash" aria-hidden="true"  style="color:#d9534f; font-size: 1.5em;"></i>-->
                            <?php }else{ ?>
                              <a href="<?php echo base_url().'admin/ActiveReporter/'.$val['id'];?>" onclick="return confirm('Are you sure?');"  class="btn btn-danger btn-xs">Inactive</a><!--<i class="fa fa-trash" aria-hidden="true"  style="color:#d9534f; font-size: 1.5em;"></i>-->
                            <?php } ?>
                            &nbsp&nbsp|&nbsp&nbsp<a href="<?php echo base_url().'admin/editrepoter/'.$val['id'];?>"><i class="fa fa-pencil" aria-hidden="true" style="color:#4fd958; font-size: 1.5em;"></i></a>						  
							             </td>
                          </tr> 
						          <?php $i++; }} ?>   
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div> 
            </div>
          </div>
        </div>
        <!-- /page content -->
        <footer>
           <div class="pull-center">
              <a href="https://www.mobisofttech.co.in"> Mobisoft Technology India Pvt. Ltd.</a>Colorlib 2011-2018 All right reserved.
           </div>
          <div class="clearfix"></div>
        </footer>      
      </div>
    </div>   
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.min.js')?>"></script>    
    <script src="<?php echo base_url('assets/AdminPanel/js/bootstrap.min.js')?>"></script>   
    <script src="<?php echo base_url('assets/AdminPanel/js/fastclick.js')?>"></script>   
    <script src="<?php echo base_url('assets/AdminPanel/js/nprogress.js')?>"></script>    
    <script src="<?php echo base_url('assets/AdminPanel/js/icheck.min.js')?>"></script>    
    <script src="<?php echo base_url('assets/AdminPanel/js/jquery.dataTables.min.js')?>"></script>	
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.fixedHeader.min.js')?>"></script>	
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/vfs_fonts.js')?>"></script>
    <script src="<?php echo base_url('assets/AdminPanel/js/custom.min.js')?>"></script>
    <script>
	   function success()
   	   {
		 $('#successmsg').delay(2000).fadeOut('slow');		     
		 //var hostname = $(location).attr('hostname');
		 var delay = 2000; 
     var hostname ="<?php echo base_url() ?>";
     var url =  hostname +"admin/viewReporter";

		 //var url = "http://"+ hostname +"/admin/viewReporter/";
		 //var url = "http://localhost/News/admin/viewReporter/";
		 setTimeout(function(){window.location.href = url;}, delay);
       }	
	</script>
  </body>
</html>