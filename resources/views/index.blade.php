@extends('layouts.main')

@section('title', 'Home')

@section('content')
	<div class="container-fluid" style="padding-top: 100px;padding-right:0; padding-left:0;">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('assets/images/about-video-bg.jpg') }}" alt="First slide" style="height:550px;">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/images/about-video-bg.jpg') }}" alt="Second slide" style="height:550px;">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/images/about-video-bg.jpg') }}" alt="Third slide" style="height:550px;">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!-- Featured Game Area Start -->
	<section class="featured-game">
		<!-- Features Area Start -->
		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature-box">
							<div class="feature-box-inner">
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon one">
												<img src="{{ asset('assets/images/feature/icon1.png') }}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
													Juara 1
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon two">
												<img src="{{ asset('assets/images/feature/icon2.png') }}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
													Juara 2
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon three">
												<img src="{{ asset('assets/images/feature/icon3.png') }}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
													Juara 3
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Features Area End -->
	</section>
	<!-- Featured Game Area	End -->

	<!-- Lottery Staticstics Area Start -->
	<section class="lottery-area" style="padding:0">
		<div class="daily-lottery" style="padding: 50px 0px 50px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="draw-time">
							<h5 class="subtitle">
								Lottery Draw Starts In:
							</h5>
							<div class="draw-counter">
								<div>Iklan</div>
							</div>
							<p class="text">
								To meet Today's challenges
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Lottery Staticstics  Area End -->

	<!-- Latest Activities Area Start -->
	 <section class="activities" style="padding: 50px 0px 50px;">
		<img class="shape shape1" src="{{ asset('assets/images/people/shape1.png') }}" alt="">
		<img class="shape shape2" src="{{ asset('assets/images/people/shape2.png') }}" alt="">
		<img class="shape shape3" src="{{ asset('assets/images/people/shape3.png') }}" alt="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h5 class="subtitle">
							The Smarter Way 
						</h5>
						<h2 class="title">
							Past Winner
						</h2>
						<p class="text">
							The World's First Crypto Lending Marketplace and 
							Affordable and competitive interest rates
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-all-bets" role="tabpanel" aria-labelledby="pills-all-bets-tab">
							<div class="responsive-table">
								<table class="table">
									<thead>
										<tr>
										<th scope="col">USER</th>
										<th scope="col">BET ID</th>
										<th scope="col">BET AMOUNT</th>
										<th scope="col">CHANCE</th>
										<th scope="col">GAME</th>
										<th scope="col">PROFIT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p5.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p6.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-my-bets" role="tabpanel" aria-labelledby="pills-my-bets-tab">
							<div class="responsive-table">
								<table class="table">
									<thead>
										<tr>
										<th scope="col">USER</th>
										<th scope="col">BET ID</th>
										<th scope="col">BET AMOUNT</th>
										<th scope="col">CHANCE</th>
										<th scope="col">GAME</th>
										<th scope="col">PROFIT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p5.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p6.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-my-jackpots" role="tabpanel" aria-labelledby="pills-my-jackpots-tab">
							<div class="responsive-table">
									<table class="table">
									<thead>
										<tr>
										<th scope="col">USER</th>
										<th scope="col">BET ID</th>
										<th scope="col">BET AMOUNT</th>
										<th scope="col">CHANCE</th>
										<th scope="col">GAME</th>
										<th scope="col">PROFIT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p5.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p6.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon1.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p1.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon2.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p2.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon3.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p3.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon4.png') }}" alt="">
												0.00000051
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ asset('assets/images/people/p4.png') }}" alt="">
												Tom Bass
											</td>
											<td>
												b799b8724b
											</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
											<td>70%</td>
											<td>Dice</td>
											<td>
												<img src="{{ asset('assets/images/icon5.png') }}" alt="">
												0.00000051
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-menu-area">
						<ul class="nav nav-lend mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" href="{{ url('result') }}">More Results</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> 
	<!-- Latest Activities Area End -->

	<!-- Lottery Staticstics Area Start -->
	<section class="lottery-area" style="padding:0">
		<div class="daily-lottery" style="padding: 50px 0px 50px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="draw-time">
							<h5 class="subtitle">
								Lottery Draw Starts In:
							</h5>
							<div class="draw-counter">
								<div>Iklan</div>
							</div>
							<p class="text">
								To meet Today's challenges
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Lottery Staticstics  Area End -->
@endsection

@section('footer')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
	
	var owl = $('.game-slider');
	owl.owlCarousel({
		autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		loop:true,	
	});

</script>
@endsection