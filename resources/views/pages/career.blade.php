@extends('layouts.master') 

@section('title', 'Career')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Careers</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>Hungry to make a difference? There's always room at our table. Pull up a seat.</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>
<div id="content" role="main">
	<div class="whitebg-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h3>Together we win</h3>
					<p style="color: black">We&#8217;re on the Ride of Our Lives</p>
					<p style="color: black">We love good food and we want to share that love. That, more than anything, motivates us to dream big every day, coming
						up with the ideas that will shape the future of food delivery.</p>
					<p style="color: black">If you&#8217;re passionate about good food and great work, you&#8217;re in the right place.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="steps">
						<ul class="row" role="tablist">
							<li role="presentation" class="active col-xs-6 col-sm-3 text-center active">
								<a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">
									<img src="/img/icon_whoweare_2.jpg" style="height: 120px;">
									<h4>Work with us</h4>
								</a>
							</li>
							<li role="presentation" class="col-xs-6 col-sm-3 text-center">
								<a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">
									<img src="/img/icon_people.jpg" style="height: 120px;">
									<h4>Meet our people</h4>
								</a>
							</li>
							<li role="presentation" class="col-xs-6 col-sm-3 text-center">
								<a href="#step3" aria-controls="step3" role="tab" data-toggle="tab">
									<img src="/img/icon_foodoras_world.jpg" style="height: 120px;">
									<h4>Discover our world</h4>
								</a>
							</li>
							<li role="presentation" class="col-xs-6 col-sm-3 text-center">
								<a href="#step4" aria-controls="step4" role="tab" data-toggle="tab">
									<img src="/img/icon_whoweare_1.jpg" style="height: 120px;">
									<h4>Our events</h4>
								</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content row">
							<div role="tabpanel" class="tab-pane active col-xs-12 col-sm-6 col-sm-offset-3 text-center in fade" id="step1" style="color: black">
								We Grow Together
								<br> When you succeed, we succeed. We're always here to help you take your skills to the next level.
							</div>
							<div role="tabpanel" class="tab-pane col-xs-12 col-sm-6 col-sm-offset-3 text-center fade" id="step2" style="color: black">
								Drawn from Everywhere
								<br> Our offices are creative and diverse. Get ready to meet some of the best people ever.
							</div>
							<div role="tabpanel" class="tab-pane col-xs-12 col-sm-6 col-sm-offset-3 text-center fade" id="step3" style="color: black">
								Welcome to Our World
								<br> With our vast and ever increasing status, you will be working with a fast growing community in the Business World..
							</div>
							<div role="tabpanel" class="tab-pane col-xs-12 col-sm-6 col-sm-offset-3 text-center fade" id="step4" style="color: black">
								Fun and Games
								<br>We enjoy our work, but we also unwind together with awesome team events, parties and trips.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
</div>
</div>
<!-- /.row -->
</div>
</div>
<div class="rider-section" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 careers-content">
				<h3>Become a delivero</h3>
				<p>Ride with Us
					<br /> Flexible hours. Competitive pay. It&#8217;s exercise. It&#8217;s fitness. Most of all, it&#8217;s incredibly fun.
					<br
					/> Become a delivero today and join our brilliant team.</p>
				<p>
					<a href="#">
						<button class="btn btn-default" type="submit">Jobs on the road</button>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="darkerbg-container">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 careers-content">
				<h3>Our Blog</h3>
				<p style="color:black;">Learn more about our tech team: how they work together, what they work on, and how you can work with them</p>
				<a href="/blog">
					<button class="btn btn-default" type="button">Read Our Blog</button>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="featurebg-container">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 careers-content">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<h3>Current Job Openings</h3>
						<p>Work with Us</p>
						<p>We&#8217;re drawing on talent from all around the world to continue changing food delivery forever. We want you to
							join us.</p>
						<p>
							<a href="/careers/listing">
								<button class="btn btn-white pull-left" type="submit">Check out our offers</button>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
</div>
<!-- /.row -->
</div>
</div>

@endsection