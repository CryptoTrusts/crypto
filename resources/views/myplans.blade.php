@include('header')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5" style="margin-bottom:5px; padding:0px;">
						<h3 style="color:#555; margin:20px 0px 20px 0px;">{{$title}}</h3>				
					</div>
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
                
                <div class="sign-u" style="background-color:#fff; padding:5px 15px 15px 15px;">
						
							<div class="row">
                                <div class="col-lg-4 col-md-4" style="background-color:brown; color:#fff; padding:30px 20px 30px 20px;">
                                    <h3><i class="fa fa-money"></i> Current package</h3>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <p style="color:#999;">Activated on: {{\Carbon\Carbon::parse($cplan->created_at)->toDayDateTimeString()}}</p>
                                    
                                    <h4>Package name: <small>{{$cplan->dplan->name}}</small></h4>
                                    
                                    <h4>Amount: <small>{{$settings->currency}}{{$cplan->dplan->price}}</small></h4>
                                    <h4>Duration: <small>{{$cplan->inv_duration}}</small></h4>
                                    @if($cplan->active=="yes")
                                    <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                                    @elseif($cplan->active=="expired")
                                    <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                                    @else
                                    <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                                    @endif
                                </div>
                            </div>
						
					<div class="clearfix"> </div>
				</div>
				
				<h3 style="margin:20px 0px 20px 0px;">Concurrent packages</h3>
 
                <a href="{{ url('dashboard/mplans') }}" class="btn btn-lg btn-default">Add plan</a>
                @foreach($plans as $plan)
                @if($cplan->id != $plan->id)
				<div class="row-one" style="margin-top:10px;">
					<div class="col-md-6 rp">
						 <p style="color:#999;">Activated on: {{\Carbon\Carbon::parse($plan->created_at)->toDayDateTimeString()}}</p>
                                    
                                    <h4>Package name: <small>{{$plan->dplan->name}}</small></h4>
                                    
                                    <h4>Amount: <small>{{$settings->currency}}{{$plan->dplan->price}}</small></h4>
                                    <h4>Duration: <small>{{$plan->inv_duration}}</small></h4>
                                    @if($plan->active=="yes")
                                    <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                                    @elseif($plan->active=="expired")
                                    <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                                    @else
                                    <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                                    @endif
					</div>	
								
				</div>
				@endif
				@endforeach
				
				<div class="clearfix"> </div>
			</div>
		
		</div>	
	@include('footer')
	