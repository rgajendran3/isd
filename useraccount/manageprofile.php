<?php
include 'template/connection.php';
if($_GET['profile'] == "view")
{
	$session = $_SESSION['username'];
	$query = "SELECT * FROM users WHERE username='$session'";
	$heading = "Profile";
}else{
	header('location:index.php');
}

$result = mysqli_query($connection, $query);

if(isset($_GET['profile']))
{
	echo "<h1>$heading</h1><br><br><br><br><br>";
	echo '<div id="managetable"><table>';
	
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$admin = $row['admin'];
		$username = $row['username'];
		$question = $row['question'];
		$email = $row['email'];
		$phone = $row['phone'];
		$house = $row['house_no'];
		$street = $row['street'];
		$state = $row['state'];
		$postcode = $row['postcode'];
		$country = $row['country'];
?>
<div id="user_profile">
<table style="width:600px" class="user_profile">
	<tr>
		<td class="user_heading"><label>Account Type</label></td>
		<td>
		<?php echo $admin; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Username</label></td>
		<td>
		<?php echo $username; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Memorable Question :</label></td>
		<td>
		<?php echo $question; ?>
		</td>
	</tr>		
	<tr>
		<td class="user_heading"><label>Email :</label></td>
		<td>
		<?php echo $email; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Phone</label></td>
		<td>
		<?php echo $phone; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>House</label></td>
		<td>
		<?php echo $house; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Street</label></td>
		<td>
		<?php echo $street; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>State</label></td>
		<td>
		<?php echo $state; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Postcode</label></td>
		<td>
		<?php echo $postcode; ?>
		</td>
	</tr>
	<tr>
		<td class="user_heading"><label>Country</label></td>
		<td>
		<?php echo $country; ?>
		</td>
	</tr>

<?php		
	}
}
echo '</table></div>';

?>