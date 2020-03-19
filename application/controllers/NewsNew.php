<?php
if (!defined('BASEPATH')) 
{
    exit('No direct script access allowed');
}

class News extends CI_Controller
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
	  $data['Latest']            =  $this->Commonmodel->getDatas('post_news',0,5,'id');
	  
	  $data['Hot']               =  $this->Commonmodel->getDatas('post_news',6,12,'id');  
	  $data['Sport']             =  $this->Commonmodel->getWhereDatas('post_news',3,'Sports',$postty);	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatas('post_news',3,'Politics',$postty);      
	  $data['Business']          =  $this->Commonmodel->getWhereDatas('post_news',3,'Business',$postty);	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatas('post_news',3,'Entertainment',$postty); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatas('post_news',3,'Law',$postty);	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatas('post_news',3,'Lifestyle',$postty);
	  $data['Technology']        =  $this->Commonmodel->getWhereDatas('post_news',3,'Technology',$postty);
	  $data['Other']             =  $this->Commonmodel->getWhereDatas('post_news',3,'Other',$postty);	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatas('post_news',3,'Education',$postty);      
	  
	  $data['Crime']             =  $this->Commonmodel->getWhereDatas('post_news',3,'Crime',$postty);
	  
	  $data['Video']             =  $this->Commonmodel->getAllRecord('post_news','Video',4,$a,$c);
	  
      $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
      $data['advertiseCenter']   =  $this->Commonmodel->getAdvertiseData("advertise","Center");
	  $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
      $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");
	  $data['rssfeed']           =  $this->Commonmodel->getRssDatas('rssfeeds',$postty);
	  
	  $data['path']              =   '../uploads/images/';
	  
	  
	  $data['metaKeyword']       =  "Latest News on Politics, Education, Science & Technology, Current affairs, Health & Lifestyle, Weather, Sports, Crime,Business, Videos,North East News";
	  $data['metaTitle']         =  "Northeast Region News- Assam News, Arunachal News, Manipur News, Meghalaya News, Mizoram News, Nagaland News, Tripura News, Sikkim News ";
	  
	  $this->load->view('news-state',$data);
      //header("Content-Type: text/xml;charset=iso-8859-1");
	  //$this->load->view('sitemap');  	  
    }
		
	
	public function LatestNews($id)
    {        
		$postty="";
		
		$data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);
		
		$data['results']          =  $this->Commonmodel->getDatas('post_news',0,8,'id');
        //$data['results']        =  $this->Commonmodel->getWhereData('post_news',10,$id,$postty);	
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
		
		
		$data['metaKeyword']       =  "";
		$data['metaTitle']         =  "";
		
		$this->load->view('singleNews-state',$data);   
    }	
    
	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);
		$data['results']          =  $this->Commonmodel->getData('subcategory',15,'id');
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
        
		$data['metaKeyword']       =  "";
		$data['metaTitle']         =  "";
		
		$this->load->view('singleNews-state',$data);   
    }	
	
	
	/*public function login()
    { 
		$data['msg']="";
		$data['msg1']="";
		$this->load->view('login',$data);   
    }	

    public function loginverify()
    { 
	    $Username = $this->input->post('Username');   
        $Password = $this->input->post('Password');		
	    $login  =  array('username'=>$Username);  
	    $result1 =  $this->Commonmodel->CheckLogin('users',$login);
		$logins  =  array('password'=>$Password);  
		$result2 =  $this->Commonmodel->CheckLogin('users',$logins);
		
		if(count($result1)!=0)
		{
		  $abc = array($result1[0]['username']);
		}
		else
		{		  
		  $abc = array();
		}
		
		if(in_array($Username,$abc))	
	    {
		  $data['msg'] = ""; 			
		}
		else
		{
		  $data['msg'] = "Please enter your correct username."; 	
		}
		
		if(count($result2)!=0)
		{
		  $xyz = array($result2[0]['password']);
		}
		else
		{		  
		  $xyz = array();
		}
		
		
		if(in_array($Password,$xyz))	
	    {
		   $data['msg1'] = ""; 			   
		}
		else
		{
		  $data['msg1'] = "Please enter your correct password."; 	
		}
		
		if($data['msg1']!=''||$data['msg']!='')
		{
		  $this->load->view('login',$data);	
		}
		else
		{
            $login    = array('username'=>$Username,'password'=>$Password,'recent'=>1);
		    $result   = $this->Commonmodel->CheckLogin('users',$login); 
		    if(count($result)!=0)
			{
		      $this->session->set_userdata('sessdata',$result[0]);
		      $sessarr  = $this->session->userdata('sessdata');				
		      if($result[0]['recent']==1)
		      {			
			      redirect('admin/dashboard');	
		      }
              else
			  {
			     $data['msg'] = "";
				 $data['msg1'] = " Your account is inactive. Contact your administrator to activate it. "; 
			     $this->load->view('login',$data);
			  }	
			} 
			else
			{
				  $data['msg'] = "";
				  $data['msg1'] = "Your account is inactive. Contact your administrator to activate it. "; 
			      $this->load->view('login',$data);
			}  

		}
    }
		
    
	function logout()
	{
	    $this->session->sess_destroy();     
        redirect('admin/login');	  
    }	
	*/	
	
	
	public function Category()
    {    
      $Category = $this->uri->segment(3);
	  if(is_numeric($this->uri->segment(3)))
	  {	
           $id = $this->uri->segment(3);		  
		   $postty = "";		   
		   $data['result1']     =  $this->Commonmodel->getcategory('category',$postty); 
	       foreach($data['result1'] as $val)
	       {	     
		     $data1['results']  =  $this->Commonmodel->getsubcategoryData('subcategory',$val['id']);
		     for($i=0;$i<count($data1['results']);$i++)
		     {			
			    $b[] = $data1['results'][$i];			
		     }		
	       }	  
	       $data['result2']          =  $b;		   
		   $data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$Category,$postty);		   
		   $data['Video']            =  $this->Commonmodel->getWhereData('post_news',4,$Category,'Video');
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   
		   $data['metaKeyword']       =  "";
		   $data['metaTitle']         =  "";
		   
		   $this->load->view('singleNews-state',$data);   
       }
	   else
	   {		
		   $postty = "";		   
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']           =  $this->Commonmodel->getWhereDatas('post_news',10,$Category,$postty);
		   $data['Video']             =  $this->Commonmodel->getWhereDatas('post_news',4,$Category,'Video'); 
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		   
		   
		  if($Category=='business')
		  {	  
		      $data['metaKeyword']       =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news";
              $data['metaTitle']         =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast";   
		 
		  }
		  else if($Category=='entertainment')
		  {
             $data['metaKeyword']      =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news";
             $data['metaTitle']        =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news";   
  
		  }
		  else if($Category=='politics')
		  {
             $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news";
		     $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast";
		   
		  }
		  else if($Category=='technology')
		  {
             $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology";
		     $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news";
		  
		  }
		  else if($Category=='sports')
		  {
             $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news";
		     $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news";
		  
		  }
		  else if($Category=='law')
		  {
             $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news";
		     $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms";
		   
		  }
		  else if($Category=='crime')
		  {
              $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news";
		      $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news";
		  }
		  else if($Category=='weather')
		  {
             $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition";
		     $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates";
		  }
		  else if($Category=='education')
		  {
            $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news";
		    $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast";
		  }
		  else if($Category=='lifestyle')
		  {
            $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news";
		    $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast";
		  }
		  else if($Category=='other')
		  {
			$data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast";
		    $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates";
          }
		  else if($Category=='health')
		  {
			$data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news";
		    $data['metaTitle']       =  "Newsner: Health news, Health & Fitness news";
		  }
		  else
		  {
			$data['metaKeyword']     =  ""; 
			$data['metaTitle']       =  ""; 
		  }
		   
		   $this->load->view('CategoryNews-state',$data); 
	   } 	  
	}		
	
	

    public function Entertainment()
    { 
      if($this->uri->segment(3)!='')
	  {	
           $id = $this->uri->segment(3);
		   $postty                   =  "";		   
		   $data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereDatass('post_news',10,'Entertainment',$id);		   
		   $data['Video']            =  $this->Commonmodel->getWhereDatas('post_news',4,'Entertainment','Video');		   	   
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		  
           $data['metaKeyword']      =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news";
           $data['metaTitle']        =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news";   

		   $this->load->view('singleNews-state',$data);   
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
		   
		   $data['metaKeyword']     =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news";
           $data['metaTitle']       =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news";   

		   
		   $this->load->view('CategoryNews-state',$data); 
	  } 	
	}
	
	
	
	public function Business()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		   $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Business',$id);
           $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Business','Video'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   $data['metaKeyword']       =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news";
           $data['metaTitle']         =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast";   

		   
		   $this->load->view('singleNews-state',$data);   
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
		   
		   $data['metaKeyword']       =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news";
           $data['metaTitle']         =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast";   

		   
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}		
    
  
  
    public function Politics()
    { 	
	   if($this->uri->segment(3)!='')
	   {	
          $id = $this->uri->segment(3); 
          $postty                  = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleDatas('post_news',$id);
		 
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Politics',$id);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Politics','Video'); 	
		 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news";
		  $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast";
		  
		  $this->load->view('singleNews-state',$data); 
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
		  
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news";
		  $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast";
		  
		  
		  $this->load->view('CategoryNews-state',$data); 
	   }		
    }		
		
		
	
    public function Technology()
    { 
       //if($this->uri->segment(3)!='')
	  // {
          $id = $this->uri->segment(3); 
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Technology',$id);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology";
		  $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news";
		  
		  $this->load->view('singleNews-state',$data);  
	   //}
	  /* else
	   {	
          $postty = "";   
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Technology',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		 
		  
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology";
		  $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news";
		  
		 
		  $this->load->view('CategoryNews',$data); 
	   } */
    }					
		
		
	
    public function Sports()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";   
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Sports',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Sports','Video'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news";
		  $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news";
		  
		  $this->load->view('singleNews-state',$data);   
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
		  
		  $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news";
		  $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news";		  
		  $this->load->view('CategoryNews-state',$data); 
	   } 
    }
	
	
		
	public function Law()
    {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Law',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Law','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news";
		  $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms";
		  
		  $this->load->view('singleNews-state',$data);   
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
		  
		  $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news";
		  $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms";
		  
		  
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}


    

     public function Crime()
     {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Crime',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Crime','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news";
		  $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news";
		  
		  $this->load->view('singleNews-state',$data);   
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Crime',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Crime','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news";
		  $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news";
		  
		  
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}



    public function Weather()
    {	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = ""; 		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Weather',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Weather','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition";
		  $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates";
		  
		  $this->load->view('singleNews-state',$data);   
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Weather',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Weather','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition";
		  $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates";
		  
		  
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}

	
	
	
	public function Education()
    { 	
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Education',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Education','Video');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news";
		  $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast";
		  
		  $this->load->view('singleNews-state',$data);   
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
		  
		  $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news";
		  $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast";
		  
 
		  $this->load->view('CategoryNews-state',$data); 
	   } 	   
	}	
	
	
	
	public function Lifestyle()
    {	
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);
          $postty = "";		  
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Lifestyle',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Lifestyle','Video');	
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Health & Fitness news, Travel news of northeast, Top travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news";
		  $data['metaTitle']       =  "Newsner: Lifestyle news, Travel news, Health & Fitness news";
		  
		  $this->load->view('singleNews-state',$data);   
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
		  
		  $data['metaKeyword']     =  "Health & Fitness news, Travel news of northeast, Top travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news";
		  $data['metaTitle']       =  "Newsner: Lifestyle news, Travel news, Health & Fitness news";
		  		  
		  $this->load->view('CategoryNews-state',$data); 
	   }	   
	}	
	
	
	
	public function Other()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";
		  $data['result1']         = $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         = $this->Commonmodel->getWhereDatass('post_news',10,'Other',$id);
		  $data['Video']           = $this->Commonmodel->getWhereDatas('post_news',4,'Other','Video');	
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");
	      $data['advertiseMiddle'] = $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
          $data['advertiseBottom'] = $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		  
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates";

		  $this->load->view('singleNews-state',$data);   
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
		  
          $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates";
 		  
		   
		  $this->load->view('CategoryNews-state',$data); 
	   }   
	}		
	
	
	
	
	public function Health()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		   $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Health',$id);
           $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Health','Video'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   
		   $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news";
		   $data['metaTitle']       =  "Newsner: Health news, Health & Fitness news";
		   
		   $this->load->view('singleNews-state',$data);   
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Health',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Health','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		   
           
		   $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news";
		   $data['metaTitle']       =  "Newsner: Health news, Health & Fitness news";
		  	
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}		
	

	
	public function Video()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllVideos('post_news','Video');
	   $this->load->view('Video-state',$data);	 
    }	
	
	
	
	/*public function viewVideo()
    {
       $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
      if($sessarr['status']!=0)
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

    public function deletesVideo()
    {
      $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']!=0)
	  {			
        $id                   =  $this->uri->segment(3);
		$post                  =  array('recent' => 1); 			
        $data['results']       =  $this->Commonmodel->UpdateData('post_news',$post,$id);		
		$data['results']      =  $this->Commonmodel->getViewData('Video',$sessarr['id'],$sessarr['status']);		 
		$result['sessarrs']   =  $sessarr['status'];
        $result['sessarrs1']  =  $sessarr; 
        $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']); 
		$data['msg']          =  "Record Deleted Successfully";
		$this->load->view('header',$result);
	    $this->load->view('viewVideo',$data);		
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
       if($sessarr['status']!=0)
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
		*/	
	
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
		
	/*
	public function postPublish()
    {
       date_default_timezone_set('Asia/Kolkata');
	   $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
		*/
	
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
		
/*	
    public function RecentNews()
    {        
		$id ='';
		$limit='';
		$data['result']  =  $this->Commonmodel->getsingleData('post_news',$id);
		$data['results']  =  $this->Commonmodel->getData('post_news',8,'id');
		$data['Video']    =  $this->Commonmodel->getAllRecord('post_news','Video',$limit);
		$this->load->view('RecentNews',$data);   
    }	
	*/
	
//------------------------------------- Menu Allocation --------------------------------	

/*	
	public function menuAllocation()
    {        
	   $id="add";
	   $sessarr               =  $this->session->userdata('sessdata');	
	   if($sessarr['status']!=0)
	   {   
	      $data['results']       =  $this->Commonmodel->getuserssubadmin($id);
	      //$data['results']       =  $this->Commonmodel->UserMenuList('sub_admin');
	      $sessarr               =  $this->session->userdata('sessdata');	
	      $result['sessarrs']    =  $sessarr['status']; 
	      $result['sessarrs1']   =  $sessarr;
	      $result['menu']        =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $data['msg']           =  "";
	      $data['error']         =  "";
	      $this->load->view('header',$result);
	      $this->load->view('menuAllocation',$data);   
	  }
	  else
		{
		   redirect('admin/login');	
		}
    }	
	*/
	/*
	public function saveMenu()
    { 	        
	   $sessarr               =  $this->session->userdata('sessdata');	
	   if($sessarr['status']!=0)
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
	   else
	   {
		   redirect('admin/login');	
	   }	
	}	
	*/
	/*
	public function viewMenu()
    {
        $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']!=0)
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
	    $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']!=0)
	    {
		  $ids="edit";
		  $id=$this->uri->segment(3);
		  $sessarr = $this->session->userdata('sessdata');
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
    }*/
		
		
//------------------------------------------- Categorys Allocation -----------------------
	
/*	public function NewCategory()
    {        
	   
	   $sessarr               =  $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
	    else
	    {
		   redirect('admin/login');
	    }	    
    }
		
	
	public function saveCategory()
    { 
       $sessarr               =  $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
		
		  if(ucwords($category) == ucwords($cat))
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
	   else
	   {
		   redirect('admin/login');
	   }	
	}	*/
	
	
//------------------------------------- Sub Categorys Allocation ---------------------------

/*
	public function NewSubCategory()
    {        
	   
	    $sessarr               =  $this->session->userdata('sessdata');	   
        if($sessarr['status']!=0)
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
	   else
	   {
		   redirect('admin/login');
	   }	     
    }
	

	
	public function saveSubCategory()
    { 	        
	   $sessarr              =  $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
		
		  if(ucfirst($subcategory) == ucfirst($subcat))
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
	   else
	   {
		   redirect('admin/login');
	   }	

	}*/

//-----------------------------------------------Advertise---------------------------------------
	/*
	public function advertise()
    {
	   $sessarr             =  $this->session->userdata('sessdata'); 
	   if($sessarr['status']!=0)
	   {
          $sessarr             =  $this->session->userdata('sessdata'); 
	      $result['sessarrs']  =  $sessarr['status']; 
	      $result['sessarrs1'] =  $sessarr;	 
	      $result['msg']       =  "";
	      $result['error']     =  "";
	      $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('newadvertise',$result); 
	   }
	   else
	   {
		   redirect('admin/login');
	   }	
	}

	
	
	function saveAdvertise()
	{		
	  $sessarr = $this->session->userdata('sessdata');
      $sessarr              =  $this->session->userdata('sessdata'); 
	  $result['sessarrs']   =  $sessarr['status']; 
	  $result['sessarrs1']  =  $sessarr;
	  
	  if($sessarr['status']!=0)
	  {		
        if($this->input->post('userSubmit'))
		{ 
		 date_default_timezone_set('Asia/Calcutta');		
		 $contractDateBegin = date('Y-m-d', strtotime($this->input->post('on_date')));
         $contractDateEnd = date('Y-m-d', strtotime($this->input->post('till_date')));
		 
		  if( $contractDateEnd < $contractDateBegin)
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
		      $allowed  =  array('gif','png' ,'jpg','jpeg');
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
			    $result['error']      =  "Only jpg, jpeg, gif and png files are allowed.";
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
			         $file  =  $_FILES['picture']['tmp_name'];
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
                      $width  =  1740;
                      $height =  261;  
				    }
					if("1740" >$width || "261" >$height)
				    { 
                       $id                 =  $this->input->post('editid');
                       $result['result']   =  $this->Commonmodel->getsingleData('advertise',$id);			  
			           $result['id']       =  $id;			 
					   $result['error']    =  "image size must be 1740 x 261 pixels.";                     
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
		       $allowed   =  array('gif','png' ,'jpg','jpeg');
               $filename  =  $_FILES['picture']['name'];
               $ext       =  pathinfo($filename, PATHINFO_EXTENSION);
               if(!in_array($ext,$allowed) )
		       {
				  $result['error']      =  "Only jpg,jpeg, gif and png files are allowed.";                 
		          $result['msg']        =  "";
				  $result['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
				  $this->load->view('newadvertise',$result);
			      $add  =  ""; 
			   }
			   else
			   {
			      $pic = $_FILES['picture']['tmp_name'];                  
				  if($pic!='')
			      {
			         $file = $_FILES['picture']['tmp_name'];                  
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
				     if($pic=='')
			         {			         
                       $width  =  800;
                       $height =  450;  
				     }	
				     
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
				     if($pic=='')
			         {			         
                       $width  =  800;
                       $height =  450;  
				     }	
				    
				     if("1740" >$width || "261" >$height)
				     { 
                       $result['error']  = "image size must be 1740 x 261 pixels.";                     
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
			      // $add = "Add";	
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
			date_default_timezone_set('Asia/Calcutta');			
		    $post = array(			              
                          'customer_name' =>  $customer_name,
						  'mobile_no'     =>  $mobile_no,
						  'email_id'      =>  $email_id,						   
						  'on_date'       =>  date('Y-m-d',strtotime($on_date)),   
			              'till_date'     =>  date('Y-m-d',strtotime($till_date)),   
			              'on_time'       =>  date('h:i a', strtotime($on_time)),
				          'upto_time'     =>  date('h:i a', strtotime($upto_time)),
			              'img_position'  =>  $img_position,   
				          'image'         =>  $picture,
						  'username'      =>  $username,
						  'start_date'    =>  date('Y-m-d h:i a',strtotime($start_date)),
						  'stop_date'     =>  date('Y-m-d h:i a',strtotime($stop_date)),
						  'created_at'    =>  date('Y-m-d h:i a')
			          ); 
           $result['error']      =  "";		
		   if($this->input->post('editid')!='')
		   {
              $id                   =  $this->input->post('editid'); 
			  //$insertUserData       =  $this->Commonmodel->UpdateData('advertise',$post,$id);
			  
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
	         // $result['msg']        =  'Advertise data have been Add successfully.';			  
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
*/
  /*  
	
	public function view_advertise()
    {
        $sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']!=0)
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
		$sessarr = $this->session->userdata('sessdata');
        if($sessarr['status']!=0)
	    {		  
		   $id      = $this->uri->segment(3);
		   $sessarr = $this->session->userdata('sessdata');
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
      $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']!=0)
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
	    else
	    {
		   redirect('admin/login');
	    }	  
    }
    */


//-----------------------------------------------------------------------------------------------------
	
/*
	public function Profile()
    {  
      $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']!=0)
	  {	
           $sessarr            =  $this->session->userdata('sessdata');
           $data['sessarrs']   =  $sessarr['status']; 
	       $data['sessarrs1']  =  $sessarr;
	       $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	       $this->load->view('header',$data); 
	      $this->load->view('profile',$data);  
       }
	   else
	   {
		   redirect('admin/login');
	   }	
    }
	
	
	public function ReportArticleImage()
    {
	  $sessarr = $this->session->userdata('sessdata');
      if($sessarr['status']!=0)
	  {	
	      $sessarr            =  $this->session->userdata('sessdata');
          $data['sessarrs']   =  $sessarr['status']; 
	      $data['sessarrs1']  =  $sessarr;	   
	      $result['results']  =  $this->Commonmodel->getReportData('post_news','Post');
	      $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$data); 
	      $this->load->view('Report',$result); 
	   }
	   else
	   {
		   redirect('admin/login');
	   }	
	}

	
	public function ReportArticleVideo()
    {
	   $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
	   {	
	      $sessarr            =  $this->session->userdata('sessdata');
          $data['sessarrs']   =  $sessarr['status']; 
	      $data['sessarrs1']  =  $sessarr;	   
	      $result['results']  =  $this->Commonmodel->getReportData('post_news','Video');
	      $data['menu']       =  $this->Commonmodel->getAllMenu('menu',$sessarr['id']);
	      $this->load->view('header',$data); 
	      $this->load->view('Report',$result); 
	   }
	   else
	   {
		   redirect('admin/login');
	   }	   
	}
	
	
	
	public function ReportAdvertise()
    {
	   $sessarr = $this->session->userdata('sessdata');
       if($sessarr['status']!=0)
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
	   else
	   {
		   redirect('admin/login');
	   }	    
	} 
	*/
	
	
	/*function convert_to_tinymce_data()
	{
        $rss = new DOMDocument();
		//$news_content ="https://gadgets.ndtv.com/rss/news";
		$news_content ="https://www.indiatoday.in/rss/1206578";
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
			   $linkthumb = $nodes->item(0)->getAttribute('storyimage');
		    }
		
    	    $title  = $node->getElementsByTagName('title')->item(0)->nodeValue;			
			$title1 = $node->getElementsByTagName('description')->item(0)->nodeValue;
			
			//$guid = $node->getElementsByTagName('guid')->item(0)->nodeValue;
			
    	    $desc   = $description;
    	    $link   = $node->getElementsByTagName('link')->item(0)->nodeValue;             	
			
			if($linkthumb!="")
			{
			   $img    = $linkthumb;		
			}
			else
			{
			   $img = $node->getElementsByTagName('storyimage')->item(0)->nodeValue;
			}
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
			
		foreach($feed as $val)
        {          
		    $newDate = date("d-m-Y", strtotime($val['date']));
		    $date=date("d-m-Y");
		    if($date == $newDate)
		   {
		     $arrayrss = array( 
			      'title' => $val['title'],
			      'desc'  => $val['desc'],
			      'link'  => $val['link'],
			      'img'   => $val['img'],
			      'date'  => $newDate
			    );
		    $insertUserData       =  $this->Commonmodel->InsertData('rssfeeds',$arrayrss);		  
		  }
		  
		}		
	}*/
	
	
 }
 