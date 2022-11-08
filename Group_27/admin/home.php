<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title> Wonderland </title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Wonderland </a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<nav style = "background-color:rgb(0, 0, 0);" >
		<ul class = "nav nav-pills">
			<li class = "active"><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room/Transaction</a></li>			
		</ul>
			</nav>
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
		<nav style = "background-color:rgb(0, 0, 0);" >
			<div class = "panel-body">
				<center><img src = "../images/main.jpg" width="800px" heigh="600px" /></center>
			</div>
		</nav>	
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2022 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>