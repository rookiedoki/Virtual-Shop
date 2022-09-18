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
									echo "<li><a href='checkout.php'><i class='fa fa-lock'></i> Login</a></li>";
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
							<li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
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
							<h2 class="title text-center">Your Cart Items</h2>
								
							<form action="cart.php" method="post" enctype="multipart/form-data">
							
								<table width="740" align="center" bgcolor="#0099CC">
									<tr align="center" bgcolor="#FE980F">
										<td><b>Remove</b></td>
										<td><b>Products(s)</b></td>
										<td><b>Quantity</b></td>
										<td><b>Total Price</b></td>
									</tr>
					<?php								
						$ip_add = getRealIpAddress();
						
						$total =0;
						
						// get item based on Ip from cart table
						$select_price = "select * from cart where ip_add = '$ip_add'";
						
						$run_price = mysqli_query($con, $select_price);
						
						while($record=mysqli_fetch_array($run_price))
						{
							$product_id = $record['p_id'];
							$item_quantity = $record['qty'];

							$prod_price = "select * from products where product_id = '$product_id'";
							
							$run_product_price = mysqli_query($con, $prod_price);
							
							while($p_price=mysqli_fetch_array($run_product_price))
							{
								$product_price = array($p_price['product_price']); //get product price from table column in DB
								$product_title = $p_price['product_title'];
								$product_image = $p_price['product_img1'];

								$value = array_sum($product_price)*$item_quantity; // sum all the values
								$only_price = array_sum($product_price)*$item_quantity;
								$total += $value;
							
						//will loop creating checkboxes as products are being added to cart 
						// adding all the neccessary info on relevant clolumns of the cart table
						
						?>
									<tr>
										<td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>"></td>
										<td><?php echo $product_title ?><br><img src='admin_area/product_images/<?php echo $product_image ?>' width='80' height='80'/> </td>
										<td>  <label for="male"><?php echo "$item_quantity" ?></label> </td>
										<td><?php echo "&#8369;". $only_price ?></td>
									</tr>		
								<?php }} ?> 
								<tr>
									<td colspan="3" align="right" style="text-decoration:none; color:#0000CC"><b>Sub Total</b></td>
									<td style="text-decoration:none; color:#0000CC"><b><?php echo "&#8369;". $total ?></b></td>
								</tr>	
								<tr align="center">
									<td><input type="submit" name="update" value="Update Cart" style="text-decoration:none; color:#0000CC"/></td>
									<td><input type="submit" name="continue" value="Continue Shopping" style="text-decoration:none; color:#0000CC"/></td>
									<td><button name="check"><a href="customer/customer_login.php" style="text-decoration:none; color:#0000CC;">Checkout</a></button></td>	
								</tr>
								</table>
							</form>
							<?php
							if(isset($_POST['check']) and isset($_SESSION['customer_email']))
							{
								if($total != 0)
									{echo "<script>window.open('/vshop_phil/customer/checkout.php','_blank')</script>";}
							}
							elseif(isset($_POST['check']) and !isset($_SESSION['customer_email']))
							{
								if($total != 0)
								{echo "<script>window.open('/vshop_phil/customer/customer_login.php','_blank')</script>";}
							}

							?>
							<?php
							function updateCart()
							{
								global $con;
								
								// for the update button
								if(isset($_POST['update']))
								{
									// post back for all the checkboxes inside update button checked - based on chekb name = remove[]
									foreach($_POST['remove'] as $remove_id)
									{
										$delete_products = "delete from cart where p_id = '$remove_id' ";
										$run_delete = mysqli_query($con, $delete_products);
										
										if($run_delete)
										{
											// update cart page and refresh 
											echo "<script>window.open('cart.php','_self')</script>";
										}
										
									}//foreach
									//
								}
								if(isset($_POST['continue']))
								{
									echo "<script>window.open('all_products.php','_self')</script>";
								}
							}
							echo @$up_cart = updateCart();	
							?>	
						</div><!--features_items Ends-->
						</div><!--/category-tab-->						
					</div>
				</div>
			</div>
		</section>
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