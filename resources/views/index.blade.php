@extends('layouts.main')

@section('title', 'Home')

@section('content')

	<!-- Featured Game Area Start -->
	<section class="featured-game"  style="height: 700px;">

		<div class="container" style="position:relative;top:180px;max-width:2000px;">
			<div class="row justify-content-center pt-20">
				<div class="col-lg-12 d-flex align-self-center">
					<!-- <div class="section-heading">
						<h5 class="subtitle">
								Try to check out our
						</h5> 
						<h2 class="title">
								featured games
						</h2>
						<p class="text">
								Check out our latest featured game! To meet today's challenges & earn cryptocurrency. Top 10 players receive prizes every hour!
						</p>
					</div> -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex align-self-center">
					<div class="game-slider">
						<div class="item">
							<div class="single-game">
								<img src="{{ asset('assets/images/game/icon1.png') }}" alt="">
								<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('assets/images/game/icon2.png') }}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('assets/images/game/icon3.png') }}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('assets/images/game/icon2.png') }}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Featured Game Area	End -->

	<!-- Hero Area Start -->
	<!-- <div class="hero-area" style="padding:50px;">
		<div class="container">
			<div class="row">
				<div class="col-1"></div></div>
			</div>
		</div>
	</div> -->
	<!-- Hero Area End -->

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
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading">
							<h5 class="subtitle">
								Try to check out our
							</h5>
							<h2 class="title">
								Iklan
							</h2>
							<p class="text">
								We update our site regularly; more and more winners are added every day! To locate the most recent winner's information
							</p>
						</div>
					</div>
				</div>
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
		<!-- Fun fact Area Start -->
		<div class="funfact">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('assets/images/funfact/icon1.png') }}" alt="">
							<div class="count-area">
								<div class="count">93K</div>
							</div>
							<p>
									Players
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('assets/images/funfact/icon2.png') }}" alt="">
							<div class="count-area">
								<div class="count">99+</div>
							</div>
							<p>
									Games
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('assets/images/funfact/icon3.png') }}" alt="">
							<div class="count-area">
								<div class="count">70+</div>
							</div>
							<p>
									Winners
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fun fact Area End -->
	</section> 
	<!-- Latest Activities Area End -->

	<!-- Lottery Staticstics Area Start -->
	<section class="lottery-area" style="padding:0">
		<div class="daily-lottery" style="padding: 50px 0px 50px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading">
							<h5 class="subtitle">
								Try to check out our
							</h5>
							<h2 class="title">
								Iklan
							</h2>
							<p class="text">
								We update our site regularly; more and more winners are added every day! To locate the most recent winner's information
							</p>
						</div>
					</div>
				</div>
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

	<!-- Get Start Area Start -->
	 <section class="get-start">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 d-flex align-self-center">
					<div class="left-area">
						<div class="section-heading">
							<h5 class="subtitle">
								every day lots of  wins
							</h5>
							<h2 class="title ">
									be one of them
							</h2>
							<p class="text">
									Get started in less than 5 min - no credit card 
									required.Gain early access to Dooplo and  experience crypto like never before. 
							</p>
							<a href="#" class="mybtn1">Play  Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="right-image">
						<img src="{{ asset('assets/images/get-start.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section> 
	<!-- Get Start Area End -->

	<!-- Recent Winners Area Start -->
	<section class="recent-winners">
			<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10">
							<div class="section-heading">
								<h5 class="subtitle">
									Try to Check out our
								</h5>
								<h2 class="title">
										Recent Winners
								</h2>
								<p class="text">
									We update our site regularly; more and more winners are added every day! To locate the most recent winner's information
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Leroy Roy 
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('assets/images/icon2.png') }}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Jeff Mack
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('assets/images/icon2.png') }}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Neal Morris
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('assets/images/icon2.png') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-xl-center">
							<a class="mybtn2" href="#">View All </a>
						</div>
					</div>
			</div>
		</section> 
	<!-- Recent Winners Area End -->
	
@endsection

@section('footer')
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