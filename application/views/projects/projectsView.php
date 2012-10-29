<?php foreach ($projects as $projects_item): ?>

    <h2><?php echo $projects_item['title'] ?></h2>
    <div id="main">
        <?php echo $projects_item['text'] ?>
    </div>
    <p><a href="pages/project/<?php echo $projects_item['slug'] ?>">View article</a></p>

<?php endforeach ?>