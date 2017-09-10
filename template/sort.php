<?php			
	if(!isset($_GET['category']) && !isset($_GET['sub']))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?order=phigh">Price High-Low</a></li>
		<li><a href="index.php?order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Men") AND ($_GET['sub'] == "shirt"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Men&&sub=shirt&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Men&&sub=shirt&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Men") AND ($_GET['sub'] == "Jeans"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Men&&sub=Jeans&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Men&&sub=Jeans&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Men") AND ($_GET['sub'] == "Jacket"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Men&&sub=Jacket&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Men&&sub=Jacket&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Women") AND ($_GET['sub'] == "Shirt"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Women&&sub=Shirt&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Women&&sub=Shirt&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Women") AND ($_GET['sub'] == "Pant"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Women&&sub=Pant&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Women&&sub=Pant&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Women") AND ($_GET['sub'] == "Jacket"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Women&&sub=Jacket&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Women&&sub=Jacket&&order=plow">Price Low-High</a></li></ul>';
	}	
	else if(($_GET['category'] == "Men") AND ($_GET['sub'] == "Accessories"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Men&&sub=Accessories&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Men&&sub=Accessories&&order=plow">Price Low-High</a></li></ul>';
	}
	else if(($_GET['category'] == "Women") AND ($_GET['sub'] == "Accessories"))
	{
		echo 
		'<h4>Sort</h4>
		<ul class="nav nav-list">
		<li><a href="index.php?category=Women&&sub=Accessories&&order=phigh">Price High-Low</a></li>
		<li><a href="index.php?category=Women&&sub=Accessories&&order=plow">Price Low-High</a></li></ul>';
	}				
?>