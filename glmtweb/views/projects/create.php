	<div class="content">
		<div id="createP_content">
			<h2>Create a Project</h2>
			
			<?php echo validation_errors(); ?>
			
			<?php echo form_open('projects/create') ?>
			
				<label for="title">Title</label> 
				<input type="input" name="title" /><br />
			
				<label for="text">Text</label>
				<textarea name="text"></textarea><br />
				
				<input type="submit" name="submit" value="Create news item" /> 
			
			</form>
		</div>
	</div>
</div><!-- End of wrapper -->