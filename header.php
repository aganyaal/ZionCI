<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Zion Children's Home</title>


	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css" type="text/css"
		media="screen" />

	

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
	<script type='text/javascript'
		src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	<script type="text/javascript" src="https://kit.fontawesome.com/50c35a9f5a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light sticky-top">
		<div class="container-fluid">

			<a href="#" class="navbar-brand font-weight-bolder"> <?php echo $this->session->userdata('username'); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item">
						<a href="<?php echo base_url() ?>admin/register" class="nav-link">Add Administrator(s)</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url() ?>projects/create" class="nav-link">(Add) Projects</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url() ?>posts/create" class="nav-link">(Add) News</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url() ?>events/create" class="nav-link">(Add) Events</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url() ?>" class="nav-link">(Add) Photos</a>
					</li>

				</ul>

			</div>
			<a href="<?php echo base_url() ?>admin/logout" class="navbar-brand font-weight-bolder">Log Out <i
					class="fas fa-power-off text-danger"></i></a>
		</div>
	</nav>
	<div class="container">
