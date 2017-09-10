<?php
session_start();

if(isset($_GET['category']) AND isset($_GET['sub']))
{
	$category = $_GET['category'];
	$sub = $_GET['sub'];
	$page = "index.php?category=$category&&sub=$sub";
}
else{
	$page = 'index.php';
}

$page1 = "ecommerce-cart.php";

$connection=mysqli_connect('127.0.0.1', 'root', '', 'isd') or die('Failed to connect');


if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT id, stock_available FROM products WHERE id=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['stock_available'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;

		}

	}
	if(isset($_GET['cart']))
	{
		$page="ecommerce-cart.php";
	}	
	header('Location:' . $page);
}

if (isset($_GET['remove'])) {
	$_SESSION['cart_' . (int)$_GET['remove']]--;
	header('Location:' . $page1);
}

if (isset($_GET['delete'])) {
	$_SESSION['cart_' . (int)$_GET['delete']] = '0';
	header('Location:' . $page1);
}

function cart() {
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT id, subcategory, price FROM products WHERE id=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$sub = $get_row['price'] * $value;
					echo $get_row['subcategory'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $id . '">[-]</a>
					<a href="cart.php?add=' . $id . '"> [+]</a><a href="cart.php?delete=' . $id . '"> [Delete]</a><br />';
				}
			}
			$amount = @$amount + @$sub;
			$all = count($sub);
		}

	}
	if (!isset($amount)) {
		echo 'Your cart is empty!';
	} else {
		echo '<p>The total is &pound;' . number_format($amount, 2).'</p>'.$all;

?>
<p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="p.doney@leedsmet.ac.uk">
		<?php paypal_items(); ?>
		<input type="hidden" name="currency_code" value="GBP">
		<input type="hidden" name="amount" value="<?php echo $value; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	</form>
</p>
<?php
}
}
?>