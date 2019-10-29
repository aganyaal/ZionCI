<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Zion Children's Home</title>
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css" type="text/css"
		media="screen" />
	<style type="text/css">
		.pricing .card {
			border: none;
			border-radius: 1rem;
			transition: all 0.2s;
			box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
		}

		.pricing hr {
			margin: 1.5rem 0;
		}

		.pricing .card-title {
			margin: 0.5rem 0;
			font-size: 0.9rem;
			letter-spacing: .1rem;
			font-weight: bold;
		}

		.fas {
			font-size: 16px;
			color: red;
		}

		.pricing .btn {
			font-size: 80%;
			border-radius: 5rem;
			letter-spacing: .1rem;
			font-weight: bold;
			padding: 1rem;
			opacity: 0.7;
			transition: all 0.2s;
		}

		@-webkit-keyframes slideIn {
			0% {
				-webkit-transform: transform;
				-webkit-opacity: 0;
			}

			100% {
				-webkit-transform: translateY(0);
				-webkit-opacity: 1;
			}

			0% {
				-webkit-transform: translateY(1rem);
				-webkit-opacity: 0;
			}
		}

		.slideIn {
			-webkit-animation-name: slideIn;
			animation-name: slideIn;
		}

		/* Other styles for the page not related to the animated dropdown */

		body {
			background: #007bff;
			background: linear-gradient(to right, #0062E6, #33AEFF);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		/* Hover Effects on Card */

		@media (min-width: 992px) {
			.pricing .card:hover {
				margin-top: -.25rem;
				margin-bottom: .25rem;
				box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
			}

			.pricing .card:hover .btn {
				opacity: 1;
			}
		}

	</style>

</head>

<body style='background-image: url("<?php echo base_url(); ?>/public/images/landing.jpg");'>
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
		<div class="container-fluid w-100">
			<a href="<?php echo base_url() ?>" class="navbar-brand font-weight-bolder">
				Zion Children's Home
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item">
						<?php if ($this->session->userdata('logged_in')): ?>
							<a class="navbar-brand font-weight-bolder text-light">
								<?php echo ucfirst($this->session->userdata('username')); ?>
								(<small class="font-italic text-success font-weight-bolder" style="cursor:none">
									Logged in
								</small>)
							</a>
						<?php else: ?>
							<a href="<?php echo base_url();?>login_register/signup"	class="nav-link font-italic text-info">
								Join our Community
							</a>
						<?php endif; ?>
					</li>
				</ul>
			</div>

			<a href="<?php echo base_url() ?>login_register/logout" class="navbar-brand font-weight-bolder">Log Out <i
					class="fas fa-power-off text-danger"></i></a>
		</div>
	</nav>


	<section class="pricing py-5 w-100">
		<div class="container">
			<div class="col-12 m-4">
				<div class="card mb-5 mb-lg-0" onclick="location.href='<?php echo base_url();?>Volunteers'">
					<div class="card-body">
						<h5 class="card-title text-uppercase text-center">Become a Volunteer</h5>
			
<div class="card-footer">
						<a href="#" class="  btn btn-block btn-primary text-uppercase">Volunteer</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 m-4">
				<div class="card mb-5 mb-lg-0" onclick="location.href='<?php echo base_url();?>Welcome'">
					<div class="card-body">
						<h5 class="card-title text-uppercase text-center">Become a Sponsor</h5>
						<div class="card-footer">
						<a href="#" class="  btn btn-block btn-primary text-uppercase">Sponsor</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 m-4">
				<div class="card mb-5 mb-lg-0" onclick="location.href='<?php echo base_url();?>Welcome'">
					<div class="card-body">
						<h5 class="card-title text-uppercase text-center">Send your donation</h5>
						<div class="card-footer">
						<a href="#" class=" btn btn-block btn-primary text-uppercase">Donate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>\public\js\jquery.slim.min.js"></script>

	<script src="<?php echo base_url(); ?>\public\js\bootstrap.bundle.min.js"></script>
</body>

</html>
