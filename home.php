<?php
if (isset($_POST['emailSubmit'])) {

    function alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    function died($error)
    {
        echo alert($error);
        die();
    }

    // validation expected data exists
    if (!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= alert('The Email Address you entered does not appear to be valid.');
        $string_exp = "/^[A-Za-z .'-]+$/";
        if (!preg_match($string_exp, $first_name)) {
            $string_exp = "/^[A-Za-z .'-]+$/";
            $error_message .= alert('The First Name you entered does not appear to be valid.');
        }
        if (!preg_match($string_exp, $last_name)) {
            $error_message .= alert('The Last Name you entered does not appear to be valid.');
        }
        if (strlen($comments) < 2) {
            $error_message .= alert('The Comments you entered is too short.');
        }
        if (strlen($error_message) > 0) {
            died($error_message);
        }
    } else {

        alert('Thank you for contacting us. We will be in touch with you very soon.');
    }
}
?>



<!-- Image Slider -->
<!-- <div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active img-gradient">

				<img src="img/signup.jpg" alt="">

				<div class="carousel-caption">

				</div>
			</div>
			<div class="carousel-item">
				<div class="image-container">
					<img src="img/signup.jpg" alt="">
				</div>
				<div class="carousel-caption">

				</div>
			</div>
			<div class="carousel-item">
				<div class="image-container">
					<img src="img/signup.jpg" alt="">
				</div>
				<div class="carousel-caption">

				</div>
			</div>
		</div>
	</div> -->



<div id="getStarted" class="container-fluid text-justify p-4">

	<div class="card text-justify p-3" id="introText">
		<p class="lead text-white card-title p-2">
			<b class="font-italic">Zion Children's Home</b> is a home care group that was established to cater for
			childrens needs. We take children into our community and help them rehabilitate themselves. We run through
			donations and volunters who help either by funding or giving out clothes, shopping and other things
			necessary for the kids. We take children from young age to high school level. We appreciate all donations
			and embrace the community to help out whenever they can. In God we trust.
		</p>
	</div>
	<!-- Categories -->
	<div class="container-fluid padding text-center welcome">
		<div id="categories">
			<div class="row">
				<div class="col-12">
					<h1 class="display-4 text-light font-italic">
						How you can help us
					</h1>
					<hr class="border border-light">
					<h3 class="lead">Sign up to <a href="<?php echo base_url();?>login_register/signup"
							class="font-italic text-info">
							join our community
						</a> and you will be able to help us in one of the
						ways below:</h3>
				</div>

			</div>

			<div id="categoriesToggle" class="container-fluid text-center">
				<div class="row" id="icons">
					<div class="col-md-4">
						<i class="fas fa-hand-holding-usd" style="font-size: 4em;margin: 1rem;"></i>
						<h3>Donation</h3>
						<p class="lead">Donations could be in a variety of forms including; clothing, food items,
							monetary aid or any form of goodwill in general.
						</p>
					</div>
					<div class="col-md-4">
						<i class="fas fa-hands-helping" style="font-size: 4em;margin: 1rem;"></i>
						<h3>Voluntary Service</h3>
						<p class="lead">You can become a part of the various projects we undertake as an
							organization. Tasks range from babysitting to administrative duties.
						</p>
					</div>
					<div class="col-md-4">
						<i class="fas fa-child" style="font-size: 4em;margin: 1rem;"></i>
						<h3>Sponsorship</h3>
						<p class="lead">Choose a resident child and decide whether to cater to their clothing,
							their education or their general well-being.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="insightToggler">
	<button class="btn btn-block bg-transparent text-info" style="font-size: 2em;cursor: zoom-in;">

		Further insight on <b class="font-italic">Zion Children's Home</b>
		<hr class="my-4">
	</button>
</div>

<!-- Hidden Section  -->
<div class="container-fluid padding text-center">
	<div class="row">
		<div class="col-sm-6 col-md-3" style="cursor: pointer;">
			<div data-toggle="modal" data-target="#myVolunteerModal">
				<i class="fas fa-hands-helping" style="font-size:5em;"></i>
				<i class="fas fa-question" style="font-size:2em;"></i>
				<p class="lead text-center m-2">How to Volunteer</p>
			</div>
			<hr class="border border-primary">
			<div class="modal fade" id="myVolunteerModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title font-weight-bolder">Volunteering</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p class="lead">
								To volunteer for any of our projects, you will first have to join our
								community.
								This is just for accountability purposes. Click the button in the navigation bar
								to redirect to a place where you can join. </p>
							<p class="lead"> Once you are a member, you will have the freedom
								to choose from a variety of open projects and recurring activities. After selection,
								correspondence will be established until and after the date(s) of the activity.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3" style="cursor: pointer;">
			<div data-toggle="modal" data-target="#myDonateModal">
				<i class="fas fa-hand-holding-usd" style="font-size:5em;"></i>
				<i class="fas fa-question" style="font-size:2em;"></i>
				<p class="lead text-center m-2">How to donate</p>
			</div>
			<hr class="border border-primary">
			<div class="modal fade" id="myDonateModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title font-weight-bolder">Donating</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p class="lead">
								To volunteer for any of our projects, you will first have to join our
								community.
								This is just for accountability purposes. Click the button in the navigation bar
								to redirect to a place where you can join. </p>
							<p class="lead"> Once you are a member, you may choose from one of the donation methods. The
								donation amount is to your discretion. We appreciate every help that comes our way.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3" style="cursor: pointer;">
			<div data-toggle="modal" data-target="#mySponsorModal">
				<i class="fas fa-child" style="font-size:5em;"></i>
				<i class="fas fa-question" style="font-size:2em;"></i>
				<p class="lead text-center m-2">How to sponsor a child</p>
			</div>
			<hr class="border border-primary">
			<div class="modal fade" id="mySponsorModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title font-weight-bolder">Sponsoring</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p class="lead">
								To volunteer for any of our projects, you will first have to join our
								community.
								This is just for accountability purposes. Click the button in the navigation bar
								to redirect to a place where you can join. </p>
							<p class="lead"> Once you are a member, you will have the freedom
								to choose from a variety of categories of sponsorship. You may choose to sponsor a
								child's education. You may cater to their clothing and upkeep. You may also choose full
								sponsorship for all the child's everyday bills.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3" style="cursor: pointer;">
			<div onclick="location.href='<?php echo base_url();?>Frequent_questions'">
				<i class="fas fa-question-circle" style="font-size:5em;"></i>
				<p class="lead text-center m-2">FAQs</p>
			</div>
			<hr class="border border-primary">
		</div>
	</div>

</div>

<!-- Meet The Team -->
<div id="teamMembers" class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4 font-italic">
				Meet The Family
			</h1>
			<hr class="border border-dark">
		</div>

	</div>
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4 padding">
				<div class="card text-center">
					<img src="<?php echo site_url(); ?>public/images/founder.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<h3 class="card-title">Rev. Margaret Mwangi</h3>
						<h4 class="card-title">Founder</h4>

						<p class="card-text">

						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 padding">
				<div class="card text-center">
					<img src="<?php echo site_url(); ?>public/images/cofounder.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<h3 class="card-title">Apt. Simon</h3>
						<h4 class="card-title">Director</h4>
						<p class="card-text">

						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 padding">
				<div class="card text-center">
					<img src="<?php echo site_url(); ?>public/images/founder.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<h3 class="card-title">Rev.Margaret Mwangi</h3>
						<h4 class="card-title">Founder</h4>
						<p class="card-text">

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Social Media and Questions-->
<div id="social" class="container-fluid padding connect">
	<div class="row text-center padding">
		<div class="col-12">
			<h2 class="display-4 font-italic">Ask a Question <small class="text-muted"><sup><i
							class="far fa-comment-dots"></i><sup><i class="fas fa-question"></i></sup></small></sup>
			</h2>
			<hr class="border border-dark">
		</div>
	</div>
	<div class="container w-50 card bg-transparent" id="contactForm">
		<h3 class="card-title text-center text-dark m-2">Send us your question</h3>
		<?php echo form_open('frequent_questions/add'); ?>
		<div class="row p-2">
			<div class="row col-lg-5 col-md-5 col-sm-12 m-2">
				<div class="form-group">
					<label for="first_name">First Name <sup class="text-danger">*</sup></label>
					<input type="text" name="first_name" class="form-control">

					<label for=" last_name">Last Name <sup class="text-danger">*</sup></label>
					<input type="text" name="last_name" class="form-control">

					<label for="email">Email Address <sup class="text-danger">*</sup></label>
					<input type="text" name="email" class="form-control">

					<label for="telephone">Telephone Number</label>
					<input type="text" name="telephone" class="form-control">
				</div>
			</div>
			<div class="row col-lg-5 col-md-5 col-sm-12 m-2">
				<div class="form-group col-12">
					<label for="question">Question <sup class="text-danger">*</sup></label>
					<textarea name="question" maxlength="300" cols="25" rows="6" class="form-control"></textarea>
				</div>

				<div class="form-group col-12">
					<input type="submit" name="emailSubmit" value="Send" class="form-control">
				</div>
			</div>
		</div>
		</form>
	</div>

	<div class="col-12 social padding text-center">
		<a href="https://www.facebook.com/Zion-Childrens-Home-Kasarani-910369285758029/" target="_blank">
			<i class="fab fa-facebook" style="color: #3b5998;"></i>
		</a>
		<a href="#">
			<i class="fab fa-instagram" style="color: #517fa4"></i>
		</a>
		<a href="#">
			<i class="fab fa-youtube" style="color: #bb0000"></i>
		</a>
		<a href="#">
			<i class="fab fa-twitter" style="color: #00aced"></i>
		</a>
		<a href="#">
			<i class="fab fa-google-plus-g" style="color: #dd4b39"></i>
		</a>
	</div>

</div>

</div>
</div>
<!-- Footer -->
