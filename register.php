<?php
session_start();
if (!isset($_POST['username']) AND !isset($_POST['email']) AND !isset($_POST['house_no'])) {
	$_POST['username'] = NULL;
	$_POST['email'] = null;
	$_POST['house_no'] = null;
}

if (!isset($_POST['street']) AND !isset($_POST['state']) AND !isset($_POST['postcode'])) {
	$_POST['street'] = null;
	$_POST['state'] = null;
	$_POST['postcode'] = null;
}

if (!isset($_POST['country']) AND !isset($_POST['password1']) AND !isset($_POST['password2'])) {
	$_POST['country'] = null;
	$_POST['password1'] = null;
	$_POST['password2'] = null;

}

if (!isset($_POST['question']) AND !isset($_POST['answer'])) {
	$_POST['question'] = null;
	$_POST['answer'] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Responsive Web Mobile - Ecommerce</title>

		<!-- Included Bootstrap CSS Files -->
		<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />

		<!-- Includes FontAwesome -->
		<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

		<!-- Css -->
		<link rel="stylesheet" href="./css/style.css" />

	</head>
	<body>
		<?php
		include 'template/header.php';
		?>
		<h2 align="center">Register</h2>
		<br>
		<br>
		<br>
		<br>
		<div class="span9" class="formed">
			<form class="form login-form" method="post" action="register.php">
				<table style="width:600px" class="r_table">
					<tr>
						<td><label>Username</label></td>
						<td>
						<input type="text" name="username" value="<?php echo $_POST['username']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td>
						<input type="password" name="password1" value="<?php echo $_POST['password1']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Re-Enter Password</label></td>
						<td>
						<input type="password" name="password2" value="<?php echo $_POST['password2']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Memorable Question</label></td>
						<td>
						<input type="text"	name="question" value="<?php echo $_POST['question']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Memorable Answer</label></td>
						<td>
						<input type="password" name="answer" value="<?php echo $_POST['answer']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Email</label></td>
						<td>
						<input type="email" name="email" value="<?php echo $_POST['email']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Phone No</label></td>
						<td>
						<input type="number" name="phone" value="<?php echo $_POST['phone']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>House No</label></td>
						<td>
						<input type="text" name="house_no" value="<?php echo $_POST['house_no']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Street</label></td>
						<td>
						<input type="text" name="street" value="<?php echo $_POST['street']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>State</label></td>
						<td>
						<input type="text" name="state" value="<?php echo $_POST['state']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Postcode</label></td>
						<td>
						<input type="text" name="postcode" value="<?php echo $_POST['postcode']; ?>"/>
						</td>
					</tr>
					<tr>
						<td><label>Country</label></td>
						<td>
						<input type="text" name="country" value="<?php echo $_POST['country']; ?>"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="submit" class="btn-success" class="btn-register"/>
						</td>
					</tr>
				</table>

			</form>

		</div>
		<div id="r_error">
			<div id="r_error_text">
				<?php
				if (isset($_POST['submit'])) {
					$username = htmlentities(trim($_POST['username']));
					$email = htmlentities(trim($_POST['email']));
					$phone = htmlentities(trim($_POST['phone']));
					$house = htmlentities(trim($_POST['house_no']));
					$street = htmlentities(trim($_POST['street']));
					$state = htmlentities(trim($_POST['state']));
					$postcode = htmlentities(trim($_POST['postcode']));
					$country = htmlentities(trim($_POST['country']));
					$question = htmlentities(trim($_POST['question']));
					$answer = htmlentities(trim($_POST['answer']));
					
					
					if (!empty($username)) {
						if (filter_var(isset($username), FILTER_SANITIZE_STRING)) {
							if (!is_numeric($username)) {
								$password1 = htmlentities(trim($_POST['password1']));
								$password2 = htmlentities(trim($_POST['password2']));
								
								if ($password1 == $password2) {

									if (!empty($password1) && !empty($password2)) {

										if (strlen($password2) >= 10) {

											if (filter_var($question, FILTER_SANITIZE_STRING)) {

												if (strlen($question) > 8) {

													if (filter_var($answer, FILTER_SANITIZE_STRIPPED)) {

														if (strlen($answer) > 8) {

															if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

																if (strlen($phone) == 10) {

																	if (!empty($house) AND !empty($state) AND !empty($postcode)) {

																		if (!empty($country) AND !empty($street)) {

																			$hash = md5($password2 . "gajendraretail");
																			$ans = md5($answer . "gajendraretail");
																			include 'template/connection.php';
																			$query = "INSERT INTO users (admin, username, password, question, answer, email, phone, house_no, street, state, postcode, country) VALUES
																										('N', '$username', '$hash', '$question', '$ans', '$email', '$phone', '$house', '$street', '$state', '$postcode', '$country')";

																			mysqli_query($connection, $query);
																			echo "Successfully Registered";

																		} else {
																			echo "Invalid country or street";
																		}
																	} else {
																		echo "State or postcode or house is empty";
																	}
																} else {
																	echo "Phone Number should be 10 digit";
																}
															} else {
																echo "Incorrect Email Format";
															}
														} else {
															echo "Answer should be more than 8 character";
														}
													} else {
														echo "Invalid Answer type";
													}

												} else {
													echo "Question should be more than 8 character";
												}
											} else {
												echo "Invalid Question type";
											}
										} else {
											echo "Password should be more than 10 character";
										}

									} else {
										echo "Password cannot be empty";
									}

								} else {
									echo "Password Mismatch";
								}
							} else {
								echo "Username cannot be numeric value";
							}

						} else {
							echo "Invalid Username, Password cannot contain numbers";
						}
					} else {
						echo "Username Cannot be empty";
					}
				}
				?>
			</div>
		</div>
		<?php
		include 'template/footer.php';
		?>
	</body>
</html>