<?php
if(isset($_POST['submit']))
{
	$email = htmlentities(trim($_POST['email']));
	if(isset($email))
	{
		if(!is_numeric($email))
		{
			if(filter_var($email, FILTER_VALIDATE_EMAIL) AND filter_var($email, FILTER_SANITIZE_EMAIL))
			{
				include '../template/connection.php';
				$query = "INSERT INTO other (email) VALUES('$email')";
				mysqli_query($connection, $query);
				echo '<script type="text/javascript">alert("Successfully Subscribed");
				window.location.href = "../index.php";</script>';
			}else{
				echo '<script type="text/javascript">alert("Not a valid email")</script>';
			}
			
		}else{
			echo '<script type="text/javascript">alert("Invalid email format")</script>';
		}
		
	}else{
		echo '<script type="text/javascript">alert("Email is not set")</script>';					
	}
}


?>