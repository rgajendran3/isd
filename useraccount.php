<?php
session_start();
if($_SESSION['acctype'] != "N")
{
	header('location:./index.php');
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
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="css/product.css" />

</head>
<body>
	
	<?php include 'template/header_account.php';?>
	<div class="span9" id="account_manage">
		<div id="user_wrapper">
		<?php
			if(isset($_GET['profile']))
			{
				include 'useraccount/manageprofile.php';
			}else if(isset($_GET['manageaddress']))
			{
				include 'useraccount/amenduser.php';
			}else if(isset($_GET['updatepassword']))
			{
				include 'useraccount/password.php';
			}
			else{
				header('location:useraccount.php?profile=view');
			}
			
		?>
		</div>
	</div>

	<?php include 'template/footer.php'; ?>
</body>
</html>