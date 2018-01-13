@extends('layouts.master') 

@section('title', 'About') 

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>About us</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>For us, We don't only bring good food from your favourite restautants. We ensure we make a connection, which is why we
					make sure that your meals will arrive fresh, secured and full of flavour. Try us!</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>
<div id="content" role="main">
	<div class="whitebg-container section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h3 class="text-center">How it works</h3>
					<!-- Nav tabs -->
					<div class="steps">
						<ul class="row">
							<li class="active col-xs-4 text-center active">
								<a href="#step1" data-toggle="tab">
									<br />
									<img src="/img/icon_order.jpg" alt="order" style="height: 80px;" />
								</a>
								</p>
								<h4>Order</h4>
							</li>
							<li class="col-xs-4 text-center">
								<a href="#step2" data-toggle="tab">
									<br />
									<img src="/img/icon_lean.jpg" alt="relax" style="height: 80px;" />
								</a>
								</p>
								<h4>Relax</h4>
							</li>
							<li class="col-xs-4 text-center">
								<a href="#step3" data-toggle="tab">
									<br />
									<img src="/img/icon_enjoy.jpg" alt="enjoy" style="height: 80px;" />
								</a>
								</p>
								<h4>Enjoy</h4>
							</li>
						</ul>
						<p>
							<!-- Tab panes -->
						</p>
						<div class="tab-content row">
							<div id="step1" class="tab-pane active col-xs-12 col-sm-6 col-sm-offset-3 text-center in fade" style="color: black;">Discover restaurants around you and order their tasty meals right to you.</div>
							<div id="step2" class="tab-pane col-xs-12 col-sm-6 col-sm-offset-3 text-center fade" style="color: black;">Sit back and relax as the restaurant prepares your order.</div>
							<div id="step3" class="tab-pane col-xs-12 col-sm-6 col-sm-offset-3 text-center fade" style="color: black;">Our delivery heroes picks up your order and brings it to you. Enjoy!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="featurebg-container section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h3 style="text-align: center">What we Stand For</h3>
					<p>
						<p>Our mission is to establish an online food delivery business that will connect restaurants, hawker stalls and food
							centers to a wide range of consumers within a particular region at affordable prices.</p>
						<p>Our vision is to become the largest online food delivery platform in Nigeria. Personal waiter aims not to be only a
							great food delivery platform, but also deliver efficient and superior services to customers.</p>
						<p>We add amazing value. That means we don't just deliver--we bring it, always going the extra mile to make your experience
							memorable</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection