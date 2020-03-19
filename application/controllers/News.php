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
	  //$data['Latest']            =  $this->Commonmodel->breakingnews('post_news',5,'id');	  
	  //$data['Hot']               =  $this->Commonmodel->hottrending('post_news',12,'id');
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
	  
	  $data['metaKeyword']       =  "Latest News on Politics, Education, Science & Technology, Current affairs, Health & Lifestyle, Weather, Sports, Crime,Business, Videos,North East News India";
	  //$data['metaTitle']         =  "North East Region News- Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim, North East News India";
      $data['metaTitle']      = "North East India News - Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura";
      $data['description']    = "Get the latest news from North East Region Assam, Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim only from NewsNER India.";
	  //$data['metaKeyword']       =  "breaking news, latest news, north east news, assam, arunachal, manipur, meghalaya, mizoram, nagaland, tripura, sikkim, guwahati, shillong, imphal, newsner india";
	  //$data['metaTitle']         =  "Northeast Region News - Assam, Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim";
	  //$data['description']       =  "Get the latest breaking news from North East Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim"; 	 
	  
	  $this->load->view('news-state',$data);
      //header("Content-Type: text/xml;charset=iso-8859-1");
	  //$this->load->view('sitemap');  	  
    }
	
	public function LatestNews($id)
    {        
		$postty="";		
		$data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);		
		//$data['results']          =  $this->Commonmodel->getDatas('post_news',0,8,'id');
		$data['results']          =  $this->Commonmodel->getunique($id,8);
        //$data['results']        =  $this->Commonmodel->getWhereData('post_news',10,$id,$postty);	
		$data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
	    $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	    //$data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
        //$data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		
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
		if(count($data['result'])==0)
		{
		   $this->load->view('errors'); 	
		}
        else
		{		   
		   $this->load->view('singleNews-state',$data); 
		} 		
    }	    
	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleDatas('post_news',$id);
		$data['results']          =  $this->Commonmodel->getData('subcategory',15,'id');
		$data['result1']          =  $this->Commonmodel->getcategory('category',$postty);
		$data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	  
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
		if(count($data['result'])==0)
		{
		   $this->load->view('errors'); 	
		}
        else
		{		   
		   $this->load->view('singleNews-state',$data); 
		} 	   
    }		
	
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
		   $data['metaKeyword']      =  "";
		   $data['metaTitle']        =  "";		   
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		       $this->load->view('singleNews-state',$data); 
		   } 		
       }
	   else
	   {		
		   $postty = "";		   
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']           =  $this->Commonmodel->getWhereDatas('post_news',10,$Category,$postty);
		   $data['Video']             =  $this->Commonmodel->getWhereDatas('post_news',4,$Category,'Video'); 
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  if($Category=='business')
		  {	  
		      $data['metaKeyword']    =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news,North East News India";
              $data['metaTitle']      =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast, North East News India";   
		      $data['description']    =  "Read all the latest business news and updates only on NewsNER India.Today's business news headlines online today.";
		  }
		  else if($Category=='entertainment')
		  {
              $data['metaKeyword']      =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news,North East News India";
              $data['metaTitle']        =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news, North East News India";   
              $data['description']      =  "Read all the latest entertainment news and updates only on NewsNER India.Today's entertainment news headlines online today.";
		  }
		  else if($Category=='politics')
		  {
              $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news,North East News India";
		      $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast, North East News India";
		      $data['description']     =  "Read all the latest politics news and updates only on NewsNER India.Today's politics news headlines online today.";
		  }
		  else if($Category=='technology')
		  {
              $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology,North East News India";
		      $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news, North East News India";
		      $data['description']     =  "Read all the latest technology news and updates only on NewsNER India.Today's technology news headlines online today.";
		  }
		  else if($Category=='sports')
		  {
              $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news,North East News India";
		      $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news, North East News India";
		      $data['description']     =  "Read all the latest sports news and updates only on NewsNER India.Today's sports news headlines online today.";
		  }
		  else if($Category=='law')
		  {
              $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news,North East News India";
		      $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms, North East News India";
		      $data['description']     =  "Read all the latest law news and updates only on NewsNER India.Today's law news headlines online today.";
		  }
		  else if($Category=='crime')
		  {
              $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news,North East News India";
		      $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news, North East News India";
		      $data['description']     =  "Read all the latest crime news and updates only on NewsNER India.Today's crime news headlines online today.";
		  }
		  else if($Category=='weather')
		  {
             $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition,North East News India";
		     $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates, North East News India";
		     $data['description']     =  "Read all the latest weather news and updates only on NewsNER India.Today's weather news headlines online today.";
		  }
		  else if($Category=='education')
		  {
             $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news,North East News India";
		     $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast, North East News India";
		     $data['description']     =  "Read all the latest education news and updates only on NewsNER India.Today's education news headlines online today.";
		  }
		  else if($Category=='lifestyle')
		  {
             $data['metaKeyword']     =  "times lifestyle now, lifestyle news,top lifestyle news, lifestyle institute in northeast, current affairs, shillong lifestyle news,North East News India";
		     $data['metaTitle']       =  "Newsner: Latest lifestyle news, Trending lifestyle news and top breaking news in Northeast, North East News India";
		     $data['description']     =  "Read all the latest lifestyle news and updates only on NewsNER India.Today's lifestyle news headlines online today.";
		  }
		  else if($Category=='other')
		  {
			 $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast,North East News India";
		     $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News India";
             $data['description']     =  "Read all the latest other news and updates only on NewsNER India.Today's other news headlines online today.";
          }
		  else if($Category=='health')
		  {
			 $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news,North East News India";
		     $data['metaTitle']       =  "Newsner: Health news, Health & Fitness news, North East News India";
		     $data['description']     =  "Read all the latest health news and updates only on NewsNER India.Today's health news headlines online today.";
		  }
		  else
		  {
			$data['metaKeyword']     =  ""; 
			$data['metaTitle']       =  ""; 
			$data['description']     =  "";
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
           $data['metaKeyword']      =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news,North East News India";
           $data['metaTitle']        =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news, North East News India"; 
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		       $this->load->view('singleNews-state',$data); 
		   } 		 
      }
	  else
	  {		
		   $postty                  =  "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Entertainment',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Entertainment','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	   
		   $data['metaKeyword']     =  "Latest entertainment news, Trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Northeast, showbiz news, local entertainment news,North East News India";
           $data['metaTitle']       =  "Newsner: Latest celebrity news, Northeast entertainment news, Top entertainment news, North East News India";  
		   $data['description']     =  "";
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
		   $data['metaKeyword']       =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news,North East News India";
           $data['metaTitle']         =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast, North East News India"; 
		   if(count($data['result'])==0)
		   {
		      $this->load->view('errors'); 	
		   }
           else
		   {		   
		      $this->load->view('singleNews-state',$data); 
		   } 		 
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Business',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Business','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		   $data['metaKeyword']       =  "Latest business news, top business news, financial news, current business news, economic news today, market news, business news daily, recent news,North East News India";
           $data['metaTitle']         =  "Newsner: Latest Business news, Trending business news, Top Business news of Northeast, North East News India";  
		   $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news,North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		 
       }
	   else
	   {		
		  $postty = "";		
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Politics',$postty);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Politics','Video'); 	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Parliament news assam, regional political news,current affairs, Politics news, Latest Politics news Shillong, Politics news online, Politics news live Guwahati, Politics current news, recent political news,North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Politics news, Trending Election news, Current affairs in Northeast, North East News India";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   }		
    }	

	
    public function Technology()
    { 
       if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";   
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Technology',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology,North East News India";
		  $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		
	  }
	   else
	   {	
          $postty = "";   
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Technology',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Technology','Video'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology";
		  $data['metaTitle']       =  "Newsner: Latest technology news, Top breaking news, Trending technology news & technology news";
		  $data['description']     =  "";
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
		  $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Sports',$id);
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Sports','Video'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news,North East News India";
		  $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		   
       }
	   else
	   {		
		  $postty = "";   
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Sports',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Sports','Video'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	  
		  $data['metaKeyword']     =  "live sports, sports news live, support current news, trending in sports news, football news, cricket news, northeast united news, shillong lajong news,North East News India";
		  $data['metaTitle']       =  "Newsner: Sports news, Top breaking news, Health & Fitness news & Latest sports news, North East News India";		  
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news,North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		 
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Law',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Law','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest Legal news, top breaking news in law, current affairs online, trending news on laws & legal, Law Firms news, Law corner news,North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Legal News, Top breaking Law news, Trending news on Legal issues, Law Firms, North East News India";
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Crime',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Crime','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Top latest criminal news, top breaking news in crime cases, current crime affairs, trending news on laws & legal, high court, Law corner news , violence news, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest crime news, Top breaking news, Top criminal news , Crime & Justice news, North East News India";
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates, North East News India";
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		   
       }
	   else
	   {		
		  $postty = ""; 
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Weather',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Weather','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates, alerts, humidity, cyclone news, landslide news, flood, sunny,weather maps, weather condition, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest weather news, Top breaking news, Weather forecast news, Weather updates, North East News India";	 
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast, North East News India";		  
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Education',$postty);
          $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Education','Video');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "times education now, educational news,top educational news, educational institute in northeast, current affairs, shillong educational news, North East News India";
		  $data['metaTitle']       =  "Newsner: Latest Education news, Trending Educational news and top breaking news in Northeast,North East News India";
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Health & Fitness news, Travel news of northeast, Top travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		  $data['metaTitle']       =  "Newsner: Lifestyle news, Travel news, Health & Fitness news, North East News India";
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		 
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Lifestyle',$postty);	
		  $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Lifestyle','Video');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Health & Fitness news, Travel news of northeast, Top travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		  $data['metaTitle']       =  "Newsner: Lifestyle news, Travel news, Health & Fitness news, North East News India";
		  $data['description']     =  "";
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
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News India";
		  if(count($data['result'])==0)
		  {
		     $this->load->view('errors'); 	
		  }
          else
		  {		   
		     $this->load->view('singleNews-state',$data); 
		  } 		  
       }
	   else
	   {		
		  $postty = "";
		  $data['result']          = $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         = $this->Commonmodel->getWhereDatas('post_news',8,'Other',$postty);
          $data['Video']           = $this->Commonmodel->getWhereDatas('post_news',4,'Other','Video');			  
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      
          $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News India";
		  $data['description']     =  "";
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
		   $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		   $data['metaTitle']       =  "Newsner India: Latest health news headlines & Live update news, Northeast health news, North East News India, ";		   
		   if(count($data['result'])==0)
		   {
		     $this->load->view('errors'); 	
		   }
           else
		   {		   
		     $this->load->view('singleNews-state',$data); 
		   } 		
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Health',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Health','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	
		   $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		   $data['metaTitle']       =  "Newsner India: Latest health news headlines & Live update news, Northeast health news, North East News India";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}		
	
    public function Travel()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleDatas('post_news',$id);
		   $data['results']         =  $this->Commonmodel->getWhereDatass('post_news',10,'Travel',$id);
           $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Travel','Video'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	   
		   $data['metaKeyword']     =  "Travel news, Travel news of northeast, Top Travel news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		   $data['metaTitle']       =  "Newsner India: Latest Travel News headlines & Live Travel update news, Northeast Travel News, Northeast India News, Travel Northeast, North East News India";		   
		   if(count($data['result'])==0)
		   {
		     $this->load->view('errors'); 	
		   }
           else
		   {		   
		     $this->load->view('singleNews-state',$data); 
		   } 		  
      }
	  else
	  {		
		   $postty = "";
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatas('post_news',8,'Travel',$postty);
		   $data['Video']           =  $this->Commonmodel->getWhereDatas('post_news',4,'Travel','Video'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News India";
		   $data['metaTitle']    =  "Newsner India: Latest Travel News headlines & Live Travel update news, Northeast Travel News, Travel Northeast, North East News India"; 
		   $data['description']     =  "";
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

    public function Blog()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllBlogs('post_news','Post');
	   $this->load->view('Blog-state',$data);	 
    }	

 }
 