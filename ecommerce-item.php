<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Responsive Web Mobile - Ecommerce Item</title>

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
				<div class="row">
			<?php
				include 'template/connection.php';
				
				if(isset($_GET['indexitems']))
				{
					$items = $_GET['indexitems'];	
					$query = "SELECT * FROM products WHERE id='$items'";
				}
				else
				{
					$items = $_GET['item'];
					$query = "SELECT * FROM products WHERE id='$items'";
				}
				
				$result = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($result))
				{
						$id = $row['id'];
						$price = $row['price'];
						$image = $row['image'];
						$brand = $row['brand'];
						$model = $row['model_no'];
						$subcat = $row['subcategory'];		
						

				}
				
					if($id == $items)
					{								
					echo '<div class="span5">
							<div class="carousel-inner">
									<img class="media-object" src="'.$image.'" alt="" />
							</div>
					</div>';
					}else{
							echo '<script>window.location.href = "index.php";</script>';
					}
					?>
					
					<div class="span4">
						<h4>Item Brand : <?php echo $brand; ?></h4>
						<h5>Item Model<?php echo '   '.$model; ?></h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<h4><?php echo 'Price &pound;'.$price ?></h4>
						
					</div>
				</div>

				<div class="row">
					<div class="span9">
						<ul class="nav nav-tabs" id="tabs" class="box">
							<li><a class="box" href="#reviews">Descriptions</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="description">
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</p>
							</div>
							
									
						<?php
						$query = "SELECT * FROM comment WHERE dressid='$items'";
						$result = mysqli_query($connection, $query);
						$num = mysqli_num_rows($result);
						echo '<ul class="nav nav-tabs" id="tabs">
							<li><a class="box" href="#reviews"><span class="badge badge-inverse">'.$num.'</span> Reviews</a></li>
						</ul>'; 
						while ($row = mysqli_fetch_assoc($result))
						{
							$name = $row['username'];
							$comment = $row['comment'];
							
							echo '<div id="commentname"><h5>'.$name.'</h5>';
							echo '<p>'.$comment.'</p></div>';
						}
						
						?>
						
						<?php if(isset($_SESSION['username']))
						{		?>	
								<form method="post" action="template/comment.php">
									<input type="hidden" value="<?php echo $items; ?>" name="commentid"/>
									<input type="text" name="comment"/><br/>
									<input type="submit" name="esubmit" class="btn"/> 
								</form>
						<?php
						}else{
							echo '<h5>Login to Comment</h5>';
						}
						 ?>		
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'template/footer.php'; ?>
