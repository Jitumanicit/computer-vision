<?php //include('header.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
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
                    <h2>User Profile <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                       
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">                          
                          <img class="img-responsive avatar-view" src="<?php echo '../uploads/images/'.$sessarrs1['picture'];?>" alt="user">
                        </div>
                      </div>
                      <h3><?php echo $sessarrs1['username']; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-envelope-o user-profile-icon"></i>&nbsp&nbsp<?php echo $sessarrs1['email'];?></li>
                        <li><i class="fa fa-mobile user-profile-icon"></i>&nbsp&nbsp<?php echo $sessarrs1['phone'];?></li>                       
                      </ul>                     
                      <br />
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class="col-md-6">
						</div>
                      </div>
					  <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Publish Article with Image</h2>
                        </div>
                        <div class="col-md-6">
						  <h2>Publish Article with Video</h2>
						</div>
                      </div>
					  <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Publish Article with Image</h2>
                        </div>
                        <div class="col-md-6">
						  <h2>Publish Article with Video</h2>
						</div>
                      </div>			  
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">                        
                        </ul>
                        <div id="myTabContent" class="tab-content">
                           <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                             <ul class="messages"></ul>
                           </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>      

  <?php include('footer.php');?>