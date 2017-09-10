							<?php
								include './template/connection.php';
								foreach ($_SESSION as $name => $value) {
										if ($value > 0) {
											if (substr($name, 0, 5) == 'cart_') {
												$id = substr($name, 5, (strlen($name) - 5));
												$get = mysqli_query($connection, 'SELECT id, model_no, price FROM products WHERE id=' . mysql_real_escape_string((int)$id));
												while ($get_row = mysqli_fetch_assoc($get)) {
													$sub = $get_row['price'] * $value;
													$model = $get_row['model_no'];
													$price = number_format($get_row['price'], 2);
													$remove = '<a href="cart.php?remove=' . $id . '">[-]</a>';
													$add = '<a href="cart.php?add=' . $id . '"> [+]</a>';
													$delete = '<a href="cart.php?delete=' . $id . '"> [Delete]</a>';
													//$get_row['subcategory'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $id . '">[-]</a>
													//<a href="cart.php?add=' . $id . '"> [+]</a><a href="cart.php?delete=' . $id . '"> [Delete]</a><br />';
														echo '<table width="420px"><tr><th id="name">'.$model. '</th><th id="x"> x </th><th id="value">' . $value . '</th><th id="atsymbol">@ </th><th id="pound">&pound;'. $price .'</th>
														<th id="equal"> =</th><th id="total">&pound;'.number_format($sub,2).'</th></tr></table>'; 	
												
												}
											}
											$amount = @$amount + @$sub;
								
										}
								
									}if (!isset($amount)) {
												echo 'Your cart is empty!';
											} else {
												echo '<h6 id="totalamount">Total amount is :- &pound;'.number_format($amount,2).'</h6>'; 	
										
										?>
										<p>
												<a href="ecommerce-cart.php" class="btn btn-primary" id="basket">View Basket</a>
											<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="upload" value="1">
												<input type="hidden" name="business" value="r.gajendran3@gmail.com">
												<?php require './cart/paypalitem.php';paypal_items(); ?>
												<input type="hidden" name="currency_code" value="GBP">
												<input type="hidden" name="amount" value="<?php echo $value; ?>">
												<input type="submit" class="btn btn-primary" name="submit" value="Checkout" id="checkout">
											</form>
										</p>
										<?php
										}

									?>