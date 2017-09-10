<?php
session_start();
if (isset($_POST['esubmit'])) {
	$text = htmlentities(trim($_POST['comment']));
	$id = $_POST['commentid'];
	$username = $_SESSION['username'];
	if (!empty($text)) {
		if (!is_numeric($text)) {
			include 'connection.php';	
			$query = "INSERT INTO comment (username, dressid, comment) VALUES ('$username','$id', '$text')";
			mysqli_query($connection, $query);
			header("location:../ecommerce-item.php?item=$id");
		} else {
			echo "Text cannot be numeric";
		}
	} else {
		echo "Text is empty";
	}
}
?>