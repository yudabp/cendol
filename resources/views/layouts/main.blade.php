<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/logo1.png') }}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">

	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.css') }}">
	@yield('header')
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- Header Area Start  -->
	<header class="header nav-fixed">
		
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">                 
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="/">
								<img src="{{ asset('assets/images/logo1.png') }}" alt="">
							</a>
							
							<div class="collapse navbar-collapse" id="main_menu" style="height: 70px;">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item dropdown">
										<a class="nav-link" href="/">
												
											<div class="mr-hover-effect"></div>
										</a>
									</li>
								</ul>
								
								<a  href="{{ url('result') }}" class="mybtn1" target="_blank">All Result</a>
								
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
	<!-- Header Area End  -->

	@yield('content')

	<!-- Footer Area Start -->
	<footer class="footer" id="footer" style="padding: 0;">
		<div class="copy-bg" style="margin: 0;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center" style="padding-bottom: -7px;">
							<p><a href="/">Alaska6D</a> © 2021 - All Rights Reserved
								
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer> 
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->

	<!-- Login Area Start -->
	<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-body">
					<div class="logo-area">
							<img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="">
					</div>
					<div class="header-area">
						<h4 class="title">Great to have you back!</h4>
						<p class="sub-title">Enter your details below.</p>
					</div>
					<div class="form-area">
						<form action="#"  method="POST">
							<div class="form-group">
									<label for="login-input-email">Email*</label>
									<input type="email" class="input-field" id="login-input-email"  placeholder="Enter your Email">
							</div>
							<div class="form-group">
									<label for="login-input-password">Password*</label>
									<input type="password" class="input-field" id="login-input-password"  placeholder="Password">
							</div>
							<div class="form-group">
								<div class="box">
									<div class="left">
											<input type="checkbox" class="check-box-field" id="input-save-password" checked>
										<label for="input-save-password">Remember Password</label>
									</div>
									<div class="right">
										<a href="#">
											Forgot Password?
										</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								   <button type="submit" class="mybtn1">Log In</button>
							</div>
						</form>
					</div>
					<div class="form-footer">
						<p>Not a member? 
								<a href="#">Create account <i class="fas fa-angle-double-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- Login Area End -->
	
		<!-- SignIn Area Start -->
		<div class="modal fade login-modal sign-in" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered " role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<div class="logo-area">
								<img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="">
						</div>
						<div class="header-area">
							<h4 class="title">Great to have you back!</h4>
							<p class="sub-title">Enter your details below.</p>
						</div>
						<div class="form-area">
							<form action="#" method="POST">
								<div class="form-group">
										<label for="input-name">Name*</label>
										<input type="text" class="input-field" id="input-name"  placeholder="Enter your Name">
								</div>
								<div class="form-group">
										<label for="input-email">Email*</label>
										<input type="email" class="input-field" id="input-email"  placeholder="Enter your Email">
								</div>
								<div class="form-group">
										<label for="input-password">Password*</label>
										<input type="password" class="input-field" id="input-password"  placeholder="Enter your password">
								</div>
								<div class="form-group">
										<label for="input-con-password">confirm password**</label>
										<input type="password" class="input-field" id="input-con-password"  placeholder="Enter your Confirm Password">
								</div>
								<div class="form-group">
										<select>
											<option value="0">BTC</option>
											<option value="1">USD</option>
											<option value="2">EUR</option>
										</select>
								</div>
								<div class="form-group">
									<div class="check-group">
											<input type="checkbox" class="check-box-field" id="input-terms" checked>
											<label for="input-terms">
													I agree with <a href="#">terms and Conditions</a> and  <a href="#">privacy policy</a>
											</label>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="mybtn1">Take Bonus</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		<!-- SignIn Area End -->

	<!-- jquery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- popper -->
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- plugin js-->
	<script src="{{ asset('assets/js/plugin.js') }}"></script>

	<!-- MpusemoverParallax JS-->
	<script src="{{ asset('assets/js/TweenMax.js') }}"></script>
	<script src="{{ asset('assets/js/mousemoveparallax.js') }}"></script>
	<!-- main -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	@yield('footer')
</body> 

</html>