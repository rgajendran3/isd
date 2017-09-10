<?php
include '../template/connection.php';

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$admin = $_POST['admin'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$house = $_POST['house'];
	$street = $_POST['street'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$country = $_POST['country'];

	$query = "UPDATE users SET admin='$admin', username='$username', email='$email', phone='$phone', house_no='$house', street='$street', state='$state', 
	postcode='$postcode', country='$country' WHERE id='$id'";
	mysqli_query($connection, $query);

		header("location:../myaccount.php?user=".$admin);
		
	
}else{
		header('location:../index.php');
}

?>