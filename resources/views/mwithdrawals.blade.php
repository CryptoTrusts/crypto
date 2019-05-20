@include('header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Manage clients withdrawals</h3>
				
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

				<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
					<table class="table table-hover"> 
						<thead> 
							<tr> 
								<th>ID</th> 
								<th>Client name</th>
                                <th>Amount requested</th>
                                <th>Amount + charges</th>
                                <th>Payment mode</th>
                                <th>Receiver's email</th>
								<th>Status</th> 
                                <th>Date created</th>
                                <th>Option</th>
							</tr> 
						</thead> 
						<tbody> 
							@foreach($withdrawals as $deposit)
							<tr> 
								<th scope="row">{{$deposit->id}}</th>
                                <td>{{$deposit->duser->name}}</td>
								 <td>{{$deposit->amount}}</td> 
								 <td>{{$deposit->to_deduct}}</td> 
								 <td>{{$deposit->payment_mode}}</td> 
								 <td>{{$deposit->duser->email}}</td> 
                                 <td>{{$deposit->status}}</td> 
								 <td>{{$deposit->created_at}}</td> 
                                 <td> <a class="btn btn-default" href="{{ url('dashboard/pwithdrawal') }}/{{$deposit->id}}">Process</a>
                                 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#viewModal{{$deposit->id}}"><i class="fa fa-eye"></i> View</a>
                                 </td> 
							</tr> 
							
							<!-- View info modal-->
							<div id="viewModal{{$deposit->id}}" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="text-align:center;">{{$deposit->duser->name}} withdrawal details.</strong></h4>
								</div>
								<div class="modal-body">
								    @if($deposit->payment_mode=='Bitcoin')
									<h3>BTC Wallet:</h3>
									<h4>{{$deposit->duser->btc_address}}</h4><br>
									@elseif($deposit->payment_mode=='Bank deposit')
									<h4>Bank name: {{$deposit->duser->bank_name}}</h4><br>
									<h4>Account name: {{$deposit->duser->account_name}}</h4><br>
									<h4>Account number: {{$deposit->duser->account_no}}</h4>
									@else
									<h4>Get in touch with client. <br><br>{{$deposit->duser->email}}</h4>
									@endif
								</div>
								</div>
							</div>
							</div>
							<!--End View info modal-->
							@endforeach
						</tbody> 
					</table>
				</div>
			</div>
		</div>
        @include('modals')
		@include('footer')