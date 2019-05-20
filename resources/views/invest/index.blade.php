<!DOCTYPE html>
<html lang="en">
<head>
<title>Invest</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::asset('invest/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('invest/styles/responsive.css')}}">

</head>
<body>

<div class="super_container">
	
	<!-- Home  yeah-->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->

			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(invest/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>TRADE ON THE BEST CRYPTOCURRENCY PLATFORM.</h1>
						<div class="home_slider_text">We are using Extended Validation SSL, all of your data is encrypted.</div>
						
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(invest/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>TRADE OVER 250 CRYPTOCURRENCIES</h1>
						<div class="home_slider_text">Professional team will take charge of trade management. Your investment profit is secured.</div>
						</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(invest/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>INVEST IN THE FUTURE, AND REFER A FRIEND</h1>
						<div class="home_slider_text">. Refer a friend to get $50 to them and $50 for you.</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(invest/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>WE PROCESS WITHDRAWAL REQUESTS PROMPTLY.</h1>
						<div class="home_slider_text">We always prioritize your transactions, so we process all the withdrawal very fast.</div>
						</div>
				</div>

			</div>

			<div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img src="{{asset('invest/images/arrow_l.png')}}" alt=""></div>
			<div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{asset('invest/images/arrow_r.png')}}" alt=""></div>
			
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
						<i class="fa fa-bars" aria-hidden="true"></i> <img width = '30' height = '30' src="{{asset('invest/images/menu.png')}}" alt="">
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





<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITSTAMP:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITSTAMP:ETHUSD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

<br>
<!-- TradingView Widget BEGIN -->

<div class = 'container'>
<div class = 'row'>
<div style = 'col-lg-12 col-md-12 col-sm-6'>
<div class="tradingview-widget-container" >
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "900",
  "height": "400",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "transparency": false,
  "locale": "en"
}
</script>
</div>
</div>
</div>
</div>



<!-- TradingView Widget END -->

	
	<!-- Intro -->

	

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="intro_image text-lg-right text-center"><img src="{{asset('/invest/images/intro.png')}}" alt=""></div>
				</div>
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="intro_title_container">
							<div class="intro_subtitle">take a look at our</div>
							<h1 class="intro_title" style="color: #ff8000;">RELIABLE INVESTMENTS IN STOCK &amp; FOREX TRADING.</h1>
						</div>
						<div class="intro_text" >
							<p style = 'font-size:15px;color:black;'> CRYPTO-TRUST FUNDS is an investment company offering its services to individual and
								institutional investors worldwide. We are a team of experienced traders, financial analysts,
								and account managers.</p>
								
						</div>
						
						</div>
						
				</div>
				
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Testimonials Slider -->

					<div class="services_slider_container">
						<div class="owl-carousel owl-theme services_slider">

							<!-- Services Item -->
							<div class="owl-item">
								<div class="services_item d-flex flex-column align-items-center justify-content-center">
									<div class="services_item_bg"></div>
									<div class="services_icon"><img class="svg" src="{{asset('invest/images/services_1.svg')}}" alt=""></div>
									<div class="services_title">FAST WITHDRAWAL</div>
									<p class="services_text">We always prioritize your matter, so we process the all withdrawals very fast..</p>
								</div>
							</div>

							

							<!-- Services Item -->
							<div class="owl-item">
								<div class="services_item d-flex flex-column align-items-center justify-content-center">
									<div class="services_item_bg"></div>
									<div class="services_icon"><img class="svg" src="{{asset('invest/images/services_3.svg')}}" alt=""></div>
									<div class="services_title">SSL ENCRYPTION</div>
									<p class="services_text">We are using Extended Validation SSL, all of your data is encrypted.</p>
						</div>
							</div>

							<!-- Services Item -->
							<div class="owl-item">
								<div class="services_item d-flex flex-column align-items-center justify-content-center">
									<div class="services_item_bg"></div>
									<div class="services_icon"><img class="svg" src="{{asset('invest/images/services_1.svg')}}" alt=""></div>
									<div class="services_title">STABLE PROFIT</div>
									<p class="services_text">Professional team will take charge of trade management. Your investment profit is secured.</p>
									</div>
							</div>

							<!-- Services Item -->
							<div class="owl-item">
								<div class="services_item d-flex flex-column align-items-center justify-content-center">
									<div class="services_item_bg"></div>
									<div class="services_icon"><img class="svg" src="{{asset('invest/images/services_2.svg')}}" alt=""></div>
									<div class="services_title"> MANAGEMENT TEAM</div>
									<p class="services_text">Our firm is fully staffed by true investment professionals with extensive skills and highest qualifications.</p>
									
								</div>
							</div>

							
						</div>
						
						
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div style = 'text-align:center;'>
					  <h3 style="color:red;">Important</h3>  <h5 style="color:#ffaa01;">Always check the "Green Status Bar"</h5>
					 <!--- <img src="/green-bar.jpg" class="attachment-full" alt="img"><br> -->
		   </div>
		</div>
	</div>

	<br>
	<br>

	<!-- Converter -->

	<div class="converter">
		<div class="converter_background parallax-window" data-parallax="scroll" data-image-src="{{asset('invest/images/converter.jpg')}}" data-speed="0.8"></div>

		<div class="container">
			<div class="row">

					<div class="col-lg-5">

							<img width = '500' height = '500' src="{{asset('invest/images/loker.png')}}" alt="" class="img-responsive">
					</div>

				<div class="col-lg-5 ">
					<div class="converter_content">
						<div class="converter_title_container">
							<h1 class="converter_title">Secure Investment to our Company</h1>
						</div>
						<div class="converter_text">
								<p style="color: #fff; font-size: 15px" class="secures-p">DAILY PAYMENTS <br><span>All accounts are accredited on daily basis.</span></p>
								<p  style="color: #fff; font-size:15px"class="secures-p">
								
								24/7 CUSTOMER SUPPORT SERVICE <br><span>Our support team will help you with any kind of question’s that you have!</span></p>
								
								<p style="color: #fff; font-size: 15px" class="secures-p">
								FAST WITHDRAWAL REQUESTS <br><span>All withdrawals request are proceeded within 6 hours or less.</span></p>
								<p  style="color: #fff; font-size: 15px"class="secures-p">
									HIGHEST SERVER SECURITY <br><span>For you to be sure that account won’t be hacked.</span></p>
									<p style="color: #fff; font-size: 15px" class="secures-p">DDOS-GUARD PROTECTION<br><span>We Provide the best protection for your account security.</span></p>
									<p  style="color: #fff; font-size: 15px" class="secures-p"> OUR COMPANY CERTIFICATE<br><span><a  style="color:#ffaa01;" target="_blank" href="invest/images/crypto.pdf">License & Certification</a></span></p>
								
							 </div>
					</div>
					
				</div>
				<div class="col-lg-7">
					
						
				</div>
			</div>
		</div>
	</div>

	<!-- Info -->

	<div class="info">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">take a look at our</div>
						<div class="section_title">A simple trading system</div>
					</div>
				</div>
			</div>
			<div class="row info_row">

				<!-- Info Item -->
				<div class="col-lg-4 info_col">
					<div class="info_item text-center">
						<div class="info_image"><img src="{{asset('invest/images/info_1.png')}}" alt=""></div>
						<div class="info_title">Create Your Account</div>
						<div class="info_text">
							
						</div>
					</div>
				</div>

				<!-- Info Item -->
				<div class="col-lg-4 info_col">
					<div class="info_item text-center">
						<div class="info_image"><img src="{{asset('invest/images/info_2.png')}}" alt=""></div>
						<div class="info_title">Make Payments</div>
						<div class="info_text">
								</div>
					</div>
				</div>

				<!-- Info Item -->
				<div class="col-lg-4 info_col">
					<div class="info_item text-center">
						<div class="info_image"><img src="{{asset('invest/images/info_3.png')}}" alt=""></div>
						<div class="info_title">Earn Profits</div>
						<div class="info_text">
								</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">take a look at our</div>
						<div class="section_title">Investment Packages</div>
					</div>

					
				</div>

			</div>
			<div class="row news_row">
				
				<!-- News Item -->
				<div class="col-lg-3 news_col">
					<div class="news_item" style='text-align:center;'>
						<div class="news_image">
								<img src="{{asset('invest/images/plan0.png')}}" alt=" " class="img-responsive">
						</div>
						<div class="news_content">


								
								<h3 style='color:black;'><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Basic Plan</b></h3>
							 
								<h6 class="plan_p" style="color:#ff8000;"><b>3.3% daily for 60 days</b></h6>
								<h4 style='color:black;'><b>Min Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$500</h3>
								<h4  style='color:black;'><b>Max Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$5000</h3>
						</div>
						
					</div>
				</div>

				<!-- News Item -->
				<div class="col-lg-3 news_col">
					<div class="news_item"  style='text-align:center;'>
						<div class="news_image">

								<img src="{{asset('invest/images/plan1.png')}}" alt=" " class="img-responsive">
						</div>
						<div class="news_content">


								
								<h3 style='color:black;'><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Business Plan</b></h3>
							 
								<h6 class="plan_p" style="color:#ff8000;"><b>15% daily for 18 days</b></h6>
								<h4 style='color:black;'><b>Min Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$1000</h3>
								<h4  style='color:black;'><b>Max Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$10000</h3>
						</div>
						
					</div>
				</div>

				<!-- News Item -->
				<div class="col-lg-3 news_col">
					<div class="news_item"  style='text-align:center;'>
						<div class="news_image">
							
								<img src="{{asset('invest/images/plan2.png')}}" alt=" " class="img-responsive">
						</div>
						<div class="news_content">


								<h3 style='color:black;'><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Standard Plan</b></h3>
							 
								<h6 class="plan_p" style="color:#ff8000;"><b>215% daily for 7 days</b></h6>
								<h4 style='color:black;'><b>Min Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$1000</h3>
								<h4  style='color:black;'><b>Max Invest</b></h4>
								<h3 style="color:#ff8000;font-size:20px;">$10000</h3>
						</div>
					</div>
				</div>

				<div class="col-lg-3 news_col">
						<div class="news_item"  style='text-align:center;'>
							<div class="news_image">
								
							<img src="{{asset('invest/images/plan3.png')}}" alt=" " class="img-responsive">

							</div>
							<div class="news_content">

									<h3 style='color:black;'><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Pro Plan</b></h3>
								 
									<h6 class="plan_p" style="color:#ff8000;"><b>800% daily for 45 days</b></h6>
									<h4 style='color:black;'><b>Min Invest</b></h4>
									<h3 style="color:#ff8000;font-size:20px;">$1000</h3>
									<h4  style='color:black;'><b>Max Invest</b></h4>
									<h3 style="color:#ff8000;font-size:20px;">$10000</h3>
							</div>
						
						</div>
					</div>

			</div>
		</div>
	</div>

	<div class="container" style = 'text-align:center;'>
               
			<h3 style="color:#ff8000;">Profit Calculator</h3>

			<br>
			   <div class="row text-center">
				  <div class="col-md-1"></div>
				  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					 <label class=" dong">Select Plan</label>
					 <select id="calc_plan" class="form-control rong">
						<option class="form-control" value="1">3.3% daily for 60 days</option>
						<option class="form-control" value="2">15% daily for 18 days</option>
						<option class="form-control" value="3">215% after 7 days</option>
						<option class="form-control" value="4">800% after 45 days</option>
					 </select>
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					 <label class="dong">Enter Amount</label>
					 <input class="form-control rong" id="inv_amount" type="text" value="0"> 
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					 <label class="dong">Total Profit</label>
					 <input class="form-control rong" id="net_profit" type="text" readonly=""> 
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					 <label class="dong">Total Percent</label>
					 <input class="form-control rong" type="text" id="assign_per" readonly=""> 
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					 <label class="dong">Total Return</label>
					 <input class="form-control rong" id="total_return" type="text" readonly=""> 
				  </div>
				  <div class="col-md-1"></div>
			   </div>
				<br>
			</div>
		 </div>

		
		
		 
		 <br>
		 
          


<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>


<div class="container" style = 'text-align:center;'>
               
			   <h3 style="color:#ff8000;">Recent Withdrawals</h3>

<table>
  <tr>
    <th>Transaction</th>
    <th>Amount</th>
    
  </tr>
  <tr>
    <td>168o1kqNquEJeR9vosUB5fw4eAwcVAgh8P</td>
    <td>0.03234 BTC</td>
    
  </tr>
  <tr>
    <td>1DUb2YYbQA1jjaNYzVXLZ7ZioEhLXtbUru</td>
    <td>3.45433 BTC</td>
    
  </tr>
  <tr>
    <td>1G47mSr3oANXMafVrR8UC4pzV7FEAzo3r9</td>
    <td>1.02376 BTC</td>
    
  </tr>
  <tr>
    <td>0x4e9ce36e442e55ecd9025b9a6e0d88485d628a67</td>
    <td>7.66765 ETH</td>
    
</tr>
 <tr>
    <td>0x66f820a414680b5bcda5eeca5dea238543f42054	</td>
    <td>5.32861 ETH</td>
   
  </tr>
  <tr>
    <td>13vHWR3iLsHeYwT42RnuKYNBoVPrKKZgRv</td>
    <td>9.12115 BTC</td>
   
  </tr>
  <tr>
    <td>MTvnA4CN73ry7c65wEuTSaKzb2pNKHB4n1</td>
    <td>6.00565 LTC</td>
    
  </tr>
  <tr>
    <td>1MEe2mebed8wopvy8xyjjHcEQHUPVJn2UC</td>
    <td>3.49499 BTC</td>
    
</tr>
</table>

</div>

			
			
			<!--    brand-->

		<div class="container"  style = 'text-align:center;' >
			<div class="" style="text-align:center;">
            <div class="row"  >
               <div class="col-md-2">
                  <img width = '190' height = '100' src="{{asset('home/images/dia4.png')}}">
               </div>
               <div class="col-md-2">
                  <img width = '190' height = '100' src="{{asset('home/images/dia2.png')}}">
               </div>
               <div class="col-md-2">
                  <img src="{{asset('home/images/3.png')}}">
               </div>
             
               <div class="col-md-2">
                  <img  width = '190' height = '90' src="{{asset('home/images/Microsoft-logo-313x313.png')}}">
               </div>
               <div class="col-md-2">
                  <img src="{{asset('home/images/eth.png')}}">
               </div>

			     <div class="col-md-2">
                  <img  src="{{asset('home/images/ltc.png')}}">
               </div>
            </div>
         </div>
      </div>
	  </div>
      <!--    end brand-->


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
						<p class="footer_about_text"> CRYPTO-TRUST FUNDS is an investment company offering its services to individual and
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
							<li><a href="{{route('about')}}">About</a></li>
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
<script src="{{URL::asset('invest/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('invest/plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('invest/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('invest/js/custom.js')}}"></script>

<script src="{{URL::asset('invest/js/calculator.js')}}"></script>
</body>
</html>