<h2>Edit an Employee</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/editUser') ?>

	<label for="firstname">Name:</label> 
	<input type="input" name="firstname" />
	<br />
	<label for="lastname">Lastname:</label> 
	<input type="input" name="lastname" />
	<br />
	<label for="position">Position:</label> 
	<input type="input" name="position"/>
	<br />
	<label for="info">Info</label>
	<textarea name="info"></textarea><br />
	
	<input type="submit" name="submit" value="Edit an employee" /> 

</form>