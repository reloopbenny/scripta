<?php
$url = "http://image.baikalminer.com/loginbanner.jpg";
$img_file = "./baikal_banner.jpg";
$data = file_get_contents($url);
if($data) {
    $fp = fopen($img_file, "w");
    fwrite($fp, $data);
    fclose($fp);
}

if ( isset($_SESSION['_logged_']) and ($_SESSION['_logged_'] === true) )  {
        header('location: index.html');
        exit();
}
?>


<!DOCTYPE html>
<html lang="en" ng-app="Scripta">
<head>
  <meta charset="utf-8">
  <title>Scr|pta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link href="css/alertify.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
</head>

<div id="productlist" style="width: 100%; height: 136px; overflow: hidden; position: relative;">
  <a href="#" onClick="window.open('http://www.baikalminer.com', '_blank')">
  <img style="position: absolute; top:0; left:50%; margin-left: -960px" src="./baikal_banner.jpg" /></div>
</div>

<body class="hold-transition lockscreen">    
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="http://www.baikalminer.com/products.asp"><b>Baikal</b>Miner</a>
      </div>
      
      <div class="lockscreen-item">        

        <form class="lockscreen-credentials" name="formLogin" id="formLogin" method="post">
        
        
          <div class="input-group">
             <input type="password" placeholder="Password" id="userPassword" name="userPassword"  class="form-control">
            <div class="input-group-btn">
              <button class="btn" id=loginbutton type="button" ><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
          
          
        </form><!-- /.lockscreen credentials -->

      </div><!-- /.lockscreen-item -->
      
    </div>


  <footer>
    <div class="container text-center"> 
      <hr />
      <p>
        <a href='http://http://www.lateralfactory.com/scripta/'>Scripta</a>, by <a href='http://www.lateralfactory.com'>Lateral Factory</a> under GPLv3 License
      </p>
    </div>
  </footer>
  <script src="js/alertify.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
      if (window.location.protocol != "http:")
          window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);

      $(document).ready(function() {
		$(document).keypress(function(e) {
			
			if(e.which == 13) {
				e.preventDefault();
			}
		});
		
		$('#loginbutton').click(function(e){
			e.preventDefault();
			
			var sData = $("#formLogin").serialize();
			$.ajax({
				type: "POST",
				url: "f_login.php",
				data: sData,
				success: function(returnMessage) {
					if (returnMessage == 1) 
						window.location = "index.php";
					else
						alert("Incorrect password");
					
				},
				error: function(returnMessage) {
					alert("Error");	
					window.location = "login.php";
				}
			});
		});
	});
  </script>
</body>
</html>


