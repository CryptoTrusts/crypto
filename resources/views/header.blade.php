<!DOCTYPE HTML>
<html>
<head>
<title>{{$settings->site_name}} | {{$title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{URL:: asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ URL::asset('js/modernizr.custom.js')}}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="{{URL:: asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{URL:: asset('js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

<!-- Metis Menu -->
<script src="{{ URL::asset('js/metisMenu.min.js')}}"></script>
<script src="{{URL:: asset('js/custom.js')}}"></script>
<link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
{{!! $settings->tawk_to !!}}

</script>
<!--End of Tawk.to Script-->

	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="{{ url('/dashboard') }}" class="active"><i class="fa fa-dashboard nav_icon"></i>Dashboard</a>
						</li>
						
						<li class="">
							<a href="#"><i class="fa fa-user nav_icon"></i>Account <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{ url('dashboard/changepassword') }}">Change Password</a>
									<a href="{{ url('dashboard/accountdetails') }}">Update Account</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>

						@if(Auth::user()->type =='0')
						
						<li>
							<a href="{{ url('dashboard/support') }}"><i class="fa fa-ticket nav_icon"></i>Support</a>
						</li>
						
						<li>
							<a href="{{ url('dashboard/tradinghistory') }}"><i class="fa fa-briefcase nav_icon"></i>Transaction (ROI) log</a>
						</li>

						<li>
							<a href="{{ url('dashboard/deposits') }}"><i class="fa fa-money nav_icon"></i>Deposits</a>
						</li>

						<li>
							<a href="{{ url('dashboard/withdrawals') }}"><i class="fa fa-dollar nav_icon"></i>Withdrawals</a>
						</li>
						
						<li class="">
							<a href="#"><i class="fa fa-cog nav_icon"></i>Packages <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{ url('dashboard/mplans') }}"><i class="fa fa-list nav_icon"></i>Investment plans</a>
									<a href="{{ url('dashboard/myplans') }}"><i class="fa fa-eye nav_icon"></i>My packages</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>


						@endif
						
						@if(Auth::user()->type =='1' or Auth::user()->type =='2')
						<li>
							<a href="{{ url('dashboard/plans') }}"><i class="fa fa-cog nav_icon"></i>Investment plans</a>
						</li>

						<li>
							<a href="{{ url('dashboard/manageusers') }}"><i class="fa fa-users nav_icon"></i>Manage users</a>
						</li>
						<li>
							<a href="{{ url('dashboard/mwithdrawals') }}"><i class="fa fa-th-list nav_icon"></i>Manage withdrawals</a>
						</li>
						<li>
							<a href="{{ url('dashboard/mdeposits') }}"><i class="fa fa-money nav_icon"></i>Deposits</a>
						</li>
						<li>
							<a href="{{ url('dashboard/settings') }}"><i class="fa fa-gear nav_icon"></i>Settings</a>
						</li>

						<li>
							<a href="{{ url('dashboard/agents') }}"><i class="fa fa-users nav_icon"></i>View Agents</a>
						</li>
						
						@endif
						
						<li>
							<a href="{{ url('dashboard/referuser') }}"><i class="fa fa-users nav_icon"></i>Refer users</a>
						</li>
						
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo" style="padding:6px; width:200px;">
					<a href="{{ url('/') }}" style="padding-left:15px !important;">
						<h4>{{$settings->site_name}}</h4>
						
					</a>
				</div>
				<!--//logo-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details" style="padding:8px; margin-top:15px;">		
					<a href="{{ url('dashboard') }}"><span class="prfil-img"><img style="width:30px; height:30px; border-radius:100%;" src="{{asset('images/'.Auth::user()->photo)}}" alt=""> </span> {{ Auth::user()->name }}</a>
					| <a href="{{ url('dashboard/changepassword') }}"><i class="fa fa-key"></i> Change Password</a>
					| <a href="{{ url('dashboard/accountdetails') }}"><i class="fa fa-edit"></i> Update Account</a>
					| <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    	</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->