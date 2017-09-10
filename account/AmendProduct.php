<?php
if($_SESSION['acctype'] != "A")
{
	header('location:../index.php');
}
include 'template/connection.php';

if(isset($_GET['amend']))
{
$id = $_GET['productid'];
$query = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($connection, $query);

$num = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result))
{
	$id = $row['id'];
	$brand = $row['brand'];
	$category = $row['category'];
	$subcategory = $row['subcategory'];
	$model = $row['model_no'];
	$image = $row['image'];
	$description = $row['description'];
	$price = $row['price'];
	$size1 = $row['size1'];
	$size2 = $row['size2'];
	$size3 = $row['size3'];
	$color1 = $row['color1'];
	$color2 = $row['color2'];
	$color3 = $row['color3'];
	$reviews = $row['reviews'];
	$stock = $row['stock_available'];	
}
}
?>
<form action="account/UpdateProduct.php" method="post">	
	<fieldset class="amendp">
		<legend>
			Enter Product Details
		</legend>
	
		<table style="width:600px;" id="a_table">
			<input type="hidden" name="id" value="<?php echo $id ?>" class="input"/><br/>
		<tr>	
			<td><label class="label">Brand :</label></td>
			<td><input type="text" name="brand" value="<?php echo $brand ?>" class="input"/><br/></td>
		</tr>
		
		<tr>
			<td><label class="label">Category :</label></td>
			<td><input type="text" name="category" value="<?php echo $category ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Sub Category :</label></td>
			<td><input type="text" name="subcategory" value="<?php echo $subcategory ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Model :</label></td>
			<td><input type="text" name="model_no" value="<?php echo $model ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Image :</label></td>
			<td><input type="text" name="image" value="<?php echo $image ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Describtion :</label></td>
			<td><input type="text" name="description" value="<?php echo $description ?>" class="input"/><br/></td>
		</tr>	
			
		<tr>
			<td><label class="label">Price :</label></td>
			<td><input type="text" name="price" value="<?php echo $price ?>" class="input"/><br/></td>
		</tr>
			
		<tr>		
			<td><label class="label">Size 1 :</label></td>
			<td><input type="text" name="size1" value="<?php echo $size1 ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Size 2 :</label></td>
			<td><input type="text" name="size2" value="<?php echo $size2 ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Size 3 :</label></td>
			<td><input type="text" name="size3" value="<?php echo $size3 ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Color 1 :</label></td>
			<td><input type="text" name="color1" value="<?php echo $color1 ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Color 2 :</label></td>
			<td><input type="text" name="color2" value="<?php echo $color2 ?>" class="input"/><br/></td>
		</tr>	
			
		<tr>	
			<td><label class="label">Color 3 :</label></td>
			<td><input type="text" name="color3" value="<?php echo $color3 ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Review :</label></td>
			<td><input type="text" name="reviews" value="<?php echo $reviews ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Stock</label></td>
			<td><input type="text" name="stock_available" value="<?php echo $stock ?>" class="input"/><br/></td>
		</tr>
		
		<tr>	
			<td></td>
			<td>
				<input type="submit" name="submit" class="btn"/>
				<input type="reset" name="clear" class="btn"/>
				<a href="myaccount.php" class="btn">Cancel</a>
			</td>
		</tr>																					
		
		
		</table>
	
	</fieldset>	
</form>
