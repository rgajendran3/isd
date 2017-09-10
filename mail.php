<?php
session_start();
if($_SESSION['acctype'] == "N")
{
	header('location:./useraccount.php?profile=view');
}
else if($_SESSION['acctype'] != "A")
{
	header('location:./index.php#signin');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Mail System</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" /> 
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/product.css" />

</head>
<body>
	<?php include './template/header_account.php'; ?>
	<div class="span9" id="account_manage">
		<div id="wrapper">
			
			<h1>Newsletter Mail System</h1>

			<div id="mail_form">
				<form action="mail.php" method="post">
					<input name="user_subject" id="user_subject" type="text" placeholder="Subject"/><br/><br/>
					<textarea name="message_box" id="message_box" placeholder="Message"></textarea><br/><br/>
					<input name="sender" id="sender_name" type="text" placeholder="Sender Name"/><br/><br/><br>					
					<input type="submit" name="submit" id="mail_submit" value="Send"/>
				</form>
				<h3 id="mail-sent-heading">Message sent to:-</h3>
				<?php

				if ($_POST) {
					if (isset($_POST['message_box']) AND !empty($_POST['message_box']))
						include 'template/connection.php';
					$find_comments = mysqli_query($connection, "SELECT * FROM other");
					while ($row = mysqli_fetch_assoc($find_comments)) {
						$to = $row['email'];
						$message_box = $_POST['message_box'];
						$sender = $_POST['sender'];
						$subject = $_POST['user_subject'];
						$message = <<<EMAIL
Hi,

$message_box

From $sender

EMAIL;

						mail($to, $subject, $message);
						echo $to.'<br/>';
					}
				} else {
					echo "Enter a message to send";
				}
				?>
			</div>
		</div><!---wrapper--->
		
	</div>

	<?php include './template/footer.php'; ?>
</body>
</html>
