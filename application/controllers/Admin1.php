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
	  $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
      $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
	  
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
		$postty="";
		$data['result']   =  $this->Commonmodel->getsingleData('post_news',$id);
		$data['results']  =  $this->Commonmodel->getData('subcategory',15,'id');
		$data['result1']  =  $this->Commonmodel->getsingleData('category',$postty);
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
		  $data['emailid']     = "";
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
		  $data['emailid']     = "";
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
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
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
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('header',$result);
	   $this->load->view('viewReporter',$data);
	   //redirect('admin/ViewReporter');
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
	   //redirect('admin/viewSubAdmin');
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
	   $data['emailid']     = ""; 	
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   if($this->input->post('types')=="sub_admin")
	   {	  
	      $allowed   =  array('gif','png' ,'jpg');
          $filename  =  $_FILES['picture']['name'];
          $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
          if(!in_array($ext,$allowed))
	      {
             $data['error']     = "Only jpg, gif, and png files are allowed.";
            // $data['msg']       = "";			
		     $this->load->view('header',$result);
		     $this->load->view('Registration',$data);
		     $add =""; 
	      }
	      else
	      {
		    $add = "Add";	
	      }	
	   }
       else
	   {
          $allowed    =  array('gif','png' ,'jpg');
          $filename   =  $_FILES['picture']['name'];
		  $filename1  =  $_FILES['address_proof']['name'];
		  $ext        =  pathinfo($filename, PATHINFO_EXTENSION);
		  $ext1       =  pathinfo($filename1, PATHINFO_EXTENSION);
          if(!in_array($ext,$allowed) || !in_array($ext1,$allowed))
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
                 $picture = '';
         } 
		 
		 
		 if(!empty($_FILES['address_proof']['name']))
		 {
             $config['upload_path']   = 'uploads/images/';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['address_proof']['name'];
               
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
             $address_proof = '';
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
          

		  if($types=='sub_admin')
	       {	
              $status=2;			 
		   }
           if($types=='reporter')
		   {
             $status=3;			  
		   }			
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
		  

		  
		  if($Username!="" || $Password!="" || $Email="" ) 
		  {			
			$logins      =  array('username'=>ucfirst($Username)); 
			$result1     =  $this->Commonmodel->CheckLogin('users',$logins);			
			$logins2     =  array('password'=>$Password); 
			$result2     =  $this->Commonmodel->CheckLogin('users',$logins2);			
			$logins3     =  array('email'=>$Email); 
			$result3     =  $this->Commonmodel->CheckLogin('users',$logins3);			
							
			if(count($result1)!=0 || count($result2)!=0 || count($result3)!=0)
			{			   
               
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
			   $data['error']  =  "";
			   
               if($types=='sub_admin')
		       {
		          $this->load->view('header',$result);
			      $this->load->view('Registration',$data); 			   
		       }
		       else
		       {
			      $this->load->view('header',$result);
			      $this->load->view('Reporter',$data);    
		       }
			   
			} 
			else
			{
			   
			   $insertUserData =  $this->Commonmodel->InsertData('users',$post);              
			   if($insertUserData!="")
			   {
				  $data['msg']    = "Registration successfully.";
                  $data['error']  =  "";
			   }
			   else
			   {                  
				  $data['msg']   = "Some problems occured, please try again.";
                  $data['error'] =  ""; 
			   } 
			  
			  
               if($types=='sub_admin')
		       {
		         $this->load->view('header',$result);
			     $this->load->view('Registration',$data); 			   
		       }
		       else
		       {
			     $this->load->view('header',$result);
			     $this->load->view('Reporter',$data);    
		       }
			   
		   }			
	    }	
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
		$data['Video']           = $this->Commonmodel->data_count('Video',$id);
		$data['Posts']           = $this->Commonmodel->data_count('Post',$id);        
		$data['PostPublish']     = $this->Commonmodel->data_counts('Post',1);
		$data['PostunPublish']   = $this->Commonmodel->data_counts('Post',0);		
		$data['VideoPublish']    = $this->Commonmodel->data_counts('Video',1);
		$data['VideounPublish']  = $this->Commonmodel->data_counts('Video',0);		
		$result['menu']          = $this->Commonmodel->getAllMenu('menu',$sessarr['id']);		
		$this->load->view('header',$result);
		$this->load->view('dashboard',$data);   
    }	
	
		
	public function viewPost()
    {  
       $limit='';
	   $sessarr              = $this->session->userdata('sessdata');	   
	   //$data['results']    = $this->Commonmodel->getAllRecord('post_news','Post',$limit,$sessarr['id'],$sessarr['status']);
	   $data['results']      = $this->Commonmodel->getViewData('Post');
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
	   $data['results']       =  $this->Commonmodel->getViewData('Post');
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
            if(!in_array($ext,$allowed) )
		    {
              $data['error'] = "Only jpg, gif, and png files are allowed.";
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
			 if($this->input->post('Types')=="own")
			 {
			   $allowed  =  array('mp4');
			   //$filename =  $_FILES['picture']['name'];
               if($_FILES['picture']['name']!="")
			   {
			     $filename  =  $_FILES['picture']['name'];
			   }
			   else
			   {
				 $filename  = $this->input->post('pictures');				
			   }
			   
			   $ext      =  pathinfo($filename, PATHINFO_EXTENSION);               
			   if(!in_array($ext,$allowed) )
		       {
                 $data['error'] = "Only mp4 files are allowed.";
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
			 else{
				 $add = "Add";
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
		    $username      =  $sessarr['username'];
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
			
          $sessarr = $this->session->userdata('sessdata');
		  $postty="";			   		   
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
			   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']); 
			   if($insertUserData!='')
			   {
			     $data['id']   = $this->input->post('editid');
			     $data['msg']  = 'Video data have been update successfully.';	
	             $data['error'] = "";
			   }
			   else
			   {
				 $data['id']    = $this->input->post('editid');
				 $data['error'] = "error";
				 $data['msg']   ="";
			   }
			   
				$this->load->view('header',$result);
		        $this->load->view('editVideo',$data);
			 }
             else
             { 
		       $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			   if($insertUserData!='')
			   {
			     $data['id']    = $this->input->post('editid');
			     $data['msg']   = 'Post data have been update successfully.';
	             $data['error'] = "";
			   }
			   else
			   {
				 $data['id']    = $this->input->post('editid');
				 $data['msg']   ="";
				 $data['error'] = "error";	 
			   }
			   
			   $this->load->view('header',$result);
		       $this->load->view('editPost',$data);
			   
		     }
          }
          else
		  {			  
            if($Title!="")
		    {
		       $insertUserData =  $this->Commonmodel->InsertData('post_news',$post);
		    }
		    else
		    {
			   $insertUserData ="";  
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
	       foreach($data['result'] as $val)
	       {	     
		     $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		     for($i=0;$i<count($data1['results']);$i++)
		     {			
			    $b[] = $data1['results'][$i];			
		     }		
	       }		   
	       $data['result2']=$b;		   
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
		 $data['results']      =  $this->Commonmodel->getViewData('Video');		 
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
		$data['results']      =  $this->Commonmodel->getViewData('Video');		 
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
		 $data['results']      =  $this->Commonmodel->getViewData('Video');		 
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
	     $data['results']      = $this->Commonmodel->getViewData('Post');
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
			   $ids = "edit";
			   $id  = $this->input->post('editid');			   
			   $data['results']       =  $this->Commonmodel->getuserssubadmin($ids);
			   $insertUserData =  $this->Commonmodel->UpdateData('menu',$Menu,$id);
			   $data['msg']    = 'Menu Allocation data have been update successfully.';	
			   $this->load->view('header',$result);
	           $this->load->view('menuAllocation',$data);
		    }
			else
			{
			   $ids = "add";
			   $insertUserData =  $this->Commonmodel->InsertData('menu',$Menu);
			   $data['results']       =  $this->Commonmodel->getuserssubadmin($ids);
			   $data['msg']    = 'Menu Allocation data have been added successfully.';	
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
		$data['checked']      =  $this->Commonmodel->checkcategory('category',ucfirst($category));
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
		
		if(ucfirst($category) == $cat)
		{
			$data['error']  =  "Category is already exist";
			$data['msg']    =  "";			
			$this->load->view('header',$result);
	        $this->load->view('newCategory',$data); 
		}
		else
		{		
		   $categorys  = array('category' => ucfirst($category));		
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
	   $result['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	   $this->load->view('newadvertise',$result); 
	}

	
	
	function saveAdvertise()
	{		
	  $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']==1||2||3)
	  {		
        if($this->input->post('userSubmit'))
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
			  $sessarr              =  $this->session->userdata('sessdata'); 
	          $result['sessarrs']   =  $sessarr['status']; 
	          $result['sessarrs1']  =  $sessarr;
			  $result['id']         =  $id;			  
			  $result['error']      =  "Only jpg, gif, and png files are allowed.";
              $result['msg']        =  "";	
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
		      $this->load->view('editadvertise',$result);
			  $add =""; 
			}
			else
			{
			  $add = "Add";	
			}
		  } 
		  else
		  {					  
		       $allowed   =  array('gif','png' ,'jpg');
               $filename  =  $_FILES['picture']['name'];
               $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
               if(!in_array($ext,$allowed) )
		       {
                  $sessarr              =  $this->session->userdata('sessdata'); 
	              $result['sessarrs']   =  $sessarr['status']; 
	              $result['sessarrs1']  =  $sessarr;
				  $result['error']      =  "Only jpg, gif, and png files are allowed.";                 
		          $result['msg']        =  "";
				  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
				  $this->load->view('newadvertise',$result);
			      $add                  =  ""; 
			   }
			   else
			   {
			       $add = "Add";	
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
			 //echo date('Y-m-d h:i a',strtotime($start_date));
			 
			 
			 
		     $post = array(			              
                          'customer_name' =>  $customer_name,
						  'mobile_no'     =>  $mobile_no,
						  'email_id'      =>  $email_id,						   
						  'on_date'       =>  date('Y-m-d',strtotime($on_date)),   
			              'till_date'     =>  date('Y-m-d',strtotime($till_date)),   
			              'on_time'       =>  $on_time,
				          'upto_time'     =>  $upto_time,
			              'img_position'  =>  $img_position,
				          'image'         =>  $picture,
						  'username'      =>  $username,						  
						  'start_date'    =>  date('Y-m-d h:i a',strtotime($start_date)),
						  'stop_date'     =>  date('Y-m-d h:i a',strtotime($stop_date))						  
			          );


            //SELECT DATE_FORMAT(NOW(), "%Y-%m-%d %r") FROM advertise WHERE start_date<=DATE_FORMAT(NOW(),"%Y-%m-%d %h:%i:%s") and stop_date>=DATE_FORMAT(NOW(),"%Y-%m-%d %h:%i:%s")

					  
            $result['error']      =  "";		
		    if($this->input->post('editid')!='')
		    {
              $id                   =  $this->input->post('editid'); 
			  $insertUserData       =  $this->Commonmodel->UpdateData('advertise',$post,$id);
              $result['result']     =  $this->Commonmodel->getsingleData('advertise',$id);
			  $sessarr              =  $this->session->userdata('sessdata'); 
	          $result['sessarrs']   =  $sessarr['status']; 
	          $result['sessarrs1']  =  $sessarr;
			  $result['id']         =  $id;
			  $result['msg']        =  'Advertise data have been update successfully.'; 			 
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			  $this->load->view('editadvertise',$result);
		    }
            else
		    {			  
              $insertUserData       =  $this->Commonmodel->InsertData('advertise',$post);
			  $sessarr              =  $this->session->userdata('sessdata'); 
	          $result['sessarrs']   =  $sessarr['status']; 
	          $result['sessarrs1']  =  $sessarr;	 
	          $result['msg']        =  'Advertise data have been Add successfully.';			  
			  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
			  $this->load->view('newadvertise',$result);			 
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
		  $data['menu']      =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
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
	   $this->load->view('header',$data); 
	   $this->load->view('Report',$result); 
	}

	
	public function ReportArticleVideo()
    {
	   $sessarr            =  $this->session->userdata('sessdata');
       $data['sessarrs']   =  $sessarr['status']; 
	   $data['sessarrs1']  =  $sessarr;	   
	   $result['results']  =  $this->Commonmodel->getReportData('post_news','Video');
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
	   $this->load->view('header',$data); 
	   $this->load->view('ReporterAdvertise',$result); 
	} 
	
	
 }
 