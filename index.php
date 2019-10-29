<div class="jumbotron bg-transparent">
	<h2 class="lead display-4 text-center">Frequently Asked Questions <sup><i class="fas fa-question-circle"></i></i></sup><hr class="border border-dark"></h2>
	<?php foreach($questions as $question) : ?>
	<div class="">
		<div class="">
			<small class="post-date">Posted on: <?php echo $question['posted_on']; ?> by
				<strong><?php  echo $question['first_name']." ".$question['last_name'];?> </strong></small><br>
			<?php echo word_limiter($question['question'], 60); ?>
			<br><br>
			<p><a class="btn btn-info" href="<?php echo site_url('/frequent_questions/'.$question['id']); ?>">View</a>
			</p>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>