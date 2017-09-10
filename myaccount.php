<?php
session_start();
if($_SESSION['acctype'] == "N")
{
	header('location:./useraccount.php?profile=view');
}
else if($_SESSION['acctype'] != "A")
{
	header('location:./index.php#signin');
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
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/product.css" />

</head>
<body>
	<?php include './template/header_account.php'; ?>
	<div class="span9" id="account_manage">
		<div id="wrapper">
			
			<?php
			
			if(isset($_GET['amend']))
			{					
				include 'account/AmendProduct.php';	
			}
			else if(isset($_GET['useramend']))
			{
				include 'account/amenduser.php';
			}
			else if(isset($_GET['product']))
			{
				include 'account/InsertProduct.php';
			}
			else if(isset($_GET['useradd']))
			{
				include 'account/insertusers.php';
			}			
			else if(!isset($_GET['amend']) && !isset($_GET['delete']))
			{	
				include 'account/ManageProduct.php';	
			}
			?>
		</div>
	</div>

	<?php include './template/footer.php'; ?>
</body>
</html>