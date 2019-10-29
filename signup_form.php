<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body
	style='background-image: url("../public/images/signup.jpg");'>



	<div class="container text-light">
		<h1 class="text-center">
			<a href="<?php echo base_url() ?>" class="navbar-brand font-weight-bolder">
				Home
			</a>
			<br>
			Create an Account! 
			<hr class="border-dark">
		</h1>
		<?php echo validation_errors('<p class="text-danger">'); ?>

		<?php echo form_open('login_register/create_member'); ?>

		<div class="container m-4 p-4">
			
			<div class="row">
				<div class="form-group col-6">
					<label>First Name</label>
					<input type="text" class="form-control" name="first_name" placeholder="Name">

					<label>Last Name</label>
					<input type="text" class="form-control" name="last_name" placeholder="Name">

					<label>Email</label>
					<input type="email" class="form-control" name="email_address" placeholder="Email">

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
			<button type="submit" class="btn btn-success btn-block">Sign Up</button>
			<a href="<?php echo base_url(); ?>login_register" class="btn btn-primary btn-block">Login</a>
		</div>

		<?php echo form_close(); ?>


	</div>

	
</body>
</html>
