<?php require_once("php/image-list.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Skate Smart, Live Fast</title>
		<meta charset="UTF-8">
		<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<head>
			<!-- Bootstrap/ Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
					integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
					crossorigin="anonymous">

			<link rel="stylesheet" href="css/style.css" type="text/css"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css"/>

			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

			<!-- jQuery v3.0 -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"
					  type="text/javascript"></script>

			<!-- Bootstrap - JS  Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
					  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
					  crossorigin="anonymous"></script>
			<!-- Fancybox -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
			<!-- Recaptcha password -->
			<script src='https://www.google.com/recaptcha/api.js'></script>
			<script type="text/javascript"
					  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
			<script type="text/javascript"
					  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
			<script type="text/javascript"
					  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
			<script src="js/form-validate.js"></script>
		</head>

	<body>
		<header>
			<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">ACT OR DIE</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#acknowledgements">Acknowledgements</a></li>
						<li><a href="#about-me"> About Sabaastian <span class="sr-only">(current)</span></a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#contact">Contact</a></li>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="background-image-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<h1 class="text-left">AmbientCreativiT</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="background-image-2" id="acknowledgements">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 col-xs-12 col-md-offset-1 thank-you">
						<div>
							<h2>Thank You</h2>
							<ul class="lead">
								<strong>
									<li>Sabastian would like to thank those that have helped him in the past. Family first, you
										know
										who you are
										and he loves you for that.
									</li>
									<li>He's had some of the best friends that any person can want. James Tracey for convincing
										him
										not to give
										up on a dream of where he is a downhill skater.
									</li>
									<li>He'd like to thank New Mexico Tech Hire and the W.K. Kellogg Foundation for helping me
										get
										into the CNM
										Ingennuity's Deep Dive Coding Bootcamp where he learned how to develop this site.
									</li>
								</strong>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="background-image-3" id="about-me">
			<h2>About Sabastian</h2>
			<p class="lead">Recognition once not sought after but after realizing that he had nothing to show for/to
				himself, he decided to change that. Sabastian
				Jackson from Long Branch, New Jersey, never once paid attention to the spotlight but never took enough time
				to realize the importance of the little things he has accoplished. This website is to show the world what's
				been up
				in his life and a little reminder for Sabastian of all that he has done. Thanks for visiting.</p>
		</div>

		<div class="background-image-4">
		</div>
		<!--
			<a data-fancybox="gallery" href="images/regina-revenge.jpg">
				<img src="images/regina-revenge.jpg">
			</a>

			<a data-fancybox="gallery" href="images/pov-resize.jpg">
				<img src="images/pov-resize.jpg">
			</a>
	-->
		<div class="container-fluid" id="gallery">
			<div class="row thumbnail-row">
				<div id="gallery">
					<div class="col-xs-12 col-md-3">
						<a data-fancybox="group" href="images/fancybox-fullsize-images/first-race.jpg" class="thumbnail">
							<img class="img-responsive" src="images/images-thumbnail/first-race.jpg">
						</a>
					</div>
					<div class="col-xs-12 col-md-3">
						<a data-fancybox="group" href="images/fancybox-fullsize-images/corrales.jpg" class="thumbnail">
							<img class="img-responsive" src="images/images-thumbnail/corrales.jpg">
						</a>
					</div>
					<div class="col-xs-12 col-md-3">
						<a data-fancybox="group" href="images/fancybox-fullsize-images/go-pro.jpg" class="thumbnail">
							<img class="img-responsive" src="images/images-thumbnail/go-pro.jpg">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!--Begin Contact Form-->
			<div id="contact">
				<form id="contact-form" action="php/mailer.php" method="post">
					<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message"
										 placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6LcaRyQUAAAAAH5YSvBO7MHX58qLhIwoPyXfvKSM"></div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>