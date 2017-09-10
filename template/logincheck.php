<?php

	if(isset($_POST['username']) AND isset($_POST['password']))
	{
		session_start();
		$username = htmlentities(trim($_POST['username']));
		$password = htmlentities(trim($_POST['password']));
		
		$hash = md5($password."gajendraretail");
		
		//$connection = mysqli_connect('50.62.209.39:3306','GajendraISD','G@jendran2021','isd');
		include '../template/connection.php';
		$query = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
		$result = mysqli_query($connection, $query);
		$num = mysqli_num_rows($result);
		
		if($num == 1)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$admin = $row['admin'];
				if($admin == "A")
				{
					
					$_SESSION['username'] = $username;
					$_SESSION['acctype'] = $admin; 
					header('location:../myaccount.php?name=billing');
					
				}else if ($admin == "N"){
						
					$_SESSION['username'] = $username;
					$_SESSION['acctype'] = $admin;
					header('location:../index.php');
					
				}
			}	
		}else{
			$_SESSION['error'] = "Incorrect Username or Password";
			header('location:../index.php');
		}		
	}						
?>