<?php
 if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
class Admin extends CI_Controller
{
    public function index()
    {      
      $postty = "";
	  $data['result']      =  $this->Commonmodel->getcategory('category',$postty);
	  //$data['result2']      =  $this->Commonmodel->getsingleData('subcategory',$postty);
	  foreach($data['result'] as $val)
	  {	     
		 $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		 for($i=0;$i<count($data1['results']);$i++)
		 {			
			$b[] = $data1['results'][$i];			
		 }		
	  }	
	 
	  $a="";
	  $c="";
	  $data['result2']           =  $b; 
	  $data['Latest']            =  $this->Commonmodel->getDatas('post_news',5,'id');
	  $data['Hot']               =  $this->Commonmodel->getDatas('post_news',12,'id');  
	  $data['Sport']             =  $this->Commonmodel->getWhereDatas('post_news',3,'Sports',$postty);	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatas('post_news',3,'Politics',$postty);      
	  $data['Business']          =  $this->Commonmodel->getWhereDatas('post_news',3,'Business',$postty);	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatas('post_news',3,'Entertainment',$postty); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatas('post_news',3,'Law',$postty);	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatas('post_news',3,'Lifestyle',$postty);
	  $data['Technology']        =  $this->Commonmodel->getWhereDatas('post_news',3,'Technology',$postty);
	  $data['Other']             =  $this->Commonmodel->getWhereDatas('post_news',3,'Other',$postty);	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatas('post_news',3,'Education',$postty);	
	  $data['Video']             =  $this->Commonmodel->getAllRecord('post_news','Video',8,$a,$c);	
      $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	  $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
      $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");
	  $data['rssfeed']           =  $this->Commonmodel->getRssDatas('rssfeeds',$postty);
	  $this->load->view('news',$data); 	  
    }
	
	
	
	public function LatestNews($id)
    {        
		$postty="";
		$data['result']           =  $this->Commonmodel->getsingleData('post_news',$id);
		$data['results']          =  $this->Commonmodel->getDatas('post_news',8,'id');
		$data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
	    $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	    $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
        $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		foreach($data['result1'] as $val)
	    {	     
		  $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		  for($i=0;$i<count($data1['results']);$i++)
		  {			
			$b[] = $data1['results'][$i];			
		  }		
	    }	  
	    $data['result2']=$b;		   
		$this->load->view('singleNews',$data);   
    }	
	
	
	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleData('post_news',$id);
		$data['results']          =  $this->Commonmodel->getData('subcategory',15,'id');
		$data['result1']          =  $this->Commonmodel->getsingleData('category',$postty);
		$data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	    $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
        $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
	    foreach($data['result1'] as $val)
	    {	     
		   $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		   for($i=0;$i<count($data1['results']);$i++)
		   {			
			 $b[] = $data1['results'][$i];			
		   }		
	    }	  
	    $data['result2']=$b;		   
		$this->load->view('singleNews',$data);   
    }	
	
	
	
	public function login()
    { 
		$data['msg']="";
		$data['msg1']="";
		$this->load->view('login',$data);   
    }	
	
	
    public function Registration()
    { 
		  $sessarr             = $this->session->userdata('sessdata');
		  $data['sessarr']     = $sessarr['status'];   
       	  $result['sessarrs']  = $sessarr['status']; 		  
          $data['msg']         = "";
		  $data['user']        = "";		  
		  $data['pass']        = "";
		  $data['phone']       = "";
		  $data['emailid']     = "";
		  $data['passerror']   = "";
		  $data['phoneerror']  = "";
		  $data['error']       = "";
		  $result['sessarrs1'] = $sessarr;
		  $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  $this->load->view('header',$result); 
	      $this->load->view('Registration',$data);  	 
    }
		
	
	public function Reporter()
    { 
		  $sessarr             = $this->session->userdata('sessdata');
		  $data['sessarr']     = $sessarr['status'];   
       	  $result['sessarrs']  = $sessarr['status']; 		  
          $data['msg']         = "";
		  $data['user']        = "";		  
		  $data['pass']        = "";
		  $data['phone']       = "";
		  $data['emailid']     = "";
		  $data['reporter']    = "";
	      $data['pancard']     = "";		  
		  $data['phoneerror']  = "";
		  $data['passerror']   = "";
		  $data['error']       = "";
		  $result['sessarrs1'] = $sessarr;
		  $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  $this->load->view('header',$result); 
	      $this->load->view('Reporter',$data);  	 
    }	
		
	
	public function viewReporter()
    {  
       $limit = '';
	   $sessarr              =  $this->session->userdata('sessdata');	   
	   $data['results']      =  $this->Commonmodel->getRecord('users','reporter');
	   $result['sessarrs']   =  $sessarr['status']; 
	   $result['sessarrs1']  =  $sessarr;
	   $data['msg']          = "";
	   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$result);
	   $this->load->view('viewReporter',$data);   
    }	
	
	
	
	public function deletesReporter()
    { 
       $id                   =  $this->uri->segment(3);		
       $data['result']       =  $this->Commonmodel->deleteRecord('users',$id);
	   $sessarr              =  $this->session->userdata('sessdata');	   
	   $data['results']      =  $this->Commonmodel->getRecord('users','reporter');
	   $result['sessarrs']   =  $sessarr['status']; 
	   $result['sessarrs1']  =  $sessarr;
	   $data['msg']          = "Record Deleted Successfully";
	   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$result);
	   $this->load->view('viewReporter',$data);
    }
	
	

    public function viewSubAdmin()
    {  
       $limit                = '';
	   $sessarr              = $this->session->userdata('sessdata');	   
	   $data['results']      = $this->Commonmodel->getRecord('users','sub_admin');
	   $result['sessarrs']   = $sessarr['status']; 
	   $result['sessarrs1']  = $sessarr;
	   $data['msg']          = "";
	   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$result);
	   $this->load->view('viewSubAdmin',$data);   
    }
		
	
	public function deletesSubAdmin()
    { 
       $id                   = $this->uri->segment(3);		
       $data['result']       = $this->Commonmodel->deleteRecord('users',$id);
	   $sessarr              = $this->session->userdata('sessdata');	   
	   $data['results']      = $this->Commonmodel->getRecord('users','sub_admin');
	   $result['sessarrs']   = $sessarr['status']; 
	   $result['sessarrs1']  = $sessarr;
	   $data['msg']          = "Record Deleted Successfully";
	   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$result);
	   $this->load->view('viewSubAdmin',$data);
    }
		
		
		
		
	public function NewRegistration()
    {  	   
	   $sessarr             =  $this->session->userdata('sessdata');			
	   $data['sessarr']     = $sessarr['status'];   
       $result['sessarrs']  = $sessarr['status']; 
       $result['sessarrs1'] = $sessarr;          
	   $data['msg']         = "";       
	   $data['user']        = "";
	   $data['pass']        = "";
	   $data['phone']       = "";
	   $data['emailid']     = "";
	   $data['error']       = "";	   
	   $data['phoneerror']  = ""; 
	   $data['passerror']   = "";
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);	
	   
	   $allowed   =  array('gif','png' ,'jpg');
       
	   if($_FILES['picture']['name']!="")
	   {
		 $filename   =  $_FILES['picture']['name'];  
	   }
	   else
	   {
		 $filename   =  $this->input->post('pictures');
	   }
	   
       $ext        =  pathinfo($filename, PATHINFO_EXTENSION);	  
       if(!in_array($ext,$allowed))
	   {
          $data['error']     = "Only jpg, gif, and png files are allowed.";
		  $this->load->view('header',$result);
		  $this->load->view('Registration',$data);
		  $add =""; 
	   }
	   else
	   {
		  $add = "Add";	
	   }
	   
	   if("Add"==$add)	
	   {	
	     if(!empty($_FILES['picture']['name']))
		 {
                $config['upload_path']   = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['picture']['name'];
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('picture'))
				{
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }
				else
				{
                    $picture = '';
                }
         }
		 else
		 {
                 $picture = $this->input->post('pictures');
         } 
	   
	   
	      $Username       =  $this->input->post('Username');   
          $Password       =  $this->input->post('Password');
	      $Email          =  $this->input->post('Email');
	   	  $Phone          =  $this->input->post('Phone');
		  $types          =  $this->input->post('types');
		  $pan_card       =  $this->input->post('pan_card');
	   	  $reporter_id    =  $this->input->post('reporter_id');				
	   	  $organization   =  $this->input->post('organization');
		  $sessarr        =  $this->session->userdata('sessdata'); 
          $address_proof  =  "";
		  $status         =  3;			  
		  
		  $post = array(
			             'username'       =>  ucfirst($Username),   
			             'password'       =>  $Password,   
			             'email'          =>  $Email,   
			             'phone'          =>  $Phone,
				         'picture'        =>  $picture,
				         'status'         =>  $status,
				         'type'           =>  $types,				  
				         'pan_card'       =>  $pan_card,
				         'reporter_id'    =>  $reporter_id,
				         'address_proof'  =>  $address_proof,
				         'organization'   =>  $organization
			         ); 	          
		  	
              
		  if($Username!="" || $Password!="" || $Email!="" || $Phone!="") 
		  {	
		    if($this->input->post('editid')=="")	
		    {
			  $logins      =  array('username'=>ucfirst($Username)); 
			  $result1     =  $this->Commonmodel->CheckLogin('users',$logins);			
			  $logins2     =  array('password'=>$Password); 
			  $result2     =  $this->Commonmodel->CheckLogin('users',$logins2);			
			  $logins3     =  array('email'=>$Email); 
			  $result3     =  $this->Commonmodel->CheckLogin('users',$logins3);
			  $logins4     =  array('phone'=>$Phone); 
			  $result4     =  $this->Commonmodel->CheckLogin('users',$logins4);	

			 if(count($result1)!=0)
 		     {
			   $data['user']="Username is already exist";
			 }
			 else
			 {				  
			   $data['user']= "";				 
			 }
				
             if(count($result2)!=0)
		     {				 
			   $data['pass']="Password is already exist";
			 }
			 else
			 {				 
			   $data['pass']= "";  
			 }
				
             if(count($result3)!=0)
			 {				 
			   $data['emailid']="Email is already exist";
			 }
			 else
			 {				 
			   $data['emailid']= "";  
			 }  
			   
			 if(count($result4)!=0)
			 {				 
			   $data['phone']="Mobail Number is already exist";
			 }
			 else
			 {				 
			   $data['phone']= "";  
			 } 
			 
		  }	
		  else
		  {
			  $logins41    =  array('id'=>$this->input->post('editid'));
			  $logins      =  array('username'=>ucfirst($Username));			  		
			  $result11    =  $this->Commonmodel->Check('users',$logins41);			  	
             
			 if($result11[0]['username']==ucfirst($Username))
              {
                 $data['user']= "";	
			  }
			  else
			  {				
                $result1     =  $this->Commonmodel->CheckLogin('users',$logins);	
				if(count($result1)!=0)
			    {				 
			      $data['user']="UserName Number is already exist";
			    }
			    else
			    {				 
			      $data['user']= "";  
			    }
			  }
			  
        //-----------------------------------------------------------------------------------
		
			  $logins2     =  array('password'=>$Password);             		  
              if($result11[0]['password']==$Password)
              {
                 $data['pass']= "";	
			  }
			  else
			  {				
                $result2     =  $this->Commonmodel->CheckLogin('users',$logins2);	
				if(count($result2)!=0)
			    {				 
			      $data['pass']="Password is already exist";
			    }
			    else
			    {				 
			      $data['pass']= "";  
			    }
			  } 
			  
        //-----------------------------------------------------------------------------------
		
              $logins3     =  array('email'=>$Email); 
              if($result11[0]['email']==$Email)
              {
                 $data['emailid']= "";	
			  }
			  else
			  {	
			    $result3     =  $this->Commonmodel->CheckLogin('users',$logins3);	
				if(count($result3)!=0)
			    {				 
			      $data['emailid']="Email id is already exist";
			    }
			    else
			    {				 
			      $data['emailid']= "";  
			    }
			  } 
         
           //-----------------------------------------------------------------------------------
			  
			  $logins4     =  array('phone'=>$Phone);			  
              if($result11[0]['phone']==$Phone)
              {
                 $data['phone']= "";	
			  }
			  else
			  {				
                $result4     =  $this->Commonmodel->CheckLogin('users',$logins4);	
				if(count($result4)!=0)
			    {				 
			      $data['phone']="Mobail Number is already exist";
			    }
			    else
			    {				 
			      $data['phone']= "";  
			    }
			  }			  
		  }
			 
			 
		  if($this->input->post('editid')!="")
          { 
             if(strlen($Phone)==10)
	         {
	          $data['phoneerror']=""; 
	         }
	         else
	         {	             
			  $data['phoneerror']="Mobile length is 10 digit compulsory";
	         }			   
	   
	         if(strlen($Password)==6)
	         {
	           $data['passerror']=""; 
	         }
	         else
	         {
			   $data['passerror']="Password length is only accepted 6 digit";
	         }
	        
	         $id = $this->input->post('editid');
			 
		    if($data['passerror']=="" && $data['phoneerror']=="" && $data['phone']=="" && $data['user']=="" && $data['pass']=="" && $data['emailid']=="")
			 {
			    $insertUserData =  $this->Commonmodel->UpdateData('users',$post,$id);	
			 }
			 else
			 {
				 $insertUserData ="";
			 }
			 
			 $data['result']       = $this->Commonmodel->getsingleData('users',$id);
			 
			 if($insertUserData!="")
			 {
			    $data['msg']    = "Registration update successfully.";
                $data['error']  = "";
				$data['id']     = $this->input->post('editid');
				$this->load->view('header',$result);
			    $this->load->view('editRegistration',$data);
			 }	
			 else
			 {				
				$data['id']     = $this->input->post('editid');
				$data['msg']    = "";
				$data['error']  = "";
				$this->load->view('header',$result);
			    $this->load->view('editRegistration',$data);
			 }
             
	      }
		  else
		  {				
			 if(strlen($Phone)==10)
	         {
	           $data['phoneerror']=""; 
	         }
	         else
	         {	             
			   $data['phoneerror']="Mobile length is 10 digit compulsory";
	         }			   
	   
	         if(strlen($Password)==6)
	         {
	           $data['passerror']=""; 
	         }
	         else
	         {
			   $data['passerror']="Password length is only accepted 6 digit";
	         }
			 
			
			if($data['user']==""&&$data['emailid']==""&&$data['pass']==""&&$data['phone']==""&&$data['phoneerror']==""&&$data['passerror']=="") 
			{
   		      $insertUserData =  $this->Commonmodel->InsertData('users',$post);	
			}
			else
			{
			  $insertUserData ="";
			}		
            			
			if($insertUserData!="")
			 {
			    $data['msg']    = "Registration successfully.";
                $data['error']  = "";				
				$this->load->view('header',$result);
			    $this->load->view('Registration',$data);
			 }	
			 else
			 {
				$data['msg']    = "";
				$data['error']  = "";
				$this->load->view('header',$result);
			    $this->load->view('Registration',$data);
			 }

		  }
		}
	  }	 	     
  }
  
  public function editregistration()
   {
	  $id=$this->uri->segment(3);
	  $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']==1)
	  {
		  $data['msg']          = "";     
	      $data['user']         = "";
	      $data['pass']         = "";
	      $data['phone']        = "";
	      $data['emailid']      = ""; 
	      $data['passerror']    = "";
	      $data['phoneerror']   = "";
	      $data['error']        = "";
		  $data['result']       = $this->Commonmodel->getsingleData('users',$id);		 
		  $result['sessarrs']   = $sessarr['status']; 
		  $result['sessarrs1']  = $sessarr;
		  $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('editRegistration',$data); 
      }
	  else
	  {
		 redirect('admin/login');
	  }	  
   } 
  
  
  
  
   
   
   public function NewReporter()
   {  	   
	   $sessarr              = $this->session->userdata('sessdata');			
	   $data['sessarr']      = $sessarr['status'];   
       $result['sessarrs']   = $sessarr['status']; 
       $result['sessarrs1']  = $sessarr;          
	   $data['msg']          = "";     
	   $data['user']         = "";
	   $data['pass']         = "";
	   $data['phone']        = "";
	   $data['emailid']      = "";	   
	   $data['pancard']      = "";
	   $data['reporter']     = "";	 
	   $data['passerror']    = "";
	   $data['phoneerror']   = "";
	   $data['error']        = "";
	   $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   	  
	   $allowed   =  array('gif','png' ,'jpg');
       
	   if($_FILES['picture']['name']!="")
	   {
		 $filename   =  $_FILES['picture']['name'];  
	   }
	   else
	   {
		 $filename   =  $this->input->post('pictures');
	   }
	   
	   if($_FILES['address_proof']['name']!="")
	   {
		 $filename1   =  $_FILES['address_proof']['name'];  
	   }
	   else
	   {
		 $filename1   =  $this->input->post('address_proofs');
	   }
	   
       $ext        =  pathinfo($filename, PATHINFO_EXTENSION);
	   $ext1       =  pathinfo($filename1, PATHINFO_EXTENSION);
       if(!in_array($ext,$allowed)||!in_array($ext1,$allowed))
	   {
          $data['error']     = "Only jpg, gif, and png files are allowed.";
		  $this->load->view('header',$result);
		  $this->load->view('Reporter',$data);
		  $add =""; 
	   }
	   else
	   {
		    $add = "Add";	
	   }
	   
	 if("Add"==$add)	
	 {	
	     if(!empty($_FILES['picture']['name']))
		 {
                $config['upload_path']   = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['picture']['name'];
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('picture'))
				{
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }
				else
				{
                    $picture = '';
                }
         }
		 else
		 {
                 $picture = $this->input->post('pictures');
         } 
		 
		 if(!empty($_FILES['address_proof']['name']))
		 {
             $config['upload_path']   = 'uploads/images/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name']     = $_FILES['address_proof']['name'];
             $this->load->library('upload',$config);
             $this->upload->initialize($config);
             if($this->upload->do_upload('address_proof'))
			 {
                $uploadData    = $this->upload->data();
                $address_proof = $uploadData['file_name'];
             }
			 else
			 {
               $address_proof = '';
             }
         }
		 else
		 {
             $address_proof = $this->input->post('address_proofs');
         } 
				
		  $Username       =  $this->input->post('Username');   
          $Password       =  $this->input->post('Password');
	      $Email          =  $this->input->post('Email');
	   	  $Phone          =  $this->input->post('Phone');
		  $types          =  $this->input->post('types');
		  $pan_card       =  $this->input->post('pan_card');
	   	  $reporter_id    =  $this->input->post('reporter_id');				
	   	  $organization   =  $this->input->post('organization');
		  $sessarr        =  $this->session->userdata('sessdata'); 
          $status         =  3;			  
		  
		  $post = array(
			             'username'       =>  ucfirst($Username),   
			             'password'       =>  $Password,   
			             'email'          =>  $Email,   
			             'phone'          =>  $Phone,
				         'picture'        =>  $picture,
				         'status'         =>  $status,
				         'type'           =>  $types,				  
				         'pan_card'       =>  $pan_card,
				         'reporter_id'    =>  $reporter_id,
				         'address_proof'  =>  $address_proof,
				         'organization'   =>  $organization
			         ); 	          
		  	
              
		  if($Username!="" || $Password!="" || $Email!="" || $pan_card!="" || $reporter_id!="") 
		  {			
			
		   if($this->input->post('editid')=="")	
		   {
			  $logins      =  array('username'=>ucfirst($Username)); 
			  $result1     =  $this->Commonmodel->CheckLogin('users',$logins);			
			  $logins2     =  array('password'=>$Password); 
			  $result2     =  $this->Commonmodel->CheckLogin('users',$logins2);			
			  $logins3     =  array('email'=>$Email); 
			  $result3     =  $this->Commonmodel->CheckLogin('users',$logins3);
			  $logins4     =  array('phone'=>$Phone); 
			  $result4     =  $this->Commonmodel->CheckLogin('users',$logins4);			
			  $logins5     =  array('reporter_id'=>$reporter_id); 
			  $result5     =  $this->Commonmodel->CheckLogin('users',$logins5);
			  $logins6     =  array('pan_card'=>$pan_card); 
			  $result6     =  $this->Commonmodel->CheckLogin('users',$logins6);

			 if(count($result1)!=0)
 		     {
			   $data['user']="Username is already exist";
			 }
			 else
			 {				  
			   $data['user']= "";				 
			 }
				
             if(count($result2)!=0)
		     {				 
			   $data['pass']="Password is already exist";
			 }
			 else
			 {				 
			   $data['pass']= "";  
			 }
				
             if(count($result3)!=0)
			 {				 
			   $data['emailid']="Email is already exist";
			 }
			 else
			 {				 
			   $data['emailid']= "";  
			 }  
			   
			 if(count($result4)!=0)
			 {				 
			   $data['phone']="Mobail Number is already exist";
			 }
			 else
			 {				 
			   $data['phone']= "";  
			 }
			   
			 if(count($result5)!=0)
			 {				 
			   $data['reporter']="Reporter Id is already exist";
			 }
			 else
			 {				 
			   $data['reporter']= "";  
			 }
			   
			 if(count($result6)!=0)
			 {				 
			   $data['pancard']="Pan card No is already exist";
			 }
			 else
			 {				 
			   $data['pancard']= "";  
			 }
			 
		  }	
		  else
		  {
			    
              $logins41    =  array('id'=>$this->input->post('editid'));
			  $logins      =  array('username'=>ucfirst($Username));			  		
			  $result11    =  $this->Commonmodel->Check('users',$logins41);
			  if($result11[0]['username']==ucfirst($Username))
              {
                 $data['user']= "";	
			  }
			  else
			  {				
                $result1     =  $this->Commonmodel->CheckLogin('users',$logins);	
				if(count($result1)!=0)
			    {				 
			      $data['user']="UserName Number is already exist";
			    }
			    else
			    {				 
			      $data['user']= "";  
			    }
			  }
				
			  //-----------------------------------------------------------------------------------
		
			  $logins2     =  array('password'=>$Password);             		  
              if($result11[0]['password']==$Password)
              {
                 $data['pass']= "";	
			  }
			  else
			  {				
                $result2     =  $this->Commonmodel->CheckLogin('users',$logins2);	
				if(count($result2)!=0)
			    {				 
			      $data['pass']="Password is already exist";
			    }
			    else
			    {				 
			      $data['pass']= "";  
			    }
			  } 
			  
        //-----------------------------------------------------------------------------------
		
              $logins3     =  array('email'=>$Email); 
              if($result11[0]['email']==$Email)
              {
                 $data['emailid']= "";	
			  }
			  else
			  {	
			    $result3     =  $this->Commonmodel->CheckLogin('users',$logins3);	
				if(count($result3)!=0)
			    {				 
			      $data['emailid']="Email id is already exist";
			    }
			    else
			    {				 
			      $data['emailid']= "";  
			    }
			  } 
         
           //-----------------------------------------------------------------------------------
			  
			  $logins4     =  array('phone'=>$Phone);			  
              if($result11[0]['phone']==$Phone)
              {
                 $data['phone']= "";	
			  }
			  else
			  {				
                $result4     =  $this->Commonmodel->CheckLogin('users',$logins4);	
				if(count($result4)!=0)
			    {				 
			      $data['phone']="Mobail Number is already exist";
			    }
			    else
			    {				 
			      $data['phone']= "";  
			    }
			  }				
				
				
			//----------------------------------------------------------------------------------------------

			  $logins5     =  array('reporter_id'=>$reporter_id); 
			  if($result11[0]['reporter_id']==$reporter_id)
              {
                 $data['reporter_id']= "";	
			  }
			  else
			  {				
                $result5     =  $this->Commonmodel->CheckLogin('users',$logins5);	
				if(count($result5)!=0)
			    {				 
			      $data['reporter']="Reporter Id is already exist";
			    }
			    else
			    {				 
			      $data['reporter']= "";  
			    }
			  }			
			  
			  
			//----------------------------------------------------------------------------------------------

			  $logins6     =  array('pan_card'=>$pan_card);
			  if($result11[0]['pan_card']==$pan_card)
              {
                 $data['pancard']= "";	
			  }
			  else
			  {				
                $result6     =  $this->Commonmodel->CheckLogin('users',$logins6);	
				if(count($result6)!=0)
			    {				 
			      $data['pancard']="Pan card No is already exist";
			    }
			    else
			    {				 
			      $data['pancard']= "";  
			    }
			  }	

			 //$data['user']= "";
		     //$data['pass']= "";
		     // $data['emailid']= "";
		     // $data['phone']= "";
		     //$data['reporter']= "";
		     //$data['pancard']= "";
		   }
			
			 
		  if($this->input->post('editid')!="")
          { 
             if(strlen($Phone)==10)
	         {
	          $data['phoneerror']=""; 
	         }
	         else
	         {	             
			  $data['phoneerror']="Mobile length is 10 digit compulsory";
	         }			   
	   
	         if(strlen($Password)==6)
	         {
	           $data['passerror']=""; 
	         }
	         else
	         {
			   $data['passerror']="Password length is only accepted 6 digit";
	         }

	         $id = $this->input->post('editid');
			 if($data['passerror']=="" && $data['phoneerror']=="" && $data['user']=="" && $data['pass']=="" && $data['emailid']=="" && $data['phone']=="" && $data['reporter']=="" && $data['pancard']=="")
			 {
			    $insertUserData =  $this->Commonmodel->UpdateData('users',$post,$id);	
			 }
			 else
			 {
				 $insertUserData ="";
			 }
			 $data['result']       = $this->Commonmodel->getsingleData('users',$id);
			 if($insertUserData!="")
			 {
			    $data['msg']    = "Registration update successfully.";
                $data['error']  = "";
				$data['id']     = $this->input->post('editid');
				$this->load->view('header',$result);
			    $this->load->view('editRepoter',$data);
			 }	
			 else
			 {				
				$data['id']     = $this->input->post('editid');
				$data['msg']    = "";
				$data['error']  = "";
				$this->load->view('header',$result);
			    $this->load->view('editRepoter',$data);
			 }
             
	      }
		  else
		  {		
			
			 if(strlen($Phone)==10)
	         {
	          $data['phoneerror']=""; 
	         }
	         else
	         {	             
			  $data['phoneerror']="Mobile length is 10 digit compulsory";
	         }			   
	   
	         if(strlen($Password)==6)
	         {
	           $data['passerror']=""; 
	         }
	         else
	         {
			   $data['passerror']="Password length is only accepted 6 digit";
	         }
			
			if($data['user']==""&&$data['pass']==""&&$data['phone']==""&&$data['reporter']==""&&$data['pancard']==""&&$data['passerror']==""&&$data['phoneerror']=="") 
			{
   		      $insertUserData =  $this->Commonmodel->InsertData('users',$post);	
			}
			else
			{
			  $insertUserData ="";
			}		
            			
			if($insertUserData!="")
			 {
			    $data['msg']    = "Registration successfully.";
                $data['error']  = "";				
				$this->load->view('header',$result);
			    $this->load->view('Reporter',$data);
			 }	
			 else
			 {
				$data['msg']    = "";
				$data['error']  = "";
				$this->load->view('header',$result);
			    $this->load->view('Reporter',$data);
			 }

		  }
			
	    }	  
	  }
   }
      
   
   public function editrepoter()
   {
	  $id=$this->uri->segment(3);
	  $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']==1)
	  {
		  $data['msg']          = "";     
	      $data['user']         = "";
	      $data['pass']         = "";
	      $data['phone']        = "";
	      $data['emailid']      = "";	   
	      $data['pancard']      = "";
	      $data['reporter']     = "";	 
	      $data['passerror']    = "";
	      $data['phoneerror']   = "";
	      $data['error']        = "";
		  $data['result']       = $this->Commonmodel->getsingleData('users',$id);		 
		  $result['sessarrs']   = $sessarr['status']; 
		  $result['sessarrs1']  = $sessarr;
		  $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('editRepoter',$data); 
      }
	  else
	  {
		 redirect('admin/login');
	  }	  
   }
   
   
		
	
   public function loginverify()
   {      
        $Username = $this->input->post('Username');   
        $Password = $this->input->post('Password');					
		if($Username!='' && $Password!='')
		{
		  $login    = array('username'=>ucfirst($Username),'password'=>$Password);  
		  $result   = $this->Commonmodel->CheckLogin('users',$login);       
          if(count($result)!=0)
		  {
		    $this->session->set_userdata('sessdata',$result[0]);
		    $sessarr  = $this->session->userdata('sessdata');				
		    if($result[0]['id']==1||2||3)
		    {			
			  redirect('admin/dashboard');	
		    }		  
		  }
		  else
		  {			
			 $login  =  array('username'=>ucfirst($Username));  
		     $result1 =  $this->Commonmodel->CheckLogin('users',$login);
			 if(count($result1)!=0)
			 { 
		         $user = $result1[0]['username'];
			 }
			 else{ $user = ""; }
			
			 if(ucfirst($Username)==$user)
			 {
			    $data['msg']=""; 
			 }
             else
			 {
			    $data['msg']="Please enter your correct username.";  
			 }
			
			 $logins  =  array('password'=>$Password);  
		     $result2 =  $this->Commonmodel->CheckLogin('users',$logins);
			 
			 if(count($result2)!=0)
			 { 
		      $pass = $result2[0]['password'];
			 }
			 else{ $pass = ""; }
			
			 if($Password==$pass)
			 {
			    $data['msg1']="";
			 }
             else
			 {
				$data['msg1']="Please enter your correct password.";				
			 }				 
			 $this->load->view('login',$data);			
		  }
		}
		else
		{          
		  $this->load->view('login',$data);		  
		}
    }	
			
	
	public function dashboard()
    { 
		$id='';
		$sessarr                 = $this->session->userdata('sessdata');
		$data['sessarr']         = $sessarr['type'];		
		$result['sessarrs']      = $sessarr['status']; 		
		$result['sessarrs1']     = $sessarr;	
		$data['Video']           = $this->Commonmodel->data_count('Video',$id,$sessarr['reporter_id'],$sessarr['type']);
		$data['Posts']           = $this->Commonmodel->data_count('Post',$id,$sessarr['reporter_id'],$sessarr['type']);        
		$data['PostPublish']     = $this->Commonmodel->data_counts('Post',1,$sessarr['reporter_id'],$sessarr['type']);
		$data['PostunPublish']   = $this->Commonmodel->data_counts('Post',0,$sessarr['reporter_id'],$sessarr['type']);		
		$data['VideoPublish']    = $this->Commonmodel->data_counts('Video',1,$sessarr['reporter_id'],$sessarr['type']);
		$data['VideounPublish']  = $this->Commonmodel->data_counts('Video',0,$sessarr['reporter_id'],$sessarr['type']);		
		$result['menu']          = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);		
		$this->load->view('header',$result);
		$this->load->view('dashboard',$data);   
    }	
	
		
	public function viewPost()
    {  
       $limit='';
	   $sessarr              = $this->session->userdata('sessdata');	   
	   //$data['results']    = $this->Commonmodel->getAllRecord('post_news','Post',$limit,$sessarr['id'],$sessarr['status']);
	   $data['results']      = $this->Commonmodel->getViewData('Post',$sessarr['id'],$sessarr['status']);
	   $result['sessarrs']   = $sessarr['status']; 
	   $result['sessarrs1']  = $sessarr;
	   $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $data['msg']          = "";
	   $this->load->view('header',$result);
	   $this->load->view('viewPost',$data);   
    }	
		
	
	public function deletesPost()
    { 
       $id                    =  $this->uri->segment(3);		
       $data['result']        =  $this->Commonmodel->deleteRecord('post_news',$id); 
	   $sessarr               =  $this->session->userdata('sessdata'); 
	   $data['results']       =  $this->Commonmodel->getViewData('Post',$sessarr['id'],$sessarr['status']);
	   $result['sessarrs']    =  $sessarr['status']; 
	   $result['sessarrs1']   =  $sessarr;
	   $result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $data['msg']           =  "Record Deleted Successfully";
	   $this->load->view('header',$result);
	   $this->load->view('viewPost',$data);
	   //redirect('admin/viewPost');
    }
	
	
    public function getsubCategory()
    { 
       $id = $this->input->post('id');		
       $data['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$id);	  
	   echo json_encode($data);
    }
	
	
    public function getviewData()
    { 
       $id = $this->input->post('id');		
       $data['results']  =  $this->Commonmodel->getsingleData('post_news',$id);	  
	   echo json_encode($data);
    }
	
	
	public function newPost()
    {	
	    $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		  $postty               = "";
		  $data['msg']          = "";
		  $data['error']        = "";
		  $result['sessarrs']   = $sessarr['status']; 
		  $result['sessarrs1']  = $sessarr;
		  $data['result']       = $this->Commonmodel->getsingleData('category',$postty);
		  $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('newPost',$data); 
        }
	    else
	    {
		   redirect('admin/login');
	    }	  
    }	
		
	
    public function newVideo()
    {	
	   $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']==1||2||3)
	   {
		  $postty               = "";
		  $data['msg']          = "";
		  $data['error']        = "";
		  $result['sessarrs']   = $sessarr['status']; 
		  $result['sessarrs1']  = $sessarr;
		  $data['result']       = $this->Commonmodel->getsingleData('category',$postty);
		  $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('newVideo',$data); 
       }
	   else
	   {
		  redirect('admin/login');
	   }	  
    }	
	
	
	public function editVideo()
    {	
	    $id=$this->uri->segment(3);
		$sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		  $postty               = "";
		  $data['msg']          = "";
		  $data['error']        = "";
		  $data['result']       = $this->Commonmodel->getsingleData('post_news',$id);	
		  $data['results']      = $this->Commonmodel->getsingleData('category',$postty);
		  $result['sessarrs']   = $sessarr['status']; 
		  $result['sessarrs1']  = $sessarr;
		  $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('editVideo',$data); 
        }
	    else
	    {
		   redirect('admin/login');
	    }	  
    }
		

    public function editPost()
    {	
	    $postty="";
		$id=$this->uri->segment(3);
		$sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		  $data['msg']           =  "";
		  $data['error']         =  "";
		  $data['result']        =  $this->Commonmodel->getsingleData('post_news',$id);	
		  $data['results']       =  $this->Commonmodel->getsingleData('category',$postty);
		  $result['sessarrs']    =  $sessarr['status']; 
		  $result['sessarrs1']   =  $sessarr;
		  $result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$result);
		  $this->load->view('editPost',$data); 
        }
	    else
	    {
		   redirect('admin/login');
	    }	  
    }
	
	
	
	function savePost()
	{		
	  $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']==1||2||3)
	  {		
        if($this->input->post('userSubmit'))
		{ 		  
		  $sessarr             =  $this->session->userdata('sessdata');
		  $postty              =  "";			   		   
		  $data['result']      =  $this->Commonmodel->getsingleData('post_news',$this->input->post('editid'));	
		  $data['results']     =  $this->Commonmodel->getsingleData('category',$postty);
		  $result['sessarrs']  =  $sessarr['status']; 
		  $result['sessarrs1'] =  $sessarr;
		  $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  
		  $tit     =  $this->input->post('Title');
		  if($tit!='')
		  {
			$array   =  array('Title'=>$tit,'Type_Post'=>$this->input->post('Type_Post'));  
		    if($this->input->post('editid')=="")
			{
		        $results =  $this->Commonmodel->CheckLogin('post_news',$array);
		        if(count($results)!=0)
			    {
			      $checkedtitle = $results[0]['Title'];
		        }
			    else
			    {
				  $checkedtitle = ""; 	 
			    }
			} 
			else
			{	
				//$checkedtitle = "";
				$results =  $this->Commonmodel->CheckLogin('post_news',$array);
		        if(count($results)!=0)
			    {
			      $checkedtitle =  $results[0]['Title'];
				  $array1       =  array('id'=>$this->input->post('editid'),'Type_Post'=>$this->input->post('Type_Post'));
		          $results1     =  $this->Commonmodel->Check('post_news',$array1);
				  if($results1[0]['Title']!=$tit)
				  {
				     $results =  $this->Commonmodel->CheckLogin('post_news',$array);
					 if($results[0]['Title']==$tit)
					 {
					   $checkedtitle =$results[0]['Title'];
					 }
					 else
					 {
					   $checkedtitle = "";
					 }
				  }
				  else
				  {
					$checkedtitle = "";  
				  }				
				}
			    else
			    {
				  $checkedtitle = ""; 	 
			    }
			}			
		 }
		 else
		 {
		   $checkedtitle = "";  
		 }
		  
		 if($checkedtitle==$tit)
		 {
			$data['msg']   = "";
			
			if($checkedtitle!='')
			{				
			  $data['error'] = "Title is already exist."; 			  
			}
			else
			{				
			  $data['error'] = "All field is Mandatory.";			  
			}
			
            if($this->input->post('Type_Post') == "Post")
			{			  
			   if($this->input->post('editid')!="")
		       { 
			     $this->load->view('header',$result);	
				 $this->load->view('editPost',$data);
			   }
			   else
			   {
				 $this->load->view('header',$result);	
				 $this->load->view('newPost',$data);  
			   }
			}
			else
			{
               if($this->input->post('editid')!="")
		       {	
				 $this->load->view('header',$result);	
				 $this->load->view('editVideo',$data);
			   }
			   else
			   {
				 $this->load->view('header',$result);	
				 $this->load->view('newVideo',$data);  
			   }
			}			
		 }	
		 else
		 {		  
		    if($this->input->post('Type_Post') == "Post")
		    { 
   	          $allowed   =  array('gif','png' ,'jpg');          
              if($_FILES['picture']['name']!="")
			  {
			    $filename  =  $_FILES['picture']['name'];
			  }
			  else
			  {
				$filename  = $this->input->post('pictures');				
			  }
			  
              $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
              if(!in_array($ext,$allowed))
		      {
                if($filename!='')
			    {
			      $data['error'] = "Only jpg, gif and png files are allowed.";
                }
			    else if($this->input->post('Url')=="youtube")
			    {
				  $data['error'] = "File should be select.";   
			    }
			    else
			    {
				  $data['error'] = "File should be select.";   
			    }
			  
			    $data['msg']   = "";
			    $this->load->view('header',$result);
		        if($this->input->post('editid')!="")
		        {
			      $this->load->view('editPost',$data);
			    }
			    else
			    { 
				  $this->load->view('newPost',$data);  
			    }
			    $add =""; 
			}
			else
			{
			  $add = "Add";	
			}				
		  }
		  else if($this->input->post('Type_Post')=="Video")
		  {  			 
			
            if($this->input->post('Types')=="")
			{
			    $this->load->view('header',$result);
		        if($this->input->post('editid')!="")
		        {
				  $data['msg']   = "";
				  $data['error'] = "All field's are Mandatory.";
				  $this->load->view('editVideo',$data);	
			    }
				else
				{
				  $data['msg']   = "";
				  $data['error'] = "All field's are Mandatory.";
				  $this->load->view('newVideo',$data); 
				}
				$add = "";
			}
			else
			{
			  if($this->input->post('Types')=="own")
			  {
			    $allowed  =  array('mp4');			  
			    if($_FILES['picture']['name']!="")
			    {
			      $filename  =  $_FILES['picture']['name'];
			    }
			    else
			    {
			  	  $filename  = $this->input->post('pictures');				
			    }			   
                $ext      =  pathinfo($filename, PATHINFO_EXTENSION);               
			    if(!in_array($ext,$allowed))
		        {
                  if($this->input->post('Types')!="youtube")
				  {					
				    if($filename!='')
			        {
				       $data['error'] = "Only mp4 files are allowed.";
			        }
				    else
			        {
				       $data['error'] = "Video File should be select.";  
			        }
				  }
				 
				  $data['msg']   = "";
			      $this->load->view('header',$result);
		          if($this->input->post('editid')!="")
		          {
				    $this->load->view('editVideo',$data);	
			      }
				  else
				  {
				    $this->load->view('newVideo',$data); 
				  }
				  $add = "";	
                }
			    else
			    {
			       $add = "Add";	
			    }			   
		      }
			  else
			  {
				if($this->input->post('Url')=='')
				{					  
				  $add ="";				  
				  $data['error'] = "URL should be entered.";
				  $data['msg']   = "";
			      $this->load->view('header',$result);
				  if($this->input->post('editid')!="")
		          {
				    $this->load->view('editVideo',$data);	
			      }
				  else
				  {
				    $this->load->view('newVideo',$data); 
				  }
				  $add = "";	
				}
				else
				{
				  $add = "Add";	  
				}
			 }
			 
			} 
		 }			  
	    
	 
		 
		 if("Add"==$add)
		 {			 
		   if(!empty($_FILES['picture']['name']))
		   { 	  
			  $config['upload_path']   = 'uploads/images/';
			  $config['allowed_types'] = 'jpg|jpeg|png|gif|mp4';	
			  $config['file_name']     = $_FILES['picture']['name'];		
              $this->load->library('upload',$config);
              $this->upload->initialize($config);                
              if($this->upload->do_upload('picture'))
			  {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];					
              }
			  else
			  {
                $picture = '';
              }					
           }
		   else
		   {              
			  if($this->input->post('pictures')!="")
			  {
				$picture = $this->input->post('pictures');  
			  }
			  else
			  {
				  $picture ="";
			  }		  
           }    
          			
		    $Title         =  $this->input->post('Title');   
            $Priority      =  $this->input->post('Priority');
	        $Category      =  $this->input->post('Category');
			$subCategory   =  $this->input->post('subCategory');			
	   	    //$Source        =  $this->input->post('Source');
	   	    //$Tags          =  $this->input->post('Tags');
	   	    $Contents      =  $this->input->post('Contents');
		    $Type_Post     =  $this->input->post('Type_Post');			
			$Types         =  $this->input->post('Types');
			$Url           =  $this->input->post('Url');				 	
		    $username      =  $sessarr['reporter_id'];
		    $role          =  $sessarr['type'];
			$status        =  0;
			$post = array(
			               'Title'        =>  $Title,   
			               'Priority'     =>  $Priority,   
			               'Category'     =>  $Category,
				           'subCategory'  =>  $subCategory,
			               //'Source'       =>  $Source,   
				           //'Tags'         =>  $Tags,   
				           'Contents'     =>  $Contents,
                           'Type_Post'    =>  $Type_Post,
						   'Types'        =>  $Types,
                           'Url'          =>  $Url,	
						   'picture'      =>  $picture,
				           'username'     =>  $username,
				           'role'         =>  $role,
				           'status'       =>  $status,
						   'user_id'      =>  $sessarr['id'],
			 ); 
			
          $sessarr             =  $this->session->userdata('sessdata');
		  $postty              =  "";			   		   
		  $data['result']      =  $this->Commonmodel->getsingleData('post_news',$this->input->post('editid'));	
		  $data['results']     =  $this->Commonmodel->getsingleData('category',$postty);
		  $result['sessarrs']  =  $sessarr['status']; 
		  $result['sessarrs1'] =  $sessarr;
		  $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  
		  if($this->input->post('editid')!="")
		  {
             $id = $this->input->post('editid');            	
			 
			 if($Title!="")
		     {
			   $insertUserData =  $this->Commonmodel->UpdateData('post_news',$post,$id);     
			 }
             else
			 {
               $insertUserData = "";
			 }
			
			 if($this->input->post('Type_Post')!='Post')
			 {
			    if($insertUserData!='')
			    {
			      $data['id']    = $id;
			      $data['msg']   = 'Video data have been update successfully.';	
	              $data['error'] ="";
			    }
			    else
			    {
				  $data['id']    = $id;
				  $data['error'] = "error";
				  $data['msg']   = "";
			    }
				$this->load->view('header',$result);
		        $this->load->view('editVideo',$data);
			 }
             else
             {               
			   if($insertUserData!='')
			   {
			     $data['id']  = $this->input->post('editid');
			     $data['msg'] = 'Post data have been update successfully.';
	             $data['error'] ="";
			   }
			   else
			   {
				 $data['id']    = $this->input->post('editid');
				 $data['error'] = "error";
				 $data['msg']   = "";
			   }
			   $this->load->view('header',$result);
		       $this->load->view('editPost',$data);
		     }
          }
          else
		  {			  
            if($Title!="")
		    {
		       $insertUserData = $this->Commonmodel->InsertData('post_news',$post);
		    }
		    else
		    {
			   $insertUserData = "";  
		    }
			
			if($this->input->post('Type_Post')!='Post')
			{ 
			   if($insertUserData!='')
				{
				  $data['msg']    = 'Video data have been added successfully.';	
				  $data['error']  = "";	
				}
				else
				{
				  $data['msg']   = "";
				  $data['error'] = "error";	
				}			   
			   $this->load->view('header',$result);
		       $this->load->view('newVideo',$data);				
			}
            else
            {  
				if($insertUserData!='')
				{
				  $data['msg']    = 'Post data have been added successfully.';	
				  $data['error']  = "";	
				}
				else
				{
				  $data['msg']    = "";
				  $data['error']  = "error";	
				}
				$this->load->view('header',$result);
		        $this->load->view('newPost',$data);				
			}			
		  }	
		 }	
        }
      }         
	}
	else
	{		 
		redirect('admin/login');
	} 	  
  }
		
		
		
		
		
		
		
		
		
    
	function logout()
	{
	    $this->session->sess_destroy();     
        redirect('admin/login');	  
    }		
	
	
	public function Category()
    {    
      $Category = $this->uri->segment(3);
	  if(is_numeric($this->uri->segment(3)))
	  {	
           $id = $this->uri->segment(3);		  
		   $postty = "";		   
		   $data['result1']     =  $this->Commonmodel->getsingleData('category',$postty); 
	       foreach($data['result1'] as $val)
	       {	     
		     $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		     for($i=0;$i<count($data1['results']);$i++)
		     {			
			    $b[] = $data1['results'][$i];			
		     }		
	       }	  
	       $data['result2']          =  $b;		   
		   $data['result']           =  $this->Commonmodel->getsingleData('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereData('post_news',8,$Category,$postty);		   
		   $data['Video']            =  $this->Commonmodel->getWhereData('post_news',4,$Category,'Video');
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		   $postty = "";		   
		   $data['result']      =  $this->Commonmodel->getsingleData('category',$postty); 
	      // foreach($data['result'] as $val)
	      // {	     
		     //$data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		   //  for($i=0;$i<count($data1['results']);$i++)
		    // {			
			   // $b[] = $data1['results'][$i];			
		    // }		
	       //}		   
	       //$data['result2']=$b;	
	       
		   $data['results']           =  $this->Commonmodel->getWhereDatas('post_news',8,$Category,$postty);
		   $data['Video']             =  $this->Commonmodel->getWhereDatas('post_news',4,$Category,'Video'); 
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		   
		   $this->load->view('CategoryNews',$data); 
	   } 	  
	}		
	

    public function Entertainment()
    { 
      if($this->uri->segment(3)!='')
	  {	
           $id = $this->uri->segment(3);
		   $postty                   =  "";		   
		   $data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']           =  $this->Commonmodel->getsingleData('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereDatas('post_news',8,'Entertainment',$postty);		   
		   $data['Video']            =  $this->Commonmodel->getWhereDatas('post_news',4,'Entertainment','Video');		   	   
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   $this->load->view('singleNews',$data);   
      }
	  else
	  {		
		   $postty                  =  "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Entertainment',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Entertainment','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   $this->load->view('CategoryNews',$data); 
	  } 	
	}
	
	
	
	public function Business()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Business',$postty);
           $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Business','Video'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   $this->load->view('singleNews',$data);   
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Business',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Business','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   $this->load->view('CategoryNews',$data); 
	  } 
	}		
    
  
  
    public function Politics()
    { 	
	   if($this->uri->segment(3)!='')
	   {	
          $id = $this->uri->segment(3); 
          $postty                  = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Politics',$postty);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Politics','Video'); 	
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data); 
       }
	   else
	   {		
		  $postty = "";		
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Politics',$postty);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Politics','Video'); 	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('CategoryNews',$data); 
	   }		
    }		
		
		
	
    public function Technology()
    { 
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3); 
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Technology',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);  
	   }
	   else
	   {	
          $postty = "";   
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Technology',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		 
		  $this->load->view('CategoryNews',$data); 
	   } 
    }					
		
		
	
    public function Sports()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";   
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Sports',$postty);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Sports','Video'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		  $postty = "";   
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Sports',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Sports','Video'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('CategoryNews',$data); 
	   } 
    }
	
	
		
	public function Law()
    {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Law',$postty);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Law','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Law',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Law','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $this->load->view('CategoryNews',$data); 
	   } 	   
	}
	
	
	
	public function Education()
    { 	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Education',$postty);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Education','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Education',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Education','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('CategoryNews',$data); 
	   } 	   
	}	
	
	
	public function Lifestyle()
    {	
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Lifestyle',$postty);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Lifestyle','Video');	
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Lifestyle',$postty);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Lifestyle','Video');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('CategoryNews',$data); 
	   }	   
	}	
	
	
	
	public function Other()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";
		  $data['result1']         = $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         = $this->Commonmodel->getWhereDatas('post_news',8,'Other',$postty);
		  $data['Video']           = $this->Commonmodel->getWhereDatas('post_news',4,'Other','Video');	
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] = $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] = $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('singleNews',$data);   
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          = $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         = $this->Commonmodel->getWhereDatas('post_news',8,'Other',$postty);
          $data['Video']           = $this->Commonmodel->getWhereDatas('post_news',4,'Other','Video');			  
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] = $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] = $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  $this->load->view('CategoryNews',$data); 
	   }   
	}		
	
	
	
	public function Video()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllVideos('post_news','Video');
	   $this->load->view('Video',$data);	 
    }	
	
	
	
	public function viewVideo()
    {
       $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']==1||2||3)
	   {          
		 $limit='';
		 //$data['results']    =  $this->Commonmodel->getAllRecord('post_news','Video',$limit,$sessarr['id'],$sessarr['status']);
		 $data['results']      =  $this->Commonmodel->getViewData('Video',$sessarr['id'],$sessarr['status']);		 
		 $result['sessarrs']   =  $sessarr['status'];
         $result['sessarrs1']  =  $sessarr; 
         $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);		  
		 $data['msg']          =  "";
		 $this->load->view('header',$result);
	     $this->load->view('viewVideo',$data); 
       }
       else
	   {
         redirect('admin/login');	
       }	  
    }
	
	
	
	public function deletes()
    {
      $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']==1||2||3)
	  {			
        $id                   =  $this->uri->segment(3);		
        $data['results']      =  $this->Commonmodel->deleteRecord('post_news',$id);
		$data['results']      =  $this->Commonmodel->getViewData('Video',$sessarr['id'],$sessarr['status']);		 
		$result['sessarrs']   =  $sessarr['status'];
        $result['sessarrs1']  =  $sessarr; 
        $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']); 
		$data['msg']          =  "Record Deleted Successfully";
		$this->load->view('header',$result);
	    $this->load->view('viewVideo',$data);
		//redirect('admin/viewVideo');
	  }
	  else
	  {
		redirect('admin/login');	  
	  }
    }	
	
	
	
	public function Publish()
    {
	   date_default_timezone_set('Asia/Kolkata');
       $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']==1||2)
	   {			
         $id                   =  $this->uri->segment(3);
         $post                 =  array('status' => 1,'publishers'=>$sessarr['username'],'date_time'=> date('Y-m-d h:i:s')); 			
         $data['results']      =  $this->Commonmodel->UpdateData('post_news',$post,$id);   
	     $data['msg']          =  "";
		 $data['results']      =  $this->Commonmodel->getViewData('Video',$sessarr['id'],$sessarr['status']);		 
		 $result['sessarrs']   =  $sessarr['status'];
         $result['sessarrs1']  =  $sessarr; 
         $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		 $this->load->view('header',$result);
	     $this->load->view('viewVideo',$data);		 
	   }
	   else
	   {
		 redirect('admin/login');	  
	   }
    }
		
	
	/*public function unPublish()
    {
       $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']==1||2)
	   {			
         $id = $this->uri->segment(3);
         $post = array('status' => 0); 			
         $data['results'] =  $this->Commonmodel->UpdateData('post_news',$post,$id);   
	     redirect('admin/viewVideo');
	   }
	   else
	   {
		  redirect('admin/login');	  
	   }
    }*/
		
	
	public function postPublish()
    {
       date_default_timezone_set('Asia/Kolkata');
	   $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']==1||2)
	   {			
         $id                   = $this->uri->segment(3);		 	 
         $post                 = array('status' => 1,'publishers'=>$sessarr['username'],'date_time'=> date('Y-m-d h:i:s')); 			
         $data['results']      =  $this->Commonmodel->UpdateData('post_news',$post,$id);   
	     $data['results']      = $this->Commonmodel->UpdateData('post_news',$post,$id);   
	     $data['results']      = $this->Commonmodel->getViewData('Post',$sessarr['id'],$sessarr['status']);
	     $result['sessarrs']   = $sessarr['status']; 
	     $result['sessarrs1']  = $sessarr;
	     $result['menu']       = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	     $data['msg']          = "";
	     $this->load->view('header',$result);
	     $this->load->view('viewPost',$data);
		 //redirect('admin/viewPost');
	   }
	   else
	   {
		  redirect('admin/login');	  
	   }
    }
		
	
	/*public function postunPublish()
    {
       $sessarr = $this->session->userdata('sessdata');	  
       if($sessarr['status']==1||2)
	   {			
         $id                    = $this->uri->segment(3);
         $post                  = array('status' => 0);	
		 redirect('admin/viewPost');
	   }
	   else
	   {
		  redirect('admin/login');	  
	   }
    }	*/
		
	
    public function RecentNews()
    {        
		$id ='';
		$limit='';
		$data['result']  =  $this->Commonmodel->getsingleData('post_news',$id);
		$data['results']  =  $this->Commonmodel->getData('post_news',8,'id');
		$data['Video']    =  $this->Commonmodel->getAllRecord('post_news','Video',$limit);
		$this->load->view('RecentNews',$data);   
    }	
	
	
//------------------------------------- Menu Allocation --------------------------------	

	
	public function menuAllocation()
    {        
	   $id="add";
	   $sessarr               =  $this->session->userdata('sessdata');	   
	   $data['results']       =  $this->Commonmodel->getuserssubadmin($id);
	   //$data['results']       =  $this->Commonmodel->UserMenuList('sub_admin');
	   $result['sessarrs']    =  $sessarr['status']; 
	   $result['sessarrs1']   =  $sessarr;
	   $result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $data['msg']           =  "";
	   $data['error']         =  "";
	   $this->load->view('header',$result);
	   $this->load->view('menuAllocation',$data);   
    }	
	
	
	public function saveMenu()
    { 	        
			$username           =  $this->input->post('username');   
            $P_article_post     =  $this->input->post('P_article_post');
	        $P_article_video    =  $this->input->post('P_article_video');
	   	    $P_category         =  $this->input->post('P_category');
            $P_advertise        =  $this->input->post('P_advertise');			
			
			$Menu = array(
			      'user_id'          =>  $username,   
			      'P_article_post'   =>  $P_article_post,   
			      'P_article_video'  =>  $P_article_video,   
			      'P_category'       =>  $P_category,	
                  'P_advertise'      =>  $P_advertise,					  
			   ); 	          
		   
		    $sessarr               =  $this->session->userdata('sessdata');
	        $result['sessarrs']    =  $sessarr['status']; 
	        $result['sessarrs1']   =  $sessarr;
	        $result['menu']        = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		   
		    if($this->input->post('editid')!='')
		    {
			   
			   $id  = $this->input->post('editid');			   
			  if($P_article_post!="" || $P_article_video!="" || $P_category!=""|| $P_advertise!="") 
			  {
			    $ids = "edit";
			    $data['results']  = $this->Commonmodel->getuserssubadmin($ids);
			    $insertUserData   = $this->Commonmodel->UpdateData('menu',$Menu,$id);
			    $data['result']   =  $this->Commonmodel->getsingleData('menu',$id);
			    $data['msg']      = 'Menu Allocation data have been update successfully.';
			    $data['error']    = "";
			    $data['id']       = $id;
			  }
			  else
			  {
			    $ids = "edit";
			    $data['results']  =  $this->Commonmodel->getuserssubadmin($ids);
			    $data['result']   =  $this->Commonmodel->getsingleData('menu',$id);
			    $data['msg']      = "";
			    $data['error']    = 'At least one menu should be select'; 
			    $data['id']       = $id;
			  } 
			   $this->load->view('header',$result);
	           $this->load->view('editMenuAllocation',$data);
	           
		    }
			else
			{
			   $ids = "add";
			   if($P_article_post!="" || $P_article_video!="" || $P_category!=""|| $P_advertise!="") 
			   {
			     $insertUserData  =  $this->Commonmodel->InsertData('menu',$Menu);
			     $data['results'] =  $this->Commonmodel->getuserssubadmin($ids);
			     $data['msg']     =  'Menu Allocation data have been added successfully.';	
			     $data['error']   =  "";
			   }
			   else
			   {
			     $data['results'] =  $this->Commonmodel->getuserssubadmin($ids);
			     $data['error']   = 'At least one menu should be select'; 
			     $data['msg']     ="";
			   }
			    $this->load->view('header',$result);
	            $this->load->view('menuAllocation',$data);
			}
	}	
	
	
	public function viewMenu()
    {
        $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		  $id                  =  '';
		  $data['results']     =  $this->Commonmodel->MenuAlocationJoin();
		  $result['sessarrs']  =  $sessarr['status'];
          $result['sessarrs1'] =  $sessarr;
 		  $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  $this->load->view('header',$result);
	      $this->load->view('viewMenu',$data); 
        }
        else
	    {
          redirect('admin/login');	
        }	  
    }
		
	
	public function editMenu()
    {	
	    $id=$this->uri->segment(3);
		$sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		  $ids="edit";
		  //$data['results']       =  $this->Commonmodel->getsingleData('users',$ids);
		  $data['results']       =  $this->Commonmodel->getuserssubadmin($ids);
		  $data['result']        =  $this->Commonmodel->getsingleData('menu',$id);	
		  $result['sessarrs']    =  $sessarr['status']; 
		  $result['sessarrs1']   =  $sessarr;
		  $result['menu']        = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  $data['']              =  "";
		  $data['msg']           =  "";
		  $data['error']         =  "";
	      $this->load->view('header',$result);
		  $this->load->view('editMenuAllocation',$data); 
        }
	    else
	    {
		   redirect('admin/login');
	    }	  
    }
		
		
//------------------------------------------- Categorys Allocation -----------------------
	
	public function NewCategory()
    {        
	   $id="";
	   $sessarr               =  $this->session->userdata('sessdata');
       $result['sessarrs']    =  $sessarr['status']; 
	   $result['sessarrs1']   =  $sessarr;	   
	   $data['results']       =  $this->Commonmodel->getsingleData('users',$id);	  
	   $result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $data['msg']           =  "";
	   $data['error']         =  "";
	   $this->load->view('header',$result);
	   $this->load->view('newCategory',$data);   
    }
		
	
	public function saveCategory()
    { 	        
		$id                   =  "";
		$category             =  $this->input->post('category');
		$data['checked']      =  $this->Commonmodel->checkcategory('category',ucwords($category));
	    $sessarr              =  $this->session->userdata('sessdata');	   
	    $data['results']      =  $this->Commonmodel->getsingleData('users',$id);
	    $result['sessarrs']   =  $sessarr['status']; 
	    $result['sessarrs1']  =  $sessarr;
	    $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		
		if(count($data['checked'])!=0)
		{
			$cat=$data['checked'][0]['category'];
		}
		else
		{
			$cat="";
		}
		
		if(ucwords($category)==ucwords($cat))
		{
			$data['error']  =  "Category is already exist";
			$data['msg']    =  "";			
			$this->load->view('header',$result);
	        $this->load->view('newCategory',$data); 
		}
		else
		{		
		   $categorys  = array('category' => ucwords($category));		
		   $insert =  $this->Commonmodel->InsertData('category',$categorys);		
		
		   if($insert!='')
		   {				
             $data['msg']    =  "Category data have been added successfully.";
			 $data['error']  =  "";
			 $this->load->view('header',$result);
	         $this->load->view('newCategory',$data); 
           }
		   else
		   {
             $data['msg']    = "";
			 $data['error']  = "";
			 $this->load->view('header',$result);
	         $this->load->view('newCategory',$data);   
           }		
	    }
	}	
	
	
//------------------------------------- Sub Categorys Allocation ---------------------------


	public function NewSubCategory()
    {        
	    $id                    =  "";
	    $sessarr               =  $this->session->userdata('sessdata');	   
	    $data['results']       =  $this->Commonmodel->getsingleData('users',$id);
	    $data['result']        =  $this->Commonmodel->getsingleData('category',$id);	   
	    $result['sessarrs']    =  $sessarr['status']; 
	    $result['sessarrs1']   =  $sessarr;
		$result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	    $data['msg']           =  "";
		$data['error']         =  "";
		$this->load->view('header',$result);
	    $this->load->view('newSubCategory',$data);   
    }
	

	
	public function saveSubCategory()
    { 	        
		$id                   =  "";
		$category             =  $this->input->post('category');
		$subcategory          =  $this->input->post('subcategory');
		$categorys            =  array('category' => $category,'subcategory' => ucfirst($subcategory));		
		$data['checked']      =  $this->Commonmodel->checkcategory('subcategory',ucfirst($subcategory));
		$sessarr              =  $this->session->userdata('sessdata');	   
	    $data['results']      =  $this->Commonmodel->getsingleData('users',$id);
	    $data['result']       =  $this->Commonmodel->getsingleData('category',$id);	   
	    $result['sessarrs']   =  $sessarr['status']; 
	    $result['sessarrs1']  =  $sessarr;
		$result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		if(count($data['checked'])!=0)
		{
		  	$subcat = $data['checked'][0]['subcategory'];
		}
		else
		{
			$subcat = "";
		}
		
		if(ucfirst($subcategory) == $subcat)
		{
		  $data['error']      =  "Subcategory is already exist";
		  $data['msg']        =  "";
		}
		else
		{
		  $insert             = $this->Commonmodel->InsertData('subcategory',$categorys);
		  if($insert!='')
		  {				
            $data['msg']      = "Subcategory data have been added successfully.";			
            $data['error']    = "";
		  }
		  else
		  { 
	        $data['msg']      = "";
			$data['error']    = "";
          }          
	    }
        $this->load->view('header',$result);
	    $this->load->view('newSubCategory',$data); 		
	}

//-----------------------------------------------Advertise---------------------------------------
	
	public function advertise()
    {
	   $sessarr             =  $this->session->userdata('sessdata'); 
	   $result['sessarrs']  =  $sessarr['status']; 
	   $result['sessarrs1'] =  $sessarr;	 
	   $result['msg']       =  "";
	   $result['error']     =  "";
	   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('newadvertise',$result); 
	}

	
	
	function saveAdvertise()
	{		
	  $sessarr = $this->session->userdata('sessdata');
      $sessarr              =  $this->session->userdata('sessdata'); 
	  $result['sessarrs']   =  $sessarr['status']; 
	  $result['sessarrs1']  =  $sessarr;
	  
	  if($sessarr['status']==1||2)
	  {		
        if($this->input->post('userSubmit'))
		{         
		  if($this->input->post('on_date') > $this->input->post('till_date'))
          { 	
		    if($this->input->post('editid')!='')
			{
			  $id                   =  $this->input->post('editid');
              $result['result']     =  $this->Commonmodel->getsingleData('advertise',$id);
			  $result['id']         =  $id;			  
			  $result['error']      =  "Till date should be greater than on date.";
              $result['msg']        =  "";	
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		      $this->load->view('editadvertise',$result);
			  $add =""; 	
			}
			else
			{
			   $result['error']      =  "Till date should be greater than on date.";                 
		       $result['msg']        =  "";
			   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			   $this->load->view('newadvertise',$result);
			   $add  =  ""; 
			}			
			
		  }
		  else
		  {
		  
		    if($this->input->post('editid')!='')
		    {			  
		      $allowed  =  array('gif','png' ,'jpg');
              $pic      =  $_FILES['picture']['name'];			
			  if($pic!='')
			  {
			    $filename  =  $_FILES['picture']['name'];
			  }
			  else
			  {
				$filename  = $this->input->post('pictures'); 
			  }			
              $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
              if(!in_array($ext,$allowed) )
		      {
                $id                   =  $this->input->post('editid');
                $result['result']     =  $this->Commonmodel->getsingleData('advertise',$id);			  
			    $result['id']         =  $id;			  
			    $result['error']      =  "Only jpg, gif, and png files are allowed.";
                $result['msg']        =  "";	
			    $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		        $this->load->view('editadvertise',$result);
			    $add =""; 
			  }
			  else
			  {
			      $pic = $_FILES['picture']['tmp_name'];                  
				  if($pic!='')
			      {
			        $file   =  $_FILES['picture']['tmp_name'];
			        $data   =  getimagesize($file);
                    $width  =  $data[0];
                    $height =  $data[1];  
				  }				 

				if("Top"==$this->input->post('img_position')) 
                {
					if($pic=='')
			        {			         
                      $width  =  800;
                      $height =  450;  
				    }	
					
				    if("800" >$width || "450" >$height)
				    { 
                      
					  $id                   =  $this->input->post('editid');
                      $result['result']     =  $this->Commonmodel->getsingleData('advertise',$id);			  
			          $result['id']         =  $id;			 
					  $result['error']  = "image size must be 800 x 450 pixels.";                     
                      $add              = "";
					  $result['msg']        =  "";
				      $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					  $this->load->view('editadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }
				 }  
				 else if("Bottom"==$this->input->post('img_position'))
				 {
				    if($pic=='')
			        {			         
                      $width  =  800;
                      $height =  450;  
				    }	
					
					if("800" >$width || "450" >$height)
				    { 
                      
					  $id                  = $this->input->post('editid');
                      $result['result']    = $this->Commonmodel->getsingleData('advertise',$id);			  
			          $result['id']        = $id;
					  $result['error']     = "image size must be 800 x 450 pixels.";                     
                      $add                 = "";
					  $result['msg']       = "";
				      $result['menu']      = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					  $this->load->view('editadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }					
				 } 
                 else
				 {
				    if($pic=='')
			        {			         
                      $width  =  1200;
                      $height =  261;  
				    }
					if("1200" >$width || "261" >$height)
				    { 
                       $id                 =  $this->input->post('editid');
                       $result['result']   =  $this->Commonmodel->getsingleData('advertise',$id);			  
			           $result['id']       =  $id;			 
					   $result['error']    =  "image size must be 1200 x 261 pixels.";                     
                       $add                =  "";
					   $result['msg']      =  "";
				       $result['menu']     =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					   $this->load->view('editadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }
				 }	
				//$add = "Add";	
			  }
		  } 
		  else
		  {					  
		       $allowed   =  array('gif','png' ,'jpg');
               $filename  =  $_FILES['picture']['name'];
               $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
               if(!in_array($ext,$allowed) )
		       {             
				  $result['error']      =  "Only jpg, gif, and png files are allowed.";                 
		          $result['msg']        =  "";
				  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
				  $this->load->view('newadvertise',$result);
			      $add  =  ""; 
			   }
			   else
			   {
                  $file = $_FILES['picture']['tmp_name'];                  
				  $data   =  getimagesize($file);
                  $width  =  $data[0];
                  $height =  $data[1];                 

				  if("Top"==$this->input->post('img_position')) 
                  {
				    if("800" >$width || "450" >$height)
				    { 
                      $result['error']  = "image size must be 800 x 450 pixels.";                     
                      $add              = "";
					  $result['msg']        =  "";
				      $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					  $this->load->view('newadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }
				  }  
				  else if("Bottom"==$this->input->post('img_position'))
				  {
				    if("800" >$width || "450" >$height)
				    { 
                      $result['error']  = "image size must be 800 x 450 pixels.";                     
                      $add              = "";
					  $result['msg']        =  "";
				      $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					  $this->load->view('newadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }					
				  } 
                  else
				  {
				    if("1200" >$width || "261" >$height)
				    { 
                       $result['error']  = "image size must be 1200 x 261 pixels.";                     
                       $add              = "";
					   $result['msg']        =  "";
				       $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
					   $this->load->view('newadvertise',$result);
				    }
				    else
				    {
					   $add = "Add";  
				    }
				  }				   
			  }
		   }
		  
		if("Add" == $add)
		{  
		    if(!empty($_FILES['picture']['name']))
			{               
				$config['upload_path']   = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['picture']['name'];		
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture'))
				{
                    $uploadData = $this->upload->data();
                    $picture    = $uploadData['file_name'];					
                }
				else
				{
                    $picture = '';
                }
            }
			else
			{
                $picture = $this->input->post('pictures');
            }    
          			
		    
			 $customer_name  =  $this->input->post('customer_name');
			 $mobile_no      =  $this->input->post('mobile_no');
			 $email_id       =  $this->input->post('email_id');			
			 $on_date        =  $this->input->post('on_date');   
             $till_date      =  $this->input->post('till_date');
	         $on_time        =  $this->input->post('on_time');
			 $upto_time      =  $this->input->post('upto_time');			
	   	     $img_position   =  $this->input->post('img_position');
	   	     $picture        =  $picture;
			 $username       =  $sessarr['username'];
			 $start_date = $on_date.' '.$on_time;
			 $stop_date  = $till_date.' '.$upto_time;
			 
			 if(strlen($mobile_no)==10)
	         {
	            $data['phoneerror']=""; 
	         }
	         else
	         {	             
			     $data['phoneerror']="Mobile length is 10 digit compulsory";
	         }	
			 
			 
			 
			 
						
		     $post = array(			              
                          'customer_name' =>  $customer_name,
						  'mobile_no'     =>  $mobile_no,
						  'email_id'      =>  $email_id,						   
						  'on_date'       =>  date('Y-m-d',strtotime($on_date)),   
			              'till_date'     =>  date('Y-m-d',strtotime($till_date)),   
			              'on_time'       =>  date('h:i: A', strtotime($on_time)),
				          'upto_time'     =>  date('h:i: A', strtotime($upto_time)),
			              'img_position'  =>  $img_position,   
				          'image'         =>  $picture,
						  'username'      =>  $username,
						  'start_date'    =>  date('Y-m-d h:i a',strtotime($start_date)),
						  'stop_date'     =>  date('Y-m-d h:i a',strtotime($stop_date))	
			          ); 
           $result['error']      =  "";		
		   if($this->input->post('editid')!='')
		   {
			  
			  $id                   =  $this->input->post('editid');
			  
			  if($data['phoneerror']=='')
			  {
			    $insertUserData       =  $this->Commonmodel->UpdateData('advertise',$post,$id);
                $result['msg']        =  'Advertise data have been update successfully.'; 
			    $result['error']      =  "";
			  }
			  else
			  {
				$result['error']      =  'Mobile length is 10 digit compulsory';
			    $result['msg']        =  "";
			  }
			  
			  $result['result']     =  $this->Commonmodel->getsingleData('advertise',$id);
			  $sessarr              =  $this->session->userdata('sessdata'); 
	          $result['sessarrs']   =  $sessarr['status']; 
	          $result['sessarrs1']  =  $sessarr;
			  $result['id']         =  $id;
			  //$result['msg']        =  'Advertise data have been update successfully.'; 			 
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			  $this->load->view('editadvertise',$result);
			  
			  
			  
		   }
           else
		   {			  
              
			  if($data['phoneerror']=='')
			  {
			    $insertUserData       =  $this->Commonmodel->InsertData('advertise',$post);
                $result['msg']        =  'Advertise data have been Add successfully.';
				$result['error']      =  "";
			  }
			  else
			  {
				$result['error']      =  'Mobile length is 10 digit compulsory';
			    $result['msg']        =  "";
			  }		  
			  
			  //$insertUserData       =  $this->Commonmodel->InsertData('advertise',$post);
			  $sessarr              =  $this->session->userdata('sessdata'); 
	          $result['sessarrs']   =  $sessarr['status']; 
	          $result['sessarrs1']  =  $sessarr;	 
	          //$result['msg']        =  'Advertise data have been Add successfully.';			  
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			  $this->load->view('newadvertise',$result);			 
		   }
		 
		 } 

        }

		 
	   } 
	  }
	  else
	  {		 
		      redirect('admin/login');
	  } 	  
	}

    
	
	public function view_advertise()
    {
        $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {
		   $id='';
		   $data['results']      =  $this->Commonmodel->getsingleData('advertise',$id);
		   $result['sessarrs']   =  $sessarr['status'];
           $result['sessarrs1']  =  $sessarr;
		   $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		   $data['msg'] = "";
		   $this->load->view('header',$result);
	       $this->load->view('advertise',$data); 
        }
        else
	    {
          redirect('admin/login');	
        }	  
    }
	
	
	
	public function editadvertise()
    {	
	    $id      = $this->uri->segment(3);
		$sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']==1||2||3)
	    {		  
		  $data['msg']       = "";
		  $data['error']     = "";
		  $data['result']    =  $this->Commonmodel->getsingleData('advertise',$id);		 
		  $data['sessarrs']  =  $sessarr['status']; 
		  $data['sessarrs1'] =  $sessarr;
		  $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		  $this->load->view('editadvertise',$data); 
        }
	    else
	    {
		   redirect('admin/login');
	    }	  
    }
	
	
	public function deleteadvertise()
    { 
       $ids                 =  '';
	   $id                  =  $this->uri->segment(3);
	   $sessarr             =  $this->session->userdata('sessdata');  
       $data['result']      =  $this->Commonmodel->deleteRecord('advertise',$id);
	   $data['results']     =  $this->Commonmodel->getsingleData('advertise',$ids);
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $result['sessarrs']  =  $sessarr['status']; 
	   $result['sessarrs1'] =  $sessarr;	 
	   $data['msg']         = "Record Deleted Successfully";
	   $this->load->view('header',$result);
	   $this->load->view('advertise',$data); 
    }


//-----------------------------------------------------------------------------------------------------
	
	public function Profile()
    {  
       $sessarr            =  $this->session->userdata('sessdata');
       $data['sessarrs']   =  $sessarr['status']; 
	   $data['sessarrs1']  =  $sessarr;
	   $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$data); 
	   $this->load->view('profile',$data);   
    }
	
	
	public function ReportArticleImage()
    {
	   $sessarr            =  $this->session->userdata('sessdata');
       $data['sessarrs']   =  $sessarr['status']; 
	   $data['sessarrs1']  =  $sessarr;	   
	   $result['results']  =  $this->Commonmodel->getReportData('post_news','Post');
	   $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$data); 
	   $this->load->view('Report',$result); 
	}

	
	public function ReportArticleVideo()
    {
	   $sessarr            =  $this->session->userdata('sessdata');
       $data['sessarrs']   =  $sessarr['status']; 
	   $data['sessarrs1']  =  $sessarr;	   
	   $result['results']  =  $this->Commonmodel->getReportData('post_news','Video');
	   $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$data); 
	   $this->load->view('Report',$result); 
	}
	
	
	
	public function ReportAdvertise()
    {
	   $id = "";
	   $sessarr            =  $this->session->userdata('sessdata');
       $data['sessarrs']   =  $sessarr['status']; 
	   $data['sessarrs1']  =  $sessarr;	   
	   $result['results']  =  $this->Commonmodel->getsingleData('advertise',$id);
	   $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$data); 
	   $this->load->view('ReporterAdvertise',$result); 
	} 
	
	
	
	function convert_to_tinymce_data()
	{
        $rss = new DOMDocument();	
		           //$news_content = "https://timesofindia.indiatimes.com/rssfeeds/2886704.cms";	

        $news_content ="https://www.news18.com/rss/india.xml";
		
		         //$news_content ="https://timesofindia.indiatimes.com/rssfeeds/2886704.cms";
        
                   //$news_content ="https://www.dnaindia.com/feeds/india.xml";
		
		//$news_content ="https://www.indiatoday.in/rss/1206578";
        
                //$news_content ="https://www.indiatoday.in/rss/1206550";
		 
		        //$news_content ="https://www.oneindia.com/rss/news-india-fb.xml";
		
        $rss->load($news_content);
		$feed = array();
	
	    foreach ($rss->getElementsByTagName('item') as $node)
		{
		     $description = $node->getElementsByTagName('description');
			 $linkthumb="";
			 
		     try 
		     {
			    $test = $description->item(0)->nodeValue;
			    $description = preg_filter('/<a.(.*?)>(.*?)<\/a>/', "",$test);//get Desc
			    $linkthumb= preg_match('/src\s*=\s*"([^"]+)"/',$test,$match);//get image src				
			    if(!empty($match))
			    {
				    $linkthumb=$match[1];
			    }	
		     }
		     catch (Exception $e)
		     {
			   
		     }		
		     $nodes = $node->getElementsByTagName('content');		
             //print_r($nodes);

			 
		     if(!is_object($nodes) || $nodes === null || $nodes->length==0)
			 {		 	
			 	$linkthumbNode = $node->getElementsByTagName('image');	
               
				
			 	if(isset($linkthumbNode) && $linkthumbNode->length >0)
				{                        
  					    $linkthumb=$linkthumbNode->item(0)->nodeValue;
			 			if(empty($linkthumb)||$linkthumb == " "){				 			
				 			
				 		  $linkthumb = $linkthumbNode->item(0)->getAttribute('img');
						  	
				 		}
						else
						{
						  $linkthumb = $linkthumbNode->item(0)->getAttribute('url');	
						}
						//$linkthumb;
				 		
				}
				else
				{				 		  
					    //$linkthumb = $linkthumbNode->item(0)->getAttribute('url');	  
				}

		    }
			else
			{
			   $linkthumb = $nodes->item(0)->getAttribute('url');
		    }
		
    	    $title  = $node->getElementsByTagName('title')->item(0)->nodeValue;			
			$title1 = $node->getElementsByTagName('description')->item(0)->nodeValue;
			
			//$guid = $node->getElementsByTagName('guid')->item(0)->nodeValue;
			
    	    $desc   = $description;
    	    $link   = $node->getElementsByTagName('link')->item(0)->nodeValue;             	
			$img    = $linkthumb;	
    	    $date   = $node->getElementsByTagName('pubDate');
    	    if(isset($date) && $date->length >0)
			{
    	 	    $date = $date->item(0)->nodeValue;
    	    }
			else
			{
			    $date = "no date provided";
    	    } 
			
			//echo $title1."<br>";	
			
			$item = array 
		     ( 
			   'title' => $title,
			   'desc'  => $title1,
			   'link'  => $link,
			   'img'   => $img,
			   'date'  => $date,
			 );
		   array_push($feed, $item);
	    }	
		
		
		for($i=0;$i<count($feed);$i++)
		{	
           //print_r($feed[$i]['desc'])."<br>";
		   
		    $a[] =(explode(" ",$feed[$i]['desc']));
		    echo $b = $a[0][1]."<br>";
        }		
			
		foreach($feed as $val)
        {          
		    $newDate = date("d-m-Y", strtotime($val['date']));
		    $date=date("d-m-Y");
		    if($date == $newDate)
		   {
		    $arrayrss = array 
		     ( 
			   'title' => $val['title'],
			   'desc'  => $val['desc'],
			   'link'  => $val['link'],
			   'img'   => $val['img'],
			   'date'  => $newDate
			 );
		    //$insertUserData       =  $this->Commonmodel->InsertData('rssfeeds',$arrayrss);
		  }
		  //echo '<table border="1px solid black"><tr><td>'.$val['title'].'</td><td>'.$val['desc'].'</td><td>'.$val['link'].'</td><td>'.$val['img'].'</td><td>'.$val['date'].'</td></tr></table>';
		}		
	}
 }
 