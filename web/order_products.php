<?php
session_start();
if(isset($_SESSION['user_firstname'])){
}else{
		header('Location: index.php?login=error');
}
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sasin'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$id = $_GET['id'];
$sql = 'SELECT id,product,location,weight,unit_price,phone_number,description,dateC FROM product_posts WHERE id='.$id.';';
$query = mysqli_query($conn, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
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
					<div class="clearfix">
						
					</div>
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
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active list-border" href="user_page.php">Home</a></li>
									<!--<li><a href="about.php">About</a></li>-->
									<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="hvr-bounce-to-bottom" href="view_posts.php">View Posts</a></li>
										<li><a class="hvr-bounce-to-bottom" href="create_posts.php">Create Posts</a></li>
									</ul>
									<li><a class="list-border1 active" href="log out.php">Log out</a></li>
								</li>
								
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
		  <section id="">
                        <h3 class="box-title">Posted Product</h3>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Location</th>
                                    <th>Weight</th>
                                    <th>Unit Price</th>
                                    <th>Phone Number</th>
                                    <th>Description</th>
                                    <th>Date Posted</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if ($query-> num_rows > 0) {
                                while ($row = mysqli_fetch_array($query))
                                {
                                echo
                                '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$row['product'].'</td>
                                    <td>'.$row['location'].'</td>
                                    <td>'.$row['weight'].'</td>
                                    <td>'.$row['unit_price'].'</td>
                                    <td>'.$row['phone_number'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td>'.$row['dateC'].'</td>
                                </tr>';
                                $no++;
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                    </section>
		
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