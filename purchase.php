<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Responsive Web Mobile - Ecommerce Cart</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>
			<?php include 'template/header.php';?>
			
			<div class="span9">


<?php

if(isset($_POST['purchase']))
{
						include 'template/connection.php';
						//session_start();
						foreach ($_SESSION as $name => $value) {
								if ($value > 0) {
									
									if (substr($name, 0, 5) == 'cart_') {
										
										$id = substr($name, 5, (strlen($name) - 5));
										$get = mysqli_query($connection, 'SELECT id, subcategory, model_no, price, shipping, image FROM products WHERE id=' . mysql_real_escape_string((int)$id));
										
										
										while ($get_row = mysqli_fetch_assoc($get)) {
					
											$model = $get_row['model_no'];
											$shipping = $get_row['shipping'];
											$sub = $get_row['price'] * $value;
											$image = $get_row['image'];
											$subcategory = $get_row['subcategory'];
											$price = number_format($get_row['price'], 2);
											$remove = '<a href="cart.php?remove=' . $id . '">[-]</a>';
											$add = '<a href="cart.php?add=' . $id . '"> [+]</a>';
											$delete = '<a href="cart.php?delete=' . $id . '"> [Delete]</a>';
														
										}
										include '/template/connection.php';
										$username = $_SESSION['username'];
										$query = "INSERT INTO purchase (username, pid, quantity) VALUES ('$username', '$id', '$value')";
										mysqli_query($connection, $query);

									}
										$amount = @$amount + $sub;
										$ship = @$ship + $shipping;

								}	
							}				

}
?>
			<h2>Order Confirmation</h2>
			<dl class="dl-horizontal pull-left">
				<dt>Sub-total:</dt>
				<dd><?php if(isset($amount)){echo "&pound;".$amount/2;}else{echo "&pound;"."0.00";}?></dd>
				
				<dt>Shipping Cost:</dt>
				<dd><?php if(isset($ship)){echo "&pound;".$ship;}else{echo "&pound;"."0.00";} ?></dd>
	
				<dt>Total:</dt>
				<dd><?php if(isset($amount) AND (isset($ship))){ echo "&pound;".($ship+($amount/2));}else{echo "&pound;"."0.00";} ?></dd>
			</dl>
			<div id="paypal_checkout_div">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="1">
				<input type="hidden" name="business" value="r.gajendran3@gmail.com">
				<?php paypal_items(); ?>
				<input type="hidden" name="currency_code" value="GBP">
				<input type="hidden" name="amount" value="<?php echo $value; ?>">
				<input type="submit" class="btn btn-success" name="submit" value="Paypal Checkout" id="paypal_checkout_btn">
			</form>
			</div>
</div>
	</div>

	<hr />
	<?php include 'template/footer.php';?>
</body>
</html>