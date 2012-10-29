	<div class="content">
		<div id="admin_content">
			<h1>Administration</h1>
			<h2>Welcome: <?php echo $username; ?></h2>
			<?php echo anchor('projects/createproject', '<span>Create Project</span>', 'title=create project') ?>
			<br />
			<br />
			<?php echo anchor('admin/logout', '<span>Logout</span>', 'title=logout') ?>
		</div>


	</div>
	
</div>