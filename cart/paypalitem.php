<?php
function paypal_items(){
	$num='0';
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT id, subcategory, price, shipping FROM products WHERE id=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$num++;
					echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
				    echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['subcategory'].'">';
					echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
					echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
					echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
					echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
				}
			}

		}

	}
	
	
}
?>