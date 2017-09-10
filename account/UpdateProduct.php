<?php
include '../template/connection.php';

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$subcategory = $_POST['subcategory'];
	$model = $_POST['model_no'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$size1 = $_POST['size1'];
	$size2 = $_POST['size2'];
	$size3 = $_POST['size3'];
	$color1 = $_POST['color1'];
	$color2 = $_POST['color2'];
	$color3 = $_POST['color3'];
	$reviews = $_POST['reviews'];
	$stock = $_POST['stock_available'];	

	$query = "UPDATE products SET category='$category', subcategory='$subcategory', model_no='$model', image='$image', description='$description', price='$price', size1='$size1', 
	size2='$size2', size3='$size3', color1='$color1', color2='$color2', color3='$color3', reviews='$reviews', stock_available='$stock' WHERE id='$id'";
	mysqli_query($connection, $query);

		header("location:../myaccount.php?category=$category&&sub=$subcategory");
		
	
}else{
		header('location:../index.php');
}

?>