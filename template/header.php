	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="./index.php">Gajendra Retail</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Commerce <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php">E-commerce</a></li>
								<li><a href="ecommerce-cart.php">E-commerce Cart</a></li>
								<li><a href="myaccount.php">My Account</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form form-search pull-right" method="post" action="search.php">
						<input id="Search" name="search" type="text" placeholder="Search" class="input-medium search-query">
						<button type="submit" name="submit" class="btn">Search</button>						
					</form>					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="well">

					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-shopping-cart"></i>
		
							<?php include'cart/cartmenu.php';
								if(!isset($amt) AND !isset($all))
								{
									echo '0  '.'items'.' '.'  -  '.'&pound; 0.00';
									$message = "Your Cart is empty";
								}else{
									echo $all.' '.'items'.' '.'  -  '.'&pound'.number_format($amt,2); 
								}
							    
							   ?>
							<b class="caret"></b></a>
						</a>
						<div class="dropdown-menu well" role="menu" aria-labelledby="dLabel">
							<?php include './cart/dropdowncart.php'; ?>				
						</div>
					</div>

				</div>
				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">Mens</li>
						<li>
							<a href="index.php?category=Men&&sub=shirt">Shirt</a>
						</li>
						<li>
							<a href="index.php?category=Men&&sub=Jeans">Jeans</a>
						</li>
						<li>
							<a href="index.php?category=Men&&sub=Jacket">Jacket</a>
						</li>

						<li class="nav-header">Womens</li>
						<li>
							<a href="index.php?category=Women&&sub=Shirt">Shirt</a>
						</li>
						<li>
							<a href="index.php?category=Women&&sub=Pant">Pant</a>
						</li>
						<li>
							<a href="index.php?category=Women&&sub=Jacket">Jacket</a>
						</li>

						<li class="nav-header">Accessories</li>
						<li>
							<a href="index.php?category=Men&&sub=Accessories">Men</a>
						</li>
						<li>
							<a href="index.php?category=Women&&sub=Accessories">Women</a>
						</li>
					</ul>
				</div>

				<div class="well">
					<?php					
						if(!isset($_GET['name']))
						{	
							include 'sort.php';
							
						}else{
							echo '<h4>My Account</h4>';

						}
					?>
				</div>

				<div class="well">
					<?php
					
					if(!isset($_SESSION['username']))
					{
						include 'template/loginform.php';
						
						if(isset($_SESSION['error']))
						{
							echo $_SESSION['error'];
						}
					}else{
						echo "<li id='session_user'><h5>"."Welcome ".' '.$_SESSION['username']."</h5></li>";
						echo "<ul class='nav nav-list'><li><a href='template/logout.php'>Logout</a></li></ul>";
					}	

					?>
				</div>
			</div>