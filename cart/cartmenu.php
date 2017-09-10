<?php
include './template/connection.php';
foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
			$id = substr($name, 5, (strlen($name) - 5));
			$get = mysqli_query($connection, 'SELECT id, subcategory, price FROM products WHERE id=' . mysql_real_escape_string((int)$id));
			while ($get_row = mysqli_fetch_assoc($get)) {
				$sub = $get_row['price'] * $value;
				$price = number_format($get_row['price'], 2);
				$remove = '<a href="cart.php?remove=' . $id . '">[-]</a>';
				$add = '<a href="cart.php?add=' . $id . '"> [+]</a>';
				$delete = '<a href="cart.php?delete=' . $id . '"> [Delete]</a>';
				//$get_row['subcategory'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $id . '">[-]</a>
				//<a href="cart.php?add=' . $id . '"> [+]</a><a href="cart.php?delete=' . $id . '"> [Delete]</a><br />';	
				
			}
		}
		$amt = @$amt + @$sub;
		$all = @$all + $value;
	}

}
?>