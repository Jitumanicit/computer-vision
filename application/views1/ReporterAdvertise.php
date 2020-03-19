<?php //include('header.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">              
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">                
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 
                    <h2>News Post <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                         <!-- <li><a href="#">Settings 1</a></li>
                          <li><a href="#">Settings 2</a></li>-->                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Customer Name</th>
                          <th>On Date</th>
						  <th>Till Date</th> 
						  <th>Added By</th> 
						  <th>Added At</th> 
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
                             <td><?php echo $val['customer_name']; ?></td>
                             <td><?php echo $val['on_date']; ?></td>
							 <td><?php echo $val['till_date']; ?></td>
							 <td><?php echo $val['username']; ?></td>
							 <td><?php echo $val['created_at']; ?></td>
                           </tr> 
						   <?php 
						   $i++;
						  }
						}
						?>   
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
	<!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View</h4>
        </div>
        <div class="modal-body">
		  <h3 id="tital"></h3>
		  <div id="pic" class="responsive"></div>
          <p style="font-size:17px" id="Contents"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
   </div>
  </body>
</html>