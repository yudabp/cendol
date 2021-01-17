@extends('layouts.main')

@section('title', 'Home')


@section('header')
	<style>
		.number{
			cursor: pointer;
			width: 30px;
			height: 30px;
			font-size: 40px;
			text-align: center;
			line-height: 30px;
			display: inline-block;
			margin: 3px;
			font-weight: 600;
			color: #f9314b;
			border-radius: 50%;
		}
	</style>
@endsection

@section('content')
<div class="container-fluid" style="padding-right:0; padding-left:0;position:relative;top:100px;">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('assets/images/city1.jpg') }}" alt="First slide" style="height:560px;">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/images/city2.jpg') }}" alt="Second slide" style="height:560px;">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/images/city3.jpg') }}" alt="Third slide" style="height:560px;">
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


<!-- Lottery Staticstics Area Start -->
<section class="lottery-area" style="padding: 0;">

	<div class="daily-lottery" style="padding: 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="draw-time">
						<h5 class="subtitle">
							Lottery Draw Starts In:
						</h5>
						<div class="draw-counter">
							<div data-countdown="2021/12/15"></div>
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


<!-- Lottery Staticstics Area Start -->
<section class="lottery-area" style="padding:0">
	<div class="daily-lottery" style="padding: 50px 0px 50px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="carousel1" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-1.jpg') }}" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-2.jpg') }}" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-3.jpg') }}" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Lottery Staticstics  Area End -->

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
											<img src="{{ asset('assets\images\1.png') }}" alt="" style="height:90px;">
										</div>
										<div class="content">
											<ul class="number-list">
												<li>1</li>
												<li>6</li>
												<li>4</li>
												<li>5</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="single-feature">
										<div class="icon two">
											 <img src="{{ asset('assets\images\2.png') }}" alt="" style="height:90px;">
										</div>
										<div class="content">
											<ul class="number-list">
												<li>1</li>
												<li>2</li>
												<li>7</li>
												<li>5</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="single-feature">
										<div class="icon three">
											<img src="{{ asset('assets\images\3.png') }}" alt="" style="height:90px;">
										</div>
										<div class="content">
											<ul class="number-list">
												<li>1</li>
												<li>9</li>
												<li>4</li>
												<li>5</li>
											</ul>
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
					<div id="carousel2" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-1.jpg') }}" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-2.jpg') }}" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('assets/images/card-img-3.jpg') }}" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Lottery Staticstics  Area End -->
@endsection

@section('footer')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
	$('.slide').carousel({
		keyboard: true,
		interval: 2500,
		ride: "carousel"
	});
</script>
@endsection