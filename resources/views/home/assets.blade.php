<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$settings->site_name}} | {{$title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{URL::asset('home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{URL::asset('home/css/style.css')}}" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="{{URL::asset('home/css/owl.carousel.css')}}" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/boostrap.css')}}"  type="text/css" media="all">
<link href="{{URL::asset('home/css/owl.theme.css')}}" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{URL::asset('home/css/cm-overlay.css')}}" />
<!-- font-awesome icons -->
<link href="{{URL::asset('home/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->



<!-----new css link ----->
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/materialdesignicons.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/jquery.mCustomScrollbar.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/prettyPhoto.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/unslider.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('home/css/template.css')}}" />

<!-------end new link ------>


<!-- font -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{URL::asset('home/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::asset('home/js/bootstrap.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- animation -->
<link href="{{URL::asset('home/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{URL::asset('home/js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 6000, //Set AutoPlay to 6 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>

</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
{{!! $settings->tawk_to !!}}

</script>
<!--End of Tawk.to Script-->
	<!-- banner -->
	<div id="google_translate_element" style = ' text-align = right;'></div>
					<script type="text/javascript">
						function googleTranslateElementInit() {
									  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
									}
					</script>

				
	
	
	<div class="banner">
	
		<!--header-->
		<div class="header">
			<div class="container">		
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="/"><img width= '150' height = '70' src="{{asset('home/images/log.png')}}" alt="" /></a>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/" class="active">Home</a></li>
							<li><a href="#about" class="scroll">About</a></li>
							<li><a href="#news" class="scroll">Packages</a></li>
							<li><a href="#feedback" class="scroll">Clients</a></li>
							<li><a href="#services" class="scroll">Payment</a></li>
							<li><a href="#faq" class="scroll">FAQs</a></li>
							<li><a href="#contact" class="scroll">Contact</a></li>
							
						
							<li><a href="{{route('login')}}">Login</a></li>
							<li><a href="{{route('register')}}">Register</a></li>
						</ul>	
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div>
		</div>
		<!--//header-->
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
				<div class="tradingview-widget-container__widget"></div>
				<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
				{
				"symbols": [

					{
					"title": "BTC/USD",
					"proName": "BITFINEX:BTCUSD"
					},

					{
					"title": "EUR/USD",
					"proName": "FX_IDC:EURUSD"
					},
				
					{
					"title": "ETH/USD",
					"proName": "BITFINEX:ETHUSD"
					}
					{
					"title": "S&P 500",
					"proName": "INDEX:SPX"
					},
					{
					"title": "Nasdaq 100",
					"proName": "INDEX:IUXX"
					},
					
				],
				"locale": "en"
				}
				</script>
				</div>
				<!-- TradingView Widget END -->