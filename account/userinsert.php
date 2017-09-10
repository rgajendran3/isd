<?php
if (isset($_POST['admin'])) 
{
	$admin = htmlentities(trim($_POST['admin']));
	$username = htmlentities(trim($_POST['username']));
	$password1 = htmlentities(trim($_POST['password1']));
	$password2 = htmlentities(trim($_POST['password2']));
	$email = htmlentities(trim($_POST['email']));
	$phone = htmlentities(trim($_POST['phone']));
	$house = htmlentities(trim($_POST['house']));
	$street = htmlentities(trim($_POST['street']));
	$state = htmlentities(trim($_POST['state']));
	$postcode = htmlentities(trim($_POST['postcode']));
	$country = htmlentities(trim($_POST['country']));

	if (filter_var(isset($username), FILTER_SANITIZE_STRING)) 
	{
		if(!is_numeric($username))
		{
		$password1 = htmlentities(trim($_POST['password1']));
		$password2 = htmlentities(trim($_POST['password2']));
		if ($password1 == $password2) 
		{
				
			if (!empty($password1) && !empty($password2)) 
			{
					
				if(strlen($password2) >= 10)
				{
					
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
							
						if (strlen($phone) == 10) 
						{
							if (isset($house)) 
							{

								if (isset($country)) 
								{

									$hash = md5($password2);
									$connection = mysqli_connect('127.0.0.1','root','','isd');
									$query = "INSERT INTO users (username, admin, password, email, phone, house_no, street, state, postcode, country) VALUES ('$username', '$admin','$hash', '$email', '$phone', '$house', '$street', '$state', 
									'$postcode', '$country')";

									mysqli_query($connection, $query);

									echo '<script type="text/javascript">alert("Successfully Added");
										window.location.href = "../myaccount.php?useradd=add";</script>';

								} else {
										echo '<script type="text/javascript">alert("Enter Country Field");
											window.location.href = "../myaccount.php?useradd=add";</script>';
									   }
							} else {
									echo '<script type="text/javascript">alert("State or Postcode is empty");
										window.location.href = "../myaccount.php?useradd=add";</script>';
									}
						} else {
								echo '<script type="text/javascript">alert("Phone no should be 10 digit");
									window.location.href = "../myaccount.php?useradd=add";</script>';
								}
					} else {
							echo '<script type="text/javascript">alert("Enter Valid Email Address");
							window.location.href = "../myaccount.php?useradd=add";</script>';
							}
				}else{
					echo '<script type="text/javascript">alert("Password should be more than 10 digit");
					window.location.href = "../myaccount.php?useradd=add";</script>';
					}
				
			} else {
				echo '<script type="text/javascript">alert("Password cannot be empty");
				window.location.href = "../myaccount.php?useradd=add";</script>';
			}

		} else {
			echo '<script type="text/javascript">alert("Password Mismatch");
			window.location.href = "../myaccount.php?useradd=add";</script>';
		}
		}else{
			echo '<script type="text/javascript">alert("Username cannot be numeric");
			window.location.href = "../myaccount.php?useradd=add";</script>';
		}

	} else {
		echo '<script type="text/javascript">alert("Password cannot be numeric");
		window.location.href = "../myaccount.php?useradd=add";</script>';
	}
}
?>