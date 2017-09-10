<?php
if(isset($_GET['manageaddress']))
{
include 'template/connection.php';	
$user= $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result))
{
	$id = $row['id'];
	$username = $row['username'];
	$email = $row['email'];
	$phone = $row['phone'];
	$question = $row['question'];
	$house = $row['house_no'];
	$street = $row['street'];
	$state = $row['state'];
	$postcode = $row['postcode'];
	$country = $row['country'];
}
}
?>	
<form action="useraccount/updateuser.php" method="post">	
	<fieldset class="amendp">
		<legend>
			Enter Product Details
		</legend>
	
		<table style="width:600px;" id="a_table">
			<input type="hidden" name="id" value="<?php echo $id ?>" class="input"/><br/>		
		<tr>
			<td><label class="label">Username :</label></td>
			<td><input type="text" name="username" value="<?php echo $username ?>" class="input"/><br/></td>
		</tr>
		<tr>
			<td><label class="label">Memorable Question :</label></td>
			<td><input type="text" name="question" value="<?php echo $question ?>" class="input"/><br/></td>
		</tr>
		<tr>
			<td><label class="label">Memorable Answer :</label></td>
			<td><input type="password" name="answer" class="input"/><br/></td>
		</tr>				
			
		<tr>
			<td><label class="label">Email :</label></td>
			<td><input type="text" name="email" value="<?php echo $email ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Phone :</label></td>
			<td><input type="text" name="phone" value="<?php echo $phone ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">House No :</label></td>
			<td><input type="text" name="house" value="<?php echo $house ?>" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Street :</label></td>
			<td><input type="text" name="street" value="<?php echo $street ?>" class="input"/><br/></td>
		</tr>	
			
		<tr>
			<td><label class="label">State :</label></td>
			<td><input type="text" name="state" value="<?php echo $state ?>" class="input"/><br/></td>
		</tr>
			
		<tr>		
			<td><label class="label">Postcode :</label></td>
			<td><input type="text" name="postcode" value="<?php echo $postcode ?>" class="input"/><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Country</label></td>
			<td><input type="text" name="country" value="<?php echo $country ?>" class="input"/><br/></td>
		</tr>
		
		<tr>	
			<td></td>
			<td>
				<input type="submit" name="submit" class="btn"/>
				<input type="reset" name="clear" class="btn"/>
				<a href="useraccount.php?profile=view" class="btn">Cancel</a>
			</td>
		</tr>	
		</table>
	
	</fieldset>	
</form>

