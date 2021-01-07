@extends('layouts.main')

@section('title', 'Contact')

@section('content')

	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area bc-contact">
		<img class="bc-img" src="assets/images/breadcrumb/contact.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title">
						Contact
					</h4>
					<ul class="breadcrumb-list">
						<li>
							<a href="index.html">
									<i class="fas fa-home"></i>
									Home
							</a>
						</li>
						<li>
							<span><i class="fas fa-chevron-right"></i> </span>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

	<!-- Contact Area End -->
	<section class="contact">
		<img class="left-img" src="assets/images/contact-left.png" alt="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h5 class="subtitle">
							Contact Us
						</h5>
						<h2 class="title">
							Get in Touch
						</h2>
						<p class="text">
								It’s up to the competition in features, with some unique 
								advantages.All the latest crypto games.Here are some of them.
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-lg-6">
					<div class="contact-form-wrapper">
						<div class="contact-box">
							<h4 class="title">
								Send Us a Message
							</h4>
							<form action="#">
								<input type="text" class="input-field" placeholder="Enter Your Full Name">
								<input type="email" class="input-field" placeholder="Enter Your Email Address">
								<textarea class="input-field textarea" placeholder="Message *"></textarea>
								<button type="submit" class="mybtn1">SUBMIT NOW</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Area End -->

@endsection