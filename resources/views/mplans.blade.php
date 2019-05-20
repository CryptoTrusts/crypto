@include('header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Available packages</h3>
				
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

						<div class="row">
						@foreach($plans as $plan)
                		<div class="col-lg-4">
							<div class="sign-up-row widget-shadow" style="width:100%; padding:0px;">
								<h3 style="background-color:#e9e9e9; padding:20px;">
								{{$plan->name}}
							
								</h3>
								<div style="padding:20px; text-align:center;">
									<h4><strong>{{$settings->currency}}{{$plan->price}}+</strong></h4>
									<hr>
									<p><i class="fa fa-star"></i> At least {{$settings->currency}}{{$plan->expected_return}} expected return</p><hr>
									@if($plan->increment_type=="Percentage")
									<p><i class="fa fa-star"></i> {{$plan->increment_amount}}% {{$plan->increment_interval}} return</p>
									@else
									<p><i class="fa fa-star"></i> {{$settings->currency}}{{$plan->increment_amount}} {{$plan->increment_interval}} return</p>
									@endif
									<hr>
									<form style="padding:3px;" role="form" method="post" action="{{action('Controller@joinplan')}}">
					 
            							   <label>Select investment duration</label><br/>
                                           <select class="form-control" name="duration" style="border:0px solid #fff; height:50px; font-weight:bold;">
            									<option>{{$plan->expiration}}</option>
            									<option>One week</option>
            									<option>One month</option>
            									<option>Three months</option>
            									<option>Six months</option>
            									<option>One year</option>
            								</select><br>
            							   <input type="hidden" name="id" value="{{ $plan->id }}">
            					   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
            					   		<input type="submit" class="btn btn-default" value="Join plan">
            					   </form>
								</div>
							</div>
						</div>

				<!-- Deposit for a plan Modal -->
				<div id="depositModal{{$plan->id}}" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Make a deposit of <strong>{{$settings->currency}}{{$plan->price}} to join this plan</strong></h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="{{action('SomeController@deposit')}}">
					   		<input style="padding:5px;" class="form-control" value="{{$plan->price}}" type="text" name="amount" required><br/>
                               
					   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   		<input type="hidden" name="pay_type" value="plandeposit">
					   		<input type="hidden" name="plan_id" value="{{$plan->id}}">
					   		<input type="submit" class="btn btn-default" value="Continue">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /deposit for a plan Modal -->
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
		@include('modals')
		@include('footer')