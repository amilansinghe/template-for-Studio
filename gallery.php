<!DOCTYPE html>

<?php
	include("functions/functions.php")
?>

<html lang="en">
	<head>
		<title>Gallery</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/tmStickUp.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/touchTouch.jquery.js"></script>
		<script src="js/sForm.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<header>
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h1>
								<a href="index.html">
									<img src="images/logo.jpg" alt="Your Happy Family" width='150' height='100'>
								</a>
							</h1>
							<div class="menu_block ">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									<ul class="sf-menu">
										<li><a href="index.php">Home</a></li>
										<li class="current"><a href="gallery.php">Gallery</a></li>
										<li><a href="learnMore.php">Learn More</a></li>
										<li><a href="packages.php">Packages</a></li>
										<li><a href="contacts.php">Contacts</a></li>
									</ul>
								</nav>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main">
<!--=====================Content======================-->
			<section class="content cont_pad1">
				<div class="container">
					<div class="gallery gall__1">
						<div class="row">
							<div class="grid_12">
							<h2>Wedding</h2>
							<div class="gallery">
								<div class="row">
									<?php
										getPhoto();
									?>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="main">
			<section class="content cont_pad1">
				<div class="container">
					<div class="gallery gall__1">
						<div class="row">
							<div class="grid_12">
							<h2>Birthdays</h2>
							<div class="gallery">
								<div class="row">

									<?php
										getPhotoBdy();
									?>

								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="main">
			<section class="content cont_pad1">
				<div class="container">
					<div class="gallery gall__1">
						<div class="row">
							<div class="grid_12">
							<h2>Natural</h2>
							<div class="gallery">
								<div class="row">

									<?php
										getPhotoNatural();
									?>

								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</section>
		</div>

<!--==============================Bot_block=================================-->
			<section class="bottom_block">
				<div class="container">
					<div class="row">
						<div class="grid_5">
							<div class="bot_title">
								<span class="fa fa-envelope-o"></span>Subscribe to My Newsletter
							</div>
						</div>
						<div class="grid_7">
							<form id="newsletter">
								<div class="row">
									<div class="grid_4">
										<div class="rel">
											<div class="success">Your subscrsibe request has been sent!</div>
											<label class="email">
												<input type="email" value="Your Email Address Here" >
												<span class="error">*This is not a valid email address.</span>
												<span class="clear"></span>
											</label>
										</div>
									</div>
									<div class="grid_3">
										<a href="#" class="btn bt__2" data-type="submit">Submit</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="grid_12">
						<div class="footer_socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-pinterest"></a>
						</div>
						<div class="copy">
							<span class="brand"></span> &copy; <span id="copyright-year"></span> <a href="#"> </a>
							<div class="sub_copy">
								Website designed by Amila
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>