<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    	<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Get the latest news from North East Region Assam, Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Sikkim only from NewsNER India.">
        <meta name="keywords" content="Latest News on Politics, Education, Science & Technology, Current affairs, Health & Lifestyle, Weather, Sports, Crime,Business, Videos,North East News India"> 
    	<title>North East India News - Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura</title>
    	<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css?vs=2">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="img/NewsNER Icon.png" type="image/gif" sizes="10x10">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="error">
                    <h1>Oops ! This Page Could Not Be Found</h1>
                    <p>The page you are looking for might have been removed had its name changed or its temporary unavailable.</p>
                    <a class="btn btn-primary" href="index.php" role="button">Go To Homepage</a>
                </div>
            </div>
        </div>
        <nav class="navbar fixed-bottom navbar-light bg-light" style="padding-top: inherit; padding-bottom: inherit; box-shadow: 10px 10px 16px #000000;">
            <button class="btn" onclick="goHome()" style="font-size: 12px;"><i class="fa fa-home"></i><br>Home</button>
            <button class="btn" onclick="goTranding()" style="font-size: 12px;"><i class="fa fa-line-chart"></i><br>Tranding</button>
            <button class="btn" onclick="goSearch()" style="font-size: 12px;"><i class="fa fa-search"></i><br>Search</button>
            <button class="btn" onclick="goVideo()" style="font-size: 12px;"><i class="fa fa-play-circle"></i><br>Videos</button>
            <button class="btn" onclick="openNav()" style="font-size: 12px;"><i class="fa fa-bars"></i><br>States</button>
        </nav>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                    <a href="states?State=Arunachal Pradesh">Arunachal Pradesh</a>
                    <a href="states?State=Assam">Assam</a>
                    <a href="states?State=Manipur">Manipur</a>
                    <a href="states?State=Meghalaya">Meghalaya</a>
                    <a href="states?State=Mizoram">Mizoram</a>
                    <a href="states?State=Nagaland">Nagaland</a>
                    <a href="states?State=Sikkim">Sikim</a>
                    <a href="states?State=Tripura">Tripura</a>
              </div>
        </div>
    </body>
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
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.timeago.js"></script>
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
    <script>
        jQuery(document).ready(function() {
          jQuery("time.timeago").timeago();
        });
    </script>
    <script>
        function goHome() {
            window.open('index.php', '_self');
        }
    </script>
    <script>
        function goVideo() {
            window.open('video', '_self');
        }
    </script>
    <script>
        function goTranding() {
            window.open('tranding', '_self');
        }
    </script>
    <script>
        function goSearch() {
            window.open('search', '_self');
        }
    </script>
</html>