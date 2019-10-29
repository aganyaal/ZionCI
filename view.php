<div class="jumbotron">
<a href="<?php echo base_url(); ?>Frequent_questions" class="btn btn-link btn-block">FAQs</a>
	<h2 class="lead display-4 text-center"><?= $title ?>
		<hr class="border border-dark">
	</h2>
	<div class="">
		<div class="">
			<small class="post-date">Posted on: <?php echo $question['posted_on']; ?> by
				<strong><?php  echo $question['first_name']." ".$question['last_name'];?> </strong></small><br>
			<?php echo word_limiter($question['question'], 60); ?>
		</div>
	</div>

	<?php if ($this->session->userdata('administrator')): ?>
	<hr>
	<form class="cat-delete" action="<?php echo base_url(); ?>questions/delete/<?php echo $question['id']; ?>"
		method="POST">
		<input type="submit" value="Delete" class="btn m-2 btn-block btn-danger">
	</form>
	<?php endif;?>

	<hr>
	<h3>Answers </h3>
	<?php if ($answers): ?>
	<?php foreach ($answers as $answer): ?>
	<div class="well">
		<h5><?php echo $answer['body']; ?> [by
			<strong><?php echo $answer['first_name']." ".$answer['last_name']; ?></strong> on
			<strong><?php echo $answer['posted_on']; ?></strong>]</h5>
	</div>
	<?php endforeach;?>
	<?php else: ?>
	<p>No answers yet</p>
	<?php endif;?>
	<hr>
</div>

<div class="jumbotron form">
	<h3>Add Answers</h3>
	<?php echo validation_errors(); ?>

	<?php echo form_open('answers/create/'.$question['id']); ?>
	<div class="form-group">
		<label class="text-monospace font-weight-bolder">First Name</label>
		<input type="text" name="first_name" class="form-control" required>

		<label class="text-monospace font-weight-bolder">Last Name</label>
		<input type="text" name="last_name" class="form-control" required>
	</div>
	<div class="form-group">
		<label class="text-monospace font-weight-bolder">Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
