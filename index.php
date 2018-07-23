<!DOCTYPE html>
<?php
	include("functions/functions.php")
?>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/camera.css">
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
		<script src="js/owl.carousel.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
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
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h1>
								<a href="index.html">
									<img src="images/logo.jpg" alt="Your Happy Family" width='150' height='100'>
							</h1>
							<div class="menu_block">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									<ul class="sf-menu">
										<li class="current"><a href="index.php">Home</a></li>
										<li><a href="gallery.php">Gallery</a></li>
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
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<div data-src="images/slide.jpg">
						<div class="caption fadeIn">
							<div class="title">Love</div>
							<p>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras  facilisis nulla vel viverra auctor, leo magna sodales felis, quis malesuada ibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis</p>
							<p>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,mmodo luctus libero. Praesent faucibus malesu</p>
							<a href="#">Learn More</a>
						</div>
					</div>
					<div data-src="images/slide1.jpg">
						<div class="caption fadeIn">
							<div class="title">Nude Art</div>
							<p>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras  facilisis nulla vel viverra auctor, leo magna sodales felis, quis malesuada ibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis</p>
							<p>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,mmodo luctus libero. Praesent faucibus malesu</p>
							<a href="#">Learn More</a>
						</div>
					</div>
					<div data-src="images/slide2.jpg">
						<div class="caption fadeIn">
							<div class="title">In Motion</div>
							<p>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras  facilisis nulla vel viverra auctor, leo magna sodales felis, quis malesuada ibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis</p>
							<p>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,mmodo luctus libero. Praesent faucibus malesu</p>
							<a href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
<!--=====================Content======================-->
			<div class="block1">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<div class="rel">
								<p>
								Hi! I’m Katrine Dove. Photography is a passion of mine. is a passion of min
								</p>
								<a href="#" class="btn bt__1">Hire Me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h2>Gallery</h2>
							<div class="gallery">
								<div class="row">
									<?php
										getPhoToHome();
									?>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="grid_4">
							<h3 class="mb__0">Equipment</h3>
							<div class="block2">
								<div class="block2_title color1">Camera</div>
									<ul class="list">
									<li><a href="#">Lorem ipsum dolorertolo </a></li>
									<li><a href="#">Git met consecteturert </a></li>
									<li><a href="#">Odipiscing elit mollis erat</a></li>
								</ul>
							</div>
							<div class="block2">
								<div class="block2_title color1">Lighting</div>
								<ul class="list">
									<li><a href="#">Lorem ipsum dolorilomo </a></li>
									<li><a href="#">Aconsectetur teroloter </a></li>
									<li><a href="#">Sdipiscing elitmollis erat </a></li>
								</ul>
							</div>
						</div>
						<div class="grid_4">
							<h3>About me</h3>
							<p>Need more information about this thingummy? Follow the <span class="color1"></span>.</p>
							<p>Choose <span class="color1">designs</span> of this kind at TemplateMonster’s website.</p>
							Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanInteger convallis orci vel mi laoreet, at ornare lorem consequatasellus erat nisl<br>
							<a href="#" class="btn bt__2">Read More</a>
						</div>
						<div class="grid_4">
							<h3>Publications</h3>
							<ul class="list1">
								<li>
									<div class="list_count">1</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">“Lorem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
								<li>
									<div class="list_count">2</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">“Dorem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
								<li>
									<div class="list_count">3</div>
									<div class="extra_wrapper">
										<div class="list1_title color2"><a href="#">“Kerem ipsum dolor sit met </a></div>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras
										<a href="#" class="color1 td_und">More</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="clear"></div>
						<div class="grid_12">
							<h3 class="head1">Multimedia</h3>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div id="owl">
					<div class="item"><img src="images/car_img1.jpg" alt=""></div>
					<div class="item"><img src="images/car_img2.jpg" alt=""></div>
					<div class="item"><img src="images/car_img3.jpg" alt=""></div>
					
					<?php getPhoToMulti(); ?>

					<div class="item"><img src="images/car_img5.jpg" alt=""></div>
					<div class="item"><img src="images/car_img6.jpg" alt=""></div>
					<div class="item"><img src="images/car_img7.jpg" alt=""></div>
				</div>
			</section>
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