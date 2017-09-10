<?php
include '../template/connection.php';

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$house = $_POST['house'];
	$street = $_POST['street'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$country = $_POST['country'];
	$hash = md5($answer."gajendraretail");

	$query = "UPDATE users SET admin='N', username='$username', question='$question', answer='$hash', email='$email', phone='$phone', house_no='$house', street='$street', state='$state', 
	postcode='$postcode', country='$country' WHERE id='$id'";
	mysqli_query($connection, $query);

		header("location:../myaccount.php?user=".$admin);
		
	
}else{
		header('location:../index.php');
}

?>