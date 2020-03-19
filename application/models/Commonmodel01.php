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
   
   function getRssDatas($table)
   {
	  $data = $this->db->get($table)->result_array();	
	  return $data; 	 
   }  
   
   function getAdvertiseData($table,$field)
   {	
      //$SQL="SELECT image FROM ". $table . " where  on_date <=CURRENT_DATE AND till_date>=CURRENT_DATE and img_position ='".$field."'";     
	  date_default_timezone_set("asia/kolkata");
      $curenttime = date("Y-m-d");
	  $time = date("h:m:s");
	  //$SQL="SELECT image FROM advertise where start_date<='". $curenttime ."' and stop_date >='".$curenttime ."' and img_position ='".$field."'";
	 
	    $SQL="SELECT image FROM advertise WHERE on_date <='". $curenttime ."' AND till_date >='". $curenttime ."' AND on_time <= '". $time ."' AND upto_time >= '". $time ."' and img_position ='".$field."'";
	 
	 
	 
	 // $SQL="SELECT image FROM advertise where start_date<= DATE_FORMAT(NOW(),'%Y-%m-%d %r') and stop_date >=DATE_FORMAT(NOW(),'%Y-%m-%d %r') and img_position ='".$field."'";
	 
	  $query = $this->db->query($SQL);
      return $query->result_array();	 
   }  
   
   
   
   function getDatas($table,$limit,$field)
   {
       $a=0;
	   $this->db->select('category.category,post_news.id,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post');
       $this->db->from('post_news'); 
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
   
   function getViewData($field,$id,$status)
   {
	   $this->db->select('category.category,post_news.id,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Priority,post_news.user_id,post_news.publishers,post_news.status,post_news.username');
       $this->db->from('post_news');	  
	   $this->db->order_by("post_news.id", "desc");	
       $this->db->join('category', 'post_news.category = category.id');
	   
	   if($status==3)
	   {
	      $ab = array('post_news.Type_Post'=>$field,'post_news.user_id '=>$id);  
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
      $this->db->select('category.category,post_news.id,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,post_news.Type_Post,post_news.Types,post_news.Url');
      $this->db->from('post_news'); 	 
      $this->db->join('category','post_news.category = category.id');	  
	  $this->db->limit($limit);
	  $this->db->order_by("post_news.id", "desc");
	  if($postty=='')
	  {
	    $a = 1;
		$arr = array('category.category'=>$field,'post_news.status'=>$a,'post_news.Type_Post'=>'Post');
		$this->db->where($arr);
      }
	  else
	  {
		$a = 1;
		$ab = array('category.category'=>$field,'post_news.Type_Post'=>$postty,'post_news.status'=>$a);  
		$this->db->where($ab);  
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
	   $this->db->select('subcategory.subcategory,post_news.id,post_news.Title,post_news.Contents,post_news.picture,post_news.Category,users.username,post_news.Type_Post,category.category');
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

