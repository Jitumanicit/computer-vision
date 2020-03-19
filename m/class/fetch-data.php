<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'news');
class fetch_data
	{
 		function __construct()
 		{
			$mysqli = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			$this->dbh=$mysqli;
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			}
 		}

 		public function top_breaking_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND news_type = 'breaking-news' ORDER BY id DESC LIMIT 10");
 			return $result;
 		}
 		public function top_tranding_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT post_news.id, post_news.picture, post_news.created_at, category.category, post_news.Title FROM post_news, category WHERE post_news.status = '1' AND post_news.Category = category.id AND post_news.news_type = 'hot-trending' ORDER BY post_news.id DESC LIMIT 10 OFFSET 10");
 			return $result;
 		}
 		public function index_politics_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '3' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_middle_advertising()
 		{
 			$result=mysqli_query($this->dbh,"SELECT image FROM advertise WHERE img_position = 'Top' ORDER BY id DESC");
 			return $result;
 		}
 		public function index_business_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '2' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_lifestyle_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '8' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_technology_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '4' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_sports_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '5' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_law_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '6' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_crime_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '12' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_bellow_advertising()
 		{
 			$result=mysqli_query($this->dbh,"SELECT image FROM advertise WHERE img_position = 'Middle' ORDER BY id DESC");
 			return $result;
 		}
 		public function index_entertainment_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '11' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_education_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '7' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_weather_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '13' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_travel_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '15' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_health_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '14' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function index_bottom_advertising()
 		{
 			$result=mysqli_query($this->dbh,"SELECT image FROM advertise WHERE img_position = 'Bottom' ORDER BY id DESC");
 			return $result;
 		}
 		public function tranding_page_tranding_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND news_type = 'hot-trending' ORDER BY id DESC");
 			return $result;
 		}
 		public function video_page_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND Type_Post = 'Video' ORDER BY id DESC");
 			return $result;
 		}
 		public function single_news_page($id)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE id = '$id'");
 			return $result;
 		}
 		public function single_page_advertising()
 		{
 			$result=mysqli_query($this->dbh,"SELECT image FROM advertise WHERE img_position = 'Center' ORDER BY id DESC");
 			return $result;
 		}
 		public function single_page_news_based_category($find_category)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND Category = '$find_category' AND news_type = 'hot-trending' ORDER BY id DESC LIMIT 5");
 			return $result;
 		}
 		public function single_page_news_all_category($find_category)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND category = '$find_category' ORDER BY id DESC");
 			return $result;
 		}
 		public function single_page_tranding_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND news_type = 'hot-trending' ORDER BY id DESC LIMIT 5");
 			return $result;
 		}
 		public function state_top_breaking_news()
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND news_type = 'breaking-news' ORDER BY id DESC LIMIT 10");
 			return $result;
 		}
 		public function state_breaking_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND news_type = 'breaking-news' ORDER BY id DESC LIMIT 10");
 			return $result;
 		}
 		public function state_tranding_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT post_news.picture, post_news.Title, post_news.id, category.category, post_news.created_at FROM post_news, category WHERE post_news.State = '$State' AND status = '1' AND news_type = 'hot-trending' AND post_news.Category = category.id ORDER BY post_news.id DESC LIMIT 10");
 			return $result;
 		}
 		public function state_politics_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '3' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_business_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '2' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_lifestyle_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '8' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_technology_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '4' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_sports_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '5' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_law_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '5' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_crime_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '12' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_entertainment_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '11' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_education_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '7' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_weather_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '13' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_travel_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '15' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function state_health_news($State)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE State = '$State' AND status = '1' AND category = '14' ORDER BY id DESC LIMIT 4");
 			return $result;
 		}
 		public function category_top_news($Category)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND Category = '$Category' ORDER BY id DESC LIMIT 1");
 			return $result;
 		}
 		public function category_page_all_news($Category)
 		{
 			$result=mysqli_query($this->dbh,"SELECT * FROM post_news WHERE status = '1' AND Category = '$Category' ORDER BY id DESC");
 			return $result;
 		}
	}
?>