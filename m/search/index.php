<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>North East India News - Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css?vs=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/NewsNER Icon.png" type="image/gif" sizes="10x10">
</head>
<body>
	<div class="container-fluid header">
  		<div class="row">
  			<div class="header-logo">
  				<img class="logo" alt="" src="../img/logo.jpg">
  			</div>
  		</div>
  	</div>
	<nav class="navbar fixed-bottom navbar-light bg-light">
	  	<button class="btn" onclick="goHome()" style="font-size: 12px;"><i class="fa fa-home"></i><br>Home</button>
		<button class="btn" onclick="goTranding()" style="font-size: 12px;"><i class="fa fa-line-chart"></i><br>Tranding</button>
		<button class="btn" onclick="goSearch()" style="font-size: 12px;"><i class="fa fa-search"></i><br>Search</button>
		<button class="btn" onclick="goVideo()" style="font-size: 12px;"><i class="fa fa-play-circle"></i><br>Videos</button>
		<button class="btn" onclick="openNav()" style="font-size: 12px;"><i class="fa fa-bars"></i><br>States</button>
	</nav>
	<div id="myNav" class="overlay">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <div class="overlay-content">
		  		<a href="../states?State=Arunachal Pradesh">Arunachal Pradesh</a>
			    <a href="../states?State=Assam">Assam</a>
			    <a href="../states?State=Manipur">Manipur</a>
			    <a href="../states?State=Meghalaya">Meghalaya</a>
			    <a href="../states?State=Mizoram">Mizoram</a>
			    <a href="../states?State=Nagaland">Nagaland</a>
			    <a href="../states?State=Sikkim">Sikim</a>
			    <a href="../states?State=Tripura">Tripura</a>
		  </div>
	</div>
	<div class="container-fluid mainContainer">
    	<div class="row containerTitle">
    		<div class="search-box">
		    <input type="text" class="form-control" autocomplete="off" placeholder="Search News..." />
		    <div class="result"></div>
		    </div>
    	</div>
	</div>
	<div class="container-fluid extra" style="margin-top: 10px;">
		<div class="row containerTitle">
    		<span class="badge">MORE FROM NEWSNER</span>
    	</div>
    	<div class="row">
			<div class="card-below" style="width: 100%">
	      		<a href="../category?Category=3" class="badge badge-primary">Politics</a>
	    		<a href="../category?Category=2" class="badge badge-secondary">Business</a>
				<a href="../category?Category=8" class="badge badge-success">Lifestyle</a>
				<a href="../category?Category=6" class="badge badge-danger">Law</a>
				<a href="../category?Category=12" class="badge badge-warning">Crime</a>
				<a href="../category?Category=11" class="badge badge-info">Entertainment</a>
				<a href="../category?Category=5" class="badge badge-warning">Sports</a>
				<a href="../category?Category=13" class="badge badge-dark">Weather</a>
				<a href="../category?Category=14" class="badge badge-primary">Health</a>
	    		<a href="../category?Category=15" class="badge badge-secondary">Travel</a>
				<a href="../category?Category=7" class="badge badge-success">Education</a>
				<a href="../category?Category=4" class="badge badge-danger">Technology</a>
			</div>
    	</div>
	</div>
  <div class="container-fluid below" style="margin-top: 5px; align-items: center;">
    	<a href="https://www.facebook.com/NewsNerInd/" target="_blank" class="fa fa-facebook"></a>
	    <a href="https://twitter.com/NewsNerInd" target="_blank" class="fa fa-twitter"></a>
	    <a href="https://www.linkedin.com/in/newsner-india-67a978180/" target="_blank" class="fa fa-linkedin"></a>
	    <a href="https://www.youtube.com/channel/UCV1v0CP0I1ck70ZgJErijOg" target="_blank" class="fa fa-youtube"></a>
	    <a href="https://www.instagram.com/newsnerind/" target="_blank" class="fa fa-instagram"></a>
	    <a href="https://in.pinterest.com/newsnerind/" target="_blank" class="fa fa-pinterest"></a>
	    <a href="https://www.reddit.com/user/newsnerindia" target="_blank" class="fa fa-reddit"></a>
	    <a href="https://www.quora.com/profile/NewsNER-India" target="_blank" class="fa fa-quora"></a>
	</div>
	<div class="container-fluid" style="margin-top: 10px;margin-bottom: 30px;">
    	<div class="row">
			<div class="card-footer" style="width: 100%">
				<img class="logo" alt="" src="../img/logo.jpg">
				<div class="fb-like" style="text-align: right;" data-href="https://www.facebook.com/NewsNerInd/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				<p class="text-left" style="font-size: 10px;">© Newsner 2019</p>
			</div>
    	</div>
	</div>
	<script>
	    function openNav() {
	    	  document.getElementById("myNav").style.height = "100%";
	    }
	   	function closeNav() {
	    	  document.getElementById("myNav").style.height = "0%";
	    }
    </script>
    <div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
	<script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../js/jquery.timeago.js"></script>
    <script>
		function tick3(){
			$('#ticker_03 li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker_03')).css('opacity', 1); });
		}
		setInterval(function(){ tick3 () }, 4000);
		$.ajax ({
			 url: 'http://search.twitter.com/search.json',
			 data: 'q=%23javascript',
			 dataType: 'jsonp',
			 timeout: 10000,
			 success: function(data){
			 	if (!data.results){
			 		return false;
			 	}
			 	for( var i in data.results){
			 		var result = data.results[i];
			 		var $res = $("<li />");
			 		$res.append('<img src="' + result.profile_image_url + '" />');
			 		$res.append(result.text);

			 		console.log(data.results[i]);
			 		$res.appendTo($('#ticker_04'));
			 	}
				setInterval(function(){ tick4 () }, 4000);

				$('#example_4').show();
			 }
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.search-box input[type="text"]').on("keyup input", function(){
		        /* Get input value on change */
		        var inputVal = $(this).val();
		        var resultDropdown = $(this).siblings(".result");
		        if(inputVal.length){
		            $.get("support.php", {term: inputVal}).done(function(data){
		                // Display the returned data in browser
		                resultDropdown.html(data);
		            });
		        } else{
		            resultDropdown.empty();
		        }
		    });
		});
	</script>
	<script>
		jQuery(document).ready(function() {
		  jQuery("time.timeago").timeago();
		});
	</script>
	<script>
		function goHome() {
			window.open('../', '_self');
		}
	</script>
	<script>
		function goVideo() {
			window.open('../video', '_self');
		}
	</script>
	<script>
		function goTranding() {
			window.open('../tranding', '_self');
		}
	</script>
</body>
</html>
