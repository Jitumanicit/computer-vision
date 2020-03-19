<?php
if (!defined('BASEPATH')) 
{
    exit('No direct script access allowed');
}

class Arunachalpradesh extends CI_Controller
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
	  $data['Latest']            =  $this->Commonmodel->getDataState('post_news',0,5,'id','Arunachal Pradesh'); 
	  $data['Hot']               =  $this->Commonmodel->getDataState('post_news',6,12,'id','Arunachal Pradesh');
	  /*$data['Sport']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Sports',$postty,'Arunachal Pradesh');	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Politics',$postty,'Arunachal Pradesh');      
	  $data['Business']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Business',$postty,'Arunachal Pradesh');	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatasState('post_news',3,'Entertainment',$postty,'Arunachal Pradesh'); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatasState('post_news',3,'Law',$postty,'Arunachal Pradesh');	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Lifestyle',$postty,'Arunachal Pradesh');
	  $data['Technology']        =  $this->Commonmodel->getWhereDatasState('post_news',3,'Technology',$postty,'Arunachal Pradesh');
	  $data['Other']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Other',$postty,'Arunachal Pradesh');	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Education',$postty,'Arunachal Pradesh'); 
	  $data['Crime']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Crime',$postty,'Arunachal Pradesh');	*/    
        $data['center']             =  $this->Commonmodel->getDataState('post_news',13,3,'id','Arunachal Pradesh');	  
	    $data['center1']            =  $this->Commonmodel->getDataState('post_news',16,3,'id','Arunachal Pradesh');	  
	    $data['center2']            =  $this->Commonmodel->getDataState('post_news',19,3,'id','Arunachal Pradesh');	
	    $data['center21']           =  $this->Commonmodel->getDataState('post_news',22,3,'id','Arunachal Pradesh');	  
	    $data['center22']           =  $this->Commonmodel->getDataState('post_news',25,3,'id','Arunachal Pradesh');	  
	    $data['center23']           =  $this->Commonmodel->getDataState('post_news',28,3,'id','Arunachal Pradesh');	  
	    $data['center24']           =  $this->Commonmodel->getDataState('post_news',31,3,'id','Arunachal Pradesh');
	    $data['center25']           =  $this->Commonmodel->getDataState('post_news',34,3,'id','Arunachal Pradesh');	  
	    $data['center26']           =  $this->Commonmodel->getDataState('post_news',37,3,'id','Arunachal Pradesh');	  
	    $data['center27']           =  $this->Commonmodel->getDataState('post_news',40,3,'id','Arunachal Pradesh');
	    $data['Video']              =  $this->Commonmodel->getAllRecord('post_news','Video',4,$a,$c);        
        $data['advertiseTop']       =  $this->Commonmodel->getAdvertiseData("advertise","Top");
        $data['advertiseCenter']    =  $this->Commonmodel->getAdvertiseData("advertise","Center");
	    $data['advertiseMiddle']    =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
        $data['advertiseBottom']    =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");
	    $data['path']               =  '../uploads/images/';	  
	    $data['metaKeyword']        =  "arunachal times, arunachal news, arunachal tourist place, arunachal latest news, ziro arunachal pradesh, tawang tourism, hotels in tawang, tawang monastery, tawang india, North East News Arunachal India";
	    
	   // $data['metaTitle']          =  "Arunachal Pradesh: Newsner Breaking news, Latest Local Arunachal news headlines, Live news updates, North East News Arunachal India"; 
	    //$data['description']        =  "Arunachal Pradesh: Newsner Breaking news, Latest Local Arunachal news headlines, Live news updates, North East News Arunachal India";
        
        $data['metaTitle']          =  "Arunachal Pradesh : Live & Breaking News from Arunachal Pradesh, Latest Photos, Videos, North East News";
        $data['description']        =  "Get live and latest breaking news on Arunachal Pradesh. Todays current affairs, Arunachal Pradesh local news, business, crime, education, politics, health entertainment, travel, sports, lifestyle, tourism and more at North east Newsner.";
        //print_r($data['Business']);
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
		   $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Business',$id,'Arunachal Pradesh');		   
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Arunachal Pradesh'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       //$data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           //$data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		   
		   $data['metaKeyword']     =  "Arunachal latest business news, top business news from arunachal, financial news, current business news, economic news today, market news, business news daily, recent news on arunachal,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Today's Business News Headlines, Economic News, Share Market, North East News Arunachal India- Newsner";
		  
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
		   $Category                = $this->uri->segment(2);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Business',$postty,'Arunachal Pradesh');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Arunachal Pradesh'); 		   
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       //$data['advertiseMiddle'] =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           //$data['advertiseBottom'] =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');		   
		   $data['metaKeyword']     =  "Arunachal latest business news, top business news from arunachal, financial news, current business news, economic news today, market news, business news daily, recent news on arunachal,North East News Arunachal India";
		   //$data['metaTitle']       =  "Arunachal Pradesh: Today's Business News Headlines, Economic News, Share Market, North East News Arunachal India- Newsner";
		   $data['metaTitle']       =  "Arunachal Pradesh News: Latest Business News and Updates on Arunachal Pradesh";
		   $data['description']     =  "Read all the latest business news and updates on Arunachal Pradesh only on NewsNER India. Today's business news headlines online on Arunachal Pradesh today.";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}		
	
	
	public function LatestNews($id)
    {        
		$postty="";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		
		//$data['results']          =  $this->Commonmodel->getDatasState('post_news',8,'Arunachal Pradesh');		
		$data['results']          =  $this->Commonmodel->getuniquestate($id,8,'Arunachal Pradesh');
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
      //$Category = $this->uri->segment(3);
	  /*if($this->uri->segment(3)!='')
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
		   $data['result']           =  $this->Commonmodel->getsingleData('post_news',$id);		   
		   
		   $data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$Category,$postty);		   
		   $data['Video']            =  $this->Commonmodel->getWhereData('post_news',4,$Category,'Video');
		   
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']  =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']  =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   $this->load->view('singleNews-state',$data);   
       }
	   else
	   {*/		
		   $postty = "";
		   $Category                  =  $this->uri->segment(3);
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty);		   
		   $data['results']           =  $this->Commonmodel->getWhereDatasState('post_news',10,$Category,$postty,'Arunachal Pradesh');
		   $data['Video']             =  $this->Commonmodel->getWhereDatasState('post_news',4,$Category,'Video','Arunachal Pradesh');		   
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		   if($Category=='business')
		   {
			  $data['metaKeyword']     =  "Arunachal latest business news, top business news from arunachal, financial news, current business news, economic news today, market news, business news daily, recent news on arunachal,North East News Arunachal India";
		      $data['metaTitle']       =  "Arunachal Pradesh: Today's Business News Headlines, Economic News, Share Market, North East News Arunachal India- Newsner";
		      //$data['metaTitle']       =  "Arunachal Pradesh News: Latest Business News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest business news and updates on Arunachal Pradesh only on NewsNER India. Today's business news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='entertainment')
		   {
			 $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Arunachal, showbiz news, local entertainment news, entertainment news,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest Arunachali Entertainment, Local Film Industry News Headlines & Live Updates, North East News Arunachal India- Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Entertainment News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest entertainment news and updates on Arunachal Pradesh only on NewsNER India. Today's entertainment news headlines online on Arunachal Pradesh today."; 
		   }
		   else if($Category=='politics')
		   {
			 $data['metaKeyword']     =  "Parliament news arunachal, regional political news,current affairs, Politics news,latest politics news online, politics news live Itanagar, politics current news, recent political news,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest Local Political News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
             $data['metaTitle']       =  "Arunachal Pradesh News: Latest Political News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest political news and updates on Arunachal Pradesh only on NewsNER India. Today's political news headlines online on Arunachal Pradesh today.";
           }
		   else if($Category=='technology')
		   {
			 $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Arunachal, Tawang IT Hub,  Northeast Discover or invented technology,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest Science & Technology News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
		     $data['metaTitle']       =  "Arunachal Pradesh News: Latest Technology News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest technology news and updates on Arunachal Pradesh only on NewsNER India. Today's technology news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='sports')
		   {
			 $data['metaKeyword']     =  "live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Arunachal Football, sports club,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest Local Sports News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
		     $data['metaTitle']       =  "Arunachal Pradesh News: Latest Sports News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest sports news and updates on Arunachal Pradesh only on NewsNER India. Today's sports news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='law')
		   {
			 $data['metaKeyword']     =  "Latest Legal news today, top breaking news in Arunachal, current affairs online news, trending news on laws & legal, Law Firms news, Law corner news, Judges, Justice, Imphal court,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Arunachal India- Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Law & Legal News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest law & legal news and updates on Arunachal Pradesh only on NewsNER India. Today's law & legal news headlines online on Arunachal Pradesh today.";
		   } 
		   else if($Category=='crime')
		   {
			  $data['metaKeyword']     =  "Arunachal top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Itanagar high court, Law corner news, photos, videos, violence news, northeast crime news, protest, army,North East News Arunachal India";
		     //$data['metaTitle']       =  "Arunachal Pradesh: Latest crime news headlines & Live updates , state criminal news, law & legal news, North East News Arunachal India- Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Crime News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest crime news and updates on Arunachal Pradesh only on NewsNER India. Today's crime news headlines online on Arunachal Pradesh today.";		    
		   }
		   else if($Category=='weather')
		   {
			  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, tawang cold, arunachal weather forecast,North East News Arunachal India";
		      //$data['metaTitle']       =  "Arunachal Pradesh: Latest Weather forecast News Headlines & Live Updates Arunachal, North East News Arunachal  India- Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Weather Forecast News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest weather forecast news and updates on Arunachal Pradesh only on NewsNER India. Today's weather forecast news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='education')
		   {
			  $data['metaKeyword']     =  "Educational Institute news, literature,top educational news, educational institute in northeast, current affairs arunachal, schools and colleges in Itanagar,North East News Arunachal India";
		      //$data['metaTitle']       =  "Arunachal Pradesh: Latest educational news headlines & Live updates, Educational Institutes, North East News Arunachal India - Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Education News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest education news and updates on Arunachal Pradesh only on NewsNER India. Today's education news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='lifestyle')
		   {
			  $data['metaKeyword']     =  "Health & Fitness news, Tawang Monastery tour news, Tawang Travel & Tourism, top travel news in northeast, top breaking news, Arunachal News, local food news, Traditional culture, Arunachal cuisine,North East News Arunachal India";
		      //$data['metaTitle']       =  "Arunachal Pradesh: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Arunachal India- Newsner";
		      $data['metaTitle']       =  "Arunachal Pradesh News: Latest Lifestyle & Fashion News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest lifestyle & fashion news and updates on Arunachal Pradesh only on NewsNER India. Today's lifestyle & fashion news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='other')
		   {
			  $data['metaKeyword'] = "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast,North East News Arunachal India";
		      $data['metaTitle']   = "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Arunachal India";		   
			  $data['description'] = "Read all the latest other news and updates on Arunachal Pradesh only on NewsNER India. Today's other news headlines online on Arunachal Pradesh today.";
		   }
		   else if($Category=='health')
		   {
			   $data['metaKeyword']  = "Arunachal health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics, latest medical news, health issue Itanagar, Medical colleges, health crises, hospitals in arunachal,North East News Arunachal India"; 
			   //$data['metaTitle']     =  "Arunachal Pradesh: Latest health news headlines & Live updates news, Health & Medical news Itanagar, North East News Arunachal India- Newsner";   
		       $data['metaTitle']       =  "Arunachal Pradesh News: Latest Health News and Updates on Arunachal Pradesh"; 
			   $data['description']     =  "Read all the latest health news and updates on Arunachal Pradesh only on NewsNER India. Today's health news headlines online on Arunachal Pradesh today.";
		   }
           else if($Category=='travel')
		   {
			  $data['metaKeyword']   =  "Arunachal travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics, latest travel news, travel issue Itanagar,travel in arunachal,North East News Arunachal India";
		      //$data['metaTitle']     =  "Arunachal Pradesh: Latest travel news headlines & Live updates news, Travel news Itanagar, North East News Arunachal India- Newsner";		    
			  $data['metaTitle']       =  "Arunachal Pradesh News: Latest Travel News and Updates on Arunachal Pradesh"; 
			  $data['description']     =  "Read all the latest travel news and updates on Arunachal Pradesh only on NewsNER India. Today's travel news headlines online on Arunachal Pradesh today.";
		   }
		   else
		   {
			$data['metaKeyword']     =  ""; 
			$data['metaTitle']       =  ""; 
			$data['description']     =  "";
		   }		   
		   
		   $this->load->view('CategoryNews-state',$data); 
	   //} 	  
	}	

    public function Entertainment()
    { 
      if($this->uri->segment(3)!='')
	  {	
           $id = $this->uri->segment(3);
		   $postty                   =  "";		   
		   $data['result1']          =  $this->Commonmodel->getcategory('category',$postty); 

		   $data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);		   
		   $data['results']          =  $this->Commonmodel->getWhereDatassState('post_news',10,'Entertainment',$id,'Arunachal Pradesh'); 
		   $data['Video']            =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Arunachal Pradesh');	
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		   $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Arunachal, showbiz news, local entertainment news, entertainment news,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Latest Arunachali Entertainment, Local Film Industry News Headlines & Live Updates, North East News Arunachal India- Newsner";
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
		   $Category                =  $this->uri->segment(3);		   
		   $data['result']          =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Entertainment',$postty,'Arunachal Pradesh');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Arunachal Pradesh'); 		   
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	   
		   $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Arunachal, showbiz news, local entertainment news, entertainment news,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Latest Arunachali Entertainment, Local Film Industry News Headlines & Live Updates, North East News Arunachal India- Newsner";
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
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Politics',$id,'Arunachal Pradesh');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Arunachal Pradesh'); 		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
          $data['metaKeyword']     =  "Parliament news arunachal, regional political news,current affairs, Politics news,latest politics news online, politics news live Itanagar, politics current news, recent political news,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Local Political News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Politics',$postty,'Arunachal Pradesh');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Arunachal Pradesh'); 		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Parliament news arunachal, regional political news,current affairs, Politics news,latest politics news online, politics news live Itanagar, politics current news, recent political news,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Local Political News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Technology',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Arunachal Pradesh'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Arunachal, Tawang IT Hub,  Northeast Discover or invented technology,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Science & Technology News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Technology',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Arunachal Pradesh'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Arunachal, Tawang IT Hub,  Northeast Discover or invented technology,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Science & Technology News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Sports',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Arunachal Pradesh');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Arunachal Football, sports club,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Local Sports News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Sports',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Arunachal Pradesh'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, Arunachal Football, sports club,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Local Sports News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Law',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Arunachal Pradesh');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news in Arunachal, current affairs online news, trending news on laws & legal, Law Firms news, Law corner news, Judges, Justice, Imphal court,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Law',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Arunachal Pradesh');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news in Arunachal, current affairs online news, trending news on laws & legal, Law Firms news, Law corner news, Judges, Justice, Imphal court,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Arunachal India- Newsner";	  		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Crime',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Arunachal Pradesh');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Arunachal top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Itanagar high court, Law corner news, photos, videos, violence news, northeast crime news, protest, army,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest crime news headlines & Live updates , state criminal news, law & legal news, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Crime',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Arunachal Pradesh');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Arunachal top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Itanagar high court, Law corner news, photos, videos, violence news, northeast crime news, protest, army,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest crime news headlines & Live updates , state criminal news, law & legal news, North East News Arunachal India- Newsner";		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Weather',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Arunachal Pradesh');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    	  
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, tawang cold, arunachal weather forecast,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Weather forecast News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Weather',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Arunachal Pradesh');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, north east weather, tawang cold, arunachal weather forecast,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Weather forecast News Headlines & Live Updates Arunachal, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Education',$id,'Arunachal Pradesh');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Arunachal Pradesh');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     =  "Educational Institute news, literature,top educational news, educational institute in northeast, current affairs arunachal, schools and colleges in Itanagar,North East News Arunachal India";
		  $data['metaTitle']      =  "Arunachal Pradesh: Latest educational news headlines & Live updates, Educational Institutes, North East News Arunachal India - Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Education',$postty,'Arunachal Pradesh');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Arunachal Pradesh');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Educational Institute news, literature,top educational news, educational institute in northeast, current affairs arunachal, schools and colleges in Itanagar,North East News Arunachal India";
		  $data['metaTitle']      =  "Arunachal Pradesh: Latest educational news headlines & Live updates, Educational Institutes, North East News Arunachal India - Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Lifestyle',$id,'Arunachal Pradesh');		  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Arunachal Pradesh');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Health & Fitness news, Tawang Monastery tour news, Tawang Travel & Tourism, top travel news in northeast, top breaking news, Arunachal News, local food news, Traditional culture, Arunachal cuisine,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Arunachal India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Lifestyle',$postty,'Arunachal Pradesh');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Arunachal Pradesh');		  
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Health & Fitness news, Tawang Monastery tour news, Tawang Travel & Tourism, top travel news in northeast, top breaking news, Arunachal News, local food news, Traditional culture, Arunachal cuisine,North East News Arunachal India";
		  $data['metaTitle']       =  "Arunachal Pradesh: Latest Travel, Lifestyle, Health, Food News Headlines & Live Updates, North East News Arunachal India- Newsner"; 
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
		  $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Other',$id,'Arunachal Pradesh');
		  $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Arunachal Pradesh');
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast,North East News Arunachal India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Arunachal India";		  
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
		  $data['result']          = $this->Commonmodel->getcategory('category',$postty);		  
		  $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Other',$postty,'Arunachal Pradesh');
          $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Arunachal Pradesh');	
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast,North East News Arunachal India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Arunachal India";
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
           $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Health',$id,'Arunachal Pradesh');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Arunachal Pradesh');		  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      		   
		   $data['metaKeyword']     =  "Arunachal health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics, latest medical news, health issue Itanagar, Medical colleges,  health crises, hospitals in arunachal,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Latest health news headlines & Live updates news, Health & Medical news Itanagar, North East News Arunachal India- Newsner";		   
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
		   $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Health',$postty,'Arunachal Pradesh');
           $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Arunachal Pradesh');  
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Arunachal health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics, latest medical news, health issue Itanagar, Medical colleges,  health crises, hospitals in arunachal,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Latest health news headlines & Live updates news, Health & Medical news Itanagar, North East News Arunachal India- Newsner";
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
           $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Travel',$id,'Arunachal Pradesh');		  
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Arunachal Pradesh');		  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Arunachal travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics, latest travel news, travel issue Itanagar,travel in arunachal,North East News Arunachal India";
		   $data['metaTitle']       =  "Arunachal Pradesh: Latest travel news headlines & Live updates news, Travel news Itanagar, North East News Arunachal India- Newsner";
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
		   $Category              =  $this->uri->segment(2);
		   $data['result']        =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']       =  $this->Commonmodel->getWhereDatasState('post_news',8,'Travel',$postty,'Arunachal Pradesh');
           $data['Video']         =  $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Arunachal Pradesh'); 
		   $data['results1']      =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']  =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		   $data['metaKeyword']   =  "Arunachal travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics, latest travel news, travel issue Itanagar,travel in arunachal,North East News Arunachal India";
		   $data['metaTitle']     =  "Arunachal Pradesh: Latest travel news headlines & Live updates news, Travel news Itanagar, North East News Arunachal India- Newsner";
		   $data['description']   =  "";
		   $this->load->view('CategoryNews-state',$data); 
	   } 
	}	
	
	public function Video()
    {      	
       $limit='';
	   $postty = "";
	   $data['result']  = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']  = $this->Commonmodel->getAllVideos('post_news','Video');	   
	   $data['metaKeyword']     =  "Latest technology news viral videos, top breaking news videos, social media viral videos,  current affair videos, watch trending news, viral video news, watch celebrity news arunachal, watch online videos,North East News Arunachal India";
	   $data['metaTitle']       =  "Arunachal: Latest online videos, Viral videos News Headlines & Live Updates Itanagar, North East News Arunachal India- Newsner";	   
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
 