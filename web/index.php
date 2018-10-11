<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SasinFarm Foods</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
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
		<!-- font to be used -->
		<link href="//fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
		<!-- //font to be used -->
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
		<div class="banner-top">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>FRESH BANANAS FROM THE FARM<span>BANANAS</span></h3>
										<p>More than 100 billion bananas are eaten every year in the world, making them the fourth most popular agricultural product.</p>
										<div class="w3-button">
											<a href="single.html">More</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top1">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>READY STRAWBERRIES FOR SALE<span>STRAWBERRIES</span></h3>
										<p>Stop and smell the strawberries! Considered members of the rose family, they give off a sweet fragrance as they grow on bushes.</p>
										<div class="w3-button">
											<a href="single.html">More</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top2">
								<div class="container">
									<div class="agileits-banner-info">
										<h3>RIPE ORANGES <span>ORANGES</span></h3>
										<p>Oranges were known as the fruits of the Gods. They were often referred as the ‘golden apples’ that Hercules stole.In fact,Oranges and orange blossoms are a symbol of love.</p>
										<div class="w3-button">
											<a href="single.html">More</a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<script src="js/responsiveslides.min.js"></script>
				<script>
							$(window).load(function () {
							// Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 3000,
								namespace: "callbacks",
								before: function () {
								$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
							});
						
							});
				</script>
				<!--banner Slider starts Here-->
			</div>
		</div>
		<!-- banner -->
		<div class="banner">
			<div class="header">
				<div class="container">
					<div class="header-left">
						<div class="w3layouts-logo">
							<h1>
							<a href="index.html">SasinFarm Foods <span><sup>TM</sup></span></a>
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
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active list-border" href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a class="list-border1" href="log in.php">Log in </a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="w3-welcome-grids">
				<div class="col-md-5 w3l-welcome-left">
					<h2>SasinFarmFoods <span>Karibu</span></h2>
					<p>We all desire quality and good food on our table.We do our best to encourage the small scale farmers to keep on fulfilling our desires.We are proud of you farmers!</p>
					<div class="w3ls-button">
						<a href="single.html">More</a>
					</div>
				</div>
				<div class="col-md-7 w3l-welcome-right">
					<div class="w3l-welcome-right-grids">
						<div class="col-sm-5 w3l-welcome-right-img">
							<img src="images/sasinlogo.png" alt="Your browser does not support this image file" />
						</div>
						<div class="col-sm-7 w3l-welcome-right-img1">
							<img src="images/happy.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="agileits-services-grids">
				<div class="col-md-4 agileinfo-services-left">
					<h3>Our <span>Services</span></h3>
					<p>Our small scale farmers are finding it difficult to access the buyers directly.Because we have witnessed the various challenges farmers go through in finding a market,we SasinFarm Foods have provided this platform from where the registered small-scale farmers can access the buyers directly.</p>
				</div>
				<div class="col-md-8 agileinfo-services-right">
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-money" aria-hidden="true"></i>
						<h4>Save Money Now!</h4>
						<p>By using this platform you are assured of finding cheap quality produce directly from the farmers.</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid agile-services1">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h4>Find Buyers</h4>
						<p>Sellers will definately find a wider market for your produce to avoid losses</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-heart" aria-hidden="true"></i>
						<h4>The Best!</h4>
						<p>We ensure that you get the best agricultural products available in the local market.</p>
					</div>
					<div class="col-md-6 w3-agileits-services-grid">
						<i class="fa fa-plane" aria-hidden="true"></i>
						<h4>Awards</h4>
						<p>Each year,the farmer with the highest rating of produce gets a trip to Israel for a vacation.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="wthree-news-grids">
				<div class="col-md-4 agileinfo-services-left agile-news-left">
					<h3>SasinFarm Foods <span>Latest News</span></h3>
					<p>Find the latest news on the current market prices of agricultural produce.We have also added some informative videos on practical ways to handle agricultural produce</p>
				</div>
				<div class="col-md-8 agile-news-right">
					<div class="col-md-6 agile-news-right-info">
						<div class="col-md-6 agile-news-img">
							
						</div>
						<div class="col-md-6 agile-news-img-info">
							<h5><a href="single.html">Grapes</a></h5>
							<div class="agileits-w3layouts-border"> </div>
							<p>The demand for grapes is increasing in the local market.</p>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i> 9th Aug,2018</h6>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agile-news-right-info">
						<div class="col-md-6 agile-news-img agile-news-img1">
							
						</div>
						<div class="col-md-6 agile-news-img-info">
							<h5><a href="single.html">Oranges</a></h5>
							<div class="agileits-w3layouts-border"> </div>
							<p>There is a drasctic shortage of quality oranges for supply in the industries.</p>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i> 15th Feb,2018</h6>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
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
						<li class="text"><a href="blog.html">Blog</a></li>
						<li class="text"><a href="contact.html">Contact</a></li>
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
	<script src="js/responsiveslides.min.js"></script>
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
