	<div class="content">
		<div id="usersView_content">
			<?php echo anchor('users/createU', '<span>Add Employee</span>', 'title=create user') ?>
			<?php foreach ($users as $users_item): ?>
			
			    <h2><?php echo $users_item['firstname'] ?></h2>
			    <h2><?php echo $users_item['lastname'] ?></h2>
			    <h2><?php echo $users_item['position'] ?></h2>
			    <div id="main">
			        <?php echo $users_item['info'] ?>
			    </div>
			    <?php echo anchor("users/deleteUser/".$users_item['users_id'],"Delete");?>
			    <?php echo anchor("users/editUser/".$users_item['users_id'],"Edit");?>
			    <p><a href="pages/users/<?php echo $users_item['users_id'] ?>">View User Info</a></p>
			
			<?php endforeach ?>
		</div>
	</div>
</div><!-- End of wrapper -->