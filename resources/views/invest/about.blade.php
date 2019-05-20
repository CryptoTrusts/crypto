<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('invest/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/about_responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('invest/images/about.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">About us</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="{{route('home')}}">Home</a></li>
									<li>About us</li>
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
									<div class="main_menu_contact">
										<div class="main_menu_phone"><img src="{{asset('invest/images/phone-call.svg')}}" class="svg" alt=""><span>+825 25 800 800</span></div>
										<div class="main_menu_email"><img src="i{{asset('invest/mages/envelope.svg')}}" class="svg" alt=""><span>support@cryptotrustsfunds.com</span></div>
									</div>
									<div class="main_menu_social">
										<ul>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="burger">
									<i class="fa fa-bars" aria-hidden="true"></i><img width = '30' height = '30' src="{{asset('invest/images/menu.png')}}" alt="">
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
									<a href="{{route('contact')}}">Contact</a>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</header>
	</div>
	
	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 features_col">
					<div class="features_content">
						<div class="section_title_container">
							<div class="section_title">Why invest with us?</div>
							<div class="section_text">
									<p style = 'color:black;'> CRYPTO-TRUST FUNDS is an investment company offering its services to individual and institutional investors worldwide. We are a team of experienced traders, financial analysts, and account managers. </p>
					
									<p style = 'color:black;'>We have been operating as a personal fund for many years, and now we have opened our online project offering our activities worldwide. We reinvest the funds we receive from our investors. The funds are invested in high growth securities on all major stock markets of the world.
									We also trade actively in the Forex market.</p>
				
									<p style = 'color:black;'> We are using GeoTrust Extended Validation (EV) SSL Certificates, DDoS protection and dedicated server to bring protection and security to you as well as to ensure your benefit from CRYPTO-TRUST FUNDS. Your faith in us is important as your investment objective is our most important liability.</p>
									
									</div>
							<div class="link_button features_button"><a href="{{route('register')}}">Sign Up</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">

						<img  width = '400' height = '400'  src="{{asset('invest/images/platforms-pic.png')}}" alt="">
				</div>
				
			</div>
		</div>
	</div>

	<!-- Info -->

	<div class="info">
		<div class="info_background parallax-window" data-parallax="scroll" data-image-src="{{asset('invest/images/about_info.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
			<div class="row milestones_container">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone">
						<div class="milestone_counter" data-end-value="7">0</div>
						<div class="milestone_content">
							<div class="milestone_title">years of experience</div>
							</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone">
						<div class="milestone_counter" data-end-value="15">0</div>
						<div class="milestone_content">
							<div class="milestone_title">top advisors</div>
							</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone">
						<div class="milestone_counter" data-end-value="25" data-sign-after="k">0</div>
						<div class="milestone_content">
							<div class="milestone_title">happy clients</div>
							</div>
					</div>
				</div>
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
						<div class="milestone">
							<div class="milestone_counter" data-end-value="19" data-sign-after="k">0</div>
							<div class="milestone_content">
								<div class="milestone_title">Withdrawals</div>
								</div>
						</div>
					</div>

				

			</div>
		</div>
	</div>

	<div class="test_faq">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 test_faq_col">
					
					<!-- Testimonials -->

					<div class="testimonials">
						<div class="section_title_container">
							<div class="section_subtitle">take a look at our</div>
							<div class="section_title">Clients testimonials</div>
						</div>

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">
								
								<!-- Testimonial -->
								<div class="owl-item">
									<div class="testimonial">
										<div class="testimonial_text">“Awesome service.”</div>
										<div class="testimonial_author">
											<div class="testimonial_content">
												<div class="testimonial_name"><a href="#">Michael</a></div>
												<div class="testimonial_title">personal trader</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial -->
								<div class="owl-item">
									<div class="testimonial">
										<div class="testimonial_text">“cryptotrust is one of the best expert traders i have known. got back my investments. im really terrible in trading.”</div>
										<div class="testimonial_author">
											<div class="testimonial_content">
												<div class="testimonial_name"><a href="#">Frank</a></div>
												<div class="testimonial_title">trader</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial -->
								<div class="owl-item">
									<div class="testimonial">
										<div class="testimonial_text">“i invested $500, was surprised at the rate i erceived my profits. thanks cryptotrust”</div>
										<div class="testimonial_author">
											<div class="testimonial_content">
												<div class="testimonial_name"><a href="#">Kel</a></div>
												<div class="testimonial_title">Business</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial -->
								<div class="owl-item">
									<div class="te	stimonial">
										<div class="testimonial_text">“got back my investment in the stipulated time. ”</div>
										<div class="testimonial_author">
											<div class="testimonial_content">
												<div class="testimonial_name"><a href="#">peter</a></div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 test_faq_col">
					
					<!-- FAQ -->

					<div class="faq">
						<div class="section_title_container">
							<div class="section_subtitle">take a look at our</div>
							<div class="section_title">Faq / Frequently asked questions</div>
						</div>
						
						<!-- Accordions -->
						<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>What is CRYPTO-TRUST FUNDS?</div></div>
								<div class="accordion_panel">
									<p style = 'font-size:15px;color:black;'>CRYPTO-TRUST FUNDS is an Assets Management platform where you can invest and earn daily,Weekly and monthly profits. 
											We manage the assets of our clients by providing a very high stable daily income. We invest in stock and commodities market,foreign exchange market, Forex Trade and crypto trading.
										</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>What do I need to become an investor?</div></div>
								<div class="accordion_panel">
									<p style = 'font-size:15px;color:black;'>To become an Investor of CRYPTO-TRUST FUNDS you need to open an account. Registering is completely free and will take only a few minutes. After this you can officially become a member and will be able to execute your investment strategies. 
											Please note that by agreeing to the Terms and Conditions of Use during the registration you automatically confirm that you are of legal age in your country of residence and that by using our platform you don`t violate any laws of your country of residence. </p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active"><div>Is CRYPTO-TRUST FUNDS officially registered?</div></div>
								<div class="accordion_panel">
									<p style = 'font-size:15px;color:black;'>Yes. CRYPTO-TRUST FUNDS is a legal investment company incorporated and headquartered in United Kingdom.
											Registration Number: 11776187</p>
								</div>
							</div>
							<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>How soon can I see my earnings?</div></div>
									<div class="accordion_panel">
										<p style = 'font-size:15px;color:black;'>Earnings will be sent to your account by the next day you invested. </p>
									</div>
								</div>
	
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Who manages the funds?</div></div>
									<div class="accordion_panel">
										<p style = 'font-size:15px;color:black;'> These funds are managed by a team of CRYPTO-TRUST FUNDS investment experts.</p>
									</div>
								</div>
	
								

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="cta_content d-flex flex-row align-items-center justify-content-start">
						<div class="cta_text"><a href="#">Make a good investment today!</a></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="cta_button_container d-flex flex-row align-items-center justify-content-lg-end justify-content-start">
						<div class="link_button cta_button"><a href="{{route('register')}}">Get Started</a></div>
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
								and account managers.</p>
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

						
						<div class="footer_newsletter_text"></div>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Crypto Trust Funds</div>
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