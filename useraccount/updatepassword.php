
<?php
session_start();
if(isset($_POST['submit']))
{
	include '../template/connection.php';
	$oldpass = htmlentities(trim($_POST['oldpassword']));
	$pass1   = htmlentities(trim($_POST['password1']));
	$pass2	 = htmlentities(trim($_POST['password2']));
	$oldhash = md5($oldpass);
	$query = "SELECT username, password FROM users WHERE username='".$_SESSION['username']."' AND password='$oldhash'";
	$result = mysqli_query($connection, $query);
	$num = mysqli_num_rows($result);
	
	if($num == 1)
	{
		if($pass1 == $pass2)
		{
			if(!is_numeric($pass1) AND !is_numeric($pass2))
			{
				if(strlen($pass1) > 8 AND strlen($pass2) > 8)
				{
				$newpass = md5($pass2."gajendraretail");
				$update = "UPDATE users SET password='$newpass' WHERE username='".$_SESSION['username']."'";
				mysqli_query($connection, $update);
				echo '<script type="text/javascript">alert("Successfully Updated");
					window.location.href = "../useraccount.php?updatepassword";</script>';
				}else{
				echo '<script type="text/javascript">alert("Password should be more than 10 digit");
					window.location.href = "../useraccount.php?updatepassword";</script>';					
				}
				
			}else{
				echo '<script type="text/javascript">alert("Password cannot be numeric");
					window.location.href = "../useraccount.php?updatepassword";</script>';
			}
		}else{
			echo '<script type="text/javascript">alert("Password Mis-match");
				window.location.href = "../useraccount.php?updatepassword";</script>';
		}	
	}else{
		echo '<script type="text/javascript">alert("Incorrect Current Password");
	window.location.href = "../useraccount.php?updatepassword";</script>';
	}
}else if(isset($_POST['forget']))
{
	include '../template/connection.php';
	$pass1   = htmlentities(trim($_POST['password1']));
	$pass2	 = htmlentities(trim($_POST['password2']));
	
		if($pass1 == $pass2)
		{
			if(!is_numeric($pass1) AND !is_numeric($pass2))
			{
				if(strlen($pass1) > 8 AND strlen($pass2) > 8)
				{
				$newpass = md5($pass2."gajendraretail");
				$update = "UPDATE users SET password='$newpass' WHERE username='".$_SESSION['forget']."'";
				mysqli_query($connection, $update);
				echo '<script type="text/javascript">alert("Successfully Updated");
					window.location.href = "../useraccount.php?updatepassword";</script>';
				}else{
				echo '<script type="text/javascript">alert("Password should be more than 10 digit");
					window.location.href = "../useraccount.php?updatepassword";</script>';					
				}
				
			}else{
				echo '<script type="text/javascript">alert("Password cannot be numeric");
					window.location.href = "../useraccount.php?updatepassword";</script>';
			}
		}else{
			echo '<script type="text/javascript">alert("Password Mis-match");
				window.location.href = "../useraccount.php?updatepassword";</script>';
		}	
	
}


?>