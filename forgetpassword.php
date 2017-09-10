<?php session_start();?>
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
	
	<?php include 'template/header.php';?>
	<div class="span9" id="account_manage">
		<form method="post" action="forgetpassword.php">
			<fieldset class="amendp">
				<legend>
					Reset Password
				</legend>
			
				<table style="width:600px;" id="a_table">						
				<tr>
					<td><label class="label">Username :</label></td>
					<td><input type="text" name="fusername" class="input"/><br/></td>
				</tr>
				<tr>	
					<td></td>
					<td>
						<input type="submit" name="username" class="btn"/>
						<a href="index.php" class="btn">Cancel</a>
					</td>
				</tr>				
				</table>
			
			</fieldset>				
		</form>
		<?php
		if(isset($_POST['username']))
		{
			$username = htmlentities(trim($_POST['fusername']));
			if(strlen($username) > 3)
			{
				include 'template/connection.php';
				$query = "SELECT username, question, answer FROM users WHERE username='$username'";
				$result = mysqli_query($connection, $query);
				$num = mysqli_num_rows($result);
				
				if($num != 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$question = $row['question'];
						$answer = $row['answer'];
						$user = $row['username'];
						$_SESSION['forget'] = $user;
						?>
				<form method="post" action="forgetpassword.php">
						<fieldset class="amendp">
							<legend>
								Reset Question
							</legend>
						
							<table style="width:600px;" id="a_table">
							<tr>
								<td>Hello.! <?php echo $_SESSION['forget']; ?></td>

							</tr>	
							<tr>
								<td><?php echo $question; ?></td>

							</tr>							
							<tr>
								<td><label class="label">Answer :</label></td>
								<td><input type="text" name="fanswer" class="input"/><br/></td>
							</tr>
							<tr>	
								<td></td>
								<td>
									<input type="submit" name="second_submit" class="btn"/>
									<a href="index.php" class="btn">Cancel</a>
								</td>
							</tr>				
							</table>
						
						</fieldset>				
				</form>
						
						
						
						
						<?php
					}
					
					
				} else{
					echo "You are not a registered user";
				}	
				
				
			}else{
				echo "Username Incorrect";
			}
		}else if(isset($_POST['second_submit']))
		{
			include 'template/connection.php';
			$answer = htmlentities(trim($_POST['fanswer']));
			$answerhash = md5($answer."gajendraretail");
			$username12 = $_SESSION['forget'];
			$query3 = "SELECT answer FROM users WHERE username = '$username12'";
			$result = mysqli_query($connection, $query3);
			while($row = mysqli_fetch_assoc($result))
			{
				$dbanswer = $row['answer'];
				if($dbanswer == $answerhash)
				{
					?>
		<form action="useraccount/updatepassword.php?forget=password" method="post">	
			<fieldset class="amendp">
				<legend>
					Change Password
				</legend>
			
				<table style="width:600px;" id="a_table">						
				<tr>
					<td><label class="label">New Password :</label></td>
					<td><input type="password" name="password1" class="input"/><br/></td>
				</tr>
					
				<tr>
					<td><label class="label">Re-Enter New Password :</label></td>
					<td><input type="password" name="password2"class="input"/><br/></td>
				</tr>
						
				<tr>	
					<td></td>
					<td>
						<input type="submit" name="forget" class="btn"/>
						<a href="index.php" class="btn">Cancel</a>
					</td>
				</tr>	
				</table>
			
			</fieldset>	
		</form>
					
					<?php
				}else{
					echo "Incorrect Answer";
				}
				
 			}
			
		}
		
		
		
		
		
		
		?>
		



	</div>

	<?php include 'template/footer.php'; ?>
</body>
</html>