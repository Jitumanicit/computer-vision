<?php
if (!defined('BASEPATH')) 
{
    exit('No direct script access allowed');
}

class Tripura extends CI_Controller
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

	  $data['Latest']            =  $this->Commonmodel->getDataState('post_news',0,5,'id','Tripura'); 
	  $data['Hot']               =  $this->Commonmodel->getDataState('post_news',6,12,'id','Tripura');	
	  /*$data['Sport']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Sports',$postty,'Tripura');	  
	  $data['Politics']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Politics',$postty,'Tripura');      
	  $data['Business']          =  $this->Commonmodel->getWhereDatasState('post_news',3,'Business',$postty,'Tripura');	  
	  $data['Entertainment']     =  $this->Commonmodel->getWhereDatasState('post_news',3,'Entertainment',$postty,'Tripura'); 
	  $data['Law']               =  $this->Commonmodel->getWhereDatasState('post_news',3,'Law',$postty,'Tripura');	  
	  $data['Lifestyle']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Lifestyle',$postty,'Tripura');
	  $data['Technology']        =  $this->Commonmodel->getWhereDatasState('post_news',3,'Technology',$postty,'Tripura');
	  $data['Other']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Other',$postty,'Tripura');	  
	  $data['Education']         =  $this->Commonmodel->getWhereDatasState('post_news',3,'Education',$postty,'Tripura'); 
	  $data['Crime']             =  $this->Commonmodel->getWhereDatasState('post_news',3,'Crime',$postty,'Tripura');*/
      $data['center']             =  $this->Commonmodel->getDataState('post_news',13,3,'id','Tripura');	  
	  $data['center1']            =  $this->Commonmodel->getDataState('post_news',16,3,'id','Tripura');	  
	  $data['center2']            =  $this->Commonmodel->getDataState('post_news',19,3,'id','Tripura');	
	  $data['center21']            =  $this->Commonmodel->getDataState('post_news',22,3,'id','Tripura');	  
	  $data['center22']            =  $this->Commonmodel->getDataState('post_news',25,3,'id','Tripura');	  
	  $data['center23']            =  $this->Commonmodel->getDataState('post_news',28,3,'id','Tripura');	  
	  $data['center24']            =  $this->Commonmodel->getDataState('post_news',31,3,'id','Tripura');
	  $data['center25']            =  $this->Commonmodel->getDataState('post_news',34,3,'id','Tripura');	  
	  $data['center26']            =  $this->Commonmodel->getDataState('post_news',37,3,'id','Tripura');	  
	  $data['center27']            =  $this->Commonmodel->getDataState('post_news',40,3,'id','Tripura');
	  $data['Video']               =  $this->Commonmodel->getAllRecord('post_news','Video',4,$a,$c);
      $data['advertiseTop']        =  $this->Commonmodel->getAdvertiseData("advertise","Top");
      $data['advertiseCenter']     =  $this->Commonmodel->getAdvertiseData("advertise","Center");
	  $data['advertiseMiddle']     =  $this->Commonmodel->getAdvertiseData("advertise","Middle"); 
      $data['advertiseBottom']     =  $this->Commonmodel->getAdvertiseData("advertise","Bottom");	  	  
	  $data['path']                =  '../uploads/images/';	  
	  $data['metaKeyword']         =  "tripura transport, govt of tripura, agartala, tripura news, rpsc latest news, tripura latest news, indgovtjobs, tripura districts, tripura tourism, tripura state portal, agartala india, agartala news, hotels in agartala, North East News Tripura India";	  
	  //$data['metaTitle']           =  "Tripura: Newsner Breaking news, Latest Local Tripura news headlines, Live news updates, North East News Tripura India";	  
	  //$data['description']         =  "Tripura: Newsner Breaking news, Latest Local Tripura news headlines, Live news updates, North East News Tripura India";
	  $data['metaTitle']           =  "Tripura : Live & Breaking News from Tripura, Latest Photos, Videos, North East News";
      $data['description']         =  "Get live and latest breaking news on Tripura. Todays current affairs, Tripura local news, business, crime, education, politics, health entertainment, travel, sports, lifestyle, tourism and more at North east Newsner.";

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
		   $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Business',$id,'Tripura');		   
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Tripura'); 		   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	   
		   $data['metaKeyword']       =  "Tripura latest business news, top business news, financial news, current business news, economic news today, Agartala market share news, business news daily, recent news on Tripura economy,North East News Tripura India";
	       $data['metaTitle']         =  "Tripura: Today's Business News Headlines, Economy News, Income Tax, Share Market, North East News Tripura India- Newsner";
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
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Business',$postty,'Tripura');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Business','Video','Tripura'); 		   
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	   
		   $data['metaKeyword']       =  "Tripura latest business news, top business news, financial news, current business news, economic news today, Agartala market share news, business news daily, recent news on Tripura economy, North East News Tripura India";
	       $data['metaTitle']         =  "Tripura: Today's Business News Headlines, Economy News, Income Tax, Share Market, North East News Tripura India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}		
	
	
	
	
	
	public function LatestNews($id)
    {        
		$postty="";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);
		//$data['results']          =  $this->Commonmodel->getDatasState('post_news',8,'Tripura');		
		$data['results']          =  $this->Commonmodel->getuniquestate($id,8,'Tripura');
		//$data['results']          =  $this->Commonmodel->getDatas('post_news',0,8,'id');        
        //$data['results']          =  $this->Commonmodel->getWhereData('post_news',10,$id,$postty);	
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
	
	public function SubCategoryNews($id)
    {        
		$postty                   =  "";
		$data['result']           =  $this->Commonmodel->getsingleStateData('post_news',$id);
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
    }	
	
	public function Category()
    {    
      $Category = $this->uri->segment(3);
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
		   
		   $data['metaKeyword']       =  "";
	       $data['metaTitle']         =  "";
		   
		   $this->load->view('singleNews-state',$data);   
       }
	   else
	   {*/		
		   $postty = "";		   
		   $data['result']            =  $this->Commonmodel->getcategory('category',$postty); 		   
		   $data['results']           =  $this->Commonmodel->getWhereDatasState('post_news',10,$Category,$postty,$this->uri->segment(1));
		   $data['Video']             =  $this->Commonmodel->getWhereDatasState('post_news',4,$Category,'Video',$this->uri->segment(1));		   
		   $data['results1']          =  $this->Commonmodel->subcategorysnews($Category); 		   
		   $data['advertiseTop']      =  $this->Commonmodel->getAdvertiseData("advertise","Top");
	       $data['advertiseMiddle']   =  $this->Commonmodel->getAdvertiseData("advertise",'Middle'); 
           $data['advertiseBottom']   =  $this->Commonmodel->getAdvertiseData("advertise",'Bottom');
		   if($Category=='business')
		   {
			  $data['metaKeyword']  = "Tripura latest business news, top business news, financial news, current business news, economic news today, Agartala market share news, business news daily, recent news on Tripura economy, North East News Tripura India";
	          $data['metaTitle']    = "Tripura: Today's Business News Headlines, Economy News, Income Tax, Share Market, North East News Tripura India- Newsner";
		      $data['description']  = "Read all the latest business news and updates on Tripura only on NewsNER India.Today's business news headlines online on Tripura today.";
		   }
		   else if($Category=='entertainment')
		   {
			  $data['metaKeyword']  = "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Tripuri, showbiz news, local entertainment news, entertainment news, North East News Tripura India";
	          $data['metaTitle']    = "Tripura: Latest Tripuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News Tripura India- Newsner";
		      $data['description']  = "Read all the latest entertainment news and updates on Tripura only on NewsNER India. Today's entertainment news headlines online on Tripura today.";
		   }
		   else if($Category=='politics')
		   {
			   $data['metaKeyword']  = "Parliament news Tripura, regional political news,current affairs, Politics news,latest politics news online, politics news live Agartala, politics current news, recent political news, North East News Tripura India";
	           $data['metaTitle']    = "Tripura: Latest Local Political News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
		       $data['description']  = "Read all the latest politics news and updates on Tripura only on NewsNER India. Today's politics news headlines online on Tripura today.";
		   }
		   else if($Category=='technology')
		   {
			  $data['metaKeyword'] = "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Tripura, Agartala, Northeast Discover or invented technology, North East News Tripura India ";
	          $data['metaTitle']   = "Tripura: Latest Science & Technology News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
		      $data['description'] = "Read all the latest technology news and updates on Tripura only on NewsNER India. Today's technology news headlines online on Tripura today.";
		   }
		   else if($Category=='sports')
		   {
			 $data['metaKeyword']  = "Nagaland, Kohima, Dimapur live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, women football, sports club, North East News Tripura India";
	         $data['metaTitle']    = "Tripura: Latest Local Sports, Football News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
		     $data['description']  = "Read all the latest sports news and updates on Tripura only on NewsNER India. Today's sports news headlines online on Tripura today.";
		   }
		   else if($Category=='law')
		   {
			 $data['metaKeyword']  = "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Tripura High Court, North East News Tripura India";
	         $data['metaTitle']    = "Tripura: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Tripura India- Newsner";
		     $data['description']  = "Read all the latest law & legal news and updates on Tripura only on NewsNER India. Today's law & legal news headlines online on Tripura today.";
		   } 
		   else if($Category=='crime')
		   {
			 $data['metaKeyword']  = "Tripura top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Agartala high court, Law corner news, photos, videos, Tripura violence news, northeast crime news, North East News Tripura India";
	         $data['metaTitle']    = "Tripura: Latest crime news headlines & Live updates , Tripura state criminal news, Agartala law & legal news, North East News Tripura India- Newsner";
		     $data['description']  = "Read all the latest crime news and updates on Tripura only on NewsNER India. Today's crime news headlines online on Tripura today."; 
		   }
		   else if($Category=='weather')
		   {
			 $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, northeast weather, Tripura, Agartala weather forecast, North East News Tripura India";
	         $data['metaTitle']       =  "Tripura: Latest Weather forecast News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
		     $data['description']     =  "Read all the latest weather forecast news and updates on Tripura only on NewsNER India. Today's weather forecast news headlines online on Tripura today.";
		   }
		   else if($Category=='education')
		   {
			  $data['metaKeyword']  = "Educational Institute news, literature, top educational news, educational Institute in northeast, current affairs Northeast, schools and colleges in Tripura, Agartala, North East News Tripura India";
	          $data['metaTitle']    = "Tripura: Latest educational news headlines & Live updates, Educational Institutes, North East News Tripura India - Newsner";
		      $data['description']  = "Read all the latest educational forecast news and updates on Tripura only on NewsNER India. Today's educational forecast news headlines online on Tripura today.";
		   }
		   else if($Category=='lifestyle')
		   {
			 $data['metaKeyword']   =  "Health & Fitness news, Tripura tour & Travel news, top travel news in Northeast, top breaking News, local food news, Traditional culture, Tripuri  cuisine, North East News Tripura India";
	         $data['metaTitle']     =  "Tripura: Latest Travel, Lifestyle, Health, Food, Culture News Headlines & Live Updates, North East News Tripura India- Newsner"; 
             $data['description']   =  "Read all the latest lifestyle & fashion news and updates on Tripura only on NewsNER India. Today's lifestyle & fashion news headlines online on Tripura today.";
           }
		   else if($Category=='other')
		   {
			 $data['metaKeyword']  = "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Tripura India";
		     $data['metaTitle']    = "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim- Live Updates, North East News Tripura India";
		     $data['description']  = "Read all the latest other news and updates on Tripura only on NewsNER India. Today's other news headlines online on Tripura today.";
		   }
		   else if($Category=='health')
		   {
			 $data['metaKeyword']  = "Health & Fitness news, Health news of northeast, Top Health news in Northeast, Top breaking news, Cherrapunji, shillong, sikkim news, assam news, arunachal news, North East News Tripura India";
		     $data['metaTitle']    = "Newsner: Health news, Health & Fitness news, North East News Tripura India";
		     $data['description']  = "Read all the latest health news and updates on Tripura only on NewsNER India. Today's health news headlines online on Tripura today.";
		   }
           else if($Category=='travel')
		   {
			 $data['metaKeyword']  = "Tripura travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Tripura, latest travel news, travel issue Agartala, travel crises, travel in Tripura, Agartala, North East News Tripura India ";
		     $data['metaTitle']    = "Tripura: Latest travel news headlines & Live update news, Travel news Agartala, North East News Tripura India- Newsner";
		     $data['description']  = "Read all the latest travel news and updates on Tripura only on NewsNER India. Today's travel news headlines online on Tripura today.";
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
		   $data['results']          =  $this->Commonmodel->getWhereDatassState('post_news',10,'Entertainment',$id,'Tripura');  
		   $data['Video']            =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Tripura');
		   $data['advertiseTop']     =  $this->Commonmodel->getAdvertiseData("advertise","Top");	        
		   $data['metaKeyword']      =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Tripuri, showbiz news, local entertainment news, entertainment news, North East News Tripura India";
	       $data['metaTitle']        =  "Tripura: Latest Tripuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News Tripura India- Newsner";
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
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Entertainment',$postty,'Tripura');
		   $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Entertainment','Video','Tripura'); 	   
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	   
		   $data['metaKeyword']     =  "Latest entertainment news, trending entertainment industry news, northeast film industry, viral celebrity news,top breaking news in Tripuri, showbiz news, local entertainment news, entertainment news, North East News Tripura India";
	       $data['metaTitle']       =  "Tripura: Latest Tripuri Entertainment, Local Film Industry News Headlines & Live Updates, North East News Tripura India- Newsner";
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
		  $data['result1']         = $this->Commonmodel->getcategory('category',$postty); 
		  $data['result']          = $this->Commonmodel->getsingleStateData('post_news',$id);
		  $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Politics',$id,'Tripura');		  
		  $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Tripura'); 		  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		  $data['metaKeyword']     = "Parliament news Tripura, regional political news,current affairs, Politics news,latest politics news online, politics news live Agartala, politics current news, recent political news, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Local Political News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Politics',$postty,'Tripura');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Politics','Video','Tripura');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Parliament news Tripura, regional political news,current affairs, Politics news,latest politics news online, politics news live Agartala, politics current news, recent political news, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Local Political News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Technology',$id,'Tripura');          
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Tripura');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Tripura, Agartala, Northeast Discover or invented technology, North East News Tripura India ";
	      $data['metaTitle']       =  "Tripura: Latest Science & Technology News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Technology',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Technology','Video','Tripura'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Latest technology news, top breaking news in technology, current affairs online, trending news on latest technology, technology in northeast, advance in Information Technology, Tripura, Agartala, Northeast Discover or invented technology, North East News Tripura India ";
	      $data['metaTitle']       =  "Tripura: Latest Science & Technology News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Sports',$id,'Tripura');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Tripura'); 
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Nagaland, Kohima, Dimapur live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, women football, sports club, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Local Sports, Football News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Sports',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Sports','Video','Tripura'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Nagaland, Kohima, Dimapur live sports cover & updates, sports news live, support current news, trending in sports, football news, cricket news, northeast united news, women football, sports club, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Local Sports, Football News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Law',$id,'Tripura');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Tripura');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      	  
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Tripura High Court, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Tripura India- Newsner";		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Law',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Law','Video','Tripura');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
		  $data['metaKeyword']     =  "Latest Legal news today, top breaking news, current affairs online, current affairs, trending news on laws & legal, Law Firms news, Law corner news, Justice, Judges, Tripura High Court, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Law, Criminal, Justice News Headlines & Live Updates, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Crime',$id,'Tripura');	  
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Tripura');	  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Tripura top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Agartala high court, Law corner news, photos, videos, Tripura violence news, northeast crime news, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest crime news headlines & Live updates , Tripura state criminal news, Agartala law & legal news, North East News Tripura India- Newsner";		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Crime',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Crime','Video','Tripura');
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Tripura top latest criminal news, top breaking news in criminal cases, current crime affairs, trending news on laws & legal, Agartala high court, Law corner news, photos, videos, Tripura violence news, northeast crime news, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest crime news headlines & Live updates , Tripura state criminal news, Agartala law & legal news, North East News Tripura India- Newsner";		  		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Weather',$id,'Tripura');		 
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Tripura');		  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     	  
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, northeast weather, Tripura, Agartala weather forecast, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Weather forecast News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Weather',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Weather','Video','Tripura'); 
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Top latest weather news, current affairs on weather, trending news on weather, meteorological, news broadcast, weather broadcast, Weather updates & alerts,humidity, cyclone news, landslide news, flood, hot, rain,weather maps, weather condition, northeast weather, Tripura, Agartala weather forecast, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Weather forecast News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Education',$id,'Tripura');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Tripura');
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational Institute in northeast, current affairs Northeast, schools and colleges in Tripura, Agartala, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest educational news headlines & Live updates, Educational Institutes, North East News Tripura India - Newsner";		  
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Education',$postty,'Tripura');
          $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Education','Video','Tripura');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Educational Institute news, literature, top educational news, educational Institute in northeast, current affairs Northeast, schools and colleges in Tripura, Agartala, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest educational news headlines & Live updates, Educational Institutes, North East News Tripura India - Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatassState('post_news',10,'Lifestyle',$id,'Tripura');
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Tripura');	
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    
          $data['metaKeyword']     =  "Health & Fitness news, Tripura tour & Travel news, top travel news in Northeast, top breaking News, local food news, Traditional culture, Tripuri  cuisine, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Travel, Lifestyle, Health, Food, Culture News Headlines & Live Updates, North East News Tripura India- Newsner";
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
		  $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Lifestyle',$postty,'Tripura');	
		  $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Lifestyle','Video','Tripura');	
		  $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Health & Fitness news, Tripura tour & Travel news, top travel news in Northeast, top breaking News, local food news, Traditional culture, Tripuri  cuisine, North East News Tripura India";
	      $data['metaTitle']       =  "Tripura: Latest Travel, Lifestyle, Health, Food, Culture News Headlines & Live Updates, North East News Tripura India- Newsner";
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
		  $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Other',$id,'Tripura');
		  $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Tripura');
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Tripura India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim, North East News Tripura India- Live Updates";
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
		  $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Other',$postty,'Tripura');
          $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Other','Video','Tripura');	
		  $data['results1']        = $this->Commonmodel->subcategorysnews($Category);  
		  $data['advertiseTop']    = $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		  $data['metaKeyword']     =  "Tripura news, top business news, assam financial news, current crime news, economic news today, Manipur market share news, business news daily, recent news on Meghalaya weather, Northeast economy news, Watch viral videos northeast, North East News Tripura India";
		  $data['metaTitle']       =  "Northeast Region News- Top breaking news from Assam, Arunachal, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim, North East News Tripura India- Live Updates";
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
		   $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Health',$id,'Tripura');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Tripura');		  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	     		   
		   $data['metaKeyword']     =  "Tripura health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics Tripura, Medical colleges, nurses and doctors, latest medical news, health issue Agartala, health crises, hospitals and dispensaries in Tripura, Agartala, North East News Tripura India ";
		   $data['metaTitle']       =  "Tripura: Latest health news headlines & Live update news, Health & Medical news Agartala, North East News Tripura India- Newsner";
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
		   $data['results']         =  $this->Commonmodel->getWhereDatasState('post_news',8,'Health',$postty,'Tripura');
           $data['Video']           =  $this->Commonmodel->getWhereDatasState('post_news',4,'Health','Video','Tripura');		  
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	      
		   $data['metaKeyword']     =  "Tripura health news, health articles, health news today, health current events, medical and health news, current health issues, health informatics Tripura, Medical colleges, nurses and doctors, latest medical news, health issue Agartala, health crises, hospitals and dispensaries in Tripura, Agartala, North East News Tripura India";
		   $data['metaTitle']       =  "Tripura: Latest health news headlines & Live update news, Health & Medical news Agartala, North East News Tripura India- Newsner";
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
		   $data['results']         = $this->Commonmodel->getWhereDatassState('post_news',10,'Travel',$id,'Tripura');		  
		   $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Tripura');		  
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	       
		   $data['metaKeyword']     =  "Tripura travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Tripura, latest travel news, travel issue Agartala, travel crises, travel in Tripura, Agartala, North East News Tripura India ";
		   $data['metaTitle']       =  "Tripura: Latest travel news headlines & Live update news, Travel news Agartala, North East News Tripura India- Newsner";
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
		   $data['results']         = $this->Commonmodel->getWhereDatasState('post_news',8,'Travel',$postty,'Tripura');
           $data['Video']           = $this->Commonmodel->getWhereDatasState('post_news',4,'Travel','Video','Tripura');		 
		   $data['results1']        =  $this->Commonmodel->subcategorysnews($Category);   
		   $data['advertiseTop']    =  $this->Commonmodel->getAdvertiseData("advertise","Top");	    	
		   $data['metaKeyword']     =  "Tripura travel news, travel articles, travel news today, travel current events, travel news, current travel issues, travel informatics Tripura, latest travel news, travel issue Agartala, travel crises, travel in Tripura, Agartala, North East News Tripura India ";
		   $data['metaTitle']       =  "Tripura: Latest travel news headlines & Live update news, Travel  news Agartala, North East News Tripura India- Newsner";
		   $data['description']     =  "";
		   $this->load->view('CategoryNews-state',$data); 
	  } 
	}	
	
	public function Video()
    {      	
       $limit='';
	   $postty               = "";
	   $data['result']       = $this->Commonmodel->getcategory('category',$postty);
	   $data['results']      = $this->Commonmodel->getAllVideos('post_news','Video');
	   $data['metaKeyword']  = "Latest technology viral videos, top breaking news videos Tripura, social media viral videos in Agartala current affair videos, watch trending news, viral video news, watch celebrity news Tripura, watch online videos, North East News Tripura India";
	   $data['metaTitle']    = "Tripura: Latest online videos, Viral videos News Headlines & Live Updates Agartala, North East News Tripura India- Newsner";
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