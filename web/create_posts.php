<?php
session_start();
if(isset($_SESSION['user_firstname'])){
	//echo 'Hi, ' . $_SESSION["user_firstname"] . ' ' . $_SESSION["user_lastname"];
}else{
		header('Location: index.php?login=error');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SasinFarm Foods</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="keywords" content="Harvest Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link rel="shortcut icon" type="image/png" href="sasinlogo.png"/>
		<!-- bootstrap-css -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--// bootstrap-css -->
		<!-- css -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--// css -->
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome icons -->
		<!-- font -->
		<link href="//fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
		<!-- //font -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	</head>
	<body>
		<!-- banner -->
		<div class="banner about-banner">
			<div class="header">
				<div class="container">
					<div class="header-left">
						<div class="w3layouts-logo">
							<h1>
							<a href="index.php">SasinFarm Foods <span><sup>TM</sup></span></a>
							</h1>
						</div>
					</div>
					<div class="header-right">
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="top-nav">
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<ul class="nav navbar-nav">
								<li><a class="active list-border" href="user_page.php">Home</a></li>
								<!--<li><a href="about.php">About</a></li>-->
								<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="view_posts.php">View</a></li>
									<li><a class="hvr-bounce-to-bottom" href="create_posts.php">Create</a></li>
								</ul>
								<li><a class="list-border1 active" href="log out.php">Log out</a></li>
								
								<div class="names">
									<?php
									echo 'Hi, ' . $_SESSION["user_firstname"] . ' ' . $_SESSION["user_lastname"];
									?>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
		<div class="about-heading">
			<div class="container">
				<h2>Create a Post</h2>
			</div>
		</div>
		<!-- contact -->
		<div class="contact">
			<div class="container">
				<div class="agile-contact-form">
					
					<form name="sell_products" action="process_post.php"method="POST" enctype="multipart/form-data">
						<fieldset class="fieldset2">
							<label for="product_name">Product:</label><br>
							<select name="product_name" class="select" name="product" style="width:100%" >
								<?php
								include_once "connection.php";
								$sql = "SELECT product_name FROM products";
								if (!$result = $connection-> query($sql)) {
									echo $connection->error;
								}
								if ($result-> num_rows > 0) {
										echo
										"<option value='$product_name'>--products--</option>";
								while($row = $result-> fetch_assoc()) {
									$product_name = $row['product_name'];
									echo
										"<option value='".$product_name."'>".$product_name."</option>";
								}
								}
								?>
							</select>
							<label for="location">Location:</label><br>
							<select name="location_name" class="select" name="location" style="width:100%" >
								<?php
								include_once "connection.php";
								$sql = "SELECT location_name FROM location";
								if (!$result = $connection-> query($sql)) {
									echo $connection->error;
								}
								if ($result-> num_rows > 0) {
										echo
										"<option value='$location_name'>--location--</option>";
								while($row = $result-> fetch_assoc()) {
									$location_name = $row['location_name'];
									echo
										"<option value='".$location_name."'>".$location_name."</option>";
								}
								}
								?>
							</select>
							<label for="weight">Weight(Kilograms):</label><br>
							<input type="text" id="weight" name="weight" class="select" style="width:100%" required>
							<label for="price">Unit Price(kshs/kg):</label><br>
							<input type="text" id="unit_price" class="select" name="unit_price" style="width:100%" required><br>
							<label for='image'>Please add an Image of your Product:</label>
							<input type="file" accept="image/*" name="file">
							<label for="comment">Description:</label><br>
							<textarea class="select" rows="3" id="comment" name="description" style="width: 100%" required></textarea><br>
							<label for="weight">Phone Number:</label><br>
							<input type="text" id="phone_number" name="phone_number" class="select" style="width:100%" required>
							<label for="weight">Current Date:</label><br>
							<input id="date" name="date" class="select" style="width:100%" disabled />
							<script type="text/javascript">
							document.getElementById("date").value = new Date();
							</script><br>
							<button type="submit "class="btn1" value="submit" name="submit">Create Post</button>
						</fieldset>
						
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="agile-footer-grids">
					<div class="col-md-3 w3-agile-footer-grid">
						<h3>About</h3>
						<p>Our priority as SasinFarm Foods is to make sure that both the farmers and the buyers find a favourable platform to conduct their business</p>
					</div>
					<div class="col-md-3 w3-agile-footer-grid">
						<h3>Events</h3>
						<ul>
							<li>12th Nov,2018 <a href="single.html">Symposium Talks</a></li>
							<li>10th Dec,2018<a href="single.html">Machinery use</a></li>
							<li>24th Jan,2019<a href="single.html">Technology Innovation</a></li>
							<li>17th Mar,2019<a href="single.html">Saving money </a></li>
							<li>09th Dec,2019 <a href="single.html">Quality Seeds</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3-agile-footer-grid">
						<h3>Navigation</h3>
						<ul>
							<li class="text"><a href="about.html">About</a></li>
							<li class="text"><a href="typography.html">Typography</a></li>
							<li class="text"><a href="icons.html">Icons</a></li>
							<li class="text"><a href="gallery.html">Gallery</a></li>
							<li class="text"><a href="log in.php">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3-agile-footer-grid">
						<h3>Newsletter</h3>
						<form action="#" method="post">
							<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //footer -->
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p>| © 2018 SasinFarm Foods . All Rights Reserved | </p>
			</div>
		</div>
		<!-- //copyright -->
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/
									
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		<!-- //here ends scrolling icon -->
	</body>
</html>