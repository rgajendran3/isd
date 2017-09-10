<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Responsive Web Mobile - Ecommerce</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>
	
<?php include 'template/header.php'; ?>		
<div class="span9">	
<?php
if(isset($_POST['submit']))
{
	$search = $_POST['search'];
	
	$filter = filter_var(htmlentities(trim($search)),FILTER_SANITIZE_STRING);
	if(!empty($filter))
	{
		include 'template/connection.php';
		$query = "SELECT * FROM products WHERE brand LIKE '%$filter%' OR category LIKE '%$filter%' OR subcategory LIKE '%$filter%' OR model_no LIKE '%$filter%'";
		$result = mysqli_query($connection, $query);
		if(mysqli_num_rows($result) != 0)
		{
			echo "<h3>Search Result :- $filter</h3><br>";
			while($row = mysqli_fetch_assoc($result))
			{
				$id = $row['id'];
				$price = $row['price'];
				$image = $row['image'];
				$subcat = $row['subcategory'];		
				echo '<ul class="thumbnails" align="center">
						<li class="product">
							<div class="thumbnail">
								<img src="'.$image.'" alt="" id="img">
									<div class="caption">
										<h4>'.$subcat.'</h4>
										<p>&nbsp;&pound;'.$price.'</p>
										<a class="btn btn-primary" href="ecommerce-item.php?item='.$id.'">View</a>
										<a class="btn btn-success" href="cart.php?add='.$id.'">Add to Cart</a>
									</div>
							</div>
						</li>
					</ul>';	
			}
			
			
		}else{
			echo "<div class='hero-unit'><h3>No results found</h3><br><a href='index.php'>Back to Homepage</a></div>";
		}
	}else{
		echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
	}
	
}

include 'template/footer.php';
?>

</body>
</html>