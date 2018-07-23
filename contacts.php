<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/form.css">
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
		<script src="js/TMForm.js"></script>
		<script src="js/sForm.js"></script>
		<script>
			$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
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
									<img src="images/logo.png" alt="Your Happy Family">
								</a>
							</h1>
							<div class="menu_block ">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									<ul class="sf-menu">
										<li><a href="index.php">Home</a></li>
										<li><a href="gallery.php">Gallery</a></li>
										<li><a href="learnMore.php">Learn More</a></li>
										<li><a href="packages.php">Packages</a></li>
										<li class="current"><a href="contacts.php">Contacts</a></li>
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
			<section class="content">
				<div class="container"><div class="ic"></div>
					<div class="row">
						<div class="grid_12">
							<div class="map">
								<figure>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
								</figure>
							</div>
						</div>
						<div class="clear"></div>
						<div class="grid_5">
							<h3>Contact Info</h3>
							The Company Name Inc. <br>
							No : 153/1A,<br>
							Galthude, Bandaragama.<br>
							Telephone: +94 71 150 4640<br>
							
							E-mail: <a href="#">studioseneroo@gmail.com</a>
						</div>
						<div class="grid_6 preffix_1">
							<h3>Contact Form</h3>
							<form id="form">
								<div class="success_wrapper">
									<div class="success-message">Contact form submitted</div>
								</div>
								<label class="name">
									<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid name.</span>
								</label>
								<label class="email">
									<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid email.</span>
								</label>
								<label class="phone">
									<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid phone.</span>
								</label>
								<label class="message">
									<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*The message is too short.</span>
								</label>
								<div>
									<div class="clear"></div>
									<div class="btns">
										<a href="#" data-type="reset" class="btn bt__2">Clear</a>
										<a href="#" data-type="submit" class="btn bt__2">Submit</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
<!--==============================Bot_block=================================-->
			<section class="bottom_block">
				<div class="container">
					<div class="row">
						<div class="grid_5">
							<div class="bot_title">
								<span class="fa fa-envelope-o"></span>
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
							<span class="brand"></span>  <span id="copyright-year"></span> <a href="#"></a>
							<div class="sub_copy">
								Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">Amila</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>