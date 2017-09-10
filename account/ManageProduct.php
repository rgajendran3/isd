<?php
include 'template/connection.php';

if(isset($_GET['category']) && isset($_GET['sub']))
{
	$category = $_GET['category'];
	$subcategory = $_GET['sub'];
	$query = "SELECT * FROM products WHERE category='$category' AND subcategory='$subcategory'";
					
}
else if(isset($_GET['user']))
{
	$char = $_GET['user'];
	$query = "SELECT * FROM users WHERE admin='$char'";	
}
else{

	$query = "SELECT * FROM products";
}

$result = mysqli_query($connection, $query);

/*---------------------code to view admin products-------------------------*/
if(isset($_GET['user']))
{
	echo "<h1>Admin Users</h1><br><br><br><br><br>";
	echo '<div id="managetable"><table>';
	echo '<tr >' . '<th>' . "Admin" . '</th>' . '<th>' . "Username" . '</th>' . '<th>' . "Email" . '</th>' . '<th>' . "Phone" . '</th>' . '<th>' . "House no" . '</th>' . 
	'<th>' . "Street" . '</th>' . '<th>' . "State" . '</th>' . '<th>' . "Postcode" . '</th>' . '<th>' . "Country" . '</th>' .'<th>' . "Change" . '</th>' . '<th>' . "Remove" . '</th>' .'</tr>';
	
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$admin = $row['admin'];
		$username = $row['username'];
		$email = $row['email'];
		$phone = $row['phone'];
		$house = $row['house_no'];
		$street = $row['street'];
		$state = $row['state'];
		$postcode = $row['postcode'];
		$country = $row['country'];
		echo '<tr>' . '<td class="table_padding">' . $admin . '</td>' . '<td class="table_padding">' . $username . '</td>' . '<td class="table_padding">' . $email . '</td>' .'<td class="table_padding">' . $phone . '</td>' . '<td class="table_padding">' . $house . '</td>' .
		'<td class="table_padding">' . $street . '</td>' .'<td class="table_padding">' . $state . '</td>' .'<td class="table_padding">' . $postcode . '</td>' .'<td class="table_padding">' . $country . '</td>' .
		'<td>'.'<a href="template/redirect.php?useramend=a&&userid='.$id.'">Amend</a>'.'</td>'.'<td>'.'<a href="account/deleteuser.php?account='.$admin.'&&deleteid='.$id.'">Delete</a>'.'</td>'.'</tr>';
	}
}
else{
	
	echo "<h1>Manage Products</h1><br><br><br><br><br>";
	echo '<div id="managetable"><table>';
	echo '<tr >' . '<th>' . "Product Name" . '</th>' . '<th>' . "Price" . '</th>' . '<th>' . "Image" . '</th>' . '<th>' . "Stock" . '</th>' . '<th>' . "Amend" . '</th>' .'<th>' . "Delete" . '</th>' . '</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
			
		$stock = $row['stock_available'];	
			$id = $row['id'];
			$subcategory = $row['subcategory'];
			$price = $row['price'];
			$image = $row['image'];
			$md5 = md5($id);
			
			if(isset($_GET['category']) && isset($_GET['sub']))
			{
				$category = $_GET['category'];
				$subcategory = $_GET['sub'];
				
				$link = "category=$category&&sub=$subcategory&&";
			}else{
				$link = NULL;
			}
		
			echo '<tr>' . '<td class="table_padding">' . $subcategory . '</td>' . '<td class="table_padding">' . '&pound' . number_format($price,2) . '</td>' . '<td>' . "<img src='$image'>" . '</td>' .'<td class="table_center">' . 
			$stock . '</td>'. '<td class="table_center">' . '<a href="myaccount.php?'.$link.'amend='.$md5.'&&productid=' . $row['id'] . '">Amend</a>' . '</td>' . '<td class="table_center">' . 
			'<a href="account/DeleteProduct.php?'.$link.'id=' . $id . '">Delete</a>' . '</td>' .'</td>' . '</tr>';
	}
}
echo '</table></div>';
?>
