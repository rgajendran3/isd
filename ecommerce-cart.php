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
				<h2>Shopping Cart</h2>
				<form>
				<?php
					if(!isset($amt))
					{
						echo "<div class='hero-unit'><h3>Your Cart is Empty</h3><br><a href='index.php'>Continue Shopping</a></div>";
					}else{
				?>	
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Image</th>
							<th>Model</th>
							<th>Quantity</th>
							<th>Unit Price</th>
							<th>Sub Total</th>
						</tr>
					</thead>
					<?php
						include 'template/connection.php';
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
											//$get_row['subcategory'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $id . '">[-]</a>
											//<a href="cart.php?add=' . $id . '"> [+]</a><a href="cart.php?delete=' . $id . '"> [Delete]</a><br />';
												echo '<tbody>
															<tr id="cartdisplay">
																<td><img src='.$image.' alt=""/></td>
																<td>'.$model.'</td>
																<td><a href="cart.php?remove='.$id.'"><i class="icon-thumbs-down"></i></a><input id="quantity-1" name="quantity-1" type="text" class="span1" value="'.$value.'"/>&nbsp;
																<a href="cart.php?add='.$id.'&&cart"><i class="icon-thumbs-up"></i></a></td>
																<td>&pound;'.$price.'</td>
																<td>&pound;'.number_format($sub,2).'</td>
																<td><a href="cart.php?delete='.$id.'"><i class="icon-trash"></i></a><td>
															</tr>
														</tbody>'; 											
										}
									}
									$amount = @$amount + $sub;
									$ship = @$ship + $shipping;
								}
						
							}
					
					?>

				</table>
			</form>
			
			<dl class="dl-horizontal pull-right">
				<dt>Sub-total:</dt>
				<dd><?php if(isset($amt)){echo "&pound;".number_format($amt,2);}else{echo "&pound;"."0.00";}?></dd>
				
				<dt>Shipping Cost:</dt>
				<dd><?php if(isset($ship)){echo "&pound;".number_format($ship,2);}else{echo "&pound;"."0.00";} ?></dd>

				<dt>Total:</dt>
				<dd><?php if(isset($ship) AND isset($amt)){ echo "&pound;".number_format(($ship+$amt),2);}else{echo "&pound;"."0.00";} ?></dd>
			</dl>
			<div class="clearfix"></div>
			<a href="index.php" class="btn btn-primary pull-left">Continue Shopping</a>
			<form action="purchase.php" method="post"><input type="submit" name="purchase" class="btn btn-success pull-right" id="continue_btn" value="Continue Checkout"/></form>
			
			<?php } ?>
		</div>
	</div>

	<hr />
	<?php include 'template/footer.php';?>
</body>
</html>