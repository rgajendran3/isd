<?php
include '../template/connection.php';

if(isset($_GET['deleteid']))
{
$id = $_GET['deleteid'];
$query = "DELETE FROM users WHERE id='$id'";
mysqli_query($connection, $query);

if(mysqli_affected_rows($connection) > 0){
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	
}else{
	echo "Error in query: $query. " . mysqli_error($connection);
	exit;
}
	$type= $_GET['account'];
	header("location:../myaccount.php?user=$type");
}
?>