<div class="jumbotron">
	<h2 class="lead display-4 text-center"><?=$title;?><br><a class="btn btn-outline-info"
			href="<?php echo base_url(); ?>projects">Projects <i class="fas fa-book"></i></a>
		<hr>
	</h2>
	<div class="row">
		<div class="col-6">
			<img class="img img-thumbnail w-100"
				src="<?php echo site_url(); ?>public/images/projects/<?php echo $project['project_image']; ?>"></div>
		<div class="col-6 container">
			<div class="post-body text-justify text-monospace">
				<?php echo $project['body']; ?>
			</div>
		</div>
	</div>

	<?php if ($this->session->userdata('is_administrator')): ?>
	<hr>
	<a class="btn btn-info m-2 btn-block pull-left"
		href="<?php echo base_url(); ?>projects/edit/<?php echo $project['slug']; ?>">Edit</a>
	<form class="cat-delete" action="<?php echo base_url(); ?>projects/delete/<?php echo $project['id']; ?>" method="POST">
		<input type="submit" value="Delete" class="btn m-2 btn-block btn-danger">
	</form>
	<?php endif;?>
</div>
