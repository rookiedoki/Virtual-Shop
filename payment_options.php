<?php
//session_start();
include("includes/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Options</title>
</head>
<body>
	<?php
	$customer_email = $_SESSION["customer_email"];
	
	$get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($con,$get_customer);
	$customer=mysqli_fetch_array($run_customer);
	$customer_id=$customer['customer_id'];
	$customer_name=$customer['customer_name'];

	$ip_add = getRealIpAddress();
		
	$total =0;
	
	$select_price = "select * from cart where ip_add = '$ip_add'";
	
	$run_price = mysqli_query($db, $select_price);

	$status='Pending';//initial status of a product

	$invoice_no = mt_rand();//generate random number

	$count_pro=mysqli_num_rows($run_price); //total products

	$i=0;

	$message="

	<html>
	<body>
	<p> 

	Hello  <b style='color:blue;'> $customer_name, </b> <br>

	Please find your order summary bellow. Please login to your account and make a payment for any pending orders </p>

	<table width='600' align='center' bgcolor='FFCC99' border='2'>
	<tr> <h2> Your Order Summary.<br> 
	Invoice Number: $invoice_no </br></h2></tr>
	<tr>

	<th> Product Name </b> </th>
	<th> Quantity </b> </th>
	<th> Total Price </b> </th>
	
	</tr>
	";
	while($record=mysqli_fetch_array($run_price))
	{
		$product_id = $record['p_id'];
		$prod_price = "select * from products where product_id = '$product_id'";
		
		$run_product_price = mysqli_query($db, $prod_price);
		
		while($p_price=mysqli_fetch_array($run_product_price))
		{
			$product_name=$p_price['product_title'];
			$product_price = array($p_price['product_price']); //get product price from table column in DB
			$value = array_sum($product_price)."\r\n"; // sum all the values
			$total += $value;
			$i++;
		}
		$productDetails = 
		$message.="

		<tr>
		<td> $product_name </td></tr>";

		//$productDetails.=$product_name.":".$value.",
		//";

	//end of while
	//getting quantity form the cart
		$get_cart ="Select * from cart WHERE ip_add = '$ip_add'";
		$run_cart=mysqli_query($con,$get_cart);
		$get_qty= mysqli_fetch_array($run_cart);

	$qty=$get_qty['qty']; //saving qty from database to local variable

	if($qty==0)
	{
		//change the variable
		$qty=1;
		$sub_total =$total;
	}
	else
	{
		$qty=$qty;
		$sub_total=$total*$qty;
	}
}

?>
<div align="center">
	<h2> Payment Options</h2>
	
	</a> <a href="order.php?c_id=<?php echo $customer_id;?>">Pay Offline </a>

	<br><br><br><br>
	<b> If you have selected to pay offline then please check your email or account for your invoice number of your order. <b>
		

	</div>

</body>
</html>