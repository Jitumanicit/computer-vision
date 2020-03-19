<?php
if (!defined('BASEPATH')) 
{
    exit('No direct script access allowed');
}

class Manipur extends CI_Controller
{
    public function index()
    {      
      $postty = "";
	  $data['result']      =  $this->Commonmodel->getcategory('category',$postty);	 
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
	  $data['Latest']            =  $this->Commonmodel->getDataState('post_news',0,5,'id','Manipur'); 
	  $data['Hot']               =  $this->Commonmodel->getDataState('post_news',6,12,'id','Manipur');
	  /*$data['Sport']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Sports',$postty,'Manipur');	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Politics',$postty,'Manipur');      
	  $data['Business']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Business',$postty,'Manipur');	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatasState('post_news',3,'Entertainment',$postty,'Manipur'); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatasState('post_news',3,'Law',$postty,'Manipur');	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Lifestyle',$postty,'Manipur');
	  $data['Technology']        =  $this->Commonmodel->getWhereDatasState('post_news',3,'Technology',$postty,'Manipur');
	  $data['Other']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Other',$postty,'Manipur');	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Education',$postty,'Manipur'); 
	  $data['Crime']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Crime',$postty,'Manipur');*/
      $data['center']             =  $this->Commonmodel->getDataState('post_news',13,3,'id','Manipur');	  
	  $data['center1']            =  $this->Commonmodel->getDataState('post_news',16,3,'id','Manipur');	  
	  $data['center2']            =  $this->Commonmodel->getDataState('post_news',19,3,'id','Manipur');	 
	  $data['center21']            =  $this->Commonmodel->getDataState('post_news',22,3,'id','Manipur');	  
	  $data['center22']            =  $this->Commonmodel->getDataState('post_news',25,3,'id','Manipur');	  
	  $data['center23']            =  $this->Commonmodel->getDataState('post_news',28,3,'id','Manipur');	  
	  $data['center24']            =  $this->Commonmodel->getDataState('post_news',31,3,'id','Manipur');
	  $data['center25']            =  $this->Commonmodel->getDataState('post_news',34,3,'id','Manipur');	  
	  $data['center26']            =  $this->Commonmodel->getDataState('post_news',37,3,'id','Manipur');	  
	  $data['center27']            =  $this->Commonmodel->getDataState('post_news',40,3,'id','Manipur');
	  $data['Video']             =  $this->Commonmodel->getAllRecord('post_news','Video',4,$a,$c);
      $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
      $data['advertiseCenter']   =  $this->Commonmodel->getAdvertiseData("advertise","Center");
	  $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
      $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");	
	  $data['path']              =  '../uploads/images/';
	  $data['metaKeyword']       =  "manipur news, manipur, imphal news, imphal, imphal current news, manipur latest news today, manipur news today, Live & Latest News from Manipur, North East News manipur India";
	  //$data['metaTitle']         =  "Manipur: Newsner Breaking news, Latest Local Manipur news headlines, Live news updates, North East News manipur India"; 
	  //$data['description']       =  "Manipur: Newsner Breaking news, Latest Local Manipur news headlines, Live news updates, North East News manipur India";
	  $data['metaTitle']         =  "Manipur : Live & Breaking News from Manipur, Latest Photos, Videos, North East News";
	  $data['description']       =  "Get live and latest breaking news on Manipur. Todays current affairs, Manipur local news, business, crime, education, politics, health entertainment, travel, sports, lifestyle, tourism and more at North east Newsner.";
	  //$data['rssfeed']           =  $this->Commonmodel->getRssDatas('rssfeeds',$postty);
	  $this->load->view('newsstate',$data);	  
    }
		
	
	public function Business()
    {
      if($this->uri->segment(3)!='')
	  {	  
           $id = $this->uri->segment(3);
           $postty = "";		   
		   $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Business',$id,'Manipur');		   
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Manipur'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Manipur latest business news, top business news, financial news, current business news, economic news today, Manipur market share news, business news daily, recent news on Imphal economy, Northeast news, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Today's Business News Headlines, Economic News, Share Market, North East News manipur India- Newsner";
		   if(count($data['result'])==0)
		   {
		       $this->load->view('errors'); 	
		   }
           else
		   {		   
		       $this->load->view('singleNews-state',$data); 
		   } 
		   //$this->load->view('singleNews-state',$data);   
      }
	  else
	  {		
		   $postty = "";
		   $Category                =  $this->uri->segment(2);
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty);
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Business',$postty,'Manipur');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Manipur'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		   $data['metaKeyword']     =  "Manipur latest business news, top business news, financial news, current business news, economic news today, Manipur market share news, business news daily, recent news on Imphal economy, Northeast news, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Today's Business News Headlines, Economic News, Share Market, North East News manipur India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}	
	
	public function LatestNews($id)
    {        
		$postty="";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);
		//$data['results']          =  $this->Commonmodel->getDatasState('post_news',8,'Manipur');
        $data['results']          =  $this->Commonmodel->getuniquestate($id,8,'Manipur');
		//$data['results']          =  $this->Commonmodel->getDatas('post_news',0,8,'id');
        //$data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$id,$postty);	
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
	    $data['metaKeyword']     =  "";	 
	    $data['metaTitle']     =  "";			   
		if(count($data['result'])==0)
		{
		    $this->load->view('errors'); 	
		}
        else
		{		   
		    $this->load->view('singleNews-state',$data); 
		} 
		//$this->load->view('singleNews-state',$data);   
    }	
    
	
	
	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);
		$data['results']          =  $this->Commonmodel->getData('subcategory',15,'id');
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
	    $data['metaKeyword']     =  "";	 
	    $data['metaTitle']     =  "";			   
		if(count($data['result'])==0)
		{
		    $this->load->view('errors'); 	
		}
        else
		{		   
		    $this->load->view('singleNews-state',$data); 
		} 
		//$this->load->view('singleNews-state',$data);   
    }	

	
	public function Category()
    {    
      /* $Category = $this->uri->segment(3);
      $total_spent = strlen($this->uri->segment(3));

	  //if($this->uri->segment(3)!='')
	 if ($total_spent < 14)
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

		   $data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   
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
	   {*/
		  
		   $postty = "";		   
		   $Category                  =  $this->uri->segment(3);
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']           =  $this->Commonmodel->getWhereDatasState('post_news',10,$Category,$postty,$this->uri->segment(1));
		   $data['Video']             =  $this->Commonmodel->getWhereDatasState('post_news',4,$Category,'Video',$this->uri->segment(1));
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');	
		   if($Category=='business')
		   {	  
		      $data['metaKeyword']   =  "Manipur latest business news, top business news, financial news, current business news, economic news today, Manipur market share news, business news daily, recent news on Imphal economy, North East News manipur India";
		      $data['metaTitle']     =  "Manipur: Today's Business News Headlines, Economic News, Share Market, North East News manipur India- Newsner";
		      $data['description']   =  "Read all the latest business news and updates on Manipur only on NewsNER India.Today's business news headlines online on Manipur today.";
		   }
		   else if($Category=='entertainment')
		   {
              $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Manipuri, showbiz news, local entertainment news, entertainment news, North East News manipur India";
		      $data['metaTitle']       =  "Manipur: Latest Manipuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News manipur India- Newsner";
		      $data['description']     =  "Read all the latest entertainment news and updates on Manipur only on NewsNER India. Today's entertainment news headlines online on Manipur today.";
		  }
		  else if($Category=='politics')
		  {
             $data['metaKeyword']     =  "Parliament news Manipur, regional political news,current affairs, Politics news,latest politics news online, politics news live Imphal, politics current news, recent political news, North East News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest Local Political News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
		     $data['description']     =  "Read all the latest political news and updates on Manipur only on NewsNER India. Today's political news headlines online on Manipur today.";
		  }
		  else if($Category=='technology')
		  {
             $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Imphal, Manipur IT Hub,  Northeast Discover or invented technology, North East News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest Science & Technology News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
		     $data['description']     =  "Read all the latest technology news and updates on Manipur only on NewsNER India. Today's technology news headlines online on Manipur today.";
		  }
		  else if($Category=='sports')
		  {
             $data['metaKeyword']   =  "Manipur, Imphal live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Manipur women football, sports club, North East News manipur India";
		     $data['metaTitle']     =  "Manipur: Latest Local Sports, Football News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
             $data['description']   =  "Read all the latest sports news and updates on Manipur only on NewsNER India. Today's sports news headlines online on Manipur today.";
          }
		  else if($Category=='law')
		  {
             $data['metaKeyword']   =  "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Manipur High Court, North East News manipur India";
		     $data['metaTitle']     =  "Manipur: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News manipur India- Newsner";
             $data['description']   =  "Read all the latest law & legal news and updates on Manipur only on NewsNER India. Today's law & legal news headlines online on Manipur today.";
          }
		  else if($Category=='crime')
		  {
             $data['metaKeyword']     =  "Manipur top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, high court Manipur, Law corner news, photos, videos, violence news, northeast crime news, North East News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest crime news headlines & Live updates , Imphal state criminal news, Manipur law & legal news, North East News manipur India- Newsner";
	         $data['description']     =  "Read all the latest crime news and updates on Manipur only on NewsNER India. Today's crime news headlines online on Manipur today."; 
	      }
		  else if($Category=='weather')
		  {
			 $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Imphal climate, Manipur weather forecast, North East News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest Weather forecast News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
		     $data['description']     =  "Read all the latest weather forecast news and updates on Manipur only on NewsNER India. Today's weather forecast news headlines online on Manipur today.";
		  }
		  else if($Category=='education')
		  {
		     $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs Manipur, schools and colleges in Manipur, Imphal, Northeast News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest educational news headlines & Live updates, Educational Institutes, Northeast News manipur India - Newsner";
		     $data['description']     =  "Read all the latest education news and updates on Manipur only on NewsNER India. Today's education news headlines online on Manipur today.";
		  }
		  else if($Category=='lifestyle')
		  {
			 $data['metaKeyword']     =  "Health & Fitness news, Assam Monastery tour news, Manipur Travel & Tourism, top travel news in Northeast, top breaking news, Manipuri News, local food news, Traditional culture, Manipuri cuisine, North East News manipur India";
		     $data['metaTitle']       =  "Manipur: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News manipur India- Newsner";
		     $data['description']     =  "Read all the latest lifestyle & fashion news and updates on Manipur only on NewsNER India. Today's lifestyle & fashion news headlines online on Manipur today.";
		  }
		  else if($Category=='other')
		  {
			 $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News manipur India";
		     $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News manipur India- Newsner";
		     $data['description']     =  "Read all the latest other news and updates on Manipur only on NewsNER India. Today's other news headlines online on Manipur today.";
		  }
		  else if($Category=='health')
		  {
			 $data['metaKeyword']   = "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News manipur India";
		     $data['metaTitle']     = "Newsner: Health news, Health & Fitness news, North East News manipur India- Newsner";
		     $data['description']   = "Read all the latest health news and updates on Manipur only on NewsNER India. Today's health news headlines online on Manipur today.";
		  }
          else if($Category=='travel')
		  {
			 $data['metaKeyword']   = "Manipur travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics imphal, latest travel news, travel issue Imphal, travel crises, travel in Manipur, North East News manipur India";
		     $data['metaTitle']     = "Manipur: Latest travel news headlines & Live update news, Travel news Imphal, North East News manipur India- Newsner";
		     $data['description']   = "Read all the latest travel news and updates on Manipur only on NewsNER India. Today's travel news headlines online on Manipur today.";
		  }
		  else
		  {
			$data['metaKeyword']     =  ""; 
			$data['metaTitle']       =  ""; 
			$data['description']     =  "";
		  }		
		 $this->load->view('CategoryNews-state',$data); 
	    
	}		
	
	

    public function Entertainment()
    { 
      if($this->uri->segment(3)!='')
	  {	
           $id = $this->uri->segment(3);
		   $postty                   =  "";		   
		   $data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereDatassState('post_news',10,'Entertainment',$id,'Manipur');
		   $data['Video']            =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Manipur');	   
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	          
		   $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Manipuri, showbiz news, local entertainment news, entertainment news,North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest Manipuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News manipur India- Newsner";
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
		   $Category                =  $this->uri->segment(2);
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Entertainment',$postty,'Manipur');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Manipur'); 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Manipuri, showbiz news, local entertainment news, entertainment news, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest Manipuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News manipur India- Newsner";
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
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Politics',$id,'Manipur');			  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Manipur'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Parliament news Manipur, regional political news,current affairs, Politics news,latest politics news online, politics news live Imphal, politics current news, recent political news, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Local Political News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Politics',$postty,'Manipur');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Manipur'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Parliament news Manipur, regional political news,current affairs, Politics news,latest politics news online, politics news live Imphal, politics current news, recent political news, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Local Political News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Technology',$id,'Manipur');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Manipur'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Imphal, Manipur IT Hub,  Northeast Discover or invented technology, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Science & Technology News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
		  if(count($data['result'])==0)
		  {
		    $this->load->view('errors'); 	
		  }
          else
		  {		   
		    $this->load->view('singleNews-state',$data); 
		  } 
		  $this->load->view('singleNews-state',$data);  
	   }
	   else
	   {	
          $postty = "";   
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Technology',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Manipur'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Imphal, Manipur IT Hub,  Northeast Discover or invented technology, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Science & Technology News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
		  $data['description']     =  "";
		  $this->load->view('CategoryNews-state',$data); 
	   } 
    }	
	
    public function Sports()
    {        
	   if($this->uri->segment(3)!='')
	   {
          $id = $this->uri->segment(3);	
		  $postty = "";   
		  $data['result1']         =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Sports',$id,'Manipur');		 
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Manipur'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Manipur, Imphal live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Manipur women football, sports club, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Local Sports, Football News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Sports',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Manipur'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Manipur, Imphal live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Manipur women football, sports club, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Local Sports, Football News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Law',$id,'Manipur');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Manipur');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Manipur High Court, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Law',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Manipur');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Manipur High Court, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News manipur India- Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Crime',$id,'Manipur');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Manipur');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Manipur top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, high court Manipur, Law corner news, photos, videos, violence news, northeast crime news, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest crime news headlines & Live updates , Imphal state criminal news, Manipur law & legal news, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Crime',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Manipur');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Manipur top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, high court Manipur, Law corner news, photos, videos, violence news, northeast crime news, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest crime news headlines & Live updates , Imphal state criminal news, Manipur law & legal news, North East News manipur India- Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Weather',$id,'Manipur');		 
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Manipur');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Imphal climate, Manipur weather forecast, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Weather forecast News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Weather',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Manipur'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, Imphal climate, Manipur weather forecast, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Weather forecast News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Education',$id,'Manipur');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Manipur');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs Manipur, schools and colleges in Manipur, Imphal, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest educational news headlines & Live updates, Educational Institutes, North East News manipur India - Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Education',$postty,'Manipur');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Manipur');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational institute in northeast, current affairs Manipur, schools and colleges in Manipur, Imphal, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest educational news headlines & Live updates, Educational Institutes, North East News manipur India - Newsner";
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
		  $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Lifestyle',$id,'Manipur');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Manipur');			  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Health & Fitness news, Assam Monastery tour news, Manipur Travel & Tourism, top travel news in Northeast, top breaking news, Manipuri News, local food news, Traditional culture, Manipuri cuisine, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News manipur India- Newsner";
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
		  $Category                =  $this->uri->segment(2);
		  $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Lifestyle',$postty,'Manipur');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Manipur');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Health & Fitness news, Assam Monastery tour news, Manipur Travel & Tourism, top travel news in Northeast, top breaking news, Manipuri News, local food news, Traditional culture, Manipuri cuisine, North East News manipur India";
		  $data['metaTitle']       =  "Manipur: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News manipur India- Newsner";
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
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Other',$id,'Manipur');
		  $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Manipur');
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News manipur India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News manipur India- Newsner";
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
		  $Category                = $this->uri->segment(2);
		  $data['result']          = $this->Commonmodel->getcategory('category',$postty); 		  
		  $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Other',$postty,'Manipur');
          $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Manipur');	
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News manipur India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News manipur India- Newsner";
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
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
           $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Health',$id,'Manipur');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Manipur');		  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		   $data['metaKeyword']     =  "Manipur health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics imphal, Medical colleges, latest medical news, health issue Imphal, health crises, hospitals in Manipur, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest health news headlines & Live update news, Health & Medical news Imphal, North East News manipur India- Newsner";
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
		   $Category                =  $this->uri->segment(2);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty);           
           $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Health',$postty,'Manipur');
           $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Manipur');		  
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       		   
           $data['metaKeyword']     =  "Manipur health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics imphal, Medical colleges, latest medical news, health issue Imphal, health crises, hospitals in Manipur, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest health news headlines & Live update news, Health & Medical news Imphal, North East News manipur India- Newsner";
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
		   $data['result']          =  $this->Commonmodel->getsingleStateData('post_news',$id);
		   $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Travel',$id,'Manipur');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Manipur');	  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Manipur travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics imphal, latest travel news, travel issue Imphal, travel crises, travel in Manipur, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest travel news headlines & Live update news, Travel news Imphal, North East News manipur India- Newsner";
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
		   $Category                =  $this->uri->segment(2);
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Travel',$postty,'Manipur');
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Manipur');			  
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       		   
           $data['metaKeyword']     =  "Manipur travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics imphal, latest travel news, travel issue Imphal, travel crises, travel in Manipur, North East News manipur India";
		   $data['metaTitle']       =  "Manipur: Latest travel news headlines & Live update news, Travel news Imphal, North East News manipur India- Newsner";
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
	   $data['metaKeyword']     =  "Latest technology news viral videos, top breaking news videos Manipur, social media viral videos in Imphal, current affair videos, watch trending news, viral video news, watch celebrity news Manipur watch online videos, North East News manipur India";
	   $data['metaTitle']       =  "Manipur: Latest online videos, Viral videos News Headlines & Live Updates Imphal, North East News manipur India- Newsner";
	   $this->load->view('Video-state',$data);	 
    }	
	
	public function Blog()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllBlogs('post_news','Video');	   
	   $data['metaKeyword']   =  "Assam Tourism, Northeast Tourism, Northeast Travel, Meghalaya, Tour and Travel, Northeast Blog, Dawki, Shilling, Cherrapunjee, Tawang, Kaziranga National Park, Manas National Park, Gangtok, Sikkim, Arunachal, Arunachal Pradesh, Manipur, Nagaland, Ziro Festival, Hornbill Festival, IIT Guwahati, Guwahati, Meghalaya Tourism, Arunachal Tourism, Awesome Assam, Filmfare Awards 2020, newsner.in";
	   $data['metaTitle']     =  "Assam: Assam Tourism Blog, Assam Latest News, Latest Assam News- Newsner, Latest Northeast News- Newsner, Northaest Blog, Assam Tourism Blog, Welcome Assam, Welcome Northeast, newsner.in";	   
	   $this->load->view('Blog-state',$data);	 
    }
 }
 