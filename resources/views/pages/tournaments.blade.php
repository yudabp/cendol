@extends('layouts.main')

@section('title', 'Tournaments')

@section('content')

	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area bc-tournaments">
		<img class="bc-img" src="assets/images/breadcrumb/tournaments.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title">
						Tournaments
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
							<a href="tournaments.html">Tournaments</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->


	<!-- Tournaments Area Start -->
	<section class="tournaments">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h5 class="subtitle">
							Try to check out our
						</h5>
						<h2 class="title">
							Tournaments!
						</h2>
						<p class="text">
							Dooplo Tournaments are exciting slot competitions. The goal is to win as many points within a
							certain amount of time. Player with the most points at the end wins.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="tournament-time-box">
						<div class="top-area">
							<div class="status">
								In Progress
							</div>
							<h4 class="title">
								All Players (Excl VIP's)
							</h4>
							<p class="sub-title">
								Slots Tournament
							</p>
						</div>
						<div class="timer-area">
							<h4 class="title">
								Ending in
							</h4>
							<div class="clock"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="tournament-time-box">
						<div class="top-area">
							<div class="status">
								In Progress
							</div>
							<h4 class="title">
								VIP Only
							</h4>
							<p class="sub-title">
								Slots Tournament
							</p>
						</div>
						<div class="timer-area">
							<h4 class="title">
								Ending in
							</h4>
							<div class="clock2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="info-table">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-box">
							<div class="main-header-area">
								<ul class="nav" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-all-player-tab" data-toggle="pill"
											href="#pills-all-player" role="tab" aria-controls="pills-all-player"
											aria-selected="true">All Player</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-vip-only-tab" data-toggle="pill"
											href="#pills-vip-only" role="tab" aria-controls="pills-vip-only"
											aria-selected="false">Vip Only</a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="pills-all-player" role="tabpanel"
									aria-labelledby="pills-all-player-tab">
									<div class="inner-table-content">
										<div class="header-area">
											<ul class="nav" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="pills-leaderboardr-tab"
														data-toggle="pill" href="#pills-leaderboardr" role="tab"
														aria-controls="pills-leaderboardr"
														aria-selected="true">Leaderboard</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-more-info-tab" data-toggle="pill"
														href="#pills-more-info" role="tab"
														aria-controls="pills-more-info" aria-selected="false">More
														Info</a>
												</li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade show active" id="pills-leaderboardr"
												role="tabpanel" aria-labelledby="pills-leaderboardr-tab">

												<div class="inner-table">
													<div class="responsive-table">
														<table class="table">
															<thead>
																<tr>
																	<th scope="col">USER</th>
																	<th scope="col">Place</th>
																	<th scope="col">Points</th>
																	<th scope="col">Prize</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/images/people/p1.png" alt="">
																		Tom Bass
																	</td>
																	<td>
																		01
																	</td>
																	<td>
																		33528.36
																	</td>
																	<td>
																		40 EUR X 30WR
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="pills-more-info" role="tabpanel"
												aria-labelledby="pills-more-info-tab">
												<div class="info-content">
													<div class="info-box">
														<h4 class="title">
																Tournament Duration
														</h4>
														<p class="text">
																7 Days (Monday 00:01 UTC - Sunday 23:59 UTC)
														</p>
													</div>
													<div class="info-box two">
														<h4 class="title">
																Applicable Games
														</h4>
														<p class="text">
																All Games Under 'Slots' Category
														</p>
													</div>
													<div class="info-box three">
														<h4 class="title">
																Free Spin Reward Games

														</h4>
														<p class="text">
																Book Of Pyramids, Brave Viking, Desert Treasure, Hawaii Cocktails, Lucky Blue, Lucky Lady Clover, Lucky Sweets,
																Princess Of Sky, Princess Royal, Scroll Of Adventure, Slotomon Go, West Town Any Softswiss Slots Game | Wager x 40 times
														</p>
													</div>
													<a href="#" class="mybtn1">Terms and Conditions</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-vip-only" role="tabpanel"
									aria-labelledby="pills-vip-only-tab">
									<div class="inner-table-content">
											<div class="header-area">
												<ul class="nav" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="pills-leaderboardr-vip-tab"
															data-toggle="pill" href="#pills-leaderboardr-vip" role="tab"
															aria-controls="pills-leaderboardr-vip"
															aria-selected="true">Leaderboard</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="pills-more-info-vip-tab" data-toggle="pill"
															href="#pills-more-info-vip" role="tab"
															aria-controls="pills-more-info-vip" aria-selected="false">More
															Info</a>
													</li>
												</ul>
											</div>
											<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="pills-leaderboardr-vip"
													role="tabpanel" aria-labelledby="pills-leaderboardr-vip-tab">
	
													<div class="inner-table">
														<div class="responsive-table">
															<table class="table">
																<thead>
																	<tr>
																		<th scope="col">USER</th>
																		<th scope="col">Place</th>
																		<th scope="col">Points</th>
																		<th scope="col">Prize</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/images/people/p1.png" alt="">
																			Tom Bass
																		</td>
																		<td>
																			01
																		</td>
																		<td>
																			33528.36
																		</td>
																		<td>
																			40 EUR X 30WR
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-more-info-vip" role="tabpanel"
													aria-labelledby="pills-more-info-vip-tab">
													<div class="info-content">
														<div class="info-box">
															<h4 class="title">
																	Tournament Duration
															</h4>
															<p class="text">
																	7 Days (Monday 00:01 UTC - Sunday 23:59 UTC)
															</p>
														</div>
														<div class="info-box two">
															<h4 class="title">
																	Applicable Games
															</h4>
															<p class="text">
																	All Games Under 'Slots' Category
															</p>
														</div>
														<div class="info-box three">
															<h4 class="title">
																	Free Spin Reward Games
	
															</h4>
															<p class="text">
																	Book Of Pyramids, Brave Viking, Desert Treasure, Hawaii Cocktails, Lucky Blue, Lucky Lady Clover, Lucky Sweets,
																	Princess Of Sky, Princess Royal, Scroll Of Adventure, Slotomon Go, West Town Any Softswiss Slots Game | Wager x 40 times
															</p>
														</div>
														<a href="#" class="mybtn1">Terms and Conditions</a>
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
		</div>
	</section>
	<!-- Tournaments Area End -->


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
							We update our site regularly; more and more winners are added every day! To locate the most
							recent winner's information
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
								<img src="assets/images/icon2.png" alt="">
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
								<img src="assets/images/icon2.png" alt="">
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
								<img src="assets/images/icon2.png" alt="">
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