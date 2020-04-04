<header>
	<nav class="navbar navbar-expand-lg header-nav">
		<div class="navbar-header">
			<a id="mobile_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>
			<a href="/" class="navbar-brand logo">
				<img src="{{asset('img/docmoves-logo.png')}}" class="img-fluid" alt="Logo">
			</a>
		</div>
		<div class="main-menu-wrapper">
			<div class="menu-header">
				<a href="index-2.html" class="menu-logo">
					<img src="{{asset('/img/docmoves-logo.png')}}" class="img-fluid" alt="Logo">
				</a>
				<a id="menu_close" class="menu-close" href="javascript:void(0);">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<ul class="main-nav">
				<li>
					<a href="/">Home</a>
				</li>
				<li class="has-submenu">
					<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
						<li><a href="appointments.html">Appointments</a></li>
						<li><a href="schedule-timings.html">Schedule Timing</a></li>
						<li><a href="my-patients.html">Patients List</a></li>
						<li><a href="patient-profile.html">Patients Profile</a></li>
						<li><a href="chat-doctor.html">Chat</a></li>
						<li><a href="invoices.html">Invoices</a></li>
						<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
						<li><a href="reviews.html">Reviews</a></li>
						<li><a href="doctor-register.html">Doctor Register</a></li>
					</ul>
				</li>	
				<li class="has-submenu active">
					<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="active"><a href="search.html">Search Doctor</a></li>
						<li><a href="doctor-profile.html">Doctor Profile</a></li>
						<li><a href="booking.html">Booking</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="booking-success.html">Booking Success</a></li>
						<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
						<li><a href="favourites.html">Favourites</a></li>
						<li><a href="chat.html">Chat</a></li>
						<li><a href="profile-settings.html">Profile Settings</a></li>
						<li><a href="change-password.html">Change Password</a></li>
					</ul>
				</li>	
				<li class="has-submenu">
					<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li><a href="voice-call.html">Voice Call</a></li>
						<li><a href="video-call.html">Video Call</a></li>
						<li><a href="search.html">Search Doctors</a></li>
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="components.html">Components</a></li>
						<li class="has-submenu">
							<a href="invoices.html">Invoices</a>
							<ul class="submenu">
								<li><a href="invoices.html">Invoices</a></li>
								<li><a href="invoice-view.html">Invoice View</a></li>
							</ul>
						</li>
						<li><a href="blank-page.html">Starter Page</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="forgot-password.html">Forgot Password</a></li>
					</ul>
				</li>
				<li>
					<a href="admin/index.html" target="_blank">Admin</a>
				</li>
				<li class="login-link">
					<a href="login.html">Login / Signup</a>
				</li>
			</ul>
		</div>		 
		<ul class="nav header-navbar-rht">
			<li class="nav-item contact-item">
				<div class="header-contact-img">
					<i class="far fa-hospital"></i>							
				</div>
				<div class="header-contact-detail">
					<p class="contact-header">Contact</p>
					<p class="contact-info-header"> +237 676 186 454</p>
				</div>
			</li>
		</ul>
		<ul class="nav header-navbar-rht" style="padding-right:60px;">
			<li class="nav-item">
				@if (Route::has('login')) 
				<div class="row" >
					@auth
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="#">{{ Auth::user()->name }} <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="/dashboard">Dashboard</a></li>
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</li>
						</ul>			
						
					@else
						{{-- <a href="{{ route('login') }}">Login</a> --}}
						<a class="nav-link header-login" href="{{ route('login') }}" style="margin-right:10px">login</a>

						@if (Route::has('register'))
							{{-- <a href="{{ route('register') }}">Register</a> --}}
							<a class="nav-link header-login" href="{{ route('register') }}">signup</a>
						@endif
					@endauth 
				</div>
			@endif
			</li>
		</ul>
	</nav>
</header>
