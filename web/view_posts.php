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
		 <link href="css/3-col-portfolio.css" rel="stylesheet">
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
									<li><a class="hvr-bounce-to-bottom" href="view_posts.php">View Post</a></li>
									<li><a class="hvr-bounce-to-bottom" href="create_posts.php">Create Post</a></li>
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

		<div class="container">
		<div class="row">
			<?php
// Include the database configuration file
include 'connection.php';
   	$query=mysqli_query($connection,"select count(id) from `product_posts`");
	$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
 
	$page_rows = 6;
 
	$last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['page'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['page']);
	}
 
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
 
	$paginationCtrls = '';
 
	if($last != 1){
 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'" class="btn btn-default">Next</a> ';
    }
	}
// Get images from the databaseweight,
$query = $connection->query("SELECT id,fileName,product,weight,description,dateC FROM product_posts  ORDER BY dateC DESC $limit");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["fileName"];
        $product= $row['product'];
        $description= $row['description'];
        $dateC= $row['dateC'];
        $id = $row['id'];
        
       
        echo '<div class="col-lg-4 col-sm-6 portfolio-item">
				 <div class="card">
					<a href="order_products.php?id='.$id.'"><img class="card-img-top" src="'. $imageURL.'" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="order_products.php?id='.$id.'">'.$product.'</a>
						</h4>
						<p class="card-description">'.$description.'</p>
					    <p class="card-date"><i>Date posted:    '.$dateC.'</i></p>
					</div>
				</div>
			</div>'

           ?>

<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

			
		</div>
<div class="pagination"><?php echo $paginationCtrls; ?></div>
	    </div>
	 
		<!-- /.row -->
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