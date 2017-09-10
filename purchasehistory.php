<?php
session_start();
if($_SESSION['acctype'] != "N")
{
	header('location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Gajendra Retail</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/product.css" />

</head>
<body>
	
	<?php include 'template/header_account.php';?>
	<div class="span9" id="purchase_register">
		<?php
		if(!isset($_GET['no']))
		{
		?>
		<h3>Purchase History</h3>
		<table id="managetable" class="table table-striped table-hover">
			<thead id="purchase_view">
				<tr>
					<th>Date</th>
					<th>Receipt</th>
				</tr>
			</thead>	
		<?php
			include 'template/connection.php';
			$username = $_SESSION['username'];
			$query = "SELECT * FROM purchase WHERE username='$username' GROUP BY date";
			$result = mysqli_query($connection, $query);
			$num = mysqli_num_rows($result);

			while($row = mysqli_fetch_assoc($result))
			{
				
				$date = strtotime($row['date']);
				$fdate = date("d M Y", $date);
				$mysqldate = date( 'Y-m-d H:i:s', $date );
				echo '<tbody id="purchase_href">
						<tr id="cartdisplay">				
							<td>'.$fdate.'</td>
							<td><a href="purchasehistory.php?no='.$mysqldate.'">View</a></td>							
						</tr>
					</tbody>'; 		
			}
		}
		else if(isset($_GET['no']))
			{
				include 'template/connection.php';
				$username = $_SESSION['username'];
				$date = $_GET['no'];
				$query = "SELECT * FROM purchase WHERE username='$username' AND date='$date'";
				$result = mysqli_query($connection, $query);
				$arr = array();
				while($row = mysqli_fetch_assoc($result))
				{
					$id = $row['pid'];
					$quantity = $row['quantity'];
					$arr[$id] = $quantity;
				}


				echo '<div id="managetable"><table>';
				echo '<tr >' . '<th>' . "Image" . '</th>' . '<th>' . "Model" . '</th>' . '<th>' . "Price" . '</th>' . '<th>' . "Quantity" . '</th>' . '<th>' . "Subtotal" . '</th>' . '</tr>';
				
					
				foreach($arr as $id => $quan)
				{
					$queryproduct = "SELECT * FROM products WHERE id='$id'";
					$resultproduct = mysqli_query($connection, $queryproduct);
										
					while($rows = mysqli_fetch_assoc($resultproduct))
					{
						$image = $rows['image'];
						$price = $rows['price'];
						$model = $rows['model_no'];
						$subtotal = number_format($price*$quan, 2);
						$shipping = number_format($rows['shipping'], 2);
						echo '<tr>' . '<td class="table_padding">' . '<img src="'.$image.'">' . '</td>' . '<td class="table_padding">' . $model . '</td>'. '<td class="table_padding">' . $price . '</td>'
						. '<td class="table_padding">' . $quan . '</td>'. '<td class="table_padding">&pound;' . $subtotal . '</td></tr>'; 
						
					}
					$total = number_format(@$total + $subtotal, 2); 
					$ship = number_format(@$ship + $shipping, 2);
				}
				echo "<tr><td><b>Sub Total</b></td><td> &pound; $total</td></tr>";
				echo "<tr><td><b>Shipping</b></td><td> &pound; $ship</td></tr>";
				echo "<tr><td><b>Total</b></td><td> &pound; ".($total+$ship)."</td></tr>";
				echo "</table></div>";
				
			}
			
		?>	

	</div>

</body>
</html>