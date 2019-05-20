@include('header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Set up site basic info</h3>
				
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

                @if(count($errors) > 0)
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach ($errors->all() as $error)
                            <i class="fa fa-warning"></i> {{ $error }}
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                
                
				<div class="sign-up-row widget-shadow">
					<form method="post" action="{{action('SomeController@updatesettings')}}" enctype="multipart/form-data">
					<div class="sign-u">
						<div class="sign-up1">
							<h5>Announcement :</h4>
						</div>
						<div class="sign-up2">
							<textarea name="update" class="form-control" rows="2">{{$settings->update}}</textarea>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<h3 style="text-align:center; margin-top:10px;">Website information</h3>
						<div class="sign-up1">
							<h4>Site Name* :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="site_name" value="{{$settings->site_name}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Site Description :</h4>
						</div>
						<div class="sign-up2">
							<textarea name="description" class="form-control" rows="1">{{$settings->description}}</textarea>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Live chat widget:</h4>
						</div>
						<div class="sign-up2">
							<textarea name="tawk_to" class="form-control" rows="2">{{$settings->tawk_to}}</textarea>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Site Title :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="site_title" value="{{$settings->site_title}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Site Keywords :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="keywords" value="{{$settings->keywords}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Site URL* :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="site_address" value="{{$settings->site_address}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Contact email* :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="contact_email" value="{{$settings->contact_email}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input name="s_currency" value="{{ $settings->s_currency }}" id="s_c" type="hidden">

					<div class="sign-u">
						<div class="sign-up1">
							<h4>My currency:</h4>
						</div>
						<div class="sign-up2">
							<select name="currency" id="select_c" class="form-control" style="height:40px;" onchange="s_f()">
							<option>{{ $settings->currency }}</option>
							@foreach($currencies as $key=>$currency)
							<option id="{{$key}}" value="<?php echo htmlentities($currency); ?>">{{$key .' ('.$currency.')'}}</option>
							@endforeach
						</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<script>
						function s_f(){
							var e = document.getElementById("select_c");
							var selected = e.options[e.selectedIndex].id;
							document.getElementById("s_c").value = selected;
						}
					</script>

					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Site Logo :</h4>
						</div>
						<div class="sign-up2">
							<input style="padding-bottom:39px;" name="logo" class="form-control" type="file">
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Referral Commission (%) :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="ref_commission" value="{{$settings->referral_commission}}" required>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Turn on/off trade:</h4>
						</div>
						<div class="sign-up2">
							<input name="trade_mode" id="check" type="checkbox" value="on"> Check to enable trading
						</div>
						<div class="clearfix"> </div>
					</div>

					@if($settings->trade_mode=='on')
						<script>document.getElementById("check").checked= true;</script>
					@endif

					<!-- Payment info and methods -->
					<h3 style="text-align:center; margin:10px 0px 10px 0px;">Payment methods</h3>
					<a class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#cpdModal"> Set up Coinpayments</a><br/><br/>
					

					<div class="panel panel-default" style="border:0px solid #fff;">
                                <!-- Panel Heading Starts -->
                    	<div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bank">
                                Bank deposit or transfer</a>
                            </h4>
                    	</div>
                               
                        <div id="bank" class="panel-collapse collapse">
                        	<div class="sign-u">
						<div class="sign-up1">
							<h4>Bank name :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="bank_name" value="{{$settings->bank_name}}">
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Account name :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="account_name" value="{{$settings->account_name}}">
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Account number :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="account_number" value="{{$settings->account_number}}">
						</div>
						<div class="clearfix"> </div>
					</div>
                        </div>
                    </div>

					<div class="panel panel-default" style="border:0px solid #fff;">
                                <!-- Panel Heading Starts -->
                    	<div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#btc">
                                Bitcoin</a>
                            </h4>
                    	</div>
                               
                        <div id="btc" class="panel-collapse collapse">
                        <div class="sign-u">
						<div class="sign-up1">
							<h4>BTC address :</h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="btc_address" value="{{$settings->btc_address}}">
						</div>
						<div class="clearfix"> </div>
					</div>
						</div>
                    </div>

					<div class="panel panel-default" style="border:0px solid #fff;">
                                <!-- Panel Heading Starts -->
                    	<div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#eth">
                                Ethereum</a>
                            </h4>
                    	</div>
                               
                        <div id="eth" class="panel-collapse collapse">
						<div class="sign-u">
							<div class="sign-up1">
								<h4>ETH address :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name="eth_address" value="{{$settings->eth_address}}">
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
                    </div>

					<div class="panel panel-default" style="border:0px solid #fff;">
                                <!-- Panel Heading Starts -->
                    	<div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#card">
                                Credit Card (Stripe)</a>
                            </h4>
                    	</div>
                               
                        <div id="card" class="panel-collapse collapse">
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Stripe secret key :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name="s_s_k" value="{{$settings->s_s_k}}">
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
								<h4>Stripe publishable key :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name="s_p_k" value="{{$settings->s_p_k}}">
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
                    </div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Payment mode:</h4>
						</div>
						<div class="sign-up2">
						<input type="checkbox" id="check1" value="1" name="payment_mode1"> Bank transfer &nbsp; &nbsp;
						<input type="checkbox" id="check3" value="3" name="payment_mode3"> Ethereum &nbsp; &nbsp;
						<input type="checkbox" id="check2" value="2" name="payment_mode2"> Bitcoin <br>
						<input type="checkbox" id="check4" value="4" name="payment_mode4"> Litecoin &nbsp; &nbsp;
						<input type="checkbox" id="check5" value="5" name="payment_mode5"> Credit card (Stripe) 
						&nbsp; &nbsp;
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php 
						$pmodes = str_split($settings->payment_mode);
						foreach($pmodes as $pmode){
							if($pmode==1){
							echo'
							<script>document.getElementById("check1").checked= true;</script>
							';
							}
							if($pmode==2){
								echo'
								<script>document.getElementById("check2").checked= true;</script>
								';
							}
							if($pmode==3){
								echo'
								<script>document.getElementById("check3").checked= true;</script>
								';
							}
							if($pmode==4){
								echo'
								<script>document.getElementById("check4").checked= true;</script>
								';
							}
							if($pmode==5){
								echo'
								<script>document.getElementById("check5").checked= true;</script>
								';
							}
						}
					 ?>

					<!-- end Payment info and methods -->
					
					
					<div class="sub_home">
						<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					</div>
					<input type="hidden" name="id" value="1">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
				</form>
				
				
				<!-- Withdrawal methods -->
					<h3 style="text-align:center; margin:10px 0px 10px 0px;">Withdrawal methods</h3>
					<a class="btn btn-default" href="#" data-toggle="modal" data-target="#wmethodModal"><i class="fa fa-plus"></i> Add new</a><br/><br/>
					
                    @foreach($wmethods as $method)
					<div class="panel panel-default" style="border:0px solid #fff;">
                                <!-- Panel Heading Starts -->
                    	<div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method{{$method->id}}">
                                {{$method->name}}</a>
                            </h4>
                    	</div>
                               
                        <div id="method{{$method->id}}" class="panel-collapse collapse">
    					<div class="sign-u">
    					    <br/>
    						<a class="btn btn-default" href="#" data-toggle="modal" data-target="#wmethodModal{{$method->id}}"><i class="fa fa-pencil"></i> Edit</a> &nbsp; &nbsp;
    						 <a class="btn btn-danger" href="{{url('dashboard/deletewdmethod')}}/{{$method->id}}"><i class="glyphicon glyphicon-trash"></i></a> 
    					</div>

                        </div>
                    </div>
                    
            <!-- Edit Withdrawal method Modal -->
			<div id="wmethodModal{{$method->id}}" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Edit withdrawal method</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="{{action('SomeController@updatewdmethod')}}">
                            <label>Enter method name</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Enter method name" type="text" name="name" value="{{$method->name}}" required><br/>
					   		<label>Minimum amount $</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Minimum amount $" type="text" name="minimum" value="{{$method->minimum}}" required><br/>
					   		<label>Maximum amount $</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Maximum amount $" type="text" name="maximum" value="{{$method->maximum}}" required><br/>
					   		<label>Charges (Fixed amount $)</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Charges (Fixed amount $)" type="text" name="charges_fixed" value="{{$method->charges_fixed}}" required><br/>
					   		<label>Charges (Percentage %)</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Charges (Percentage %)" type="text" name="charges_percentage" value="{{$method->charges_percentage}}" required><br/>
					   		<label>Duration</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Payout duration" type="text" name="duration" value="{{$method->duration}}" required><br/>
					   		<label>Method status</label>
					   		<select name="status" class="form-control">
					   		    <option>{{$method->status}}</option> 
					   		    <option value="enabled">Enable</option> 
					   		    <option value="disabled">Disable</option> 
					   		</select><br/>
                             <input type="hidden" name="type" value="withdrawal">
                             <input type="hidden" name="id" value="{{$method->id}}">
					   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   		<input type="submit" class="btn btn-default" value="Continue">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /edit withdrawal method Modal -->
                    @endforeach
                    <!-- End withdrawal method -->
                    
                    
                       <!-- set up coinpayments Modal -->
			<div id="cpdModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Coinpayments set up</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="{{action('SomeController@updatecpd')}}">
                            <label>Merchant ID</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Merchant ID" type="text" name="cp_m_id" value="{{$cpd->cp_m_id}}" required><br/>
					   		
					   		<label>CoinPayment IPN Secret</label>
					   		<input style="padding:5px;" class="form-control" placeholder="CoinPayment IPN Secret" type="text" name="cp_ipn_secret" value="{{$cpd->cp_ipn_secret}}" required><br/>
					   		
					   		<label>CoinPayments debug email</label>
					   		<input style="padding:5px;" class="form-control" placeholder="CoinPayments debug email" type="text" name="cp_debug_email" value="{{$cpd->cp_debug_email}}" required><br/>
					   		
					   		<label>Public key</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Public key" type="text" name="cp_p_key" value="{{$cpd->cp_p_key}}" required><br/>
					   		
					   		<label>Private key</label>
					   		<input style="padding:5px;" class="form-control" placeholder="Private key" type="text" name="cp_pv_key" value="{{$cpd->cp_pv_key}}" required><br/>
					   		
					   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   		<input type="submit" class="btn btn-default" value="Submit">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /set up coinpayments Modal -->


					
				</div>
			</div>
		</div>
		@include('modals')
		<script type="text/javascript">
					var badWords = [ 
					    '<!--Start of Tawk.to Script-->',
                        '<script type="text/javascript">', 
                        '<!--End of Tawk.to Script-->'
                                ];
                    $(':input').on('blur', function(){
                      var value = $(this).val();
                      $.each(badWords, function(idx, word){
                        value = value.replace(word, '');
                      });
                      $(this).val( value);
                    });
					</script>
		@include('footer')