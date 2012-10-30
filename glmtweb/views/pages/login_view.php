	<div class="content">
		<div id="login_content">
			<h1>Admin Login</h1>
			
			<?php
				if(!$this->session->userdata('logged_in')){
			?>
			
				<?php echo validation_errors(); ?>
				<?php echo form_open('pages/verifylogin'); ?>
				<label for="username">Username:</label>
				<input type="text" size="20" id="username" name="username"/>
				<br/>
				<label for="password">Password:</label>
				<input type="password" size="20" id="passowrd" name="password"/>
				<br/>
				<input type="submit" value="Login"/>
			</form>
			
			<?php
				}else{
			?>
				<p>You are already Logged in</p>
			<?php
				}
			?>
		</div>
	</div>
</div><!-- End Wrapper -->