<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<nav style = "background-color:rgb(0, 0, 0);" >
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |		
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
	</ul>
	</nav>	
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
		
		</ol>
		<div  class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/a1.jpg" style = "width:100%; height:600px;" />
			</div>
		
			<div class="item">
				<img src="images/b2.jpg" style = "width:100%; height:600px;"  />
			</div>
		
			<div class="item">
				<img src="images/c3.jpg" style = "width:100%; height:600px;" />
			</div>
		
			<div class="item">
				<img src="images/d5.jpg" style = "width:100%; height:600px;" />
			</div>
			
			<div class="item">
				<img src="images/e5.jpg" style = "width:100%; height:600px;" />
			</div>
			
			<div class="item">
				<img src="images/f.jpeg" style = "width:100%; height:600px;" />
			</div>
			
			
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2022 </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>