<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>V-Shop</title>
	<link rel="icon" href="images/home/logo.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">        
</head><!--/head-->
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<a href="index.php"><img src="images/home/bl.png" alt="logo" width="250px" height="65px" /></a>
					</div>
					<div class="col-sm-8">						
						<div class="shop-menu pull-right">							
							<ul class="nav navbar-nav">							
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php

								if(!isset($_SESSION['customer_email']))
								{
									//echo "<a href='checkout.php'> Login</a>";
									echo "<li><a href='customer/checkout.php'><i class='fa fa-lock'></i> Login</a></li>";
								}
								else
								{
									
									echo "<li><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
								}
								?>								
							</ul>
						</div>
					</div>
					<?php
					cart();
					?>				
				</div>
			</div>
		</div><!--/header-middle-->
		
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="all_products.php">Products</a></li>
								<li><a href="customer/my_account.php">My Profile</a></li>
								<li><a href="cart.php">Shopping Cart</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="admin_area/login/login.php"><b>Admin Login</b></a></li>
							</ul>
						</div>
					</div>
					<!--Search Box starts-->
					<div>
						
						<form method="get" action="results.php" enctype="multipart/form-data">
							<input type="text" name="user_query" placeholder="Search a Product"/>
							<input type="submit" name="search" value="Search"/>
						</form>
						
					</div>
					<!--Search Box ends-->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
							<div class="col-sm-6">
										<h1><span>V</span>Shop</h1>
										<h2>Virtual Shop Philippines</h2>
										<p>One of the best virtual shop in the Philippines</p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/home/c1.jpg" class="girl img-responsive" alt=""/>
									<br /><br /><br />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>V</span>Shop</h1>
										<h2>Virtual Shop Philippines</h2>
										<p>One of the best virtual shop in the Philippines</p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/home/c2.jpg" class="girl img-responsive" alt="" />
										<br /><br /><br />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>V</span>Shop</h1>
										<h2>Virtual Shop Philippines</h2>
										<p>One of the best virtual shop in the Philippines</p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/home/c3.jpg" class="girl img-responsive" alt="" />
										<br /><br /><br />
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>V</span>Shop</h1>
										<h2>Virtual Shop Philippines</h2>
										<p>One of the best virtual shop in the Philippines</p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/home/c4.jpg" class="girl img-responsive" alt="" />
										<br /><br /><br />
									</div>
							</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>V</span>Shop</h1>
										<h2>Virtual Shop Philippines</h2>
										<p>One of the best virtual shop in the Philippines</p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="images/home/c5.jpg" class="girl img-responsive" alt="" />
										<br /><br /><br />
									</div>
								</div>
							</div>
							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>	
					</div>
				</div>
			</div>
		</section><!--/slider-->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="left-sidebar">
							<h2>Categories</h2>
							<div class="panel-group category-products" id="accordian"><!--category-products start-->
								<div class="category-tab ul li ">
									<ul class="nav nav-pills nav-stacked" id="categories">
										<?php getCategories(); ?>
									</ul>
								</div>
							</div><!--/category-products ends-->
							<img src="images/home/lo1.jpg" width="270px" height="200px">
							<br /><br />						
						</div>
					</div>				
					<div class="col-sm-9 padding-right">
						<?php
					//$ip = getRealIpAddress();
					//echo $ip;
						?>
						<div class="features_items"  id="products_box"><!--features_items start-->
							<h2 class="title text-center">Featured Items</h2>
							<?php 
							getPro(); 
							getCatPro();
							getBrandPro();					 
							?>							
						</div><!--features_items Ends-->
					</div><!--/category-tab-->					
				</div>
			</div>
		</div>
	</section>	
	<footer id="footer"><!--Footer-->	
		<div class="footer-bottom"  style="background-color:orange;">
			<div class="container">
				<div class="row">
				<center>
				<a href="vshopfb.com"><img src="images/home/fb.png" height="40px"></a>
                <a href="vshopig.com"><img src="images/home/ig.png" height="40px"></a>
                <a href="vshoppin.com"><img src="images/home/pin.png" height="40px"></a>
                <a href="vshoptwtr.com"><img src="images/home/twitter.png" height="40px"></a>
                <a href="vshopwa.com"><img src="images/home/wa.png" height="40px"></a>
				<a href="vshopyt.com"><img src="images/home/yt.png" height="38px"></a>
				</center>
				<p class="pull-left"><center>Copyright © 2020 Virtual Shop <br /> All rights reserved.</center></p>		
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>
</html>