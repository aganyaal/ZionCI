<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/public/css/bootstrap.min.css" type="text/css"
		media="screen" />
	<style type='text/css'>
		.carousel-item {
			height: 100vh;
			min-height: 350px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

	</style>
</head>

<body>
	<header>
		<div class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active"
					style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="display-4">Congratulations!<br>
						<small class="lead">Your account has been created.
							<button class="btn btn-dark"><?php echo anchor('Login_register', 'Login Now');?></button></small></h2>
						.
					</div>
				</div>
			</div>

		</div>
	</header>

</body>

</html>
