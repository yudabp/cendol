@extends('layouts.main')

@section('title', 'FAQ')

@section('content')
	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area bc-faq">
		<img class="bc-img" src="assets/images/breadcrumb/faq.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title">
						Faq
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
							<a href="faq.html">Faq</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

	<!-- faq-section start -->
	<section class="faq-section">
		<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading">
							<h5 class="subtitle">
									Got any Question 
							</h5>
							<h2 class="title">
									We've answers
							</h2>
							<p class="text">
									It’s up to the competition in features, with some unique 
									advantages.All the latest crypto games.Here are some of them.
							</p>
						</div>
					</div>
				</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="faq-wrapper">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					<a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">Cryptogames</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="banking-tab" data-toggle="tab" href="#banking" role="tab" aria-controls="banking" aria-selected="false">banking</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="winning-tab" data-toggle="tab" href="#winning" role="tab" aria-controls="winning" aria-selected="false">winning</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="true">results & alerts</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About JeUgo</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">general</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
					<div class="accordion sorteo-accordion" id="accordionExample">
						<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-question"></i> What is the meaning of business with example?</button>
							</h2>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-question"></i> What is a business simple definition?</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-question"></i> how to payment?</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingFour">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-question"></i> why we are best for digital agency</button>
							</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="banking" role="tabpanel" aria-labelledby="banking-tab">
					<div class="accordion sorteo-accordion" id="accordionExample2">
						<div class="card">
						<div class="card-header" id="headingFive">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><i class="fa fa-question"></i> What is the meaning of business with example?</button>
							</h2>
						</div>
						<div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample2">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingSix">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fa fa-question"></i> What is a business simple definition?</button>
							</h2>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="winning" role="tabpanel" aria-labelledby="winning-tab">
					<div class="accordion sorteo-accordion" id="accordionExample3">
						<div class="card">
						<div class="card-header" id="headingSeven">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"><i class="fa fa-question"></i> What is the meaning of business with example?</button>
							</h2>
						</div>
						<div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample3">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingEight">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="fa fa-question"></i> What is a business simple definition?</button>
							</h2>
						</div>
						<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample3">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="tab-pane fade show active" id="results" role="tabpanel" aria-labelledby="results-tab">
					<div class="accordion sorteo-accordion" id="accordionExample4">
						<div class="card">
						<div class="card-header" id="headingNine">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><i class="fa fa-question"></i>What are lottery results alerts?</button>
							</h2>
						</div>
						<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample4">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="headingTen">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><i class="fa fa-question"></i>What are jackpot alerts?</button>
							</h2>
						</div>
						<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample4">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="heading11">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11"><i class="fa fa-question"></i>How do I sign up to receive SMS winning alerts?</button>
							</h2>
						</div>
						<div id="collapse11" class="collapse show" aria-labelledby="heading11" data-parent="#accordionExample4">
							<div class="card-body">
							<p>To subscribe to FREE SMS winning alerts, please fill in your mobile phone number in the 'SMS Number' field in the Notification settings and save the changes. To unsubscribe, please uncheck the box next to the 'SMS Number' field and save the changes.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="heading12">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12"><i class="fa fa-question"></i>When are lottery results updated on the site?</button>
							</h2>
						</div>
						<div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample4">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="heading13">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13"><i class="fa fa-question"></i>How do I read the lottery results?</button>
							</h2>
						</div>
						<div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample4">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
					<div class="accordion sorteo-accordion" id="accordionExample5">
						<div class="card">
						<div class="card-header" id="heading14">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14"><i class="fa fa-question"></i> What is the meaning of business with example?</button>
							</h2>
						</div>
						<div id="collapse14" class="collapse show" aria-labelledby="heading14" data-parent="#accordionExample5">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="heading15">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15"><i class="fa fa-question"></i> What is a business simple definition?</button>
							</h2>
						</div>
						<div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample5">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
					<div class="accordion sorteo-accordion" id="accordionExample6">
						<div class="card">
						<div class="card-header" id="heading16">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16"><i class="fa fa-question"></i>What is the meaning of business with example?</button>
							</h2>
						</div>
						<div id="collapse16" class="collapse show" aria-labelledby="heading16" data-parent="#accordionExample6">
							<div class="card-body">
							<p>scelerisque consectetuer ac a at nunc, in lectus. Ut lectus erat. Sit praesent tellus, ac eget pede risus, urna ante nec tincidunt vel, tincidunt tortor sit lacinia. Enim massa in, porttitor felis justo, aenean habitant velit nunc, maecenas eget magna viverra imperdiet magna tincidunt. Lacinia eleifend luctus ante fermentum, lectus faucibus mi id, orci congue, amet donec erat nisl vestibulum. Ut ac luctus semper curabitur ipsum, odio pretium nec interdum tellus urna.</p>
							</div>
						</div>
						</div>
						<div class="card">
						<div class="card-header" id="heading17">
							<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17"><i class="fa fa-question"></i> What is a business simple definition?</button>
							</h2>
						</div>
						<div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample6">
							<div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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
	<!-- faq-section end -->

	@endsection