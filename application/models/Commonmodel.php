<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Commonmodel extends CI_Model
{ 
   function __construct()
   { 
       parent::__construct (); 
   }
  
  
   function InsertData($table,$array)
   {
      $this->db->insert($table,$array);
      return $this->db->insert_id();
   }
    
  
   function getData($table,$limit,$field)
   {		
	  $this->db->order_by($field, "DESC");
	  $this->db->limit($limit);
	  $DataWhere = array('status'=>1);
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data; 	 
   } 
   
//-------------------------------------------------------------------------------

   function getDataState($table,$start,$limit,$field,$state)
   {
       /*
       $a=0;
	   $this->db->select('category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post');
       $this->db->from('post_news');
	   $this->db->offset($start);
	   $this->db->limit($limit);
	   $this->db->order_by("post_news.id", "desc");	
       $this->db->join('category', 'post_news.category = category.id');
	   $ab = array('post_news.Type_Post'=>'Post','post_news.state'=>$state);  //'post_news.status'=>1,
	   $this->db->where($ab);
       $query = $this->db->get(); 	   
	   if($query->num_rows() != 0)
       {
          return $query->result_array();
       }
       else
       {
          return false;
       }
        */
       $cond  = "post_news.State IN('$state','Universal') and post_news.Type_Post='Post' ORDER BY post_news.id DESC LIMIT $start,$limit";
	   $SQL   = "select category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post from post_news,category WHERE post_news.Category=category.id AND $cond";
	   $query = $this->db->query($SQL);
       return $query->result_array();
   } 

  function getWhereDatasState($table,$limit,$field,$postty,$state)
   {
      $this->db->select('category.category,post_news.id,post_news.news_url,users.reporter_name,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url,post_news.username,post_news.created_at');
      $this->db->from('post_news'); 	 
      $this->db->join('category','post_news.category = category.id');
      $this->db->join('users','post_news.username  = users.reporter_id');
	  $this->db->order_by("post_news.created_at", "DESC");
	  
	  if($postty=='')
	  {
	    $a = 1;
	    $b = 0;
		$arr = array('category.category'=>$field,'post_news.subCategory'=>$b,'post_news.Type_Post'=>'Post','post_news.State'=>$state);//'post_news.status'=>$a,
		$this->db->where($arr);
		//$this->db->offset(5);
		$this->db->limit($limit);
      }
	  else
	  {
		$a = 1;
		$ab = array('category.category'=>$field,'post_news.Type_Post'=>$postty,'post_news.State'=>$state); //'post_news.status'=>$a, 
		$this->db->where($ab);		
		$this->db->limit($limit); 
	  }	  
	  $query = $this->db->get(); 
	  if($query->num_rows() != 0)
      {
        return $query->result_array();
      }
      else
      {
        return false;
      }    
   }  
   
   
   function getWhereDatassState($table,$limit,$field,$postty,$state)
   {
      /*
      $this->db->select('category.category,post_news.id,post_news.news_url,users.reporter_name,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url,post_news.Types,post_news.username,post_news.created_at');
      $this->db->from('post_news'); 	 
      $this->db->join('category','post_news.category = category.id');
      $this->db->join('users','post_news.username  = users.reporter_id');	  
	  $this->db->limit($limit);
	  $this->db->order_by("post_news.created_at", "DESC");  
	  $a = 1;
	  $b = 0;
	  $arr = array('category.category'=>$field,'post_news.subCategory'=>$b,'post_news.Type_Post'=>'Post','post_news.news_url!='=>$postty,'post_news.State'=>$state);//'post_news.status'=>$a,
	  $this->db->where($arr); 
	  $query = $this->db->get(); 
	  if($query->num_rows() != 0)
      {
        return $query->result_array();
      }
      else
      {
        return false;
      }   
      */
     $cond  = "post_news.State IN('$state','Universal') and category.category='$field' and post_news.subCategory=0 and post_news.Type_Post='Post' and post_news.news_url!='$postty' ORDER BY post_news.id DESC LIMIT $limit";
	  $SQL   = "select category.category,post_news.id,post_news.news_url,users.reporter_name,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url,post_news.Types,post_news.username,post_news.created_at from post_news,category,users WHERE users.reporter_id=post_news.username and post_news.Category=category.id AND $cond ";	   
	  //$SQL = 'select * from post_news as pn left JOIN category as cat on pn.Category = cat.id where cat.category ="$field" and pn.State IN ("$state","Universal") ORDER BY pn.id DESC';
	  $query = $this->db->query($SQL);
      return $query->result_array();
   }   


//--------------------------------------------------------------------------------   
   
   
   function getWhere($Title)
   {
	  $Post      = 'Post';
	  $DataWhere = array('status'=>1,'Title'=>$Title,'Type_Post'=>$Post);
	  $data      = $this->db->get_where('post_news',$DataWhere)->result_array();	
	  return $data; 	 
   } 
   



   
   function getRssDatas($table)
   {
	  $data = $this->db->get($table)->result_array();	
	  return $data; 	 
   }  




   
   function getAdvertiseData($table,$field)
   {
          
	  date_default_timezone_set("asia/kolkata");
      $curenttime = date("Y-m-d h:i a");
	  
	  //$curenttime = date("Y-m-d");
	  //$time = date("h:m:s");
	  //$SQL="SELECT image FROM advertise WHERE on_date <='". $curenttime ."' AND till_date >='". $curenttime ."' AND on_time <= '". $time ."' AND upto_time >= '". $time ."' and img_position ='".$field."'";
	 // $SQL="SELECT image FROM advertise where start_date<='". $curenttime ."' and stop_date >='".$curenttime ."' and img_position ='".$field."'";
	  
	  
	  //$SQL="SELECT * FROM advertise  WHERE ((start_date>='". $curenttime ."' and start_date<'". $curenttime ."') or (start_date<='". $curenttime ."' and start_date<'". $curenttime ."') or (start_date>='". $curenttime ."' and stop_date<='". $curenttime ."')) AND img_position='".$field."'";
	  
      $SQL="SELECT * FROM `advertise` WHERE start_date<'". $curenttime ."' AND stop_date>'". $curenttime ."' AND img_position='".$field."'";
	   // $SQL="SELECT image FROM advertise where start_date<= DATE_FORMAT(NOW(),'%Y-%m-%d %r') and stop_date >=DATE_FORMAT(NOW(),'%Y-%m-%d %r') and img_position ='".$field."'";
	  $query = $this->db->query($SQL);
      return $query->result_array();
   }  
   
   function getunique($url,$limit)
   {
     	$sql="SELECT category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post FROM post_news,category WHERE post_news.Type_Post='post' and category.id = post_news.Category and  post_news.news_url!='".$url."' ORDER BY id DESC  LIMIT $limit";
        $query = $this->db->query($sql);
        return $query->result_array();
   }


   function getuniquestate($url,$limit,$state)
   {
     	$sql="SELECT category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post FROM post_news,category WHERE post_news.Type_Post='post' and category.id = post_news.Category and post_news.State='".$state."' and  post_news.news_url!='".$url."' ORDER BY id DESC  LIMIT $limit";
        $query = $this->db->query($sql);
        return $query->result_array();
   }
   
   
    function getDatas($table,$start,$limit,$field)
    {
       $a=0;
	   $this->db->select('category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post');
       $this->db->from('post_news');
	   $this->db->offset($start);
	   $this->db->limit($limit);
	   $this->db->order_by("post_news.id", "desc");	
       $this->db->join('category', 'post_news.category = category.id');
	   $ab = array('post_news.Type_Post'=>'Post','post_news.status'=>1);  
	   $this->db->where($ab);
       $query = $this->db->get(); 	   
	   if($query->num_rows() != 0)
       {
          return $query->result_array();
       }
       else
       {
          return false;
       }     
   } 


   function getDatasState($table,$limit,$state)
   {
       $a=0;
	   $this->db->select('category.category,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post');
       $this->db->from('post_news');
	   //$this->db->offset($start);
	   $this->db->limit($limit);
	   $this->db->order_by("post_news.id", "desc");	
       $this->db->join('category', 'post_news.category = category.id');
	   $ab = array('post_news.Type_Post'=>'Post','post_news.State'=>$state); //'post_news.status'=>1, 
	   $this->db->where($ab);
       $query = $this->db->get(); 	   
	   if($query->num_rows() != 0)
       {
          return $query->result_array();
       }
       else
       {
          return false;
       }     
   } 





   
   function getViewData($field,$id,$status)
   {
	   $this->db->select('category.category,post_news.id,post_news.recent,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Priority,post_news.user_id,post_news.publishers,post_news.status,post_news.username');
       $this->db->from('post_news');	  
	   $this->db->order_by("post_news.id", "desc");	
       $this->db->join('category', 'post_news.category = category.id');
	   
	   if($status==3)
	   {
	      $ab = array('post_news.Type_Post'=>$field,'post_news.user_id '=>$id);  //,'post_news.recent'=>0
	   }
	   else
	   {
	       $ab = array('post_news.Type_Post'=>$field);  
	   }
	   $this->db->where($ab);
       $query = $this->db->get(); 	   
	   if($query->num_rows() != 0)
       {
          return $query->result_array();
       }
       else
       {
          return false;
       }     
   } 

   function getViewBlog($field,$id,$status)
   {
	   $this->db->select('post_news.id,post_news.Title,post_news.Contents,post_news.picture,post_news.user_id,post_news.created_at,post_news.username');
       $this->db->from('post_news');	  
	   $this->db->order_by("post_news.id", "desc");		   
	   if($status==3)
	   {
	      $ab = array('post_news.Types'=>$field,'post_news.user_id '=>$id);
	   }
	   else
	   {
	       $ab = array('post_news.Types'=>$field);  
	   }
	   $this->db->where($ab);
       $query = $this->db->get(); 	   
	   if($query->num_rows() != 0)
       {
          return $query->result_array();
       }
       else
       {
          return false;
       }     
   } 
   	
   
   function getRecord($table,$field)
   {		 
	  $DataWhere=array('type'=>$field);
	  $this->db->order_by('id',"DESC");
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;  	 
   }
        
   
   function getsubCategory($table,$field)
   {		 
	  $DataWhere = array('category'=>$field);	  
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;  	 
   }
   
   
   function getReportData($table,$field)
   {		 
	  $DataWhere = array('Type_Post'=>$field);
	  $this->db->order_by('id',"DESC");	  
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;  	 
   }
    	
  
   function getAllRecord($table,$field,$limit,$id,$status)
   {		 
	  if($status==3)
	  {
	    $DataWhere = array('Type_Post'=>$field,'user_id'=>$id);
	  }
	  else
	  {
		$DataWhere = array('Type_Post'=>$field);
	  }
	  
	  if($status==''&&$id=='')
	  {
		$a=1;
		$DataWhere = array('Type_Post'=>$field,'status'=>$a);  
	  }	 
	  
	  $this->db->order_by('id',"DESC"); 
	  if($limit!='')
	  {
	    $this->db->limit($limit);
	  }
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;  	 
   }
   
   
   
   function getAllVideos($table,$field)
   {
      $a=1;
	  $DataWhere = array('Type_Post'=>$field,'status'=>$a); 
	  $this->db->order_by('id',"DESC");
	  $this->db->limit(10);
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data; 	
   }
   
   function getAllBlogs($table,$field)
   {
      $a='blog';
	  $DataWhere = array('Type_Post'=>$field,'Types'=>$a); 
	  $this->db->order_by('id',"DESC");
	  //$this->db->limit(10);
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;	
   }
   
   function getWhereData($table,$limit,$field,$postty)
   {		
	  if($postty == '')
	  {
	    $DataWhere = array('Category'=>$field,'status'=>1);
	  }
      else	
	  {         
		$DataWhere = array('Category'=>$field,'Type_Post'=>$postty);
      }  
	  $this->db->order_by('id',"DESC");
	  $this->db->limit($limit);	 
	  $data = $this->db->get_where($table,$DataWhere)->result_array();	
	  return $data;
   }   
   
   
   
   function getWhereDatas($table,$limit,$field,$postty)
   {
      $this->db->select('category.category,post_news.id,post_news.news_url,users.reporter_name,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url,post_news.username,post_news.created_at');
      $this->db->from('post_news'); 	 
      $this->db->join('category','post_news.category = category.id');
      $this->db->join('users','post_news.username  = users.reporter_id');	 
	  //$this->db->limit($limit);
	  $this->db->order_by("post_news.created_at", "DESC");
	  if($postty=='')
	  {
	    $a = 1;
	    $b = 0;
		$arr = array('category.category'=>$field,'post_news.status'=>$a,'post_news.subCategory'=>$b,'post_news.Type_Post'=>'Post');
		$this->db->where($arr);
		//$this->db->offset(5);
		$this->db->limit($limit);
      }
	  else
	  {
		$a = 1;
		$ab = array('category.category'=>$field,'post_news.Type_Post'=>$postty,'post_news.status'=>$a);  
		$this->db->where($ab); 
		$this->db->limit($limit); 
	  }	  
	  $query = $this->db->get(); 
	  if($query->num_rows() != 0)
      {
        return $query->result_array();
      }
      else
      {
        return false;
      }    
   }   


 function getWhereDatass($table,$limit,$field,$postty)
   {
      $this->db->select('category.category,post_news.id,post_news.news_url,users.reporter_name,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url,post_news.Types,post_news.username,post_news.created_at');
      $this->db->from('post_news'); 	 
      $this->db->join('category','post_news.category = category.id');
      $this->db->join('users','post_news.username  = users.reporter_id');	  
	  $this->db->limit($limit);
	  $this->db->order_by("post_news.created_at", "DESC");  
	  $a = 1;
	  $b = 0;
	  $arr = array('category.category'=>$field,'post_news.status'=>$a,'post_news.subCategory'=>$b,'post_news.Type_Post'=>'Post','post_news.news_url!='=>$postty);
	  $this->db->where($arr); 
	  $query = $this->db->get(); 
	  if($query->num_rows() != 0)
      {
        return $query->result_array();
      }
      else
      {
        return false;
      }    
   }   
	

    
	
    
   function CheckLogin($table,$array)
   {	 
	  $data = $this->db->get_where($table,$array)->result_array();
	  return $data; 	 
   }    
	
	
	function Check($table,$array)
   {	 
	  $data = $this->db->get_where($table,$array)->result_array();
	  return $data; 	 
   } 
	
    
   function getsingleData($table,$id)
   {
	  if($id!='')
	  {
	     $ids=array('id'=>$id);
	     $data = $this->db->get_where($table,$ids)->result_array();	
	     return $data; 
	  }
      else
	  {         
	 	 $this->db->order_by("id","desc");
		 $data = $this->db->get($table)->result_array();	
		 return $data;
      } 
   } 
   
   function getsingleDatas($table,$id)
   {
	  if($id!='')
	  {
	     $ids=array('news_url'=>$id);
	     $data = $this->db->get_where($table,$ids)->result_array();	
	     return $data; 
	  }
      else
	  {         
	 	 $this->db->order_by("id","desc");
		 $data = $this->db->get($table)->result_array();	
		 return $data;
      } 
   } 
   


   
  function getsingleStateData($table,$id)
   {
	  if($id!='')
	  {
	     $ids=array('news_url'=>$id);
	     $data = $this->db->get_where($table,$ids)->result_array();	
	     return $data; 
	  }
      else
	  {         
	 	 $this->db->order_by("id","desc");
		 $data = $this->db->get($table)->result_array();	
		 return $data;
      } 
   } 
   

   
   
   function getcategory($table)
   {
	 $this->db->order_by("category","ASC");
	 $data = $this->db->get($table)->result_array();	
	 return $data;  
   }
   
   function checkcategory($table,$category)
   {	 
	 $ids=array($table=>$category);
	 $data = $this->db->get_where($table,$ids)->result_array();		
	 return $data;  
   }
   
   
   
   function getAllMenu($table,$id)
   {	
	     $ids=array('user_id'=>$id);
	     $data = $this->db->get_where($table,$ids)->result_array();	
	     return $data;	   
   } 
   
    	 
   
   function getsubAdmin($table,$id)
   {	
	     $ids  = array('type'=>$id);
	     $data = $this->db->get_where($table,$ids)->result_array();	
	     return $data;
   }    
	
   function getuserssubadmin($ids)
   {	
      if($ids!='edit')
	  {
        $SQL="SELECT users.id,users.username FROM users LEFT OUTER JOIN menu ON users.`id` = menu.`user_id` WHERE menu.`user_id` IS NULL AND type='sub_admin'";
      }
	  else
	  {
		$SQL="SELECT users.id,users.username FROM users,menu WHERE users.id=menu.user_id AND type='sub_admin'";  
	  }
	  $query = $this->db->query($SQL);
      return $query->result_array();		 
   }    
	
   
   function getsubcategoryData($table,$id)
   {
	  $ids=array('category'=>$id);
	  $data = $this->db->get_where($table,$ids)->result_array();	
	  return $data; 	    
   }     
    	
  
   function data_count($var,$id,$repid,$rool) 
   {      
	 if('reporter'!=$rool)
	 {
	    $ids=array('Type_Post'=>$var);
	 }
	 else
	 {
	    $ids=array('Type_Post'=>$var,'username'=>$repid);
	 }
	  $this->db->where($ids);
	  $num_rows = $this->db->count_all_results('post_news');
      return $num_rows;      
  
   } 
    	
  
   function data_counts($var,$id,$repid,$rool) 
   {	
	  if('reporter'!=$rool)
	  {
	     $ids=array('Type_Post'=>$var,'status'=>$id);
	  }
	  else
	  {
	    $ids=array('Type_Post'=>$var,'status'=>$id,'username'=>$repid);
	 } 
	   $this->db->where($ids);
	   $num_rows = $this->db->count_all_results('post_news');
	   return $num_rows;	
   }

   function reporter_counts() 
   {  
	  $ids=array('type'=>"reporter");	 
	  $this->db->where($ids);
	  $num_rows = $this->db->count_all_results('users');
	  return $num_rows;	
   }
  
   function deleteRecord($table,$id) 
   {
      $this->db->where('id', $id);
      $num_rows = $this->db->delete($table);
      return $num_rows;
   }  
    
	
   
   function UpdateData($table,$data,$id)
   {
	 $this->db->where('id', $id);
     $this->db->update($table, $data);  
	 return $id;
   }
     
	 
   
   function MenuAlocationJoin()
   {
	  $this->db->select("menu.id,users.username,users.email,users.phone");
      $this->db->from('menu');
      $this->db->join('users', 'menu.user_id = users.id');
      $this->db->order_by('menu.id',"desc");
      $query = $this->db->get();
      if($query->num_rows() != 0)
      {
        return $query->result_array();
      }
      else
      {
        return false;
      }  
   }
   	
   
   
   function subcategorysnews($id)
   {
	   $a=0; 	   
       $multipleWhere = array('category.category' => $id, 'post_news.subCategory!=' => $a,'post_news.status!=' => $a);
	   $this->db->select('subcategory.subcategory,post_news.id,post_news.news_url,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,users.username,post_news.Type_Post,category.category');
       $this->db->from('post_news'); 
       $this->db->join('subcategory', 'post_news.subCategory = subcategory.id');
	   $this->db->join('category', 'post_news.category = category.id');
	   $this->db->join('users', 'post_news.user_id = users.id');
       $this->db->where($multipleWhere);
	   $this->db->order_by('post_news.id',"desc");
       $query = $this->db->get(); 
	   if($query->num_rows() != 0)
       {
         return $query->result_array();
       }
       else
       {
         return false;
       }     
   }
      
   
}   

