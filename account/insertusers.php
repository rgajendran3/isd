<form action="account/userinsert.php" method="post">	
	<fieldset class="amendp">
		<legend>
			Enter Product Details
		</legend>
	
		<table style="width:600px;" id="a_table">
			<input type="hidden" name="id" class="input"/><br/>
		<tr>	
			<td><label class="label">Admin :</label></td>
			<td><input type="text" name="admin" class="input"/><br/></td>
		</tr>
		
		<tr>
			<td><label class="label">Username :</label></td>
			<td><input type="text" name="username" class="input"/><br/></td>
		</tr>
		
		<tr>
			<td><label class="label">Password :</label></td>
			<td><input type="text" name="password1" class="input" /><br/></td>
		</tr>
		
		<tr>
			<td><label class="label">Re-enter Password :</label></td>
			<td><input type="text" name="password2" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Email :</label></td>
			<td><input type="text" name="email" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Phone :</label></td>
			<td><input type="text" name="phone" class="input"/><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">House No :</label></td>
			<td><input type="text" name="house" class="input" /><br/></td>
		</tr>
			
		<tr>
			<td><label class="label">Street :</label></td>
			<td><input type="text" name="street" class="input"/><br/></td>
		</tr>	
			
		<tr>
			<td><label class="label">State :</label></td>
			<td><input type="text" name="state" class="input"/><br/></td>
		</tr>
			
		<tr>		
			<td><label class="label">Postcode :</label></td>
			<td><input type="text" name="postcode" class="input" /><br/></td>
		</tr>
			
		<tr>	
			<td><label class="label">Country</label></td>
			<td><input type="text" name="country" class="input"/><br/></td>
		</tr>
		
		<tr>	
			<td></td>
			<td>
				<input type="submit" name="submit" class="btn"/>
				<input type="reset" name="clear" class="btn"/>
				<a href="myaccount.php?user=A" class="btn">Cancel</a>
			</td>
		</tr>	
		</table>
	
	</fieldset>	
</form>