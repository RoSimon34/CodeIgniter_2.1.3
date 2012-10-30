	<div class="content">
		<div id="admin_content">
			<h1>Administration</h1>
			<h2>Welcome: <?php echo $username; ?></h2>
			<?php echo anchor('pages/users', '<span id="employees">Current Employees</span>', 'title=employees') ?>
			<br />
			<br />
			<?php echo anchor('projects/createproject', '<span>Create Project</span>', 'title=create project') ?> |
			<?php echo anchor('users/createU', '<span>Add Employee</span>', 'title=create user') ?>
			<br />
			<br />
			<?php echo anchor('admin/logout', '<span>Logout</span>', 'title=logout') ?>
		</div>


	</div>
	
</div><!-- End of wrapper -->