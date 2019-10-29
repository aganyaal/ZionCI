<div class="container p-4">
	<h2 class="display-4"><?= $title ?></h2>
	<?php foreach($projects as $project) : ?>
	<h3><?php echo $project['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="img img-fluid"
				src="<?php echo site_url(); ?>public/images/projects/<?php echo $project['project_image']; ?>">
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $project['created_at']; ?> in
				<strong><?php echo $project['name']; ?></strong><br>
				Runs from: <strong><?php echo $project['start']; ?></strong> to
				<strong><?php echo $project['start']; ?></strong></small><br>
			<?php echo word_limiter($project['body'], 60); ?>
			<br><br>
			<p><a class="btn btn-default" href="<?php echo site_url('/projects/'.$project['slug']); ?>">Read More</a>
			</p>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>
