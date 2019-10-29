<?php echo validation_errors(); ?>

<?php echo form_open('admin/register'); ?>

<div class="container m-4 p-4">
	<h1 class="text-center"><?= $title; ?></h1>
	<div class="row">
		<div class="form-group col-6">
			<label>Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">

			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">

			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<div class="form-group col-6">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">

			<label>Confirm Password</label>
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		</div>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>

<?php echo form_close(); ?>
