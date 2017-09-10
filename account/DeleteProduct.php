<?php
if($_SESSION['acctype'] != "A")
{
	header('location:../index.php');
}

include '../template/connection.php';

if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "DELETE FROM products WHERE id='$id'";
$category = $_GET['category'];
$sub = $_GET['sub'];

mysqli_query($connection, $query);

if(mysqli_affected_rows($connection) > 0){
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	
}else{
	echo "Error in query: $query. " . mysqli_error($connection);
	exit;
}

if(isset($category) && isset($sub))
{
	header("location:../myaccount.php?category=$category&&sub=$sub");
	
}else{
	header("location:../myaccount.php");
}
}

?>