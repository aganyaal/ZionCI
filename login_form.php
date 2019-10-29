<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body
	style='background-image: url("<?php echo base_url();?>/public/images/login.jpg");background-position: center;background-repeat: no-repeat;background-size: cover;'>
	<div class="container text-light w-50 m-6 p-5">
		<h1 class="text-center">
			<a href="<?php echo base_url() ?>" class="navbar-brand font-weight-bolder">
				Home
			</a>
			<br>
			Login 
			<hr class="border-dark">
		</h1>
		<?php echo validation_errors('<p class="text-danger">'); ?>
		<?php echo form_open('login_register/validate_credentials'); ?>



		<?php if (!is_null($msg)) {
								echo $msg;}
							?>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="***********" required>
		</div>
		<button type="submit" class="btn btn-success btn-block">Login</button>
		<a href="<?php echo base_url(); ?>login_register/signup" class="btn btn-primary btn-block">Create Account</a>
		<?php echo form_close(); ?>
	</div>



</body>

</html>
