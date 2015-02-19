<!DOCTYPE html>
<html>
<head>

	<!-- Hanterar scaling till mobila enheter -->
	<meta charset="iso-8859-1">
	
	<!-- <script src="js/javascript.js"></script> -->
	<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="include/stylesheet.css">

	<title>Ola Hansson</title>
</head>
<body>

<?php 
require_once 'core/init.php';
?>

<script src="include/bootstrap/js/bootstrap.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="include/bootstrap/js/bootstrap.js"></script>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Ola Hansson</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="index"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
					<li id="about"><a href="about.php">About me</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://localhost/peab" target="_blank">PEAB</a></li>
							<li class="divider"></li>
							<li><a href="http://localhost/FIFAlottning" target="_blank">FIFA-lottning</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li id="contact"><a href="contact.php"><i class="fa fa-envelope-o"></i>  Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="jumbotron">
	<h1>Hello!</h1>
	<div class="row">
		<div class="col-md-6">
			<h3>You have come to the webpage of Ola Hansson, developer and currently a student at LTH. Feel free to look around and contact me if you have any questions!</h3>
		</div>
	</div>
	</div>



</div>