@include('home.assets')
		<div class="w3layouts-banner-info">
			<div class="container">
				<div class="w3layouts-banner-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								
								<li>
									<div class="agileits-banner-info">
										<h3>Trade over 250 cryptocurrencies from one account</h3>
										<p style = 'font-size: 20px;'>Professional team will take charge of trade management. Your investment profit is secured.</p>
										</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>We process withdrawal requests promptly.</h3>
										<p style = 'font-size: 20px;'>We always prioritize your transactions, so we process all the withdrawal very fast.</p>
										</div>
								</li>

								<li>
									<div class="agileits-banner-info">
										<h3>Invest in the future, and Refer a friend</h3>
										<p style = 'font-size: 20px;'>Refer a friend to get $50 to them and $50 for you.</p>
										</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>Trade on the best cryptocurrency platform.</h3>
										<p style = 'font-size: 20px;'>We are using Extended Validation SSL, all of your data is encrypted.</p>
										</div>
								</li>
							</ul>
						</div>
						<script src="{{asset('home/js/responsiveslides.min.js')}}"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 50,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
							
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
		<div class="bounce animated">
			<a href="#welcome" class="scroll">
				<div class="mouse"></div>
			</a>
		</div>
	</div>
	<!-- //banner -->


	

    <!-- Services
    ================================================== -->
    <section id="nino-services">
    	<div class="container">
		<div style = 'text-align : center;'>
		<h2 style="color: #ff8000;">RELIABLE INVESTMENTS IN STOCK &amp; FOREX TRADING.</h2>
		<p style = 'font-size:15px;color:black;'>
					 CRYPTO-TRUST FUNDS is an investment company offering its services to individual and
					institutional investors worldwide. We are a team of experienced traders, financial analysts,
					and account managers.
                     </p>
					 </div>
					 <br>
					 <br>
			<div class="sectionContent">			
				<div class="fw" layout="row">
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-apple-keyboard-command nino-icon fsr"></i>
							<div>
							<h4 style="color:#ff8000;">FAST WITHDRAWAL</h4>
								<p style = 'font-size:15px;color:black;'>We always prioritize your matter, so we process the all withdrawals very fast.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-blender nino-icon fsr"></i>
							<div>
								
								<h4  style="color:#ff8000;">SSL ENCRYPTION</h4>
                        		 <p style = 'font-size:15px;color:black;'>We are using Extended Validation SSL, all of your data is encrypted.</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-bookmark-plus-outline nino-icon fsr"></i>
							<div>
							

								 <h4  style="color:#ff8000;">STABLE PROFIT</h4>
                              <p style = 'font-size:15px;color:black;'>Professional team will take charge of trade management. Your investment profit is secured.</p>
                          
								</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-desktop-mac nino-icon fsr"></i>
							<div>

							 <h4  style="color:#ff8000;">PROFESSIONAL MANAGEMENT TEAM</h4>
                              <p style = 'font-size:15px;color:black;'>Our fund is fully staffed by true investment professional with extensive skills and highest qualifications.</p>
                         
								
								</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
						
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section><!--/#nino-services-->


 <!--    pricing section-->
 
              
            
    		  <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div style = 'text-align:center;'>
					            <h3 style="color:red;">Important</h3>  <h5 style="color:#ffaa01;">Always check the "Green Status Bar"</h5>
					           <!--- <img src="/green-bar.jpg" class="attachment-full" alt="img"><br> -->
                     </div>
                  </div>
              </div>
			  <br>



			  	
<!------slideshow---->



<style>
.mySlides {display:none;}
</style>


<div class="w3-content w3-section">

  <img   width='1400' ; height= '400' class="mySlides" src="{{asset('/home/images/he7.jpg')}}">
  <img   width='1400' ; height= '400' class="mySlides" src="{{asset('/home/images/he1.jpg')}}">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>




<!----end of slideshow---->

<br>
<br>
	

       
	   <!-- about -->
	<div class="" id="about">
		<div class="container z-depth-5">
			<div class="" >
			<h2 style="color: #ff8000; text-align:center;">ABOUT CRYPTO-TRUST FUNDS</h2>
			</div>
			<div class="w3ls-about-grids">
				<div class="col-md-6 about-right">
					
					<img src="{{asset('home/images/charts.png')}}" alt="">

					<div>
					
					</div>
					
				</div>
				<div class="col-md-6 about-left" style = 'font-size:16px;'> 
					
					<p> CRYPTO-TRUST FUNDS is an investment company offering its services to individual and institutional investors worldwide. We are a team of experienced traders, financial analysts, and account managers. </p>
					
					<p>We have been operating as a personal fund for many years, and now we have opened our online project offering our activities worldwide. We reinvest the funds we receive from our investors. The funds are invested in high growth securities on all major stock markets of the world.
					We also trade actively in the Forex market.</p>

					<p> We are using GeoTrust Extended Validation (EV) SSL Certificates, DDoS protection and dedicated server to bring protection and security to you as well as to ensure your benefit from CRYPTO-TRUST FUNDS. Your faith in us is important as your investment objective is our most important liability.</p>
					
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
<br>
<br>


      <!--    call-to-action-->
      <div class="jarallax feedback">
         <div class="container ">
            <div class="row" style="position: relative;">
               <div class="col-md-4 col-sm-12 nexus">
                  <img src="{{asset('home/images/loker.png')}}" class="img-responsive" alt="locker">    
               </div>
               <div class="col-md-8 col-sm-12" style = 'font-size:15px;'>
                  <br>
                  <h2 style="color: #fff ;">Secure Investment to our Company</h2>
                  <br>
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <p style="color: #fff;" class="secures-p"><i class="fa fa-check-square jm"></i> DAILY PAYMENTS <br><span>All accounts are accredited on daily basis.</span></p>
						<p  style="color: #fff;"class="secures-p"><i class="fa fa-check-square jm"></i>
						
						24/7 CUSTOMER SUPPORT SERVICE <br><span>Our support team will help you with any kind of question’s that you have!</span></p>
                        
                        <p style="color: #fff;" class="secures-p"><i class="fa fa-check-square jm"></i>
						FAST WITHDRAWAL REQUESTS <br><span>All withdrawals request are proceeded within 6 hours or less.</span></p>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <p  style="color: #fff;"class="secures-p"><i class="fa fa-check-square jm"></i>
						HIGHEST SERVER SECURITY <br><span>For you to be sure that account won’t be hacked.</span></p>
                        <p style="color: #fff;" class="secures-p"><i class="fa fa-check-square jm"></i> DDOS-GUARD PROTECTION<br><span>We Provide the best protection for your account security.</span></p>
                        <p  style="color: #fff;" class="secures-p"><i class="fa fa-check-square jm"></i> OUR COMPANY CERTIFICATE<br><span><a  style="color:#ffaa01;" target="_blank" href="/home/images/crypto.pdf">License & Certification</a></span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
	</div>
		
      <!--    secures section-->

	<!-- news -->
	<div class="news" id="news" >
		<div class="container">
		<div class="" style="color: #ff8000; text-align:center;">
				<h2 style="color:#ff8000;">TRADING PACKAGES</h2>
			</div>
			<div class="w3ls-news-grids">
				<div class="news-right">
					<div class="col-sm-3 news-right-grid">
						<div class="agile-news-info" style = 'text-align:center;'>
							 
							
							<img src="{{asset('home/images/plan0.png')}}" alt=" " class="img-responsive">	
							<h3><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Basic Plan</b></h3>
							
                        <h6 class="plan_p" style="color:#ff8000;"><b>3.3% daily for 60 days</b></h6>
                        <h4><b>Min Invest</b></h4>
                        <h3 style="color:#ff8000;font-size:20px;">$50</h3>
                        <h4><b>Max Invest</b></h4>
                        <h3 style="color:#ff8000;font-size:20px;">$5000</h3>
							
							

							<div class="">
								<a href="{{route('login')}}"  class="" data-toggle="modal" data-target="#myModal"></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 news-right-grid">
					<div class="agile-news-info" style = 'text-align:center;'>
							 
							
							 <img src="{{asset('home/images/plan1.png')}}" alt=" " class="img-responsive">	
							 <h3><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Business Plan</b></h3>
							 
						 <h6 class="plan_p" style="color:#ff8000;"><b>15% daily for 18 days</b></h6>
						 <h4><b>Min Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$500</h3>
						 <h4><b>Max Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$10000</h3>
							
							<div class="">
								<a href="{{route('login')}}" class="" data-toggle="modal" data-target="#myModal"></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 news-right-grid">
					<div class="agile-news-info" style = 'text-align:center;'>
							 
							
							 <img src="{{asset('home/images/plan2.png')}}" alt=" " class="img-responsive">	
							 <h3><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Standard Plan</b></h3>
							 
						 <h6 class="plan_p" style="color:#ff8000;" ><b>215% daily for 7 days</b></h6>
						 <h4><b>Min Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$1000</h3>
						 <h4><b>Max Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$10000</h3>
							<div class="">
								<a href="{{route('login')}}" class="" data-toggle="modal" data-target="#myModal"></a>
							</div>
						</div>
					</div>
					

					<div class="col-sm-3 news-right-grid">
						
						<div class="agile-news-info" style = 'text-align:center;'>
							 
							
							 <img src="{{asset('home/images/plan3.png')}}" alt=" " class="img-responsive">	
							 <h3><a href="#" data-toggle="modal" data-target="#myModal"></a><b>Pro Plan</b></h3>
							
						 <h6 class="plan_p" style="color:#ff8000;"><b>800% daily for 45 days</b></h6>
						 <h4><b>Min Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$1000</h3>
						 <h4><b>Max Invest</b></h4>
						 <h3 style="color:#ff8000;font-size:20px;">$10000</h3>
						
							
							<div class="">
								<a href="{{route('login')}}" class="" data-toggle="modal" data-target="#myModal"><!---<img src="{{asset('home/images/bb.png')}}" alt=" " class="img-responsive">---></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- modal -->
			<!---	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"> 
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								<h4 class="modal-title"><span>Banking</span></h4>
							</div> 
							<div class="modal-body">
								<div class="agileits-w3layouts-info">
									<img src="{{asset('home/images/g2.jpg')}}" alt="" />
									<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>  --->
			<!-- //modal --> 
		</div>
	</div>  
	<!-- //news -->


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

			<script>

			$(function(){calc();$('#calc_plan').on('change',calc);
			$('#inv_amount').bind('change keyup',calc).on('keypress',isNumberKey);});
			function isNumberKey(evt){
				var charCode=(evt.which)?evt.which:event.keyCode;if(charCode>31&&(charCode<45||charCode>57))
				return false;return true;
			}
			function calc(){
				var plan=$('#calc_plan').val();var amount=$('#inv_amount').val();
			var percent;switch(plan){case'1':switch(true){case(amount<20):percent=0;break;
			case(amount>5000):percent=0;break;case(amount<=5000):percent=198;break;default:percent=0;}
			break;case'2':switch(true){case(amount<500):percent=0;break;
			case(amount>11000):percent=0;break;case(amount<=10000):percent=270;break;default:percent=0;}
			break;case'3':switch(true){case(amount<1000):percent=0;break;
			case(amount>11000):percent=0;break;case(amount<=10000):percent=215;break;default:percent=0;}
			break;case'4':switch(true){case(amount<250):percent=0;break;
			case(amount>11000):percent=0;break;case(amount<=10000):percent=800;break;default:percent=0;}
			break;}
			$('#assign_per').val(percent+'%');
			var total=amount*percent/100;$('#total_return').val('$'+total.toFixed(2));if(total<=0){$('#net_profit').val('0.00');}
			else{$('#net_profit').val('$'+(total-amount).toFixed(2));}}

			</script>
			
            <br>
			





	
	<!-- feedback -->
	<div class="jarallax feedback" id="feedback">
		<div class="container">


		
		<div class="" style="color: #ff8000; text-align:center;">
				<h2 style="color:#ff8000;">CLIENTS FEEDBACK</h2>
			</div>
			<div class="agileits-feedback-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>Awesome service.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>Mrs Rachel</h5>
									<p>Teacher</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>cryptotrust is one of the best expert traders i have known. got back my investments. im really terrible in trading </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>Peter</h5>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p> i invested $500, was surprised at the rate i erceived my profits. thanks cryptotrust  </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>Dr. Bridget</h5>
									<p>vet</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>fast service </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>kel</h5>
									<p>store</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p> got back my investment in the stipulated time.  </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>karim</h5>
									<p></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p> really good investment platform</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
								</div>
								<div class="feedback-img-info">
									<h5>mustafa</h5>
									<p></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->

<br>

<br>



	

			

<!-- services -->
<div class="services" id="services">
		<div class="container">
		<div class="" style="color: #ff8000; text-align:center;">
				<h2 style="color:#ff8000;">PAYMENT METHOD</h2>
			</div>
			<div class="agileits-services-grids">
				 <div class="col-md-8 agileits-services-left">
					<h4>At a glance</h4>
					<div class="agileits-services-text">
					<p style = 'font-size:15px;color:black;'>All accounts are accredited on daily basis.</p>
					</div>
					<div class="credit-grids">
						<h5>Cryptocurrency:</h5>
						<div class="credit-grid-left">
							<div class="credit-grid">
								<img src="{{asset('home/images/c2.jpg')}}" alt="" />
								<h6>Bitcoin</h6>
								
							</div>
							<div class="credit-grid">
								<img src="{{asset('home/images/c3.jpg')}}" alt="" />
								<h6>Ethereum</h6>
								
							</div>
							<div class="credit-grid">
								<img src="{{asset('home/images/c4.jpg')}}" alt="" />
								<h6>Litecoin</h6>
								
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="credit-grids debit-grids">
						<!--<h5>Debit Cards:</h5>
						<div class="debit-grids-text">
							<p>Morbi nec justo ut ex rhoncus luctus. Duis id ex egestas, tempus lorem sed, porta urna. Duis sodales eleifend laoreet. Vestibulum luctus venenatis massa, in vulputate mi porta ac.</p>
						</div>
						<div class="w3-services-grids">
							<div class="col-md-4 w3l-services-grid">
								<div class="w3ls-services-img">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="agileits-services-info">
									<h4>Praesent tempor</h4>
								</div>
							</div>
							<div class="col-md-4 w3l-services-grid">
								<div class="w3ls-services-img">
									<i class="fa fa-credit-card" aria-hidden="true"></i>
								</div>
								<div class="agileits-services-info">
									<h4>Praesent tempor</h4>
								</div>
							</div>
							<div class="col-md-4 w3l-services-grid">
								<div class="w3ls-services-img">
									<i class="fa fa-line-chart" aria-hidden="true"></i>
								</div>
								<div class="agileits-services-info">
									<h4>Praesent tempor</h4>
								</div>
							</div>--->
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 agileits-services-right">
					<h4>Recent withdrawals</h4>
					<div class="services-two-grids">
						<div class="agileinfo-services-right">
							<img src="{{asset('home/images/10.jpg')}}" alt="" />
							
						</div>
						<!-- date -->
						<br>
						<div id="design" class="date">
					
										<div id="cycler">   
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 3.245456534 BTC </b></a>
											</div>
											
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 0.245456534 BTC </b></a>
											</div>
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 4.245456534 LTC </b></a>
											</div>
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 2.045456534 ETH </b><span class="blinking"><img src="images/new.png" alt="" /></span></a>
											</div>
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 0.708765344 BTC </b></a>
											</div>
											<div class="date-text">
												<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i><b> 4.005456534 LTC </b></a>
											</div>
											
										</div>
										<script>
										function blinker() {
											$('.blinking').fadeOut(500);
											$('.blinking').fadeIn(500);
										}
										setInterval(blinker, 1000);
										</script>
										<script>
											function cycle($item, $cycler){
												setTimeout(cycle, 2000, $item.next(), $cycler);
												
												$item.slideUp(1000,function(){
													$item.appendTo($cycler).show();        
												});
												}
											cycle($('#cycler div:first'),  $('#cycler'));
										</script>
						</div>
						<!-- //date -->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->





<br>
<br>


	

     <!-- Counting
    ================================================== -->
    <section id="nino-counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<div class="number">177+</div>
    				<div class="text">Countries</div>
    			</div>
    			<div class="item">
    				<div class="number">5680+</div>
    				<div class="text">Users</div>
    			</div>
    			<div class="item">
    				<div class="number">64556</div>
    				<div class="text">Deposits</div>
    			</div>
				
    			<div class="item">
    				<div class="number">52389</div>
    				<div class="text">Withdrawals</div>
    			</div>
    			<div class="item">
    				<div class="number">12</div>
    				<div class="text">Partners</div>
    			</div>
    		</div>
    	</div>
    </section><!--/#nino-counting-->
       


		 <!---faq--->

<div class="" id="faq" >
		<div class="container z-depth-5"  style = 'text-align:center;' >
			<div class="" style="text-align:center;" >
			<br>
			<br>
		
				<h2 style="color:#ff8000;">FREQUENTLY ASKED QUESTIONS</h2>
			</div>

			<br>
			<br>

    			<div class="" id="accordion">
      			  <div class="faqHeader"></div>
      				  <div class="card ">
          				  <div class="card-header">
            		  	  <h5 class="card-header" id = 'link'>
                   					 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >What is CRYPTO-TRUST FUNDS?</a>
              			  </h5>
          			 	 </div>
          		 		 <div id="collapseOne" class="panel-collapse collapse in">
               			 <div class="card-block">
							<p style = 'font-size:15px; color:black;'>CRYPTO-TRUST FUNDS is an Assets Management platform where you can invest and earn daily,Weekly and monthly profits. 
				We manage the assets of our clients by providing a very high stable daily income. We invest in stock and commodities market,foreign exchange market, Forex Trade and crypto trading.
			</p></div>
										
				 </div>
        </div>

			<br>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What do I need to become an investor?</a>
                </h5>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px;color:black;'>To become an Investor of CRYPTO-TRUST FUNDS you need to open an account. Registering is completely free and will take only a few minutes. After this you can officially become a member and will be able to execute your investment strategies. 
				Please note that by agreeing to the Terms and Conditions of Use during the registration you automatically confirm that you are of legal age in your country of residence and that by using our platform you don`t violate any laws of your country of residence.	</p> </div>
            </div>
        </div>
			<br>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Is CRYPTO-TRUST FUNDS officially registered?</a>
                </h5>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>	Yes. CRYPTO-TRUST FUNDS is a legal investment company incorporated and headquartered in United Kingdom.
Registration Number: 11776187</p>
                </div>
            </div>
        </div>
			<br>
    
        
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What is the minimum and maximum deposits ?</a>
                </h5>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>	The minimum investment amount is $100.00 USD and maximum limit is $10000.00 USD. It actually depends on our investment packages.</p></div>
            </div>
        </div>
			<br>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How soon can I see my earnings?</a>
                </h5>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>Earnings will be sent to your account by the next day you invested.</p><br />
                </div>
            </div>
        </div>

			<br>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Can I make reinvestment?</a>
                </h5>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>Yes, you can reinvest. However, we do not allow compounding of investments from your account balance.</p>
                </div>
            </div>
        </div>
        
		
			<br>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Do you have an affiliate program?</a>
                </h5>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>You will get 10% referral commission if your down lines make a deposit.</p> </div>
            </div>
        </div>
		<br>
        <div class="faqHeader"></div>
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How do you calculate the interest on my account?</a>
                </h5>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>	Depending on each plan. Interest on your CRYPTO-TRUST FUNDS account is acquired Daily, Bi-Weekly, Monthly and Yearly and credited to your available balance at the end of each day. </p> </div>
            </div>
        </div>
		<br>
		
        <div class="card ">
            <div class="card-header">
                <h5 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Who manages the funds?</a>
                </h5>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="card-block">
				<p style = 'font-size:15px; color:black;'>  These funds are managed by a team of CRYPTO-TRUST FUNDS investment experts. </p></div>
            </div>
        </div>
		<br>
		<br>
    </div>
</div>
</div>

<style>

.card-panel {
  -webkit-transition: -webkit-box-shadow .25s;
  transition: -webkit-box-shadow .25s;
  transition: box-shadow .25s;
  transition: box-shadow .25s, -webkit-box-shadow .25s;
  padding: 24px;
  margin: 0.5rem 0 1rem 0;
  border-radius: 2px;
  background-color: #fff;
}

.z-depth-5 {
  -webkit-box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
          box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
}
    .faqHeader {
        font-size: 20px;
        margin: 20px;
    }

	.rcorners2 {
  border-radius: 25px;
  border: 2px solid  #ff8000;
  padding: 15px; 
  width: 50px;
  height: 100px; 
  background-color: #ff8000;
  color: white;
}
         
    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "e072"; /* "play" icon */
        float: right;
        color: white;
        font-size: 18px;
        
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: white;
    }
</style>


<br>
<br>

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
                  <img  width = '190' height = '90' src="{{asset('/home/images/Microsoft-logo-313x313.png')}}">
               </div>
               <div class="col-md-2">
                  <img  width = '190' height = '90'src="{{asset('/home/images/eth.png')}}">
               </div>

			     <div class="col-md-2">
                  <img  width = '190' height = '70' src="{{asset('home/images/dia3.png')}}">
               </div>
            </div>
         </div>
      </div>
	  </div>
      <!--    end brand-->
      
      
	  
<!----	  <div class="solidContainer">
   <div class="container">
      <ul class="seals row">
          <li class="col-md-1"></li>
	      <li class="col-md-2 col-sm-12 col-xs-12">
		     <img class="img-responsive" src="{{asset('home/images/seal-1.png')}}">
		  </li>
		  
		  <li class="col-md-2 col-sm-12 col-xs-12">
		     <img class="img-responsive" src="{{asset('home/images/seal-3.png')}}">
		  </li>
		  <li class="col-md-2 col-sm-12 col-xs-12">
		     <img class="img-responsive" src="{{asset('home/images/seal-4.png')}}">
		  </li>
		  <li class="col-md-2 col-sm-12 col-xs-12">
		     <img class="img-responsive" src="{{asset('home/images/seal-5.png')}}">
		  </li>
		  <li class="col-md-2 col-sm-12 col-xs-12">
		     <img class="img-responsive" src="{{asset('home/images/seal-6.png')}}">
		  </li>
		  <li class="col-md-1"></li>
	  </ul>
   </div>
</div> --->



<br>
<br>

	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">



			<div class="" style="text-align:center;">
				<h2 style="color:#ff8000;">CONTACT US</h2>
			</div>
			@if(Session::has('message'))
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                        </div>
                    </div>
                </div>
                @endif
			<div class="agile-contact-grids">
				<div class="col-md-7 contact-form">
					<form action="{{action('UsersController@sendcontact')}}" method="post">
						<input type="text" name="name" placeholder="Enter your full name" required="">
						<input type="email" class="email" name="email" placeholder="Enter your Email" required="">
						<textarea name="nessage" placeholder="Enter Message" required=""></textarea>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<!---<div class="col-md-5 agileits-w3layouts-address">
					<div class="agileits-w3layouts-address-top">
						<h5>Get in touch</h5>
						<ul>
							<li>+1 234 567 8901</li>
							<li>+1 234 567 8902</li>
						</ul>
					</div>
					<div class="agileits-w3layouts-address-top">
						<h5>Address</h5>
						<ul>
							<li>123 Fourth Avenue,</li>
							<li>lacinia eros 98104,</li>
							<li>New Jersey,</li>
							<li>United States.</li>
						</ul>
					</div>
					<div class="agileits-w3layouts-address-top">
						<h5>Email</h5>
						<ul>
							<li><a href="mailto:info@example.com"> mail@example.com</a></li>
						</ul>
					</div>
				</div>--->
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact -->
	



	<!-- Footer section -->

	<!-- footer -->
	
		 


	<div class="jarallax footer">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-md-6 footer-widget">
					<div class="about-widget">
					<ul class="contact" style = 'font-size:14px; color:white;'>
						<li><p><i class="fa fa-map-marker"></i> 1 ST BRIDE STREET LONDON UNITED KINGDOM</p></li>
						<li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
						<li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
					</ul>
						
						<div class="social pt-1"  style = 'font-size:20px;'>
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>

				<br>
				<!-- widget -->
				<div class="col-md-6  footer-widget">
					<h6 class="" style = 'color:#ff8000'>USEFUL LINK</h6>
					<div class="dobule-link"  style = 'font-size:14px; '>
						<ul>
						<li><a href="/" class="active" style = 'color:white;'>Home</a></li>
						
							<li><a href="{{route('login')}}" style = 'color:white;'>Login</a></li>
							<li><a href="{{route('register')}}" style = 'color:white;'>Register</a></li>
						</ul>
						<ul>
							<li><a href="{{route ('terms')}}" style = 'color:white;'>Term & Conditions </a></li>
							
							<li><a href="/home/images/crypto.pdf"  style = 'color:white;'></i>License & Certification</a></li>
							</ul>
					
					<div id="google_translate_element"></div>
					<script type="text/javascript">
						function googleTranslateElementInit() {
									  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
									}
					</script>

					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

			
							
					
					</div>
				</div>	

				
				<!-- widget -->
				<!---<div class="col-sm-6 col-lg-3">
					
					<ul class="contact" style = 'font-size:14px; color:white;'>
						<li><p><i class="fa fa-map-marker"></i> 40 Baria Street 133/2, NewYork City,US</p></li>
						<li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
						<li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>--->
			</div>
		</div>
	
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p style = 'font-size:14px;'>
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved   <a href="/" target="_blank"  style = 'color:#ff8000'>Crypto-Trust Funds</a>
			</p>
			</div>		
		</div>
	</div>
	</div>
	<!-- Footer section end-->



	
	<!-- footer -->
	<!---<div class="jarallax footer">
		<div class="container">
			<div class="footer-logo">
				<h3><a href="/">{{$settings->site_name}}</a></h3>
			</div>
			<div class="agileinfo-social-grids">
				<h4>We are social</h4>
				<div class="border"></div>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="copyright">
			<ul> 
		<li><a href="{{route ('terms')}}">Terms & conditions</a>
		<li><a href="#"></i>Privacy</a></li>
		<li><a href="#"></i>License & Certification</a></li>
		<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

			</ul>
				<p>© 2018 {{$settings->site_name}}. All rights reserved</p>
				

			</div>
		</div>
	</div>--->
	<!-- //copyright -->



	<script src="{{asset('home/js/jarallax.js')}}"></script>
	<script src="{{asset('home/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<script type="text/javascript" src="{{asset('home/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="{{asset('home/js/owl.carousel.js')}}"></script>  
</body>	
</html>
