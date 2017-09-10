<form action="useraccount/updatepassword.php" method="post">	
	<fieldset class="amendp">
		<legend>
			Change Password
		</legend>
	
		<table style="width:600px;" id="a_table">	
		<tr>
			<td><label class="label">Current Password :</label></td>
			<td><input type="password" name="oldpassword" class="input"/><br/></td>
		</tr>
			
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
				<input type="submit" name="submit" class="btn"/>
				<a href="useraccount.php?profile=view" class="btn">Cancel</a>
			</td>
		</tr>	
		</table>
	
	</fieldset>	
</form>
