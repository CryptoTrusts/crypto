 <!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('invest/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/services.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/services_responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('invest/images/services_background.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Services</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="{{route('home')}}">Home</a></li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header -->

		<header class="header">

<!-- Top Bar -->
<div class="top_bar">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
					<div class="logo_container">
						<div class="logo">
							<a href="{{route('home')}}">
								<div class="logo_line_1"><span>Crypto</span> Trust Funds</div>
								<div class="logo_line_2">Blockchain</div>
								<div class="logo_img"><img src="{{asset('invest/images/logo.png')}}" alt=""></div>
							</a>
						</div>
					</div>
					<div class="top_bar_content ml-auto">
						<div class="coins">
							
						</div>
						<div class="register_login">
							<div class="register"><a href="{{route('register')}}">register</a></div>
							<div class="login"><a href="{{route('login')}}">login</a></div>
						</div>
					</div>
					<div class="burger">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>

<!-- Main Menu -->
<div class="main_menu">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
					<div class="main_menu_content">
						<ul class="main_menu_list">
							<li class="active">
								<a href="{{route('home')}}">home
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
										<g>
											<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
										</g>
									</svg>
								</a>
								
							</li>
							<li><a href="{{route('about')}}">about us
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
									<g>
										<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
									</g>
								</svg>
							</a></li>
							<li class="">
								<a href="{{route('services')}}">services
									<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
										<g>
											<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
										</g>
									</svg>
								</a>
								
							</li>

							
							<li><a href="{{route('contact')}}">contact
								<svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
									<g>
										<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
									</g>
								</svg>
							</a></li>
						</ul>
					</div>
					<div class="main_menu_contact ml-auto">
						<div class="main_menu_phone"><img src="{{asset('invest/images/phone-call.svg')}}" alt=""><span>+825 25 800 800</span></div>
						<div class="main_menu_email"><img src="{{asset('invest/images/envelope.svg')}}" alt=""><span>support@cryptotrustsfunds.com</span></div>
						<div class="main_menu_search">
							<div class="main_menu_search_button">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
									<g>
									<path class="mag_path" d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#f4f4f8"/>
									</g>
								</svg>
							</div>
							<div class="main_menu_search_content">
								<form action="#">
									<input class="search_input" type="search" placeholder="Keyword" required="required">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Menu -->

<div class="menu">
	<div class="menu_register_login">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
							<div class="register"><a href="{{route('register')}}">register</a></div>
							<div class="login"><a href="{{route('login')}}">login</a></div>
						</div>
				</div>
			</div>
		</div>
			
	</div>
	<ul class="menu_list">
		<li class="menu_item">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="{{route('home')}}">home</a>
					</div>
				</div>
			</div>
		</li>
		<li class="menu_item">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="{{route('about')}}">about us</a>
					</div>
				</div>
			</div>
		</li>
		<li class="menu_item">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="{{route('services')}}">services</a>
					</div>
				</div>
			</div>
		</li>
		
		
		<li class="menu_item">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="{{route('contact')}}">contact</a>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>
</header>
</div>


	<!-- Points -->

	<div class="points">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">take a look at our</div>
						<div class="section_title">Our Services</div>
					</div>
				</div>
			</div>
			<div class="row points_container">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 point_col">
					<div class="point clearfix">
						<div class="point_image"><img src="{{asset('invest/images/services_1.png')}}" alt=""></div>
						<div class="point_content">
							<div class="point_title">We take care of you</div>
							<div class="point_text"> 
								<p style = 'color:black;'>All accounts are accredited on daily basis. All withdrawals request are proceeded within 6 hours or less.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 point_col">
					<div class="point clearfix">
						<div class="point_image"><img src="{{asset('invest/images/services_2.png')}}" alt=""></div>
						<div class="point_content">
							<div class="point_title">Fast support & updates</div>
							<div class="point_text">
								<p style = 'color:black;'>Our support team will help you with any kind of question that you have.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 point_col">
					<div class="point clearfix">
						<div class="point_image"><img src="{{asset('invest/images/services_3.png')}}" alt=""></div>
						<div class="point_content">
							<div class="point_title">Risk Analysis</div>
							<div class="point_text">
								<p style = 'color:black;'>We analyze the risk factor, For you to be sure that account won’t be hacked.</p>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="services_background parallax-window" data-parallax="scroll" data-image-src="{{asset('invest/images/services_background_2.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row flex-wrap align-items-start justify-content-start">

					<!-- Service -->
					<div class="service">
							<div class="service_icon"><img src="{{asset('invest/images/service_6.svg')}}" class="svg" alt=""></div>
							<div class="service_title">Customer Consulting</div>
							<div class="service_text">
								<p style = 'color:black;'> We process all forms of customer feedback and services. We believe in providing an utmost satisfaction for our customer. </p>
							</div>
						</div>
	

						<!-- Service -->
						<div class="service">
								<div class="service_icon"><img src="{{asset('invest/images/service_4.svg')}}" class="svg" alt=""></div>
								<div class="service_title">Private Internet Banking</div>
								<div class="service_text">
									<p style = 'color:black;'>  Your information is always secured with us, we use a state of art security procedures to get the job done. </p>
								</div>
							</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="{{asset('invest/images/service_3.svg')}}" class="svg" alt=""></div>
						<div class="service_title">Safe & Secure Transactions</div>
						<div class="service_text">
							<p style = 'color:black;'>We Provide the best protection for your account security.</p>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</div>

	<!-- Call Back -->

	<div class="call">
		<div class="container">
			<div class="row">
				
				</div>
				<div class="col-lg-8">
					<div class="call_container">
						<div class="section_title_container">
							<div class="section_subtitle">take a look at our</div>
							<div class="section_title">Request a Call Back</div>
						</div>
						<div class="call_form_container">
							<form action="#" class="call_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="input_item" placeholder="Your Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" class="input_item" placeholder="Your E-mail" required="required">
									</div>
									<div class="col-md-6">
										<input type="text" class="input_item" placeholder="Your Phone">
									</div>
									
									<div class="col-md-12">
										<button id="call_btn" type="submit" class="call_button trans_200" value="Submit">submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container footer_logo">
							<div class="logo">
									<a href="{{route('home')}}">
											<div class="logo_line_1"><span>Crypto</span> Trust Funds</div>
											<div class="logo_line_2">Blockchain</div>
											<div class="logo_img"><img src="{{asset('invest/images/logo.png')}}" alt=""></div>
										</a>
							</div>
						</div>
						<p class="footer_about_text">CRYPTO-TRUST FUNDS is an investment company offering its services to individual and
								institutional investors worldwide. We are a team of experienced traders, financial analysts,
								and account managers..</p>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul>
										<li><a href="{{route('home')}}">Home</a></li>
										<li><a href="{{route('about')}}">About us</a></li>
										<li><a href="{{route('services')}}">Services</a></li>
										<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-6 footer_col">
					<div class="footer_newsletter">
						<div class="footer_title">Subscribe to our newsletter</div>
						<form action="#" class="footer_newsletter_form">
							<input type="email" class="footer_newsletter_input" placeholder="Your E-mail" required="required">
							<button class="footer_newsletter_button" type="submit">subscribe</button>
						</form>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-4 order-md-1 order-2">
							<div class="copyright_content d-flex flex-row align-items-center justify-content-start">
								<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Crypto Trusts Funds</div>
							</div>
						</div>
						<div class="col-md-8 order-md-2 order-1">
							<nav class="footer_nav d-flex flex-row align-items-center justify-content-md-end">
								<ul>
										<li><a href="{{route('home')}}">Home</a></li>
										<li><a href="{{route('about')}}">About us</a></li>
										<li><a href="{{route('services')}}">Services</a></li>
										<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
							</nav>
						</div>
					</div>
				</div>			
			</div>
		</footer>
	</div>
	
<script src="{{URL::asset('invest/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('invest/styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL::asset('invest/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('invest/plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('invest/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('invest/js/about_custom.js')}}"></script>
</body>
</html>