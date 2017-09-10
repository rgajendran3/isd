<?php
if(isset($_POST['brand']))
{
		$brand = htmlentities(trim($_POST['brand']));
		$category = htmlentities(trim($_POST['category']));
		$subcategory = htmlentities(trim($_POST['subcategory']));
		$model = htmlentities(trim($_POST['model_no']));
		$image = htmlentities(trim($_POST['image']));
		$description = htmlentities(trim($_POST['description']));
		$price = htmlentities(trim($_POST['price']));
		$size1 = htmlentities(trim($_POST['size1']));
		$size2 = htmlentities(trim($_POST['size2']));
		$size3 = htmlentities(trim($_POST['size3']));
		$color1 = htmlentities(trim($_POST['color1']));
		$color2 = htmlentities(trim($_POST['color2']));
		$color3 = htmlentities(trim($_POST['color3']));
		$reviews = htmlentities(trim($_POST['reviews']));
		$stock = htmlentities(trim($_POST['stock_available']));	
		if(isset($brand))
		{
			if(isset($category) && !empty($category))
			{
				if(isset($subcategory) && !empty($subcategory))
				{
					if(isset($model) && !empty($model))
					{
						if(isset($image) && !empty($image))
						{
							if(isset($description) && !empty($description))
							{
									if(isset($size1) && isset($size2))
									{
										if(isset($color1) && isset($color2))
										{
											if(isset($reviews) && isset($stock))
											{
												include '../template/connection.php';
												$query = "INSERT INTO products (brand, category, subcategory, model_no, image, description, price, size1, size2, size3, color1, color2, color3, reviews, stock_available) 
														VALUES('$brand','$category','$subcategory', '$model', '$image', '$description', '$price', '$size1', '$size2', '$size3', '$color1', '$color2', '$color3', '$reviews', '$stock')";
										
												mysqli_query($connection, $query);							
												echo '<script type="text/javascript">alert("Successfully Added");
													window.location.href = "../myaccount.php?product=add";</script>';		
																																															
											}else{
												echo '<script type="text/javascript">alert("Review is not set");
												window.location.href = "../myaccount.php?product=add";</script>';
											}
											
										}else{
											echo '<script type="text/javascript">alert("Color is not set");
											window.location.href = "../myaccount.php?product=add";</script>';
										}
									}
									else{
										echo '<script type="text/javascript">alert("Size is not set");
										window.location.href = "../myaccount.php?product=add";</script>';
									}
							}else{
								echo '<script type="text/javascript">alert("Description is not set");
								window.location.href = "../myaccount.php?product=add";</script>';
							}
						}else{
							echo '<script type="text/javascript">alert("Image is not set");
							window.location.href = "../myaccount.php?product=add";</script>';
						}
					}else{
						echo '<script type="text/javascript">alert("Model is not set");
						window.location.href = "../myaccount.php?product=add";</script>';
					}
				}else{
					echo '<script type="text/javascript">alert("Sub category is not set");
					window.location.href = "../myaccount.php?product=add";</script>';
				}
			}
			else{
				echo '<script type="text/javascript">alert("Category is not set");
				window.location.href = "../myaccount.php?product=add";</script>';
			}
		}else{
			echo '<script type="text/javascript">alert("Brand is not set");
			window.location.href = "../myaccount.php?product=add";</script>';
		}
	
}
?>