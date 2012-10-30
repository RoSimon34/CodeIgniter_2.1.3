	<div class="content">
		<div id="projectsView_content">

			<?php foreach ($projects as $projects_item): ?>
			
			    <h2><?php echo $projects_item['title'] ?></h2>
			    <div id="main">
			        <?php echo $projects_item['text'] ?>
			    </div>
			    <?php echo anchor("projects/deleteProject/".$projects_item['id'],"Delete");?>
			    <p><a href="pages/project/<?php echo $projects_item['slug'] ?>">View article</a></p>
			
			<?php endforeach ?>
		</div>
	</div>
</div><!-- End of wrapper -->