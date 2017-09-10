<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Gajendra Retail - Ecommerce</title>

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
				require 'template/connection.php';				
				if(!isset($_GET['category']) && !isset($_GET['sub']))
				{
					echo 
					'<div class="hero-unit">
						<h1 class="">Special Offer</h1>
						<p class="">Here is the best offer of the month! Do not loose it!</p>
						<p><a href="#" class="btn btn-primary btn-large">Learn more</a></p>
					</div>';
					
					
					if(!isset($_GET['order']))
					{
						$query = "SELECT * FROM products WHERE offer='OF' AND stock_available>0";
					}
					else if (($_GET['order'] == "phigh"))
					{			
						$query = "SELECT * FROM products WHERE offer='OF' AND stock_available>0 ORDER BY price DESC";
					}
					else if (($_GET['order'] == "plow"))
					{			
						$query = "SELECT * FROM products WHERE offer='OF' AND stock_available>0 ORDER BY price ASC";
					}					
				}
				else if(isset($_GET['category']) && isset($_GET['sub']))
				{
				
					$category = trim(htmlentities($_GET['category']));
					$subcategory = trim(htmlentities($_GET['sub']));
					if(!isset($_GET['order']))
					{
						$query = "SELECT * FROM products WHERE category='$category' AND subcategory='$subcategory' AND stock_available>0";
					}
					else if($_GET['order'] == "phigh")
					{
						$query = "SELECT * FROM products WHERE category='$category' AND subcategory='$subcategory' AND stock_available>0 ORDER BY price DESC";
					}
					else if($_GET['order'] == "plow")
					{
						$query = "SELECT * FROM products WHERE category='$category' AND subcategory='$subcategory' AND stock_available>0 ORDER BY price ASC";
					}					
				}
				
				$result = mysqli_query($connection, $query);
				
				if(mysqli_num_rows($result) != 0)
				{
							while ($row = mysqli_fetch_assoc($result))
							{
									
			
								if(!isset($_GET['category']) && !isset($_GET['sub']))
								{
									$id = $row['id'];
									if(isset($_SESSION['username']))
										{
											$cart = "<a class='btn btn-success' href='cart.php?add=$id'>Add to Cart</a>";
										}
									else{
										$cart = NULL;
										}
									
									
									$price = $row['price'];
									$image = $row['image'];
									$oldprice = $row['oldprice'];			
									$subcat = $row['subcategory'];
									
									echo '<ul class="thumbnails">
											<li >
												<div class="thumbnail">
													<img src="'.$image.'" alt="">
														<div class="caption">
															<h4>'.$subcat.'</h4>
															<p><strike>&pound;'.$oldprice.'</strike>&nbsp;&pound;'.$price.'</p>
															<a class="btn btn-primary" href="ecommerce-item.php?indexitems='.$id.'">View</a>
															'.$cart.'
														</div>
												</div>
											</li>
										</ul>';	
								}
								else if(isset($_GET['category']) && isset($_GET['sub']))
								{
									$id = $row['id'];
									if(isset($_SESSION['username']))
										{
											$cart = '<a class="btn btn-success" href="cart.php?category='.$category.'&&sub='.$subcategory.'&&add='.$id.'">Add to Cart</a>';
										}
									else{
										$cart = NULL;
										}
										
										
									$price = $row['price'];
									$image = $row['image'];
									$subcat = $row['subcategory'];		
									$category = $_GET['category'];
									$subcategory = $_GET['sub'];
									echo '<ul class="thumbnails" align="center">
											<li class="product">
												<div class="thumbnail">
													<img src="'.$image.'" alt="" id="img">
														<div class="caption">
															<h4>'.$subcat.'</h4>
															<p>&nbsp;&pound;'.$price.'</p>
															<a class="btn btn-primary" href="ecommerce-item.php?item='.$id.'">View</a>
															'.$cart.'
														</div>
												</div>
											</li>
										</ul>';	
										
								}	
								
							}
				}else{
					echo '<script type="text/javascript">window.location.href = "index.php";</script>';
				}
				?>
				
		<?php include 'template/footer.php'; ?>		
</body>
</html>