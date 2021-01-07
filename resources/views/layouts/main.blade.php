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
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">

	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.css') }}">
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
	<header class="header">
		<!-- Top Header Area Start -->
		<section class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="left-content">
								<ul class="left-list">
									<li>
										<p>
											<i class="fas fa-headset"></i>	Support
										</p>
									</li>
									<li>
										<p>
											<i class="fas fa-envelope"></i>	info@Dooplo.com
										</p>
									</li>
								</ul>
							</div>
							<div class="right-content">
								<ul class="right-list">
									<li>
										<div class="cart-icon tm-dropdown">
											<i class="fas fa-cart-arrow-down"></i>
											<span class="cart-count">10</span>
											<div class="tm-dropdown-menu">
												<ul class="list">
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
														<div class="close">
																<i class="fas fa-times"></i>
														</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
												</ul>
												<a href="cart.html" class="link-btn">Cart Page</a>
											</div>
										</div>
									</li>
									<li>
										<div class="notofication tm-dropdown">
											<i class="fas fa-bell"></i>
											<span class="count">11</span>
											<div class="tm-dropdown-menu">
													<ul class="list">
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
													</ul>
												</div>
										</div>
									</li>
									<li>
										<a href="#" class="sign-in" data-toggle="modal" data-target="#login">
											<i class="fas fa-user"></i> Sign In
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Top Header Area End -->
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">                 
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="/">
								<img src="{{ asset('assets/images/logo1.png') }}" alt="">
							</a>
							
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item dropdown">
										<a class="nav-link" href="/">
											Home
											<div class="mr-hover-effect"></div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ url('result') }}">Result
												<div class="mr-hover-effect"></div></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ url('play') }}">Play
												<div class="mr-hover-effect"></div></a>
									</li>
									
									<zli class="nav-item">
										<a class="nav-link" href="{{ url('lottery') }}">lottery
												<div class="mr-hover-effect"></div></a>
									</zli>
									<li class="nav-item">
										<a class="nav-link" href="{{ url('tournaments') }}">tournaments
												<div class="mr-hover-effect"></div></a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											Pages
											<div class="mr-hover-effect"></div>
										</a>
										<ul class="dropdown-menu" >
											<li><a class="dropdown-item" href="{{ url('about-us') }}"> <i class="fa fa-angle-double-right"></i>About</a></li>
											<li><a class="dropdown-item" href="{{ url('affiliate') }}"> <i class="fa fa-angle-double-right"></i>Affiliate</a></li>
											<li><a class="dropdown-item" href="{{ url('awards') }}"> <i class="fa fa-angle-double-right"></i>Awards</a></li>
											<li><a class="dropdown-item" href="{{ url('bonus') }}"> <i class="fa fa-angle-double-right"></i>Bonus</a></li>
											<li><a class="dropdown-item" href="{{ url('cart') }}"> <i class="fa fa-angle-double-right"></i>Cart</a></li>
											<li><a class="dropdown-item" href="{{ url('faq') }}"> <i class="fa fa-angle-double-right"></i>Faq</a></li>
											<li><a class="dropdown-item" href="{{ url('how-it-work') }}"> <i class="fa fa-angle-double-right"></i>How It Work</a></li>
											<li><a class="dropdown-item" href="{{ url('terms-conditions') }}"> <i class="fa fa-angle-double-right"></i>Terms & Condition</a></li>
										</ul>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="{{ url('contact') }}">Contact
													<div class="mr-hover-effect"></div></a>
										</li>
								</ul>
								<a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join us</a>
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
	<footer class="footer" id="footer">
		<div class="subscribe-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="subscribe-box">
								<form action="#">
							<div class="row">
								<div class="col-lg-12">
									<div class="heading-area">
											<h5 class="sub-title">
													subscribe to Dooplo
											</h5>
											<h4 class="title">
													To Get Exclusive Benefits
											</h4>
									</div>
								</div>
								<div class="col-lg-3 col-4 d-flex align-self-center">
									<div class="icon">
										<img src="{{ asset('assets/images/mail-box.png') }}" alt="">
									</div>
								</div>
								<div class="col-lg-6 col-8 d-flex align-self-center">
									<div class="form-area">
											<input type="text" placeholder="Your Email Address">
									</div>
								</div>
								<div class="col-lg-3 d-flex align-self-center">
									<div class="button-area">
										<button class="mybtn1" type="submit">Subscribe
											<span><i class="fas fa-paper-plane"></i></span>
										</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							About 
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	About Us
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Contact Us
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Latest Blog
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Authenticity Guarantee
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Customer Reviews
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Privacy Policy

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							My Account
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Manage Your Account
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> How to Deposit
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> How to Withdraw
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Account Varification
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Safety & Security
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Membership Level

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							help center 
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Help centre
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>FAQ
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Quick Start Guide
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Tutorials
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Borrow
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Lend

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							Legal Info
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Risk Warnings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Privacy Notice
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Security
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Terms of Service
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Become Affiliate
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Complaints Policy

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="left-area">
							<p>Copyright © 2019.All Rights Reserved By <a href="#">Dooplo</a>
							</p>
						</div>
					</div>
					<div class="col-lg-7">
						<ul class="copright-area-links">
							<li>
								<a href="#">Terms Of Use</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Gamble</a>
							</li>
							<li>
								<a href="#">Aware</a>
							</li>
							<li>
								<a href="#">Help Cente</a>
							</li>
						</ul>
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


<!-- Mirrored from pixner.net/dooplo/dooplo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 09:42:47 GMT -->
</html>